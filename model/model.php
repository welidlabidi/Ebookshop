<?php
//include_once __DIR__. '/connection.php';

class book extends connection{

   public function selectById($bookid){
       $sql = "SELECT * FROM 'products' WHERE 'bookid' = :bookid";
       $stmt = $this->pdo->prepare($sql);
       $stmt = bindValue(':bookid', $bookid);
       $stmt->execute();
       return $stmt->fetch(PDO::FETCH_ASSOC);
   }

   public function selectByPrice($price){
    $sql = "SELECT * FROM 'ebookshop.products' WHERE 'price' = :price";
    $stmt = $this->pdo->prepare($sql);
    $stmt = bindValue(':prive', $price);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
   }
}


?>