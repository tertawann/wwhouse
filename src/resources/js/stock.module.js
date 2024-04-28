class Stock {
  async getProducts() {
    const response = await fetch('http://localhost:8888/stock/products/get');
    return this.fetchData(response);
  }

  async fetchData(response) {
    if (!response.ok) {
      throw new Error(`HTTP error! status: ${response.status}`);
    }
    return response.json();
  }
}

class UI {
  constructor() {
    this.stock = new Stock();
    this.tbody = document.querySelector('[data-tbody]');
  }

  init() {
    this.renderTable();
  }

  tableTemplate(data, index) {
    return `
      <tr>
        <td>${index + 1}</td>
        <td>${data.code}</td>
        <td>${data.brandId}</td>
        <td>${data.product_name}</td>
        <td>${data.size}</td>
        <td>${data.quantity}</td>
        <td>${data.cost}</td>
        <td>${data.sale_price}</td>
        <td>${data.insert_datetime}</td>
        <td></td>
        <td>${data.userId}</td>
        <td>
          <div class="dropdown">
            <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa-solid fa-ellipsis"></i>
            </button>
            <ul class="dropdown-menu">
              <li class="dropdown-item" data-id="${data.id}" data-li-edit data-bs-toggle="modal" data-bs-target="#editModal">Edit</li>
              <li class="dropdown-item text-danger">Delete</li>
            </ul>
          </div>
        </td>
      </tr>
    `;
  }

  showContent() {
    document.querySelector('main').classList.remove('d-none');
  }

  hideSpinner() {
    document.querySelector('[data-spinner]').classList.add('d-none');
  }

  async renderTable() {
    try {
      const products = await this.stock.getProducts();
      const html = products.response.map((data, index) => this.tableTemplate(data, index)).join('');
      this.tbody.innerHTML = html;
      this.hideSpinner();
      this.showContent();
    } catch (error) {
      console.error('Error rendering table:', error);
    }
  }
}

class App {
  constructor() {
    this.ui = new UI();
    this.ui.init();
  }
}

new App();
