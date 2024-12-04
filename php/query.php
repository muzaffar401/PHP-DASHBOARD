<?php
include("connection.php")
?>



<?php

if (isset($_POST['AddBtn'])) {
    $name = $_POST['categoryName'];
    $imgName = $_FILES['categoryImage']['name'];
    $imgObj = $_FILES['categoryImage']['tmp_name'];
    $extension = pathinfo($imgName, PATHINFO_EXTENSION);
    $pathDirectory = "img/categories/" . $imgName;
    if ($extension == 'jpg' || $extension == 'jpeg' || $extension == 'png' || $extension == 'webp') {
        if (move_uploaded_file($imgObj, $pathDirectory)) {
            $query = $pdo->prepare('insert into categories (name,images) values (:pn,:pimg)');
            $query->bindParam('pn', $name);
            $query->bindParam('pimg', $imgName);
            $query->execute();
            echo "<script>alert('Data submitted successfully')</script>";
        }
    } else {
        echo "<script>alert('Data submitted successfully')</script>";
    }
}

?>