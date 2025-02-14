<?php include 'header.php'; 
$qry = "SELECT news.*,categories.name as category_name FROM news INNER JOIN categories ON news.category_id = categories.id";
include 'dbconnection.php';
$result = mysqli_query($conn, $qry);
?>
    <h1 class="font-bold text-3xl">News</h1>
    <hr class="h-1 bg-red-600">
    
    <div class="flex justify-end my-5">
        <a href="createnews.php" class="bg-blue-800 text-white px-3 py-2 rounded-lg">Add News</a>
    </div>

    <table class="w-full">
        <tr class="bg-gray-200">
            <th class="border border-gray-300 p-2">News Date</th>
            <th class="border border-gray-300 p-2">Image</th>
            <th class="border border-gray-300 p-2">Title</th>
            <th class="border border-gray-300 p-2">Description</th>
            <th class="border border-gray-300 p-2">Category</th>
            <th class="border border-gray-300 p-2">Action</th>
        </tr>
        <?php
        while($row = mysqli_fetch_assoc($result))
        {
        ?>
        <tr class="text-center">
            <td class="border p-2"><?php echo $row['news_date']; ?></td>
            <td class="border p-2">
                <img src="../uploads/<?php echo $row['photopath']; ?>" alt="" class="h-20">
            </td>
            <td class="border p-2"><?php echo $row['title']; ?></td>
            <td class="border p-2"><?php echo $row['description']; ?></td>
            <td class="border p-2"><?php echo $row['category_name']; ?></td>
            <td class="border p-2"> 
                <a href="editnews.php?id=<?php echo $row['id'];?>" class="bg-blue-700 text-white px-3 py-1 mx-0.5 rounded">Edit</a>
                <a href="actionnews.php?deleteid=<?php echo $row['id'];?>" class="bg-red-700 text-white px-3 py-1 mx-0.5 rounded" onclick="return confirm('Are you sure to Delete?')">Delete</a>
            </td>
        </tr>
        <?php
        }
        ?>
        
    </table>
<?php include 'footer.php'; ?>