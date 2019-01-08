<table>    
                
                
<!--PHP BEGINS                -->
<?php
$f = fopen("results.csv", "r");
//print_r(fgetcsv($f));
$fp = file('results.csv');
    
for ($i = 0; $i < count($fp)/4; $i++){
    ?>
    <tr>
    <?php
    for ($j = 0; $j <  4; $j++){
        //get next line
        $line = fgetcsv($f)
         if (strlen($line[0]) > 21){
            $word = substr($line[0], 0, 18).'...';
         }
          else {
            $word = $line[0];
         }
//        echo $word;
//        if ($line[2] > 0.5){
//            $img = "thumbsUp.gif";
//
//        }
//        if ($line[2] < -0.05){
//            $img = "sideways.gif";
//
//        }
//        else{
//            $img = "sideways.gif";
//
//            
//        }
        //make table row
        ?>
           <td >
               
<!--                <a class = "word" href = "https://twitter.com/"> <?php $word  ?> </a>-->
               
        </td>   
<!--
            </td>
            <td class ="second">
                <span class = "image_container"><img src =   height = "1" width = "1"></span>
            </td>
--> 
        <?php
        
    }
    //end table row
    ?>
    </tr> 
<?php
}
fclose($f);

?>
</table>

 