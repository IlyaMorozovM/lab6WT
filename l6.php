<?php 
session_start();
//changing session values by post
if (isset($_POST['h1c'])){$_SESSION['h1c']=$_POST['h1c'];}
if (isset($_POST['bc'])){$_SESSION['bc']=$_POST['bc'];}
if (isset($_POST['bgc'])){$_SESSION['bgc']=$_POST['bgc'];}
if (isset($_POST['hf'])){$_SESSION['hf']=$_POST['hf'];}
if (isset($_POST['bf'])){$_SESSION['bf']=$_POST['bf'];}

//setting default session values
if (!isset($_SESSION['h1c'])){ $_SESSION['h1c']='#00ff00';}
if (!isset($_SESSION['bc'])){ $_SESSION['bc']='#ffff00';}
if (!isset($_SESSION['bgc'])){ $_SESSION['bgc']='#444';}
if (!isset($_SESSION['hf'])){ $_SESSION['hf']='24';}
if (!isset($_SESSION['bf'])){ $_SESSION['bf']='16';}

?>
<html>
    <head>
    <style>
body{
    background-color: <?php echo $_SESSION['bgc']?>;
    color: <?php echo $_SESSION['bc']?>;
    font-size: <?php echo $_SESSION['bf']?>pt;
}    
h1{
    color: <?php echo $_SESSION['h1c']?>;
    font-size: <?php echo $_SESSION['hf']?>pt;
}

    </style>
    </head>
    <body>
<h1>color selector</h1>    
select your color!
<form method="post" enctype='multipart/form-data' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="color" name="h1c"
           value="<?php echo $_SESSION['h1c'];?>">
    <label for="head">header color</label><br>
    <input type="color" name="bc"
           value="<?php echo $_SESSION['bc'];?>">
    <label for="head">body color</label><br>
    <input type="color" name="bgc"
           value="<?php echo $_SESSION['bgc'];?>">
    <label for="head">background color</label><br>
    <input type="number" name="hf"
           value="<?php echo $_SESSION['hf'];?>">
    <label for="head">head font size</label><br>
    <input type="number" name="bf"
           value="<?php echo $_SESSION['bf'];?>">
    <label for="head">body font size</label><br>
    <input type="submit">
</form>
    </body>
</html>
