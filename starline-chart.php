<?php
ob_start();
?>
<?php 
include"conn.php";
session_start();
date_default_timezone_set("Asia/Kolkata");
?>
<?php
$qry="select * from `starline` order by `time` asc";
$query=mysqli_query($link,$qry);

$qarr=array();
while($row=mysqli_fetch_assoc($query)){
    $arr[]=$row;
}

$qry="select * from `starline_result` order by `id` desc";
$query=mysqli_query($link,$qry);
$rw=mysqli_fetch_assoc($query);
$ldate=$rw['date'];
$fdate="2021-06-15";

$date1=date_create($fdate);
$date2=date_create($ldate);
$diff=date_diff($date1,$date2);
$number_of_result=$diff->format("%a");
$number_of_result=$number_of_result+1;
$no_of_records_per_page = 1;
$total_pages = ceil($number_of_result / $no_of_records_per_page);
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sattaking  Dpboss | Satta Matka Boss | Kalyan Matka</title>
<meta name="description" content="Dpboss, Satta Matka, Boss Matka, Kalyan Matka Tips, matka result, Matka, Sattamatka, Matka Satta, Matka Charts, Matka Satta Result, Fix Matka" />
<meta name="keywords" content="kingsmatka, superkingmatka, superking, sattaking, satta matka, sattamatka, matka results, matka tips, matka charts, rajdhani night result, sattamataka143, milan day result, dpboss, satta matka chart, guessing forum, kalyan matka results, kalyan bazar, sridevi result, satta bazar, matka satta, matka satta result, satta, satta king" />
<link rel="icon" href="images/fav.png" type="image/x-icon">
<link href="style/index.css" rel="stylesheet" media="all" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background-image: linear-gradient(to right, #3f05e1, #7100e4, #9500e7, #b301e9, #cf12eb);">

<?php include 'header.php'; ?>
<div id="top"></div>
<table class="kalyanWhite">

                            <thead>

                                <tr>

                                    <th class="kalyanDateTd">Date</th>

                                        
                                        <th>10.00 AM</th>

                                    
                                        <th>11.00 PM</th>

                                    
                                        <th>12.00 PM</th>

                                    
                                        <th>01.00 PM</th>

                                    
                                        <th>02.00 PM</th>

                                    
                                        <th>03.00 PM</th>

                                    
                                        <th>04.00 PM</th>

                                    
                                        <th>05.00 PM</th>

                                    
                                        <th>06.00 PM</th>

                                    
                                        <th>07.00 PM</th>

                                    
                                        <th>08.00 PM</th>

                                    
                                        <th>09.00 PM</th>

                                    
                                </tr>

                            </thead>

                            <tbody>

                             
                                <tr>  

                                    <td class="dateFirst">10-09-2019<br></td>

                            


                            <td>268<br><span><b>6</b></span></td>





                            


                            <td>118<br><span><b>0</b></span></td>





                            


                            <td>340<br><span><b>7</b></span></td>





                            


                            <td>266<br><span><b>4</b></span></td>





                            


                            <td>390<br><span><b>2</b></span></td>





                            


                            <td>590<br><span><b>4</b></span></td>





                            


                            <td>279<br><span><b>8</b></span></td>





                            


                            <td>140<br><span><b>5</b></span></td>





                            


                            <td>157<br><span><b>3</b></span></td>





                            


                            <td>347<br><span><b>4</b></span></td>





                            


                            <td>485<br><span><b>7</b></span></td>





                            


                            <td>487<br><span><b>9</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">11-09-2019<br></td>

                            


                            <td>115<br><span><b>7</b></span></td>





                            


                            <td>278<br><span><b>7</b></span></td>





                            


                            <td>113<br><span><b>5</b></span></td>





                            


                            <td>336<br><span><b>2</b></span></td>





                            


                            <td>130<br><span><b>4</b></span></td>





                            


                            <td>370<br><span><b>0</b></span></td>





                            


                            <td>479<br><span><b>0</b></span></td>





                            


                            <td>667<br><span><b>9</b></span></td>





                            


                            <td>468<br><span><b>8</b></span></td>





                            


                            <td>459<br><span><b>8</b></span></td>





                            


                            <td>234<br><span><b>9</b></span></td>





                            


                            <td>489<br><span><b>1</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">12-09-2019<br></td>

                            


                            <td>118<br><span><b>0</b></span></td>





                            


                            <td>157<br><span><b>3</b></span></td>





                            


                            <td>338<br><span><b>4</b></span></td>





                            


                            <td>458<br><span><b>7</b></span></td>





                            


                            <td>599<br><span><b>3</b></span></td>





                            


                            <td>267<br><span><b>5</b></span></td>





                            


                            <td>379<br><span><b>9</b></span></td>





                            


                            <td>358<br><span><b>6</b></span></td>





                            


                            <td>245<br><span><b>1</b></span></td>





                            


                            <td>348<br><span><b>5</b></span></td>





                            


                            <td>356<br><span><b>4</b></span></td>





                            


                            <td>789<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">13-09-2019<br></td>

                            


                            <td>226<br><span><b>0</b></span></td>





                            


                            <td>229<br><span><b>3</b></span></td>





                            


                            <td>348<br><span><b>5</b></span></td>





                            


                            <td>289<br><span><b>9</b></span></td>





                            


                            <td>158<br><span><b>4</b></span></td>





                            


                            <td>390<br><span><b>2</b></span></td>





                            


                            <td>468<br><span><b>8</b></span></td>





                            


                            <td>178<br><span><b>6</b></span></td>





                            


                            <td>899<br><span><b>6</b></span></td>





                            


                            <td>788<br><span><b>3</b></span></td>





                            


                            <td>145<br><span><b>0</b></span></td>





                            


                            <td>459<br><span><b>8</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">14-09-2019<br></td>

                            


                            <td>778<br><span><b>2</b></span></td>





                            


                            <td>178<br><span><b>6</b></span></td>





                            


                            <td>389<br><span><b>0</b></span></td>





                            


                            <td>337<br><span><b>3</b></span></td>





                            


                            <td>189<br><span><b>8</b></span></td>





                            


                            <td>236<br><span><b>1</b></span></td>





                            


                            <td>489<br><span><b>1</b></span></td>





                            


                            <td>466<br><span><b>6</b></span></td>





                            


                            <td>158<br><span><b>4</b></span></td>





                            


                            <td>268<br><span><b>6</b></span></td>





                            


                            <td>138<br><span><b>2</b></span></td>





                            


                            <td>346<br><span><b>3</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">15-09-2019<br></td>

                            


                            <td>570<br><span><b>2</b></span></td>





                            


                            <td>458<br><span><b>7</b></span></td>





                            


                            <td>788<br><span><b>3</b></span></td>





                            


                            <td>380<br><span><b>1</b></span></td>





                            


                            <td>790<br><span><b>6</b></span></td>





                            


                            <td>158<br><span><b>4</b></span></td>





                            


                            <td>334<br><span><b>0</b></span></td>





                            


                            <td>127<br><span><b>0</b></span></td>





                            


                            <td>270<br><span><b>9</b></span></td>





                            


                            <td>677<br><span><b>0</b></span></td>





                            


                            <td>146<br><span><b>1</b></span></td>





                            


                            <td>246<br><span><b>2</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">16-09-2019<br></td>

                            


                            <td>268<br><span><b>6</b></span></td>





                            


                            <td>139<br><span><b>3</b></span></td>





                            


                            <td>277<br><span><b>6</b></span></td>





                            


                            <td>238<br><span><b>3</b></span></td>





                            


                            <td>179<br><span><b>7</b></span></td>





                            


                            <td>114<br><span><b>6</b></span></td>





                            


                            <td>588<br><span><b>1</b></span></td>





                            


                            <td>255<br><span><b>2</b></span></td>





                            


                            <td>256<br><span><b>3</b></span></td>





                            


                            <td>780<br><span><b>5</b></span></td>





                            


                            <td>158<br><span><b>4</b></span></td>





                            


                            <td>321<br><span><b>6</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">17-09-2019<br></td>

                            


                            <td>489<br><span><b>1</b></span></td>





                            


                            <td>245<br><span><b>1</b></span></td>





                            


                            <td>577<br><span><b>9</b></span></td>





                            


                            <td>249<br><span><b>5</b></span></td>





                            


                            <td>226<br><span><b>0</b></span></td>





                            


                            <td>189<br><span><b>8</b></span></td>





                            


                            <td>334<br><span><b>0</b></span></td>





                            


                            <td>260<br><span><b>8</b></span></td>





                            


                            <td>127<br><span><b>0</b></span></td>





                            


                            <td>455<br><span><b>4</b></span></td>





                            


                            <td>139<br><span><b>3</b></span></td>





                            


                            <td>421<br><span><b>7</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">18-09-2019<br></td>

                            


                            <td>348<br><span><b>5</b></span></td>





                            


                            <td>378<br><span><b>8</b></span></td>





                            


                            <td>258<br><span><b>5</b></span></td>





                            


                            <td>568<br><span><b>9</b></span></td>





                            


                            <td>140<br><span><b>5</b></span></td>





                            


                            <td>159<br><span><b>5</b></span></td>





                            


                            <td>127<br><span><b>0</b></span></td>





                            


                            <td>489<br><span><b>1</b></span></td>





                            


                            <td>125<br><span><b>8</b></span></td>





                            


                            <td>245<br><span><b>1</b></span></td>





                            


                            <td>889<br><span><b>5</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">19-09-2019<br></td>

                            


                            <td>129<br><span><b>2</b></span></td>





                            


                            <td>448<br><span><b>6</b></span></td>





                            


                            <td>789<br><span><b>4</b></span></td>





                            


                            <td>258<br><span><b>5</b></span></td>





                            


                            <td>568<br><span><b>9</b></span></td>





                            


                            <td>358<br><span><b>6</b></span></td>





                            


                            <td>888<br><span><b>4</b></span></td>





                            


                            <td>167<br><span><b>4</b></span></td>





                            


                            <td>367<br><span><b>6</b></span></td>





                            


                            <td>390<br><span><b>2</b></span></td>





                            


                            <td>136<br><span><b>0</b></span></td>





                            


                            <td>189<br><span><b>8</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">20-09-2019<br></td>

                            


                            <td>234<br><span><b>9</b></span></td>





                            


                            <td>778<br><span><b>2</b></span></td>





                            


                            <td>233<br><span><b>8</b></span></td>





                            


                            <td>799<br><span><b>5</b></span></td>





                            


                            <td>568<br><span><b>9</b></span></td>





                            


                            <td>577<br><span><b>9</b></span></td>





                            


                            <td>147<br><span><b>2</b></span></td>





                            


                            <td>589<br><span><b>2</b></span></td>





                            


                            <td>340<br><span><b>7</b></span></td>





                            


                            <td>899<br><span><b>6</b></span></td>





                            


                            <td>349<br><span><b>6</b></span></td>





                            


                            <td>180<br><span><b>9</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">21-09-2019<br></td>

                            


                            <td>126<br><span><b>9</b></span></td>





                            


                            <td>178<br><span><b>6</b></span></td>





                            


                            <td>122<br><span><b>5</b></span></td>





                            


                            <td>227<br><span><b>1</b></span></td>





                            


                            <td>370<br><span><b>0</b></span></td>





                            


                            <td>555<br><span><b>5</b></span></td>





                            


                            <td>789<br><span><b>4</b></span></td>





                            


                            <td>380<br><span><b>1</b></span></td>





                            


                            <td>489<br><span><b>1</b></span></td>





                            


                            <td>255<br><span><b>2</b></span></td>





                            


                            <td>456<br><span><b>5</b></span></td>





                            


                            <td>423<br><span><b>9</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">22-09-2019<br></td>

                            


                            <td>389<br><span><b>0</b></span></td>





                            


                            <td>578<br><span><b>0</b></span></td>





                            


                            <td>248<br><span><b>4</b></span></td>





                            


                            <td>237<br><span><b>2</b></span></td>





                            


                            <td>112<br><span><b>4</b></span></td>





                            


                            <td>457<br><span><b>6</b></span></td>





                            


                            <td>389<br><span><b>0</b></span></td>





                            


                            <td>257<br><span><b>4</b></span></td>





                            


                            <td>146<br><span><b>1</b></span></td>





                            


                            <td>359<br><span><b>7</b></span></td>





                            


                            <td>125<br><span><b>8</b></span></td>





                            


                            <td>127<br><span><b>0</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">23-09-2019<br></td>

                            


                            <td>168<br><span><b>5</b></span></td>





                            


                            <td>237<br><span><b>2</b></span></td>





                            


                            <td>155<br><span><b>1</b></span></td>





                            


                            <td>367<br><span><b>6</b></span></td>





                            


                            <td>125<br><span><b>8</b></span></td>





                            


                            <td>359<br><span><b>7</b></span></td>





                            


                            <td>667<br><span><b>9</b></span></td>





                            


                            <td>248<br><span><b>4</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            


                            <td>478<br><span><b>9</b></span></td>





                            


                            <td>178<br><span><b>6</b></span></td>





                            


                            <td>146<br><span><b>1</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">24-09-2019<br></td>

                            


                            <td>136<br><span><b>0</b></span></td>





                            


                            <td>245<br><span><b>1</b></span></td>





                            


                            <td>368<br><span><b>7</b></span></td>





                            


                            <td>149<br><span><b>4</b></span></td>





                            


                            <td>488<br><span><b>0</b></span></td>





                            


                            <td>157<br><span><b>3</b></span></td>





                            


                            <td>166<br><span><b>3</b></span></td>





                            


                            <td>249<br><span><b>5</b></span></td>





                            


                            <td>339<br><span><b>5</b></span></td>





                            


                            <td>579<br><span><b>1</b></span></td>





                            


                            <td>799<br><span><b>5</b></span></td>





                            


                            <td>137<br><span><b>1</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">25-09-2019<br></td>

                            


                            <td>389<br><span><b>0</b></span></td>





                            


                            <td>157<br><span><b>3</b></span></td>





                            


                            <td>490<br><span><b>3</b></span></td>





                            


                            <td>156<br><span><b>2</b></span></td>





                            


                            <td>668<br><span><b>0</b></span></td>





                            


                            <td>556<br><span><b>6</b></span></td>





                            


                            <td>880<br><span><b>6</b></span></td>





                            


                            <td>257<br><span><b>4</b></span></td>





                            


                            <td>245<br><span><b>1</b></span></td>





                            


                            <td>339<br><span><b>5</b></span></td>





                            


                            <td>368<br><span><b>7</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">26-09-2019<br></td>

                            


                            <td>178<br><span><b>6</b></span></td>





                            


                            <td>267<br><span><b>5</b></span></td>





                            


                            <td>568<br><span><b>9</b></span></td>





                            


                            <td>146<br><span><b>1</b></span></td>





                            


                            <td>234<br><span><b>9</b></span></td>





                            


                            <td>137<br><span><b>1</b></span></td>





                            


                            <td>177<br><span><b>5</b></span></td>





                            


                            <td>166<br><span><b>3</b></span></td>





                            


                            <td>267<br><span><b>5</b></span></td>





                            


                            <td>469<br><span><b>9</b></span></td>





                            


                            <td>369<br><span><b>8</b></span></td>





                            


                            <td>456<br><span><b>5</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">27-09-2019<br></td>

                            


                            <td>335<br><span><b>1</b></span></td>





                            


                            <td>366<br><span><b>5</b></span></td>





                            


                            <td>690<br><span><b>5</b></span></td>





                            


                            <td>790<br><span><b>6</b></span></td>





                            


                            <td>699<br><span><b>4</b></span></td>





                            


                            <td>369<br><span><b>8</b></span></td>





                            


                            <td>227<br><span><b>1</b></span></td>





                            


                            <td>570<br><span><b>2</b></span></td>





                            


                            <td>123<br><span><b>6</b></span></td>





                            


                            <td>589<br><span><b>2</b></span></td>





                            


                            <td>128<br><span><b>1</b></span></td>





                            


                            <td>789<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">28-09-2019<br></td>

                            


                            <td>239<br><span><b>4</b></span></td>





                            


                            <td>568<br><span><b>9</b></span></td>





                            


                            <td>660<br><span><b>2</b></span></td>





                            


                            <td>255<br><span><b>2</b></span></td>





                            


                            <td>267<br><span><b>5</b></span></td>





                            


                            <td>259<br><span><b>6</b></span></td>





                            


                            <td>179<br><span><b>7</b></span></td>





                            


                            <td>268<br><span><b>6</b></span></td>





                            


                            <td>139<br><span><b>3</b></span></td>





                            


                            <td>239<br><span><b>4</b></span></td>





                            


                            <td>138<br><span><b>2</b></span></td>





                            


                            <td>690<br><span><b>5</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">29-09-2019<br></td>

                            


                            <td>348<br><span><b>5</b></span></td>





                            


                            <td>460<br><span><b>0</b></span></td>





                            


                            <td>388<br><span><b>9</b></span></td>





                            


                            <td>128<br><span><b>1</b></span></td>





                            


                            <td>678<br><span><b>1</b></span></td>





                            


                            <td>112<br><span><b>4</b></span></td>





                            


                            <td>170<br><span><b>8</b></span></td>





                            


                            <td>346<br><span><b>3</b></span></td>





                            


                            <td>588<br><span><b>1</b></span></td>





                            


                            <td>770<br><span><b>4</b></span></td>





                            


                            <td>178<br><span><b>6</b></span></td>





                            


                            <td>177<br><span><b>5</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">30-09-2019<br></td>

                            


                            <td>558<br><span><b>8</b></span></td>





                            


                            <td>128<br><span><b>1</b></span></td>





                            


                            <td>178<br><span><b>6</b></span></td>





                            


                            <td>144<br><span><b>9</b></span></td>





                            


                            <td>459<br><span><b>8</b></span></td>





                            


                            <td>558<br><span><b>8</b></span></td>





                            


                            <td>268<br><span><b>6</b></span></td>





                            


                            <td>479<br><span><b>0</b></span></td>





                            


                            <td>244<br><span><b>0</b></span></td>





                            


                            <td>279<br><span><b>8</b></span></td>





                            


                            <td>134<br><span><b>8</b></span></td>





                            


                            <td>890<br><span><b>7</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">01-10-2019<br></td>

                            


                            <td>177<br><span><b>5</b></span></td>





                            


                            <td>166<br><span><b>3</b></span></td>





                            


                            <td>224<br><span><b>8</b></span></td>





                            


                            <td>890<br><span><b>7</b></span></td>





                            


                            <td>138<br><span><b>2</b></span></td>





                            


                            <td>899<br><span><b>6</b></span></td>





                            


                            <td>348<br><span><b>5</b></span></td>





                            


                            <td>334<br><span><b>0</b></span></td>





                            


                            <td>480<br><span><b>2</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            


                            <td>159<br><span><b>5</b></span></td>





                            


                            <td>780<br><span><b>5</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">02-10-2019<br></td>

                            


                            <td>128<br><span><b>1</b></span></td>





                            


                            <td>227<br><span><b>1</b></span></td>





                            


                            <td>470<br><span><b>1</b></span></td>





                            


                            <td>258<br><span><b>5</b></span></td>





                            


                            <td>368<br><span><b>7</b></span></td>





                            


                            <td>599<br><span><b>3</b></span></td>





                            


                            <td>458<br><span><b>7</b></span></td>





                            


                            <td>157<br><span><b>3</b></span></td>





                            


                            <td>338<br><span><b>4</b></span></td>





                            


                            <td>379<br><span><b>9</b></span></td>





                            


                            <td>344<br><span><b>1</b></span></td>





                            


                            <td>850<br><span><b>3</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">03-10-2019<br></td>

                            


                            <td>114<br><span><b>6</b></span></td>





                            


                            <td>134<br><span><b>8</b></span></td>





                            


                            <td>248<br><span><b>4</b></span></td>





                            


                            <td>340<br><span><b>7</b></span></td>





                            


                            <td>388<br><span><b>9</b></span></td>





                            


                            <td>579<br><span><b>1</b></span></td>





                            


                            <td>890<br><span><b>7</b></span></td>





                            


                            <td>299<br><span><b>0</b></span></td>





                            


                            <td>568<br><span><b>9</b></span></td>





                            


                            <td>470<br><span><b>1</b></span></td>





                            


                            <td>125<br><span><b>8</b></span></td>





                            


                            <td>568<br><span><b>9</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">04-10-2019<br></td>

                            


                            <td>129<br><span><b>2</b></span></td>





                            


                            <td>158<br><span><b>4</b></span></td>





                            


                            <td>233<br><span><b>8</b></span></td>





                            


                            <td>256<br><span><b>3</b></span></td>





                            


                            <td>125<br><span><b>8</b></span></td>





                            


                            <td>255<br><span><b>2</b></span></td>





                            


                            <td>114<br><span><b>6</b></span></td>





                            


                            <td>257<br><span><b>4</b></span></td>





                            


                            <td>118<br><span><b>0</b></span></td>





                            


                            <td>338<br><span><b>4</b></span></td>





                            


                            <td>160<br><span><b>7</b></span></td>





                            


                            <td>653<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">05-10-2019<br></td>

                            


                            <td>168<br><span><b>5</b></span></td>





                            


                            <td>349<br><span><b>6</b></span></td>





                            


                            <td>460<br><span><b>0</b></span></td>





                            


                            <td>390<br><span><b>2</b></span></td>





                            


                            <td>146<br><span><b>1</b></span></td>





                            


                            <td>699<br><span><b>4</b></span></td>





                            


                            <td>269<br><span><b>7</b></span></td>





                            


                            <td>134<br><span><b>8</b></span></td>





                            


                            <td>789<br><span><b>4</b></span></td>





                            


                            <td>699<br><span><b>4</b></span></td>





                            


                            <td>366<br><span><b>5</b></span></td>





                            


                            <td>458<br><span><b>7</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">06-10-2019<br></td>

                            


                            <td>156<br><span><b>2</b></span></td>





                            


                            <td>577<br><span><b>9</b></span></td>





                            


                            <td>267<br><span><b>5</b></span></td>





                            


                            <td>139<br><span><b>3</b></span></td>





                            


                            <td>155<br><span><b>1</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            


                            <td>355<br><span><b>3</b></span></td>





                            


                            <td>124<br><span><b>7</b></span></td>





                            


                            <td>147<br><span><b>2</b></span></td>





                            


                            <td>169<br><span><b>6</b></span></td>





                            


                            <td>127<br><span><b>0</b></span></td>





                            


                            <td>960<br><span><b>5</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">07-10-2019<br></td>

                            


                            <td>249<br><span><b>5</b></span></td>





                            


                            <td>259<br><span><b>6</b></span></td>





                            


                            <td>455<br><span><b>4</b></span></td>





                            


                            <td>399<br><span><b>1</b></span></td>





                            


                            <td>244<br><span><b>0</b></span></td>





                            


                            <td>139<br><span><b>3</b></span></td>





                            


                            <td>678<br><span><b>1</b></span></td>





                            


                            <td>115<br><span><b>7</b></span></td>





                            


                            <td>118<br><span><b>0</b></span></td>





                            


                            <td>258<br><span><b>5</b></span></td>





                            


                            <td>467<br><span><b>7</b></span></td>





                            


                            <td>650<br><span><b>1</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">08-10-2019<br></td>

                            


                            <td>679<br><span><b>2</b></span></td>





                            


                            <td>268<br><span><b>6</b></span></td>





                            


                            <td>390<br><span><b>2</b></span></td>





                            


                            <td>126<br><span><b>9</b></span></td>





                            


                            <td>345<br><span><b>2</b></span></td>





                            


                            <td>579<br><span><b>1</b></span></td>





                            


                            <td>234<br><span><b>9</b></span></td>





                            


                            <td>358<br><span><b>6</b></span></td>





                            


                            <td>359<br><span><b>7</b></span></td>





                            


                            <td>579<br><span><b>1</b></span></td>





                            


                            <td>288<br><span><b>8</b></span></td>





                            


                            <td>147<br><span><b>2</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">09-10-2019<br></td>

                            


                            <td>248<br><span><b>4</b></span></td>





                            


                            <td>238<br><span><b>3</b></span></td>





                            


                            <td>666<br><span><b>8</b></span></td>





                            


                            <td>144<br><span><b>9</b></span></td>





                            


                            <td>446<br><span><b>4</b></span></td>





                            


                            <td>249<br><span><b>5</b></span></td>





                            


                            <td>368<br><span><b>7</b></span></td>





                            


                            <td>378<br><span><b>8</b></span></td>





                            


                            <td>139<br><span><b>3</b></span></td>





                            


                            <td>345<br><span><b>2</b></span></td>





                            


                            <td>279<br><span><b>8</b></span></td>





                            


                            <td>258<br><span><b>5</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">10-10-2019<br></td>

                            


                            <td>123<br><span><b>6</b></span></td>





                            


                            <td>780<br><span><b>5</b></span></td>





                            


                            <td>890<br><span><b>7</b></span></td>





                            


                            <td>157<br><span><b>3</b></span></td>





                            


                            <td>345<br><span><b>2</b></span></td>





                            


                            <td>346<br><span><b>3</b></span></td>





                            


                            <td>567<br><span><b>8</b></span></td>





                            


                            <td>119<br><span><b>1</b></span></td>





                            


                            <td>899<br><span><b>6</b></span></td>





                            


                            <td>230<br><span><b>5</b></span></td>





                            


                            <td>168<br><span><b>5</b></span></td>





                            


                            <td>369<br><span><b>8</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">11-10-2019<br></td>

                            


                            <td>135<br><span><b>9</b></span></td>





                            


                            <td>458<br><span><b>7</b></span></td>





                            


                            <td>460<br><span><b>0</b></span></td>





                            


                            <td>389<br><span><b>0</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            


                            <td>468<br><span><b>8</b></span></td>





                            


                            <td>240<br><span><b>6</b></span></td>





                            


                            <td>379<br><span><b>9</b></span></td>





                            


                            <td>138<br><span><b>2</b></span></td>





                            


                            <td>138<br><span><b>2</b></span></td>





                            


                            <td>245<br><span><b>1</b></span></td>





                            


                            <td>126<br><span><b>9</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">12-10-2019<br></td>

                            


                            <td>668<br><span><b>0</b></span></td>





                            


                            <td>566<br><span><b>7</b></span></td>





                            


                            <td>257<br><span><b>4</b></span></td>





                            


                            <td>136<br><span><b>0</b></span></td>





                            


                            <td>889<br><span><b>5</b></span></td>





                            


                            <td>135<br><span><b>9</b></span></td>





                            


                            <td>489<br><span><b>1</b></span></td>





                            


                            <td>568<br><span><b>9</b></span></td>





                            


                            <td>249<br><span><b>5</b></span></td>





                            


                            <td>135<br><span><b>9</b></span></td>





                            


                            <td>135<br><span><b>9</b></span></td>





                            


                            <td>542<br><span><b>1</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">13-10-2019<br></td>

                            


                            <td>688<br><span><b>2</b></span></td>





                            


                            <td>110<br><span><b>2</b></span></td>





                            


                            <td>248<br><span><b>4</b></span></td>





                            


                            <td>189<br><span><b>8</b></span></td>





                            


                            <td>579<br><span><b>1</b></span></td>





                            


                            <td>456<br><span><b>5</b></span></td>





                            


                            <td>224<br><span><b>8</b></span></td>





                            


                            <td>247<br><span><b>3</b></span></td>





                            


                            <td>489<br><span><b>1</b></span></td>





                            


                            <td>168<br><span><b>5</b></span></td>





                            


                            <td>137<br><span><b>1</b></span></td>





                            


                            <td>631<br><span><b>0</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">14-10-2019<br></td>

                            


                            <td>123<br><span><b>6</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            


                            <td>126<br><span><b>9</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            


                            <td>780<br><span><b>5</b></span></td>





                            


                            <td>267<br><span><b>5</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            


                            <td>127<br><span><b>0</b></span></td>





                            


                            <td>388<br><span><b>9</b></span></td>





                            


                            <td>388<br><span><b>9</b></span></td>





                            


                            <td>789<br><span><b>4</b></span></td>





                            


                            <td>569<br><span><b>0</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">15-10-2019<br></td>

                            


                            <td>257<br><span><b>4</b></span></td>





                            


                            <td>189<br><span><b>8</b></span></td>





                            


                            <td>269<br><span><b>7</b></span></td>





                            


                            <td>678<br><span><b>1</b></span></td>





                            


                            <td>159<br><span><b>5</b></span></td>





                            


                            <td>256<br><span><b>3</b></span></td>





                            


                            <td>258<br><span><b>5</b></span></td>





                            


                            <td>389<br><span><b>0</b></span></td>





                            


                            <td>336<br><span><b>2</b></span></td>





                            


                            <td>678<br><span><b>1</b></span></td>





                            


                            <td>289<br><span><b>9</b></span></td>





                            


                            <td>950<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">16-10-2019<br></td>

                            


                            <td>569<br><span><b>0</b></span></td>





                            


                            <td>890<br><span><b>7</b></span></td>





                            


                            <td>129<br><span><b>2</b></span></td>





                            


                            <td>134<br><span><b>8</b></span></td>





                            


                            <td>570<br><span><b>2</b></span></td>





                            


                            <td>238<br><span><b>3</b></span></td>





                            


                            <td>359<br><span><b>7</b></span></td>





                            


                            <td>579<br><span><b>1</b></span></td>





                            


                            <td>349<br><span><b>6</b></span></td>





                            


                            <td>279<br><span><b>8</b></span></td>





                            


                            <td>448<br><span><b>6</b></span></td>





                            


                            <td>345<br><span><b>2</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">17-10-2019<br></td>

                            


                            <td>179<br><span><b>7</b></span></td>





                            


                            <td>688<br><span><b>2</b></span></td>





                            


                            <td>559<br><span><b>9</b></span></td>





                            


                            <td>367<br><span><b>6</b></span></td>





                            


                            <td>566<br><span><b>7</b></span></td>





                            


                            <td>238<br><span><b>3</b></span></td>





                            


                            <td>588<br><span><b>1</b></span></td>





                            


                            <td>468<br><span><b>8</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            


                            <td>145<br><span><b>0</b></span></td>





                            


                            <td>148<br><span><b>3</b></span></td>





                            


                            <td>457<br><span><b>2</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">18-10-2019<br></td>

                            


                            <td>589<br><span><b>2</b></span></td>





                            


                            <td>147<br><span><b>2</b></span></td>





                            


                            <td>112<br><span><b>4</b></span></td>





                            


                            <td>555<br><span><b>5</b></span></td>





                            


                            <td>578<br><span><b>0</b></span></td>





                            


                            <td>369<br><span><b>8</b></span></td>





                            


                            <td>355<br><span><b>3</b></span></td>





                            


                            <td>289<br><span><b>9</b></span></td>





                            


                            <td>260<br><span><b>8</b></span></td>





                            


                            <td>368<br><span><b>7</b></span></td>





                            


                            <td>136<br><span><b>0</b></span></td>





                            


                            <td>560<br><span><b>1</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">19-10-2019<br></td>

                            


                            <td>559<br><span><b>9</b></span></td>





                            


                            <td>359<br><span><b>7</b></span></td>





                            


                            <td>580<br><span><b>3</b></span></td>





                            


                            <td>358<br><span><b>6</b></span></td>





                            


                            <td>688<br><span><b>2</b></span></td>





                            


                            <td>466<br><span><b>6</b></span></td>





                            


                            <td>679<br><span><b>2</b></span></td>





                            


                            <td>135<br><span><b>9</b></span></td>





                            


                            <td>123<br><span><b>6</b></span></td>





                            


                            <td>157<br><span><b>3</b></span></td>





                            


                            <td>449<br><span><b>7</b></span></td>





                            


                            <td>970<br><span><b>6</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">20-10-2019<br></td>

                            


                            <td>227<br><span><b>1</b></span></td>





                            


                            <td>348<br><span><b>5</b></span></td>





                            


                            <td>146<br><span><b>1</b></span></td>





                            


                            <td>190<br><span><b>0</b></span></td>





                            


                            <td>560<br><span><b>1</b></span></td>





                            


                            <td>237<br><span><b>2</b></span></td>





                            


                            <td>246<br><span><b>2</b></span></td>





                            


                            <td>355<br><span><b>3</b></span></td>





                            


                            <td>122<br><span><b>5</b></span></td>





                            


                            <td>345<br><span><b>2</b></span></td>





                            


                            <td>350<br><span><b>8</b></span></td>





                            


                            <td>840<br><span><b>2</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">21-10-2019<br></td>

                            


                            <td>468<br><span><b>8</b></span></td>





                            


                            <td>457<br><span><b>6</b></span></td>





                            


                            <td>378<br><span><b>8</b></span></td>





                            


                            <td>145<br><span><b>0</b></span></td>





                            


                            <td>399<br><span><b>1</b></span></td>





                            


                            <td>589<br><span><b>2</b></span></td>





                            


                            <td>370<br><span><b>0</b></span></td>





                            


                            <td>499<br><span><b>2</b></span></td>





                            


                            <td>246<br><span><b>2</b></span></td>





                            


                            <td>379<br><span><b>9</b></span></td>





                            


                            <td>139<br><span><b>3</b></span></td>





                            


                            <td>685<br><span><b>9</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">22-10-2019<br></td>

                            


                            <td>455<br><span><b>4</b></span></td>





                            


                            <td>467<br><span><b>7</b></span></td>





                            


                            <td>169<br><span><b>6</b></span></td>





                            


                            <td>479<br><span><b>0</b></span></td>





                            


                            <td>134<br><span><b>8</b></span></td>





                            


                            <td>228<br><span><b>2</b></span></td>





                            


                            <td>468<br><span><b>8</b></span></td>





                            


                            <td>155<br><span><b>1</b></span></td>





                            


                            <td>113<br><span><b>5</b></span></td>





                            


                            <td>245<br><span><b>1</b></span></td>





                            


                            <td>123<br><span><b>6</b></span></td>





                            


                            <td>268<br><span><b>6</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">23-10-2019<br></td>

                            


                            <td>588<br><span><b>1</b></span></td>





                            


                            <td>135<br><span><b>9</b></span></td>





                            


                            <td>279<br><span><b>8</b></span></td>





                            


                            <td>358<br><span><b>6</b></span></td>





                            


                            <td>456<br><span><b>5</b></span></td>





                            


                            <td>148<br><span><b>3</b></span></td>





                            


                            <td>233<br><span><b>8</b></span></td>





                            


                            <td>139<br><span><b>3</b></span></td>





                            


                            <td>159<br><span><b>5</b></span></td>





                            


                            <td>178<br><span><b>6</b></span></td>





                            


                            <td>468<br><span><b>8</b></span></td>





                            


                            <td>489<br><span><b>1</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">24-10-2019<br></td>

                            


                            <td>134<br><span><b>8</b></span></td>





                            


                            <td>466<br><span><b>6</b></span></td>





                            


                            <td>148<br><span><b>3</b></span></td>





                            


                            <td>234<br><span><b>9</b></span></td>





                            


                            <td>478<br><span><b>9</b></span></td>





                            


                            <td>155<br><span><b>1</b></span></td>





                            


                            <td>770<br><span><b>4</b></span></td>





                            


                            <td>167<br><span><b>4</b></span></td>





                            


                            <td>677<br><span><b>0</b></span></td>





                            


                            <td>579<br><span><b>1</b></span></td>





                            


                            <td>558<br><span><b>8</b></span></td>





                            


                            <td>732<br><span><b>2</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">25-10-2019<br></td>

                            


                            <td>367<br><span><b>6</b></span></td>





                            


                            <td>158<br><span><b>4</b></span></td>





                            


                            <td>166<br><span><b>3</b></span></td>





                            


                            <td>558<br><span><b>8</b></span></td>





                            


                            <td>137<br><span><b>1</b></span></td>





                            


                            <td>569<br><span><b>0</b></span></td>





                            


                            <td>257<br><span><b>4</b></span></td>





                            


                            <td>122<br><span><b>5</b></span></td>





                            


                            <td>369<br><span><b>8</b></span></td>





                            


                            <td>778<br><span><b>2</b></span></td>





                            


                            <td>167<br><span><b>4</b></span></td>





                            


                            <td>930<br><span><b>2</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">26-10-2019<br></td>

                            


                            <td>459<br><span><b>8</b></span></td>





                            


                            <td>140<br><span><b>5</b></span></td>





                            


                            <td>579<br><span><b>1</b></span></td>





                            


                            <td>445<br><span><b>3</b></span></td>





                            


                            <td>155<br><span><b>1</b></span></td>





                            


                            <td>670<br><span><b>3</b></span></td>





                            


                            <td>240<br><span><b>6</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            


                            <td>338<br><span><b>4</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            


                            <td>279<br><span><b>8</b></span></td>





                            


                            <td>125<br><span><b>8</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">30-10-2019<br></td>

                            


                            <td>490<br><span><b>3</b></span></td>





                            


                            <td>770<br><span><b>4</b></span></td>





                            


                            <td>679<br><span><b>2</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            


                            <td>446<br><span><b>4</b></span></td>





                            


                            <td>238<br><span><b>3</b></span></td>





                            


                            <td>199<br><span><b>9</b></span></td>





                            


                            <td>468<br><span><b>8</b></span></td>





                            


                            <td>147<br><span><b>2</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            


                            <td>239<br><span><b>4</b></span></td>





                            


                            <td>630<br><span><b>9</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">31-10-2019<br></td>

                            


                            <td>666<br><span><b>8</b></span></td>





                            


                            <td>499<br><span><b>2</b></span></td>





                            


                            <td>356<br><span><b>4</b></span></td>





                            


                            <td>135<br><span><b>9</b></span></td>





                            


                            <td>369<br><span><b>8</b></span></td>





                            


                            <td>358<br><span><b>6</b></span></td>





                            


                            <td>358<br><span><b>6</b></span></td>





                            


                            <td>158<br><span><b>4</b></span></td>





                            


                            <td>125<br><span><b>8</b></span></td>





                            


                            <td>347<br><span><b>4</b></span></td>





                            


                            <td>488<br><span><b>0</b></span></td>





                            


                            <td>980<br><span><b>7</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">01-11-2019<br></td>

                            


                            <td>235<br><span><b>0</b></span></td>





                            


                            <td>112<br><span><b>4</b></span></td>





                            


                            <td>158<br><span><b>4</b></span></td>





                            


                            <td>345<br><span><b>2</b></span></td>





                            


                            <td>148<br><span><b>3</b></span></td>





                            


                            <td>459<br><span><b>8</b></span></td>





                            


                            <td>579<br><span><b>1</b></span></td>





                            


                            <td>477<br><span><b>8</b></span></td>





                            


                            <td>278<br><span><b>7</b></span></td>





                            


                            <td>190<br><span><b>0</b></span></td>





                            


                            <td>336<br><span><b>2</b></span></td>





                            


                            <td>654<br><span><b>5</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">02-11-2019<br></td>

                            


                            <td>115<br><span><b>7</b></span></td>





                            


                            <td>678<br><span><b>1</b></span></td>





                            


                            <td>299<br><span><b>0</b></span></td>





                            


                            <td>560<br><span><b>1</b></span></td>





                            


                            <td>690<br><span><b>5</b></span></td>





                            


                            <td>230<br><span><b>5</b></span></td>





                            


                            <td>489<br><span><b>1</b></span></td>





                            


                            <td>112<br><span><b>4</b></span></td>





                            


                            <td>115<br><span><b>7</b></span></td>





                            


                            <td>134<br><span><b>8</b></span></td>





                            


                            <td>347<br><span><b>4</b></span></td>





                            


                            <td>639<br><span><b>8</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">03-11-2019<br></td>

                            


                            <td>137<br><span><b>1</b></span></td>





                            


                            <td>560<br><span><b>1</b></span></td>





                            


                            <td>789<br><span><b>4</b></span></td>





                            


                            <td>456<br><span><b>5</b></span></td>





                            


                            <td>449<br><span><b>7</b></span></td>





                            


                            <td>340<br><span><b>7</b></span></td>





                            


                            <td>367<br><span><b>6</b></span></td>





                            


                            <td>244<br><span><b>0</b></span></td>





                            


                            <td>166<br><span><b>3</b></span></td>





                            


                            <td>119<br><span><b>1</b></span></td>





                            


                            <td>167<br><span><b>4</b></span></td>





                            


                            <td>786<br><span><b>1</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">04-11-2019<br></td>

                            


                            <td>238<br><span><b>3</b></span></td>





                            


                            <td>279<br><span><b>8</b></span></td>





                            


                            <td>478<br><span><b>9</b></span></td>





                            


                            <td>357<br><span><b>5</b></span></td>





                            


                            <td>136<br><span><b>0</b></span></td>





                            


                            <td>449<br><span><b>7</b></span></td>





                            


                            <td>247<br><span><b>3</b></span></td>





                            


                            <td>389<br><span><b>0</b></span></td>





                            


                            <td>460<br><span><b>0</b></span></td>





                            


                            <td>670<br><span><b>3</b></span></td>





                            


                            <td>237<br><span><b>2</b></span></td>





                            


                            <td>940<br><span><b>3</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">05-11-2019<br></td>

                            


                            <td>189<br><span><b>8</b></span></td>





                            


                            <td>268<br><span><b>6</b></span></td>





                            


                            <td>130<br><span><b>4</b></span></td>





                            


                            <td>189<br><span><b>8</b></span></td>





                            


                            <td>389<br><span><b>0</b></span></td>





                            


                            <td>119<br><span><b>1</b></span></td>





                            


                            <td>133<br><span><b>7</b></span></td>





                            


                            <td>350<br><span><b>8</b></span></td>





                            


                            <td>126<br><span><b>9</b></span></td>





                            


                            <td>247<br><span><b>3</b></span></td>





                            


                            <td>226<br><span><b>0</b></span></td>





                            


                            <td>263<br><span><b>1</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">06-11-2019<br></td>

                            


                            <td>179<br><span><b>7</b></span></td>





                            


                            <td>990<br><span><b>8</b></span></td>





                            


                            <td>126<br><span><b>9</b></span></td>





                            


                            <td>157<br><span><b>3</b></span></td>





                            


                            <td>125<br><span><b>8</b></span></td>





                            


                            <td>347<br><span><b>4</b></span></td>





                            


                            <td>139<br><span><b>3</b></span></td>





                            


                            <td>578<br><span><b>0</b></span></td>





                            


                            <td>179<br><span><b>7</b></span></td>





                            


                            <td>467<br><span><b>7</b></span></td>





                            


                            <td>146<br><span><b>1</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">07-11-2019<br></td>

                            


                            <td>256<br><span><b>3</b></span></td>





                            


                            <td>123<br><span><b>6</b></span></td>





                            


                            <td>389<br><span><b>0</b></span></td>





                            


                            <td>188<br><span><b>7</b></span></td>





                            


                            <td>567<br><span><b>8</b></span></td>





                            


                            <td>369<br><span><b>8</b></span></td>





                            


                            <td>468<br><span><b>8</b></span></td>





                            


                            <td>245<br><span><b>1</b></span></td>





                            


                            <td>158<br><span><b>4</b></span></td>





                            


                            <td>260<br><span><b>8</b></span></td>





                            


                            <td>269<br><span><b>7</b></span></td>





                            


                            <td>423<br><span><b>9</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">08-11-2019<br></td>

                            


                            <td>559<br><span><b>9</b></span></td>





                            


                            <td>236<br><span><b>1</b></span></td>





                            


                            <td>679<br><span><b>2</b></span></td>





                            


                            <td>136<br><span><b>0</b></span></td>





                            


                            <td>257<br><span><b>4</b></span></td>





                            


                            <td>112<br><span><b>4</b></span></td>





                            


                            <td>179<br><span><b>7</b></span></td>





                            


                            <td>247<br><span><b>3</b></span></td>





                            


                            <td>236<br><span><b>1</b></span></td>





                            


                            <td>499<br><span><b>2</b></span></td>





                            


                            <td>129<br><span><b>2</b></span></td>





                            


                            <td>710<br><span><b>8</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">09-11-2019<br></td>

                            


                            <td>256<br><span><b>3</b></span></td>





                            


                            <td>790<br><span><b>6</b></span></td>





                            


                            <td>135<br><span><b>9</b></span></td>





                            


                            <td>113<br><span><b>5</b></span></td>





                            


                            <td>559<br><span><b>9</b></span></td>





                            


                            <td>280<br><span><b>0</b></span></td>





                            


                            <td>266<br><span><b>4</b></span></td>





                            


                            <td>124<br><span><b>7</b></span></td>





                            


                            <td>356<br><span><b>4</b></span></td>





                            


                            <td>167<br><span><b>4</b></span></td>





                            


                            <td>138<br><span><b>2</b></span></td>





                            


                            <td>510<br><span><b>6</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">10-11-2019<br></td>

                            


                            <td>135<br><span><b>9</b></span></td>





                            


                            <td>559<br><span><b>9</b></span></td>





                            


                            <td>567<br><span><b>8</b></span></td>





                            


                            <td>479<br><span><b>0</b></span></td>





                            


                            <td>247<br><span><b>3</b></span></td>





                            


                            <td>344<br><span><b>1</b></span></td>





                            


                            <td>289<br><span><b>9</b></span></td>





                            


                            <td>446<br><span><b>4</b></span></td>





                            


                            <td>246<br><span><b>2</b></span></td>





                            


                            <td>179<br><span><b>7</b></span></td>





                            


                            <td>555<br><span><b>5</b></span></td>





                            


                            <td>850<br><span><b>3</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">11-11-2019<br></td>

                            


                            <td>179<br><span><b>7</b></span></td>





                            


                            <td>125<br><span><b>8</b></span></td>





                            


                            <td>367<br><span><b>6</b></span></td>





                            


                            <td>258<br><span><b>5</b></span></td>





                            


                            <td>557<br><span><b>7</b></span></td>





                            


                            <td>245<br><span><b>1</b></span></td>





                            


                            <td>135<br><span><b>9</b></span></td>





                            


                            <td>136<br><span><b>0</b></span></td>





                            


                            <td>148<br><span><b>3</b></span></td>





                            


                            <td>488<br><span><b>0</b></span></td>





                            


                            <td>258<br><span><b>5</b></span></td>





                            


                            <td>712<br><span><b>0</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">12-11-2019<br></td>

                            


                            <td>468<br><span><b>8</b></span></td>





                            


                            <td>145<br><span><b>0</b></span></td>





                            


                            <td>138<br><span><b>2</b></span></td>





                            


                            <td>225<br><span><b>9</b></span></td>





                            


                            <td>239<br><span><b>4</b></span></td>





                            


                            <td>127<br><span><b>0</b></span></td>





                            


                            <td>158<br><span><b>4</b></span></td>





                            


                            <td>113<br><span><b>5</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            


                            <td>156<br><span><b>2</b></span></td>





                            


                            <td>566<br><span><b>7</b></span></td>





                            


                            <td>692<br><span><b>7</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">13-11-2019<br></td>

                            


                            <td>377<br><span><b>7</b></span></td>





                            


                            <td>589<br><span><b>2</b></span></td>





                            


                            <td>234<br><span><b>9</b></span></td>





                            


                            <td>449<br><span><b>7</b></span></td>





                            


                            <td>266<br><span><b>4</b></span></td>





                            


                            <td>366<br><span><b>5</b></span></td>





                            


                            <td>449<br><span><b>7</b></span></td>





                            


                            <td>110<br><span><b>2</b></span></td>





                            


                            <td>678<br><span><b>1</b></span></td>





                            


                            <td>169<br><span><b>6</b></span></td>





                            


                            <td>149<br><span><b>4</b></span></td>





                            


                            <td>920<br><span><b>1</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">14-11-2019<br></td>

                            


                            <td>144<br><span><b>9</b></span></td>





                            


                            <td>344<br><span><b>1</b></span></td>





                            


                            <td>590<br><span><b>4</b></span></td>





                            


                            <td>570<br><span><b>2</b></span></td>





                            


                            <td>457<br><span><b>6</b></span></td>





                            


                            <td>139<br><span><b>3</b></span></td>





                            


                            <td>226<br><span><b>0</b></span></td>





                            


                            <td>245<br><span><b>1</b></span></td>





                            


                            <td>168<br><span><b>5</b></span></td>





                            


                            <td>247<br><span><b>3</b></span></td>





                            


                            <td>447<br><span><b>5</b></span></td>





                            


                            <td>458<br><span><b>7</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">15-11-2019<br></td>

                            


                            <td>466<br><span><b>6</b></span></td>





                            


                            <td>589<br><span><b>2</b></span></td>





                            


                            <td>790<br><span><b>6</b></span></td>





                            


                            <td>349<br><span><b>6</b></span></td>





                            


                            <td>379<br><span><b>9</b></span></td>





                            


                            <td>377<br><span><b>7</b></span></td>





                            


                            <td>679<br><span><b>2</b></span></td>





                            


                            <td>347<br><span><b>4</b></span></td>





                            


                            <td>114<br><span><b>6</b></span></td>





                            


                            <td>246<br><span><b>2</b></span></td>





                            


                            <td>779<br><span><b>3</b></span></td>





                            


                            <td>610<br><span><b>7</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">16-11-2019<br></td>

                            


                            <td>890<br><span><b>7</b></span></td>





                            


                            <td>259<br><span><b>6</b></span></td>





                            


                            <td>337<br><span><b>3</b></span></td>





                            


                            <td>299<br><span><b>0</b></span></td>





                            


                            <td>245<br><span><b>1</b></span></td>





                            


                            <td>129<br><span><b>2</b></span></td>





                            


                            <td>134<br><span><b>8</b></span></td>





                            


                            <td>478<br><span><b>9</b></span></td>





                            


                            <td>360<br><span><b>9</b></span></td>





                            


                            <td>389<br><span><b>0</b></span></td>





                            


                            <td>137<br><span><b>1</b></span></td>





                            


                            <td>888<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">17-11-2019<br></td>

                            


                            <td>299<br><span><b>0</b></span></td>





                            


                            <td>129<br><span><b>2</b></span></td>





                            


                            <td>169<br><span><b>6</b></span></td>





                            


                            <td>369<br><span><b>8</b></span></td>





                            


                            <td>359<br><span><b>7</b></span></td>





                            


                            <td>348<br><span><b>5</b></span></td>





                            


                            <td>129<br><span><b>2</b></span></td>





                            


                            <td>289<br><span><b>9</b></span></td>





                            


                            <td>169<br><span><b>6</b></span></td>





                            


                            <td>660<br><span><b>2</b></span></td>





                            


                            <td>139<br><span><b>3</b></span></td>





                            


                            <td>998<br><span><b>6</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">18-11-2019<br></td>

                            


                            <td>367<br><span><b>6</b></span></td>





                            


                            <td>240<br><span><b>6</b></span></td>





                            


                            <td>138<br><span><b>2</b></span></td>





                            


                            <td>117<br><span><b>9</b></span></td>





                            


                            <td>468<br><span><b>8</b></span></td>





                            


                            <td>379<br><span><b>9</b></span></td>





                            


                            <td>147<br><span><b>2</b></span></td>





                            


                            <td>224<br><span><b>8</b></span></td>





                            


                            <td>117<br><span><b>9</b></span></td>





                            


                            <td>378<br><span><b>8</b></span></td>





                            


                            <td>489<br><span><b>1</b></span></td>





                            


                            <td>744<br><span><b>5</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">19-11-2019<br></td>

                            


                            <td>678<br><span><b>1</b></span></td>





                            


                            <td>122<br><span><b>5</b></span></td>





                            


                            <td>569<br><span><b>0</b></span></td>





                            


                            <td>356<br><span><b>4</b></span></td>





                            


                            <td>490<br><span><b>3</b></span></td>





                            


                            <td>556<br><span><b>6</b></span></td>





                            


                            <td>356<br><span><b>4</b></span></td>





                            


                            <td>588<br><span><b>1</b></span></td>





                            


                            <td>390<br><span><b>2</b></span></td>





                            


                            <td>770<br><span><b>4</b></span></td>





                            


                            <td>126<br><span><b>9</b></span></td>





                            


                            <td>665<br><span><b>7</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">20-11-2019<br></td>

                            


                            <td>780<br><span><b>5</b></span></td>





                            


                            <td>268<br><span><b>6</b></span></td>





                            


                            <td>589<br><span><b>2</b></span></td>





                            


                            <td>257<br><span><b>4</b></span></td>





                            


                            <td>569<br><span><b>0</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            


                            <td>115<br><span><b>7</b></span></td>





                            


                            <td>258<br><span><b>5</b></span></td>





                            


                            <td>136<br><span><b>0</b></span></td>





                            


                            <td>560<br><span><b>1</b></span></td>





                            


                            <td>366<br><span><b>5</b></span></td>





                            


                            <td>112<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">21-11-2019<br></td>

                            


                            <td>337<br><span><b>3</b></span></td>





                            


                            <td>299<br><span><b>0</b></span></td>





                            


                            <td>469<br><span><b>9</b></span></td>





                            


                            <td>255<br><span><b>2</b></span></td>





                            


                            <td>167<br><span><b>4</b></span></td>





                            


                            <td>455<br><span><b>4</b></span></td>





                            


                            <td>268<br><span><b>6</b></span></td>





                            


                            <td>789<br><span><b>4</b></span></td>





                            


                            <td>170<br><span><b>8</b></span></td>





                            


                            <td>258<br><span><b>5</b></span></td>





                            


                            <td>567<br><span><b>8</b></span></td>





                            


                            <td>332<br><span><b>8</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">22-11-2019<br></td>

                            


                            <td>579<br><span><b>1</b></span></td>





                            


                            <td>599<br><span><b>3</b></span></td>





                            


                            <td>456<br><span><b>5</b></span></td>





                            


                            <td>129<br><span><b>2</b></span></td>





                            


                            <td>139<br><span><b>3</b></span></td>





                            


                            <td>899<br><span><b>6</b></span></td>





                            


                            <td>128<br><span><b>1</b></span></td>





                            


                            <td>370<br><span><b>0</b></span></td>





                            


                            <td>680<br><span><b>4</b></span></td>





                            


                            <td>138<br><span><b>2</b></span></td>





                            


                            <td>446<br><span><b>4</b></span></td>





                            


                            <td>457<br><span><b>2</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">23-11-2019<br></td>

                            


                            <td>256<br><span><b>3</b></span></td>





                            


                            <td>244<br><span><b>0</b></span></td>





                            


                            <td>390<br><span><b>2</b></span></td>





                            


                            <td>357<br><span><b>5</b></span></td>





                            


                            <td>367<br><span><b>6</b></span></td>





                            


                            <td>127<br><span><b>0</b></span></td>





                            


                            <td>156<br><span><b>2</b></span></td>





                            


                            <td>268<br><span><b>6</b></span></td>





                            


                            <td>246<br><span><b>2</b></span></td>





                            


                            <td>257<br><span><b>4</b></span></td>





                            


                            <td>380<br><span><b>1</b></span></td>





                            


                            <td>633<br><span><b>2</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">24-11-2019<br></td>

                            


                            <td>589<br><span><b>2</b></span></td>





                            


                            <td>359<br><span><b>7</b></span></td>





                            


                            <td>458<br><span><b>7</b></span></td>





                            


                            <td>220<br><span><b>4</b></span></td>





                            


                            <td>278<br><span><b>7</b></span></td>





                            


                            <td>136<br><span><b>0</b></span></td>





                            


                            <td>667<br><span><b>9</b></span></td>





                            


                            <td>128<br><span><b>1</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            


                            <td>478<br><span><b>9</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            


                            <td>955<br><span><b>9</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">25-11-2019<br></td>

                            


                            <td>230<br><span><b>5</b></span></td>





                            


                            <td>799<br><span><b>5</b></span></td>





                            


                            <td>268<br><span><b>6</b></span></td>





                            


                            <td>248<br><span><b>4</b></span></td>





                            


                            <td>157<br><span><b>3</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            


                            <td>457<br><span><b>6</b></span></td>





                            


                            <td>337<br><span><b>3</b></span></td>





                            


                            <td>169<br><span><b>6</b></span></td>





                            


                            <td>279<br><span><b>8</b></span></td>





                            


                            <td>449<br><span><b>7</b></span></td>





                            


                            <td>877<br><span><b>2</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">26-11-2019<br></td>

                            


                            <td>248<br><span><b>4</b></span></td>





                            


                            <td>258<br><span><b>5</b></span></td>





                            


                            <td>112<br><span><b>4</b></span></td>





                            


                            <td>255<br><span><b>2</b></span></td>





                            


                            <td>356<br><span><b>4</b></span></td>





                            


                            <td>344<br><span><b>1</b></span></td>





                            


                            <td>256<br><span><b>3</b></span></td>





                            


                            <td>144<br><span><b>9</b></span></td>





                            


                            <td>670<br><span><b>3</b></span></td>





                            


                            <td>448<br><span><b>6</b></span></td>





                            


                            <td>146<br><span><b>1</b></span></td>





                            


                            <td>390<br><span><b>2</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">27-11-2019<br></td>

                            


                            <td>136<br><span><b>0</b></span></td>





                            


                            <td>168<br><span><b>5</b></span></td>





                            


                            <td>248<br><span><b>4</b></span></td>





                            


                            <td>790<br><span><b>6</b></span></td>





                            


                            <td>149<br><span><b>4</b></span></td>





                            


                            <td>899<br><span><b>6</b></span></td>





                            


                            <td>569<br><span><b>0</b></span></td>





                            


                            <td>269<br><span><b>7</b></span></td>





                            


                            <td>139<br><span><b>3</b></span></td>





                            


                            <td>245<br><span><b>1</b></span></td>





                            


                            <td>678<br><span><b>1</b></span></td>





                            


                            <td>492<br><span><b>5</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">28-11-2019<br></td>

                            


                            <td>555<br><span><b>5</b></span></td>





                            


                            <td>134<br><span><b>8</b></span></td>





                            


                            <td>888<br><span><b>4</b></span></td>





                            


                            <td>480<br><span><b>2</b></span></td>





                            


                            <td>556<br><span><b>6</b></span></td>





                            


                            <td>589<br><span><b>2</b></span></td>





                            


                            <td>899<br><span><b>6</b></span></td>





                            


                            <td>360<br><span><b>9</b></span></td>





                            


                            <td>780<br><span><b>5</b></span></td>





                            


                            <td>449<br><span><b>7</b></span></td>





                            


                            <td>180<br><span><b>9</b></span></td>





                            


                            <td>589<br><span><b>2</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">29-11-2019<br></td>

                            


                            <td>690<br><span><b>5</b></span></td>





                            


                            <td>449<br><span><b>7</b></span></td>





                            


                            <td>456<br><span><b>5</b></span></td>





                            


                            <td>259<br><span><b>6</b></span></td>





                            


                            <td>118<br><span><b>0</b></span></td>





                            


                            <td>137<br><span><b>1</b></span></td>





                            


                            <td>567<br><span><b>8</b></span></td>





                            


                            <td>247<br><span><b>3</b></span></td>





                            


                            <td>277<br><span><b>6</b></span></td>





                            


                            <td>249<br><span><b>5</b></span></td>





                            


                            <td>136<br><span><b>0</b></span></td>





                            


                            <td>217<br><span><b>0</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">30-11-2019<br></td>

                            


                            <td>266<br><span><b>4</b></span></td>





                            


                            <td>679<br><span><b>2</b></span></td>





                            


                            <td>348<br><span><b>5</b></span></td>





                            


                            <td>112<br><span><b>4</b></span></td>





                            


                            <td>779<br><span><b>3</b></span></td>





                            


                            <td>259<br><span><b>6</b></span></td>





                            


                            <td>226<br><span><b>0</b></span></td>





                            


                            <td>357<br><span><b>5</b></span></td>





                            


                            <td>245<br><span><b>1</b></span></td>





                            


                            <td>246<br><span><b>2</b></span></td>





                            


                            <td>189<br><span><b>8</b></span></td>





                            


                            <td>318<br><span><b>2</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">01-12-2019<br></td>

                            


                            <td>234<br><span><b>9</b></span></td>





                            


                            <td>780<br><span><b>5</b></span></td>





                            


                            <td>148<br><span><b>3</b></span></td>





                            


                            <td>166<br><span><b>3</b></span></td>





                            


                            <td>177<br><span><b>5</b></span></td>





                            


                            <td>489<br><span><b>1</b></span></td>





                            


                            <td>679<br><span><b>2</b></span></td>





                            


                            <td>458<br><span><b>7</b></span></td>





                            


                            <td>238<br><span><b>3</b></span></td>





                            


                            <td>490<br><span><b>3</b></span></td>





                            


                            <td>145<br><span><b>0</b></span></td>





                            


                            <td>222<br><span><b>6</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">02-12-2019<br></td>

                            


                            <td>168<br><span><b>5</b></span></td>





                            


                            <td>459<br><span><b>8</b></span></td>





                            


                            <td>368<br><span><b>7</b></span></td>





                            


                            <td>990<br><span><b>8</b></span></td>





                            


                            <td>188<br><span><b>7</b></span></td>





                            


                            <td>288<br><span><b>8</b></span></td>





                            


                            <td>148<br><span><b>3</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            


                            <td>578<br><span><b>0</b></span></td>





                            


                            <td>349<br><span><b>6</b></span></td>





                            


                            <td>268<br><span><b>6</b></span></td>





                            


                            <td>150<br><span><b>6</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">03-12-2019<br></td>

                            


                            <td>347<br><span><b>4</b></span></td>





                            


                            <td>130<br><span><b>4</b></span></td>





                            


                            <td>556<br><span><b>6</b></span></td>





                            


                            <td>268<br><span><b>6</b></span></td>





                            


                            <td>370<br><span><b>0</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            


                            <td>467<br><span><b>7</b></span></td>





                            


                            <td>478<br><span><b>9</b></span></td>





                            


                            <td>199<br><span><b>9</b></span></td>





                            


                            <td>569<br><span><b>0</b></span></td>





                            


                            <td>589<br><span><b>2</b></span></td>





                            


                            <td>670<br><span><b>3</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">04-12-2019<br></td>

                            


                            <td>579<br><span><b>1</b></span></td>





                            


                            <td>277<br><span><b>6</b></span></td>





                            


                            <td>567<br><span><b>8</b></span></td>





                            


                            <td>369<br><span><b>8</b></span></td>





                            


                            <td>366<br><span><b>5</b></span></td>





                            


                            <td>134<br><span><b>8</b></span></td>





                            


                            <td>337<br><span><b>3</b></span></td>





                            


                            <td>589<br><span><b>2</b></span></td>





                            


                            <td>179<br><span><b>7</b></span></td>





                            


                            <td>169<br><span><b>6</b></span></td>





                            


                            <td>147<br><span><b>2</b></span></td>





                            


                            <td>770<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">05-12-2019<br></td>

                            


                            <td>179<br><span><b>7</b></span></td>





                            


                            <td>359<br><span><b>7</b></span></td>





                            


                            <td>455<br><span><b>4</b></span></td>





                            


                            <td>469<br><span><b>6</b></span></td>





                            


                            <td>346<br><span><b>3</b></span></td>





                            


                            <td>220<br><span><b>4</b></span></td>





                            


                            <td>259<br><span><b>6</b></span></td>





                            


                            <td>189<br><span><b>8</b></span></td>





                            


                            <td>278<br><span><b>7</b></span></td>





                            


                            <td>568<br><span><b>9</b></span></td>





                            


                            <td>136<br><span><b>0</b></span></td>





                            


                            <td>890<br><span><b>7</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">06-12-2019<br></td>

                            


                            <td>336<br><span><b>2</b></span></td>





                            


                            <td>347<br><span><b>4</b></span></td>





                            


                            <td>228<br><span><b>2</b></span></td>





                            


                            <td>112<br><span><b>4</b></span></td>





                            


                            <td>147<br><span><b>2</b></span></td>





                            


                            <td>279<br><span><b>8</b></span></td>





                            


                            <td>446<br><span><b>4</b></span></td>





                            


                            <td>134<br><span><b>8</b></span></td>





                            


                            <td>357<br><span><b>5</b></span></td>





                            


                            <td>467<br><span><b>7</b></span></td>





                            


                            <td>250<br><span><b>7</b></span></td>





                            


                            <td>665<br><span><b>7</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">07-12-2019<br></td>

                            


                            <td>466<br><span><b>6</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            


                            <td>134<br><span><b>8</b></span></td>





                            


                            <td>248<br><span><b>4</b></span></td>





                            


                            <td>788<br><span><b>3</b></span></td>





                            


                            <td>189<br><span><b>8</b></span></td>





                            


                            <td>599<br><span><b>3</b></span></td>





                            


                            <td>467<br><span><b>7</b></span></td>





                            


                            <td>489<br><span><b>1</b></span></td>





                            


                            <td>258<br><span><b>5</b></span></td>





                            


                            <td>479<br><span><b>0</b></span></td>





                            


                            <td>256<br><span><b>3</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">08-12-2019<br></td>

                            


                            <td>346<br><span><b>3</b></span></td>





                            


                            <td>156<br><span><b>2</b></span></td>





                            


                            <td>348<br><span><b>5</b></span></td>





                            


                            <td>357<br><span><b>5</b></span></td>





                            


                            <td>799<br><span><b>5</b></span></td>





                            


                            <td>234<br><span><b>9</b></span></td>





                            


                            <td>459<br><span><b>8</b></span></td>





                            


                            <td>668<br><span><b>2</b></span></td>





                            


                            <td>119<br><span><b>1</b></span></td>





                            


                            <td>920<br><span><b>1</b></span></td>





                            


                            <td>246<br><span><b>2</b></span></td>





                            


                            <td>789<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">09-12-2019<br></td>

                            


                            <td>266<br><span><b>4</b></span></td>





                            


                            <td>124<br><span><b>7</b></span></td>





                            


                            <td>589<br><span><b>2</b></span></td>





                            


                            <td>889<br><span><b>5</b></span></td>





                            


                            <td>117<br><span><b>9</b></span></td>





                            


                            <td>399<br><span><b>1</b></span></td>





                            


                            <td>348<br><span><b>5</b></span></td>





                            


                            <td>499<br><span><b>2</b></span></td>





                            


                            <td>570<br><span><b>2</b></span></td>





                            


                            <td>244<br><span><b>0</b></span></td>





                            


                            <td>129<br><span><b>2</b></span></td>





                            


                            <td>370<br><span><b>0</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">10-12-2019<br></td>

                            


                            <td>166<br><span><b>3</b></span></td>





                            


                            <td>440<br><span><b>8</b></span></td>





                            


                            <td>233<br><span><b>8</b></span></td>





                            


                            <td>346<br><span><b>3</b></span></td>





                            


                            <td>456<br><span><b>5</b></span></td>





                            


                            <td>227<br><span><b>1</b></span></td>





                            


                            <td>889<br><span><b>5</b></span></td>





                            


                            <td>229<br><span><b>3</b></span></td>





                            


                            <td>277<br><span><b>6</b></span></td>





                            


                            <td>599<br><span><b>3</b></span></td>





                            


                            <td>488<br><span><b>0</b></span></td>





                            


                            <td>810<br><span><b>9</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">11-12-2019<br></td>

                            


                            <td>455<br><span><b>4</b></span></td>





                            


                            <td>457<br><span><b>6</b></span></td>





                            


                            <td>144<br><span><b>9</b></span></td>





                            


                            <td>779<br><span><b>3</b></span></td>





                            


                            <td>336<br><span><b>2</b></span></td>





                            


                            <td>256<br><span><b>3</b></span></td>





                            


                            <td>669<br><span><b>1</b></span></td>





                            


                            <td>578<br><span><b>0</b></span></td>





                            


                            <td>269<br><span><b>7</b></span></td>





                            


                            <td>669<br><span><b>1</b></span></td>





                            


                            <td>115<br><span><b>7</b></span></td>





                            


                            <td>619<br><span><b>6</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">12-12-2019<br></td>

                            


                            <td>237<br><span><b>2</b></span></td>





                            


                            <td>467<br><span><b>7</b></span></td>





                            


                            <td>379<br><span><b>9</b></span></td>





                            


                            <td>157<br><span><b>3</b></span></td>





                            


                            <td>679<br><span><b>2</b></span></td>





                            


                            <td>268<br><span><b>6</b></span></td>





                            


                            <td>245<br><span><b>1</b></span></td>





                            


                            <td>446<br><span><b>4</b></span></td>





                            


                            <td>680<br><span><b>4</b></span></td>





                            


                            <td>466<br><span><b>6</b></span></td>





                            


                            <td>380<br><span><b>1</b></span></td>





                            


                            <td>310<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">13-12-2019<br></td>

                            


                            <td>166<br><span><b>3</b></span></td>





                            


                            <td>260<br><span><b>8</b></span></td>





                            


                            <td>157<br><span><b>3</b></span></td>





                            


                            <td>488<br><span><b>0</b></span></td>





                            


                            <td>260<br><span><b>8</b></span></td>





                            


                            <td>458<br><span><b>7</b></span></td>





                            


                            <td>477<br><span><b>8</b></span></td>





                            


                            <td>699<br><span><b>4</b></span></td>





                            


                            <td>199<br><span><b>9</b></span></td>





                            


                            <td>579<br><span><b>1</b></span></td>





                            


                            <td>189<br><span><b>8</b></span></td>





                            


                            <td>910<br><span><b>0</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">14-12-2019<br></td>

                            


                            <td>239<br><span><b>4</b></span></td>





                            


                            <td>556<br><span><b>6</b></span></td>





                            


                            <td>149<br><span><b>4</b></span></td>





                            


                            <td>457<br><span><b>6</b></span></td>





                            


                            <td>223<br><span><b>7</b></span></td>





                            


                            <td>460<br><span><b>0</b></span></td>





                            


                            <td>458<br><span><b>7</b></span></td>





                            


                            <td>258<br><span><b>5</b></span></td>





                            


                            <td>852<br><span><b>5</b></span></td>





                            


                            <td>657<br><span><b>8</b></span></td>





                            


                            <td>357<br><span><b>5</b></span></td>





                            


                            <td>154<br><span><b>0</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">15-12-2019<br></td>

                            


                            <td>123<br><span><b>6</b></span></td>





                            


                            <td>456<br><span><b>5</b></span></td>





                            


                            <td>125<br><span><b>8</b></span></td>





                            


                            <td>524<br><span><b>1</b></span></td>





                            


                            <td>621<br><span><b>9</b></span></td>





                            


                            <td>224<br><span><b>8</b></span></td>





                            


                            <td>741<br><span><b>2</b></span></td>





                            


                            <td>231<br><span><b>6</b></span></td>





                            


                            <td>222<br><span><b>6</b></span></td>





                            


                            <td>552<br><span><b>2</b></span></td>





                            


                            <td>441<br><span><b>9</b></span></td>





                            


                            <td>221<br><span><b>5</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">16-12-2019<br></td>

                            


                            <td>152<br><span><b>8</b></span></td>





                            


                            <td>224<br><span><b>8</b></span></td>





                            


                            <td>241<br><span><b>7</b></span></td>





                            


                            <td>112<br><span><b>4</b></span></td>





                            


                            <td>123<br><span><b>6</b></span></td>





                            


                            <td>442<br><span><b>0</b></span></td>





                            


                            <td>210<br><span><b>3</b></span></td>





                            


                            <td>780<br><span><b>5</b></span></td>





                            


                            <td>110<br><span><b>2</b></span></td>





                            


                            <td>220<br><span><b>4</b></span></td>





                            


                            <td>300<br><span><b>3</b></span></td>





                            


                            <td>441<br><span><b>9</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">17-12-2019<br></td>

                            


                            <td>784<br><span><b>9</b></span></td>





                            


                            <td>224<br><span><b>8</b></span></td>





                            


                            <td>234<br><span><b>9</b></span></td>





                            


                            <td>445<br><span><b>3</b></span></td>





                            


                            <td>223<br><span><b>7</b></span></td>





                            


                            <td>465<br><span><b>5</b></span></td>





                            


                            <td>544<br><span><b>3</b></span></td>





                            


                            <td>223<br><span><b>7</b></span></td>





                            


                            <td>221<br><span><b>5</b></span></td>





                            


                            <td>334<br><span><b>0</b></span></td>





                            


                            <td>221<br><span><b>5</b></span></td>





                            


                            <td>223<br><span><b>7</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">18-12-2019<br></td>

                            


                            <td>124<br><span><b>7</b></span></td>





                            


                            <td>125<br><span><b>8</b></span></td>





                            


                            <td>358<br><span><b>6</b></span></td>





                            


                            <td>356<br><span><b>4</b></span></td>





                            


                            <td>240<br><span><b>6</b></span></td>





                            


                            <td>146<br><span><b>1</b></span></td>





                            


                            <td>780<br><span><b>5</b></span></td>





                            


                            <td>347<br><span><b>4</b></span></td>





                            


                            <td>567<br><span><b>8</b></span></td>





                            


                            <td>368<br><span><b>7</b></span></td>





                            


                            <td>234<br><span><b>9</b></span></td>





                            


                            <td>479<br><span><b>0</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">19-12-2019<br></td>

                            


                            <td>688<br><span><b>2</b></span></td>





                            


                            <td>169<br><span><b>6</b></span></td>





                            


                            <td>677<br><span><b>0</b></span></td>





                            


                            <td>357<br><span><b>5</b></span></td>





                            


                            <td>167<br><span><b>4</b></span></td>





                            


                            <td>338<br><span><b>4</b></span></td>





                            


                            <td>367<br><span><b>6</b></span></td>





                            


                            <td>278<br><span><b>7</b></span></td>





                            


                            <td>169<br><span><b>9</b></span></td>





                            


                            <td>139<br><span><b>3</b></span></td>





                            


                            <td>448<br><span><b>6</b></span></td>





                            


                            <td>125<br><span><b>8</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">20-12-2019<br></td>

                            


                            <td>124<br><span><b>7</b></span></td>





                            


                            <td>129<br><span><b>2</b></span></td>





                            


                            <td>188<br><span><b>7</b></span></td>





                            


                            <td>144<br><span><b>9</b></span></td>





                            


                            <td>289<br><span><b>9</b></span></td>





                            


                            <td>246<br><span><b>2</b></span></td>





                            


                            <td>559<br><span><b>9</b></span></td>





                            


                            <td>159<br><span><b>5</b></span></td>





                            


                            <td>346<br><span><b>3</b></span></td>





                            


                            <td>227<br><span><b>1</b></span></td>





                            


                            <td>579<br><span><b>1</b></span></td>





                            


                            <td>932<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">21-12-2019<br></td>

                            


                            <td>244<br><span><b>0</b></span></td>





                            


                            <td>558<br><span><b>8</b></span></td>





                            


                            <td>269<br><span><b>7</b></span></td>





                            


                            <td>288<br><span><b>8</b></span></td>





                            


                            <td>244<br><span><b>0</b></span></td>





                            


                            <td>356<br><span><b>4</b></span></td>





                            


                            <td>169<br><span><b>6</b></span></td>





                            


                            <td>289<br><span><b>9</b></span></td>





                            


                            <td>566<br><span><b>7</b></span></td>





                            


                            <td>346<br><span><b>3</b></span></td>





                            


                            <td>579<br><span><b>1</b></span></td>





                            


                            <td>941<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">22-12-2019<br></td>

                            


                            <td>358<br><span><b>6</b></span></td>





                            


                            <td>240<br><span><b>6</b></span></td>





                            


                            <td>179<br><span><b>7</b></span></td>





                            


                            <td>560<br><span><b>1</b></span></td>





                            


                            <td>578<br><span><b>0</b></span></td>





                            


                            <td>178<br><span><b>6</b></span></td>





                            


                            <td>459<br><span><b>8</b></span></td>





                            


                            <td>678<br><span><b>1</b></span></td>





                            


                            <td>145<br><span><b>0</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            


                            <td>168<br><span><b>5</b></span></td>





                            


                            <td>985<br><span><b>2</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">23-12-2019<br></td>

                            


                            <td>469<br><span><b>9</b></span></td>





                            


                            <td>189<br><span><b>8</b></span></td>





                            


                            <td>480<br><span><b>2</b></span></td>





                            


                            <td>779<br><span><b>3</b></span></td>





                            


                            <td>567<br><span><b>8</b></span></td>





                            


                            <td>357<br><span><b>5</b></span></td>





                            


                            <td>169<br><span><b>6</b></span></td>





                            


                            <td>124<br><span><b>7</b></span></td>





                            


                            <td>356<br><span><b>4</b></span></td>





                            


                            <td>459<br><span><b>8</b></span></td>





                            


                            <td>245<br><span><b>1</b></span></td>





                            


                            <td>777<br><span><b>1</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">24-12-2019<br></td>

                            


                            <td>230<br><span><b>5</b></span></td>





                            


                            <td>467<br><span><b>7</b></span></td>





                            


                            <td>690<br><span><b>5</b></span></td>





                            


                            <td>149<br><span><b>4</b></span></td>





                            


                            <td>567<br><span><b>8</b></span></td>





                            


                            <td>188<br><span><b>7</b></span></td>





                            


                            <td>290<br><span><b>1</b></span></td>





                            


                            <td>440<br><span><b>8</b></span></td>





                            


                            <td>340<br><span><b>7</b></span></td>





                            


                            <td>145<br><span><b>0</b></span></td>





                            


                            <td>359<br><span><b>7</b></span></td>





                            


                            <td>682<br><span><b>6</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">25-12-2019<br></td>

                            


                            <td>279<br><span><b>8</b></span></td>





                            


                            <td>134<br><span><b>8</b></span></td>





                            


                            <td>176<br><span><b>6</b></span></td>





                            


                            <td>199<br><span><b>9</b></span></td>





                            


                            <td>125<br><span><b>8</b></span></td>





                            


                            <td>256<br><span><b>3</b></span></td>





                            


                            <td>468<br><span><b>8</b></span></td>





                            


                            <td>660<br><span><b>2</b></span></td>





                            


                            <td>348<br><span><b>5</b></span></td>





                            


                            <td>590<br><span><b>4</b></span></td>





                            


                            <td>135<br><span><b>9</b></span></td>





                            


                            <td>982<br><span><b>9</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">26-12-2019<br></td>

                            


                            <td>577<br><span><b>9</b></span></td>





                            


                            <td>569<br><span><b>0</b></span></td>





                            


                            <td>157<br><span><b>3</b></span></td>





                            


                            <td>889<br><span><b>5</b></span></td>





                            


                            <td>688<br><span><b>2</b></span></td>





                            


                            <td>136<br><span><b>0</b></span></td>





                            


                            <td>125<br><span><b>8</b></span></td>





                            


                            <td>568<br><span><b>9</b></span></td>





                            


                            <td>668<br><span><b>0</b></span></td>





                            


                            <td>229<br><span><b>3</b></span></td>





                            


                            <td>889<br><span><b>5</b></span></td>





                            


                            <td>810<br><span><b>9</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">27-12-2019<br></td>

                            


                            <td>778<br><span><b>2</b></span></td>





                            


                            <td>133<br><span><b>7</b></span></td>





                            


                            <td>125<br><span><b>8</b></span></td>





                            


                            <td>128<br><span><b>1</b></span></td>





                            


                            <td>337<br><span><b>3</b></span></td>





                            


                            <td>280<br><span><b>0</b></span></td>





                            


                            <td>570<br><span><b>2</b></span></td>





                            


                            <td>123<br><span><b>6</b></span></td>





                            


                            <td>246<br><span><b>2</b></span></td>





                            


                            <td>690<br><span><b>5</b></span></td>





                            


                            <td>133<br><span><b>7</b></span></td>





                            


                            <td>680<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">28-12-2019<br></td>

                            


                            <td>230<br><span><b>5</b></span></td>





                            


                            <td>256<br><span><b>3</b></span></td>





                            


                            <td>126<br><span><b>9</b></span></td>





                            


                            <td>247<br><span><b>3</b></span></td>





                            


                            <td>589<br><span><b>2</b></span></td>





                            


                            <td>688<br><span><b>2</b></span></td>





                            


                            <td>125<br><span><b>8</b></span></td>





                            


                            <td>812<br><span><b>1</b></span></td>





                            


                            <td>248<br><span><b>4</b></span></td>





                            


                            <td>428<br><span><b>4</b></span></td>





                            


                            <td>682<br><span><b>8</b></span></td>





                            


                            <td>357<br><span><b>5</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">29-12-2019<br></td>

                            


                            <td>444<br><span><b>2</b></span></td>





                            


                            <td>126<br><span><b>9</b></span></td>





                            


                            <td>378<br><span><b>8</b></span></td>





                            


                            <td>115<br><span><b>7</b></span></td>





                            


                            <td>156<br><span><b>2</b></span></td>





                            


                            <td>690<br><span><b>5</b></span></td>





                            


                            <td>236<br><span><b>1</b></span></td>





                            


                            <td>230<br><span><b>5</b></span></td>





                            


                            <td>366<br><span><b>5</b></span></td>





                            


                            <td>550<br><span><b>0</b></span></td>





                            


                            <td>337<br><span><b>3</b></span></td>





                            


                            <td>590<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">30-12-2019<br></td>

                            


                            <td>266<br><span><b>4</b></span></td>





                            


                            <td>234<br><span><b>9</b></span></td>





                            


                            <td>234<br><span><b>9</b></span></td>





                            


                            <td>245<br><span><b>1</b></span></td>





                            


                            <td>368<br><span><b>7</b></span></td>





                            


                            <td>399<br><span><b>1</b></span></td>





                            


                            <td>134<br><span><b>8</b></span></td>





                            


                            <td>258<br><span><b>5</b></span></td>





                            


                            <td>158<br><span><b>4</b></span></td>





                            


                            <td>660<br><span><b>2</b></span></td>





                            


                            <td>129<br><span><b>2</b></span></td>





                            


                            <td>694<br><span><b>9</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">31-12-2019<br></td>

                            


                            <td>223<br><span><b>7</b></span></td>





                            


                            <td>129<br><span><b>2</b></span></td>





                            


                            <td>455<br><span><b>4</b></span></td>





                            


                            <td>468<br><span><b>8</b></span></td>





                            


                            <td>560<br><span><b>1</b></span></td>





                            


                            <td>246<br><span><b>2</b></span></td>





                            


                            <td>478<br><span><b>9</b></span></td>





                            


                            <td>570<br><span><b>2</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            


                            <td>149<br><span><b>4</b></span></td>





                            


                            <td>128<br><span><b>1</b></span></td>





                            


                            <td>895<br><span><b>2</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">01-01-2020<br></td>

                            


                            <td>228<br><span><b>2</b></span></td>





                            


                            <td>788<br><span><b>3</b></span></td>





                            


                            <td>190<br><span><b>0</b></span></td>





                            


                            <td>268<br><span><b>6</b></span></td>





                            


                            <td>677<br><span><b>0</b></span></td>





                            


                            <td>479<br><span><b>0</b></span></td>





                            


                            <td>789<br><span><b>4</b></span></td>





                            


                            <td>440<br><span><b>8</b></span></td>





                            


                            <td>580<br><span><b>3</b></span></td>





                            


                            <td>330<br><span><b>6</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            


                            <td>931<br><span><b>3</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">02-01-2020<br></td>

                            


                            <td>689<br><span><b>3</b></span></td>





                            


                            <td>238<br><span><b>3</b></span></td>





                            


                            <td>167<br><span><b>4</b></span></td>





                            


                            <td>578<br><span><b>0</b></span></td>





                            


                            <td>146<br><span><b>1</b></span></td>





                            


                            <td>135<br><span><b>9</b></span></td>





                            


                            <td>145<br><span><b>0</b></span></td>





                            


                            <td>259<br><span><b>6</b></span></td>





                            


                            <td>148<br><span><b>3</b></span></td>





                            


                            <td>138<br><span><b>2</b></span></td>





                            


                            <td>390<br><span><b>2</b></span></td>





                            


                            <td>621<br><span><b>9</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">03-01-2020<br></td>

                            


                            <td>156<br><span><b>2</b></span></td>





                            


                            <td>345<br><span><b>2</b></span></td>





                            


                            <td>489<br><span><b>1</b></span></td>





                            


                            <td>299<br><span><b>0</b></span></td>





                            


                            <td>369<br><span><b>8</b></span></td>





                            


                            <td>189<br><span><b>8</b></span></td>





                            


                            <td>589<br><span><b>2</b></span></td>





                            


                            <td>137<br><span><b>1</b></span></td>





                            


                            <td>788<br><span><b>3</b></span></td>





                            


                            <td>880<br><span><b>6</b></span></td>





                            


                            <td>557<br><span><b>7</b></span></td>





                            


                            <td>774<br><span><b>8</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">04-01-2020<br></td>

                            


                            <td>346<br><span><b>3</b></span></td>





                            


                            <td>299<br><span><b>0</b></span></td>





                            


                            <td>126<br><span><b>9</b></span></td>





                            


                            <td>345<br><span><b>2</b></span></td>





                            


                            <td>236<br><span><b>1</b></span></td>





                            


                            <td>166<br><span><b>3</b></span></td>





                            


                            <td>249<br><span><b>5</b></span></td>





                            


                            <td>179<br><span><b>7</b></span></td>





                            


                            <td>679<br><span><b>2</b></span></td>





                            


                            <td>123<br><span><b>6</b></span></td>





                            


                            <td>379<br><span><b>9</b></span></td>





                            


                            <td>435<br><span><b>2</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">05-01-2020<br></td>

                            


                            <td>489<br><span><b>1</b></span></td>





                            


                            <td>123<br><span><b>6</b></span></td>





                            


                            <td>355<br><span><b>3</b></span></td>





                            


                            <td>159<br><span><b>5</b></span></td>





                            


                            <td>169<br><span><b>6</b></span></td>





                            


                            <td>789<br><span><b>4</b></span></td>





                            


                            <td>359<br><span><b>7</b></span></td>





                            


                            <td>567<br><span><b>8</b></span></td>





                            


                            <td>289<br><span><b>9</b></span></td>





                            


                            <td>378<br><span><b>8</b></span></td>





                            


                            <td>126<br><span><b>9</b></span></td>





                            


                            <td>364<br><span><b>3</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">06-01-2020<br></td>

                            


                            <td>489<br><span><b>1</b></span></td>





                            


                            <td>168<br><span><b>5</b></span></td>





                            


                            <td>388<br><span><b>9</b></span></td>





                            


                            <td>369<br><span><b>8</b></span></td>





                            


                            <td>670<br><span><b>3</b></span></td>





                            


                            <td>349<br><span><b>6</b></span></td>





                            


                            <td>577<br><span><b>9</b></span></td>





                            


                            <td>156<br><span><b>2</b></span></td>





                            


                            <td>559<br><span><b>9</b></span></td>





                            


                            <td>688<br><span><b>2</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            


                            <td>336<br><span><b>2</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">07-01-2020<br></td>

                            


                            <td>146<br><span><b>1</b></span></td>





                            


                            <td>146<br><span><b>1</b></span></td>





                            


                            <td>288<br><span><b>8</b></span></td>





                            


                            <td>237<br><span><b>2</b></span></td>





                            


                            <td>223<br><span><b>7</b></span></td>





                            


                            <td>118<br><span><b>0</b></span></td>





                            


                            <td>567<br><span><b>8</b></span></td>





                            


                            <td>345<br><span><b>2</b></span></td>





                            


                            <td>368<br><span><b>7</b></span></td>





                            


                            <td>277<br><span><b>6</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            


                            <td>667<br><span><b>9</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">08-01-2020<br></td>

                            


                            <td>246<br><span><b>2</b></span></td>





                            


                            <td>247<br><span><b>3</b></span></td>





                            


                            <td>129<br><span><b>2</b></span></td>





                            


                            <td>149<br><span><b>4</b></span></td>





                            


                            <td>127<br><span><b>0</b></span></td>





                            


                            <td>238<br><span><b>3</b></span></td>





                            


                            <td>158<br><span><b>4</b></span></td>





                            


                            <td>280<br><span><b>0</b></span></td>





                            


                            <td>459<br><span><b>8</b></span></td>





                            


                            <td>359<br><span><b>7</b></span></td>





                            


                            <td>289<br><span><b>9</b></span></td>





                            


                            <td>987<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">09-01-2020<br></td>

                            


                            <td>234<br><span><b>9</b></span></td>





                            


                            <td>146<br><span><b>1</b></span></td>





                            


                            <td>228<br><span><b>2</b></span></td>





                            


                            <td>112<br><span><b>4</b></span></td>





                            


                            <td>177<br><span><b>5</b></span></td>





                            


                            <td>280<br><span><b>0</b></span></td>





                            


                            <td>226<br><span><b>0</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            


                            <td>127<br><span><b>0</b></span></td>





                            


                            <td>123<br><span><b>6</b></span></td>





                            


                            <td>178<br><span><b>6</b></span></td>





                            


                            <td>698<br><span><b>3</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">10-01-2020<br></td>

                            


                            <td>369<br><span><b>8</b></span></td>





                            


                            <td>136<br><span><b>0</b></span></td>





                            


                            <td>135<br><span><b>9</b></span></td>





                            


                            <td>456<br><span><b>5</b></span></td>





                            


                            <td>126<br><span><b>9</b></span></td>





                            


                            <td>199<br><span><b>9</b></span></td>





                            


                            <td>370<br><span><b>0</b></span></td>





                            


                            <td>357<br><span><b>5</b></span></td>





                            


                            <td>299<br><span><b>0</b></span></td>





                            


                            <td>366<br><span><b>5</b></span></td>





                            


                            <td>119<br><span><b>1</b></span></td>





                            


                            <td>772<br><span><b>6</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">11-01-2020<br></td>

                            


                            <td>122<br><span><b>5</b></span></td>





                            


                            <td>259<br><span><b>6</b></span></td>





                            


                            <td>677<br><span><b>0</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            


                            <td>479<br><span><b>0</b></span></td>





                            


                            <td>136<br><span><b>0</b></span></td>





                            


                            <td>233<br><span><b>8</b></span></td>





                            


                            <td>348<br><span><b>5</b></span></td>





                            


                            <td>156<br><span><b>2</b></span></td>





                            


                            <td>447<br><span><b>5</b></span></td>





                            


                            <td>247<br><span><b>3</b></span></td>





                            


                            <td>624<br><span><b>2</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">12-01-2020<br></td>

                            


                            <td>457<br><span><b>6</b></span></td>





                            


                            <td>245<br><span><b>1</b></span></td>





                            


                            <td>690<br><span><b>5</b></span></td>





                            


                            <td>236<br><span><b>1</b></span></td>





                            


                            <td>469<br><span><b>9</b></span></td>





                            


                            <td>128<br><span><b>1</b></span></td>





                            


                            <td>348<br><span><b>5</b></span></td>





                            


                            <td>167<br><span><b>4</b></span></td>





                            


                            <td>157<br><span><b>3</b></span></td>





                            


                            <td>378<br><span><b>8</b></span></td>





                            


                            <td>377<br><span><b>7</b></span></td>





                            


                            <td>589<br><span><b>2</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">13-01-2020<br></td>

                            


                            <td>467<br><span><b>7</b></span></td>





                            


                            <td>357<br><span><b>5</b></span></td>





                            


                            <td>459<br><span><b>8</b></span></td>





                            


                            <td>137<br><span><b>1</b></span></td>





                            


                            <td>356<br><span><b>4</b></span></td>





                            


                            <td>178<br><span><b>6</b></span></td>





                            


                            <td>347<br><span><b>4</b></span></td>





                            


                            <td>248<br><span><b>4</b></span></td>





                            


                            <td>379<br><span><b>9</b></span></td>





                            


                            <td>124<br><span><b>7</b></span></td>





                            


                            <td>799<br><span><b>5</b></span></td>





                            


                            <td>485<br><span><b>7</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">14-01-2020<br></td>

                            


                            <td>367<br><span><b>6</b></span></td>





                            


                            <td>699<br><span><b>4</b></span></td>





                            


                            <td>558<br><span><b>8</b></span></td>





                            


                            <td>599<br><span><b>3</b></span></td>





                            


                            <td>568<br><span><b>9</b></span></td>





                            


                            <td>557<br><span><b>7</b></span></td>





                            


                            <td>349<br><span><b>6</b></span></td>





                            


                            <td>389<br><span><b>0</b></span></td>





                            


                            <td>667<br><span><b>9</b></span></td>





                            


                            <td>550<br><span><b>0</b></span></td>





                            


                            <td>255<br><span><b>2</b></span></td>





                            


                            <td>954<br><span><b>8</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">15-01-2020<br></td>

                            


                            <td>459<br><span><b>8</b></span></td>





                            


                            <td>117<br><span><b>9</b></span></td>





                            


                            <td>369<br><span><b>8</b></span></td>





                            


                            <td>229<br><span><b>3</b></span></td>





                            


                            <td>790<br><span><b>6</b></span></td>





                            


                            <td>230<br><span><b>5</b></span></td>





                            


                            <td>236<br><span><b>1</b></span></td>





                            


                            <td>122<br><span><b>5</b></span></td>





                            


                            <td>360<br><span><b>9</b></span></td>





                            


                            <td>559<br><span><b>9</b></span></td>





                            


                            <td>225<br><span><b>9</b></span></td>





                            


                            <td>657<br><span><b>8</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">16-01-2020<br></td>

                            


                            <td>245<br><span><b>1</b></span></td>





                            


                            <td>123<br><span><b>6</b></span></td>





                            


                            <td>338<br><span><b>4</b></span></td>





                            


                            <td>248<br><span><b>4</b></span></td>





                            


                            <td>389<br><span><b>0</b></span></td>





                            


                            <td>224<br><span><b>8</b></span></td>





                            


                            <td>359<br><span><b>7</b></span></td>





                            


                            <td>128<br><span><b>1</b></span></td>





                            


                            <td>578<br><span><b>0</b></span></td>





                            


                            <td>256<br><span><b>3</b></span></td>





                            


                            <td>677<br><span><b>0</b></span></td>





                            


                            <td>388<br><span><b>9</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">17-01-2020<br></td>

                            


                            <td>237<br><span><b>2</b></span></td>





                            


                            <td>139<br><span><b>3</b></span></td>





                            


                            <td>133<br><span><b>7</b></span></td>





                            


                            <td>346<br><span><b>3</b></span></td>





                            


                            <td>579<br><span><b>1</b></span></td>





                            


                            <td>335<br><span><b>1</b></span></td>





                            


                            <td>379<br><span><b>9</b></span></td>





                            


                            <td>128<br><span><b>1</b></span></td>





                            


                            <td>666<br><span><b>8</b></span></td>





                            


                            <td>268<br><span><b>6</b></span></td>





                            


                            <td>167<br><span><b>4</b></span></td>





                            


                            <td>698<br><span><b>3</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">18-01-2020<br></td>

                            


                            <td>449<br><span><b>7</b></span></td>





                            


                            <td>189<br><span><b>8</b></span></td>





                            


                            <td>368<br><span><b>7</b></span></td>





                            


                            <td>238<br><span><b>3</b></span></td>





                            


                            <td>467<br><span><b>7</b></span></td>





                            


                            <td>446<br><span><b>4</b></span></td>





                            


                            <td>790<br><span><b>6</b></span></td>





                            


                            <td>238<br><span><b>3</b></span></td>





                            


                            <td>468<br><span><b>8</b></span></td>





                            


                            <td>180<br><span><b>9</b></span></td>





                            


                            <td>236<br><span><b>1</b></span></td>





                            


                            <td>788<br><span><b>3</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">19-01-2020<br></td>

                            


                            <td>128<br><span><b>1</b></span></td>





                            


                            <td>788<br><span><b>3</b></span></td>





                            


                            <td>566<br><span><b>7</b></span></td>





                            


                            <td>358<br><span><b>6</b></span></td>





                            


                            <td>456<br><span><b>5</b></span></td>





                            


                            <td>678<br><span><b>1</b></span></td>





                            


                            <td>368<br><span><b>7</b></span></td>





                            


                            <td>330<br><span><b>6</b></span></td>





                            


                            <td>220<br><span><b>4</b></span></td>





                            


                            <td>269<br><span><b>7</b></span></td>





                            


                            <td>169<br><span><b>6</b></span></td>





                            


                            <td>257<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">20-01-2020<br></td>

                            


                            <td>126<br><span><b>9</b></span></td>





                            


                            <td>179<br><span><b>7</b></span></td>





                            


                            <td>122<br><span><b>5</b></span></td>





                            


                            <td>356<br><span><b>4</b></span></td>





                            


                            <td>567<br><span><b>8</b></span></td>





                            


                            <td>228<br><span><b>2</b></span></td>





                            


                            <td>123<br><span><b>6</b></span></td>





                            


                            <td>356<br><span><b>4</b></span></td>





                            


                            <td>220<br><span><b>4</b></span></td>





                            


                            <td>127<br><span><b>0</b></span></td>





                            


                            <td>567<br><span><b>8</b></span></td>





                            


                            <td>338<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">21-01-2020<br></td>

                            


                            <td>127<br><span><b>0</b></span></td>





                            


                            <td>455<br><span><b>4</b></span></td>





                            


                            <td>350<br><span><b>8</b></span></td>





                            


                            <td>188<br><span><b>7</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            


                            <td>234<br><span><b>9</b></span></td>





                            


                            <td>478<br><span><b>9</b></span></td>





                            


                            <td>147<br><span><b>2</b></span></td>





                            


                            <td>358<br><span><b>6</b></span></td>





                            


                            <td>355<br><span><b>3</b></span></td>





                            


                            <td>133<br><span><b>7</b></span></td>





                            


                            <td>623<br><span><b>1</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">22-01-2020<br></td>

                            


                            <td>257<br><span><b>4</b></span></td>





                            


                            <td>357<br><span><b>5</b></span></td>





                            


                            <td>288<br><span><b>8</b></span></td>





                            


                            <td>237<br><span><b>2</b></span></td>





                            


                            <td>139<br><span><b>3</b></span></td>





                            


                            <td>160<br><span><b>7</b></span></td>





                            


                            <td>168<br><span><b>5</b></span></td>





                            


                            <td>578<br><span><b>8</b></span></td>





                            


                            <td>133<br><span><b>7</b></span></td>





                            


                            <td>133<br><span><b>7</b></span></td>





                            


                            <td>347<br><span><b>4</b></span></td>





                            


                            <td>234<br><span><b>9</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">23-01-2020<br></td>

                            


                            <td>226<br><span><b>0</b></span></td>





                            


                            <td>690<br><span><b>5</b></span></td>





                            


                            <td>359<br><span><b>7</b></span></td>





                            


                            <td>370<br><span><b>0</b></span></td>





                            


                            <td>157<br><span><b>3</b></span></td>





                            


                            <td>179<br><span><b>7</b></span></td>





                            


                            <td>455<br><span><b>4</b></span></td>





                            


                            <td>156<br><span><b>2</b></span></td>





                            


                            <td>144<br><span><b>9</b></span></td>





                            


                            <td>189<br><span><b>8</b></span></td>





                            


                            <td>358<br><span><b>6</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">24-01-2020<br></td>

                            


                            <td>666<br><span><b>8</b></span></td>





                            


                            <td>368<br><span><b>7</b></span></td>





                            


                            <td>588<br><span><b>1</b></span></td>





                            


                            <td>129<br><span><b>2</b></span></td>





                            


                            <td>389<br><span><b>0</b></span></td>





                            


                            <td>466<br><span><b>6</b></span></td>





                            


                            <td>480<br><span><b>2</b></span></td>





                            


                            <td>257<br><span><b>4</b></span></td>





                            


                            <td>790<br><span><b>6</b></span></td>





                            


                            <td>229<br><span><b>3</b></span></td>





                            


                            <td>779<br><span><b>3</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">25-01-2020<br></td>

                            


                            <td>588<br><span><b>1</b></span></td>





                            


                            <td>256<br><span><b>3</b></span></td>





                            


                            <td>268<br><span><b>6</b></span></td>





                            


                            <td>377<br><span><b>7</b></span></td>





                            


                            <td>468<br><span><b>8</b></span></td>





                            


                            <td>580<br><span><b>3</b></span></td>





                            


                            <td>469<br><span><b>9</b></span></td>





                            


                            <td>266<br><span><b>4</b></span></td>





                            


                            <td>233<br><span><b>8</b></span></td>





                            


                            <td>346<br><span><b>3</b></span></td>





                            


                            <td>123<br><span><b>6</b></span></td>





                            


                            <td>620<br><span><b>8</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">27-01-2020<br></td>

                            


                            <td>269<br><span><b>7</b></span></td>





                            


                            <td>267<br><span><b>5</b></span></td>





                            


                            <td>167<br><span><b>4</b></span></td>





                            


                            <td>149<br><span><b>4</b></span></td>





                            


                            <td>359<br><span><b>7</b></span></td>





                            


                            <td>239<br><span><b>4</b></span></td>





                            


                            <td>247<br><span><b>3</b></span></td>





                            


                            <td>669<br><span><b>1</b></span></td>





                            


                            <td>346<br><span><b>3</b></span></td>





                            


                            <td>113<br><span><b>5</b></span></td>





                            


                            <td>569<br><span><b>0</b></span></td>





                            


                            <td>850<br><span><b>3</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">28-01-2020<br></td>

                            


                            <td>145<br><span><b>0</b></span></td>





                            


                            <td>569<br><span><b>0</b></span></td>





                            


                            <td>257<br><span><b>4</b></span></td>





                            


                            <td>146<br><span><b>1</b></span></td>





                            


                            <td>138<br><span><b>2</b></span></td>





                            


                            <td>346<br><span><b>3</b></span></td>





                            


                            <td>256<br><span><b>3</b></span></td>





                            


                            <td>459<br><span><b>8</b></span></td>





                            


                            <td>345<br><span><b>2</b></span></td>





                            


                            <td>228<br><span><b>2</b></span></td>





                            


                            <td>678<br><span><b>1</b></span></td>





                            


                            <td>620<br><span><b>8</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">29-01-2020<br></td>

                            


                            <td>236<br><span><b>1</b></span></td>





                            


                            <td>248<br><span><b>4</b></span></td>





                            


                            <td>167<br><span><b>4</b></span></td>





                            


                            <td>125<br><span><b>8</b></span></td>





                            


                            <td>139<br><span><b>3</b></span></td>





                            


                            <td>445<br><span><b>3</b></span></td>





                            


                            <td>140<br><span><b>5</b></span></td>





                            


                            <td>250<br><span><b>7</b></span></td>





                            


                            <td>669<br><span><b>1</b></span></td>





                            


                            <td>289<br><span><b>9</b></span></td>





                            


                            <td>344<br><span><b>1</b></span></td>





                            


                            <td>189<br><span><b>8</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">30-01-2020<br></td>

                            


                            <td>589<br><span><b>2</b></span></td>





                            


                            <td>478<br><span><b>9</b></span></td>





                            


                            <td>377<br><span><b>7</b></span></td>





                            


                            <td>399<br><span><b>1</b></span></td>





                            


                            <td>179<br><span><b>7</b></span></td>





                            


                            <td>780<br><span><b>5</b></span></td>





                            


                            <td>569<br><span><b>0</b></span></td>





                            


                            <td>480<br><span><b>2</b></span></td>





                            


                            <td>155<br><span><b>1</b></span></td>





                            


                            <td>568<br><span><b>9</b></span></td>





                            


                            <td>138<br><span><b>2</b></span></td>





                            


                            <td>790<br><span><b>6</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">31-01-2020<br></td>

                            


                            <td>480<br><span><b>2</b></span></td>





                            


                            <td>126<br><span><b>9</b></span></td>





                            


                            <td>228<br><span><b>2</b></span></td>





                            


                            <td>489<br><span><b>1</b></span></td>





                            


                            <td>255<br><span><b>2</b></span></td>





                            


                            <td>899<br><span><b>6</b></span></td>





                            


                            <td>155<br><span><b>1</b></span></td>





                            


                            <td>148<br><span><b>3</b></span></td>





                            


                            <td>345<br><span><b>2</b></span></td>





                            


                            <td>117<br><span><b>9</b></span></td>





                            


                            <td>334<br><span><b>0</b></span></td>





                            


                            <td>158<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">01-02-2020<br></td>

                            


                            <td>360<br><span><b>9</b></span></td>





                            


                            <td>259<br><span><b>6</b></span></td>





                            


                            <td>347<br><span><b>4</b></span></td>





                            


                            <td>246<br><span><b>2</b></span></td>





                            


                            <td>478<br><span><b>9</b></span></td>





                            


                            <td>160<br><span><b>7</b></span></td>





                            


                            <td>380<br><span><b>1</b></span></td>





                            


                            <td>347<br><span><b>4</b></span></td>





                            


                            <td>358<br><span><b>6</b></span></td>





                            


                            <td>588<br><span><b>1</b></span></td>





                            


                            <td>677<br><span><b>0</b></span></td>





                            


                            <td>236<br><span><b>1</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">02-02-2020<br></td>

                            


                            <td>189<br><span><b>8</b></span></td>





                            


                            <td>899<br><span><b>6</b></span></td>





                            


                            <td>138<br><span><b>2</b></span></td>





                            


                            <td>890<br><span><b>7</b></span></td>





                            


                            <td>570<br><span><b>2</b></span></td>





                            


                            <td>158<br><span><b>4</b></span></td>





                            


                            <td>560<br><span><b>1</b></span></td>





                            


                            <td>688<br><span><b>2</b></span></td>





                            


                            <td>680<br><span><b>4</b></span></td>





                            


                            <td>116<br><span><b>8</b></span></td>





                            


                            <td>114<br><span><b>6</b></span></td>





                            


                            <td>642<br><span><b>2</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">03-02-2020<br></td>

                            


                            <td>568<br><span><b>9</b></span></td>





                            


                            <td>389<br><span><b>0</b></span></td>





                            


                            <td>137<br><span><b>1</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            


                            <td>889<br><span><b>5</b></span></td>





                            


                            <td>119<br><span><b>1</b></span></td>





                            


                            <td>135<br><span><b>9</b></span></td>





                            


                            <td>190<br><span><b>0</b></span></td>





                            


                            <td>378<br><span><b>8</b></span></td>





                            


                            <td>555<br><span><b>5</b></span></td>





                            


                            <td>225<br><span><b>9</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">04-02-2020<br></td>

                            


                            <td>269<br><span><b>7</b></span></td>





                            


                            <td>247<br><span><b>3</b></span></td>





                            


                            <td>779<br><span><b>3</b></span></td>





                            


                            <td>380<br><span><b>1</b></span></td>





                            


                            <td>349<br><span><b>6</b></span></td>





                            


                            <td>458<br><span><b>7</b></span></td>





                            


                            <td>246<br><span><b>2</b></span></td>





                            


                            <td>390<br><span><b>2</b></span></td>





                            


                            <td>469<br><span><b>9</b></span></td>





                            


                            <td>127<br><span><b>0</b></span></td>





                            


                            <td>145<br><span><b>0</b></span></td>





                            


                            <td>350<br><span><b>8</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">05-02-2020<br></td>

                            


                            <td>158<br><span><b>4</b></span></td>





                            


                            <td>368<br><span><b>7</b></span></td>





                            


                            <td>447<br><span><b>5</b></span></td>





                            


                            <td>669<br><span><b>1</b></span></td>





                            


                            <td>249<br><span><b>5</b></span></td>





                            


                            <td>148<br><span><b>3</b></span></td>





                            


                            <td>248<br><span><b>4</b></span></td>





                            


                            <td>488<br><span><b>0</b></span></td>





                            


                            <td>568<br><span><b>9</b></span></td>





                            


                            <td>569<br><span><b>0</b></span></td>





                            


                            <td>130<br><span><b>4</b></span></td>





                            


                            <td>698<br><span><b>3</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">06-02-2020<br></td>

                            


                            <td>235<br><span><b>0</b></span></td>





                            


                            <td>123<br><span><b>6</b></span></td>





                            


                            <td>290<br><span><b>1</b></span></td>





                            


                            <td>134<br><span><b>8</b></span></td>





                            


                            <td>137<br><span><b>1</b></span></td>





                            


                            <td>258<br><span><b>5</b></span></td>





                            


                            <td>489<br><span><b>1</b></span></td>





                            


                            <td>479<br><span><b>0</b></span></td>





                            


                            <td>234<br><span><b>9</b></span></td>





                            


                            <td>267<br><span><b>5</b></span></td>





                            


                            <td>168<br><span><b>5</b></span></td>





                            


                            <td>652<br><span><b>3</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">07-02-2020<br></td>

                            


                            <td>339<br><span><b>5</b></span></td>





                            


                            <td>134<br><span><b>8</b></span></td>





                            


                            <td>139<br><span><b>3</b></span></td>





                            


                            <td>289<br><span><b>9</b></span></td>





                            


                            <td>249<br><span><b>5</b></span></td>





                            


                            <td>355<br><span><b>3</b></span></td>





                            


                            <td>167<br><span><b>4</b></span></td>





                            


                            <td>567<br><span><b>8</b></span></td>





                            


                            <td>550<br><span><b>0</b></span></td>





                            


                            <td>247<br><span><b>3</b></span></td>





                            


                            <td>268<br><span><b>6</b></span></td>





                            


                            <td>485<br><span><b>7</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">08-02-2020<br></td>

                            


                            <td>470<br><span><b>1</b></span></td>





                            


                            <td>266<br><span><b>4</b></span></td>





                            


                            <td>259<br><span><b>6</b></span></td>





                            


                            <td>357<br><span><b>5</b></span></td>





                            


                            <td>478<br><span><b>9</b></span></td>





                            


                            <td>177<br><span><b>5</b></span></td>





                            


                            <td>348<br><span><b>5</b></span></td>





                            


                            <td>339<br><span><b>5</b></span></td>





                            


                            <td>145<br><span><b>0</b></span></td>





                            


                            <td>455<br><span><b>4</b></span></td>





                            


                            <td>236<br><span><b>1</b></span></td>





                            


                            <td>480<br><span><b>2</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">09-02-2020<br></td>

                            


                            <td>225<br><span><b>9</b></span></td>





                            


                            <td>236<br><span><b>1</b></span></td>





                            


                            <td>488<br><span><b>0</b></span></td>





                            


                            <td>266<br><span><b>4</b></span></td>





                            


                            <td>577<br><span><b>9</b></span></td>





                            


                            <td>279<br><span><b>8</b></span></td>





                            


                            <td>169<br><span><b>6</b></span></td>





                            


                            <td>148<br><span><b>3</b></span></td>





                            


                            <td>246<br><span><b>2</b></span></td>





                            


                            <td>788<br><span><b>3</b></span></td>





                            


                            <td>568<br><span><b>9</b></span></td>





                            


                            <td>524<br><span><b>1</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">10-02-2020<br></td>

                            


                            <td>289<br><span><b>9</b></span></td>





                            


                            <td>156<br><span><b>2</b></span></td>





                            


                            <td>459<br><span><b>8</b></span></td>





                            


                            <td>188<br><span><b>7</b></span></td>





                            


                            <td>589<br><span><b>2</b></span></td>





                            


                            <td>289<br><span><b>9</b></span></td>





                            


                            <td>457<br><span><b>6</b></span></td>





                            


                            <td>147<br><span><b>2</b></span></td>





                            


                            <td>135<br><span><b>9</b></span></td>





                            


                            <td>390<br><span><b>2</b></span></td>





                            


                            <td>337<br><span><b>3</b></span></td>





                            


                            <td>698<br><span><b>3</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">11-02-2020<br></td>

                            


                            <td>259<br><span><b>6</b></span></td>





                            


                            <td>128<br><span><b>1</b></span></td>





                            


                            <td>447<br><span><b>5</b></span></td>





                            


                            <td>199<br><span><b>9</b></span></td>





                            


                            <td>167<br><span><b>4</b></span></td>





                            


                            <td>489<br><span><b>1</b></span></td>





                            


                            <td>349<br><span><b>6</b></span></td>





                            


                            <td>266<br><span><b>4</b></span></td>





                            


                            <td>245<br><span><b>1</b></span></td>





                            


                            <td>455<br><span><b>4</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            


                            <td>126<br><span><b>9</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">12-02-2020<br></td>

                            


                            <td>468<br><span><b>8</b></span></td>





                            


                            <td>246<br><span><b>2</b></span></td>





                            


                            <td>346<br><span><b>3</b></span></td>





                            


                            <td>359<br><span><b>7</b></span></td>





                            


                            <td>335<br><span><b>1</b></span></td>





                            


                            <td>669<br><span><b>1</b></span></td>





                            


                            <td>379<br><span><b>9</b></span></td>





                            


                            <td>240<br><span><b>6</b></span></td>





                            


                            <td>140<br><span><b>5</b></span></td>





                            


                            <td>477<br><span><b>8</b></span></td>





                            


                            <td>234<br><span><b>9</b></span></td>





                            


                            <td>180<br><span><b>9</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">13-02-2020<br></td>

                            


                            <td>199<br><span><b>9</b></span></td>





                            


                            <td>134<br><span><b>8</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            


                            <td>277<br><span><b>6</b></span></td>





                            


                            <td>489<br><span><b>1</b></span></td>





                            


                            <td>256<br><span><b>3</b></span></td>





                            


                            <td>238<br><span><b>3</b></span></td>





                            


                            <td>248<br><span><b>4</b></span></td>





                            


                            <td>388<br><span><b>9</b></span></td>





                            


                            <td>226<br><span><b>0</b></span></td>





                            


                            <td>567<br><span><b>8</b></span></td>





                            


                            <td>157<br><span><b>3</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">14-02-2020<br></td>

                            


                            <td>460<br><span><b>0</b></span></td>





                            


                            <td>234<br><span><b>9</b></span></td>





                            


                            <td>135<br><span><b>9</b></span></td>





                            


                            <td>348<br><span><b>5</b></span></td>





                            


                            <td>359<br><span><b>7</b></span></td>





                            


                            <td>246<br><span><b>2</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            


                            <td>569<br><span><b>0</b></span></td>





                            


                            <td>268<br><span><b>6</b></span></td>





                            


                            <td>224<br><span><b>8</b></span></td>





                            


                            <td>339<br><span><b>5</b></span></td>





                            


                            <td>178<br><span><b>6</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">15-02-2020<br></td>

                            


                            <td>558<br><span><b>8</b></span></td>





                            


                            <td>359<br><span><b>7</b></span></td>





                            


                            <td>257<br><span><b>4</b></span></td>





                            


                            <td>377<br><span><b>7</b></span></td>





                            


                            <td>367<br><span><b>6</b></span></td>





                            


                            <td>236<br><span><b>1</b></span></td>





                            


                            <td>138<br><span><b>2</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            


                            <td>138<br><span><b>2</b></span></td>





                            


                            <td>348<br><span><b>5</b></span></td>





                            


                            <td>133<br><span><b>7</b></span></td>





                            


                            <td>459<br><span><b>8</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">16-02-2020<br></td>

                            


                            <td>255<br><span><b>2</b></span></td>





                            


                            <td>233<br><span><b>8</b></span></td>





                            


                            <td>339<br><span><b>5</b></span></td>





                            


                            <td>247<br><span><b>3</b></span></td>





                            


                            <td>139<br><span><b>3</b></span></td>





                            


                            <td>456<br><span><b>5</b></span></td>





                            


                            <td>559<br><span><b>9</b></span></td>





                            


                            <td>124<br><span><b>7</b></span></td>





                            


                            <td>588<br><span><b>1</b></span></td>





                            


                            <td>237<br><span><b>2</b></span></td>





                            


                            <td>149<br><span><b>4</b></span></td>





                            


                            <td>124<br><span><b>7</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">17-02-2020<br></td>

                            


                            <td>257<br><span><b>4</b></span></td>





                            


                            <td>789<br><span><b>4</b></span></td>





                            


                            <td>224<br><span><b>8</b></span></td>





                            


                            <td>377<br><span><b>7</b></span></td>





                            


                            <td>259<br><span><b>6</b></span></td>





                            


                            <td>347<br><span><b>4</b></span></td>





                            


                            <td>245<br><span><b>1</b></span></td>





                            


                            <td>239<br><span><b>4</b></span></td>





                            


                            <td>167<br><span><b>4</b></span></td>





                            


                            <td>246<br><span><b>2</b></span></td>





                            


                            <td>389<br><span><b>0</b></span></td>





                            


                            <td>149<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">18-02-2020<br></td>

                            


                            <td>249<br><span><b>5</b></span></td>





                            


                            <td>267<br><span><b>5</b></span></td>





                            


                            <td>224<br><span><b>8</b></span></td>





                            


                            <td>599<br><span><b>3</b></span></td>





                            


                            <td>125<br><span><b>8</b></span></td>





                            


                            <td>340<br><span><b>7</b></span></td>





                            


                            <td>579<br><span><b>1</b></span></td>





                            


                            <td>100<br><span><b>1</b></span></td>





                            


                            <td>239<br><span><b>4</b></span></td>





                            


                            <td>589<br><span><b>2</b></span></td>





                            


                            <td>890<br><span><b>7</b></span></td>





                            


                            <td>800<br><span><b>8</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">19-02-2020<br></td>

                            


                            <td>125<br><span><b>8</b></span></td>





                            


                            <td>221<br><span><b>5</b></span></td>





                            


                            <td>346<br><span><b>3</b></span></td>





                            


                            <td>112<br><span><b>4</b></span></td>





                            


                            <td>336<br><span><b>2</b></span></td>





                            


                            <td>115<br><span><b>7</b></span></td>





                            


                            <td>135<br><span><b>9</b></span></td>





                            


                            <td>145<br><span><b>0</b></span></td>





                            


                            <td>123<br><span><b>6</b></span></td>





                            


                            <td>111<br><span><b>3</b></span></td>





                            


                            <td>432<br><span><b>9</b></span></td>





                            


                            <td>332<br><span><b>8</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">20-02-2020<br></td>

                            


                            <td>225<br><span><b>9</b></span></td>





                            


                            <td>159<br><span><b>5</b></span></td>





                            


                            <td>158<br><span><b>4</b></span></td>





                            


                            <td>588<br><span><b>1</b></span></td>





                            


                            <td>499<br><span><b>2</b></span></td>





                            


                            <td>370<br><span><b>0</b></span></td>





                            


                            <td>290<br><span><b>1</b></span></td>





                            


                            <td>266<br><span><b>4</b></span></td>





                            


                            <td>160<br><span><b>7</b></span></td>





                            


                            <td>388<br><span><b>9</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            


                            <td>379<br><span><b>9</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">21-02-2020<br></td>

                            


                            <td>125<br><span><b>8</b></span></td>





                            


                            <td>119<br><span><b>1</b></span></td>





                            


                            <td>479<br><span><b>0</b></span></td>





                            


                            <td>577<br><span><b>9</b></span></td>





                            


                            <td>125<br><span><b>8</b></span></td>





                            


                            <td>157<br><span><b>3</b></span></td>





                            


                            <td>248<br><span><b>4</b></span></td>





                            


                            <td>146<br><span><b>1</b></span></td>





                            


                            <td>256<br><span><b>3</b></span></td>





                            


                            <td>279<br><span><b>8</b></span></td>





                            


                            <td>670<br><span><b>3</b></span></td>





                            


                            <td>250<br><span><b>7</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">22-02-2020<br></td>

                            


                            <td>122<br><span><b>5</b></span></td>





                            


                            <td>789<br><span><b>4</b></span></td>





                            


                            <td>179<br><span><b>7</b></span></td>





                            


                            <td>347<br><span><b>4</b></span></td>





                            


                            <td>147<br><span><b>2</b></span></td>





                            


                            <td>557<br><span><b>7</b></span></td>





                            


                            <td>779<br><span><b>3</b></span></td>





                            


                            <td>149<br><span><b>4</b></span></td>





                            


                            <td>778<br><span><b>2</b></span></td>





                            


                            <td>111<br><span><b>3</b></span></td>





                            


                            <td>578<br><span><b>0</b></span></td>





                            


                            <td>178<br><span><b>6</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">23-02-2020<br></td>

                            


                            <td>456<br><span><b>5</b></span></td>





                            


                            <td>379<br><span><b>9</b></span></td>





                            


                            <td>228<br><span><b>2</b></span></td>





                            


                            <td>134<br><span><b>8</b></span></td>





                            


                            <td>289<br><span><b>9</b></span></td>





                            


                            <td>247<br><span><b>3</b></span></td>





                            


                            <td>499<br><span><b>2</b></span></td>





                            


                            <td>680<br><span><b>6</b></span></td>





                            


                            <td>421<br><span><b>7</b></span></td>





                            


                            <td>457<br><span><b>6</b></span></td>





                            


                            <td>321<br><span><b>6</b></span></td>





                            


                            <td>258<br><span><b>5</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">24-02-2020<br></td>

                            


                            <td>348<br><span><b>5</b></span></td>





                            


                            <td>226<br><span><b>0</b></span></td>





                            


                            <td>158<br><span><b>4</b></span></td>





                            


                            <td>449<br><span><b>7</b></span></td>





                            


                            <td>299<br><span><b>0</b></span></td>





                            


                            <td>279<br><span><b>8</b></span></td>





                            


                            <td>670<br><span><b>3</b></span></td>





                            


                            <td>134<br><span><b>8</b></span></td>





                            


                            <td>460<br><span><b>0</b></span></td>





                            


                            <td>115<br><span><b>7</b></span></td>





                            


                            <td>350<br><span><b>8</b></span></td>





                            


                            <td>547<br><span><b>6</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">25-02-2020<br></td>

                            


                            <td>247<br><span><b>3</b></span></td>





                            


                            <td>257<br><span><b>4</b></span></td>





                            


                            <td>457<br><span><b>6</b></span></td>





                            


                            <td>399<br><span><b>1</b></span></td>





                            


                            <td>467<br><span><b>7</b></span></td>





                            


                            <td>370<br><span><b>0</b></span></td>





                            


                            <td>588<br><span><b>1</b></span></td>





                            


                            <td>156<br><span><b>2</b></span></td>





                            


                            <td>349<br><span><b>6</b></span></td>





                            


                            <td>370<br><span><b>0</b></span></td>





                            


                            <td>266<br><span><b>4</b></span></td>





                            


                            <td>258<br><span><b>5</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">26-02-2020<br></td>

                            


                            <td>679<br><span><b>2</b></span></td>





                            


                            <td>279<br><span><b>8</b></span></td>





                            


                            <td>289<br><span><b>9</b></span></td>





                            


                            <td>146<br><span><b>1</b></span></td>





                            


                            <td>123<br><span><b>6</b></span></td>





                            


                            <td>459<br><span><b>8</b></span></td>





                            


                            <td>145<br><span><b>0</b></span></td>





                            


                            <td>139<br><span><b>3</b></span></td>





                            


                            <td>157<br><span><b>3</b></span></td>





                            


                            <td>440<br><span><b>8</b></span></td>





                            


                            <td>268<br><span><b>6</b></span></td>





                            


                            <td>356<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">27-02-2020<br></td>

                            


                            <td>478<br><span><b>9</b></span></td>





                            


                            <td>123<br><span><b>6</b></span></td>





                            


                            <td>133<br><span><b>7</b></span></td>





                            


                            <td>338<br><span><b>4</b></span></td>





                            


                            <td>267<br><span><b>5</b></span></td>





                            


                            <td>336<br><span><b>2</b></span></td>





                            


                            <td>379<br><span><b>9</b></span></td>





                            


                            <td>149<br><span><b>4</b></span></td>





                            


                            <td>288<br><span><b>8</b></span></td>





                            


                            <td>139<br><span><b>3</b></span></td>





                            


                            <td>136<br><span><b>0</b></span></td>





                            


                            <td>254<br><span><b>1</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">28-02-2020<br></td>

                            


                            <td>139<br><span><b>3</b></span></td>





                            


                            <td>124<br><span><b>7</b></span></td>





                            


                            <td>280<br><span><b>0</b></span></td>





                            


                            <td>267<br><span><b>5</b></span></td>





                            


                            <td>145<br><span><b>0</b></span></td>





                            


                            <td>224<br><span><b>8</b></span></td>





                            


                            <td>113<br><span><b>5</b></span></td>





                            


                            <td>249<br><span><b>5</b></span></td>





                            


                            <td>344<br><span><b>1</b></span></td>





                            


                            <td>489<br><span><b>1</b></span></td>





                            


                            <td>458<br><span><b>7</b></span></td>





                            


                            <td>260<br><span><b>8</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">29-02-2020<br></td>

                            


                            <td>270<br><span><b>9</b></span></td>





                            


                            <td>157<br><span><b>3</b></span></td>





                            


                            <td>889<br><span><b>5</b></span></td>





                            


                            <td>357<br><span><b>5</b></span></td>





                            


                            <td>569<br><span><b>0</b></span></td>





                            


                            <td>135<br><span><b>9</b></span></td>





                            


                            <td>558<br><span><b>8</b></span></td>





                            


                            <td>129<br><span><b>2</b></span></td>





                            


                            <td>248<br><span><b>4</b></span></td>





                            


                            <td>179<br><span><b>7</b></span></td>





                            


                            <td>369<br><span><b>8</b></span></td>





                            


                            <td>128<br><span><b>1</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">02-03-2020<br></td>

                            


                            <td>477<br><span><b>8</b></span></td>





                            


                            <td>226<br><span><b>0</b></span></td>





                            


                            <td>134<br><span><b>8</b></span></td>





                            


                            <td>557<br><span><b>7</b></span></td>





                            


                            <td>478<br><span><b>9</b></span></td>





                            


                            <td>459<br><span><b>8</b></span></td>





                            


                            <td>367<br><span><b>6</b></span></td>





                            


                            <td>559<br><span><b>9</b></span></td>





                            


                            <td>155<br><span><b>1</b></span></td>





                            


                            <td>379<br><span><b>9</b></span></td>





                            


                            <td>150<br><span><b>6</b></span></td>





                            


                            <td>250<br><span><b>7</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">03-03-2020<br></td>

                            


                            <td>448<br><span><b>6</b></span></td>





                            


                            <td>335<br><span><b>1</b></span></td>





                            


                            <td>134<br><span><b>8</b></span></td>





                            


                            <td>239<br><span><b>4</b></span></td>





                            


                            <td>469<br><span><b>9</b></span></td>





                            


                            <td>678<br><span><b>1</b></span></td>





                            


                            <td>146<br><span><b>1</b></span></td>





                            


                            <td>388<br><span><b>9</b></span></td>





                            


                            <td>247<br><span><b>3</b></span></td>





                            


                            <td>124<br><span><b>7</b></span></td>





                            


                            <td>679<br><span><b>2</b></span></td>





                            


                            <td>250<br><span><b>7</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">04-03-2020<br></td>

                            


                            <td>589<br><span><b>2</b></span></td>





                            


                            <td>148<br><span><b>3</b></span></td>





                            


                            <td>238<br><span><b>3</b></span></td>





                            


                            <td>234<br><span><b>9</b></span></td>





                            


                            <td>225<br><span><b>9</b></span></td>





                            


                            <td>446<br><span><b>4</b></span></td>





                            


                            <td>369<br><span><b>8</b></span></td>





                            


                            <td>169<br><span><b>6</b></span></td>





                            


                            <td>569<br><span><b>0</b></span></td>





                            


                            <td>669<br><span><b>1</b></span></td>





                            


                            <td>137<br><span><b>1</b></span></td>





                            


                            <td>489<br><span><b>1</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">05-03-2020<br></td>

                            


                            <td>577<br><span><b>9</b></span></td>





                            


                            <td>112<br><span><b>4</b></span></td>





                            


                            <td>249<br><span><b>5</b></span></td>





                            


                            <td>148<br><span><b>3</b></span></td>





                            


                            <td>138<br><span><b>2</b></span></td>





                            


                            <td>156<br><span><b>2</b></span></td>





                            


                            <td>256<br><span><b>3</b></span></td>





                            


                            <td>478<br><span><b>9</b></span></td>





                            


                            <td>115<br><span><b>7</b></span></td>





                            


                            <td>567<br><span><b>8</b></span></td>





                            


                            <td>344<br><span><b>1</b></span></td>





                            


                            <td>124<br><span><b>7</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">06-03-2020<br></td>

                            


                            <td>233<br><span><b>8</b></span></td>





                            


                            <td>138<br><span><b>2</b></span></td>





                            


                            <td>239<br><span><b>4</b></span></td>





                            


                            <td>245<br><span><b>1</b></span></td>





                            


                            <td>247<br><span><b>3</b></span></td>





                            


                            <td>119<br><span><b>1</b></span></td>





                            


                            <td>458<br><span><b>7</b></span></td>





                            


                            <td>156<br><span><b>2</b></span></td>





                            


                            <td>247<br><span><b>3</b></span></td>





                            


                            <td>179<br><span><b>7</b></span></td>





                            


                            <td>136<br><span><b>0</b></span></td>





                            


                            <td>566<br><span><b>7</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">07-03-2020<br></td>

                            


                            <td>134<br><span><b>8</b></span></td>





                            


                            <td>660<br><span><b>2</b></span></td>





                            


                            <td>257<br><span><b>4</b></span></td>





                            


                            <td>390<br><span><b>2</b></span></td>





                            


                            <td>130<br><span><b>4</b></span></td>





                            


                            <td>590<br><span><b>4</b></span></td>





                            


                            <td>389<br><span><b>0</b></span></td>





                            


                            <td>224<br><span><b>8</b></span></td>





                            


                            <td>179<br><span><b>7</b></span></td>





                            


                            <td>150<br><span><b>6</b></span></td>





                            


                            <td>166<br><span><b>3</b></span></td>





                            


                            <td>468<br><span><b>8</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">08-03-2020<br></td>

                            


                            <td>567<br><span><b>8</b></span></td>





                            


                            <td>199<br><span><b>9</b></span></td>





                            


                            <td>378<br><span><b>8</b></span></td>





                            


                            <td>370<br><span><b>0</b></span></td>





                            


                            <td>367<br><span><b>6</b></span></td>





                            


                            <td>670<br><span><b>3</b></span></td>





                            


                            <td>357<br><span><b>5</b></span></td>





                            


                            <td>124<br><span><b>7</b></span></td>





                            


                            <td>349<br><span><b>6</b></span></td>





                            


                            <td>347<br><span><b>4</b></span></td>





                            


                            <td>789<br><span><b>4</b></span></td>





                            


                            <td>652<br><span><b>3</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">09-03-2020<br></td>

                            


                            <td>237<br><span><b>2</b></span></td>





                            


                            <td>368<br><span><b>7</b></span></td>





                            


                            <td>256<br><span><b>3</b></span></td>





                            


                            <td>488<br><span><b>0</b></span></td>





                            


                            <td>670<br><span><b>3</b></span></td>





                            


                            <td>589<br><span><b>2</b></span></td>





                            


                            <td>345<br><span><b>2</b></span></td>





                            


                            <td>137<br><span><b>1</b></span></td>





                            


                            <td>789<br><span><b>4</b></span></td>





                            


                            <td>233<br><span><b>8</b></span></td>





                            


                            <td>289<br><span><b>9</b></span></td>





                            


                            <td>157<br><span><b>3</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">11-03-2020<br></td>

                            


                            <td>236<br><span><b>1</b></span></td>





                            


                            <td>257<br><span><b>4</b></span></td>





                            


                            <td>458<br><span><b>7</b></span></td>





                            


                            <td>459<br><span><b>8</b></span></td>





                            


                            <td>490<br><span><b>3</b></span></td>





                            


                            <td>334<br><span><b>0</b></span></td>





                            


                            <td>278<br><span><b>7</b></span></td>





                            


                            <td>257<br><span><b>4</b></span></td>





                            


                            <td>456<br><span><b>5</b></span></td>





                            


                            <td>358<br><span><b>6</b></span></td>





                            


                            <td>257<br><span><b>4</b></span></td>





                            


                            <td>670<br><span><b>3</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">12-03-2020<br></td>

                            


                            <td>567<br><span><b>8</b></span></td>





                            


                            <td>249<br><span><b>5</b></span></td>





                            


                            <td>139<br><span><b>3</b></span></td>





                            


                            <td>670<br><span><b>3</b></span></td>





                            


                            <td>469<br><span><b>9</b></span></td>





                            


                            <td>179<br><span><b>7</b></span></td>





                            


                            <td>148<br><span><b>3</b></span></td>





                            


                            <td>158<br><span><b>4</b></span></td>





                            


                            <td>199<br><span><b>9</b></span></td>





                            


                            <td>167<br><span><b>4</b></span></td>





                            


                            <td>279<br><span><b>8</b></span></td>





                            


                            <td>852<br><span><b>5</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">13-03-2020<br></td>

                            


                            <td>170<br><span><b>8</b></span></td>





                            


                            <td>139<br><span><b>3</b></span></td>





                            


                            <td>266<br><span><b>4</b></span></td>





                            


                            <td>180<br><span><b>9</b></span></td>





                            


                            <td>156<br><span><b>2</b></span></td>





                            


                            <td>168<br><span><b>5</b></span></td>





                            


                            <td>680<br><span><b>4</b></span></td>





                            


                            <td>678<br><span><b>1</b></span></td>





                            


                            <td>278<br><span><b>7</b></span></td>





                            


                            <td>359<br><span><b>7</b></span></td>





                            


                            <td>399<br><span><b>1</b></span></td>





                            


                            <td>690<br><span><b>5</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">14-03-2020<br></td>

                            


                            <td>388<br><span><b>9</b></span></td>





                            


                            <td>578<br><span><b>0</b></span></td>





                            


                            <td>239<br><span><b>4</b></span></td>





                            


                            <td>148<br><span><b>3</b></span></td>





                            


                            <td>399<br><span><b>1</b></span></td>





                            


                            <td>129<br><span><b>2</b></span></td>





                            


                            <td>199<br><span><b>9</b></span></td>





                            


                            <td>579<br><span><b>1</b></span></td>





                            


                            <td>357<br><span><b>5</b></span></td>





                            


                            <td>236<br><span><b>1</b></span></td>





                            


                            <td>158<br><span><b>4</b></span></td>





                            


                            <td>680<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">15-03-2020<br></td>

                            


                            <td>789<br><span><b>4</b></span></td>





                            


                            <td>277<br><span><b>6</b></span></td>





                            


                            <td>110<br><span><b>2</b></span></td>





                            


                            <td>249<br><span><b>5</b></span></td>





                            


                            <td>350<br><span><b>8</b></span></td>





                            


                            <td>458<br><span><b>7</b></span></td>





                            


                            <td>227<br><span><b>1</b></span></td>





                            


                            <td>368<br><span><b>7</b></span></td>





                            


                            <td>230<br><span><b>5</b></span></td>





                            


                            <td>159<br><span><b>5</b></span></td>





                            


                            <td>488<br><span><b>0</b></span></td>





                            


                            <td>458<br><span><b>7</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">16-03-2020<br></td>

                            


                            <td>677<br><span><b>0</b></span></td>





                            


                            <td>189<br><span><b>8</b></span></td>





                            


                            <td>228<br><span><b>2</b></span></td>





                            


                            <td>278<br><span><b>7</b></span></td>





                            


                            <td>134<br><span><b>8</b></span></td>





                            


                            <td>134<br><span><b>8</b></span></td>





                            


                            <td>150<br><span><b>6</b></span></td>





                            


                            <td>588<br><span><b>1</b></span></td>





                            


                            <td>156<br><span><b>2</b></span></td>





                            


                            <td>128<br><span><b>8</b></span></td>





                            


                            <td>499<br><span><b>2</b></span></td>





                            


                            <td>180<br><span><b>9</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">17-03-2020<br></td>

                            


                            <td>156<br><span><b>2</b></span></td>





                            


                            <td>345<br><span><b>2</b></span></td>





                            


                            <td>139<br><span><b>3</b></span></td>





                            


                            <td>580<br><span><b>3</b></span></td>





                            


                            <td>999<br><span><b>7</b></span></td>





                            


                            <td>145<br><span><b>0</b></span></td>





                            


                            <td>567<br><span><b>8</b></span></td>





                            


                            <td>459<br><span><b>8</b></span></td>





                            


                            <td>269<br><span><b>7</b></span></td>





                            


                            <td>139<br><span><b>3</b></span></td>





                            


                            <td>147<br><span><b>2</b></span></td>





                            


                            <td>526<br><span><b>3</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">18-03-2020<br></td>

                            


                            <td>690<br><span><b>5</b></span></td>





                            


                            <td>157<br><span><b>3</b></span></td>





                            


                            <td>290<br><span><b>1</b></span></td>





                            


                            <td>670<br><span><b>3</b></span></td>





                            


                            <td>113<br><span><b>5</b></span></td>





                            


                            <td>380<br><span><b>1</b></span></td>





                            


                            <td>167<br><span><b>4</b></span></td>





                            


                            <td>190<br><span><b>0</b></span></td>





                            


                            <td>145<br><span><b>0</b></span></td>





                            


                            <td>246<br><span><b>2</b></span></td>





                            


                            <td>100<br><span><b>1</b></span></td>





                            


                            <td>200<br><span><b>2</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">19-03-2020<br></td>

                            


                            <td>455<br><span><b>4</b></span></td>





                            


                            <td>460<br><span><b>0</b></span></td>





                            


                            <td>129<br><span><b>2</b></span></td>





                            


                            <td>499<br><span><b>2</b></span></td>





                            


                            <td>123<br><span><b>6</b></span></td>





                            


                            <td>209<br><span><b>1</b></span></td>





                            


                            <td>850<br><span><b>3</b></span></td>





                            


                            <td>343<br><span><b>0</b></span></td>





                            


                            <td>969<br><span><b>4</b></span></td>





                            


                            <td>075<br><span><b>2</b></span></td>





                            


                            <td>269<br><span><b>7</b></span></td>





                            


                            <td>057<br><span><b>2</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">20-03-2020<br></td>

                            


                            <td>780<br><span><b>5</b></span></td>





                            


                            <td>127<br><span><b>0</b></span></td>





                            


                            <td>569<br><span><b>0</b></span></td>





                            


                            <td>247<br><span><b>3</b></span></td>





                            


                            <td>559<br><span><b>9</b></span></td>





                            


                            <td>469<br><span><b>9</b></span></td>





                            


                            <td>249<br><span><b>5</b></span></td>





                            


                            <td>358<br><span><b>6</b></span></td>





                            


                            <td>679<br><span><b>2</b></span></td>





                            


                            <td>184<br><span><b>3</b></span></td>





                            


                            <td>207<br><span><b>9</b></span></td>





                            


                            <td>023<br><span><b>5</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">21-03-2020<br></td>

                            


                            <td>468<br><span><b>8</b></span></td>





                            


                            <td>270<br><span><b>9</b></span></td>





                            


                            <td>170<br><span><b>8</b></span></td>





                            


                            <td>477<br><span><b>8</b></span></td>





                            


                            <td>475<br><span><b>6</b></span></td>





                            


                            <td>339<br><span><b>5</b></span></td>





                            


                            <td>690<br><span><b>5</b></span></td>





                            


                            <td>257<br><span><b>4</b></span></td>





                            


                            <td>330<br><span><b>6</b></span></td>





                            


                            <td>334<br><span><b>0</b></span></td>





                            


                            <td>147<br><span><b>2</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">22-03-2020<br></td>

                            


                            <td>355<br><span><b>3</b></span></td>





                            


                            <td>390<br><span><b>2</b></span></td>





                            


                            <td>138<br><span><b>2</b></span></td>





                            


                            <td>390<br><span><b>2</b></span></td>





                            


                            <td>355<br><span><b>3</b></span></td>





                            


                            <td>160<br><span><b>7</b></span></td>





                            


                            <td>700<br><span><b>7</b></span></td>





                            


                            <td>245<br><span><b>1</b></span></td>





                            


                            <td>158<br><span><b>4</b></span></td>





                            


                            <td>115<br><span><b>7</b></span></td>





                            


                            <td>158<br><span><b>4</b></span></td>





                            


                            <td>888<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">23-03-2020<br></td>

                            


                            <td>358<br><span><b>6</b></span></td>





                            


                            <td>559<br><span><b>9</b></span></td>





                            


                            <td>344<br><span><b>1</b></span></td>





                            


                            <td>330<br><span><b>6</b></span></td>





                            


                            <td>226<br><span><b>0</b></span></td>





                            


                            <td>399<br><span><b>1</b></span></td>





                            


                            <td>900<br><span><b>9</b></span></td>





                            


                            <td>126<br><span><b>9</b></span></td>





                            


                            <td>255<br><span><b>2</b></span></td>





                            


                            <td>266<br><span><b>4</b></span></td>





                            


                            <td>800<br><span><b>8</b></span></td>





                            


                            <td>118<br><span><b>0</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">24-03-2020<br></td>

                            


                            <td>127<br><span><b>0</b></span></td>





                            


                            <td>466<br><span><b>6</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            


                            <td>778<br><span><b>2</b></span></td>





                            


                            <td>114<br><span><b>6</b></span></td>





                            


                            <td>236<br><span><b>1</b></span></td>





                            


                            <td>369<br><span><b>8</b></span></td>





                            


                            <td>111<br><span><b>3</b></span></td>





                            


                            <td>268<br><span><b>6</b></span></td>





                            


                            <td>459<br><span><b>8</b></span></td>





                            


                            <td>700<br><span><b>7</b></span></td>





                            


                            <td>277<br><span><b>6</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">25-03-2020<br></td>

                            


                            <td>448<br><span><b>6</b></span></td>





                            


                            <td>289<br><span><b>9</b></span></td>





                            


                            <td>458<br><span><b>7</b></span></td>





                            


                            <td>368<br><span><b>7</b></span></td>





                            


                            <td>350<br><span><b>8</b></span></td>





                            


                            <td>178<br><span><b>6</b></span></td>





                            


                            <td>399<br><span><b>1</b></span></td>





                            


                            <td>139<br><span><b>3</b></span></td>





                            


                            <td>179<br><span><b>7</b></span></td>





                            


                            <td>400<br><span><b>4</b></span></td>





                            


                            <td>456<br><span><b>5</b></span></td>





                            


                            <td>555<br><span><b>5</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">26-03-2020<br></td>

                            


                            <td>333<br><span><b>9</b></span></td>





                            


                            <td>449<br><span><b>7</b></span></td>





                            


                            <td>367<br><span><b>6</b></span></td>





                            


                            <td>155<br><span><b>1</b></span></td>





                            


                            <td>144<br><span><b>9</b></span></td>





                            


                            <td>336<br><span><b>2</b></span></td>





                            


                            <td>900<br><span><b>9</b></span></td>





                            


                            <td>359<br><span><b>7</b></span></td>





                            


                            <td>133<br><span><b>7</b></span></td>





                            


                            <td>169<br><span><b>6</b></span></td>





                            


                            <td>559<br><span><b>9</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">27-03-2020<br></td>

                            


                            <td>357<br><span><b>5</b></span></td>





                            


                            <td>190<br><span><b>0</b></span></td>





                            


                            <td>224<br><span><b>8</b></span></td>





                            


                            <td>257<br><span><b>4</b></span></td>





                            


                            <td>800<br><span><b>8</b></span></td>





                            


                            <td>469<br><span><b>9</b></span></td>





                            


                            <td>250<br><span><b>7</b></span></td>





                            


                            <td>359<br><span><b>7</b></span></td>





                            


                            <td>110<br><span><b>2</b></span></td>





                            


                            <td>567<br><span><b>8</b></span></td>





                            


                            <td>330<br><span><b>6</b></span></td>





                            


                            <td>459<br><span><b>8</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">28-03-2020<br></td>

                            


                            <td>100<br><span><b>1</b></span></td>





                            


                            <td>559<br><span><b>9</b></span></td>





                            


                            <td>330<br><span><b>6</b></span></td>





                            


                            <td>448<br><span><b>6</b></span></td>





                            


                            <td>499<br><span><b>2</b></span></td>





                            


                            <td>440<br><span><b>8</b></span></td>





                            


                            <td>134<br><span><b>8</b></span></td>





                            


                            <td>335<br><span><b>1</b></span></td>





                            


                            <td>129<br><span><b>2</b></span></td>





                            


                            <td>360<br><span><b>9</b></span></td>





                            


                            <td>136<br><span><b>0</b></span></td>





                            


                            <td>290<br><span><b>1</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">29-03-2020<br></td>

                            


                            <td>588<br><span><b>1</b></span></td>





                            


                            <td>200<br><span><b>2</b></span></td>





                            


                            <td>447<br><span><b>5</b></span></td>





                            


                            <td>127<br><span><b>0</b></span></td>





                            


                            <td>680<br><span><b>4</b></span></td>





                            


                            <td>900<br><span><b>9</b></span></td>





                            


                            <td>124<br><span><b>7</b></span></td>





                            


                            <td>126<br><span><b>9</b></span></td>





                            


                            <td>344<br><span><b>1</b></span></td>





                            


                            <td>378<br><span><b>8</b></span></td>





                            


                            <td>113<br><span><b>5</b></span></td>





                            


                            <td>189<br><span><b>8</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">30-03-2020<br></td>

                            


                            <td>360<br><span><b>9</b></span></td>





                            


                            <td>770<br><span><b>4</b></span></td>





                            


                            <td>100<br><span><b>1</b></span></td>





                            


                            <td>245<br><span><b>1</b></span></td>





                            


                            <td>558<br><span><b>8</b></span></td>





                            


                            <td>479<br><span><b>0</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            


                            <td>135<br><span><b>9</b></span></td>





                            


                            <td>660<br><span><b>2</b></span></td>





                            


                            <td>189<br><span><b>8</b></span></td>





                            


                            <td>366<br><span><b>5</b></span></td>





                            


                            <td>690<br><span><b>5</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">31-03-2020<br></td>

                            


                            <td>379<br><span><b>9</b></span></td>





                            


                            <td>357<br><span><b>5</b></span></td>





                            


                            <td>125<br><span><b>8</b></span></td>





                            


                            <td>669<br><span><b>1</b></span></td>





                            


                            <td>333<br><span><b>9</b></span></td>





                            


                            <td>336<br><span><b>2</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            


                            <td>189<br><span><b>8</b></span></td>





                            


                            <td>157<br><span><b>3</b></span></td>





                            


                            <td>347<br><span><b>4</b></span></td>





                            


                            <td>348<br><span><b>5</b></span></td>





                            


                            <td>459<br><span><b>8</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">01-04-2020<br></td>

                            


                            <td>122<br><span><b>5</b></span></td>





                            


                            <td>458<br><span><b>7</b></span></td>





                            


                            <td>890<br><span><b>7</b></span></td>





                            


                            <td>136<br><span><b>0</b></span></td>





                            


                            <td>139<br><span><b>3</b></span></td>





                            


                            <td>257<br><span><b>4</b></span></td>





                            


                            <td>238<br><span><b>3</b></span></td>





                            


                            <td>444<br><span><b>2</b></span></td>





                            


                            <td>138<br><span><b>2</b></span></td>





                            


                            <td>150<br><span><b>6</b></span></td>





                            


                            <td>447<br><span><b>5</b></span></td>





                            


                            <td>789<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">02-04-2020<br></td>

                            


                            <td>155<br><span><b>1</b></span></td>





                            


                            <td>244<br><span><b>0</b></span></td>





                            


                            <td>899<br><span><b>6</b></span></td>





                            


                            <td>369<br><span><b>8</b></span></td>





                            


                            <td>667<br><span><b>9</b></span></td>





                            


                            <td>244<br><span><b>0</b></span></td>





                            


                            <td>700<br><span><b>7</b></span></td>





                            


                            <td>457<br><span><b>6</b></span></td>





                            


                            <td>348<br><span><b>5</b></span></td>





                            


                            <td>466<br><span><b>6</b></span></td>





                            


                            <td>778<br><span><b>2</b></span></td>





                            


                            <td>333<br><span><b>9</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">03-04-2020<br></td>

                            


                            <td>790<br><span><b>6</b></span></td>





                            


                            <td>288<br><span><b>8</b></span></td>





                            


                            <td>355<br><span><b>3</b></span></td>





                            


                            <td>440<br><span><b>8</b></span></td>





                            


                            <td>589<br><span><b>2</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            


                            <td>146<br><span><b>1</b></span></td>





                            


                            <td>199<br><span><b>9</b></span></td>





                            


                            <td>889<br><span><b>5</b></span></td>





                            


                            <td>100<br><span><b>1</b></span></td>





                            


                            <td>899<br><span><b>6</b></span></td>





                            


                            <td>578<br><span><b>0</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">04-04-2020<br></td>

                            


                            <td>369<br><span><b>8</b></span></td>





                            


                            <td>357<br><span><b>5</b></span></td>





                            


                            <td>577<br><span><b>9</b></span></td>





                            


                            <td>133<br><span><b>7</b></span></td>





                            


                            <td>111<br><span><b>3</b></span></td>





                            


                            <td>115<br><span><b>7</b></span></td>





                            


                            <td>168<br><span><b>5</b></span></td>





                            


                            <td>277<br><span><b>6</b></span></td>





                            


                            <td>447<br><span><b>5</b></span></td>





                            


                            <td>259<br><span><b>6</b></span></td>





                            


                            <td>470<br><span><b>1</b></span></td>





                            


                            <td>369<br><span><b>8</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">05-04-2020<br></td>

                            


                            <td>360<br><span><b>9</b></span></td>





                            


                            <td>346<br><span><b>3</b></span></td>





                            


                            <td>367<br><span><b>6</b></span></td>





                            


                            <td>330<br><span><b>6</b></span></td>





                            


                            <td>220<br><span><b>4</b></span></td>





                            


                            <td>136<br><span><b>0</b></span></td>





                            


                            <td>159<br><span><b>5</b></span></td>





                            


                            <td>480<br><span><b>2</b></span></td>





                            


                            <td>199<br><span><b>9</b></span></td>





                            


                            <td>336<br><span><b>2</b></span></td>





                            


                            <td>557<br><span><b>7</b></span></td>





                            


                            <td>145<br><span><b>0</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">06-04-2020<br></td>

                            


                            <td>335<br><span><b>1</b></span></td>





                            


                            <td>577<br><span><b>9</b></span></td>





                            


                            <td>799<br><span><b>5</b></span></td>





                            


                            <td>159<br><span><b>5</b></span></td>





                            


                            <td>300<br><span><b>3</b></span></td>





                            


                            <td>147<br><span><b>2</b></span></td>





                            


                            <td>114<br><span><b>6</b></span></td>





                            


                            <td>579<br><span><b>1</b></span></td>





                            


                            <td>589<br><span><b>2</b></span></td>





                            


                            <td>799<br><span><b>5</b></span></td>





                            


                            <td>880<br><span><b>6</b></span></td>





                            


                            <td>122<br><span><b>5</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">07-04-2020<br></td>

                            


                            <td>690<br><span><b>5</b></span></td>





                            


                            <td>136<br><span><b>0</b></span></td>





                            


                            <td>499<br><span><b>2</b></span></td>





                            


                            <td>333<br><span><b>9</b></span></td>





                            


                            <td>118<br><span><b>0</b></span></td>





                            


                            <td>225<br><span><b>9</b></span></td>





                            


                            <td>110<br><span><b>2</b></span></td>





                            


                            <td>299<br><span><b>0</b></span></td>





                            


                            <td>239<br><span><b>4</b></span></td>





                            


                            <td>158<br><span><b>4</b></span></td>





                            


                            <td>117<br><span><b>9</b></span></td>





                            


                            <td>124<br><span><b>7</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">08-04-2020<br></td>

                            


                            <td>468<br><span><b>8</b></span></td>





                            


                            <td>900<br><span><b>9</b></span></td>





                            


                            <td>380<br><span><b>1</b></span></td>





                            


                            <td>290<br><span><b>1</b></span></td>





                            


                            <td>148<br><span><b>3</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            


                            <td>550<br><span><b>0</b></span></td>





                            


                            <td>234<br><span><b>9</b></span></td>





                            


                            <td>330<br><span><b>6</b></span></td>





                            


                            <td>233<br><span><b>8</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">09-04-2020<br></td>

                            


                            <td>248<br><span><b>4</b></span></td>





                            


                            <td>458<br><span><b>7</b></span></td>





                            


                            <td>557<br><span><b>7</b></span></td>





                            


                            <td>258<br><span><b>5</b></span></td>





                            


                            <td>379<br><span><b>9</b></span></td>





                            


                            <td>367<br><span><b>6</b></span></td>





                            


                            <td>258<br><span><b>5</b></span></td>





                            


                            <td>466<br><span><b>6</b></span></td>





                            


                            <td>690<br><span><b>5</b></span></td>





                            


                            <td>500<br><span><b>5</b></span></td>





                            


                            <td>550<br><span><b>0</b></span></td>





                            


                            <td>477<br><span><b>8</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">10-04-2020<br></td>

                            


                            <td>599<br><span><b>3</b></span></td>





                            


                            <td>660<br><span><b>2</b></span></td>





                            


                            <td>118<br><span><b>0</b></span></td>





                            


                            <td>300<br><span><b>3</b></span></td>





                            


                            <td>466<br><span><b>6</b></span></td>





                            


                            <td>278<br><span><b>7</b></span></td>





                            


                            <td>259<br><span><b>6</b></span></td>





                            


                            <td>136<br><span><b>0</b></span></td>





                            


                            <td>137<br><span><b>1</b></span></td>





                            


                            <td>458<br><span><b>7</b></span></td>





                            


                            <td>556<br><span><b>6</b></span></td>





                            


                            <td>800<br><span><b>8</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">11-04-2020<br></td>

                            


                            <td>780<br><span><b>5</b></span></td>





                            


                            <td>118<br><span><b>0</b></span></td>





                            


                            <td>479<br><span><b>0</b></span></td>





                            


                            <td>670<br><span><b>3</b></span></td>





                            


                            <td>778<br><span><b>2</b></span></td>





                            


                            <td>150<br><span><b>6</b></span></td>





                            


                            <td>479<br><span><b>0</b></span></td>





                            


                            <td>359<br><span><b>7</b></span></td>





                            


                            <td>112<br><span><b>4</b></span></td>





                            


                            <td>138<br><span><b>2</b></span></td>





                            


                            <td>167<br><span><b>4</b></span></td>





                            


                            <td>800<br><span><b>8</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">12-04-2020<br></td>

                            


                            <td>134<br><span><b>8</b></span></td>





                            


                            <td>337<br><span><b>3</b></span></td>





                            


                            <td>250<br><span><b>7</b></span></td>





                            


                            <td>138<br><span><b>2</b></span></td>





                            


                            <td>366<br><span><b>5</b></span></td>





                            


                            <td>177<br><span><b>5</b></span></td>





                            


                            <td>458<br><span><b>7</b></span></td>





                            


                            <td>389<br><span><b>0</b></span></td>





                            


                            <td>246<br><span><b>2</b></span></td>





                            


                            <td>138<br><span><b>2</b></span></td>





                            


                            <td>136<br><span><b>0</b></span></td>





                            


                            <td>578<br><span><b>0</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">13-04-2020<br></td>

                            


                            <td>366<br><span><b>5</b></span></td>





                            


                            <td>125<br><span><b>8</b></span></td>





                            


                            <td>688<br><span><b>2</b></span></td>





                            


                            <td>888<br><span><b>4</b></span></td>





                            


                            <td>789<br><span><b>4</b></span></td>





                            


                            <td>578<br><span><b>0</b></span></td>





                            


                            <td>378<br><span><b>8</b></span></td>





                            


                            <td>239<br><span><b>4</b></span></td>





                            


                            <td>400<br><span><b>4</b></span></td>





                            


                            <td>222<br><span><b>6</b></span></td>





                            


                            <td>115<br><span><b>7</b></span></td>





                            


                            <td>115<br><span><b>7</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">14-04-2020<br></td>

                            


                            <td>388<br><span><b>9</b></span></td>





                            


                            <td>569<br><span><b>0</b></span></td>





                            


                            <td>458<br><span><b>7</b></span></td>





                            


                            <td>800<br><span><b>8</b></span></td>





                            


                            <td>889<br><span><b>5</b></span></td>





                            


                            <td>220<br><span><b>4</b></span></td>





                            


                            <td>450<br><span><b>9</b></span></td>





                            


                            <td>256<br><span><b>3</b></span></td>





                            


                            <td>340<br><span><b>7</b></span></td>





                            


                            <td>279<br><span><b>8</b></span></td>





                            


                            <td>236<br><span><b>1</b></span></td>





                            


                            <td>670<br><span><b>3</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">15-04-2020<br></td>

                            


                            <td>699<br><span><b>4</b></span></td>





                            


                            <td>334<br><span><b>0</b></span></td>





                            


                            <td>600<br><span><b>6</b></span></td>





                            


                            <td>449<br><span><b>7</b></span></td>





                            


                            <td>678<br><span><b>1</b></span></td>





                            


                            <td>246<br><span><b>2</b></span></td>





                            


                            <td>167<br><span><b>4</b></span></td>





                            


                            <td>690<br><span><b>5</b></span></td>





                            


                            <td>345<br><span><b>2</b></span></td>





                            


                            <td>680<br><span><b>4</b></span></td>





                            


                            <td>500<br><span><b>5</b></span></td>





                            


                            <td>579<br><span><b>1</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">16-04-2020<br></td>

                            


                            <td>780<br><span><b>5</b></span></td>





                            


                            <td>123<br><span><b>6</b></span></td>





                            


                            <td>190<br><span><b>0</b></span></td>





                            


                            <td>230<br><span><b>5</b></span></td>





                            


                            <td>990<br><span><b>8</b></span></td>





                            


                            <td>188<br><span><b>7</b></span></td>





                            


                            <td>130<br><span><b>4</b></span></td>





                            


                            <td>240<br><span><b>6</b></span></td>





                            


                            <td>800<br><span><b>8</b></span></td>





                            


                            <td>110<br><span><b>2</b></span></td>





                            


                            <td>239<br><span><b>4</b></span></td>





                            


                            <td>450<br><span><b>9</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">17-04-2020<br></td>

                            


                            <td>166<br><span><b>3</b></span></td>





                            


                            <td>577<br><span><b>9</b></span></td>





                            


                            <td>245<br><span><b>1</b></span></td>





                            


                            <td>140<br><span><b>5</b></span></td>





                            


                            <td>238<br><span><b>3</b></span></td>





                            


                            <td>269<br><span><b>7</b></span></td>





                            


                            <td>110<br><span><b>2</b></span></td>





                            


                            <td>340<br><span><b>7</b></span></td>





                            


                            <td>245<br><span><b>1</b></span></td>





                            


                            <td>250<br><span><b>7</b></span></td>





                            


                            <td>789<br><span><b>4</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">18-04-2020<br></td>

                            


                            <td>239<br><span><b>4</b></span></td>





                            


                            <td>350<br><span><b>8</b></span></td>





                            


                            <td>799<br><span><b>5</b></span></td>





                            


                            <td>577<br><span><b>9</b></span></td>





                            


                            <td>123<br><span><b>6</b></span></td>





                            


                            <td>250<br><span><b>7</b></span></td>





                            


                            <td>560<br><span><b>1</b></span></td>





                            


                            <td>466<br><span><b>6</b></span></td>





                            


                            <td>255<br><span><b>2</b></span></td>





                            


                            <td>890<br><span><b>7</b></span></td>





                            


                            <td>245<br><span><b>1</b></span></td>





                            


                            <td>590<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">19-04-2020<br></td>

                            


                            <td>123<br><span><b>6</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            


                            <td>789<br><span><b>4</b></span></td>





                            


                            <td>460<br><span><b>0</b></span></td>





                            


                            <td>137<br><span><b>1</b></span></td>





                            


                            <td>479<br><span><b>0</b></span></td>





                            


                            <td>257<br><span><b>4</b></span></td>





                            


                            <td>347<br><span><b>4</b></span></td>





                            


                            <td>126<br><span><b>9</b></span></td>





                            


                            <td>168<br><span><b>5</b></span></td>





                            


                            <td>256<br><span><b>3</b></span></td>





                            


                            <td>234<br><span><b>9</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">20-04-2020<br></td>

                            


                            <td>125<br><span><b>8</b></span></td>





                            


                            <td>246<br><span><b>2</b></span></td>





                            


                            <td>266<br><span><b>4</b></span></td>





                            


                            <td>570<br><span><b>2</b></span></td>





                            


                            <td>127<br><span><b>0</b></span></td>





                            


                            <td>890<br><span><b>7</b></span></td>





                            


                            <td>140<br><span><b>5</b></span></td>





                            


                            <td>800<br><span><b>8</b></span></td>





                            


                            <td>568<br><span><b>9</b></span></td>





                            


                            <td>799<br><span><b>5</b></span></td>





                            


                            <td>788<br><span><b>3</b></span></td>





                            


                            <td>389<br><span><b>0</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">21-04-2020<br></td>

                            


                            <td>456<br><span><b>5</b></span></td>





                            


                            <td>340<br><span><b>7</b></span></td>





                            


                            <td>100<br><span><b>1</b></span></td>





                            


                            <td>234<br><span><b>9</b></span></td>





                            


                            <td>290<br><span><b>1</b></span></td>





                            


                            <td>550<br><span><b>0</b></span></td>





                            


                            <td>228<br><span><b>2</b></span></td>





                            


                            <td>380<br><span><b>1</b></span></td>





                            


                            <td>159<br><span><b>5</b></span></td>





                            


                            <td>890<br><span><b>7</b></span></td>





                            


                            <td>780<br><span><b>5</b></span></td>





                            


                            <td>457<br><span><b>6</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">22-04-2020<br></td>

                            


                            <td>130<br><span><b>4</b></span></td>





                            


                            <td>126<br><span><b>9</b></span></td>





                            


                            <td>122<br><span><b>5</b></span></td>





                            


                            <td>390<br><span><b>2</b></span></td>





                            


                            <td>880<br><span><b>6</b></span></td>





                            


                            <td>189<br><span><b>8</b></span></td>





                            


                            <td>155<br><span><b>1</b></span></td>





                            


                            <td>239<br><span><b>4</b></span></td>





                            


                            <td>180<br><span><b>9</b></span></td>





                            


                            <td>890<br><span><b>7</b></span></td>





                            


                            <td>239<br><span><b>4</b></span></td>





                            


                            <td>457<br><span><b>6</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">23-04-2020<br></td>

                            


                            <td>190<br><span><b>0</b></span></td>





                            


                            <td>125<br><span><b>8</b></span></td>





                            


                            <td>220<br><span><b>4</b></span></td>





                            


                            <td>460<br><span><b>0</b></span></td>





                            


                            <td>660<br><span><b>2</b></span></td>





                            


                            <td>667<br><span><b>9</b></span></td>





                            


                            <td>359<br><span><b>7</b></span></td>





                            


                            <td>268<br><span><b>6</b></span></td>





                            


                            <td>579<br><span><b>1</b></span></td>





                            


                            <td>130<br><span><b>4</b></span></td>





                            


                            <td>360<br><span><b>9</b></span></td>





                            


                            <td>150<br><span><b>6</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">24-04-2020<br></td>

                            


                            <td>125<br><span><b>8</b></span></td>





                            


                            <td>480<br><span><b>2</b></span></td>





                            


                            <td>790<br><span><b>6</b></span></td>





                            


                            <td>400<br><span><b>4</b></span></td>





                            


                            <td>128<br><span><b>1</b></span></td>





                            


                            <td>260<br><span><b>8</b></span></td>





                            


                            <td>230<br><span><b>5</b></span></td>





                            


                            <td>578<br><span><b>0</b></span></td>





                            


                            <td>245<br><span><b>1</b></span></td>





                            


                            <td>157<br><span><b>3</b></span></td>





                            


                            <td>356<br><span><b>4</b></span></td>





                            


                            <td>479<br><span><b>0</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">25-04-2020<br></td>

                            


                            <td>144<br><span><b>9</b></span></td>





                            


                            <td>230<br><span><b>5</b></span></td>





                            


                            <td>279<br><span><b>8</b></span></td>





                            


                            <td>110<br><span><b>2</b></span></td>





                            


                            <td>150<br><span><b>6</b></span></td>





                            


                            <td>890<br><span><b>7</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            


                            <td>789<br><span><b>4</b></span></td>





                            


                            <td>379<br><span><b>9</b></span></td>





                            


                            <td>120<br><span><b>3</b></span></td>





                            


                            <td>160<br><span><b>7</b></span></td>





                            


                            <td>125<br><span><b>8</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">26-04-2020<br></td>

                            


                            <td>890<br><span><b>7</b></span></td>





                            


                            <td>568<br><span><b>9</b></span></td>





                            


                            <td>457<br><span><b>6</b></span></td>





                            


                            <td>245<br><span><b>1</b></span></td>





                            


                            <td>137<br><span><b>1</b></span></td>





                            


                            <td>480<br><span><b>2</b></span></td>





                            


                            <td>578<br><span><b>0</b></span></td>





                            


                            <td>124<br><span><b>7</b></span></td>





                            


                            <td>190<br><span><b>0</b></span></td>





                            


                            <td>268<br><span><b>6</b></span></td>





                            


                            <td>246<br><span><b>2</b></span></td>





                            


                            <td>680<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">27-04-2020<br></td>

                            


                            <td>130<br><span><b>4</b></span></td>





                            


                            <td>450<br><span><b>9</b></span></td>





                            


                            <td>589<br><span><b>2</b></span></td>





                            


                            <td>890<br><span><b>7</b></span></td>





                            


                            <td>123<br><span><b>6</b></span></td>





                            


                            <td>299<br><span><b>0</b></span></td>





                            


                            <td>236<br><span><b>1</b></span></td>





                            


                            <td>180<br><span><b>9</b></span></td>





                            


                            <td>246<br><span><b>2</b></span></td>





                            


                            <td>457<br><span><b>6</b></span></td>





                            


                            <td>468<br><span><b>8</b></span></td>





                            


                            <td>458<br><span><b>7</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">28-04-2020<br></td>

                            


                            <td>280<br><span><b>0</b></span></td>





                            


                            <td>170<br><span><b>8</b></span></td>





                            


                            <td>457<br><span><b>6</b></span></td>





                            


                            <td>144<br><span><b>9</b></span></td>





                            


                            <td>459<br><span><b>8</b></span></td>





                            


                            <td>380<br><span><b>1</b></span></td>





                            


                            <td>590<br><span><b>4</b></span></td>





                            


                            <td>200<br><span><b>2</b></span></td>





                            


                            <td>467<br><span><b>7</b></span></td>





                            


                            <td>148<br><span><b>3</b></span></td>





                            


                            <td>140<br><span><b>5</b></span></td>





                            


                            <td>134<br><span><b>8</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">29-04-2020<br></td>

                            


                            <td>670<br><span><b>3</b></span></td>





                            


                            <td>790<br><span><b>6</b></span></td>





                            


                            <td>560<br><span><b>1</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            


                            <td>279<br><span><b>8</b></span></td>





                            


                            <td>450<br><span><b>9</b></span></td>





                            


                            <td>238<br><span><b>3</b></span></td>





                            


                            <td>220<br><span><b>4</b></span></td>





                            


                            <td>129<br><span><b>2</b></span></td>





                            


                            <td>150<br><span><b>6</b></span></td>





                            


                            <td>160<br><span><b>7</b></span></td>





                            


                            <td>145<br><span><b>0</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">30-04-2020<br></td>

                            


                            <td>290<br><span><b>1</b></span></td>





                            


                            <td>140<br><span><b>5</b></span></td>





                            


                            <td>289<br><span><b>9</b></span></td>





                            


                            <td>580<br><span><b>3</b></span></td>





                            


                            <td>145<br><span><b>0</b></span></td>





                            


                            <td>200<br><span><b>2</b></span></td>





                            


                            <td>190<br><span><b>0</b></span></td>





                            


                            <td>890<br><span><b>7</b></span></td>





                            


                            <td>347<br><span><b>4</b></span></td>





                            


                            <td>330<br><span><b>6</b></span></td>





                            


                            <td>260<br><span><b>8</b></span></td>





                            


                            <td>357<br><span><b>5</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">01-05-2020<br></td>

                            


                            <td>370<br><span><b>0</b></span></td>





                            


                            <td>679<br><span><b>2</b></span></td>





                            


                            <td>670<br><span><b>3</b></span></td>





                            


                            <td>169<br><span><b>6</b></span></td>





                            


                            <td>770<br><span><b>4</b></span></td>





                            


                            <td>890<br><span><b>7</b></span></td>





                            


                            <td>500<br><span><b>5</b></span></td>





                            


                            <td>220<br><span><b>4</b></span></td>





                            


                            <td>137<br><span><b>1</b></span></td>





                            


                            <td>790<br><span><b>6</b></span></td>





                            


                            <td>280<br><span><b>0</b></span></td>





                            


                            <td>147<br><span><b>2</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">02-05-2020<br></td>

                            


                            <td>456<br><span><b>5</b></span></td>





                            


                            <td>128<br><span><b>1</b></span></td>





                            


                            <td>789<br><span><b>4</b></span></td>





                            


                            <td>260<br><span><b>8</b></span></td>





                            


                            <td>230<br><span><b>5</b></span></td>





                            


                            <td>188<br><span><b>7</b></span></td>





                            


                            <td>120<br><span><b>3</b></span></td>





                            


                            <td>600<br><span><b>6</b></span></td>





                            


                            <td>249<br><span><b>5</b></span></td>





                            


                            <td>246<br><span><b>2</b></span></td>





                            


                            <td>360<br><span><b>9</b></span></td>





                            


                            <td>346<br><span><b>3</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">03-05-2020<br></td>

                            


                            <td>190<br><span><b>0</b></span></td>





                            


                            <td>377<br><span><b>7</b></span></td>





                            


                            <td>330<br><span><b>6</b></span></td>





                            


                            <td>129<br><span><b>2</b></span></td>





                            


                            <td>690<br><span><b>5</b></span></td>





                            


                            <td>780<br><span><b>5</b></span></td>





                            


                            <td>457<br><span><b>6</b></span></td>





                            


                            <td>389<br><span><b>0</b></span></td>





                            


                            <td>490<br><span><b>3</b></span></td>





                            


                            <td>147<br><span><b>2</b></span></td>





                            


                            <td>568<br><span><b>9</b></span></td>





                            


                            <td>789<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">04-05-2020<br></td>

                            


                            <td>245<br><span><b>1</b></span></td>





                            


                            <td>459<br><span><b>8</b></span></td>





                            


                            <td>122<br><span><b>5</b></span></td>





                            


                            <td>158<br><span><b>4</b></span></td>





                            


                            <td>180<br><span><b>9</b></span></td>





                            


                            <td>148<br><span><b>3</b></span></td>





                            


                            <td>349<br><span><b>6</b></span></td>





                            


                            <td>370<br><span><b>0</b></span></td>





                            


                            <td>679<br><span><b>2</b></span></td>





                            


                            <td>890<br><span><b>7</b></span></td>





                            


                            <td>147<br><span><b>2</b></span></td>





                            


                            <td>579<br><span><b>1</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">05-05-2020<br></td>

                            


                            <td>369<br><span><b>8</b></span></td>





                            


                            <td>450<br><span><b>9</b></span></td>





                            


                            <td>100<br><span><b>1</b></span></td>





                            


                            <td>130<br><span><b>4</b></span></td>





                            


                            <td>199<br><span><b>9</b></span></td>





                            


                            <td>110<br><span><b>2</b></span></td>





                            


                            <td>280<br><span><b>0</b></span></td>





                            


                            <td>480<br><span><b>2</b></span></td>





                            


                            <td>349<br><span><b>6</b></span></td>





                            


                            <td>460<br><span><b>0</b></span></td>





                            


                            <td>189<br><span><b>8</b></span></td>





                            


                            <td>680<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">06-05-2020<br></td>

                            


                            <td>380<br><span><b>1</b></span></td>





                            


                            <td>589<br><span><b>2</b></span></td>





                            


                            <td>790<br><span><b>6</b></span></td>





                            


                            <td>290<br><span><b>1</b></span></td>





                            


                            <td>148<br><span><b>3</b></span></td>





                            


                            <td>190<br><span><b>0</b></span></td>





                            


                            <td>269<br><span><b>7</b></span></td>





                            


                            <td>889<br><span><b>5</b></span></td>





                            


                            <td>260<br><span><b>8</b></span></td>





                            


                            <td>570<br><span><b>2</b></span></td>





                            


                            <td>400<br><span><b>4</b></span></td>





                            


                            <td>379<br><span><b>9</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">07-05-2020<br></td>

                            


                            <td>670<br><span><b>3</b></span></td>





                            


                            <td>139<br><span><b>3</b></span></td>





                            


                            <td>130<br><span><b>4</b></span></td>





                            


                            <td>124<br><span><b>7</b></span></td>





                            


                            <td>126<br><span><b>9</b></span></td>





                            


                            <td>690<br><span><b>5</b></span></td>





                            


                            <td>790<br><span><b>6</b></span></td>





                            


                            <td>180<br><span><b>9</b></span></td>





                            


                            <td>236<br><span><b>1</b></span></td>





                            


                            <td>138<br><span><b>2</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            


                            <td>367<br><span><b>6</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">08-05-2020<br></td>

                            


                            <td>360<br><span><b>9</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            


                            <td>256<br><span><b>3</b></span></td>





                            


                            <td>890<br><span><b>7</b></span></td>





                            


                            <td>300<br><span><b>3</b></span></td>





                            


                            <td>450<br><span><b>9</b></span></td>





                            


                            <td>700<br><span><b>7</b></span></td>





                            


                            <td>240<br><span><b>6</b></span></td>





                            


                            <td>489<br><span><b>1</b></span></td>





                            


                            <td>128<br><span><b>1</b></span></td>





                            


                            <td>147<br><span><b>2</b></span></td>





                            


                            <td>158<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">09-05-2020<br></td>

                            


                            <td>690<br><span><b>5</b></span></td>





                            


                            <td>167<br><span><b>4</b></span></td>





                            


                            <td>146<br><span><b>1</b></span></td>





                            


                            <td>469<br><span><b>9</b></span></td>





                            


                            <td>126<br><span><b>9</b></span></td>





                            


                            <td>160<br><span><b>7</b></span></td>





                            


                            <td>180<br><span><b>9</b></span></td>





                            


                            <td>150<br><span><b>6</b></span></td>





                            


                            <td>147<br><span><b>2</b></span></td>





                            


                            <td>780<br><span><b>5</b></span></td>





                            


                            <td>127<br><span><b>0</b></span></td>





                            


                            <td>158<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">10-05-2020<br></td>

                            


                            <td>113<br><span><b>5</b></span></td>





                            


                            <td>124<br><span><b>7</b></span></td>





                            


                            <td>578<br><span><b>0</b></span></td>





                            


                            <td>239<br><span><b>4</b></span></td>





                            


                            <td>258<br><span><b>5</b></span></td>





                            


                            <td>246<br><span><b>2</b></span></td>





                            


                            <td>199<br><span><b>9</b></span></td>





                            


                            <td>489<br><span><b>1</b></span></td>





                            


                            <td>367<br><span><b>6</b></span></td>





                            


                            <td>256<br><span><b>3</b></span></td>





                            


                            <td>890<br><span><b>7</b></span></td>





                            


                            <td>245<br><span><b>1</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">11-05-2020<br></td>

                            


                            <td>138<br><span><b>2</b></span></td>





                            


                            <td>167<br><span><b>4</b></span></td>





                            


                            <td>330<br><span><b>6</b></span></td>





                            


                            <td>500<br><span><b>5</b></span></td>





                            


                            <td>788<br><span><b>3</b></span></td>





                            


                            <td>260<br><span><b>8</b></span></td>





                            


                            <td>136<br><span><b>0</b></span></td>





                            


                            <td>100<br><span><b>1</b></span></td>





                            


                            <td>467<br><span><b>7</b></span></td>





                            


                            <td>134<br><span><b>8</b></span></td>





                            


                            <td>147<br><span><b>2</b></span></td>





                            


                            <td>245<br><span><b>1</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">12-05-2020<br></td>

                            


                            <td>236<br><span><b>1</b></span></td>





                            


                            <td>245<br><span><b>1</b></span></td>





                            


                            <td>130<br><span><b>4</b></span></td>





                            


                            <td>180<br><span><b>9</b></span></td>





                            


                            <td>157<br><span><b>3</b></span></td>





                            


                            <td>170<br><span><b>8</b></span></td>





                            


                            <td>500<br><span><b>5</b></span></td>





                            


                            <td>260<br><span><b>8</b></span></td>





                            


                            <td>247<br><span><b>3</b></span></td>





                            


                            <td>269<br><span><b>7</b></span></td>





                            


                            <td>118<br><span><b>0</b></span></td>





                            


                            <td>267<br><span><b>5</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">13-05-2020<br></td>

                            


                            <td>134<br><span><b>8</b></span></td>





                            


                            <td>330<br><span><b>6</b></span></td>





                            


                            <td>110<br><span><b>2</b></span></td>





                            


                            <td>699<br><span><b>4</b></span></td>





                            


                            <td>200<br><span><b>2</b></span></td>





                            


                            <td>157<br><span><b>3</b></span></td>





                            


                            <td>230<br><span><b>5</b></span></td>





                            


                            <td>126<br><span><b>9</b></span></td>





                            


                            <td>680<br><span><b>4</b></span></td>





                            


                            <td>190<br><span><b>0</b></span></td>





                            


                            <td>300<br><span><b>3</b></span></td>





                            


                            <td>169<br><span><b>6</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">14-05-2020<br></td>

                            


                            <td>258<br><span><b>5</b></span></td>





                            


                            <td>127<br><span><b>0</b></span></td>





                            


                            <td>345<br><span><b>2</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            


                            <td>120<br><span><b>3</b></span></td>





                            


                            <td>245<br><span><b>1</b></span></td>





                            


                            <td>155<br><span><b>1</b></span></td>





                            


                            <td>259<br><span><b>6</b></span></td>





                            


                            <td>136<br><span><b>0</b></span></td>





                            


                            <td>135<br><span><b>9</b></span></td>





                            


                            <td>788<br><span><b>3</b></span></td>





                            


                            <td>230<br><span><b>5</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">15-05-2020<br></td>

                            


                            <td>450<br><span><b>9</b></span></td>





                            


                            <td>113<br><span><b>5</b></span></td>





                            


                            <td>155<br><span><b>1</b></span></td>





                            


                            <td>129<br><span><b>2</b></span></td>





                            


                            <td>122<br><span><b>5</b></span></td>





                            


                            <td>699<br><span><b>4</b></span></td>





                            


                            <td>178<br><span><b>6</b></span></td>





                            


                            <td>589<br><span><b>2</b></span></td>





                            


                            <td>120<br><span><b>3</b></span></td>





                            


                            <td>800<br><span><b>8</b></span></td>





                            


                            <td>360<br><span><b>9</b></span></td>





                            


                            <td>480<br><span><b>2</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">16-05-2020<br></td>

                            


                            <td>560<br><span><b>1</b></span></td>





                            


                            <td>167<br><span><b>4</b></span></td>





                            


                            <td>144<br><span><b>9</b></span></td>





                            


                            <td>340<br><span><b>7</b></span></td>





                            


                            <td>190<br><span><b>0</b></span></td>





                            


                            <td>114<br><span><b>6</b></span></td>





                            


                            <td>589<br><span><b>2</b></span></td>





                            


                            <td>600<br><span><b>6</b></span></td>





                            


                            <td>126<br><span><b>9</b></span></td>





                            


                            <td>348<br><span><b>5</b></span></td>





                            


                            <td>236<br><span><b>1</b></span></td>





                            


                            <td>890<br><span><b>7</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">17-05-2020<br></td>

                            


                            <td>450<br><span><b>9</b></span></td>





                            


                            <td>789<br><span><b>4</b></span></td>





                            


                            <td>150<br><span><b>6</b></span></td>





                            


                            <td>578<br><span><b>0</b></span></td>





                            


                            <td>128<br><span><b>1</b></span></td>





                            


                            <td>134<br><span><b>8</b></span></td>





                            


                            <td>113<br><span><b>5</b></span></td>





                            


                            <td>259<br><span><b>6</b></span></td>





                            


                            <td>359<br><span><b>7</b></span></td>





                            


                            <td>127<br><span><b>0</b></span></td>





                            


                            <td>590<br><span><b>4</b></span></td>





                            


                            <td>245<br><span><b>1</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">18-05-2020<br></td>

                            


                            <td>790<br><span><b>6</b></span></td>





                            


                            <td>570<br><span><b>2</b></span></td>





                            


                            <td>250<br><span><b>7</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            


                            <td>550<br><span><b>0</b></span></td>





                            


                            <td>180<br><span><b>9</b></span></td>





                            


                            <td>799<br><span><b>5</b></span></td>





                            


                            <td>120<br><span><b>3</b></span></td>





                            


                            <td>480<br><span><b>2</b></span></td>





                            


                            <td>134<br><span><b>8</b></span></td>





                            


                            <td>100<br><span><b>1</b></span></td>





                            


                            <td>124<br><span><b>7</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">19-05-2020<br></td>

                            


                            <td>268<br><span><b>6</b></span></td>





                            


                            <td>139<br><span><b>3</b></span></td>





                            


                            <td>236<br><span><b>1</b></span></td>





                            


                            <td>160<br><span><b>7</b></span></td>





                            


                            <td>110<br><span><b>2</b></span></td>





                            


                            <td>170<br><span><b>8</b></span></td>





                            


                            <td>260<br><span><b>8</b></span></td>





                            


                            <td>130<br><span><b>4</b></span></td>





                            


                            <td>123<br><span><b>6</b></span></td>





                            


                            <td>450<br><span><b>9</b></span></td>





                            


                            <td>155<br><span><b>1</b></span></td>





                            


                            <td>120<br><span><b>3</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">20-05-2020<br></td>

                            


                            <td>159<br><span><b>5</b></span></td>





                            


                            <td>170<br><span><b>8</b></span></td>





                            


                            <td>123<br><span><b>6</b></span></td>





                            


                            <td>660<br><span><b>2</b></span></td>





                            


                            <td>179<br><span><b>7</b></span></td>





                            


                            <td>334<br><span><b>0</b></span></td>





                            


                            <td>140<br><span><b>5</b></span></td>





                            


                            <td>300<br><span><b>3</b></span></td>





                            


                            <td>167<br><span><b>4</b></span></td>





                            


                            <td>588<br><span><b>1</b></span></td>





                            


                            <td>128<br><span><b>1</b></span></td>





                            


                            <td>190<br><span><b>0</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">21-05-2020<br></td>

                            


                            <td>550<br><span><b>0</b></span></td>





                            


                            <td>125<br><span><b>8</b></span></td>





                            


                            <td>788<br><span><b>3</b></span></td>





                            


                            <td>560<br><span><b>1</b></span></td>





                            


                            <td>149<br><span><b>4</b></span></td>





                            


                            <td>124<br><span><b>7</b></span></td>





                            


                            <td>140<br><span><b>5</b></span></td>





                            


                            <td>370<br><span><b>7</b></span></td>





                            


                            <td>129<br><span><b>2</b></span></td>





                            


                            <td>457<br><span><b>6</b></span></td>





                            


                            <td>578<br><span><b>0</b></span></td>





                            


                            <td>236<br><span><b>1</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">22-05-2020<br></td>

                            


                            <td>588<br><span><b>1</b></span></td>





                            


                            <td>135<br><span><b>9</b></span></td>





                            


                            <td>345<br><span><b>2</b></span></td>





                            


                            <td>110<br><span><b>2</b></span></td>





                            


                            <td>120<br><span><b>3</b></span></td>





                            


                            <td>770<br><span><b>4</b></span></td>





                            


                            <td>230<br><span><b>5</b></span></td>





                            


                            <td>500<br><span><b>5</b></span></td>





                            


                            <td>146<br><span><b>1</b></span></td>





                            


                            <td>890<br><span><b>7</b></span></td>





                            


                            <td>269<br><span><b>7</b></span></td>





                            


                            <td>150<br><span><b>6</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">23-05-2020<br></td>

                            


                            <td>123<br><span><b>6</b></span></td>





                            


                            <td>230<br><span><b>5</b></span></td>





                            


                            <td>155<br><span><b>1</b></span></td>





                            


                            <td>677<br><span><b>0</b></span></td>





                            


                            <td>123<br><span><b>6</b></span></td>





                            


                            <td>133<br><span><b>7</b></span></td>





                            


                            <td>138<br><span><b>2</b></span></td>





                            


                            <td>128<br><span><b>1</b></span></td>





                            


                            <td>256<br><span><b>3</b></span></td>





                            


                            <td>122<br><span><b>5</b></span></td>





                            


                            <td>770<br><span><b>4</b></span></td>





                            


                            <td>890<br><span><b>7</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">24-05-2020<br></td>

                            


                            <td>780<br><span><b>5</b></span></td>





                            


                            <td>124<br><span><b>7</b></span></td>





                            


                            <td>100<br><span><b>1</b></span></td>





                            


                            <td>336<br><span><b>2</b></span></td>





                            


                            <td>166<br><span><b>3</b></span></td>





                            


                            <td>489<br><span><b>1</b></span></td>





                            


                            <td>158<br><span><b>4</b></span></td>





                            


                            <td>568<br><span><b>9</b></span></td>





                            


                            <td>246<br><span><b>2</b></span></td>





                            


                            <td>599<br><span><b>3</b></span></td>





                            


                            <td>135<br><span><b>9</b></span></td>





                            


                            <td>130<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">25-05-2020<br></td>

                            


                            <td>359<br><span><b>7</b></span></td>





                            


                            <td>100<br><span><b>1</b></span></td>





                            


                            <td>789<br><span><b>4</b></span></td>





                            


                            <td>225<br><span><b>9</b></span></td>





                            


                            <td>135<br><span><b>9</b></span></td>





                            


                            <td>156<br><span><b>2</b></span></td>





                            


                            <td>157<br><span><b>3</b></span></td>





                            


                            <td>230<br><span><b>5</b></span></td>





                            


                            <td>379<br><span><b>9</b></span></td>





                            


                            <td>269<br><span><b>7</b></span></td>





                            


                            <td>447<br><span><b>5</b></span></td>





                            


                            <td>128<br><span><b>1</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">26-05-2020<br></td>

                            


                            <td>240<br><span><b>6</b></span></td>





                            


                            <td>557<br><span><b>7</b></span></td>





                            


                            <td>110<br><span><b>2</b></span></td>





                            


                            <td>230<br><span><b>5</b></span></td>





                            


                            <td>129<br><span><b>2</b></span></td>





                            


                            <td>378<br><span><b>8</b></span></td>





                            


                            <td>788<br><span><b>3</b></span></td>





                            


                            <td>169<br><span><b>6</b></span></td>





                            


                            <td>155<br><span><b>1</b></span></td>





                            


                            <td>588<br><span><b>1</b></span></td>





                            


                            <td>145<br><span><b>0</b></span></td>





                            


                            <td>379<br><span><b>9</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">27-05-2020<br></td>

                            


                            <td>456<br><span><b>5</b></span></td>





                            


                            <td>330<br><span><b>6</b></span></td>





                            


                            <td>125<br><span><b>8</b></span></td>





                            


                            <td>890<br><span><b>7</b></span></td>





                            


                            <td>122<br><span><b>5</b></span></td>





                            


                            <td>550<br><span><b>0</b></span></td>





                            


                            <td>478<br><span><b>9</b></span></td>





                            


                            <td>560<br><span><b>1</b></span></td>





                            


                            <td>257<br><span><b>4</b></span></td>





                            


                            <td>220<br><span><b>4</b></span></td>





                            


                            <td>234<br><span><b>9</b></span></td>





                            


                            <td>148<br><span><b>3</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">28-05-2020<br></td>

                            


                            <td>129<br><span><b>2</b></span></td>





                            


                            <td>370<br><span><b>0</b></span></td>





                            


                            <td>388<br><span><b>9</b></span></td>





                            


                            <td>340<br><span><b>7</b></span></td>





                            


                            <td>259<br><span><b>6</b></span></td>





                            


                            <td>690<br><span><b>5</b></span></td>





                            


                            <td>128<br><span><b>1</b></span></td>





                            


                            <td>347<br><span><b>4</b></span></td>





                            


                            <td>890<br><span><b>7</b></span></td>





                            


                            <td>567<br><span><b>8</b></span></td>





                            


                            <td>300<br><span><b>3</b></span></td>





                            


                            <td>237<br><span><b>2</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">29-05-2020<br></td>

                            


                            <td>234<br><span><b>9</b></span></td>





                            


                            <td>667<br><span><b>9</b></span></td>





                            


                            <td>899<br><span><b>6</b></span></td>





                            


                            <td>460<br><span><b>0</b></span></td>





                            


                            <td>189<br><span><b>8</b></span></td>





                            


                            <td>158<br><span><b>4</b></span></td>





                            


                            <td>258<br><span><b>5</b></span></td>





                            


                            <td>467<br><span><b>7</b></span></td>





                            


                            <td>347<br><span><b>4</b></span></td>





                            


                            <td>145<br><span><b>0</b></span></td>





                            


                            <td>567<br><span><b>8</b></span></td>





                            


                            <td>100<br><span><b>1</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">30-05-2020<br></td>

                            


                            <td>113<br><span><b>5</b></span></td>





                            


                            <td>480<br><span><b>2</b></span></td>





                            


                            <td>377<br><span><b>7</b></span></td>





                            


                            <td>450<br><span><b>9</b></span></td>





                            


                            <td>170<br><span><b>8</b></span></td>





                            


                            <td>669<br><span><b>1</b></span></td>





                            


                            <td>578<br><span><b>0</b></span></td>





                            


                            <td>367<br><span><b>6</b></span></td>





                            


                            <td>336<br><span><b>2</b></span></td>





                            


                            <td>144<br><span><b>9</b></span></td>





                            


                            <td>456<br><span><b>5</b></span></td>





                            


                            <td>178<br><span><b>6</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">31-05-2020<br></td>

                            


                            <td>458<br><span><b>7</b></span></td>





                            


                            <td>360<br><span><b>9</b></span></td>





                            


                            <td>578<br><span><b>0</b></span></td>





                            


                            <td>789<br><span><b>4</b></span></td>





                            


                            <td>114<br><span><b>6</b></span></td>





                            


                            <td>158<br><span><b>4</b></span></td>





                            


                            <td>679<br><span><b>2</b></span></td>





                            


                            <td>357<br><span><b>5</b></span></td>





                            


                            <td>223<br><span><b>7</b></span></td>





                            


                            <td>259<br><span><b>6</b></span></td>





                            


                            <td>145<br><span><b>0</b></span></td>





                            


                            <td>567<br><span><b>8</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">01-06-2020<br></td>

                            


                            <td>689<br><span><b>3</b></span></td>





                            


                            <td>589<br><span><b>2</b></span></td>





                            


                            <td>260<br><span><b>8</b></span></td>





                            


                            <td>690<br><span><b>5</b></span></td>





                            


                            <td>234<br><span><b>9</b></span></td>





                            


                            <td>567<br><span><b>8</b></span></td>





                            


                            <td>339<br><span><b>5</b></span></td>





                            


                            <td>369<br><span><b>8</b></span></td>





                            


                            <td>138<br><span><b>2</b></span></td>





                            


                            <td>660<br><span><b>2</b></span></td>





                            


                            <td>450<br><span><b>9</b></span></td>





                            


                            <td>147<br><span><b>2</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">02-06-2020<br></td>

                            


                            <td>380<br><span><b>1</b></span></td>





                            


                            <td>348<br><span><b>5</b></span></td>





                            


                            <td>568<br><span><b>9</b></span></td>





                            


                            <td>136<br><span><b>0</b></span></td>





                            


                            <td>170<br><span><b>8</b></span></td>





                            


                            <td>139<br><span><b>3</b></span></td>





                            


                            <td>457<br><span><b>6</b></span></td>





                            


                            <td>678<br><span><b>1</b></span></td>





                            


                            <td>788<br><span><b>3</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            


                            <td>589<br><span><b>2</b></span></td>





                            


                            <td>115<br><span><b>7</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">03-06-2020<br></td>

                            


                            <td>890<br><span><b>7</b></span></td>





                            


                            <td>117<br><span><b>9</b></span></td>





                            


                            <td>245<br><span><b>1</b></span></td>





                            


                            <td>147<br><span><b>2</b></span></td>





                            


                            <td>238<br><span><b>3</b></span></td>





                            


                            <td>270<br><span><b>9</b></span></td>





                            


                            <td>259<br><span><b>6</b></span></td>





                            


                            <td>350<br><span><b>8</b></span></td>





                            


                            <td>230<br><span><b>5</b></span></td>





                            


                            <td>112<br><span><b>4</b></span></td>





                            


                            <td>120<br><span><b>3</b></span></td>





                            


                            <td>168<br><span><b>5</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">04-06-2020<br></td>

                            


                            <td>480<br><span><b>2</b></span></td>





                            


                            <td>880<br><span><b>6</b></span></td>





                            


                            <td>479<br><span><b>0</b></span></td>





                            


                            <td>138<br><span><b>2</b></span></td>





                            


                            <td>346<br><span><b>3</b></span></td>





                            


                            <td>178<br><span><b>6</b></span></td>





                            


                            <td>116<br><span><b>8</b></span></td>





                            


                            <td>599<br><span><b>3</b></span></td>





                            


                            <td>158<br><span><b>4</b></span></td>





                            


                            <td>189<br><span><b>8</b></span></td>





                            


                            <td>900<br><span><b>9</b></span></td>





                            


                            <td>166<br><span><b>3</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">05-06-2020<br></td>

                            


                            <td>279<br><span><b>8</b></span></td>





                            


                            <td>780<br><span><b>5</b></span></td>





                            


                            <td>557<br><span><b>7</b></span></td>





                            


                            <td>257<br><span><b>4</b></span></td>





                            


                            <td>180<br><span><b>9</b></span></td>





                            


                            <td>226<br><span><b>0</b></span></td>





                            


                            <td>467<br><span><b>7</b></span></td>





                            


                            <td>459<br><span><b>8</b></span></td>





                            


                            <td>990<br><span><b>9</b></span></td>





                            


                            <td>489<br><span><b>1</b></span></td>





                            


                            <td>569<br><span><b>0</b></span></td>





                            


                            <td>669<br><span><b>1</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">06-06-2020<br></td>

                            


                            <td>179<br><span><b>7</b></span></td>





                            


                            <td>127<br><span><b>0</b></span></td>





                            


                            <td>146<br><span><b>1</b></span></td>





                            


                            <td>780<br><span><b>5</b></span></td>





                            


                            <td>699<br><span><b>4</b></span></td>





                            


                            <td>677<br><span><b>0</b></span></td>





                            


                            <td>456<br><span><b>5</b></span></td>





                            


                            <td>135<br><span><b>9</b></span></td>





                            


                            <td>147<br><span><b>2</b></span></td>





                            


                            <td>369<br><span><b>8</b></span></td>





                            


                            <td>122<br><span><b>5</b></span></td>





                            


                            <td>890<br><span><b>7</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">07-06-2020<br></td>

                            


                            <td>679<br><span><b>2</b></span></td>





                            


                            <td>140<br><span><b>5</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            


                            <td>120<br><span><b>3</b></span></td>





                            


                            <td>239<br><span><b>4</b></span></td>





                            


                            <td>589<br><span><b>2</b></span></td>





                            


                            <td>146<br><span><b>1</b></span></td>





                            


                            <td>334<br><span><b>0</b></span></td>





                            


                            <td>467<br><span><b>7</b></span></td>





                            


                            <td>169<br><span><b>6</b></span></td>





                            


                            <td>115<br><span><b>7</b></span></td>





                            


                            <td>279<br><span><b>8</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">08-06-2020<br></td>

                            


                            <td>478<br><span><b>9</b></span></td>





                            


                            <td>250<br><span><b>7</b></span></td>





                            


                            <td>570<br><span><b>2</b></span></td>





                            


                            <td>670<br><span><b>3</b></span></td>





                            


                            <td>233<br><span><b>8</b></span></td>





                            


                            <td>467<br><span><b>7</b></span></td>





                            


                            <td>248<br><span><b>4</b></span></td>





                            


                            <td>568<br><span><b>9</b></span></td>





                            


                            <td>459<br><span><b>8</b></span></td>





                            


                            <td>236<br><span><b>1</b></span></td>





                            


                            <td>267<br><span><b>5</b></span></td>





                            


                            <td>257<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">09-06-2020<br></td>

                            


                            <td>589<br><span><b>2</b></span></td>





                            


                            <td>678<br><span><b>1</b></span></td>





                            


                            <td>459<br><span><b>8</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            


                            <td>779<br><span><b>3</b></span></td>





                            


                            <td>124<br><span><b>7</b></span></td>





                            


                            <td>570<br><span><b>2</b></span></td>





                            


                            <td>348<br><span><b>5</b></span></td>





                            


                            <td>469<br><span><b>9</b></span></td>





                            


                            <td>136<br><span><b>0</b></span></td>





                            


                            <td>456<br><span><b>5</b></span></td>





                            


                            <td>399<br><span><b>1</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">10-06-2020<br></td>

                            


                            <td>557<br><span><b>7</b></span></td>





                            


                            <td>170<br><span><b>8</b></span></td>





                            


                            <td>127<br><span><b>0</b></span></td>





                            


                            <td>335<br><span><b>1</b></span></td>





                            


                            <td>257<br><span><b>4</b></span></td>





                            


                            <td>140<br><span><b>5</b></span></td>





                            


                            <td>679<br><span><b>2</b></span></td>





                            


                            <td>113<br><span><b>5</b></span></td>





                            


                            <td>135<br><span><b>9</b></span></td>





                            


                            <td>238<br><span><b>3</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            


                            <td>690<br><span><b>5</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">11-06-2020<br></td>

                            


                            <td>368<br><span><b>7</b></span></td>





                            


                            <td>456<br><span><b>5</b></span></td>





                            


                            <td>569<br><span><b>0</b></span></td>





                            


                            <td>233<br><span><b>8</b></span></td>





                            


                            <td>379<br><span><b>9</b></span></td>





                            


                            <td>480<br><span><b>2</b></span></td>





                            


                            <td>356<br><span><b>4</b></span></td>





                            


                            <td>270<br><span><b>9</b></span></td>





                            


                            <td>150<br><span><b>6</b></span></td>





                            


                            <td>159<br><span><b>5</b></span></td>





                            


                            <td>390<br><span><b>2</b></span></td>





                            


                            <td>157<br><span><b>3</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">12-06-2020<br></td>

                            


                            <td>348<br><span><b>5</b></span></td>





                            


                            <td>120<br><span><b>3</b></span></td>





                            


                            <td>389<br><span><b>0</b></span></td>





                            


                            <td>350<br><span><b>8</b></span></td>





                            


                            <td>233<br><span><b>8</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            


                            <td>790<br><span><b>6</b></span></td>





                            


                            <td>123<br><span><b>6</b></span></td>





                            


                            <td>189<br><span><b>8</b></span></td>





                            


                            <td>148<br><span><b>3</b></span></td>





                            


                            <td>135<br><span><b>9</b></span></td>





                            


                            <td>490<br><span><b>3</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">13-06-2020<br></td>

                            


                            <td>789<br><span><b>4</b></span></td>





                            


                            <td>699<br><span><b>4</b></span></td>





                            


                            <td>179<br><span><b>7</b></span></td>





                            


                            <td>138<br><span><b>2</b></span></td>





                            


                            <td>678<br><span><b>1</b></span></td>





                            


                            <td>190<br><span><b>0</b></span></td>





                            


                            <td>367<br><span><b>6</b></span></td>





                            


                            <td>260<br><span><b>8</b></span></td>





                            


                            <td>157<br><span><b>3</b></span></td>





                            


                            <td>159<br><span><b>5</b></span></td>





                            


                            <td>670<br><span><b>3</b></span></td>





                            


                            <td>360<br><span><b>9</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">14-06-2020<br></td>

                            


                            <td>790<br><span><b>6</b></span></td>





                            


                            <td>458<br><span><b>7</b></span></td>





                            


                            <td>139<br><span><b>3</b></span></td>





                            


                            <td>500<br><span><b>5</b></span></td>





                            


                            <td>347<br><span><b>4</b></span></td>





                            


                            <td>350<br><span><b>8</b></span></td>





                            


                            <td>469<br><span><b>9</b></span></td>





                            


                            <td>234<br><span><b>9</b></span></td>





                            


                            <td>670<br><span><b>3</b></span></td>





                            


                            <td>369<br><span><b>8</b></span></td>





                            


                            <td>348<br><span><b>5</b></span></td>





                            


                            <td>250<br><span><b>7</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">15-06-2020<br></td>

                            


                            <td>390<br><span><b>2</b></span></td>





                            


                            <td>445<br><span><b>3</b></span></td>





                            


                            <td>568<br><span><b>9</b></span></td>





                            


                            <td>239<br><span><b>4</b></span></td>





                            


                            <td>489<br><span><b>1</b></span></td>





                            


                            <td>125<br><span><b>8</b></span></td>





                            


                            <td>136<br><span><b>0</b></span></td>





                            


                            <td>118<br><span><b>0</b></span></td>





                            


                            <td>259<br><span><b>6</b></span></td>





                            


                            <td>223<br><span><b>7</b></span></td>





                            


                            <td>360<br><span><b>9</b></span></td>





                            


                            <td>567<br><span><b>8</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">16-06-2020<br></td>

                            


                            <td>789<br><span><b>4</b></span></td>





                            


                            <td>700<br><span><b>7</b></span></td>





                            


                            <td>247<br><span><b>3</b></span></td>





                            


                            <td>388<br><span><b>9</b></span></td>





                            


                            <td>479<br><span><b>0</b></span></td>





                            


                            <td>559<br><span><b>9</b></span></td>





                            


                            <td>358<br><span><b>6</b></span></td>





                            


                            <td>256<br><span><b>3</b></span></td>





                            


                            <td>660<br><span><b>2</b></span></td>





                            


                            <td>800<br><span><b>8</b></span></td>





                            


                            <td>137<br><span><b>1</b></span></td>





                            


                            <td>478<br><span><b>9</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">17-06-2020<br></td>

                            


                            <td>369<br><span><b>8</b></span></td>





                            


                            <td>120<br><span><b>3</b></span></td>





                            


                            <td>680<br><span><b>4</b></span></td>





                            


                            <td>348<br><span><b>5</b></span></td>





                            


                            <td>127<br><span><b>0</b></span></td>





                            


                            <td>345<br><span><b>2</b></span></td>





                            


                            <td>569<br><span><b>0</b></span></td>





                            


                            <td>149<br><span><b>4</b></span></td>





                            


                            <td>570<br><span><b>2</b></span></td>





                            


                            <td>178<br><span><b>6</b></span></td>





                            


                            <td>470<br><span><b>1</b></span></td>





                            


                            <td>179<br><span><b>7</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">18-06-2020<br></td>

                            


                            <td>238<br><span><b>3</b></span></td>





                            


                            <td>368<br><span><b>7</b></span></td>





                            


                            <td>100<br><span><b>1</b></span></td>





                            


                            <td>789<br><span><b>4</b></span></td>





                            


                            <td>679<br><span><b>2</b></span></td>





                            


                            <td>660<br><span><b>2</b></span></td>





                            


                            <td>348<br><span><b>5</b></span></td>





                            


                            <td>479<br><span><b>0</b></span></td>





                            


                            <td>234<br><span><b>9</b></span></td>





                            


                            <td>457<br><span><b>6</b></span></td>





                            


                            <td>160<br><span><b>7</b></span></td>





                            


                            <td>490<br><span><b>3</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">19-06-2020<br></td>

                            


                            <td>290<br><span><b>1</b></span></td>





                            


                            <td>145<br><span><b>0</b></span></td>





                            


                            <td>367<br><span><b>8</b></span></td>





                            


                            <td>458<br><span><b>7</b></span></td>





                            


                            <td>157<br><span><b>3</b></span></td>





                            


                            <td>240<br><span><b>6</b></span></td>





                            


                            <td>245<br><span><b>1</b></span></td>





                            


                            <td>500<br><span><b>5</b></span></td>





                            


                            <td>138<br><span><b>2</b></span></td>





                            


                            <td>346<br><span><b>3</b></span></td>





                            


                            <td>479<br><span><b>0</b></span></td>





                            


                            <td>110<br><span><b>2</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">20-06-2020<br></td>

                            


                            <td>770<br><span><b>4</b></span></td>





                            


                            <td>358<br><span><b>6</b></span></td>





                            


                            <td>470<br><span><b>1</b></span></td>





                            


                            <td>388<br><span><b>9</b></span></td>





                            


                            <td>788<br><span><b>3</b></span></td>





                            


                            <td>189<br><span><b>8</b></span></td>





                            


                            <td>789<br><span><b>4</b></span></td>





                            


                            <td>136<br><span><b>0</b></span></td>





                            


                            <td>236<br><span><b>1</b></span></td>





                            


                            <td>349<br><span><b>6</b></span></td>





                            


                            <td>170<br><span><b>8</b></span></td>





                            


                            <td>238<br><span><b>3</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">21-06-2020<br></td>

                            


                            <td>140<br><span><b>5</b></span></td>





                            


                            <td>136<br><span><b>0</b></span></td>





                            


                            <td>345<br><span><b>2</b></span></td>





                            


                            <td>567<br><span><b>8</b></span></td>





                            


                            <td>334<br><span><b>0</b></span></td>





                            


                            <td>234<br><span><b>9</b></span></td>





                            


                            <td>290<br><span><b>1</b></span></td>





                            


                            <td>135<br><span><b>9</b></span></td>





                            


                            <td>348<br><span><b>5</b></span></td>





                            


                            <td>599<br><span><b>3</b></span></td>





                            


                            <td>137<br><span><b>1</b></span></td>





                            


                            <td>690<br><span><b>5</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">22-06-2020<br></td>

                            


                            <td>279<br><span><b>8</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            


                            <td>478<br><span><b>9</b></span></td>





                            


                            <td>256<br><span><b>3</b></span></td>





                            


                            <td>238<br><span><b>3</b></span></td>





                            


                            <td>380<br><span><b>1</b></span></td>





                            


                            <td>567<br><span><b>8</b></span></td>





                            


                            <td>679<br><span><b>2</b></span></td>





                            


                            <td>135<br><span><b>9</b></span></td>





                            


                            <td>668<br><span><b>0</b></span></td>





                            


                            <td>257<br><span><b>4</b></span></td>





                            


                            <td>789<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">23-06-2020<br></td>

                            


                            <td>159<br><span><b>5</b></span></td>





                            


                            <td>470<br><span><b>1</b></span></td>





                            


                            <td>135<br><span><b>9</b></span></td>





                            


                            <td>458<br><span><b>7</b></span></td>





                            


                            <td>134<br><span><b>8</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            


                            <td>278<br><span><b>7</b></span></td>





                            


                            <td>449<br><span><b>7</b></span></td>





                            


                            <td>469<br><span><b>9</b></span></td>





                            


                            <td>120<br><span><b>3</b></span></td>





                            


                            <td>345<br><span><b>2</b></span></td>





                            


                            <td>350<br><span><b>8</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">24-06-2020<br></td>

                            


                            <td>137<br><span><b>1</b></span></td>





                            


                            <td>450<br><span><b>9</b></span></td>





                            


                            <td>456<br><span><b>5</b></span></td>





                            


                            <td>160<br><span><b>7</b></span></td>





                            


                            <td>580<br><span><b>3</b></span></td>





                            


                            <td>889<br><span><b>5</b></span></td>





                            


                            <td>567<br><span><b>8</b></span></td>





                            


                            <td>239<br><span><b>4</b></span></td>





                            


                            <td>460<br><span><b>0</b></span></td>





                            


                            <td>139<br><span><b>3</b></span></td>





                            


                            <td>170<br><span><b>8</b></span></td>





                            


                            <td>457<br><span><b>6</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">25-06-2020<br></td>

                            


                            <td>579<br><span><b>1</b></span></td>





                            


                            <td>300<br><span><b>3</b></span></td>





                            


                            <td>680<br><span><b>4</b></span></td>





                            


                            <td>566<br><span><b>7</b></span></td>





                            


                            <td>478<br><span><b>9</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            


                            <td>134<br><span><b>8</b></span></td>





                            


                            <td>234<br><span><b>9</b></span></td>





                            


                            <td>480<br><span><b>2</b></span></td>





                            


                            <td>220<br><span><b>4</b></span></td>





                            


                            <td>122<br><span><b>5</b></span></td>





                            


                            <td>467<br><span><b>7</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">26-06-2020<br></td>

                            


                            <td>567<br><span><b>8</b></span></td>





                            


                            <td>770<br><span><b>4</b></span></td>





                            


                            <td>225<br><span><b>9</b></span></td>





                            


                            <td>555<br><span><b>5</b></span></td>





                            


                            <td>457<br><span><b>6</b></span></td>





                            


                            <td>260<br><span><b>8</b></span></td>





                            


                            <td>678<br><span><b>1</b></span></td>





                            


                            <td>234<br><span><b>9</b></span></td>





                            


                            <td>599<br><span><b>3</b></span></td>





                            


                            <td>690<br><span><b>5</b></span></td>





                            


                            <td>400<br><span><b>4</b></span></td>





                            


                            <td>345<br><span><b>2</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">27-06-2020<br></td>

                            


                            <td>150<br><span><b>6</b></span></td>





                            


                            <td>789<br><span><b>4</b></span></td>





                            


                            <td>255<br><span><b>2</b></span></td>





                            


                            <td>140<br><span><b>5</b></span></td>





                            


                            <td>890<br><span><b>7</b></span></td>





                            


                            <td>667<br><span><b>9</b></span></td>





                            


                            <td>124<br><span><b>7</b></span></td>





                            


                            <td>580<br><span><b>3</b></span></td>





                            


                            <td>170<br><span><b>8</b></span></td>





                            


                            <td>800<br><span><b>8</b></span></td>





                            


                            <td>146<br><span><b>1</b></span></td>





                            


                            <td>149<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">28-06-2020<br></td>

                            


                            <td>257<br><span><b>4</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            


                            <td>123<br><span><b>6</b></span></td>





                            


                            <td>458<br><span><b>7</b></span></td>





                            


                            <td>238<br><span><b>3</b></span></td>





                            


                            <td>267<br><span><b>5</b></span></td>





                            


                            <td>570<br><span><b>2</b></span></td>





                            


                            <td>790<br><span><b>6</b></span></td>





                            


                            <td>124<br><span><b>7</b></span></td>





                            


                            <td>455<br><span><b>4</b></span></td>





                            


                            <td>159<br><span><b>5</b></span></td>





                            


                            <td>259<br><span><b>6</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">29-06-2020<br></td>

                            


                            <td>368<br><span><b>7</b></span></td>





                            


                            <td>150<br><span><b>6</b></span></td>





                            


                            <td>677<br><span><b>0</b></span></td>





                            


                            <td>780<br><span><b>5</b></span></td>





                            


                            <td>239<br><span><b>4</b></span></td>





                            


                            <td>400<br><span><b>4</b></span></td>





                            


                            <td>127<br><span><b>0</b></span></td>





                            


                            <td>440<br><span><b>8</b></span></td>





                            


                            <td>247<br><span><b>3</b></span></td>





                            


                            <td>147<br><span><b>2</b></span></td>





                            


                            <td>200<br><span><b>2</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">30-06-2020<br></td>

                            


                            <td>235<br><span><b>0</b></span></td>





                            


                            <td>124<br><span><b>7</b></span></td>





                            


                            <td>490<br><span><b>3</b></span></td>





                            


                            <td>290<br><span><b>1</b></span></td>





                            


                            <td>458<br><span><b>7</b></span></td>





                            


                            <td>779<br><span><b>3</b></span></td>





                            


                            <td>135<br><span><b>9</b></span></td>





                            


                            <td>390<br><span><b>2</b></span></td>





                            


                            <td>470<br><span><b>1</b></span></td>





                            


                            <td>366<br><span><b>5</b></span></td>





                            


                            <td>789<br><span><b>4</b></span></td>





                            


                            <td>130<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">01-07-2020<br></td>

                            


                            <td>560<br><span><b>1</b></span></td>





                            


                            <td>238<br><span><b>3</b></span></td>





                            


                            <td>333<br><span><b>9</b></span></td>





                            


                            <td>569<br><span><b>0</b></span></td>





                            


                            <td>126<br><span><b>9</b></span></td>





                            


                            <td>356<br><span><b>4</b></span></td>





                            


                            <td>369<br><span><b>8</b></span></td>





                            


                            <td>134<br><span><b>8</b></span></td>





                            


                            <td>679<br><span><b>2</b></span></td>





                            


                            <td>236<br><span><b>1</b></span></td>





                            


                            <td>120<br><span><b>3</b></span></td>





                            


                            <td>469<br><span><b>9</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">02-07-2020<br></td>

                            


                            <td>116<br><span><b>8</b></span></td>





                            


                            <td>590<br><span><b>4</b></span></td>





                            


                            <td>345<br><span><b>2</b></span></td>





                            


                            <td>578<br><span><b>0</b></span></td>





                            


                            <td>120<br><span><b>3</b></span></td>





                            


                            <td>136<br><span><b>0</b></span></td>





                            


                            <td>267<br><span><b>5</b></span></td>





                            


                            <td>225<br><span><b>9</b></span></td>





                            


                            <td>479<br><span><b>0</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            


                            <td>125<br><span><b>8</b></span></td>





                            


                            <td>579<br><span><b>1</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">03-07-2020<br></td>

                            


                            <td>236<br><span><b>1</b></span></td>





                            


                            <td>130<br><span><b>4</b></span></td>





                            


                            <td>578<br><span><b>0</b></span></td>





                            


                            <td>336<br><span><b>2</b></span></td>





                            


                            <td>567<br><span><b>8</b></span></td>





                            


                            <td>229<br><span><b>3</b></span></td>





                            


                            <td>670<br><span><b>3</b></span></td>





                            


                            <td>348<br><span><b>5</b></span></td>





                            


                            <td>447<br><span><b>5</b></span></td>





                            


                            <td>278<br><span><b>7</b></span></td>





                            


                            <td>579<br><span><b>1</b></span></td>





                            


                            <td>157<br><span><b>3</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">04-07-2020<br></td>

                            


                            <td>790<br><span><b>6</b></span></td>





                            


                            <td>160<br><span><b>7</b></span></td>





                            


                            <td>234<br><span><b>9</b></span></td>





                            


                            <td>267<br><span><b>5</b></span></td>





                            


                            <td>380<br><span><b>1</b></span></td>





                            


                            <td>678<br><span><b>1</b></span></td>





                            


                            <td>355<br><span><b>3</b></span></td>





                            


                            <td>450<br><span><b>9</b></span></td>





                            


                            <td>660<br><span><b>2</b></span></td>





                            


                            <td>112<br><span><b>4</b></span></td>





                            


                            <td>135<br><span><b>9</b></span></td>





                            


                            <td>680<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">05-07-2020<br></td>

                            


                            <td>369<br><span><b>8</b></span></td>





                            


                            <td>229<br><span><b>3</b></span></td>





                            


                            <td>488<br><span><b>0</b></span></td>





                            


                            <td>340<br><span><b>7</b></span></td>





                            


                            <td>180<br><span><b>9</b></span></td>





                            


                            <td>115<br><span><b>7</b></span></td>





                            


                            <td>590<br><span><b>4</b></span></td>





                            


                            <td>270<br><span><b>9</b></span></td>





                            


                            <td>355<br><span><b>3</b></span></td>





                            


                            <td>236<br><span><b>1</b></span></td>





                            


                            <td>124<br><span><b>7</b></span></td>





                            


                            <td>334<br><span><b>0</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">06-07-2020<br></td>

                            


                            <td>247<br><span><b>3</b></span></td>





                            


                            <td>116<br><span><b>8</b></span></td>





                            


                            <td>146<br><span><b>1</b></span></td>





                            


                            <td>190<br><span><b>0</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            


                            <td>678<br><span><b>1</b></span></td>





                            


                            <td>789<br><span><b>4</b></span></td>





                            


                            <td>230<br><span><b>5</b></span></td>





                            


                            <td>345<br><span><b>2</b></span></td>





                            


                            <td>359<br><span><b>7</b></span></td>





                            


                            <td>258<br><span><b>5</b></span></td>





                            


                            <td>335<br><span><b>1</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">07-07-2020<br></td>

                            


                            <td>458<br><span><b>7</b></span></td>





                            


                            <td>347<br><span><b>4</b></span></td>





                            


                            <td>578<br><span><b>0</b></span></td>





                            


                            <td>369<br><span><b>8</b></span></td>





                            


                            <td>356<br><span><b>4</b></span></td>





                            


                            <td>499<br><span><b>2</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            


                            <td>189<br><span><b>8</b></span></td>





                            


                            <td>457<br><span><b>6</b></span></td>





                            


                            <td>250<br><span><b>7</b></span></td>





                            


                            <td>780<br><span><b>5</b></span></td>





                            


                            <td>147<br><span><b>2</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">08-07-2020<br></td>

                            


                            <td>157<br><span><b>3</b></span></td>





                            


                            <td>347<br><span><b>4</b></span></td>





                            


                            <td>369<br><span><b>8</b></span></td>





                            


                            <td>457<br><span><b>6</b></span></td>





                            


                            <td>125<br><span><b>8</b></span></td>





                            


                            <td>579<br><span><b>1</b></span></td>





                            


                            <td>470<br><span><b>1</b></span></td>





                            


                            <td>134<br><span><b>8</b></span></td>





                            


                            <td>140<br><span><b>5</b></span></td>





                            


                            <td>490<br><span><b>3</b></span></td>





                            


                            <td>778<br><span><b>2</b></span></td>





                            


                            <td>190<br><span><b>0</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">09-07-2020<br></td>

                            


                            <td>367<br><span><b>6</b></span></td>





                            


                            <td>350<br><span><b>8</b></span></td>





                            


                            <td>249<br><span><b>5</b></span></td>





                            


                            <td>799<br><span><b>5</b></span></td>





                            


                            <td>150<br><span><b>6</b></span></td>





                            


                            <td>145<br><span><b>0</b></span></td>





                            


                            <td>480<br><span><b>2</b></span></td>





                            


                            <td>460<br><span><b>0</b></span></td>





                            


                            <td>580<br><span><b>3</b></span></td>





                            


                            <td>369<br><span><b>8</b></span></td>





                            


                            <td>135<br><span><b>9</b></span></td>





                            


                            <td>589<br><span><b>2</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">10-07-2020<br></td>

                            


                            <td>450<br><span><b>9</b></span></td>





                            


                            <td>147<br><span><b>2</b></span></td>





                            


                            <td>479<br><span><b>0</b></span></td>





                            


                            <td>127<br><span><b>0</b></span></td>





                            


                            <td>679<br><span><b>2</b></span></td>





                            


                            <td>890<br><span><b>7</b></span></td>





                            


                            <td>590<br><span><b>4</b></span></td>





                            


                            <td>280<br><span><b>0</b></span></td>





                            


                            <td>146<br><span><b>1</b></span></td>





                            


                            <td>358<br><span><b>6</b></span></td>





                            


                            <td>335<br><span><b>1</b></span></td>





                            


                            <td>790<br><span><b>6</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">11-07-2020<br></td>

                            


                            <td>128<br><span><b>1</b></span></td>





                            


                            <td>135<br><span><b>9</b></span></td>





                            


                            <td>370<br><span><b>0</b></span></td>





                            


                            <td>268<br><span><b>6</b></span></td>





                            


                            <td>178<br><span><b>6</b></span></td>





                            


                            <td>239<br><span><b>4</b></span></td>





                            


                            <td>368<br><span><b>7</b></span></td>





                            


                            <td>223<br><span><b>7</b></span></td>





                            


                            <td>256<br><span><b>3</b></span></td>





                            


                            <td>112<br><span><b>4</b></span></td>





                            


                            <td>136<br><span><b>0</b></span></td>





                            


                            <td>155<br><span><b>1</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">12-07-2020<br></td>

                            


                            <td>177<br><span><b>5</b></span></td>





                            


                            <td>700<br><span><b>7</b></span></td>





                            


                            <td>488<br><span><b>0</b></span></td>





                            


                            <td>168<br><span><b>5</b></span></td>





                            


                            <td>256<br><span><b>3</b></span></td>





                            


                            <td>350<br><span><b>8</b></span></td>





                            


                            <td>459<br><span><b>8</b></span></td>





                            


                            <td>346<br><span><b>2</b></span></td>





                            


                            <td>280<br><span><b>0</b></span></td>





                            


                            <td>135<br><span><b>9</b></span></td>





                            


                            <td>149<br><span><b>4</b></span></td>





                            


                            <td>178<br><span><b>6</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">13-07-2020<br></td>

                            


                            <td>679<br><span><b>2</b></span></td>





                            


                            <td>257<br><span><b>4</b></span></td>





                            


                            <td>360<br><span><b>9</b></span></td>





                            


                            <td>180<br><span><b>9</b></span></td>





                            


                            <td>279<br><span><b>8</b></span></td>





                            


                            <td>457<br><span><b>6</b></span></td>





                            


                            <td>789<br><span><b>4</b></span></td>





                            


                            <td>479<br><span><b>0</b></span></td>





                            


                            <td>345<br><span><b>2</b></span></td>





                            


                            <td>256<br><span><b>3</b></span></td>





                            


                            <td>236<br><span><b>1</b></span></td>





                            


                            <td>780<br><span><b>5</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">14-07-2020<br></td>

                            


                            <td>467<br><span><b>7</b></span></td>





                            


                            <td>138<br><span><b>2</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            


                            <td>499<br><span><b>2</b></span></td>





                            


                            <td>699<br><span><b>4</b></span></td>





                            


                            <td>278<br><span><b>7</b></span></td>





                            


                            <td>168<br><span><b>5</b></span></td>





                            


                            <td>440<br><span><b>8</b></span></td>





                            


                            <td>456<br><span><b>5</b></span></td>





                            


                            <td>150<br><span><b>6</b></span></td>





                            


                            <td>389<br><span><b>0</b></span></td>





                            


                            <td>450<br><span><b>9</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">15-07-2020<br></td>

                            


                            <td>148<br><span><b>3</b></span></td>





                            


                            <td>555<br><span><b>5</b></span></td>





                            


                            <td>370<br><span><b>0</b></span></td>





                            


                            <td>146<br><span><b>1</b></span></td>





                            


                            <td>567<br><span><b>8</b></span></td>





                            


                            <td>160<br><span><b>7</b></span></td>





                            


                            <td>589<br><span><b>2</b></span></td>





                            


                            <td>380<br><span><b>1</b></span></td>





                            


                            <td>680<br><span><b>4</b></span></td>





                            


                            <td>459<br><span><b>8</b></span></td>





                            


                            <td>778<br><span><b>2</b></span></td>





                            


                            <td>123<br><span><b>6</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">16-07-2020<br></td>

                            


                            <td>127<br><span><b>0</b></span></td>





                            


                            <td>457<br><span><b>6</b></span></td>





                            


                            <td>113<br><span><b>5</b></span></td>





                            


                            <td>578<br><span><b>0</b></span></td>





                            


                            <td>158<br><span><b>4</b></span></td>





                            


                            <td>139<br><span><b>3</b></span></td>





                            


                            <td>229<br><span><b>3</b></span></td>





                            


                            <td>890<br><span><b>7</b></span></td>





                            


                            <td>135<br><span><b>9</b></span></td>





                            


                            <td>256<br><span><b>3</b></span></td>





                            


                            <td>679<br><span><b>2</b></span></td>





                            


                            <td>268<br><span><b>6</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">17-07-2020<br></td>

                            


                            <td>690<br><span><b>5</b></span></td>





                            


                            <td>138<br><span><b>2</b></span></td>





                            


                            <td>112<br><span><b>4</b></span></td>





                            


                            <td>369<br><span><b>8</b></span></td>





                            


                            <td>125<br><span><b>8</b></span></td>





                            


                            <td>234<br><span><b>9</b></span></td>





                            


                            <td>230<br><span><b>5</b></span></td>





                            


                            <td>229<br><span><b>3</b></span></td>





                            


                            <td>145<br><span><b>0</b></span></td>





                            


                            <td>269<br><span><b>7</b></span></td>





                            


                            <td>248<br><span><b>4</b></span></td>





                            


                            <td>578<br><span><b>0</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">18-07-2020<br></td>

                            


                            <td>349<br><span><b>6</b></span></td>





                            


                            <td>489<br><span><b>1</b></span></td>





                            


                            <td>580<br><span><b>3</b></span></td>





                            


                            <td>140<br><span><b>5</b></span></td>





                            


                            <td>889<br><span><b>5</b></span></td>





                            


                            <td>479<br><span><b>0</b></span></td>





                            


                            <td>148<br><span><b>3</b></span></td>





                            


                            <td>167<br><span><b>4</b></span></td>





                            


                            <td>445<br><span><b>3</b></span></td>





                            


                            <td>468<br><span><b>8</b></span></td>





                            


                            <td>390<br><span><b>2</b></span></td>





                            


                            <td>459<br><span><b>8</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">19-07-2020<br></td>

                            


                            <td>578<br><span><b>0</b></span></td>





                            


                            <td>158<br><span><b>4</b></span></td>





                            


                            <td>568<br><span><b>9</b></span></td>





                            


                            <td>347<br><span><b>4</b></span></td>





                            


                            <td>370<br><span><b>0</b></span></td>





                            


                            <td>679<br><span><b>2</b></span></td>





                            


                            <td>236<br><span><b>1</b></span></td>





                            


                            <td>255<br><span><b>2</b></span></td>





                            


                            <td>233<br><span><b>8</b></span></td>





                            


                            <td>289<br><span><b>9</b></span></td>





                            


                            <td>256<br><span><b>3</b></span></td>





                            


                            <td>470<br><span><b>1</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">20-07-2020<br></td>

                            


                            <td>147<br><span><b>2</b></span></td>





                            


                            <td>227<br><span><b>1</b></span></td>





                            


                            <td>259<br><span><b>6</b></span></td>





                            


                            <td>790<br><span><b>6</b></span></td>





                            


                            <td>146<br><span><b>1</b></span></td>





                            


                            <td>140<br><span><b>5</b></span></td>





                            


                            <td>478<br><span><b>9</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            


                            <td>366<br><span><b>5</b></span></td>





                            


                            <td>170<br><span><b>8</b></span></td>





                            


                            <td>780<br><span><b>5</b></span></td>





                            


                            <td>120<br><span><b>3</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">21-07-2020<br></td>

                            


                            <td>580<br><span><b>3</b></span></td>





                            


                            <td>290<br><span><b>1</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            


                            <td>168<br><span><b>5</b></span></td>





                            


                            <td>579<br><span><b>1</b></span></td>





                            


                            <td>359<br><span><b>7</b></span></td>





                            


                            <td>457<br><span><b>6</b></span></td>





                            


                            <td>245<br><span><b>1</b></span></td>





                            


                            <td>570<br><span><b>2</b></span></td>





                            


                            <td>123<br><span><b>6</b></span></td>





                            


                            <td>567<br><span><b>8</b></span></td>





                            


                            <td>349<br><span><b>6</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">22-07-2020<br></td>

                            


                            <td>479<br><span><b>0</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            


                            <td>230<br><span><b>5</b></span></td>





                            


                            <td>148<br><span><b>3</b></span></td>





                            


                            <td>348<br><span><b>5</b></span></td>





                            


                            <td>589<br><span><b>2</b></span></td>





                            


                            <td>678<br><span><b>1</b></span></td>





                            


                            <td>445<br><span><b>3</b></span></td>





                            


                            <td>150<br><span><b>6</b></span></td>





                            


                            <td>178<br><span><b>6</b></span></td>





                            


                            <td>359<br><span><b>7</b></span></td>





                            


                            <td>459<br><span><b>8</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">23-07-2020<br></td>

                            


                            <td>367<br><span><b>6</b></span></td>





                            


                            <td>480<br><span><b>2</b></span></td>





                            


                            <td>224<br><span><b>8</b></span></td>





                            


                            <td>368<br><span><b>7</b></span></td>





                            


                            <td>159<br><span><b>5</b></span></td>





                            


                            <td>267<br><span><b>5</b></span></td>





                            


                            <td>234<br><span><b>9</b></span></td>





                            


                            <td>388<br><span><b>9</b></span></td>





                            


                            <td>160<br><span><b>7</b></span></td>





                            


                            <td>559<br><span><b>9</b></span></td>





                            


                            <td>138<br><span><b>2</b></span></td>





                            


                            <td>448<br><span><b>6</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">24-07-2020<br></td>

                            


                            <td>129<br><span><b>2</b></span></td>





                            


                            <td>600<br><span><b>6</b></span></td>





                            


                            <td>249<br><span><b>5</b></span></td>





                            


                            <td>790<br><span><b>6</b></span></td>





                            


                            <td>122<br><span><b>5</b></span></td>





                            


                            <td>126<br><span><b>9</b></span></td>





                            


                            <td>124<br><span><b>7</b></span></td>





                            


                            <td>778<br><span><b>2</b></span></td>





                            


                            <td>479<br><span><b>0</b></span></td>





                            


                            <td>236<br><span><b>1</b></span></td>





                            


                            <td>136<br><span><b>0</b></span></td>





                            


                            <td>147<br><span><b>2</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">25-07-2020<br></td>

                            


                            <td>269<br><span><b>7</b></span></td>





                            


                            <td>247<br><span><b>3</b></span></td>





                            


                            <td>450<br><span><b>9</b></span></td>





                            


                            <td>159<br><span><b>5</b></span></td>





                            


                            <td>110<br><span><b>2</b></span></td>





                            


                            <td>358<br><span><b>6</b></span></td>





                            


                            <td>679<br><span><b>2</b></span></td>





                            


                            <td>170<br><span><b>8</b></span></td>





                            


                            <td>567<br><span><b>8</b></span></td>





                            


                            <td>188<br><span><b>7</b></span></td>





                            


                            <td>356<br><span><b>4</b></span></td>





                            


                            <td>135<br><span><b>9</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">26-07-2020<br></td>

                            


                            <td>334<br><span><b>0</b></span></td>





                            


                            <td>120<br><span><b>3</b></span></td>





                            


                            <td>699<br><span><b>4</b></span></td>





                            


                            <td>569<br><span><b>0</b></span></td>





                            


                            <td>116<br><span><b>8</b></span></td>





                            


                            <td>567<br><span><b>8</b></span></td>





                            


                            <td>570<br><span><b>2</b></span></td>





                            


                            <td>380<br><span><b>1</b></span></td>





                            


                            <td>399<br><span><b>1</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            


                            <td>149<br><span><b>4</b></span></td>





                            


                            <td>168<br><span><b>5</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">27-07-2020<br></td>

                            


                            <td>680<br><span><b>4</b></span></td>





                            


                            <td>130<br><span><b>4</b></span></td>





                            


                            <td>299<br><span><b>0</b></span></td>





                            


                            <td>456<br><span><b>5</b></span></td>





                            


                            <td>679<br><span><b>2</b></span></td>





                            


                            <td>678<br><span><b>1</b></span></td>





                            


                            <td>150<br><span><b>6</b></span></td>





                            


                            <td>390<br><span><b>2</b></span></td>





                            


                            <td>780<br><span><b>5</b></span></td>





                            


                            <td>567<br><span><b>8</b></span></td>





                            


                            <td>670<br><span><b>3</b></span></td>





                            


                            <td>578<br><span><b>0</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">28-07-2020<br></td>

                            


                            <td>390<br><span><b>2</b></span></td>





                            


                            <td>168<br><span><b>5</b></span></td>





                            


                            <td>240<br><span><b>6</b></span></td>





                            


                            <td>470<br><span><b>1</b></span></td>





                            


                            <td>557<br><span><b>7</b></span></td>





                            


                            <td>160<br><span><b>7</b></span></td>





                            


                            <td>259<br><span><b>6</b></span></td>





                            


                            <td>790<br><span><b>6</b></span></td>





                            


                            <td>360<br><span><b>9</b></span></td>





                            


                            <td>369<br><span><b>8</b></span></td>





                            


                            <td>479<br><span><b>0</b></span></td>





                            


                            <td>249<br><span><b>5</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">29-07-2020<br></td>

                            


                            <td>790<br><span><b>6</b></span></td>





                            


                            <td>579<br><span><b>1</b></span></td>





                            


                            <td>125<br><span><b>8</b></span></td>





                            


                            <td>279<br><span><b>8</b></span></td>





                            


                            <td>680<br><span><b>4</b></span></td>





                            


                            <td>990<br><span><b>8</b></span></td>





                            


                            <td>149<br><span><b>4</b></span></td>





                            


                            <td>330<br><span><b>6</b></span></td>





                            


                            <td>679<br><span><b>2</b></span></td>





                            


                            <td>127<br><span><b>0</b></span></td>





                            


                            <td>780<br><span><b>5</b></span></td>





                            


                            <td>578<br><span><b>0</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">30-07-2020<br></td>

                            


                            <td>345<br><span><b>2</b></span></td>





                            


                            <td>280<br><span><b>0</b></span></td>





                            


                            <td>348<br><span><b>5</b></span></td>





                            


                            <td>488<br><span><b>0</b></span></td>





                            


                            <td>590<br><span><b>4</b></span></td>





                            


                            <td>570<br><span><b>2</b></span></td>





                            


                            <td>180<br><span><b>9</b></span></td>





                            


                            <td>115<br><span><b>7</b></span></td>





                            


                            <td>137<br><span><b>1</b></span></td>





                            


                            <td>490<br><span><b>3</b></span></td>





                            


                            <td>567<br><span><b>8</b></span></td>





                            


                            <td>489<br><span><b>1</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">31-07-2020<br></td>

                            


                            <td>125<br><span><b>8</b></span></td>





                            


                            <td>579<br><span><b>1</b></span></td>





                            


                            <td>335<br><span><b>1</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            


                            <td>458<br><span><b>7</b></span></td>





                            


                            <td>500<br><span><b>5</b></span></td>





                            


                            <td>356<br><span><b>4</b></span></td>





                            


                            <td>227<br><span><b>1</b></span></td>





                            


                            <td>347<br><span><b>4</b></span></td>





                            


                            <td>569<br><span><b>0</b></span></td>





                            


                            <td>123<br><span><b>6</b></span></td>





                            


                            <td>780<br><span><b>5</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">01-08-2020<br></td>

                            


                            <td>790<br><span><b>6</b></span></td>





                            


                            <td>449<br><span><b>7</b></span></td>





                            


                            <td>299<br><span><b>0</b></span></td>





                            


                            <td>234<br><span><b>9</b></span></td>





                            


                            <td>668<br><span><b>0</b></span></td>





                            


                            <td>126<br><span><b>9</b></span></td>





                            


                            <td>350<br><span><b>8</b></span></td>





                            


                            <td>560<br><span><b>1</b></span></td>





                            


                            <td>345<br><span><b>2</b></span></td>





                            


                            <td>679<br><span><b>2</b></span></td>





                            


                            <td>799<br><span><b>5</b></span></td>





                            


                            <td>900<br><span><b>9</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">02-08-2020<br></td>

                            


                            <td>490<br><span><b>3</b></span></td>





                            


                            <td>669<br><span><b>1</b></span></td>





                            


                            <td>457<br><span><b>6</b></span></td>





                            


                            <td>114<br><span><b>6</b></span></td>





                            


                            <td>138<br><span><b>2</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            


                            <td>567<br><span><b>8</b></span></td>





                            


                            <td>134<br><span><b>8</b></span></td>





                            


                            <td>368<br><span><b>7</b></span></td>





                            


                            <td>220<br><span><b>4</b></span></td>





                            


                            <td>157<br><span><b>3</b></span></td>





                            


                            <td>568<br><span><b>9</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">03-08-2020<br></td>

                            


                            <td>159<br><span><b>5</b></span></td>





                            


                            <td>255<br><span><b>2</b></span></td>





                            


                            <td>778<br><span><b>2</b></span></td>





                            


                            <td>467<br><span><b>7</b></span></td>





                            


                            <td>257<br><span><b>4</b></span></td>





                            


                            <td>489<br><span><b>1</b></span></td>





                            


                            <td>456<br><span><b>5</b></span></td>





                            


                            <td>259<br><span><b>6</b></span></td>





                            


                            <td>158<br><span><b>4</b></span></td>





                            


                            <td>370<br><span><b>0</b></span></td>





                            


                            <td>490<br><span><b>3</b></span></td>





                            


                            <td>146<br><span><b>1</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">04-08-2020<br></td>

                            


                            <td>124<br><span><b>7</b></span></td>





                            


                            <td>267<br><span><b>5</b></span></td>





                            


                            <td>270<br><span><b>9</b></span></td>





                            


                            <td>790<br><span><b>6</b></span></td>





                            


                            <td>190<br><span><b>0</b></span></td>





                            


                            <td>117<br><span><b>9</b></span></td>





                            


                            <td>189<br><span><b>8</b></span></td>





                            


                            <td>558<br><span><b>8</b></span></td>





                            


                            <td>120<br><span><b>3</b></span></td>





                            


                            <td>178<br><span><b>6</b></span></td>





                            


                            <td>780<br><span><b>5</b></span></td>





                            


                            <td>130<br><span><b>1</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">05-08-2020<br></td>

                            


                            <td>389<br><span><b>0</b></span></td>





                            


                            <td>256<br><span><b>3</b></span></td>





                            


                            <td>568<br><span><b>9</b></span></td>





                            


                            <td>480<br><span><b>2</b></span></td>





                            


                            <td>136<br><span><b>0</b></span></td>





                            


                            <td>256<br><span><b>3</b></span></td>





                            


                            <td>560<br><span><b>1</b></span></td>





                            


                            <td>578<br><span><b>0</b></span></td>





                            


                            <td>478<br><span><b>9</b></span></td>





                            


                            <td>368<br><span><b>7</b></span></td>





                            


                            <td>890<br><span><b>7</b></span></td>





                            


                            <td>180<br><span><b>9</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">06-08-2020<br></td>

                            


                            <td>559<br><span><b>9</b></span></td>





                            


                            <td>489<br><span><b>1</b></span></td>





                            


                            <td>167<br><span><b>4</b></span></td>





                            


                            <td>360<br><span><b>9</b></span></td>





                            


                            <td>600<br><span><b>6</b></span></td>





                            


                            <td>145<br><span><b>0</b></span></td>





                            


                            <td>470<br><span><b>1</b></span></td>





                            


                            <td>445<br><span><b>3</b></span></td>





                            


                            <td>247<br><span><b>3</b></span></td>





                            


                            <td>260<br><span><b>8</b></span></td>





                            


                            <td>679<br><span><b>2</b></span></td>





                            


                            <td>220<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">07-08-2020<br></td>

                            


                            <td>500<br><span><b>5</b></span></td>





                            


                            <td>144<br><span><b>9</b></span></td>





                            


                            <td>699<br><span><b>4</b></span></td>





                            


                            <td>158<br><span><b>4</b></span></td>





                            


                            <td>279<br><span><b>8</b></span></td>





                            


                            <td>126<br><span><b>9</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            


                            <td>367<br><span><b>6</b></span></td>





                            


                            <td>678<br><span><b>1</b></span></td>





                            


                            <td>135<br><span><b>9</b></span></td>





                            


                            <td>169<br><span><b>6</b></span></td>





                            


                            <td>780<br><span><b>5</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">08-08-2020<br></td>

                            


                            <td>589<br><span><b>2</b></span></td>





                            


                            <td>558<br><span><b>8</b></span></td>





                            


                            <td>155<br><span><b>1</b></span></td>





                            


                            <td>257<br><span><b>4</b></span></td>





                            


                            <td>246<br><span><b>2</b></span></td>





                            


                            <td>270<br><span><b>9</b></span></td>





                            


                            <td>225<br><span><b>9</b></span></td>





                            


                            <td>236<br><span><b>1</b></span></td>





                            


                            <td>389<br><span><b>0</b></span></td>





                            


                            <td>490<br><span><b>3</b></span></td>





                            


                            <td>668<br><span><b>0</b></span></td>





                            


                            <td>880<br><span><b>6</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">09-08-2020<br></td>

                            


                            <td>116<br><span><b>8</b></span></td>





                            


                            <td>256<br><span><b>3</b></span></td>





                            


                            <td>560<br><span><b>1</b></span></td>





                            


                            <td>470<br><span><b>1</b></span></td>





                            


                            <td>780<br><span><b>5</b></span></td>





                            


                            <td>168<br><span><b>5</b></span></td>





                            


                            <td>568<br><span><b>9</b></span></td>





                            


                            <td>479<br><span><b>0</b></span></td>





                            


                            <td>144<br><span><b>9</b></span></td>





                            


                            <td>490<br><span><b>3</b></span></td>





                            


                            <td>358<br><span><b>6</b></span></td>





                            


                            <td>700<br><span><b>7</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">10-08-2020<br></td>

                            


                            <td>467<br><span><b>7</b></span></td>





                            


                            <td>136<br><span><b>0</b></span></td>





                            


                            <td>288<br><span><b>8</b></span></td>





                            


                            <td>367<br><span><b>6</b></span></td>





                            


                            <td>448<br><span><b>6</b></span></td>





                            


                            <td>670<br><span><b>3</b></span></td>





                            


                            <td>270<br><span><b>9</b></span></td>





                            


                            <td>340<br><span><b>7</b></span></td>





                            


                            <td>167<br><span><b>4</b></span></td>





                            


                            <td>580<br><span><b>3</b></span></td>





                            


                            <td>339<br><span><b>5</b></span></td>





                            


                            <td>224<br><span><b>8</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">11-08-2020<br></td>

                            


                            <td>248<br><span><b>4</b></span></td>





                            


                            <td>144<br><span><b>9</b></span></td>





                            


                            <td>488<br><span><b>0</b></span></td>





                            


                            <td>125<br><span><b>8</b></span></td>





                            


                            <td>140<br><span><b>5</b></span></td>





                            


                            <td>122<br><span><b>5</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            


                            <td>158<br><span><b>4</b></span></td>





                            


                            <td>123<br><span><b>6</b></span></td>





                            


                            <td>680<br><span><b>4</b></span></td>





                            


                            <td>168<br><span><b>5</b></span></td>





                            


                            <td>358<br><span><b>6</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">12-08-2020<br></td>

                            


                            <td>348<br><span><b>5</b></span></td>





                            


                            <td>478<br><span><b>9</b></span></td>





                            


                            <td>367<br><span><b>6</b></span></td>





                            


                            <td>567<br><span><b>8</b></span></td>





                            


                            <td>590<br><span><b>4</b></span></td>





                            


                            <td>189<br><span><b>8</b></span></td>





                            


                            <td>589<br><span><b>2</b></span></td>





                            


                            <td>778<br><span><b>2</b></span></td>





                            


                            <td>489<br><span><b>1</b></span></td>





                            


                            <td>114<br><span><b>6</b></span></td>





                            


                            <td>247<br><span><b>3</b></span></td>





                            


                            <td>135<br><span><b>9</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">13-08-2020<br></td>

                            


                            <td>900<br><span><b>9</b></span></td>





                            


                            <td>579<br><span><b>1</b></span></td>





                            


                            <td>680<br><span><b>4</b></span></td>





                            


                            <td>224<br><span><b>8</b></span></td>





                            


                            <td>669<br><span><b>1</b></span></td>





                            


                            <td>159<br><span><b>5</b></span></td>





                            


                            <td>450<br><span><b>9</b></span></td>





                            


                            <td>268<br><span><b>6</b></span></td>





                            


                            <td>690<br><span><b>5</b></span></td>





                            


                            <td>199<br><span><b>9</b></span></td>





                            


                            <td>125<br><span><b>8</b></span></td>





                            


                            <td>148<br><span><b>3</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">14-08-2020<br></td>

                            


                            <td>456<br><span><b>5</b></span></td>





                            


                            <td>123<br><span><b>6</b></span></td>





                            


                            <td>134<br><span><b>8</b></span></td>





                            


                            <td>568<br><span><b>9</b></span></td>





                            


                            <td>340<br><span><b>7</b></span></td>





                            


                            <td>346<br><span><b>3</b></span></td>





                            


                            <td>457<br><span><b>6</b></span></td>





                            


                            <td>350<br><span><b>8</b></span></td>





                            


                            <td>160<br><span><b>7</b></span></td>





                            


                            <td>346<br><span><b>3</b></span></td>





                            


                            <td>479<br><span><b>0</b></span></td>





                            


                            <td>680<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">16-08-2020<br></td>

                            


                            <td>356<br><span><b>4</b></span></td>





                            


                            <td>578<br><span><b>0</b></span></td>





                            


                            <td>170<br><span><b>8</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            


                            <td>169<br><span><b>6</b></span></td>





                            


                            <td>350<br><span><b>8</b></span></td>





                            


                            <td>137<br><span><b>1</b></span></td>





                            


                            <td>248<br><span><b>4</b></span></td>





                            


                            <td>159<br><span><b>5</b></span></td>





                            


                            <td>568<br><span><b>9</b></span></td>





                            


                            <td>678<br><span><b>1</b></span></td>





                            


                            <td>280<br><span><b>0</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">17-08-2020<br></td>

                            


                            <td>129<br><span><b>2</b></span></td>





                            


                            <td>559<br><span><b>9</b></span></td>





                            


                            <td>346<br><span><b>3</b></span></td>





                            


                            <td>368<br><span><b>7</b></span></td>





                            


                            <td>580<br><span><b>3</b></span></td>





                            


                            <td>589<br><span><b>2</b></span></td>





                            


                            <td>690<br><span><b>5</b></span></td>





                            


                            <td>800<br><span><b>8</b></span></td>





                            


                            <td>789<br><span><b>4</b></span></td>





                            


                            <td>230<br><span><b>5</b></span></td>





                            


                            <td>390<br><span><b>2</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">18-08-2020<br></td>

                            


                            <td>490<br><span><b>3</b></span></td>





                            


                            <td>279<br><span><b>8</b></span></td>





                            


                            <td>114<br><span><b>6</b></span></td>





                            


                            <td>270<br><span><b>9</b></span></td>





                            


                            <td>467<br><span><b>7</b></span></td>





                            


                            <td>119<br><span><b>1</b></span></td>





                            


                            <td>578<br><span><b>0</b></span></td>





                            


                            <td>669<br><span><b>1</b></span></td>





                            


                            <td>160<br><span><b>7</b></span></td>





                            


                            <td>300<br><span><b>3</b></span></td>





                            


                            <td>149<br><span><b>4</b></span></td>





                            


                            <td>679<br><span><b>2</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">19-08-2020<br></td>

                            


                            <td>138<br><span><b>2</b></span></td>





                            


                            <td>169<br><span><b>6</b></span></td>





                            


                            <td>568<br><span><b>9</b></span></td>





                            


                            <td>350<br><span><b>8</b></span></td>





                            


                            <td>236<br><span><b>1</b></span></td>





                            


                            <td>366<br><span><b>5</b></span></td>





                            


                            <td>567<br><span><b>8</b></span></td>





                            


                            <td>579<br><span><b>1</b></span></td>





                            


                            <td>257<br><span><b>4</b></span></td>





                            


                            <td>670<br><span><b>3</b></span></td>





                            


                            <td>299<br><span><b>0</b></span></td>





                            


                            <td>589<br><span><b>2</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">20-08-2020<br></td>

                            


                            <td>355<br><span><b>3</b></span></td>





                            


                            <td>123<br><span><b>6</b></span></td>





                            


                            <td>345<br><span><b>2</b></span></td>





                            


                            <td>256<br><span><b>3</b></span></td>





                            


                            <td>370<br><span><b>0</b></span></td>





                            


                            <td>128<br><span><b>1</b></span></td>





                            


                            <td>115<br><span><b>7</b></span></td>





                            


                            <td>578<br><span><b>0</b></span></td>





                            


                            <td>335<br><span><b>1</b></span></td>





                            


                            <td>114<br><span><b>6</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            


                            <td>124<br><span><b>7</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">21-08-2020<br></td>

                            


                            <td>179<br><span><b>7</b></span></td>





                            


                            <td>670<br><span><b>3</b></span></td>





                            


                            <td>225<br><span><b>9</b></span></td>





                            


                            <td>120<br><span><b>3</b></span></td>





                            


                            <td>469<br><span><b>9</b></span></td>





                            


                            <td>489<br><span><b>1</b></span></td>





                            


                            <td>589<br><span><b>2</b></span></td>





                            


                            <td>457<br><span><b>6</b></span></td>





                            


                            <td>134<br><span><b>8</b></span></td>





                            


                            <td>669<br><span><b>1</b></span></td>





                            


                            <td>124<br><span><b>7</b></span></td>





                            


                            <td>440<br><span><b>8</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">22-08-2020<br></td>

                            


                            <td>199<br><span><b>9</b></span></td>





                            


                            <td>990<br><span><b>8</b></span></td>





                            


                            <td>557<br><span><b>7</b></span></td>





                            


                            <td>280<br><span><b>0</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            


                            <td>256<br><span><b>3</b></span></td>





                            


                            <td>135<br><span><b>9</b></span></td>





                            


                            <td>340<br><span><b>7</b></span></td>





                            


                            <td>260<br><span><b>8</b></span></td>





                            


                            <td>570<br><span><b>2</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            


                            <td>134<br><span><b>8</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">23-08-2020<br></td>

                            


                            <td>348<br><span><b>5</b></span></td>





                            


                            <td>156<br><span><b>2</b></span></td>





                            


                            <td>568<br><span><b>9</b></span></td>





                            


                            <td>344<br><span><b>1</b></span></td>





                            


                            <td>560<br><span><b>1</b></span></td>





                            


                            <td>370<br><span><b>0</b></span></td>





                            


                            <td>670<br><span><b>3</b></span></td>





                            


                            <td>180<br><span><b>9</b></span></td>





                            


                            <td>890<br><span><b>7</b></span></td>





                            


                            <td>124<br><span><b>7</b></span></td>





                            


                            <td>900<br><span><b>9</b></span></td>





                            


                            <td>358<br><span><b>6</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">24-08-2020<br></td>

                            


                            <td>258<br><span><b>5</b></span></td>





                            


                            <td>149<br><span><b>4</b></span></td>





                            


                            <td>470<br><span><b>1</b></span></td>





                            


                            <td>457<br><span><b>6</b></span></td>





                            


                            <td>140<br><span><b>5</b></span></td>





                            


                            <td>580<br><span><b>3</b></span></td>





                            


                            <td>169<br><span><b>6</b></span></td>





                            


                            <td>124<br><span><b>7</b></span></td>





                            


                            <td>379<br><span><b>9</b></span></td>





                            


                            <td>160<br><span><b>7</b></span></td>





                            


                            <td>490<br><span><b>3</b></span></td>





                            


                            <td>567<br><span><b>8</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">25-08-2020<br></td>

                            


                            <td>678<br><span><b>1</b></span></td>





                            


                            <td>116<br><span><b>8</b></span></td>





                            


                            <td>158<br><span><b>4</b></span></td>





                            


                            <td>457<br><span><b>6</b></span></td>





                            


                            <td>479<br><span><b>0</b></span></td>





                            


                            <td>123<br><span><b>6</b></span></td>





                            


                            <td>279<br><span><b>8</b></span></td>





                            


                            <td>690<br><span><b>5</b></span></td>





                            


                            <td>350<br><span><b>8</b></span></td>





                            


                            <td>368<br><span><b>7</b></span></td>





                            


                            <td>160<br><span><b>7</b></span></td>





                            


                            <td>400<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">26-08-2020<br></td>

                            


                            <td>489<br><span><b>1</b></span></td>





                            


                            <td>349<br><span><b>6</b></span></td>





                            


                            <td>690<br><span><b>5</b></span></td>





                            


                            <td>156<br><span><b>2</b></span></td>





                            


                            <td>149<br><span><b>4</b></span></td>





                            


                            <td>357<br><span><b>5</b></span></td>





                            


                            <td>138<br><span><b>2</b></span></td>





                            


                            <td>569<br><span><b>0</b></span></td>





                            


                            <td>269<br><span><b>7</b></span></td>





                            


                            <td>489<br><span><b>1</b></span></td>





                            


                            <td>259<br><span><b>6</b></span></td>





                            


                            <td>249<br><span><b>5</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">27-08-2020<br></td>

                            


                            <td>360<br><span><b>9</b></span></td>





                            


                            <td>156<br><span><b>2</b></span></td>





                            


                            <td>780<br><span><b>5</b></span></td>





                            


                            <td>880<br><span><b>6</b></span></td>





                            


                            <td>234<br><span><b>9</b></span></td>





                            


                            <td>259<br><span><b>6</b></span></td>





                            


                            <td>345<br><span><b>2</b></span></td>





                            


                            <td>240<br><span><b>6</b></span></td>





                            


                            <td>348<br><span><b>5</b></span></td>





                            


                            <td>568<br><span><b>9</b></span></td>





                            


                            <td>589<br><span><b>2</b></span></td>





                            


                            <td>789<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">28-08-2020<br></td>

                            


                            <td>136<br><span><b>0</b></span></td>





                            


                            <td>789<br><span><b>4</b></span></td>





                            


                            <td>799<br><span><b>5</b></span></td>





                            


                            <td>670<br><span><b>3</b></span></td>





                            


                            <td>557<br><span><b>7</b></span></td>





                            


                            <td>199<br><span><b>9</b></span></td>





                            


                            <td>456<br><span><b>5</b></span></td>





                            


                            <td>119<br><span><b>1</b></span></td>





                            


                            <td>690<br><span><b>5</b></span></td>





                            


                            <td>257<br><span><b>4</b></span></td>





                            


                            <td>269<br><span><b>7</b></span></td>





                            


                            <td>448<br><span><b>6</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">29-08-2020<br></td>

                            


                            <td>245<br><span><b>1</b></span></td>





                            


                            <td>590<br><span><b>4</b></span></td>





                            


                            <td>366<br><span><b>5</b></span></td>





                            


                            <td>130<br><span><b>4</b></span></td>





                            


                            <td>145<br><span><b>0</b></span></td>





                            


                            <td>255<br><span><b>2</b></span></td>





                            


                            <td>467<br><span><b>7</b></span></td>





                            


                            <td>230<br><span><b>5</b></span></td>





                            


                            <td>129<br><span><b>2</b></span></td>





                            


                            <td>455<br><span><b>4</b></span></td>





                            


                            <td>128<br><span><b>1</b></span></td>





                            


                            <td>330<br><span><b>6</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">30-08-2020<br></td>

                            


                            <td>279<br><span><b>8</b></span></td>





                            


                            <td>122<br><span><b>5</b></span></td>





                            


                            <td>127<br><span><b>0</b></span></td>





                            


                            <td>134<br><span><b>8</b></span></td>





                            


                            <td>138<br><span><b>2</b></span></td>





                            


                            <td>589<br><span><b>2</b></span></td>





                            


                            <td>678<br><span><b>1</b></span></td>





                            


                            <td>366<br><span><b>5</b></span></td>





                            


                            <td>115<br><span><b>7</b></span></td>





                            


                            <td>670<br><span><b>3</b></span></td>





                            


                            <td>445<br><span><b>3</b></span></td>





                            


                            <td>237<br><span><b>2</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">31-08-2020<br></td>

                            


                            <td>178<br><span><b>6</b></span></td>





                            


                            <td>447<br><span><b>5</b></span></td>





                            


                            <td>556<br><span><b>6</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            


                            <td>677<br><span><b>0</b></span></td>





                            


                            <td>347<br><span><b>4</b></span></td>





                            


                            <td>135<br><span><b>9</b></span></td>





                            


                            <td>225<br><span><b>9</b></span></td>





                            


                            <td>357<br><span><b>5</b></span></td>





                            


                            <td>779<br><span><b>3</b></span></td>





                            


                            <td>344<br><span><b>1</b></span></td>





                            


                            <td>270<br><span><b>9</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">01-09-2020<br></td>

                            


                            <td>269<br><span><b>7</b></span></td>





                            


                            <td>380<br><span><b>1</b></span></td>





                            


                            <td>580<br><span><b>3</b></span></td>





                            


                            <td>460<br><span><b>0</b></span></td>





                            


                            <td>789<br><span><b>4</b></span></td>





                            


                            <td>144<br><span><b>9</b></span></td>





                            


                            <td>457<br><span><b>6</b></span></td>





                            


                            <td>490<br><span><b>3</b></span></td>





                            


                            <td>334<br><span><b>0</b></span></td>





                            


                            <td>223<br><span><b>7</b></span></td>





                            


                            <td>150<br><span><b>6</b></span></td>





                            


                            <td>445<br><span><b>3</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">02-09-2020<br></td>

                            


                            <td>188<br><span><b>7</b></span></td>





                            


                            <td>159<br><span><b>5</b></span></td>





                            


                            <td>250<br><span><b>7</b></span></td>





                            


                            <td>180<br><span><b>9</b></span></td>





                            


                            <td>370<br><span><b>0</b></span></td>





                            


                            <td>123<br><span><b>6</b></span></td>





                            


                            <td>670<br><span><b>3</b></span></td>





                            


                            <td>144<br><span><b>9</b></span></td>





                            


                            <td>890<br><span><b>7</b></span></td>





                            


                            <td>550<br><span><b>0</b></span></td>





                            


                            <td>167<br><span><b>4</b></span></td>





                            


                            <td>123<br><span><b>6</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">03-09-2020<br></td>

                            


                            <td>250<br><span><b>7</b></span></td>





                            


                            <td>679<br><span><b>2</b></span></td>





                            


                            <td>226<br><span><b>0</b></span></td>





                            


                            <td>180<br><span><b>9</b></span></td>





                            


                            <td>345<br><span><b>2</b></span></td>





                            


                            <td>369<br><span><b>8</b></span></td>





                            


                            <td>167<br><span><b>4</b></span></td>





                            


                            <td>228<br><span><b>2</b></span></td>





                            


                            <td>350<br><span><b>8</b></span></td>





                            


                            <td>340<br><span><b>7</b></span></td>





                            


                            <td>258<br><span><b>5</b></span></td>





                            


                            <td>670<br><span><b>3</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">04-09-2020<br></td>

                            


                            <td>680<br><span><b>4</b></span></td>





                            


                            <td>499<br><span><b>2</b></span></td>





                            


                            <td>135<br><span><b>9</b></span></td>





                            


                            <td>678<br><span><b>1</b></span></td>





                            


                            <td>280<br><span><b>0</b></span></td>





                            


                            <td>230<br><span><b>5</b></span></td>





                            


                            <td>134<br><span><b>8</b></span></td>





                            


                            <td>239<br><span><b>4</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            


                            <td>245<br><span><b>1</b></span></td>





                            


                            <td>589<br><span><b>2</b></span></td>





                            


                            <td>135<br><span><b>9</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">05-09-2020<br></td>

                            


                            <td>133<br><span><b>7</b></span></td>





                            


                            <td>448<br><span><b>6</b></span></td>





                            


                            <td>248<br><span><b>4</b></span></td>





                            


                            <td>350<br><span><b>8</b></span></td>





                            


                            <td>340<br><span><b>7</b></span></td>





                            


                            <td>345<br><span><b>2</b></span></td>





                            


                            <td>780<br><span><b>5</b></span></td>





                            


                            <td>680<br><span><b>4</b></span></td>





                            


                            <td>157<br><span><b>3</b></span></td>





                            


                            <td>567<br><span><b>8</b></span></td>





                            


                            <td>599<br><span><b>3</b></span></td>





                            


                            <td>780<br><span><b>5</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">06-09-2020<br></td>

                            


                            <td>147<br><span><b>2</b></span></td>





                            


                            <td>459<br><span><b>8</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            


                            <td>467<br><span><b>7</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            


                            <td>456<br><span><b>5</b></span></td>





                            


                            <td>156<br><span><b>2</b></span></td>





                            


                            <td>590<br><span><b>4</b></span></td>





                            


                            <td>255<br><span><b>2</b></span></td>





                            


                            <td>260<br><span><b>8</b></span></td>





                            


                            <td>123<br><span><b>6</b></span></td>





                            


                            <td>889<br><span><b>5</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">07-09-2020<br></td>

                            


                            <td>890<br><span><b>7</b></span></td>





                            


                            <td>229<br><span><b>3</b></span></td>





                            


                            <td>344<br><span><b>1</b></span></td>





                            


                            <td>347<br><span><b>4</b></span></td>





                            


                            <td>128<br><span><b>1</b></span></td>





                            


                            <td>566<br><span><b>7</b></span></td>





                            


                            <td>440<br><span><b>8</b></span></td>





                            


                            <td>127<br><span><b>0</b></span></td>





                            


                            <td>290<br><span><b>1</b></span></td>





                            


                            <td>349<br><span><b>6</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            


                            <td>212<br><span><b>5</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">08-09-2020<br></td>

                            


                            <td>125<br><span><b>8</b></span></td>





                            


                            <td>169<br><span><b>6</b></span></td>





                            


                            <td>144<br><span><b>9</b></span></td>





                            


                            <td>247<br><span><b>3</b></span></td>





                            


                            <td>139<br><span><b>3</b></span></td>





                            


                            <td>667<br><span><b>9</b></span></td>





                            


                            <td>678<br><span><b>1</b></span></td>





                            


                            <td>258<br><span><b>5</b></span></td>





                            


                            <td>570<br><span><b>2</b></span></td>





                            


                            <td>680<br><span><b>4</b></span></td>





                            


                            <td>445<br><span><b>3</b></span></td>





                            


                            <td>545<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">09-09-2020<br></td>

                            


                            <td>122<br><span><b>5</b></span></td>





                            


                            <td>499<br><span><b>2</b></span></td>





                            


                            <td>178<br><span><b>6</b></span></td>





                            


                            <td>256<br><span><b>3</b></span></td>





                            


                            <td>590<br><span><b>4</b></span></td>





                            


                            <td>489<br><span><b>1</b></span></td>





                            


                            <td>128<br><span><b>1</b></span></td>





                            


                            <td>248<br><span><b>4</b></span></td>





                            


                            <td>237<br><span><b>2</b></span></td>





                            


                            <td>567<br><span><b>8</b></span></td>





                            


                            <td>421<br><span><b>7</b></span></td>





                            


                            <td>124<br><span><b>7</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">10-09-2020<br></td>

                            


                            <td>669<br><span><b>1</b></span></td>





                            


                            <td>670<br><span><b>3</b></span></td>





                            


                            <td>267<br><span><b>5</b></span></td>





                            


                            <td>489<br><span><b>1</b></span></td>





                            


                            <td>170<br><span><b>8</b></span></td>





                            


                            <td>467<br><span><b>7</b></span></td>





                            


                            <td>567<br><span><b>8</b></span></td>





                            


                            <td>112<br><span><b>4</b></span></td>





                            


                            <td>249<br><span><b>5</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            


                            <td>570<br><span><b>2</b></span></td>





                            


                            <td>279<br><span><b>8</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">11-09-2020<br></td>

                            


                            <td>256<br><span><b>3</b></span></td>





                            


                            <td>127<br><span><b>0</b></span></td>





                            


                            <td>799<br><span><b>5</b></span></td>





                            


                            <td>670<br><span><b>3</b></span></td>





                            


                            <td>249<br><span><b>5</b></span></td>





                            


                            <td>155<br><span><b>1</b></span></td>





                            


                            <td>170<br><span><b>8</b></span></td>





                            


                            <td>480<br><span><b>2</b></span></td>





                            


                            <td>578<br><span><b>0</b></span></td>





                            


                            <td>168<br><span><b>5</b></span></td>





                            


                            <td>334<br><span><b>0</b></span></td>





                            


                            <td>780<br><span><b>5</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">12-09-2020<br></td>

                            


                            <td>559<br><span><b>9</b></span></td>





                            


                            <td>147<br><span><b>2</b></span></td>





                            


                            <td>256<br><span><b>3</b></span></td>





                            


                            <td>124<br><span><b>7</b></span></td>





                            


                            <td>490<br><span><b>3</b></span></td>





                            


                            <td>225<br><span><b>9</b></span></td>





                            


                            <td>355<br><span><b>3</b></span></td>





                            


                            <td>678<br><span><b>1</b></span></td>





                            


                            <td>580<br><span><b>3</b></span></td>





                            


                            <td>349<br><span><b>6</b></span></td>





                            


                            <td>260<br><span><b>8</b></span></td>





                            


                            <td>356<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">13-09-2020<br></td>

                            


                            <td>235<br><span><b>0</b></span></td>





                            


                            <td>125<br><span><b>8</b></span></td>





                            


                            <td>150<br><span><b>6</b></span></td>





                            


                            <td>460<br><span><b>0</b></span></td>





                            


                            <td>340<br><span><b>7</b></span></td>





                            


                            <td>579<br><span><b>1</b></span></td>





                            


                            <td>690<br><span><b>5</b></span></td>





                            


                            <td>460<br><span><b>0</b></span></td>





                            


                            <td>159<br><span><b>5</b></span></td>





                            


                            <td>245<br><span><b>1</b></span></td>





                            


                            <td>148<br><span><b>3</b></span></td>





                            


                            <td>142<br><span><b>7</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">14-09-2020<br></td>

                            


                            <td>169<br><span><b>6</b></span></td>





                            


                            <td>699<br><span><b>4</b></span></td>





                            


                            <td>478<br><span><b>9</b></span></td>





                            


                            <td>668<br><span><b>0</b></span></td>





                            


                            <td>258<br><span><b>5</b></span></td>





                            


                            <td>339<br><span><b>5</b></span></td>





                            


                            <td>678<br><span><b>1</b></span></td>





                            


                            <td>136<br><span><b>0</b></span></td>





                            


                            <td>234<br><span><b>9</b></span></td>





                            


                            <td>236<br><span><b>1</b></span></td>





                            


                            <td>124<br><span><b>7</b></span></td>





                            


                            <td>156<br><span><b>2</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">15-09-2020<br></td>

                            


                            <td>356<br><span><b>4</b></span></td>





                            


                            <td>388<br><span><b>9</b></span></td>





                            


                            <td>579<br><span><b>1</b></span></td>





                            


                            <td>578<br><span><b>0</b></span></td>





                            


                            <td>600<br><span><b>6</b></span></td>





                            


                            <td>234<br><span><b>9</b></span></td>





                            


                            <td>460<br><span><b>0</b></span></td>





                            


                            <td>789<br><span><b>4</b></span></td>





                            


                            <td>350<br><span><b>8</b></span></td>





                            


                            <td>477<br><span><b>8</b></span></td>





                            


                            <td>226<br><span><b>0</b></span></td>





                            


                            <td>560<br><span><b>1</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">16-09-2020<br></td>

                            


                            <td>388<br><span><b>9</b></span></td>





                            


                            <td>457<br><span><b>6</b></span></td>





                            


                            <td>224<br><span><b>8</b></span></td>





                            


                            <td>790<br><span><b>6</b></span></td>





                            


                            <td>558<br><span><b>8</b></span></td>





                            


                            <td>139<br><span><b>3</b></span></td>





                            


                            <td>560<br><span><b>1</b></span></td>





                            


                            <td>478<br><span><b>9</b></span></td>





                            


                            <td>156<br><span><b>2</b></span></td>





                            


                            <td>137<br><span><b>1</b></span></td>





                            


                            <td>129<br><span><b>2</b></span></td>





                            


                            <td>670<br><span><b>3</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">17-09-2020<br></td>

                            


                            <td>677<br><span><b>0</b></span></td>





                            


                            <td>357<br><span><b>5</b></span></td>





                            


                            <td>148<br><span><b>3</b></span></td>





                            


                            <td>780<br><span><b>5</b></span></td>





                            


                            <td>360<br><span><b>9</b></span></td>





                            


                            <td>580<br><span><b>3</b></span></td>





                            


                            <td>460<br><span><b>0</b></span></td>





                            


                            <td>670<br><span><b>3</b></span></td>





                            


                            <td>123<br><span><b>6</b></span></td>





                            


                            <td>248<br><span><b>4</b></span></td>





                            


                            <td>678<br><span><b>1</b></span></td>





                            


                            <td>560<br><span><b>1</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">18-09-2020<br></td>

                            


                            <td>234<br><span><b>9</b></span></td>





                            


                            <td>150<br><span><b>6</b></span></td>





                            


                            <td>168<br><span><b>5</b></span></td>





                            


                            <td>156<br><span><b>2</b></span></td>





                            


                            <td>159<br><span><b>5</b></span></td>





                            


                            <td>270<br><span><b>9</b></span></td>





                            


                            <td>345<br><span><b>2</b></span></td>





                            


                            <td>225<br><span><b>9</b></span></td>





                            


                            <td>889<br><span><b>5</b></span></td>





                            


                            <td>256<br><span><b>3</b></span></td>





                            


                            <td>389<br><span><b>0</b></span></td>





                            


                            <td>248<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">19-09-2020<br></td>

                            


                            <td>590<br><span><b>4</b></span></td>





                            


                            <td>368<br><span><b>7</b></span></td>





                            


                            <td>690<br><span><b>5</b></span></td>





                            


                            <td>790<br><span><b>6</b></span></td>





                            


                            <td>127<br><span><b>0</b></span></td>





                            


                            <td>456<br><span><b>5</b></span></td>





                            


                            <td>125<br><span><b>8</b></span></td>





                            


                            <td>450<br><span><b>9</b></span></td>





                            


                            <td>280<br><span><b>0</b></span></td>





                            


                            <td>379<br><span><b>9</b></span></td>





                            


                            <td>379<br><span><b>9</b></span></td>





                            


                            <td>377<br><span><b>7</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">20-09-2020<br></td>

                            


                            <td>556<br><span><b>6</b></span></td>





                            


                            <td>478<br><span><b>9</b></span></td>





                            


                            <td>269<br><span><b>7</b></span></td>





                            


                            <td>147<br><span><b>2</b></span></td>





                            


                            <td>348<br><span><b>5</b></span></td>





                            


                            <td>122<br><span><b>5</b></span></td>





                            


                            <td>680<br><span><b>4</b></span></td>





                            


                            <td>789<br><span><b>4</b></span></td>





                            


                            <td>124<br><span><b>7</b></span></td>





                            


                            <td>449<br><span><b>7</b></span></td>





                            


                            <td>500<br><span><b>5</b></span></td>





                            


                            <td>123<br><span><b>6</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">21-09-2020<br></td>

                            


                            <td>167<br><span><b>4</b></span></td>





                            


                            <td>349<br><span><b>6</b></span></td>





                            


                            <td>345<br><span><b>2</b></span></td>





                            


                            <td>579<br><span><b>1</b></span></td>





                            


                            <td>190<br><span><b>0</b></span></td>





                            


                            <td>236<br><span><b>1</b></span></td>





                            


                            <td>358<br><span><b>6</b></span></td>





                            


                            <td>157<br><span><b>3</b></span></td>





                            


                            <td>340<br><span><b>7</b></span></td>





                            


                            <td>127<br><span><b>0</b></span></td>





                            


                            <td>247<br><span><b>3</b></span></td>





                            


                            <td>600<br><span><b>6</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">22-09-2020<br></td>

                            


                            <td>347<br><span><b>4</b></span></td>





                            


                            <td>127<br><span><b>0</b></span></td>





                            


                            <td>678<br><span><b>1</b></span></td>





                            


                            <td>337<br><span><b>3</b></span></td>





                            


                            <td>277<br><span><b>6</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            


                            <td>123<br><span><b>6</b></span></td>





                            


                            <td>680<br><span><b>4</b></span></td>





                            


                            <td>290<br><span><b>1</b></span></td>





                            


                            <td>390<br><span><b>2</b></span></td>





                            


                            <td>559<br><span><b>9</b></span></td>





                            


                            <td>700<br><span><b>7</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">23-09-2020<br></td>

                            


                            <td>114<br><span><b>6</b></span></td>





                            


                            <td>340<br><span><b>7</b></span></td>





                            


                            <td>118<br><span><b>0</b></span></td>





                            


                            <td>120<br><span><b>3</b></span></td>





                            


                            <td>166<br><span><b>3</b></span></td>





                            


                            <td>268<br><span><b>6</b></span></td>





                            


                            <td>489<br><span><b>1</b></span></td>





                            


                            <td>699<br><span><b>4</b></span></td>





                            


                            <td>290<br><span><b>1</b></span></td>





                            


                            <td>160<br><span><b>7</b></span></td>





                            


                            <td>127<br><span><b>0</b></span></td>





                            


                            <td>157<br><span><b>3</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">24-09-2020<br></td>

                            


                            <td>447<br><span><b>5</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            


                            <td>467<br><span><b>7</b></span></td>





                            


                            <td>234<br><span><b>9</b></span></td>





                            


                            <td>568<br><span><b>9</b></span></td>





                            


                            <td>136<br><span><b>0</b></span></td>





                            


                            <td>167<br><span><b>4</b></span></td>





                            


                            <td>129<br><span><b>2</b></span></td>





                            


                            <td>160<br><span><b>7</b></span></td>





                            


                            <td>680<br><span><b>4</b></span></td>





                            


                            <td>557<br><span><b>7</b></span></td>





                            


                            <td>220<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">25-09-2020<br></td>

                            


                            <td>450<br><span><b>9</b></span></td>





                            


                            <td>269<br><span><b>7</b></span></td>





                            


                            <td>247<br><span><b>3</b></span></td>





                            


                            <td>260<br><span><b>8</b></span></td>





                            


                            <td>477<br><span><b>8</b></span></td>





                            


                            <td>449<br><span><b>7</b></span></td>





                            


                            <td>135<br><span><b>9</b></span></td>





                            


                            <td>680<br><span><b>4</b></span></td>





                            


                            <td>123<br><span><b>6</b></span></td>





                            


                            <td>259<br><span><b>6</b></span></td>





                            


                            <td>189<br><span><b>8</b></span></td>





                            


                            <td>239<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">26-09-2020<br></td>

                            


                            <td>790<br><span><b>6</b></span></td>





                            


                            <td>350<br><span><b>8</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            


                            <td>180<br><span><b>9</b></span></td>





                            


                            <td>479<br><span><b>0</b></span></td>





                            


                            <td>290<br><span><b>1</b></span></td>





                            


                            <td>677<br><span><b>0</b></span></td>





                            


                            <td>780<br><span><b>5</b></span></td>





                            


                            <td>569<br><span><b>0</b></span></td>





                            


                            <td>469<br><span><b>9</b></span></td>





                            


                            <td>134<br><span><b>8</b></span></td>





                            


                            <td>678<br><span><b>1</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">27-09-2020<br></td>

                            


                            <td>150<br><span><b>6</b></span></td>





                            


                            <td>460<br><span><b>0</b></span></td>





                            


                            <td>145<br><span><b>0</b></span></td>





                            


                            <td>330<br><span><b>6</b></span></td>





                            


                            <td>350<br><span><b>8</b></span></td>





                            


                            <td>480<br><span><b>2</b></span></td>





                            


                            <td>234<br><span><b>9</b></span></td>





                            


                            <td>340<br><span><b>7</b></span></td>





                            


                            <td>678<br><span><b>1</b></span></td>





                            


                            <td>399<br><span><b>1</b></span></td>





                            


                            <td>279<br><span><b>8</b></span></td>





                            


                            <td>379<br><span><b>9</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">28-09-2020<br></td>

                            


                            <td>467<br><span><b>7</b></span></td>





                            


                            <td>335<br><span><b>1</b></span></td>





                            


                            <td>890<br><span><b>7</b></span></td>





                            


                            <td>148<br><span><b>3</b></span></td>





                            


                            <td>168<br><span><b>5</b></span></td>





                            


                            <td>123<br><span><b>6</b></span></td>





                            


                            <td>789<br><span><b>4</b></span></td>





                            


                            <td>235<br><span><b>0</b></span></td>





                            


                            <td>678<br><span><b>1</b></span></td>





                            


                            <td>357<br><span><b>6</b></span></td>





                            


                            <td>347<br><span><b>4</b></span></td>





                            


                            <td>178<br><span><b>6</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">29-09-2020<br></td>

                            


                            <td>345<br><span><b>2</b></span></td>





                            


                            <td>468<br><span><b>8</b></span></td>





                            


                            <td>230<br><span><b>5</b></span></td>





                            


                            <td>147<br><span><b>2</b></span></td>





                            


                            <td>125<br><span><b>8</b></span></td>





                            


                            <td>120<br><span><b>3</b></span></td>





                            


                            <td>560<br><span><b>1</b></span></td>





                            


                            <td>136<br><span><b>0</b></span></td>





                            


                            <td>340<br><span><b>7</b></span></td>





                            


                            <td>490<br><span><b>3</b></span></td>





                            


                            <td>567<br><span><b>8</b></span></td>





                            


                            <td>689<br><span><b>3</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">30-09-2020<br></td>

                            


                            <td>259<br><span><b>6</b></span></td>





                            


                            <td>356<br><span><b>4</b></span></td>





                            


                            <td>350<br><span><b>8</b></span></td>





                            


                            <td>145<br><span><b>0</b></span></td>





                            


                            <td>150<br><span><b>6</b></span></td>





                            


                            <td>257<br><span><b>4</b></span></td>





                            


                            <td>158<br><span><b>4</b></span></td>





                            


                            <td>138<br><span><b>2</b></span></td>





                            


                            <td>270<br><span><b>9</b></span></td>





                            


                            <td>369<br><span><b>8</b></span></td>





                            


                            <td>488<br><span><b>0</b></span></td>





                            


                            <td>450<br><span><b>7</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">01-10-2020<br></td>

                            


                            <td>346<br><span><b>3</b></span></td>





                            


                            <td>570<br><span><b>2</b></span></td>





                            


                            <td>599<br><span><b>3</b></span></td>





                            


                            <td>589<br><span><b>2</b></span></td>





                            


                            <td>440<br><span><b>8</b></span></td>





                            


                            <td>556<br><span><b>6</b></span></td>





                            


                            <td>260<br><span><b>8</b></span></td>





                            


                            <td>680<br><span><b>4</b></span></td>





                            


                            <td>269<br><span><b>7</b></span></td>





                            


                            <td>489<br><span><b>1</b></span></td>





                            


                            <td>100<br><span><b>1</b></span></td>





                            


                            <td>890<br><span><b>7</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">02-10-2020<br></td>

                            


                            <td>790<br><span><b>6</b></span></td>





                            


                            <td>558<br><span><b>8</b></span></td>





                            


                            <td>579<br><span><b>1</b></span></td>





                            


                            <td>139<br><span><b>3</b></span></td>





                            


                            <td>290<br><span><b>1</b></span></td>





                            


                            <td>467<br><span><b>7</b></span></td>





                            


                            <td>360<br><span><b>9</b></span></td>





                            


                            <td>789<br><span><b>4</b></span></td>





                            


                            <td>478<br><span><b>9</b></span></td>





                            


                            <td>130<br><span><b>4</b></span></td>





                            


                            <td>147<br><span><b>2</b></span></td>





                            


                            <td>112<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">03-10-2020<br></td>

                            


                            <td>789<br><span><b>4</b></span></td>





                            


                            <td>237<br><span><b>2</b></span></td>





                            


                            <td>690<br><span><b>5</b></span></td>





                            


                            <td>280<br><span><b>0</b></span></td>





                            


                            <td>247<br><span><b>3</b></span></td>





                            


                            <td>125<br><span><b>8</b></span></td>





                            


                            <td>990<br><span><b>8</b></span></td>





                            


                            <td>129<br><span><b>2</b></span></td>





                            


                            <td>567<br><span><b>8</b></span></td>





                            


                            <td>257<br><span><b>4</b></span></td>





                            


                            <td>166<br><span><b>3</b></span></td>





                            


                            <td>255<br><span><b>2</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">04-10-2020<br></td>

                            


                            <td>379<br><span><b>9</b></span></td>





                            


                            <td>160<br><span><b>7</b></span></td>





                            


                            <td>479<br><span><b>0</b></span></td>





                            


                            <td>369<br><span><b>8</b></span></td>





                            


                            <td>156<br><span><b>2</b></span></td>





                            


                            <td>550<br><span><b>0</b></span></td>





                            


                            <td>259<br><span><b>6</b></span></td>





                            


                            <td>345<br><span><b>2</b></span></td>





                            


                            <td>457<br><span><b>6</b></span></td>





                            


                            <td>279<br><span><b>8</b></span></td>





                            


                            <td>590<br><span><b>4</b></span></td>





                            


                            <td>699<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">05-10-2020<br></td>

                            


                            <td>340<br><span><b>7</b></span></td>





                            


                            <td>338<br><span><b>4</b></span></td>





                            


                            <td>229<br><span><b>3</b></span></td>





                            


                            <td>589<br><span><b>2</b></span></td>





                            


                            <td>670<br><span><b>3</b></span></td>





                            


                            <td>269<br><span><b>7</b></span></td>





                            


                            <td>556<br><span><b>6</b></span></td>





                            


                            <td>128<br><span><b>1</b></span></td>





                            


                            <td>249<br><span><b>5</b></span></td>





                            


                            <td>138<br><span><b>2</b></span></td>





                            


                            <td>270<br><span><b>9</b></span></td>





                            


                            <td>369<br><span><b>8</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">06-10-2020<br></td>

                            


                            <td>690<br><span><b>5</b></span></td>





                            


                            <td>470<br><span><b>1</b></span></td>





                            


                            <td>270<br><span><b>9</b></span></td>





                            


                            <td>278<br><span><b>7</b></span></td>





                            


                            <td>377<br><span><b>7</b></span></td>





                            


                            <td>147<br><span><b>2</b></span></td>





                            


                            <td>137<br><span><b>1</b></span></td>





                            


                            <td>490<br><span><b>3</b></span></td>





                            


                            <td>470<br><span><b>1</b></span></td>





                            


                            <td>125<br><span><b>8</b></span></td>





                            


                            <td>770<br><span><b>4</b></span></td>





                            


                            <td>234<br><span><b>9</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">07-10-2020<br></td>

                            


                            <td>155<br><span><b>1</b></span></td>





                            


                            <td>159<br><span><b>5</b></span></td>





                            


                            <td>580<br><span><b>3</b></span></td>





                            


                            <td>138<br><span><b>2</b></span></td>





                            


                            <td>249<br><span><b>5</b></span></td>





                            


                            <td>589<br><span><b>2</b></span></td>





                            


                            <td>239<br><span><b>4</b></span></td>





                            


                            <td>567<br><span><b>8</b></span></td>





                            


                            <td>268<br><span><b>6</b></span></td>





                            


                            <td>340<br><span><b>7</b></span></td>





                            


                            <td>470<br><span><b>1</b></span></td>





                            


                            <td>890<br><span><b>7</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">08-10-2020<br></td>

                            


                            <td>559<br><span><b>9</b></span></td>





                            


                            <td>115<br><span><b>7</b></span></td>





                            


                            <td>345<br><span><b>2</b></span></td>





                            


                            <td>110<br><span><b>2</b></span></td>





                            


                            <td>678<br><span><b>1</b></span></td>





                            


                            <td>140<br><span><b>5</b></span></td>





                            


                            <td>359<br><span><b>7</b></span></td>





                            


                            <td>245<br><span><b>1</b></span></td>





                            


                            <td>389<br><span><b>0</b></span></td>





                            


                            <td>677<br><span><b>0</b></span></td>





                            


                            <td>124<br><span><b>7</b></span></td>





                            


                            <td>568<br><span><b>9</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">09-10-2020<br></td>

                            


                            <td>360<br><span><b>9</b></span></td>





                            


                            <td>359<br><span><b>7</b></span></td>





                            


                            <td>127<br><span><b>0</b></span></td>





                            


                            <td>156<br><span><b>2</b></span></td>





                            


                            <td>237<br><span><b>2</b></span></td>





                            


                            <td>299<br><span><b>0</b></span></td>





                            


                            <td>350<br><span><b>8</b></span></td>





                            


                            <td>135<br><span><b>9</b></span></td>





                            


                            <td>349<br><span><b>6</b></span></td>





                            


                            <td>239<br><span><b>4</b></span></td>





                            


                            <td>129<br><span><b>2</b></span></td>





                            


                            <td>457<br><span><b>6</b></span></td>





                            
                        </tr>

                        
                                <tr>  

                                    <td class="dateFirst">10-10-2020<br></td>

                            


                            <td>370<br><span><b>0</b></span></td>





                            


                            <td>789<br><span><b>4</b></span></td>





                            


                            <td>358<br><span><b>6</b></span></td>





                            


                            <td>245<br><span><b>1</b></span></td>





                            


                            <td>227<br><span><b>1</b></span></td>





                            


                            <td>300<br><span><b>3</b></span></td>





                            


                            <td>790<br><span><b>6</b></span></td>





                            


                            <td>259<br><span><b>6</b></span></td>





                            


                            <td>119<br><span><b>1</b></span></td>





                            


                            <td>147<br><span><b>2</b></span></td>





                            


                            <td>440<br><span><b>8</b></span></td>





                            


                            <td>680<br><span><b>4</b></span></td>





                            
                        </tr>

                        
                        <tr>
                            <td class="dateFirst">11-10-2020<br></td>
                            <td>260<br><span><b>8</b></span></td>
                            <td>237<br><span><b>2</b></span></td>
                            <td>259<br><span><b>6</b></span></td>
                            <td>800<br><span><b>8</b></span></td>
                            <td>138<br><span><b>2</b></span></td>
                            <td>167<br><span><b>4</b></span></td>
                            <td>157<br><span><b>3</b></span></td>
                            <td>357<br><span><b>5</b></span></td>
                            <td>127<br><span><b>0</b></span></td>
                            <td>560<br><span><b>1</b></span></td>
                            <td>690<br><span><b>5</b></span></td>
                            <td>246<br><span><b>2</b></span></td>
                        </tr>

                        
                                
     
 <?php for($i=1;$i<=$total_pages;$i++){ ?>    
 <tr>
<td class="dateFirst"><?php echo $newDate = date("d-m-Y", strtotime($fdate)); ?><br></td>
 <?php foreach ($arr as $key => $value) {
     $fval="***";
     $lval="*";
$qry_re="select * from `starline_result` where `gid`='$value[id]' and `date`='$fdate'";
$query_re=mysqli_query($link,$qry_re);
$cou=mysqli_num_rows($query_re);
if($cou>0){
$row_re=mysqli_fetch_assoc($query_re);

$fval=$row_re['fval'];
$lval=$row_re['mval'];
}
 ?>

 
<td><?php echo $fval ; ?><br><span><b><?php echo $lval; ?></b></span></td>
 
 
 <?php }  ?>
 
 </tr>
 
 <?php  $fdate=date('Y-m-d', strtotime($fdate .' +1 day'));   } ?>
 </tbody>

                        
                            </tbody>

                        </table>




<div style="margin-top:10px;border:2px ;">
<div>
    <a href="" class="reload">Refresh</a>
</div>


 
</b></div>

<br><br> 
<div align="center"> <a href="#top" style="top: 70px;right: 10px;z-index: 99;border: none;outline: none;background-color: 
    #428bca;color: #fff;cursor: pointer;padding: 10px;border-radius: 3px;text-decoration:none; font-size: large; font-weight: 700; font-family:Calibri;">Go To Top</a>
</div>
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
.reload
{
    color: #fff;
    position: fixed;
    right: 40px;
    bottom: 40px;
    background: #d61a1a;
    padding: 10px 30px;
    display: inline-block;
    text-decoration: none;
    border-radius: 5px;
}
@media only screen and (max-width:991px){
	table.kalyanWhite tr th{
		padding:1px;
		border:1px solid #000;
		font-size:11px;
	}
	.dateFirst {
	    font-size: 9px !important;
	}
	table.kalyanWhite tr td span {
	    font-size: 14px;
	}
	table.kalyanWhite tr td{
		padding:0px;
		border:1px solid #000;
		font-size:11px;
	}

	.kalyanWhitePanel{width:100%!important;}
	.dnd-container{
		padding-left:15px;
		padding-right:15px;
		margin:0 auto;
	}
	table.balajiTable tr td{padding:2px;font-size:20px;}
}
@media only screen and (max-width:991px){
 body
 {
     
 }
}
</style>
</html>