<?php include 'header.php'; 
$qry = "SELECT * FROM news ORDER BY news_date DESC LIMIT 4";
include 'admin/dbconnection.php';
$result = mysqli_query($conn,$qry);
?>
    <img src="https://nepalserofero.com/img/ads/b_1695966419.gif" alt="" class="w-full">
    

    <div class="px-24 py-10">
        <h1 class="font-bold text-3xl border-l-4 pl-2 border-blue-400">Latest News</h1>
        <div class="grid grid-cols-4 gap-10 py-10">
            <?php 
            while($row = mysqli_fetch_assoc($result))
            { ?>
            <a href="viewnews.php?id=<?php echo $row['id'];?>" class="p-2 shadow rounded-lg bg-gray-100">
                <img src="uploads/<?php echo $row['photopath'];?>" alt="" class="h-44 w-full object-cover">
                <h1 class="font-bold text-lg"><?php echo $row['title']; ?></h1>
                <p class="text-sm line-clamp-3"><?php echo $row['description']; ?></p>
            </a>
            <?php } ?>
        </div>
    </div>

<?php include 'footer.php'; ?>