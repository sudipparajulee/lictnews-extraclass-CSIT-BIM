<?php include 'header.php'; 
$qry = "SELECT * FROM categories ORDER BY priority ASC";
include 'dbconnection.php';
$result = mysqli_query($conn, $qry);
?>
    <h1 class="font-bold text-3xl">Categories</h1>
    <hr class="h-1 bg-red-600">
    
    <div class="flex justify-end my-5">
        <a href="createcategory.php" class="bg-blue-800 text-white px-3 py-2 rounded-lg">Add Category</a>
    </div>

    <table class="w-full">
        <tr class="bg-gray-200">
            <th class="border border-gray-300 p-2">Order</th>
            <th class="border border-gray-300 p-2">Category Name</th>
            <th class="border border-gray-300 p-2">Action</th>
        </tr>
        <?php
        while($row = mysqli_fetch_assoc($result))
        {
        ?>
        <tr class="text-center">
            <td class="border p-2"><?php echo $row['priority']; ?></td>
            <td class="border p-2"><?php echo $row['name']; ?></td>
            <td class="border p-2"> 
                <a href="editcategory.php?id=<?php echo $row['id'];?>" class="bg-blue-700 text-white px-3 py-1 mx-0.5 rounded">Edit</a>
                <a href="actioncategory.php?deleteid=<?php echo $row['id'];?>" class="bg-red-700 text-white px-3 py-1 mx-0.5 rounded" onclick="return confirm('Are you sure to Delete?')">Delete</a>
            </td>
        </tr>
        <?php
        }
        ?>
        
    </table>
<?php include 'footer.php'; ?>