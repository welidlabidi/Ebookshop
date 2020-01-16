<?php
//include '/var/www/Ebookshop/model/connection.php';

$db = openConnection();
$select = 'SELECT photo FROM product';
$data=$db->query($select);
foreach ($data as $row){}



?>