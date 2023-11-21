// Điều này chỉ là một ví dụ đơn giản, bạn cần cập nhật nó để phản ánh logic thực tế của ứng dụng của bạn.

// Dữ liệu sản phẩm (ví dụ)
const products = [
    { name: 'Product 1', price: 45, category: 'electronics', quantitySold: 100 },
    { name: 'Product 2', price: 75, category: 'clothing', quantitySold: 80 },
    // Thêm sản phẩm khác nếu cần
  ];
  
  // Hiển thị sản phẩm
  function displayProducts(products) {
    const productListElement = document.getElementById('productList');
    productListElement.innerHTML = '';
  
    products.forEach(product => {
      const productItem = document.createElement('div');
      productItem.innerHTML = `
        <p>Name: ${product.name}</p>
        <p>Price: $${product.price}</p>
        <p>Category: ${product.category}</p>
        <p>Quantity Sold: ${product.quantitySold}</p>
        <hr>
      `;
      productListElement.appendChild(productItem);
    });
  }
  
  // Lọc theo giá
  function filterByPrice(priceRange) {
    const [minPrice, maxPrice] = priceRange.split('-');
    const filteredProducts = products.filter(product => product.price >= parseInt(minPrice) && product.price <= parseInt(maxPrice));
    displayProducts(filteredProducts);
  }
  
  // Lọc theo loại sản phẩm
  function filterByCategory(category) {
    const filteredProducts = products.filter(product => product.category === category);
    displayProducts(filteredProducts);
  }
  
  // Sản phẩm bán nhiều nhất
  function findMostSoldProduct() {
    const mostSoldProduct = products.reduce((prev, current) => (prev.quantitySold > current.quantitySold) ? prev : current);
    const mostSoldProductNameElement = document.getElementById('mostSoldProductName');
    const mostSoldProductQuantityElement = document.getElementById('mostSoldProductQuantity');
  
    mostSoldProductNameElement.textContent = `Tên sản phẩm: ${mostSoldProduct.name}`;
    mostSoldProductQuantityElement.textContent = `Số lượng bán: ${mostSoldProduct.quantitySold}`;
  }
  
  // Xử lý sự kiện khi trang được tải
  document.addEventListener('DOMContentLoaded', () => {
    displayProducts(products);
    findMostSoldProduct();
  
    const priceFilterElement = document.getElementById('priceFilter');
    priceFilterElement.addEventListener('change', () => {
      filterByPrice(priceFilterElement.value);
    });
  
    const categoryFilterElement = document.getElementById('categoryFilter');
    categoryFilterElement.addEventListener('change', () => {
      filterByCategory(categoryFilterElement.value);
    });
  });