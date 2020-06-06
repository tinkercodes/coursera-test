<?php
if(!isset($_GET["name"])){
    die("name parameter missing");
}


$names=array('rock','paper','scissors');
if(isset($_POST['human'])){
    $human=$_POST['human'];
}else{
$human=-1;

}
$computer=rand(0,2);
$result=check($human,$computer);
function check($human,$computer){
    if($human==$computer){
        return 'tie';
    }else{
        if($human==0){
            if($computer==1){
                return 'you lose';
            }
            else{
                return 'you win';
            }
        }
        if($human==1){
            if($computer==2){
                return 'you lose';
            }else{
                return 'you win';
            }

        }
        if($human==2){
            if($computer==0){
                return 'you lose';
            }else{
                return 'you win';
            }

        }
    }
}


?>
<!DOCTYPE html>
<html >
<head>
<title>Prabhat Panchal</title>
<style>
    body{
        background-color:rgba(255,209,109,0.5);

    }
    h1{
        text-align:center;
    }
</style>
</head>
<body>
<h1>Rock Paper Scissors</h1>
<p style="text-align:center">Welcome:
<?php
if( isset($_REQUEST['name'])){
    echo htmlentities($_REQUEST["name"]);
}
?>
</p><hr>
<form method="post" style="text-align:center" >
<label for="option">select</label>
<select name="human" id="option">
    <option value=-1>select</option>
    <option value=0>rock</option>
    <option value=1>paper</option>
    <option value=2>scissors</option>
    <option value=3>test</option>
</select>
<input type="submit" value="Play">
<a href="index.php"><input type="button" value="logout" name="logout"></a>
</form>
<pre style="text-align:center; color:red;border:1px solid black;padding:1%; background-color:rgba(255,255,255,0.3)">
<?php
if ( $human == -1 ) {
    print "Please select a strategy and press Play.\n";
} else if ( $human == 3 ) {
    for($c=0;$c<3;$c++) {
        for($h=0;$h<3;$h++) {
            $r = check($c, $h);
            print "Human=$names[$c] Computer=$names[$h] Result=$r\n";
        }
    }
} else {
    print "Your Play=$names[$human] Computer Play=$names[$computer] Result=$result\n";
}
?>
</pre>
</body>
</html>