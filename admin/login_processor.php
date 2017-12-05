<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "vsoft");
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $rem = $_POST['remember'];
    $sql= mysqli_query($conn,"SELECT * FROM login WHERE username='$username' AND password='$pass'");
    $row=mysqli_fetch_assoc($sql);
    $count= mysqli_num_rows($sql);
    if($count>0){
        if(!empty( $rem)){
            setcookie("username", $_POST["username"], time()+(10*365*24*60*60));
            setcookie("password", $_POST["password"], time()+(10*365*24*60*60));
        }
        else{
            if(isset($_COOKIE["username"])){
                setcookie("username", "");
            }
            if(isset($_COOKIE["password"])){
                setcookie("password", "");
            }
        }
        $_SESSION['admin']= $row['username'];
        echo "<script>window.location.href='home.php'</script>";
    }
    else{
        echo "<script> alert('Naughty boy');  </script>";
            echo "<script>window.location.href='index.php'</script>";
    }
}?>