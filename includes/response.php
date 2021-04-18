<?php
    if(strpos($fullUrl, 'form=empty')){
        echo '<div style=" 
                background-color:rgba(189, 19, 19, 0.5); 
                display:flex; 
                justify-content:center; 
                align-items:center;
                transform: translateY(80px);
                width: 50%;
                border-radius: 5px;
                height: 5vh;
            ">
                <h4 style="color:white; padding:10px;">Form empty</h4>
            </div>';
    } 
    elseif(strpos($fullUrl, 'form=invalidname')){
        echo '<div style=" 
                background-color:rgba(189, 19, 19, 0.5); 
                display:flex; 
                justify-content:center; 
                align-items:center;
                transform: translateY(80px);
                width: 50%;
                border-radius: 5px;
                height: 5vh;
            ">
                <h4 style="color:white; padding:10px;">Please enter a valid name</h4>
            </div>';
    } 
    elseif(strpos($fullUrl, 'form=invalidemail')){
        echo '<div style=" 
                background-color:rgba(189, 19, 19, 0.5); 
                display:flex; 
                justify-content:center; 
                align-items:center;
                transform: translateY(80px);
                width: 50%;
                border-radius: 5px;
                height: 5vh;
            ">
                <h4 style="color:white; padding:10px;">Please enter a valid name</h4>
            </div>';
    } 
    elseif(strpos($fullUrl, 'form=invalidmessage')){
        echo '<div style=" 
                background-color:rgba(189, 19, 19, 0.5); 
                display:flex; 
                justify-content:center; 
                align-items:center;
                transform: translateY(80px);
                width: 50%;
                border-radius: 5px;
                height: 5vh;
            ">
                <h4 style="color:white; padding:10px;">Message too short</h4>
            </div>';
    } 
    elseif(strpos($fullUrl, 'form=success')){
        echo '<div style=" 
                background-color: rgba(15, 148, 15, 0.5);
                display:flex; 
                justify-content:center; 
                align-items:center;
                transform: translateY(80px);
                width: 50%;
                border-radius: 5px;
                height: 5vh;
            ">
                <h4 style="color:white; padding:10px;">Message sent!</h4>
            </div>';
    } 

?>