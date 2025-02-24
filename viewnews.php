<?php include 'header.php'; 
$newsid = $_GET['id'];
$qry = "SELECT * FROM news WHERE id = $newsid";
include 'admin/dbconnection.php';
$result = mysqli_query($conn,$qry);
$row = mysqli_fetch_assoc($result);
$catid = $row['category_id'];
$qryrelated = "SELECT * FROM news WHERE category_id= $catid AND id != $newsid ORDER BY news_date DESC LIMIT 5";
$relatednews = mysqli_query($conn,$qryrelated);
?>
<div class="px-20">
    <div class="grid grid-cols-4 gap-4">
        <div class="col-span-3 p-2">
            <img src="uploads/<?php echo $row['photopath'];?>" alt="" class="w-full">
            <h1 class="font-bold text-3xl"><?php echo $row['title'];?></h1>
            <p class="text-sm text-red-500"><?php echo $row['news_date'];?></p>
            <p class="text-justify"><?php echo $row['description'];?></p>
        </div>
        <div>
            <h1 class="font-bold text-2xl pt-2">Related News</h1>
            <hr class="border-2 border-blue-400">
            <div class="grid gap-4 mt-4">
                <?php
                while($related = mysqli_fetch_assoc($relatednews))
                {    
                ?>
                <a href="" class="p-2 shadow-sm rounded-lg bg-gray-100 flex gap-4 hover:shadow-md">
                    <img src="uploads/<?php echo $related['photopath'] ?>" alt="" class="w-20 h-20 object-cover">
                    <h1 class="font-bold text-lg"><?php echo $related['title']; ?></h1>
                </a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>