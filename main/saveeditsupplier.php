<?php

include('../connect.php');


$id = $_POST['memi'];
$a = $_POST['name'];
$b = $_POST['address'];
$c = $_POST['contact'];
$d = $_POST['cperson'];
$e = $_POST['note'];

$sql = "UPDATE supliers 
        SET suplier_name=?, suplier_address=?, suplier_contact=?, contact_person=?, note=?
		WHERE suplier_id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$c,$d,$e,$id));
header("location: supplier.php");

?>