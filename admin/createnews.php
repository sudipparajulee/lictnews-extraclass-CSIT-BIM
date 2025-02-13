<?php include 'header.php'; 
$qrycat = "SELECT * FROM categories ORDER BY priority";
include 'dbconnection.php';
$resultcat = mysqli_query($conn, $qrycat);
?>
    <h1 class="font-bold text-3xl">Create News</h1>
    <hr class="h-1 bg-red-600">

    <form action="actionnews.php" method="POST" class="mt-5" enctype="multipart/form-data">
        <select name="category_id" id="" class="w-full p-2 my-2 border border-gray-400 rounded-lg">
            <?php while($rowcat = mysqli_fetch_assoc($resultcat)){ ?>
            <option value="<?php echo $rowcat['id'];?>"><?php echo $rowcat['name']; ?></option>
            <?php } ?>
        </select>
        <input type="date" name="news_date" class="w-full p-2 my-2 border border-gray-400 rounded-lg">
        <input type="text" name="title" placeholder="Enter News Title" class="w-full p-2 my-2 border border-gray-400 rounded-lg">
        <textarea name="description" id="" placeholder="Enter Description" class="w-full p-2 my-2 border border-gray-400 rounded-lg"></textarea>
        <input type="file" name="photopath" class="w-full p-2 my-2 border border-gray-400 rounded-lg">
        <div class="flex mt-4 justify-center gap-4">
            <button type="submit" name="store" class="p-2 px-5 bg-blue-600 text-white rounded-lg">Add News</button>
            <a href="news.php" class="p-2 px-8 bg-red-600 text-white rounded-lg">Cancel</a>
        </div>
    </form>
<?php include 'footer.php'; ?>