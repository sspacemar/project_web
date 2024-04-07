let sizeSelected = false;

document.addEventListener('DOMContentLoaded', function () {
    const cartIcons = document.querySelectorAll('.fa-cart-shopping');

    cartIcons.forEach(icon => {
        icon.addEventListener('click', function () {
            if (sizeSelected) {
                alert('You can only select one size per order.');
                return;
            }

            addToCart(icon);
            sizeSelected = true;
        });
    });
});

function addToCart(icon) {
    const item = icon.closest('.sizes-item');
    const itemName = item.querySelector('img').alt;
    const itemPrice = item.getAttribute('data-price');

    // เพิ่มสินค้าลงในตะกร้า
    const cartItem = document.createElement('div');
    cartItem.classList.add('cart-item');
    cartItem.textContent = `${itemName} ${itemPrice}฿`;

    const myCart = document.querySelector('.my-cart');
    myCart.appendChild(cartItem);

    alert('Item added to cart!');
}