<!DOCTYPE html>
<html lang="en">
<?php
include('./modules/head.php');
?>

<body>
  <?php
  include('./modules/header.php');
  ?>
  <!-- Main container with biographyi, profile img, interests and social media -->
  <main class="main-container flex" id="biography">

    <!-- Containing image of myself with title and social links -->
    <div class="flex main-container-left">
      <img src="./img/profilepicture.jpeg" alt="Billede af mig, Tobias" class="profile-img">
      <h2>Tobias Neergaard Olesen</h2>
      <h5>Multimediadesigner, Webudvikler</h5>

      <!-- Socials -->
      <ul class="social-links flex">
        <!-- Insert logos instead of links -->
        <li class="social-link flex flex-center"><a href="https://github.com/toby044" target="_blank"><img src="./img/icons/iconmonstr-github-1.svg"></a></li>
        <li class="social-link flex flex-center"><a href="https://www.linkedin.com/in/tobias-olesen-097b61167/" target="_blank"><img src="./img/icons/iconmonstr-linkedin-3.svg"></a></li>
        <li class="social-link flex flex-center"><a href="./cv/cv.pdf" target="_blank"><img src="./img/icons/iconmonstr-cv-4.svg"></a></li>
      </ul>
    </div>

    <!-- Containing descriptions of myself and my interests -->
    <div class="flex main-container-right">
      <h2>Biography</h2>
      <div class="flex biography-dates">
        <ul class="biography-dates-fat">
          <li>1997</li>
          <li>2021</li>
        </ul>
        <ul class="biography-dates-slim">
          <li>Born in Tønder, Denmark</li>
          <li>Completed Multimediadesigner AK at IBA, Erhvervsakademi Kolding</li>
        </ul>
      </div>

      <p>
        Odio morbi quis commodo odio aenean sed adipiscing diam donec. Ullamcorper eget nulla facilisi etiam dignissim diam quis enim lobortis. Eu facilisis sed odio morbi quis commodo odio. Et netus et malesuada fames. Ac placerat vestibulum lectus mauris ultrices eros in cursus turpis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames. Aliquam sem et tortor consequat. Imperdiet dui accumsan sit amet nulla facilisi morbi. Non tellus orci ac auctor augue mauris augue. Suspendisse sed nisi lacus sed viverra. Duis at tellus at urna condimentum mattis. In nisl nisi scelerisque eu. Neque vitae tempus quam pellentesque. Scelerisque varius morbi enim nunc faucibus a pellentesque.
      </p>
      <br>

      <!-- Interest and hobbies -->
      <h2>Interests and hobbies</h2>
      <div class="flex ih-container">
        <ul class="interests-list">
          <li class="interests-list-item">Front-end Development</li>
          <li class="interests-list-item">Developer frameworks</li>
          <li class="interests-list-item">Progressive webapps</li>
          <li class="interests-list-item">Library reuseability</li>
        </ul>
        <ul class="hobbies-list">
          <li class="hobbies-list-item">Tabletennis</li>
          <li class="hobbies-list-item">Computers</li>
          <li class="hobbies-list-item">Roadtrips</li>
          <li class="hobbies-list-item">Design</li>
        </ul>
      </div>

      <!-- Education -->
      <div class="h2-container flex">
        <h2>Education</h2>
        <img src="./img/icons/iconmonstr-education-1.svg">
      </div>
      <ul class="edu-list">
        <li class="edu-list-item">
          <h3>Professionsbachelor i Webudvikling</h3>
          <h5>IBA Erhvervsakademi Kolding</h5>
        </li>
        <li class="edu-list-item">
          <h3>Multimediedesigner AK</h3>
          <h5>IBA Erhvervsakademi Kolding</h5>
        </li>
        <li class="edu-list-item">
          <h3>Teknologi A, Design B</h3>
          <h5>Vejle Tekniske Gymnasium</h5>
        </li>
      </ul>
    </div>
  </main>
  <div id="projects-hop"></div>
  <div class="projects-container flex" id="projects-container">
    <div class="projects-container-left">
      <h2>Projects</h2>
    </div>
    <div class="projects-container-right">
    </div>
  </div>

  <footer>
    <h4>Contact</h4>
    <ul class="contact-list" id="contact-list">
      <li class="contact-list-item">Email: tnowebdk@gmail.com</li>
      <li class="contact-list-item">Phone: +45 22 21 79 24</li>
    </ul>
  </footer>
</body>

</html>