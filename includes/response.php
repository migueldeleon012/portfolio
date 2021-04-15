<?php
    // $fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    // if (strpos($fullURL, 'form=invalidname') == true){
    //     echo '<div>';
    // }

    if(!isset($_GET['form'])){
        exit();
    } else{
        $formCheck = $_GET['form'];

        if($formCheck == 'empty'){
            echo 'hello';
            exit();
        } elseif($formCheck == 'invalidname'){
            echo 'invalid name';
            exit();
        } elseif($formCheck == 'invalidemail'){
            echo 'invalid email';
            exit();
        } elseif($formCheck == 'invalidmessage'){
            echo 'invalid message';
            exit();
        } elseif($formCheck == 'success'){
            echo 'mail sent';
            exit();
        } 
    }