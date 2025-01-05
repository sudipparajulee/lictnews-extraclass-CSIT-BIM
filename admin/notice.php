<?php include 'header.php'; ?>
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
        <tr class="text-center">
            <td class="border p-2">1</td>
            <td class="border p-2">This is notice</td>
            <td class="border p-2">2020-09-30</td>
            <td class="border p-2"> 
                <a href="" class="bg-blue-700 text-white px-3 py-1 mx-0.5 rounded">Edit</a>
                <a href="" class="bg-red-700 text-white px-3 py-1 mx-0.5 rounded">Delete</a>
            </td>
        </tr>
        
    </table>
<?php include 'footer.php'; ?>