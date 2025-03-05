<?php
session_start();
include 'header.php'; ?>

    <div class="w-1/2 p-4 bg-gray-100 shadow rounded-lg mx-auto my-10 text-center">
        <h1 class="font-bold text-2xl">Login</h1>
        <form action="login.php" method="POST" class="mt-4">
            <input type="email" name="email" placeholder="Enter Email Address" class="p-2 w-full rounded-lg my-2" >
            <div class="relative">
                <input type="password" name="password" id="password" placeholder="Enter Password" class="p-2 w-full rounded-lg my-2">
                <i class="ri-eye-line absolute p-2 right-0 text-md top-2 bg-gray-200 rounded-r-lg cursor-pointer hidden" id="eyeon" onclick="hidepass()"></i>
                <i class="ri-eye-off-line absolute p-2 right-0 text-md top-2 bg-gray-200 rounded-r-lg cursor-pointer" id="eyeoff" onclick="showpass()"></i>

            </div>
            <button type="submit" name="login" class="mt-2 w-1/2 bg-blue-800 text-white rounded-lg py-2">Login</button>
        </form>
    </div>

    <script>
        function showpass()
        {
            document.getElementById('password').type = 'text';
            document.getElementById('eyeon').classList.remove('hidden');
            document.getElementById('eyeoff').classList.add('hidden');
        }

        function hidepass()
        {
            document.getElementById('password').type = 'password';
            document.getElementById('eyeon').classList.add('hidden');
            document.getElementById('eyeoff').classList.remove('hidden');
        }
    </script>

<?php include 'footer.php'; ?>

<?php
if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $qry = "SELECT * FROM users WHERE email='$email' AND password= md5('$password')";
    include 'admin/dbconnection.php';
    $result = mysqli_query($conn, $qry);
    if(mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['login'] = 'yes';
        $_SESSION['name'] = $row['name'];
        header('location: admin/dashboard.php');
    }
    else
    {
        echo '<script>
            alert("Invalid Login Details");
            location.history.back();
        </script>';
    }
}