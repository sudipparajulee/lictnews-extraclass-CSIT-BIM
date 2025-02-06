<?php include 'header.php'; ?>
    <h1 class="font-bold text-3xl">Create Category</h1>
    <hr class="h-1 bg-red-600">

    <form action="actioncategory.php" method="POST" class="mt-5">
        <input type="number" name="priority" placeholder="Enter Priority" class="w-full p-2 my-2 border border-gray-400 rounded-lg">
    
        <input type="text" name="name" placeholder="Enter Category Name" class="w-full p-2 my-2 border border-gray-400 rounded-lg">
        <div class="flex mt-4 justify-center gap-4">
            <button type="submit" name="store" class="p-2 px-5 bg-blue-600 text-white rounded-lg">Add Category</button>
            <a href="category.php" class="p-2 px-8 bg-red-600 text-white rounded-lg">Cancel</a>
        </div>
    </form>
<?php include 'footer.php'; ?>