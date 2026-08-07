async function emptyCart() {
    try {
        await fetch('index.php?action=empty-cart');
        window.location.reload();
    } catch (error) {
        console.error('Error al vaciar el carrito:', error);
    }
}

async function deleteProductCart(product_id) {
    try {
        await fetch('index.php?action=delete-product-cart&product=' + product_id);
        window.location.reload();
    } catch (error) {
        console.error('Error al eliminar el producto:', error);
    }
}

async function updateProductQuantity(product_id, new_quantity) {
    try {
        await fetch('index.php?action=modify-product-cart&product=' + product_id + '&quantity=' + new_quantity);
        window.location.reload();
    } catch (error) {
        console.error('Error al modificar el producto:', error);
    }
}
