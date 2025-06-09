$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "admin" && $password == "admin123") {
    session_start();
    $_SESSION['admin'] = $username;
    header("location:index.php");
} else {
    echo "<script>alert('Login gagal!');history.go(-1);</script>";
}
