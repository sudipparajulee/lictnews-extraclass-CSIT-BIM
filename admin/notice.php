<?php include 'header.php'; 
$qry = "SELECT * FROM notices";
include 'dbconnection.php';
$result = mysqli_query($conn, $qry);
?>
    <h1 class="font-bold text-3xl">Notices</h1>
    <hr class="h-1 bg-red-600">
    
    <div class="flex justify-end my-5">
        <a href="createnotice.php" class="bg-blue-800 text-white px-3 py-2 rounded-lg">Add Notice</a>
    </div>

    <table class="w-full">
        <tr class="bg-gray-200">
            <th class="border border-gray-300 p-2">Order</th>
            <th class="border border-gray-300 p-2">Title</th>
            <th class="border border-gray-300 p-2">Notice Date</th>
            <th class="border border-gray-300 p-2">Action</th>
        </tr>
        <?php
        while($row = mysqli_fetch_assoc($result))
        {
        ?>
        <tr class="text-center">
            <td class="border p-2"><?php echo $row['priority']; ?></td>
            <td class="border p-2"><?php echo $row['title']; ?></td>
            <td class="border p-2"><?php echo $row['notice_date']; ?></td>
            <td class="border p-2"> 
                <a href="" class="bg-blue-700 text-white px-3 py-1 mx-0.5 rounded">Edit</a>
                <a href="" class="bg-red-700 text-white px-3 py-1 mx-0.5 rounded">Delete</a>
            </td>
        </tr>
        <?php
        }
        ?>
        
    </table>
<?php include 'footer.php'; ?>