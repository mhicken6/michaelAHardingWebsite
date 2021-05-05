<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>MichaelAHardingActor</title>
    <link rel="stylesheet" href="stylesheet.css" />
    <script
      src="https://kit.fontawesome.com/8c1dbf8980.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="https://use.typekit.net/dwe4jnn.css" />
  </head>
  <body>
    <div class="gridContainer">
      <div class="Hleft1"></div>

    <?php 
        include 'logo.php';
        include 'nav.php'; 
    ?>

      

      

     

      <div class="Hright1"></div>
      <div class="Hleft2"></div>

      <div id="WShero"></div>
      <h1 class="WSheroText">
        Work Services
      </h1>
      <!--Work Service Blocks*/-->
      <div class="Hright2"></div>
      <div class="Hleft3"></div>
      <!--Acting-->
      <div class="WSStageActingClickable">
        <a href="#WSStageActingBookmark">
          <div class="WSstageActingBlock">
            <i class="fas fa-theater-masks fa-5x"> </i>

            <h2 class="StageActingBlockP">Stage Acting</h2>
          </div>
        </a>
      </div>
      <!--Directing-->
      <div class="WSDirectingClickable">
        <a href="#WSDirectingBookmark">
          <div class="WSDirectingBlock">
            <i class="fas fa-bullhorn fa-5x"> </i>
            <h2 class="WSDirectingBlockP">Directing</h2>
          </div>
        </a>
      </div>
      <!--VO-->
      <div class="WSVOClickable">
        <a href="#WSVOBookmark">
          <div class="WSVOBlock">
            <i class="fas fa-microphone-alt fa-5x"></i>
            <h2 class="WSVOBlockP">Voice Overs</h2>
          </div>
        </a>
      </div>

      <!--Body-->
      <!--Stage Acting-->
      <div id="WSStageActingBookmark" class="WSStageActingGrey"></div>
      <h2 class="WSStageActing">Stage Acting</h2>
      <p class="WSSStageActingP">
        I have over 25 years of theatre acting and have acted for theaters in
        the United Kingdom and across the United States.
      </p>

      <div class="cta-WSARwrapper">
        <a class="cta-WSAR" target="_blank" href="2018ActingResume.pdf"
          >Full Acting Resume</a
        >
      </div>
      <div class="WSSStageActingGreyBox"></div>

      <div class="WSStageActingGreyPict"></div>
      <!--Directing-->

      <div class="WSDirectingGrey"></div>

      <p class="WSSDirectingWhiteP">
        I have directed plays at a collegiate and professional level. I also
        write my own plays. Check out my Directing Resume below!
      </p>

      <h2 id="WSDirectingBookmark" class="WSSDirectingWhite">Directing</h2>
      <div class="WSDirectingyWhiteBox"></div>

      <div class="WSSDirectingyWhitePict"></div>

      <div class="cta-WSDRwrapper">
        <a
          class="cta-WSDR"
          target="_blank"
          href="MichaelA.Harding-DirectingResume.pdf"
          >Full Directing Resume</a
        >
      </div>

      <!--VO-->
      <div id="WSVOBookmark" class="WSVOGrey"></div>
      <h2 class="WSVOGreyTitle">Voice Acting</h2>
      <div class="WSVOGreyBox"></div>
      <p class="WSVOGreyP">
        I have lent my voice for several books and commercials. Click here to
        check out more samples and demos!
      </p>
      <div class="cta-WSV0Rwrapper">
        <a class="cta-WSV0R " href="voiceOvers.html">Voice Overs</a>
      </div>
      <h5 class="WSlilaLama">Lila The Llama</h5>
      <audio controls class="WSAudioControls">
        <source src="LilatheLlama.ogg" type="audio/ogg" />
        <source src="LilatheLlama.mp3" type="audio/mpeg" />
        Your browser does not support the audio element.
      </audio>

      <!--Gallery-->
      <h2 class="WSGalleryTitle ">Gallery</h2>
      <div class="WSGalleryBox"></div>
      <div class="gallery">
        <!--Image 1 -->
        <div class="Nested1">
          <img
            src="websiteContentOpt/ACocoanuts-3631-min.jpg"
            id="Image1ID"
            class="Image1"
            alt="Cherry"
          />
        </div>
        <!--
        <div id="Image1ModalID" class="Image1ModalClass">
          <span class="close">&times;</span>
          <img class="Image1Modal-Content" id="img01" />
        </div>
-->
        <!--Image 2 -->
        <div class="Nested2">
          <img
            src="websiteContentOpt/DComedy-8961-min.jpg"
            class="Image2"
            alt="DComedy"
          />
        </div>
        <div class="Nested3">
          <img
            src="websiteContentOpt/Cherry1-min.jpg"
            class="Image3"
            alt="Cherry"
          />
        </div>

        <div class="Nested4">
          <img
            src="websiteContentOpt/AMaryPoppins-1669-min.jpg"
            class="Image4"
            alt="Mary Poppins"
          />
        </div>
        <div class="Nested5">
          <img
            src="websiteContentOpt/DMeasure-7382-min.jpg"
            class="Image5"
            alt="DComedy"
          />
        </div>
        <div class="Nested6">
          <img
            src="websiteContentOpt/DHenryIVOne-1541-min.jpg"
            class="Image6"
            alt="DMeasure"
          />
        </div>
      </div>

      <div class="cta-WSCMwrapper">
        <a class="cta-WSCM" href="contact.html">Contact Me</a>
      </div>
      <div class="WSendBuffer"></div>
    
    <!--
    <script>
      var modal = document.getElementById("Image1ModalID");
      var img = document.getElementById("Image1ID");
      var modalImg = document.getElementById((id = "img01"));
      img.onclick = function() {
        modal.style.display = "block";
        modalImg.src = this.src;
        var span = document.getElementsByClassName("closee")[0];
        span.onclick = function() {
          modal.style.display = "none";
        };
      };
    </script>
    -->

  
    <?php
      include 'mobileNav.php';   
    ?>

</div>

    <?php
      include 'footer.php';
    ?>
    
    
  </body>
</html>
