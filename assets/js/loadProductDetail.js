async function loadProductDetail(id_product) {
    var answer = await fetch("index.php?action=product-detail&product="+id_product);
    var answerText = await answer.text();
    console.log(answer);
    document.getElementById("products").innerHTML = answerText;
}