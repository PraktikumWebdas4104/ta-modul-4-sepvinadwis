<h1>FORM LOGIN</h1>
    <form action="proses.php" method="post">  
        USERNAME = <input type="text" name="username"><br/><br/>
        PASSWORD = <input type="password" name="password"><br/><br/>
        <br/>
        <input type="submit" name="login" value="LOGIN">
    </form>
<?php 
    if (isset($_POST['login'])) {
      $useer=$_POST['username'];
      $pass=$_POST['password'];

      if ($useer=="Sepvina"&&$pass=="1998") {
        echo "LOGIN BERHASIL!!!";
?>

<?php 
    }else{
      echo "LOGIN GAGAL";
    }
  }
?>
