<table>               
                
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
    
$f = fopen("results.csv", "r");
$counter = 0;
while (($line = fgetcsv($f)) !== false) {
    
  if (strlen($line[0]) > 21){
        $word = substr($line[0], 0, 18).'...';
     }
  else {
        $word = $line[0];
    }
    
    if ($counter == 0){ 
        ?>
         <tr>
        <?php
     
    }
    $sum = (int)$line[3]+(int)$line[4]+(int)$line[5];
    ?>
    <td>
    <div class="tooltip"> 
      
        <a class = "word" href = "https://twitter.com/">

    <?php 
        echo $word; 
    ?> 
        <span class="tooltiptext">
    <?php
        if ($line[3] == 0 && $line[4] ==0 && $line[5] == 0 ){
            echo "no votes";
        }
        else{
            ?>
            <img class = "thumb" src = "thumbsUp.gif" alt = "idk">
            <?php
            echo (round($line[3]/$sum, 2)*100)."%";
            echo "<br>";
            ?>
            <img class = "thumb" src = "sideways.gif" alt = "idk">
            <?php
            echo (round($line[4]/$sum, 2)*100)."%";
            echo "<br>";
            ?>
            <img class = "thumb" src = "thumbsDown.gif" alt = "idk">
            <?php
            echo (round($line[5]/$sum, 2)*100)."%";
        }


    ?>      
    </span>
    </div>    
    </a>
    </td>    
      <td class= "second">
            <span class = "image_container"><img class = "thumb" src = 
                                                 
            <?php
    
            if ($line[2] > 0.1){
                    echo "thumbsUp.gif";
            }
            else if ($line[2] > -0.5 && $line[2] < 0.1){
                    echo "sideways.gif";

            }
            else{
                echo "thumbsDown.gif";

            }
    
            ?>
            height = "1" width = "1"></span>
    </td>
    <?php
    if ($counter == 2){    
        ?>
        </tr>
        <?php
        $counter = 0;
      
    } 
    else{
            $counter++;               

    }
}
fclose($f);
    
?>
<!--PHP ends-->
</table> 