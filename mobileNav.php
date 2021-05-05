<!-- Mobile Navigation Overlay tutorial from "https://www.w3schools.com/howto/howto_js_fullscreen_overlay.asp"-->

<div id="mobileNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"
          >&times;
        </a>

        <div class="overlay-content">
          <a href="index.html">Home</a>
          <a href="workservices.html">Work Services</a>
          <a href="voiceOvers.html">Voice Overs</a>
          <a href="resume.html">Resume</a>
          <a href="contact.html">Contact Me</a>
        </div>
      </div>
      <span class="hamburger" onclick="openNav()"
        ><i class="fas fa-bars fa-4x"></i
      ></span>

      <!-- end of Mobile Nav-->

      <!-- Mobile Javascript tutorial https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_overlay -->
    <script>
      function openNav() {
        document.getElementById("mobileNav").style.width = "100%";
      }

      function closeNav() {
        document.getElementById("mobileNav").style.width = "0%";
      }
    </script>