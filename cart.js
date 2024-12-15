// Fetch cart container and elements
const cartContainer = document.getElementById('cart-container');
const cartFooter = document.getElementById('cart-footer');
const cartTotal = document.getElementById('cart-total');

// Load cart items from local storage
function loadCart() {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    renderCart(cart);
}

// Render cart items
function renderCart(cart) {
    cartContainer.innerHTML = ''; // Clear existing content

    if (cart.length === 0) {
        cartContainer.innerHTML = '<p>Your cart is currently empty.</p>';
        cartFooter.classList.add('hidden');
        return;
    }

    cartFooter.classList.remove('hidden');
    let total = 0;

    cart.forEach((item, index) => {
        const cartItem = document.createElement('div');
        cartItem.className = 'cart-item';

        cartItem.innerHTML = `
            <img src="${item.image}" alt="${item.title}">
            <div class="cart-item-details">
                <h2>${item.title}</h2>
                <p><strong>Author:</strong> ${item.author}</p>
                <p><strong>Price:</strong> $${item.price.toFixed(2)}</p>
                <button class="remove-item-btn" data-index="${index}">Remove</button>
            </div>
        `;

        cartContainer.appendChild(cartItem);
        total += item.price;
    });

    cartTotal.textContent = `$${total.toFixed(2)}`;

    // Attach event listeners to "Remove" buttons
    document.querySelectorAll('.remove-item-btn').forEach(button => {
        button.addEventListener('click', removeItemFromCart);
    });
}

// Add item to cart (called from other pages)
function addToCart(book) {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart.push(book);
    localStorage.setItem('cart', JSON.stringify(cart));
    alert(`${book.title} has been added to your cart!`);
}

// Remove item from cart
function removeItemFromCart(event) {
    const index = event.target.dataset.index;
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart.splice(index, 1);
    localStorage.setItem('cart', JSON.stringify(cart));
    loadCart();
}

// Initialize cart page
loadCart();
