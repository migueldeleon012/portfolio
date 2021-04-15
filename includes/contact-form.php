<?php
    //check submit btn clicked
    if (isset($_POST['submit'])){
        
        //datas from form
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        //check if inputs are empty
        if(empty($name) || empty($email) || empty($message)){
            header('Location: ../index.php?form=empty');
            exit();
        } else{

            //check name
            if(!str_contains($name, ' ') || strlen($name) < 2){
                header('Location: ../index.php?form=invalidname');
                exit();
            } else{

                //check email
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    header('Location: ../index.php?form=invalidemail');
                    exit();
                } else{
                    
                    //check message
                    if(strlen($message) < 2){
                        header('Location: ../index.php?form=invalidmessage');
                        exit();
                    } else{
                        // $mailTo = 'miguelangelodeleon';
                        // $subject = 'from portfolio';
                        // $header = "From: $email";
                        // $text = "You have received an email from $header \n\n $message";

                        // mail($mailTo, $subject, $text, $header);
                        // header("Location : ../index.php?form=success");
                        exit();
                    }
                }
            }
        }

    } else{
        header('Location: ../index.php?form=error');
        exit();
    }

?>