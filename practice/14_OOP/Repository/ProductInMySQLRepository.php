<?php

namespace App\Repository;



use PDO;

class ProductInMySQLRepository
{


    private PDO $db;
    private string $server = "mysql:dbname=db;host=127.0.0.1";
    private string $username = "root";
    private string $password = "";

    public function __construct()
    {
        $this->db = new PDO($this->server, $this->username, $this->password);
    }

    public function getAllNameProducts(): array
    {
        $arr = [];
        $allProducts = $this->db->query("SELECT `name` FROM `db2`.`products`");
        foreach ($allProducts as $productName) {
            $arr[] = $productName['name'];
        }
        return $arr;
    }

    public function getAllProducts(): bool|\PDOStatement
    {
        return $this->db->query("SELECT * FROM `db2`.`products`");
    }

    public function createProduct(string $name,int $price, string $season ): void
    {
        $this->db->query("INSERT INTO `db2`.`products` (`name`, `price`, `season`) VALUES ('$name', '$price', '$season')");
    }


    public function deleteSQLProduct(int $id): void
    {
        $this->db->query("DELETE FROM `db2`.`products` WHERE (`id` = '$id')");
    }
    public function updateSQLProduct(string $name, int $price, string $season, int $id): void
    {
        $this->db->query("UPDATE `db2`.`products` SET `name` = '$name', `price` = '$price', `season` = '$season' WHERE (`id` = '$id');");
    }

    public function getJsonProducts(): void
    {
        $query = $this->getAllProducts();
        while($row = $query->fetch()) {
            $result[] = $row;
        }
        echo json_encode($result);
    }

    public function getOneSQLProduct(int $id): bool|\PDOStatement
    {
        return $this->db->query("SELECT * FROM `db2`.`products` WHERE (`id` = '$id')");

    }
    public function getAllIdProductsSQL(): array
    {
        $arr = [];
        $allProductsId = $this->db->query("SELECT `id` FROM `db2`.`products`");
        foreach ($allProductsId as $productId) {
            $arr[] = $productId['id'];
        }
        return $arr;
    }
}
