<?php


require_once 'practice/14_OOP/Repository/ProductInMySQLRepository.php';

$editId = $_POST["editId"];

$edit = new \App\Repository\ProductInMySQLRepository();
$products = $edit->getOneSQLProduct("$editId");

$productId = null;
$productName = null;
$productPrice = null;
$productSeason = null;

foreach ($products as $product){
    $productId = $product[0];
    $productName = $product[1];
    $productPrice = $product[2];
    $productSeason = $product[3];
}
?>
<div id="update" class="close-div2">
    <form id="formUp">
        <h1>Обновить продукт</h1>
        <div class="mb-3">
            <input name="id" value="<?= $productId; ?>" type="hidden" class="form-control" id="edit_id">
        </div>
        <div class="mb-3">
            <label for="name">название</label>
            <input name="name" value="<?= $productName ?>" type="text" class="form-control" id="edit_name">
        </div>
        <div class="mb-3">
            <label for="price">цена</label>
            <input name="price" value="<?= $productPrice ?>" type="number" class="form-control" id="edit_price">
        </div>
        <div class="mb-3">
            <label for="season">сезон</label>
            <input name="season" value="<?= $productSeason ?>" type="text" class="form-control" id="edit_season">
        </div>
        <button type="submit" id="upSubmit" class="btn btn-primary">Отправить</button>
    </form>
    <script>
        document.querySelector("#upSubmit").onclick = function(){
            $( '#update' ).hide()
        }
    </script>
</div>