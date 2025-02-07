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

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $priority = $_POST['priority'];
    $name = $_POST['name'];

    $qry = "UPDATE categories SET priority = '$priority', name = '$name' WHERE id = $id";

    include 'dbconnection.php';
    $result = mysqli_query($conn, $qry);
    if($result)
    {
        echo '<script>alert("Category Updated Successfully"); window.location="category.php";</script>';
    }
    else
    {
        echo '<script>alert("Error on Updating Category"); window.location="category.php";</script>';
    }
}

if(isset($_GET['deleteid']))
{
    $id = $_GET['deleteid'];
    $qry = "DELETE FROM categories WHERE id = $id";
    include 'dbconnection.php';
    $result = mysqli_query($conn, $qry);
    if($result)
    {
        echo '<script>alert("Category Deleted Successfully"); window.location="category.php";</script>';
    }
    else
    {
        echo '<script>alert("Error on Deleting Category"); window.location="category.php";</script>';
    }
}