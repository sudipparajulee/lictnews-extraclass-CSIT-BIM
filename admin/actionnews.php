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

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $category_id = $_POST['category_id'];
    $news_date = $_POST['news_date'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $oldpath = $_POST['oldpath'];
    $file = $_FILES['photopath']['name'];
    $tmp_name = $_FILES['photopath']['tmp_name'];

    if($file)
    {
        // File upload
        $target_dir = "../uploads/";
        $filename = time().'_'.$file;
        unlink($target_dir.$oldpath);

        //move file to directory
        move_uploaded_file($tmp_name, $target_dir.$filename);
    }
    else
    {
        $filename = $oldpath;
    }

    $qry = "UPDATE news SET title='$title',description='$description',category_id='$category_id',news_date='$news_date',photopath='$filename' WHERE id = $id";

    include 'dbconnection.php';

    $result = mysqli_query($conn, $qry);

    if($result)
    {
        echo "<script>alert('News Updated Successfully');
        window.location='news.php';
        </script>";
    }
    else
    {
        echo "<script>alert('Failed to Update News');
        window.location='news.php';
        </script>";
    }
}

if(isset($_GET['deleteid']))
{
    $id = $_GET['deleteid'];
    $qry = "SELECT photopath FROM news WHERE id = $id";
    include 'dbconnection.php';
    $result = mysqli_query($conn, $qry);
    $row = mysqli_fetch_assoc($result);
    $path = $row['photopath'];
    $qry = "DELETE FROM news WHERE id = $id";
    $result = mysqli_query($conn, $qry);
    if($result)
    {
        unlink("../uploads/".$path);
        echo "<script>alert('News Deleted Successfully');
        window.location='news.php';
        </script>";
    }
    else
    {
        echo "<script>alert('Failed to Delete News');
        window.location='news.php';
        </script>";
    }
}