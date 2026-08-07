async function loadProducts(id_category) {
    var answer = await fetch("index.php?action=products&category="+id_category);
    var answerText = await answer.text();
    console.log(answer);
    document.getElementById("products").innerHTML = answerText;
}