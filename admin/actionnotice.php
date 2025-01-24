<?php
if(isset($_POST['store']))
{
    $priority = $_POST['priority'];
    $title = $_POST['title'];
    $date = $_POST['date'];

    include 'dbconnection.php';

    $qry = "INSERT INTO notices(priority, title, notice_date) VALUES('$priority', '$title', '$date')";

    $result = mysqli_query($conn, $qry);

    if($result)
    {
        echo "<script>alert('Notice added successfully');
        window.location.href='notice.php';
        </script>";
    }
    else
    {
        echo "<script>alert('Failed to add notice');
        window.location.href='notice.php';
        </script>";
    }
}