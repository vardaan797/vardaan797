<?php 
include"conn.php";
$htmlString = file_get_contents('https://dpboss.net/');
date_default_timezone_set("Asia/Kolkata");
//Create a new DOMDocument object.
$htmlDom = new DOMDocument;

//Load the HTML string into our DOMDocument object.
@$htmlDom->loadHTML($htmlString);

//Extract all h1 elements / tags from the HTML.
$h1Tags = $htmlDom->getElementsByTagName('h1');

//Extract all h2 elements / tags from the HTML.
$h2Tags = $htmlDom->getElementsByTagName('h2');

//Extract all h3 elements / tags from the HTML.
$h3Tags = $htmlDom->getElementsByTagName('h3');

//Extract all h4 elements / tags from the HTML.
$h4Tags = $htmlDom->getElementsByTagName('h4');

//Extract all h5 elements / tags from the HTML.
$h5Tags = $htmlDom->getElementsByTagName('h5');

//Extract all h6 elements / tags from the HTML.
$h6Tags = $htmlDom->getElementsByTagName('h6');

// Arrays to store H1 to H6 headings
$extractedH1Tags = [];
$extractedH2Tags = [];
$extractedH3Tags = [];
$extractedH4Tags = [];
$extractedH5Tags = [];
$extractedH6Tags = [];

// Loop for h1
foreach($h1Tags as $h1Tag){

    //Get the node value of h1 tag
    $h1Value = trim($h1Tag->nodeValue);

    $extractedH1Tags[] = $h1Value;
}

// Loop for h2
foreach($h2Tags as $h2Tag){

    //Get the node value of h2 tag
    $h2Value = trim($h2Tag->nodeValue);

    $extractedH2Tags[] = $h2Value;
}

// Loop for h3
foreach($h3Tags as $h3Tag){

    //Get the node value of h3 tag
    $h3Value = trim($h3Tag->nodeValue);

    $extractedH3Tags[] = $h3Value;
}

// Loop for h4
foreach($h4Tags as $h4Tag){

    //Get the node value of h4 tag
    $h4Value = trim($h4Tag->nodeValue);

    $extractedH4Tags[] = $h4Value;
}

// Loop for h5
foreach($h5Tags as $h5Tag){

    //Get the node value of h5 tag
    $h5Value = trim($h5Tag->nodeValue);

    $extractedH5Tags[] = $h5Value;
}

// Loop for h6
foreach($h6Tags as $h6Tag){

    //Get the node value of h6 tag
    $h6Value = trim($h6Tag->nodeValue);

    $extractedH6Tags[] = $h6Value;
}

$headingsArray = [
  "h1" => $extractedH1Tags,
  "h2" => $extractedH2Tags,
  "h3" => $extractedH3Tags,
  "h4" => $extractedH4Tags,
  "h5" => $extractedH5Tags,
  "h6" => $extractedH6Tags
];

$cou1=count($extractedH6Tags);
$count=0;
for($i=0;$i<$cou1;$i++){
$chk=0;
$str=explode(":",$extractedH6Tags[$i]);
$chk=count($str);
if($chk=='1'){
    $count++;
}
}
$cou=count($extractedH4Tags);
for($i=4;$i<$cou-16;$i++){
$c=($count-3)+$i;
$date=date("Y-m-d");


$qry_i="select * from `game` where `game_name`='$extractedH4Tags[$i]'";
$query_i=mysqli_query($link,$qry_i);
$row_cou=mysqli_num_rows($query_i);

if($row_cou>0){
$row_i=mysqli_fetch_assoc($query_i);   
$cqry1="select * from `result` where `game_id`='$row_i[id]' and `date`='$date'";
$cquery1=mysqli_query($link,$cqry1);
$rowchk1=mysqli_num_rows($cquery1);
if($rowchk1>0){
$im_row=mysqli_fetch_assoc($cquery1);
$arr=explode("-",$extractedH5Tags[$c]);
$qry="update `result` set `date`='$date',`fval`='$arr[0]',`mval`='$arr[1]',`lval`='$arr[2]' where `id`='$im_row[id]'";
mysqli_query($link,$qry);    
    
}
else
{
  $prev_date = date('Y-m-d', strtotime($date .' -1 day'));
  $cqry_i="select * from `result` where `game_id`='$row_i[id]' order by `id` desc";
  $cquery_i=mysqli_query($link,$cqry_i);
  $crow_i=mysqli_fetch_assoc($cquery_i);
  $arr=explode("-",$extractedH5Tags[$c]);
  if($crow_i['fval']!=$arr[0]){
  $qry="insert into `result` values ('','$date','$row_i[id]','$arr[0]','$arr[1]','$arr[2]')"; 
  mysqli_query($link,$qry); 
  }
}
}
}
$d=date("Y-m-d h:i:s");
$t="insert into `test` values('','$d')";
mysqli_query($link,$t);
?>