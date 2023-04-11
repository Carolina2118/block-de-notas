<?php
$titulo = $_REQUEST["titulo"];
$nota  = $_REQUEST["nota"];

echo " 
 <form action ='index.php '>
 <div style = 'background-color: #8EC5FC;
 background-image: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);margin-left:116px ; width:369px;
 '>
 <p name='nota'>$titulo </p>
 <p name='nota'style= 'background-color: #8EC5FC;
 background-image: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);
 '>$nota</p>
 </div> 
 </form>
 "
# print_r($_REQUEST);


?>