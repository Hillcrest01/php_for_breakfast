<?php 

//switch is a replacement to using many elseif 
//statements more efficiently, less code to write.

$grade = 'f';


switch($grade){
    case "A":
        echo"you did great";
        break;

    case "B":
        echo"you did good";
        break;

    default:
        echo "{$grade} is not a valid grade!";
}

?>