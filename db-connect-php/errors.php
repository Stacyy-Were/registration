<?php

    if(isset($_SESSION['error'])){
        foreach($_SESSION['error'] as $ele):
            echo $ele;
        endforeach;

    }
?>
