<?php
require 'function.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
 
    <link rel="stylesheet" type="text/css" href="test.css">
    <script type="text/javascript" src="test.js"></script>
    <title>Admin</title>
</head>

<body>

<div class="login-page">
    <div class="form">
        <form class="login-form " action="logincontroller.php" method="POST" >
            <h2>LOG IN</h2>
            <input type="text" name="nama" required placeholder="Username" id="user" autocomplete="off" />
            <input oninput="return formvalid()" type="password" required placeholder="Password" id="pass" autocomplete="off" name="password" />
            <img src="https://cdn2.iconfinder.com/data/icons/basic-ui-interface-v-2/32/hide-512.png"
                onclick="show()" id="showimg">
            <span id="vaild-pass"></span>
            <button type="submit">Login</button>
            <p class="message">Admin PPDI </p>
        </form>
     <!-- Menampung jika ada pesan -->
	<?php if(isset($_GET['pesan'])) {  ?>
	<label style="color:red;"><?php echo $_GET['pesan']; ?></label>
	<?php } ?>	
    </div>
</div>
 



<!--  -->

</body>

</html>