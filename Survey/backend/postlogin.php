<?php
$loginemail = $_POST['username'];
$loginpass = $_POST['password'];

if($loginemail == "achutharaman@gmail.com" && $loginpass == "Sma@2004")
{
    ?>
    <script>
    window.location="admin.php" 
    </script>
    <?
}

else{
    ?>
    <script>
        alert("email or password is incorrectly please try agin.")
    window.location="adminlogin.html" 
    </script>
    <?
}