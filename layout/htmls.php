<?php
include '../category/category.php';
$categories = new Category();
$categories = $categories->getCategories();

?>
<div class="container">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/js.js"></script>

    <h1>Library Manager</h1>
    <div class="col-md-12">
        <!-- menu-->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="book.php">Book</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Categories List</a></li>
                    <li><a href="#">Reader</a></li>
                    <li><a href="#">BorrowOrder</a></li>
                    <li><a href="#">Auther</a></li>
                    <li><a href="#">Category</a></li>
                </ul>
            </div>
        </nav>
        <!--for demo wrap-->
        <h1>Categories List</h1>
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                <tr>
                    <th>code</th>
                    <th>Category name</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                <?php foreach ($categories as $category) : ?>
                    <tr>
                        <td><?php echo $category['idcategory'] ?></td>
                        <td><?php echo $category['name'] ?></td>
                        <td><a href="update.php?id=<?php echo $category['idcategory'] ?>">Update</a></td>
                        <td><a onclick="return confirm('bạn có muốn xóa không ? có thì OK không thì cancel ! ')"
                               href="delete.php?id=<?php echo $category['idcategory'] ?>">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
                </thead>
            </table>
            <a href="addcategory.php"><p style="text-align: center">Add New Categories</p></a>
        </div>
    </div>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</div>