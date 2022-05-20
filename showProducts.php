<?php

require_once 'practice/14_OOP/Repository/ProductInMySQLRepository.php';

$showProduct = new \App\Repository\ProductInMySQLRepository();

$products = $showProduct->getAllProducts();
?>
<table class="table">
    <h1>Список продуктов</h1>
    <thead>
    <tr>
        <th scope="col">название</th>
        <th scope="col">цена</th>
        <th scope="col">сезон</th>
    </tr>
    </thead>
    <?php foreach ($products as $product) { ?>
        <tbody>
        <tr>
            <td><?= $product[1] ?></td>
            <td><?= $product[2] ?></td>
            <td><?= $product[3] ?></td>
            <td><a id="edit" value="<?= $product[0] ?>" href="">изменить</a></td>
            <td><a  id="del" value="<?= $product[0] ?>" style="color: red" href="">удалить</a></td>
        </tr>
        </tbody>
    <?php } ?>
</table>
