<?php
include"conn.php";
$qrtg="select * from `game2` where `jodi_url`='$_GET[urll]'";
$queryg=mysqli_query($link,$qrtg);
$rowg=mysqli_fetch_assoc($queryg);
?>
<?php 
$qry="select * from `game_result_date` where `gid`='$rowg[id]'  order by `date` desc";
$query=mysqli_query($link,$qry);
$rw=mysqli_fetch_assoc($query);
$ldate=$rw['date'];
$fdate="2022-08-29";

$date1=date_create($fdate);
$date2=date_create($ldate);
$diff=date_diff($date1,$date2);
$number_of_result=$diff->format("%a");
$number_of_result=$number_of_result+1;
$no_of_records_per_page =6;
$total_pages = ceil($number_of_result / $no_of_records_per_page);



$red_arr=array("00","05","11","16","22","27","33","38","44","49","50","55","61","66","72","77","83","88","94","99");
?>

<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" 
"http://www.wapforum.org/DTD/xhtml-mobile10.dtd"> <html xmlns="http://www.w3.org/1999/xhtml">
<title>CHART</title> 
<link rel="icon" href="images/fav.png" type="image/x-icon">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta name="description" content="KESARI DAY 
MATKA CHART RECORD LIVE MATKA CHARTS RECORD WITH JODIES PANNA PATTI OLD MATKA RECORD MATKA JODI RECORD SATTA HISTORY" /> 
<link href="style/style.css" rel="stylesheet" type="text/css"> 
<meta forua="true" http-equiv="Cache-Control" content="max-age=0" /> 
<body id="fcontent"> 
<script data-cfasync="false" src="js/tbutton.js"></script> 
<div id="wraper"> <div id="banner">
<br>
<style>
    body {background-image: linear-gradient(to right, #3f05e1, #7100e4, #9500e7, #b301e9, #cf12eb);}    

        
    .satta-matka-jodi-subtitle{color:#efef0b;background-color:#7c5832;padding:10px;text-align:center;border:#ffff00 solid 2px;font-family:Helvetica Neue;margin-top:10px;margin-bottom:10px;font-weight:bold; border-radius: 20px;}
    </style>
<div style="text-align:center; ">
<img style="margin-bottom: -15px; margin-top: -8px; width: 230px;"  src="http://sattasuperfast.net/images/site_logo.png" alt="dpboss"> 
</div>
<BR>
<div class="satta-matka-jodi-subtitle">
<?php echo $rowg['game_name']; ?> JODI MATKA CHART
<br>
<?php echo $rowg['game_name']; ?> CHART MATKA SATTA RECORD LIVE MATKA CHARTS RECORD WITH JODIES PANNA PATTI <?php echo $rowg['game_name']; ?> OLD MATKA RECORD MATKA JODI RECORD SATTA HISTORY
</div>
<br> <a href="javascript:void(0);" style="top: 70px;right: 10px;z-index: 99;border: none;outline: none;background-color: #428bca;color: #fff;cursor: pointer;padding: 10px;border-radius: 3px;text-decoration:none;" onclick="bottomFunction()">Go To Bottom</a> <br><br>
<br> </div> <div style="border-style: double; border-color: #0000ff; background-color: #ffffff; color: #000000; " align="center"><big> <br /> <h2><?php //echo $rowg['game_name']; ?> </h2> 




<?php if($rowg['id']>'1'){ ?>
<center><h2><?php echo $rowg['name']; ?> Jodi Chart</h2></center>

<table width="auto" cellspacing="0" cellpadding="4" border="1" bgcolor="white">
<tbody><tr>
<?php for($i=1;$i<=$total_pages;$i++){
		    $mon="";
		    $tue="";
		    $wed="";
		    $thu="";
		    $fri="";
		    $sat="";
		    $sun="";
		   
		?>	
<tr>
  <?php	 
	    for($j=1;$j<=7;$j++){
		 $qryd="select * from `game_result_date` where `gid`='$rowg[id]' and `date`='$fdate'"; 
		  $queryd=mysqli_query($link,$qryd);
		  $chk=mysqli_num_rows($queryd);
		 
		  $rowd=mysqli_fetch_assoc($queryd);
		  
		    $nameOfDay = date('D',strtotime($fdate));
		   
		   
		    if($nameOfDay=="Mon"){
		      if($rowd['mval']==""){ $mon="**";} else {$mon=$rowd['mval']; } }
		       if (in_array($mon,$red_arr)){ $moncls="red"; }else {$moncls="black"; }
		  
		   
		  if($nameOfDay=="Tue"){
		      if($rowd['mval']==""){ $tue="**";} else {$tue=$rowd['mval']; } }
		      if (in_array($tue,$red_arr)){ $tuecls="red"; }else {$tuecls="black"; }
		  
		    if($nameOfDay=="Wed"){
		      if($rowd['mval']==""){ $wed="**";} else {$wed=$rowd['mval']; } }
		         if (in_array($wed,$red_arr)){ $wedcls="red"; }else {$wedcls="black"; }
		      
		      if($nameOfDay=="Thu"){
		      if($rowd['mval']==""){ $thu="**";} else {$thu=$rowd['mval']; } }
		      if (in_array($thu,$red_arr)){ $thucls="red"; }else {$thucls="black"; }
		      
		       if($nameOfDay=="Fri"){
		      if($rowd['mval']==""){ $fri="**";} else {$fri=$rowd['mval']; } }
		      
		       if (in_array($fri,$red_arr)){ $fricls="red"; }else {$fricls="black"; }
		      
		        if($nameOfDay=="Sat"){
		      if($rowd['mval']==""){ $sat="**";} else {$sat=$rowd['mval']; } }
		      
		      if (in_array($sat,$red_arr)){ $satcls="red"; }else {$satcls="black"; }
		      
		        if($nameOfDay=="Sun"){
		      if($rowd['mval']==""){ $sun="**";} else {$sun=$rowd['mval']; } }
		      
		      if (in_array($sun,$red_arr)){ $suncls="red"; }else {$suncls="black"; }
		      
		       $fdate=date('Y-m-d', strtotime($fdate .' +1 day'));
	          }
		      ?>      
    
<td style="color:<?php echo $moncls; ?>"><?php echo $mon; ?></td>
<td style="color:<?php echo $tuecls; ?>"><?php echo $tue; ?></td>
<td style="color:<?php echo $wedcls; ?>"><?php echo $wed; ?></td>
<td style="color:<?php echo $thucls; ?>"><?php echo $thu; ?></td>
<td style="color:<?php echo $fricls; ?>"><?php echo $fri; ?></td>
<td style="color:<?php echo $satcls; ?>"><?php echo $sat; ?></td>
<td style="color:<?php echo $suncls; ?>"><?php echo $sun; ?></td>
</tr>

<?php } ?>

</tbody></table>
<!--sridevi end-->
<?php } ?>
</big> <br /> <br /></div> <br> </div>
<br><br> 
<div align="center"> <a href="javascript:void(0);" style="top: 70px;right: 10px;z-index: 99;border: none;outline: none;background-color: 
    #428bca;color: #fff;cursor: pointer;padding: 10px;border-radius: 3px;text-decoration:none; font-size: large; font-weight: 700; font-family:Calibri;" onclick="topFunction()">Go To Top</a>
</div> <div align="center"></div> 

<style>
#top_five {
  background-color: #5e35b1;
  border-color: #ffff00;
  border-style: solid;
border-radius: 15px;
  border-width: 2px;
  color: #fff;
  font-family: "Times New Roman",Times,serif;
  font-size: 20px;
  font-weight: bold;
  line-height: 1.3em;
  margin-top: 10px;
  text-align: center;
}
#pic {
  margin-top: 5px;
  text-align: center;
  width: 100%;
}
</style>
<!--<div id="top_five"> SATTAKING.CHAT<br>-->
<!--ALL RIGHTS RESERVED<br />-->
<!--(2019-2021)<br>-->
<!--CONTACT ADMIN <br>-->
<!--	 Developed by <small><a href="https://www.gowebs.in/" target="_blank" style="color:#fff">Gowebs</a></small></div>-->
</body>
</html>
