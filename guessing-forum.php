<?php 
include"conn.php";
date_default_timezone_set("Asia/Kolkata");
session_start();
?>
<?php
$qry="select * from `game`";
$query=mysqli_query($link,$qry);
$qarr=array();
while($row=mysqli_fetch_assoc($query)){
    $arr[]=$row;
}
if(isset($_POST['login'])){
    $uname=htmlspecialchars(stripslashes(trim($_POST['uname'])));
    $password=htmlspecialchars(stripslashes(trim($_POST['pass'])));
    $pass=md5($password);
    $logqry="select * from `users` where `mobile`='$uname' and `password`='$pass'";
    $logquery=mysqli_query($link,$logqry);
    $cou=mysqli_num_rows($logquery);
    if($cou>0){
        $logrow=mysqli_fetch_assoc($logquery);
        $_SESSION['luid']=$logrow['id'];
        $_SESSION['uname']=$logrow['name'];
        header("location:guessing-forum.php");
    }
    else
    {
        
        $logerr="wrong mobile no or password";
    }

    
}
if(isset($_POST['guespost'])){
    $gid=$_POST['gid'];
    $content=$_POST['content'];
    $adate=date("Y-m-d");
     $date=date(" jS \ F Y h:i A");
    $qry="insert into `gpost` values('','$_SESSION[luid]','$gid','$content','$date','$adate','disable')";
    $query=mysqli_query($link,$qry);
    $succpost="ok";
    
}
$datee=date("Y-m-d");
$pqry="select * from `gpost` where `adate`='$datee' order by `id` desc"; 
$pquery=mysqli_query($link,$pqry);

?>
<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sattaking  Dpboss | Satta Matka Boss | Kalyan Matka</title>
<meta name="description" content="Dpboss, Satta Matka, Boss Matka, Kalyan Matka Tips, matka result, Matka, Sattamatka, Matka Satta, Matka Charts, Matka Satta Result, Fix Matka" />
<meta name="keywords" content="kingsmatka, superkingmatka, superking, sattaking, satta matka, sattamatka, matka results, matka tips, matka charts, rajdhani night result, sattamataka143, milan day result, dpboss, satta matka chart, guessing forum, kalyan matka results, kalyan bazar, sridevi result, satta bazar, matka satta, matka satta result, satta, satta king" />
<link rel="icon" href="images/fav.png" type="image/x-icon">
<link href="style/index.css" rel="stylesheet" media="all" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script type="text/javascript">
    function sweet() {
        swal("Good job!", "You post will be published soon!", "success");
    }
    </script>
<script>
function fun(){
window.location.href='#login';
return false;
}
</script>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>

<style>
    .modal-window {
  position: fixed;
  background-color: rgb(0 0 0 / 75%);
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 999;
  visibility: hidden;
  opacity: 0;
  pointer-events: none;
  transition: all 0.3s;
}
.modal-window:target {
  visibility: visible;
  opacity: 1;
  pointer-events: auto;
}
.modal-window > div {
  width: 400px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  padding: 1em;
  background: #f3f3f3;
  border: solid 2px #c3c3c3;
}
.modal-window header {
  font-weight: bold;
}
.modal-window h1 {
  font-size: 150%;
  margin: 0 0 15px;
}

.modal-close {
    color: #000;
    line-height: 50px;
    font-size: 100%;
    position: absolute;
    right: 0;
    text-align: center;
    top: 0;
    width: 40px;
    text-decoration: none;
}
.modal-close:hover {
  color: black;
}


.modal-window > div {
  border-radius: 0;
}

.modal-window div:not(:last-of-type) {
  margin-bottom: 15px;
}

small {
  color: lightgray;
}

.btn {
  background-color: white;
  padding: 10px 30px;
  text-decoration: none; 
  margin:10px 0;
  font-weight: bold;
    color: #e65100;
}
.btn i {
  padding-right: 0.3em;
}
.input_b
{
    font-size: 16px;
    padding: 10px;
    width: 100%;
    margin-bottom:15px;
}
tr:nth-child(even)
{
    background-color: #c8e6c9;
    padding:10px;
}
</style>
<script language="javascript">
    function InsertBreak(e){
        //check for return key=13
        if (parseInt(e.keyCode)==13) {
            //get textarea object
            var objTxtArea;
            objTxtArea=document.getElementById("test");
    //insert the existing text with the <br>
        objTxtArea.innerText=objTxtArea.value+"<br>";
        }
    
    }
</script>
</head>
<body <?php if(isset($succpost)){ ?> onload="sweet();" <?php } ?> style="body {background-image: linear-gradient(to right top, #000000, #200e12, #38141b, #511821, #6b1c24, #6b1c24, #6b1c24, #6b1c24, #511821, #38141b, #200e12, #000000);}    
">
<div style="text-align:center; ">
<a href="https://sattaking.chat"><img height="100" style="margin-bottom: -15px; margin-top: -7px; width: 300px;" src="https://mytopic.app/assets/images/brand/adminlogo-83039.png" alt="sridevi result"></a>
</div>


<BR>












<div class="satta-matka-block_strt_gold">
<h1>Sattaking Satta Matka Guessing Kalyan Main Bazar Madhur Matka
</h1> <h2>Dpboss Satta Matka Guessing Forum For Kalyan Milan Main Bazar Rajdhani Madhur Matka Time Bazar Morning Madhur Sridevi All Matka Guessing Open To Close Free Ank Kalyan Fix Jodi Aaj Ke Liye Today Locky Fix Matka Satta Number Satta Matka 143 24 Games satta king Matta Batta Online Matka Play Trusted Best सात्त मटका कल्याण मधुर मटका रेसुल्ट ऑनलाइन प्ले</h2></div>


<div class="satta-matka-block_strt_adsen1"><center>
<b> Duniya Ko Dikhao Apni Guessing Ka Jalwa, Guessing Post Karne Ke Liye Application Download Kare </b> <br>
<a href="" style="background: #5e35b1;padding: 9px 30px;display: inline-block;font-size: 14px;text-decoration: none;color: #ffffff;margin-top: 10px;border-radius: 9px;">Click Here to Download App</a>
</center></div>

<div class="satta-matka-block_strt_footer">
<p>
</p><h3>-:Posting Rules:-<br>
3 OPEN YA CLOSE<br>
6 JODI<br>
AUR 8 PANNA<br>
AUR RESULT TIME SE 15 MIN PHELE GAME POST KARNA HOGA....!!!!<br>
Dont Mention Date Or Time In Your Post.</h3><p></p>
<p><a href="" style="background: #ffb80c;display: inline-block;width: 100%;padding: 10px;text-decoration: none;color: #000;font-size: 15px;">Click Here To Read Full Guessing Forum Rules</a></p>
</div>

<div class="satta-matka-block_strt_footer">
<p>
</p><h3>-:Posting Rules:-<br>
Play Matka Online
101% Trusted</h3><p></p>
<p><a href="" style="display: inline-block;width: auto;text-decoration: none;color: #FF0000;font-size: 15px;">Download Now</a></p>
</div>

<div align="center" class="live">
<div style=" background-color: #e65100;">
	<font size="5" style="font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol'">
		<big><b>* Hello <?php echo $_SESSION['uname']; ?> - Post Your Guess *</b></big><?php if(isset($_SESSION['luid'])){ ?><a href="logout.php"><span style="float:right; padding-right:5px;"> LOGOUT</span></a><?php } ?>
	</font>
</div>

<div style="height:10px;">&nbsp;</div><div style="color: white;">
<div style="height:10px;">&nbsp;</div></div>
<div style="height:10px;">&nbsp;</div>


	<div style="color: white;">
	    <form action="" method="post" <?php if(!isset($_SESSION['luid'])){ ?> onsubmit="return fun(); <?php } ?>">
		<select style="padding: 10px;margin-bottom: 20px;" name="gid" <?php if(isset($_SESSION['luid'])){ ?> required <?php } ?> >
		    <option value=""> --- SELECT GAME ---</option>
		    <?php foreach ($arr as $key => $value) { ?>
		    <option value="<?php echo $value['game_name']; ?>"><?php echo $value['game_name']; ?></option>
		    <?php } ?>
		</select>
		<textarea style="width: 98%; height: 200px; margin-bottom:20px;" name="content" id="test" onkeydown="InsertBreak(event);" <?php if(isset($_SESSION['luid'])){ ?> required <?php } ?>></textarea>
		<input type="submit" name="guespost" <?php if(!isset($_SESSION['luid'])){ ?> onclick="window.location.href='#login';" <?php } ?> value="SUBMIT" style="padding: 10px 50px;background: #5e35b1;border: none;color: #fff;font-weight: bold;font-size: 16px;margin-bottom: 20px;cursor: pointer;">
	  </form>
	</div>
</div>

<?php while($prow=mysqli_fetch_assoc($pquery)){ 

$uqry="select * from `users` where `id`='$prow[uid]'";
$uquery=mysqli_query($link,$uqry);
$urow=mysqli_fetch_assoc($uquery);
?>

<div class="satta-matka-block_strt_gm_zone">
<p style="border-top-left-radius:1px;border-top-right-radius: 1px;padding-top: 10px;padding-bottom: 10px;margin-top: 0px;background-color:#e70042; !important;color: #fff;font-size: 14px;font-weight: bold;text-align: left;
    padding-left: 12px;"> <span><?php echo $urow['name']; ?></span><!--game name start--><span style="float:none;padding-left: 12px;"><?php echo $prow['gid']; ?></span> <span style="float: right;padding-right: 12px;"><?php echo $prow['date']; ?></span></p>
<div style="padding-right: 7px;padding-left: 7px;">

<div style="padding-top: 1px;padding-bottom: 1px;">
<div style="text-decoration:none;color:#fff !important" href="#">
<div class="satta-matka-block_zoneak" style="margin-top: -7px;">
<?php echo nl2br($prow['post']); ?>
<div class="row">
    <a href="#" style="font-size: 16px;width: 25%;display: inline-block;background: #00FF7F;color: #000;padding: 8px;text-decoration: none;">[Quote]</a>
    <a href="#" style="font-size: 16px;width: 25%;display: inline-block;background: #00FFFF;color: #000;padding: 8px;text-decoration: none;">[Top]</a>
    <a href="#" style="font-size: 16px;width: 25%;display: inline-block;background: #87CEEB;color: #000;padding: 8px;text-decoration: none;">[Down]</a>
</div>
</div></div>

</div>

</div>
</div>
<?php } ?>
<?php if(!isset($_SESSION['luid'])){ ?>
<div id="login" class="modal-window">
  <div>
    <a href="#" title="Close" class="modal-close"><img src="images/close.png" width="15px"></a>
    <h1>Login</h1>
    <?php if(isset($logerr)){ ?>
        <div class="alert alert-danger" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Error!</strong> <?php echo $logerr; ?>
</div> <?php } ?>
    <div>
        <form action="" method="post">
        <input type="number" placeholder="Mobile No:" class="input_b" name="uname" onkeypress="if(this.value.length==10) return false;" required>
        <input type="password" placeholder="Password:" class="input_b" name="pass" required>
        <input type="submit" value="SUBMIT" name="login"  style="background: #5e35b1;padding: 9px 30px;display: inline-block;font-size: 14px;text-decoration: none;color: #ffffff;border: none;cursor: pointer;">
        </form>
    </div>
  </div>
</div>
<?php } ?>


<div style="margin-top:10px;border:2px ;">

<!--<div class="satta-matka-block_strtF">-->
<!-- <div class="btn_red" style="color: #fff;">-->
<!--SATTAKING.CHAT<br>-->
<!--ALL RIGHTS RESERVED<br />-->
<!--(2019-2021)<br>-->
<!--CONTACT ADMIN <br>-->
<!--	 Developed by <small><a href="https://www.gowebs.in/" target="_blank" style="color:#fff">Gowebs</a></small>-->
<!--<br>-->
<!--<br>-->
<!--</div>-->
<!--</div>-->



</b></div>
</html>
