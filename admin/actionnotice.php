<?php
if(isset($_POST['store']))
{
    $priority = $_POST['priority'];
    $title = $_POST['title'];
    $date = $_POST['date'];

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "lictnews";

    $conn = mysqli_connect($server, $username, $password, $database);

    $qry = "INSERT INTO notices(priority, title, notice_date) VALUES('$priority', '$title', '$date')";

    $result = mysqli_query($conn, $qry);

    if($result)
    {
        echo "Notice added successfully";
    }
    else
    {
        echo "Failed to add notice";
    }
}