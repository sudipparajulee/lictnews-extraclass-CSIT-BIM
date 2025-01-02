<?php include 'header.php'; ?>

    <div class="w-1/2 p-4 bg-gray-100 shadow rounded-lg mx-auto my-10 text-center">
        <h1 class="font-bold text-2xl">Login</h1>
        <form action="admin/dashboard.php" class="mt-4">
            <input type="email" placeholder="Enter Email Address" class="p-2 w-full rounded-lg my-2" >
            <input type="password" placeholder="Enter Password" class="p-2 w-full rounded-lg my-2">
            <button type="submit" class="mt-2 w-1/2 bg-blue-800 text-white rounded-lg py-2">Login</button>
        </form>
    </div>

<?php include 'footer.php'; ?>