document.addEventListener("DOMContentLoaded", function () {
  fetchProductData();
});

function fetchProductData() {
  // Fetch product data from the server
  // ...

  // Simulated product data for demonstration
  const products = [
      { id: 1, name: "enter product name", price: "enter product price", description: "enter product description" },
    
      // Add more products as needed
  ];

  displayProducts(products);
}

function displayProducts(products) {
  const productList = document.getElementById('product-list');
  productList.innerHTML = '';

  // Create a table to display products
  const table = document.createElement('table');
  const headerRow = table.insertRow(0);

  // Create table headers
  for (const key in products[0]) {
      const header = document.createElement('th');
      header.textContent = key.charAt(0).toUpperCase() + key.slice(1); // Capitalize first letter
      headerRow.appendChild(header);
  }

  // Create table rows with product data
  products.forEach(product => {
      const row = table.insertRow(-1);

      for (const key in product) {
          const cell = row.insertCell(-1);
          cell.textContent = product[key];
      }

      // Add Edit button for each product
      const editCell = row.insertCell(-1);
      const editButton = document.createElement('button');
      editButton.textContent = 'Edit';
      editButton.addEventListener('click', function () {
          openEditModal(product);
      });
      editCell.appendChild(editButton);
  });

  productList.appendChild(table);
}

function openEditModal(product) {
  const modal = document.getElementById('editModal');
  const form = document.getElementById('editForm');
  form.innerHTML = ''; // Clear previous form fields

  for (const key in product) {
      const label = document.createElement('label');
      label.textContent = key.charAt(0).toUpperCase() + key.slice(1); // Capitalize first letter

      const input = document.createElement('input');
      input.type = 'text';
      input.value = product[key];
      input.name = key;

      form.appendChild(label);
      form.appendChild(input);
  }

  modal.style.display = 'block';

  // Close the modal if the close button is clicked
  const closeButton = document.querySelector('.close');
  closeButton.addEventListener('click', function () {
      modal.style.display = 'none';
  });

  // Close the modal if the overlay is clicked
  window.addEventListener('click', function (event) {
      if (event.target === modal) {
          modal.style.display = 'none';
      }
  });
}

function updateProduct() {
  // Implement logic to update product in the database
  // ...

  // For demonstration purposes, display a message
  alert('Product updated successfully');

  // Close the modal
  const modal = document.getElementById('editModal');
  modal.style.display = 'none';
}
