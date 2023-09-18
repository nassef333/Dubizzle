<!DOCTYPE html>
<html class="no-js" lang="zxx">

    @include('user.static.head')
    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
           </div>
        </div>
    </div>
    <!-- /End Preloader -->

    @include('user.static.header')

    <div class="shopping-cart section">
        <div class="container">
            <div class="cart-list-head" id="cart-products-container">

                <div class="cart-list-title">
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-12">
                        </div>
                        <div class="col-lg-4 col-md-3 col-12">
                            <p>Product Name</p>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                            <p>Quantity</p>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                            <p>Price</p>
                        </div>
                        <div class="col-lg-1 col-md-2 col-12">
                            <p>Remove</p>
                        </div>
                    </div>
                </div>


            </div>
            <div class="row">
                <div class="col-12">

                    <div class="total-amount">
                        <div class="row">

                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="right">
                                  <ul>
                                    <li>Cart Subtotal<span id="cart-subtotal">$0.00</span></li>
                                      </ul>
                                  <div class="button">
                                    <a href="/checkout" class="btn">Checkout</a>
                                    <a href="/" class="btn btn-alt">Continue shopping</a>
                                  </div>
                                </div>
                              </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    @include('user.static.footer')

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="/assets/user//js/bootstrap.min.js"></script>
    <script src="/assets/user//js/tiny-slider.js"></script>
    <script src="/assets/user//js/glightbox.min.js"></script>
    <script src="/assets/user//js/main.js"></script>

    <script>
       // Retrieve cartItems from local storage
var cartItems = localStorage.getItem('cartItems');

// Check if cartItems exist
if (cartItems) {
  // Parse the cartItems JSON string to an array
  var products = JSON.parse(cartItems);

  // Get the container element to append the product elements
  var cartProductsContainer = document.getElementById('cart-products-container');

  // Function to update the cart subtotal
  function updateCartSubtotal() {
    // Calculate the total sum of product prices
    var totalSum = 0;

    // Loop through the products array
    for (var i = 0; i < products.length; i++) {
      var product = products[i];

      // Access the product details
      var productPrice = parseFloat(product.price);
      var productQuantity = parseInt(product.quantity);

      // Calculate the total price for the product
      var totalPrice = productPrice * productQuantity;

      // Add the total price to the total sum
      totalSum += totalPrice;
    }

    // Display the total sum in the cart subtotal
    var cartSubtotalElement = document.getElementById('cart-subtotal');
    if (cartSubtotalElement) {
      cartSubtotalElement.textContent = '$' + totalSum.toFixed(2);
    }
  }

  // Function to update the quantity and cart subtotal when a quantity is changed
  function updateQuantity(productId, newQuantity) {
    // Find the product with the given productId
    var product = products.find(function (product) {
      return product.id == productId;
    });

    // Update the product quantity if found
    if (product) {
      product.quantity = parseInt(newQuantity);

      // Save the updated products array back to local storage
      localStorage.setItem('cartItems', JSON.stringify(products));

      // Update the cart subtotal
      updateCartSubtotal();
    }
  }

  // Function to remove an item from the cart
  function removeItem(productId) {
    // Find the index of the product with the given productId
    var productIndex = products.findIndex(function (product) {
      return product.id == productId;
    });

    // Remove the product from the products array if found
    if (productIndex !== -1) {
      products.splice(productIndex, 1);

      // Save the updated products array back to local storage
      localStorage.setItem('cartItems', JSON.stringify(products));

      // Remove the product element from the HTML
      var productElement = document.querySelector(`.cart-single-list:nth-child(${productIndex + 2})`);
      if (productElement) {
        productElement.remove();
      }

      // Update the cart subtotal
      updateCartSubtotal();
    }
  }

  // Loop through the products array
  for (var i = 0; i < products.length; i++) {
    var product = products[i];

    // Access the product details
    var productId = product.id;
    var productName = product.name;
    var productImage = product.image;
    var productPrice = product.price;
    var productQuantity = product.quantity;

    // Create the product element
    var productElement = document.createElement('div');
    productElement.classList.add('cart-single-list');
    productElement.innerHTML = `
      <div class="row align-items-center">
        <div class="col-lg-1 col-md-1 col-12">
          <a href="/product/${productId}"><img src="/storage/${productImage}" alt=""></a>
        </div>
        <div class="col-lg-4 col-md-3 col-12">
          <h5 class="product-name"><a href="/product/${productId}">${productName}</a></h5>
        </div>
        <div class="col-lg-2 col-md-2 col-12">
          <div class="count-input">
            <select class="form-control" onchange="updateQuantity(${productId}, this.value)">
              <option value="1" ${productQuantity === 1 ? 'selected' : ''}>1</option>
              <option value="2" ${productQuantity === 2 ? 'selected' : ''}>2</option>
              <option value="3" ${productQuantity === 3 ? 'selected' : ''}>3</option>
              <option value="4" ${productQuantity === 4 ? 'selected' : ''}>4</option>
              <option value="5" ${productQuantity === 5 ? 'selected' : ''}>5</option>
            </select>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-12">
          <p>${productPrice}</p>
        </div>
        <div class="col-lg-1 col-md-2 col-12">
          <button class="remove-item" onclick="removeItem(${productId})"><i class="lni lni-close"></i></button>
        </div>
      </div>
    `;

    // Append the product element to the container
    cartProductsContainer.appendChild(productElement);
  }

  // Update the cart subtotal initially
  updateCartSubtotal();
} else {
  console.log('No products in the cart.');
}


    </script>




</body>

</html>
