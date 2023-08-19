<?php
ob_start();
?>
<?php 
include"conn.php";
session_start();
date_default_timezone_set("Asia/Kolkata");
?>
<?php
$qry="select * from `game2` order by `start_time` asc";
$query=mysqli_query($link,$qry);
$qarr=array();
while($row=mysqli_fetch_assoc($query)){
    $arr[]=$row;
}

?> 
<?php
if(isset($_POST['sub'])){
 $name=htmlspecialchars(stripslashes(trim($_POST['name'])));   
 $mobile=htmlspecialchars(stripslashes(trim($_POST['mobile'])));  
 $pass=htmlspecialchars(stripslashes(trim($_POST['password'])));  
 $cpass=htmlspecialchars(stripslashes(trim($_POST['cpassword'])));   
 $mdpass=md5($pass);
 $st=true;
 if(strlen($mobile)!='10'){
     $errmsg="Wrong Mobile Number";
     $st=false;
 }
 else if($pass!=$cpass){
     $errmsg="Both password are not macthed";
     $st=false;
 }
 
 if($st==true){
     
   $qry="insert into `users`(`name`,`mobile`,`password`) values('$name','$mobile','$mdpass')";  
   mysqli_query($link,$qry);
   $last=mysqli_insert_id($link);
    $_SESSION['luid']=$last;
    $_SESSION['uname']=$name;
    header("location:guessing-forum.php");
  
 
}
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
?>
<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sattaking  Dpboss | Satta Matka Boss | Kalyan Matka</title>
<!--SEO Start-->
<meta name="title" content="Matka result also get live update on Starline  more - Satta King" />
<meta name="description" content="Dpboss, Satta Matka, Boss Matka, Kalyan Matka Tips, matka result, Matka, Sattamatka, Matka Satta, Matka Charts, Matka Satta Result, Fix Matka" />
<meta name="keywords" content="kingsmatka, 
superkingmatka, 
superking, 
sattaking,
satta matka, 
sattamatka,
matka results,
matka tips,
matka charts,
rajdhani night result,
sattamataka143, 
milan day result,
dpboss,
satta matka chart, 
guessing forum, 
kalyan matka results,
kalyan bazar, 
sridevi result, 
matka lottery,
satta bazar matka,
satta matka result today,
satta matka 143,
satta bazar,
matka satta, 
matka satta result,
satta, satta king,
Kalyan starline,
Dp boss,
Sattaking chart,
Fastest results, 
Rajdhani results,
Sridevi results, 
Satta results, 
Kalyan matka, 
Dpboss starline,
Mumbai starline, 
Starline results, 
Starline games" />
<link rel="canonical" href="https://devsattamatka.online"/>
<meta name="Robots" content="index, follow">
<meta name="author" content="sattamatka">


<!--Schema Markup-->
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "WebSite",
  "name": "satta king",
  "url": "https://devsattamatka.online",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "{search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
"additionalType": "Satta Matka ", 
  "name": "DEVSATTAMATKA",
  "alternateName": "SATTA MATKA",
  "url": "https://devsattamatka.online/",
  "logo": "http://devsattamatka.online/images/logo.webp",
"slogan":" Satta Matka Dpboss Kalyan Matka Result ",
  "sameAs": "https://devsattamatka.online/"
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "WHAT IS SATTA MATKA GAME?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Satta Matka Is A 60 Year Old Game Which Is Based And Played On Numbers By Matka Players To Earn Big Money"
    }
  },{
    "@type": "Question",
    "name": "WHAT ARE THE TYPES OF MATKA?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Matka Is Played In Various Conditions But These 4 Are The Most Played Forms Of Matka. Open , Close , Jodi , Patti"
    }
  },{
    "@type": "Question",
    "name": "WHAT IS THE FORMULA OF A SATTA CALCULATION?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Usually Matka Is A Game Of Luck But You Can Find Calculation By Running Line Of Current Game. Other U Can Follow The Dhanwarsha Chart As Well To Get The Accurate Number."
    }
  },{
    "@type": "Question",
    "name": "CAN WE PLAY MATKA ONLINE?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "es There Are Many Website Like Matkabank.Com You Can Play Matka Online Without Any Problem And Without Going To Anywhere. You Can Play Here And Get Winning Amount Instantly"
    }
  },{
    "@type": "Question",
    "name": "HOW CAN I FIND MATKA JODI?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Its A Bit Hard To Find Jodi But You Can Find Fix Matka Jodi To Get Big Profit Only On Our Date Fix Page.Kalyan Fix Jodi"
    }
  },{
    "@type": "Question",
    "name": "HOW CAN I LEARN ABOUT SATTA MATKA?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Basically Matka Is An Easy Game. Its All About Numbers And Number Prediction. The Basic Thing About Matka Is 4 Things 1.Open- Select 0 To 9 Number To Bet On. If The Same Number Is Opened Then U Are The Winner Same Condition Is About The Close. Open Is The 1st Digit Of Jodi And Close Is The Second Digit."
    }
  },{
    "@type": "Question",
    "name": "WHAT IS PATTI / PANEL / PANNA OF MATKA?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Patti Is A Form Of 3 Digit Total Example - Patti 589 Here We Will Add These Number To Each Other Like 5+8+9=22 Here The 2nd Digit Will Be The Digit Of The Patti"
    }
  },{
    "@type": "Question",
    "name": "WHAT IS AN EASY FORMULA TO GUESS SATTA MATKA NUMBERS?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Its Not Easy To Guess Satta Matka Number It Is The Work Of Matka Special Professors Called Guessers You Find There Guess Here.Visit Here"
    }
  },{
    "@type": "Question",
    "name": "WHO IS DEVSATTAMATKA?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Since 20 Years Devsattamatka.online Has Been An Idle For Every Matka Guesser. Everyone Wants To Be Like Devsattamatka. Devsattamatka Has An Outstanding Record Of Continuosly 7 Single Jodi Pass In Kalyan In 2019 July 2nd Week. He Is Working 24/7 For Matka Since 20 Years. He Is The One And Only In The Matka World. Every Player Of Matka Knows Him Respect Him. His Site Is Known As Devsattamatka.online. There Are Many Good Guessers As Well. You Can Visit This Website To Get Daliy Profit Of Devsattamatka's Perfect Guessing. Its Not Hard To Win Money In Matka With The Help Of Devsattamatka."
    }
  }]
}
</script>
<!--og tag-->
<meta property="og:title" content="Matka result also get live update on Starline  more - Satta King" />
<meta property="og:description" content="Satta King, Dpboss, Satta Matka, Boss Matka, Kalyan Matka Tips, matka result, Matka, Sattamatka, Matka Satta, Matka Charts, Matka Satta Result, Fix Matka" />
<meta property="og:type" content="Website" />
<meta property="og:url" content="https://matkatime.com" />


<!--twitter card-->
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="" />
	<meta name="twitter:creator" content="">
	<meta name="twitter:title" content="Matka result also get live update on Starline  more - Satta King" />
	<meta name="twitter:description" content="Dpboss, Satta Matka, Boss Matka, Kalyan Matka Tips, matka result, Matka, Sattamatka, Matka Satta, Matka Charts, Matka Satta Result, Fix Matka " />
	<meta name="twitter:image" content="https://devsattamatka.online/images/satta-king.jpg">
<!--SEO End-->
<link rel="icon" href="images/fav.png" type="image/x-icon">
<link href="style/index.css" rel="stylesheet" media="all" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}

.blink {
  animation: blinker 1s step-start infinite;
}

@keyframes blinker {
  50% {
    opacity: 0;
  }
}
</style>
</head>

<body style="body {background-image: linear-gradient(to right, #3f05e1, #7100e4, #9500e7, #b301e9, #cf12eb);}     
">
<div style="text-align:center; ">
<a href=""><img height="100" style="margin-bottom: -15px; margin-top: -7px; width: 280px;"  src="https://mytopic.app/assets/images/brand/adminlogo-83039.png" alt="sridevi result"></a>
</div>
<BR>
<div class="satta-matka-block_strt_gold">
<h1>sattaking Satta Matka Kalyan Mumbai Fastest Results</h1> <h2>Get Kalyan Matka Main Mumbai Satta Matka Market Results Fastest Live Update. Get All Kalyan,Main Mumbai,Sridevi,Supreme,Rajdhani,Milan,Madhur Matka And Time Bazar Jodi Penal Panel Patti Panna Charts For Free . All Matka Guessing.With Best Guessers , Online Old Charts , Satta Matka Number Software Links, Online Charts List Pdf Download And Top Matka Guessing Free Number Provided By Sattamatka143 Professor And Master Dr Admin Sir.</h2><h3>Other Special Features Include 220 Patti Satta Weekly Matka Jodi Chart With Direct Access To Guessing Form Of Experts Tricks Access Via Website Or Android App.</h3></div>

  <center style="margin-bottom: 10px;">
      <?php if(isset($_SESSION['luid'])){ ?>
       <a class="btn" href="logout.php">LOGOUT</a>
      
      <?php } else { ?>
    <a class="btn" href="#login">LOGIN</a>
    <a class="btn" href="#register">REGISTER</a>
    <?php } ?>
    <a class="btn" href="guessing-forum.php">Post Your Guessing Here</a>
  </center>
<div id="login" class="modal-window">
  <div>
    <a href="#" title="Close" class="modal-close"><img width="15px" src="images/close.png" alt="satta bazar"></a>
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
<div id="register" class="modal-window">
    <div>
    <a href="#" title="Close" class="modal-close"><img width="15px" src="images/close.png"  alt="matka satta result"></a>
    <h1>Register</h1>
    
    <?php if(isset($sucmsg)){ ?>
        <div class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Success!</strong> <?php echo $sucmsg; ?>
</div> <?php } ?>

<?php if(isset($errmsg)){ ?>
        <div class="alert alert-danger" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Error!</strong> <?php echo $errmsg; ?>
</div> <?php } ?>
    <div>
        
        <form action="" method="post">
        <input type="text" placeholder="Name:" class="input_b" name="name" required>
        <input type="number" placeholder="Phone:" onkeypress="if(this.value.length==10) return false;" class="input_b" name="mobile" required>
        <input type="password" placeholder="Password:" class="input_b" name="password" required>
        <input type="password" placeholder="Retype Password:" class="input_b" name="cpassword" required>
        <input type="submit" value="SUBMIT" name="sub" style="background: #5e35b1;padding: 9px 30px;display: inline-block;font-size: 14px;text-decoration: none;color: #ffffff;border: none;cursor: pointer;">
       </form>
    </div>
  </div>

</div>

<div class="downlod_app">
    
    <h2>Play online in 100% TRUSTED app</h2>
    <div class="mb-2"><img src="images/download_app.png" width="18px" alt="Sattaking chart"><img src="images/download_app.png" width="18px" alt="satta matka chart"><img src="images/download_app.png" width="18px" alt="Kalyan starline"></div>
    <a href="" download target="_blank">Download App</a>
</div>

<div style="background: #fff;color: #000;padding: 10px;margin-bottom: 15px;">
    <?php
    $date = date('Y-m-d');
    //$sql = "SELECT * FROM `notice` WHERE datetime='{$date}'";
    $sql = "SELECT `umsg` FROM `notice` where `type`='notice' order by id desc";
    $qur = $link->query($sql);
    if($qur->num_rows >0){
        $res = $qur->fetch_object();
    
    
    ?>
    <marquee><?=$res->umsg ?></marquee>
    <?php } ?>
</div>

<div align="center" class="live">
<div style=" background-color: #e65100;">
	<font size="5" style="font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol'">
		<big><b>* LIVE UPDATE *</b></big>
	</font>
</div>

<div style="color: white;">
<div style="height:10px;">&nbsp;</div></div>
<div style="height:10px;">&nbsp;</div>


<?php foreach ($arr as $key => $value) {  
    
                     $datee=date("Y-m-d");
				    $qry1="select * from `game_result_date` where `gid`='$value[id]' and `date`='$datee'";
                    $query1=mysqli_query($link,$qry1);
                    $chcou=mysqli_num_rows($query1);
                    if($chcou>0){
                    $row1=mysqli_fetch_assoc($query1);
                    $fval=$row1['fval'];
                    $mval=$row1['mval'];
                    $lval=$row1['lval'];
                    
                    if($lval=="")
                     {
                         $display="$fval-$mval";
                     }
                     else
                     {
                         $display="$fval-$mval-$lval";
                     }
                    }
                    else
                    {
                       
                       $display="Loading..."; 
                    }  
                    
                    
                $stime = strtotime($value['start_time']);
				$etime = strtotime($value['end_time']);
                $startTime = date("H:i:s", strtotime('-30 minutes', $stime));
                $startTime1 = date("H:i:s", strtotime('+30 minutes', $stime));
                $endTime = date("H:i:s", strtotime('-30 minutes', $etime));
                $endTime1 = date("H:i:s", strtotime('+30 minutes', $etime));
				$cu_time=date("H:i:s");
				if(($startTime < $cu_time && $cu_time < $startTime1 )|| ($endTime < $cu_time && $cu_time < $endTime1 )){
				?>
    
    


	<div style="color: white;">
		<big>
			<b><font color="#BE0201" size="5" style="font-family:-apple-system,BlinkMacSystemFont," segoe="" ui",roboto,"helvetica="" neue",arial,sans-serif,"apple="" emoji","segoe="" ui=""><?php echo $value['name']; ?></font><br> 
				<font color="BLACK" style="font-size:24px; font-family:" helvetica=""><?php echo $display; ?></font></b><br></big>
			<input class="btn btn-sm btn-danger" style="height:auto; padding:0 12px; " name="Refresh" id="Login" value="Refresh" type="submit" onclick="window.location.reload()"><div style="height:10px;">&nbsp;</div>
	</div>
	
	<?php }  }  ?>
	
</div>


<style>
    .downlod_app
    {
        width:100%;
        display:inline-block;
        text-align:center;
        margin-bottom:20px;
    }
    .downlod_app h2
    {
        font-size:22px;
        color:#fff;
    }
    .downlod_app a
    {
        font-size: 16px;
        color: #fff;
        background: #F40615;
        padding: 10px 30px;
        display: inline-block;
        text-decoration: none;
        font-weight: bold;
        letter-spacing: 1px;
        border: solid 2px #585858;
        border-radius: 10px;
    }
</style>


<div class="satta-matka-block_strt_adsen1"><center>
<b> DISCLAIMER:- Viewing This WebSite Is On Your Own Risk.. All The information Shown On Website Is Based on Numerology and Astrology for Information Purposes. All Data Collected For Internet.. We Are Not Associated with Any Illegal Matka Business or Gamblers.. We Warn You That Matka Gambling in Your Country May be Banned or Illegal... We Are Not Responsible For Any Issues or Scam... We Respect All Country Rules/Laws... If You Not Agree With Our Site Disclaimer... Please Quit Our Site Right Now. Copying/Promoting/Publishing Any of Our Content in Any Type Of Media or Other Source is Illegal and against Law. </b> </center></div>
<div class="satta-matka-block_strt0">
<a class="btn_red" href="#">sattaking</a><br>
<a class="btn_red" href="#">SATTA MATKA 143 </a>
<a class="btn_red" href="#"> <p>
</a><br>
<a class="btn_red" href="#">!! ADMIN SIR !!</a><br>
<a class="btn_red" href="#">!! KING BHAI !!</a><br>
</div>
<div class="satta-matka-block_strt_all">
<div style=" background-color: #BE0201; color: white; padding:10px;"><font size="6" style="font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol'"><big><b>* MARKET RESULTS *</b></big></font></div>

<?php 
$sl=0;
foreach ($arr as $key => $value) { 
$sl++;

$date = new \DateTime($value['start_time']);
$sdate=$date->format("H:i");
$sdate=DATE("g:i A", STRTOTIME($sdate));

$date1 = new \DateTime($value['end_time']);
$edate=$date1->format("H:i");
$edate=DATE("g:i A", STRTOTIME($edate));
$display="";
                   $datee=date("Y-m-d");
				   $qry1="select * from `game_result_date` where `gid`='$value[id]' order by `id` desc";
                    $query1=mysqli_query($link,$qry1);
                    $chcou=mysqli_num_rows($query1);
                    if($chcou>0){
                    $row1=mysqli_fetch_assoc($query1);
                    $fval=$row1['fval'];
                    $mval=$row1['mval'];
                    $lval=$row1['lval'];
                    
                    if($lval=="")
                     {
                         $display="$fval-$mval";
                     }
                     else
                     {
                         $display="$fval-$mval-$lval";
                     }
                    }
                    else
                    {
                       
                       $display="XXX-XX-XXX"; 
                    }
                           
if($sl=='1'||$sl=='6'||$sl=='11'||$sl=='16'||$sl=='21'){
    $cls="rblock3";
}
else
{
    $cls="rblock1";
}

?>
<div class="<?php echo $cls; ?>">
	<div class="tit"><?php echo $value['name']; ?></div>
	<div class="live_res"><?php echo $display; ?></div>
	<div style="height:auto; margin-top:-15px; "><?php echo $sdate; ?> - <?php echo $edate; ?></div>
</div>
	
<?php } ?>
<div style="text-align: center;"><a onclick="window.location.href=window.location.href" class="refresh_big">Refresh</a></div>
</div>

<!--<div class="live" align="center" style="  max-height: 430px; background-image: linear-gradient(to bottom, #000000, #331019, #620f24, #920728, #c20023, #c20023, #c20023, #c20023, #920728, #620f24, #331019, #000000);">
<div style=" background-color: #c20023;"><font size="5" style="font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol'">
    <big><b>* SUPERKINGMATKA RESULT VIDEO *</b></big>
    </font></div>

<div class="videocontainer">
<iframe src="https://www.youtube.com/embed/-C6Wt996PKE" frameborder="0" class="video"></iframe>
</div>
</div>-->


           


<div class="satta-matka-block_strt_adsen2">
For Any Queries Or Support contact us at <a href="" target="_top"><span></span></a></div>

<div class="satta-matka-block_strt_gm_zone">
<p style="border-top-left-radius:1px;border-top-right-radius: 1px;padding-top: 10px;padding-bottom: 10px;margin-top: 0px;background-color:#e70042; !important;color: #fff;font-size: 18px;font-weight: bold;">❋ DAILY GAMES ZONE ❋ </p>
<div style="padding-right: 7px;padding-left: 7px;">

<div style="padding-top: 1px;padding-bottom: 1px;">
<a style="text-decoration:none;color:#fff !important" href="guessing-forum.php">
<div class="satta-matka-block_zoneak" style="margin-top: -7px;">
GUESSING FORUM
</div></a></div>
<div style="padding-top: 1px;padding-bottom: 1px;">
<a style="text-decoration:none;color:#fff !important" href="guessing-forum.php">
<div class="satta-matka-block_zoneak" style="margin-top: -7px;">
TOP GUESSING FORUM
</div></a></div>
<div style="padding-top: 1px;padding-bottom: 1px;">
<a style="text-decoration:none;color:#fff !important" href="#">
<div class="satta-matka-block_zoneak" style="margin-top: -7px;">
WEEKLY JODI AND PANNA
</div></a></div>
<div style="padding-top: 1px;padding-bottom: 1px;">
<a style="text-decoration:none;color:#fff !important" href="guessing-forum.php">
<div class="satta-matka-block_zoneak" style="margin-top: -7px;">
INDIAN MATKA GUESSING
</div></a></div>
<div style="padding-top: 1px;padding-bottom: 1px;">
<a style="text-decoration:none;color:#fff !important" href="guessing-forum.php">
<div class="satta-matka-block_zoneak" style="margin-top: -7px;">
FREE OPEN TO CLOSE ON PUBLIC DEMAND
</div></a></div>
</div>
</div>


<div class="satta-matka-block_strt4">
<p style="border-top-left-radius:1px;border-top-right-radius: 1px;padding-top: 10px;padding-bottom: 10px;margin-top: 0px;background-color:#388e3c !important;color:#fef101;font-size: 18px;font-weight: bold;">❋ CHART ZONE ❋ </p>
<div style="padding-right: 3px;padding-left: 3px;">
<?php foreach ($arr as $key => $value) {  

 $redii=$value['jodi_url'];  


?>    
<a style="text-decoration:none;color:#002736 !important" href="record/<?php echo $redii; ?>" >
<div class="satta-matka-block_zone8" style="margin-top: -15px;">
<?php echo $value['name']; ?>
</div>
</a>

<?php } ?>
</div>
</div>
<!--pannel chart -->
<div class="satta-matka-block_strt_all_zone">
<p style="border-top-left-radius:1px;border-top-right-radius: 1x;padding-top: 10px;padding-bottom: 10px;margin-top: 0px;background-color:#1b5e20 !important;color:#fef101;font-size: 18px;font-weight: bold;">❋ ALL SATTA MATKA PENAL CHART ❋ </p>
<div style="padding-right: 3px;padding-left: 3px;">

<?php foreach ($arr as $key => $value) { 

$redi=$value['panel_url']; 
?>   
<a style="text-decoration:none;color:#35302d !important" href="<?php echo $redi; ?>" >
<div class="satta-matka-block_zone9" style="margin-top: -7px;">
<?php echo $value['name']; ?>
</div>
</a>
<?php } ?>


</div>
</div>
<!--End pannel chart-->

<div style="display: none;">Matka gambling. Matka gambling or satta is a form of lottery which originally involved betting on the opening and closing rates of cotton transmitted from the New York Cotton Exchange. It originates from before the era of Indian independence when it was known as Ankada Jugar
We provide 100% fix jodi & patti from matka office which includes all these games - matka, kalyan matka, satta matka, satta, matka result, matka satta, kalyan chart, satta bazar, matka boss, matka guessing, satta matka com, satka matka com, satta chart, matka tips today, Time Bazar, Milan Day, Milan Night, Kalyan Matka, Rajdhani Day, Rajdhani Night, Mumbai main, kalyan satta, satta bazar, satta market, matka online, tara matka, dpboss matka matka vip game etc.
We can recover your loss within 1 days which happened playing matka bazar game earlier, sattamatka, sattamatkanews, matka result, kalyan matka, mumbai matka. we are the best site where you can get fastest Satta Matka result, Matka tips, Matka Charts, daily matka jodi, kalyan fix jodi aaj, indian matka, satta matka guessing, satta matka result, kalyan satta, mumbai matka, matka bazar.
Matka fix jodi today free matka tips, Kalyan Matka tips and Mumbai Matka tips with 100% fix Matka number from Matka main office. Take our membership and win huge amount with help of satta experts in all Satta matka games.
</div>
<div style="margin-top:10px;border:2px ;">
<div class="satta-matka-block_strt_adsen1"><center>
<strong>devsattamatka.online</strong> is an New <strong>Matka Website</strong> provides you Satta Matka, Sattamatka, Matka, Satta, Kalyan Matka Jodi open to close panel for everyday. <strong>Satta Matka</strong> gameplays and wins all people through sattamatka.wiki site. We always gives you satta matka kalyan, Milan Day Night, Rajdhani Day Main Ratan, and time Satta Bazar perfect game. Online matka industry opening results, Quickly publish all satta market results on sattamatka.wiki. Games update on our website, top guesser team suggest you best satta bazar tips and trick with best evergreen games. Public need fastest result and daily game, admin all-time full fill his work on <strong>Satta Matka</strong>. Matka.SattaMatka.Wiki is World No.1 Best Matka Website. This Website is extremely Good Service Provider Matka Site May I Help the other Poor People. Satta Matka, Matka, Satta, Indian Matka, Matka Result, Boss Matka, Matka Jodi Fix, Satta Matka 143, Sattamatka, Fix Satta Matka Jodi, Kalyan Matka Jodi, Kalyan Matka Tips, Kalyan hospitable Close, Mumbai hospitable Close, Satta Batta, Indian Satta, Satta Matka Office. This is often often often a All Keywords World Best Matka Single Ank Game Leaker.
</center></div>
<div class="satta-matka-block_strt_footer">
<p style=\"font-size: 14px;text-align:justify;font-weight: bold;color: #5c4c4c;\">
<h3>Satta Matka - Check Kalyan SattaMatka Fastest Kalyan Matka Results, SattaMatka143, Matka Tips, Matka Guessing, Matka Charts, <a href="" style="text-decoration:none;color:black;">Satta King</a>, Kalyan Panel Chart, Mumbai Chart, Sattamataka143, Golden Matka, <a href="" style="text-decoration:none;color:black;">sattaking</a>, Matka Satta, Kalyan Matka Satta, Kalyan Chart, <a href="" style="text-decoration:none;color:black;">Super King Matka</a>, Sattaking143 Guessing, Matka Fix Jodi Today</h3></p>
</p>
</div>

<div class="reload_btn">
    <a href="">Refresh</a>
</div>

</b></div>

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
.reload_btn
{
    width:100%;
    float:right;
    display:block;
}
.reload_btn a
{
    position: fixed;
    bottom: 20px;
    right: 10px;
    background: #1b5e20;
    padding: 10px 30px;
    text-decoration: none;
    color: #fff;
    border-radius: 6px;
    -webkit-box-shadow: -1px 6px 10px -1px #000000; 
box-shadow: -1px 6px 10px -1px #000000;
}
</style>

</html>
