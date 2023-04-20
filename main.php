<?php
$titulo = $_REQUEST["titulo"];
$nota  = $_REQUEST["nota"];

echo " 
 <form action ='inicio.php'>
     <div style='border: 2px solid; width: 300px; background-color: #0093E9;
    background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 24%, #f5eaea 49%, #68bf68 75%, #406d3a 100%);
    
    '>
        <div style=''> 
            
            <p name='nota' style=''>$titulo </p>
        </div>
        <div stytle=''>
            <p name='notas' style =''>$nota</p>
        </div>
    </div>
 </form>
 "
 # print_r($_REQUEST);
 # background-color: #8EC5FC;background-image: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);margin-left:116px ; width:369px;'>
 #background-color: rgba(255, 255, 255, 0.8);

?>