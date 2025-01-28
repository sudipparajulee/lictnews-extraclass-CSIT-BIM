<?php include 'header.php'; 
$qry = "SELECT count(id) as total_notices FROM notices";
include 'dbconnection.php';
$resultnotice = mysqli_query($conn, $qry);
$rownotice = mysqli_fetch_assoc($resultnotice);
?>
            <h1 class="font-bold text-3xl">Dashboard</h1>
            <hr class="h-1 bg-red-600">
            <div class="grid grid-cols-3 gap-5 mt-5">
                <div class="bg-green-100 p-4 shadow rounded-lg">
                    <h1 class="font-bold text-xl">Total News</h1>
                    <p class="text-4xl font-bold text-right">10</p>
                </div>
                <div class="bg-blue-100 p-4 shadow rounded-lg">
                    <h1 class="font-bold text-xl">Total Categories</h1>
                    <p class="text-4xl font-bold text-right">5</p>
                </div>
                <div class="bg-red-100 p-4 shadow rounded-lg">
                    <h1 class="font-bold text-xl">Total Notices</h1>
                    <p class="text-4xl font-bold text-right"><?php echo $rownotice['total_notices'] ?></p>
                </div>
            </div>
<?php include 'footer.php'; ?>