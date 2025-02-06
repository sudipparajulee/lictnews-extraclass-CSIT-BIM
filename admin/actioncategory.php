<?php
if(isset($_POST['store']))
{
    $priority = $_POST['priority'];
    $name = $_POST['name'];

    $sql = "INSERT INTO categories (priority, name) VALUES ('$priority', '$name')";
    include 'dbconnection.php';
    $result = mysqli_query($conn, $sql);
    if($result)
    {
        echo '<script>alert("Category Added Successfully"); window.location="category.php";</script>';
    }
    else
    {
        echo '<script>alert("Error on Adding Category"); window.location="category.php";</script>';
    }
}