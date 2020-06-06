<?php
$password='';
$error='';
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $password=$_POST["pass"];
    $md5 = hash('md5', 'XyZzy12*_php123');
    $hash=hash('md5','XyZzy12*_'.$password );
    if (empty($_POST["who"]) || empty($_POST["pass"])){
        $error="User name and password are required";
    
    }elseif($md5 != $hash){
         $error="incorrect password";
    }else{
        header("Location: game.php?name=".urlencode($_POST['who']));
    }

}
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        h1{
            text-align:center;
        }
        div{
            text-align:center;
            margin:5%
        }
        body{
            background-color:rgba(255,209,109,0.5);
            
        }
        
    </style>
<title>Prabhat Panchal</title>
</head>
<body>
    

<h1>Please Log In</h1>
<div class="login">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<span style="color:red;"><?php echo $error;?></span><br>
<label for="name">User Name</label>
<input type="text" name="who" id ="name"><br>
<p></p>
<label for="pass">Password</label>
<input type="password" name="pass" id="pass"><br>
<p> </p>
<input type="submit" value="Log In">
<input type="reset" value="Cancel">

</form>
<p>Note:Try any random user name and password "php123".</p>
</div>
</body>
</html>