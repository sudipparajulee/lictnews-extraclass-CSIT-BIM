<?php include 'header.php'; 
$qrycat = "SELECT * FROM categories ORDER BY priority";
$id = $_GET['id'];
$qry = "SELECT * FROM news WHERE id = $id";
include 'dbconnection.php';
$resultcat = mysqli_query($conn, $qrycat);
$result = mysqli_query($conn, $qry);
$row = mysqli_fetch_assoc($result);
?>
    <h1 class="font-bold text-3xl">Edit News</h1>
    <hr class="h-1 bg-red-600">

    <form action="actionnews.php" method="POST" class="mt-5" enctype="multipart/form-data">
        <select name="category_id" id="" class="w-full p-2 my-2 border border-gray-400 rounded-lg">
            <?php while($rowcat = mysqli_fetch_assoc($resultcat)){ ?>
            <option value="<?php echo $rowcat['id'];?>" 
            <?php if($row['category_id'] == $rowcat['id'])
            {
                echo "selected";
            }
            ?>
            ><?php echo $rowcat['name']; ?></option>
            <?php } ?>
        </select>
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="date" value="<?php echo $row['news_date'];?>" name="news_date" class="w-full p-2 my-2 border border-gray-400 rounded-lg">
        <input type="text" value="<?php echo $row['title']; ?>" name="title" placeholder="Enter News Title" class="w-full p-2 my-2 border border-gray-400 rounded-lg">
        <textarea name="description" id="" placeholder="Enter Description" class="w-full p-2 my-2 border border-gray-400 rounded-lg"><?php echo $row['description']; ?></textarea>
        <input type="hidden" name="oldpath" value="<?php echo $row['photopath'];?>">
        <input type="file" name="photopath" class="w-full p-2 my-2 border border-gray-400 rounded-lg">
        <p>Current Image:</p>
        <img src="../uploads/<?php echo $row['photopath']; ?>" class="h-32" alt="">
        <div class="flex mt-4 justify-center gap-4">
            <button type="submit" name="update" class="p-2 px-5 bg-blue-600 text-white rounded-lg">Update News</button>
            <a href="news.php" class="p-2 px-8 bg-red-600 text-white rounded-lg">Cancel</a>
        </div>
    </form>
<?php include 'footer.php'; ?>