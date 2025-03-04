<?php 
session_start();
if(!isset($_SESSION['login']))
{
    header('location:../login.php');
}
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
    <div class="flex">
        <div class="w-56 bg-gray-100 shadow h-screen">
            <img src="https://nepalserofero.com/images/logo/logo.png" alt="logo" class="h-12 my-10">
            <p class="pl-2 text-sm font-bold">Hi, <?php echo $_SESSION['name']; ?></p>
            <nav>
                <a href="dashboard.php" class="font-bold text-xl pl-2 border-b block border-gray-200 py-3 hover:bg-gray-200"><i class="ri-dashboard-2-line"></i> Dashboard</a>
                <a href="notice.php" class="font-bold text-xl pl-2 border-b block border-gray-200 py-3 hover:bg-gray-200"><i class="ri-megaphone-line"></i> Notices</a>
                <a href="category.php" class="font-bold text-xl pl-2 border-b block border-gray-200 py-3 hover:bg-gray-200"><i class="ri-menu-2-line"></i> Categories</a>
                <a href="news.php" class="font-bold text-xl pl-2 border-b block border-gray-200 py-3 hover:bg-gray-200"><i class="ri-news-line"></i> News</a>
                <a href="logout.php" class="font-bold text-xl pl-2 border-b block border-gray-200 py-3 hover:bg-gray-200"><i class="ri-logout-box-line"></i> Logout</a>
            </nav>
        </div>
        <div class="p-4 flex-1">