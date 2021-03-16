<?php



// -------- Renvoi des messages

function error ($value){
    foreach ($value as $error){
        echo '<div class="errorMessage">' , $error , '</div>' ;
        }
}


// -------- 

