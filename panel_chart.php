<?php
include"conn.php";
?>
<?php 
$qry="select * from `result` where `gid`='$_GET[gid]'  order by `date` desc";
$query=mysqli_query($link,$qry);
$rw=mysqli_fetch_assoc($query);
$ldate=$rw['date'];
$fdate="2021-07-26";

$date1=date_create($fdate);
$date2=date_create($ldate);
$diff=date_diff($date1,$date2);
$number_of_result=$diff->format("%a");
$number_of_result=$number_of_result+1;
$no_of_records_per_page = 7;
$total_pages = ceil($number_of_result / $no_of_records_per_page);	  


$qrtg="select * from `game` where `id`='$_GET[gid]'";
$queryg=mysqli_query($link,$qrtg);
$rowg=mysqli_fetch_assoc($queryg);


$red_arr=array("00","05","11","16","22","27","33","38","44","49","50","55","61","66","72","77","83","88","94","99");
?>
 <!DOCTYPE html PUBLIC 
"-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd"> <html xmlns="http://www.w3.org/1999/xhtml"> 
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> <title>PANEL CHART RECORD MATKA BAZAR</title> 
<meta name="description" content="Dpboss, Satta Matka, Boss Matka, Kalyan Matka Tips, matka result, Matka, Sattamatka, Matka Satta, Matka Charts, Matka Satta Result, Fix Matka" />
<meta name="keywords" content="kingsmatka, sattaking, sattaking, sattaking, satta matka, sattamatka, matka results, matka tips, matka charts, rajdhani night result, sattamataka143, milan day result, dpboss, satta matka chart, guessing forum, kalyan matka results, kalyan bazar, sridevi result, satta bazar, matka satta, matka satta result, satta, satta king" />
<link rel="icon" href="images/fav.png" type="image/x-icon">
<script data-cfasync="false" src="js/tbutton.js"></script> 
</head>
<body id="fcontent">
<center>
<h1 style="color:#fff;"><a href="https://sattaking.chat/"><div style="text-align:center; ">
<img height="100" style="margin-bottom: -15px; margin-top: -8px;" src="https://mytopic.app/assets/images/brand/adminlogo-83039.png" alt="satta">
</div>
</center>

<div class="HEADLINES" align="center"><big><?php echo $rowg['game_name']; ?> PENAL CHART </big></div>
<div style="text-align:center;">
<br>
<a href="javascript:void(0);" style="top: 70px;right: 10px;z-index: 99;border: none;outline: none;background-color: #428bca;color: #fff;cursor: pointer;padding: 
10px;border-radius: 3px;text-decoration:none;" onclick="bottomFunction()">Go To Bottom</a>
</div>
<br><div align="center">
</div>
<div align="center"><br /></div>
<div class="date" align="center">
<font size="6"> <span style="color: #ff0000;"><?php echo $rowg['game_name']; ?></span>
<table cellspacing="0">
<thead>
<tr>
<td bordercolor="#6699CC" bordercolorlight="#FFFFFF" bordercolordark="#6699CC">
<p align="center"><font size="4">DATE</font></p>
</td>
<td colspan="3" align="center" valign="middle" bordercolor="#6699CC" bordercolorlight="#6699CC" bordercolordark="#6699CC"><font size="4">MON</font></td>
<td align="center" colspan="3" bordercolor="#6699CC" bordercolorlight="#6699CC" bordercolordark="#6699CC"><font size="4">TUE</font></td>
<td align="center" colspan="3" bordercolor="#6699CC" bordercolorlight="#6699CC" bordercolordark="#6699CC"><font size="4">WED</font></td>
<td align="center" colspan="3" bordercolor="#6699CC" bordercolorlight="#6699CC" bordercolordark="#6699CC"><font size="4">THU</font></td>
<td align="center" style="padding-right:7px;" colspan="3" bordercolor="#6699CC" bordercolorlight="#6699CC" bordercolordark="#6699CC"><font size="4">FRI</font></td>
<td align="center" style="padding-right:7px;" colspan="3" bordercolor="#6699CC" bordercolorlight="#6699CC" bordercolordark="#6699CC"><font size="4">SAT</font></td>
<td align="center" style="padding-right:7px;" colspan="3" bordercolor="#6699CC" bordercolorlight="#6699CC" bordercolordark="#6699CC"><font size="4">SUN</font></td>
</tr>
</thead>
<tbody>
    
         <?php for($i=1;$i<=$total_pages;$i++){
		    $mon="";
		    $tue="";
		    $wed="";
		    $thu="";
		    $fri="";
		    $sat="";
		    $sun="";
         
         $gdate=date('Y-m-d', strtotime($fdate .' +6 day'));
         $newDate = date("d-m-Y", strtotime($fdate));
         $newDate1 = date("d-m-Y", strtotime($gdate));
	     	?>	   
   	<?php	 
		
	    for($j=1;$j<=7;$j++){
		 $qryd="select * from `result` where `game_id`='$_GET[gid]' and `date`='$fdate'"; 
		  $queryd=mysqli_query($link,$qryd);
		  $chk=mysqli_num_rows($queryd);
		 
		  $rowd=mysqli_fetch_assoc($queryd);
		  
		    $nameOfDay = date('D',strtotime($fdate));
		   
		   
		    if($nameOfDay=="Mon"){
		      if($rowd['mval']==""){ $monf="***";$mon="**"; $monl="***";} else {$monf=$rowd['fval']; $mon=$rowd['mval']; $monl=$rowd['lval']; } }
		      
		      if (in_array($mon,$red_arr)){ $moncls="td_red"; }else {$moncls="td_black"; }
		  
		  if($nameOfDay=="Tue"){
		        if($rowd['mval']==""){ $tuef="***";$tue="**"; $tuel="***";} else {$tuef=$rowd['fval']; $tue=$rowd['mval']; $tuel=$rowd['lval']; } }
		        
		         if (in_array($tue,$red_arr)){ $tuecls="td_red"; }else {$tuecls="td_black"; }
		  
		    if($nameOfDay=="Wed"){
		      if($rowd['mval']==""){$wedf="***";$wed="**"; $wedl="***";} else {$wedf=$rowd['fval']; $wed=$rowd['mval']; $wedl=$rowd['lval']; } }
		      
		       if (in_array($wed,$red_arr)){ $wedcls="td_red"; }else {$wedcls="td_black"; }
		      
		      if($nameOfDay=="Thu"){
		         if($rowd['mval']==""){ $thuf="***";$thu="**"; $thul="***";} else {$thuf=$rowd['fval']; $thu=$rowd['mval']; $thul=$rowd['lval']; }}
		         
		          if (in_array($thu,$red_arr)){ $thucls="td_red"; }else {$thucls="td_black"; }
		      
		       if($nameOfDay=="Fri"){
		        if($rowd['mval']==""){ $frif="***";$fri="**"; $fril="***";} else {$frif=$rowd['fval']; $fri=$rowd['mval']; $fril=$rowd['lval']; } }
		        
		         if (in_array($fri,$fri_arr)){ $fricls="td_red"; }else {$fricls="td_black"; }
		      
		        if($nameOfDay=="Sat"){
		        if($rowd['mval']==""){ $satf="***";$sat="**"; $satl="***";} else {$satf=$rowd['fval']; $sat=$rowd['mval']; $satl=$rowd['lval']; } }
		      
		        if (in_array($sat,$red_arr)){ $satcls="td_red"; }else {$satcls="td_black"; }
		      
		        if($nameOfDay=="Sun"){
		        if($rowd['mval']==""){ $sunf="***";$sun="**"; $sunl="***";} else {$sunf=$rowd['fval']; $sun=$rowd['mval']; $sunl=$rowd['lval']; } }
		        
		         if (in_array($sun,$red_arr)){ $suncls="td_red"; }else {$suncls="td_black"; }
		      
		       $fdate=date('Y-m-d', strtotime($fdate .' +1 day'));
		       
		       
	          }
		      ?>  

<tr><td class="chart_date">
<?php echo $newDate; ?><br />To<br />
<?php echo $newDate1; ?></td>

<td><?php  $monf=str_split($monf); echo "$monf[0]<br>$monf[1]<br>$monf[2]"; ?></span></td>
<td><span class=<?php echo $moncls; ?>><?php echo $mon; ?></span></span></td>
<td><?php  $monl=str_split($monl); echo "$monl[0]<br>$monl[1]<br>$monl[2]"; ?></span></td>

<td><?php  $tuef=str_split($tuef); echo "$tuef[0]<br>$tuef[1]<br>$tuef[2]"; ?></span></td>
<td><span class=<?php echo $tuecls; ?>><?php echo $tue; ?></span></span></td>
<td><?php  $tuel=str_split($tuel); echo "$tuel[0]<br>$tuel[1]<br>$tuel[2]"; ?></span></td>

<td><?php  $wedf=str_split($wedf); echo "$wedf[0]<br>$wedf[1]<br>$wedf[2]"; ?></span></td>
<td><span class=<?php echo $wedcls; ?>><?php echo $wed; ?></span></span></td>
<td><?php  $wedl=str_split($wedl); echo "$wedl[0]<br>$wedl[1]<br>$wedl[2]"; ?></span></td>

<td><?php  $thuf=str_split($thuf); echo "$thuf[0]<br>$thuf[1]<br>$thuf[2]"; ?></span></td>
<td><span class=<?php echo $thucls; ?>><?php echo $thu; ?></span></span></td>
<td><?php  $thul=str_split($thul); echo "$thul[0]<br>$thul[1]<br>$thul[2]"; ?></span></td>

<td><?php  $frif=str_split($frif); echo "$frif[0]<br>$frif[1]<br>$frif[2]"; ?></span></td>
<td><span class=<?php echo $fricls; ?>><?php echo $fri; ?></span></span></td>
<td><?php  $fril=str_split($fril); echo "$fril[0]<br>$fril[1]<br>$fril[2]"; ?></span></td>

<td><?php  $satf=str_split($satf); echo "$satf[0]<br>$satf[1]<br>$satf[2]"; ?></span></td>
<td><span class=<?php echo $satcls; ?>><?php echo $sat; ?></span></span></td>
<td><?php  $satl=str_split($satl); echo "$satl[0]<br>$satl[1]<br>$satl[2]"; ?></span></td>

<td><?php  $sunf=str_split($sunf); echo "$sunf[0]<br>$sunf[1]<br>$sunf[2]"; ?></span></td>
<td><span class=<?php echo $suncls; ?>><?php echo $sun; ?></span></span></td>
<td><?php  $sunl=str_split($sunl); echo "$sunl[0]<br>$sunl[1]<br>$sunl[2]"; ?></span></td>

<?php } ?>
</table>
</div>
</div></div>
<br><br> <div align="center"> <a href="javascript:void(0);" style="top: 70px;right: 10px;z-index: 99;border: none;outline: none;background-color: 
    #428bca;color: #fff;cursor: pointer;padding: 10px;border-radius: 3px;text-decoration:none; font-size: large; font-weight: 700; font-family:Calibri;" onclick="topFunction()">Go To Top</a>
</div> <div align="center"></div> <style>
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



<!--<div id="top_five">SATTAKING.CHAT<br>-->
<!--ALL RIGHTS RESERVED<br />-->
<!--(2019-2021)<br>-->
<!--CONTACT ADMIN <br>-->
<!--	 Developed by <small><a href="https://www.gowebs.in/" target="_blank" style="color:#fff">Gowebs</a></small>-->
<!--</div>-->

<style type="text/css"> 
body{background-image: linear-gradient(to right, #3f05e1, #7100e4, #9500e7, #b301e9, #cf12eb);font-size:30px;}.chartwale{background-color:#fff;color:black;border-width:5px;border-color:red;border-style:outset;margin-top:10px;margin-bottom:10px;margin-left:10px;margin-right:10px;padding-top:10px;padding-bottom:10px;padding-left:10px;padding-right:10px;font-weight:bold;font-size:large;text-decoration:blink}.date{background-color:#fff;color:black;border-width:3px;border-color:brown;border-style:outset;margin-top:10px;margin-bottom:10px;padding-top:10px;padding-bottom:10px;font-weight:bold;font-size:large;text-decoration:blink}.date 
a{color:black}.HEADER{background-color:black;color:white;border-width:5px;border-color:#fff;border-style:double;margin-top:10px;margin-bottom:10px;margin-left:10px;margin-right:10px;padding-top:10px;padding-bottom:10px;padding-left:10px;padding-right:10px;font-weight:bold;font-size:large;text-decoration:blink}.HEADER 
a{color:red}.HEADLINES{background-color:#ffd900;color:#000;font-weight:bold;font-size:large;text-decoration:blink}.HEADLINES 
a{color:black}.kalyanresult{background-color:LightSkyBlue;color:black;font-weight:bold;font-size:large;text-decoration:blink}.kalyanresult 
a{color:black}.KHALI{background-color:black;color:#fff;font-weight:bold;font-size:large;text-decoration:blink}.KHALI 
a{color:purple}.mainresult{background-color:LawnGreen;color:black;font-weight:bold;font-size:large;text-decoration:blink}.NOTICE{background-color:black;color:#fff;border-width:5px;border-color:red;border-style:dotted;margin-top:10px;margin-bottom:10px;margin-left:10px;margin-right:10px;padding-top:10px;padding-bottom:10px;padding-left:10px;padding-right:10px;font-weight:bold;font-size:large;text-decoration:blink}.NOTICE 
a{color:black}.TOP{background-color:RED;color:WHITE;border-width:2px;border-color:BLUE;border-style:solid;font-weight:bold;font-size:large;text-decoration:blink}.online{background-color:black;color:#FF0080;font-weight:bold;font-size:large;text-decoration:blink}.DisplayResult{font-size:19pt}.boxes_titles{text-align:center;color:#000;font-weight:bold}.boxes_dash{text-align:center;color:#000;font-weight:bold}.boxes_text_win_numbers{text-align:center;color:#000;font-weight:800;font-size:25pt}body{background-color:black;font-size:large;font-family:Comic 
Sans MS;font-weight:bold}a{color:Red} </style>
<style>
	  .td_red{
    color:red;
    font-size:28px;
}
.td_black{
    font-size:28px;
}
	  
	  .HEADLINES,body{
    font-weight:700;
    font-size:large
}
	  
body{
    background-color:#000;
    color:#fff;
    font-family:Comic Sans MS
}
a{
    color:Red
}
.HEADLINES{
    background-color:#ffd900;
    color:#000;
    
    text-decoration:blink; padding:16px;
}
.a1{
    background:#FF0040
}
.a2{
    color:#fff;
    font-size:30px
}
table{
    background-color:#fff;
    color:#000;
    width:60%;
	border-style:double ;
	
	
	
}
th{
    background:#FFF
}
td,th{
    padding:0px;
    text-align:center;
	border-bottom: 2px solid #9e9e9e;
}
tdfffff:nth-child(1) {
	border-right:1px solid blue;
	padding-right:3px;
}
td:nth-child(19) {
	padding-right:5px;
}
@media screen and (min-width:500px){
    .normal,.redword{
        background-color:#fff;
        font-size:28px
    }
    .tabfirst{
        margin:auto;
        width:50%
    }
    .redword{
        color:red
    }
    td{
        font-size:16px;
        padding:5px 3px
		
    }
	
}
table tr td:nth-child(11),table tr td:nth-child(12),table tr td:nth-child(14),table tr td:nth-child(15),table tr td:nth-child(17),table tr td:nth-child(18),table tr td:nth-child(2),table 
tr td:nth-child(20),table tr td:nth-child(21),table tr td:nth-child(3),table tr td:nth-child(4),table tr td:nth-child(5),table tr td:nth-child(6),table tr td:nth-child(8),table tr 
td:nth-child(9){
    background-color:#fff;
	
    
}
@media screen and (max-width:500px){
    .normal,.redword{
        background-color:#fff;
        font-size:13px
    }
    table{
        max-width:100%;
        min-width:60%
    }
    .redword{
        color:red
    }
    td{
        font-size:10px;
        padding:1px
    }
table{
		background-color:#fff;
		color:#000;
		width:100%;
		border-style:double ;
	}

}
@media screen and (max-width:320px){
    .normal,.redword{
        background-color:#fff;
        font-size:12px
    }
    table{
        max-width:100%;
        min-width:60%
    }
    .redword{
        color:red
    }
    td{
        font-size:8px;
        padding:3px 1px
    }
}
table tr td:nth-child(1){
    
	
}
table tr td:nth-child(10),table tr td:nth-child(13),table tr td:nth-child(16),table tr td:nth-child(19),table tr td:nth-child(22),table tr td:nth-child(7){
    
    background-color:#fff;
}</style>
</body>
</html>
