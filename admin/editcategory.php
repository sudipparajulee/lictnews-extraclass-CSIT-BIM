<?php include 'header.php'; 
$id = $_GET['id'];
$qry = "SELECT * FROM categories WHERE id = $id";
include 'dbconnection.php';
$result = mysqli_query($conn, $qry);
$row = mysqli_fetch_assoc($result);
?>
    <h1 class="font-bold text-3xl">Edit Category</h1>
    <hr class="h-1 bg-red-600">

    <form action="actioncategory.php" method="POST" class="mt-5">
        <input type="number" name="priority" value="<?php echo $row['priority']; ?>" placeholder="Enter Priority" class="w-full p-2 my-2 border border-gray-400 rounded-lg">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="text" name="name" value="<?php echo $row['name']; ?>" placeholder="Enter Category Name" class="w-full p-2 my-2 border border-gray-400 rounded-lg">
        <div class="flex mt-4 justify-center gap-4">
            <button type="submit" name="update" class="p-2 px-5 bg-blue-600 text-white rounded-lg">Update Category</button>
            <a href="category.php" class="p-2 px-8 bg-red-600 text-white rounded-lg">Cancel</a>
        </div>
    </form>
<?php include 'footer.php'; ?>