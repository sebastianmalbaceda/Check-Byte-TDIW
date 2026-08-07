async function addToCart(button, product_id, product_name, product_image, product_price, product_quantity)
{
    const data = new URLSearchParams();
    data.append("product_id", product_id);
    data.append("product_name", product_name);
    data.append("product_image", product_image);
    data.append("product_price", product_price);
    data.append("product_quantity", product_quantity);

    const originalText = button.textContent;
    button.textContent = "Añadiendo...";
    button.disabled = true;

    try {
        const response = await fetch("index.php?action=add-to-cart", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded",
            },
            body: data.toString(),
        });

        if (!response.ok) {
            throw new Error(`Error de red: ${response.status}`);
        }

        const result = await response.json();

        if (result.status === "success") {
            button.textContent = "Añadido";
            document.getElementById("cart-total-products").textContent = result.cart_total_products;
            document.getElementById("cart-total").textContent = `${result.cart_total.toFixed(2)} €`;
        } else {
            button.textContent = "Error. Vuelve a intentar";
        }
    } catch (error) {
        console.error("Error al añadir el producto al carrito:", error);
        button.textContent = "Error. Vuelve a intentar";
    }

    setTimeout(() => {
        button.textContent = originalText;
        button.disabled = false;
    }, 2000);
}