<?php
      
        $name = $_POST['name'];
        $visitor_email = $_POST['email'];
        $message = $_POST['message'];

        $to = "meg.hicken@dmail.dixie.edu";
        $subject = "new message from $name";
        
        
        mail($to,$subject,$message,$visitor_email);




    ?>