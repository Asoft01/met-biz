<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h5>Contact Us</h5>
        <ul>
          <h4 class="inc">London</h4>
          <p>Academic Head Office:</p>
          <li>Floor 37,</li>
          <li>One Canada Square,</li>
          <li>E14 5DY, Canary Wharf,</li>
          <li>London, United Kingdom</li>
          <li></li>
          <!-- <li>Phone: +44 (0) 207 712 1588</li>
          <li>Email: info@msbm.org.uk</li> -->
        </ul>
        <ul>
          <h4 class="inc">Dubai</h4>
          <p>Administrative Head Quarters</p>
          <li>Floor 6,</li>
          <li>Business Village Block B,</li>
          <li>Opposite Clock Tower,</li>
          <li>Port Saeed, Dubai,</li>
          <li>United Arab Emirates.</li>
          <!-- <li>Phone: +44 (0) 207 712 1588</li>
          <li>Email: info@msbm.org.uk</li> -->
        </ul>

      </div>
      <div class="col-md-3">
        <h5>Programmes</h5>
        <ul>
          <li><a href="">Doctorate Degree</a></li>
          <li><a href="">Master's Degree</a></li>
          <li><a href="">Postgraduate Diploma (Level 7)</a></li>
          <li><a href="">International Postgraducate Diploma (Level 7)</a></li>
          <li><a href="">Bachelor's Degree</a></li>
          <li><a href="">Undergraducate Degree</a></li>
          <li><a href="">Diploma (Level 4 and 5)</a></li>
          <li><a href="">International Higher Diploma (Level 4 and 5)</a></li>
          <li><a href="">Executive Education Programmes</a></li>
          <li><a href="">Special Executive Masters Programmes</a></li>
          <li><a href="">Professional Certificate Programmes</a></li>

        </ul>
      </div>
      <div class="col-md-3">
        <h5>More</h5>
        <ul>
          <li><a href="">Policies</a></li>
          <li><a href="">Refund Policy</a></li>
          <li><a href="">Accessibility Policy</a></li>
          <li><a href="">Privacy Policy</a></li>
          <li><a href="">Admission Policy</a></li>
          <li><a href="">Terms and Conditions</a></li>
          <li><a href="">FAQ</a></li>
          <li><a href="">Blog</a></li>
          <li><a href="">Contact Us</a></li>
          <li><a href="">Become an Agent</a></li>
          <li><a href="">Get a Franchise</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h5>Stay Connected</h5>
        <form>
          <div class="form-group">
            <ul>
              <li>
                Keep up to date with industry insights and latest news
              </li>
            </ul>
            <input type="email" class="form-control form-control-sm" id="exampleInputEmail1" placeholder="Email Address" aria-describedby="emailHelp">
          </div>

          <button type="submit" class="btn btn-light btn-sm">
            Subscribe
          </button>
        </form>
        <div class="row mt-3">

          <div class="col-md-12">
            <ul class="ok mt-3">
              <li><a href=""><i class="fa fa-facebook fa-2x"></i></a></li>
              <li><a href=""><i class="fa fa-twitter fa-2x"></i></a></li>
              <li><a href=""><i class="fa fa-linkedin fa-2x"></i></a></li>
              <li><a href=""><i class="fa fa-instagram fa-2x"></i></a></li>
              <li><a href=""><i class="fa fa-youtube fa-2x"></i></a></li>
              <li><a href=""><i class="fa fa-pinterest fa-2x"></i></a></li>
            </ul>
          </div>
          <div class="col-md-12 mb-2 mt-2">
            <img src="<?php echo ROOT_DIR; ?>images/White-Logo-1.svg" width="200">
          </div>
        </div>
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-md-2 col-4 mb-2 mt-2">
        <img src="<?php echo ROOT_DIR; ?>images/Logos/Black and White/ATHE.svg" class="img-fluid" width="200">
      </div>
      <div class="col-md-2 col-4 mb-2 mt-2">
        <img src="<?php echo ROOT_DIR; ?>images/Logos/Black and White/BAA.svg" class="img-fluid" width="200">
      </div>
      <div class="col-md-2 col-4 mb-2 mt-2">
        <img src="<?php echo ROOT_DIR; ?>images/Logos/Black and White/NUS.svg" class="img-fluid" width="200">
      </div>
      <div class="col-md-2 col-4 mb-2 mt-2">
        <img src="<?php echo ROOT_DIR; ?>images/Logos/Black and White/OTHM.svg" class="img-fluid" width="200">
      </div>
      <div class="col-md-2 col-4 mb-2 mt-2">
        <img src="<?php echo ROOT_DIR; ?>images/Logos/Black and White/QUALIFI.svg" class="img-fluid" width="200">
      </div>
      <div class="col-md-2 col-4 mb-2 mt-2">
        <img src="<?php echo ROOT_DIR; ?>images/Logos/Black and White/UKRPL.svg" class="img-fluid" width="200">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <p>Copyright © Metropolitan School of Business &amp; Management UK</p>
      </div>
    </div>
  </div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?php echo ROOT_DIR; ?>js/jquery.js"></script>
<script src="<?php echo ROOT_DIR; ?>js/bootstrap.bundle.min.js"></script>
<script src="<?php echo ROOT_DIR; ?>js/Chart.min.js"></script>
<script src="<?php echo ROOT_DIR; ?>js/script.js"></script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>tinymce.init({selector:'textarea'});</script>
<script>
  $(function() {
    $(window).scroll(function() {
      if ($(this).scrollTop() > 70) {
        $(".pro-sticky-top.navigator .navbar-brand img").attr(
          "src",
          "<?php echo ROOT_DIR; ?>images/White-Logo-1.png"
        );
      }
      if ($(this).scrollTop() < 70) {
        $(".pro-sticky-top.navigator .navbar-brand img").attr(
          "src",
          "<?php echo ROOT_DIR; ?>images/White-Logo-1.svg"
        );
      }
    });
  });
  
</script>

</body>

</html>