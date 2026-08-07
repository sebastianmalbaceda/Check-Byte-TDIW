const cartSummaryContainer = document.getElementById('cart-summary-container');
const cartTotalSmall = document.getElementById('cart-total-small');
const viewCartButton = document.getElementById('view-cart-button');

cartSummaryContainer.addEventListener('mouseenter', () => {
    cartSummaryContainer.style.width = '250px';
    cartSummaryContainer.style.height = 'auto';

    cartTotalSmall.style.display = 'block';
    viewCartButton.style.display = 'block';
});

cartSummaryContainer.addEventListener('mouseleave', () => {
    cartSummaryContainer.style.width = '75px';
    cartSummaryContainer.style.height = '75px';

    // Ocultar el contenido adicional
    cartTotalSmall.style.display = 'none';
    viewCartButton.style.display = 'none';
});
