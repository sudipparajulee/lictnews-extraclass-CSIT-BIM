<?php
if(isset($_POST['store']))
{
    $category_id = $_POST['category_id'];
    $news_date = $_POST['news_date'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $file = $_FILES['photopath']['name'];
    $tmp_name = $_FILES['photopath']['tmp_name'];

    // File upload
    $target_dir = "../uploads/";
    $filename = time().'_'.$file;

    //move file to directory
    move_uploaded_file($tmp_name, $target_dir.$filename);

    include 'dbconnection.php';

    $qry = "INSERT INTO news(category_id,title,description,news_date,photopath) VALUES('$category_id','$title','$description','$news_date','$filename')";

    $result = mysqli_query($conn, $qry);

    if($result)
    {
        echo "<script>alert('News Added Successfully');
        window.location='news.php';
        </script>";
    }
    else
    {
        echo "<script>alert('Failed to Add News');
        window.location='news.php';
        </script>";
    }

}