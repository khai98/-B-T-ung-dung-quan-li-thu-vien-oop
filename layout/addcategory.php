<?php
include '../category/category.php';
if (isset($_POST['categoryName'])) {
    if ($_SERVER['REQUEST_METHOD'] = 'post') {
        $categoryName = $_POST['categoryName'];
        header('Location: html.php');
        $addCategories = new Category();
        $addCategories = $addCategories->addCategories($categoryName);
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="col-md-12">
        <!--  header-->
        <h1>Library Manager</h1>
    </div>
    <div class="col-md-12">
        <!-- menu-->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Home</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Book</a></li>
                    <li><a href="#">Reader</a></li>
                    <li><a href="#">BorrowOrder</a></li>
                    <li><a href="#">Auther</a></li>
                    <li><a href="#">Category</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="col-md-12">
        <!-- listkind -->
        <p style="color: chocolate; margin-left: 10px; font-size: 30px;"> Edit category</p>
        <form method="post">
            <ul>
                <li> Code <input name="code" type="text" size="30" style="margin-left: 62px; margin-bottom: 10px;"/></li>
                <li> Category name : <input name="categoryName" type="text" size="30"/></li>
            </ul>
            <p><input type="submit" value="submit"/></p>
        </form>
    </div>
</div>
</body>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>