<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style3.css" type="text/css" media="all" />
    <title>Document</title>
    <link rel="stylesheet" href="https://use.typekit.net/yts0dkn.css" />
    <script
        src="https://kit.fontawesome.com/8c1dbf8980.js"
        crossorigin="anonymous"></script>
  </head>

  <body>
    <div id="gridContainer2">
      <div class="left1"></div>
        
    <?php 
        include 'logo.php';
        include 'nav.php'; 
    ?>
    

      <div class="Cright1"></div>

      <div class="heroarea"></div>

      <h1 class="contactWord">Contact Me</h1>

      <div class="actorImage"></div>

      <div class="contactDescription">
        I would love to hear from you! Enter your <br /><br />
        name, email, and message below. Thank You!!
      </div>

      <div class="backgroundColor"></div>

     



      <form class = "contact-form" action="contact.php" method="post">
        Name:<input class="nameInput" type="text" name="name" placeholder="Enter name here"/>
        Email:<input class="emailInput" type="email" name="email" placeholder="email@email.com" />
        Comments:<textarea name="message" placeholder="type message here"></textarea>
      
        <input type="submit" name="submit" value="Submit" class="submit3" ></input>
      </form> 

    <?php
        
        $name = $_POST['name']; 
        $visitor_email = $_POST['email'];
        $message = $_POST['message'];

        $to = "meg.hicken@dmail.dixie.edu";
        $subject = "new message from $name";
        
        if ($_POST['submit']) {
        mail($to,$subject,$message, $visitor_email);
        }

    ?>
    
    
    <?php
        include 'mobileNav.php';
    ?>

</div>
    
    <?php
        include 'footer.php';   
    ?>

  
  </body>
</html>
