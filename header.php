<?php 
 $qrycat = "SELECT * FROM categories ORDER BY priority";
 include 'admin/dbconnection.php';
 $resultcat = mysqli_query($conn,$qrycat);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"
    />
</head>
<body>
    <nav class="flex justify-between items-center py-3 px-20 bg-gray-100 text-blue-800">
        <img src="https://nepalserofero.com/images/logo/logo.png" alt="logo" class="h-12">
        <div class="flex gap-4">
            <a href="index.php">Home</a>
            <?php while($rowcat = mysqli_fetch_assoc($resultcat))
            {
            ?>
            <a href="categorynews.php?id=<?php echo $rowcat['id'];?>"><?php echo $rowcat['name'];?></a>
            <?php } ?>
            <a href="login.php">Login</a>
        </div>
    </nav>