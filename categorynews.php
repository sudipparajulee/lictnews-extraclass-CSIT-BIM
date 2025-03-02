<?php include 'header.php'; 
$catid = $_GET['id'];
$qrycat = "SELECT * FROM categories WHERE id=$catid";
$qry = "SELECT * FROM news WHERE category_id=$catid ORDER BY news_date DESC";
include 'admin/dbconnection.php';
$resultcat = mysqli_query($conn,$qrycat);
$rowcat = mysqli_fetch_assoc($resultcat);
$result = mysqli_query($conn,$qry);
?>
    <div class="px-24 py-10">
        <h1 class="font-bold text-3xl border-l-4 pl-2 border-blue-400"><?php echo $rowcat['name'];?> News</h1>
        <div class="grid grid-cols-4 gap-10 py-10">
            <?php 
            while($row = mysqli_fetch_assoc($result))
            { ?>
            <a href="viewnews.php?id=<?php echo $row['id'] ?>" class="p-2 shadow rounded-lg bg-gray-100">
                <img src="uploads/<?php echo $row['photopath'];?>" alt="" class="h-44 w-full object-cover">
                <h1 class="font-bold text-lg"><?php echo $row['title']; ?></h1>
                <p class="text-sm line-clamp-3"><?php echo $row['description']; ?></p>
            </a>
            <?php } ?>
        </div>
    </div>

<?php include 'footer.php'; ?>