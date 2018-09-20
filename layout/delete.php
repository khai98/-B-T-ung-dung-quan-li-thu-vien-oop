<?php

require '../category/category.php';
if ($_GET['id']) {
    $id = $_GET['id'];
    header("Location: htmls.php");
}
$delete = new Category();
$delete = $delete->delete($id);
?>


