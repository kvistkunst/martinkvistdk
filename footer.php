<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-3 footer-box wow fadeInUp">
                <h4>About Me</h4>
                <div class="footer-box-text">
                  <p>
                    Pursuing a better understanding of injury causality, prevention,
                    and performance enhancement in acrobatic sports...
                  </p>
                  <p><a href="about.php">Read more...</a></p>
                </div>
            </div>
            <div class="col-sm-3 footer-box wow fadeInDown">
                <h4>Email Updates</h4>
                <div class="footer-box-text footer-box-text-subscribe">
                  <p>Enter your email and you'll be one of the first to get new updates:</p>
                  <form role="form" action="assets/subscribe.php" method="post">
                  <div class="form-group">
                    <label class="sr-only" for="subscribe-email">Email address</label>
                      <input type="text" name="email" placeholder="Email..." class="subscribe-email" id="subscribe-email">
                    </div>
                    <button type="submit" class="btn">Subscribe</button>
                </form>
                <p class="success-message"></p>
                <p class="error-message"></p>
                </div>
            </div>
        <!--    <div class="col-sm-3 footer-box wow fadeInUp">
                <h4>Flickr Photos</h4>
                <div class="footer-box-text flickr-feed"></div>
            </div> -->
            <div class="col-sm-3 footer-box wow fadeInDown">
                <h4>Contact Us</h4>
                <div class="footer-box-text footer-box-text-contact">
                  <p><i class="fa fa-map-marker"></i> Address: Vester Vænge Alle 33, 9000, Aalborg, Nordjylland, Denmark</p>
                  <p><i class="fa fa-phone"></i> Phone: (+45) 42175064</p>
                  <p><i class="fa fa-user"></i> Skype: mkvist11</p>
                  <p><i class="fa fa-envelope"></i> Email: <a href="">kvistkunst@gmail.com</a></p>
                </div>
            </div>
        </div>
        <div class="row">
          <div class="col-sm-12 wow fadeIn">
            <div class="footer-border"></div>
          </div>
        </div>
        <div class="row">
            <div class="col-sm-7 footer-copyright wow fadeIn">
                <p>Copyright 2012 Andia - All rights reserved. Template by <a href="http://azmind.com">Azmind</a>.Brain graphic by <a href="http://www.freepik.com/">Freepik</a> from <a href="http://www.flaticon.com/">Flaticon</a> is licensed under <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a>. Made with <a href="http://logomakr.com" title="Logo Maker">Logo Maker</a>
</p>
            </div>
            <div class="col-sm-5 footer-social wow fadeIn">
                <a href="https://www.facebook.com/kvistkunst"><i class="fa fa-facebook"></i></a>
                <a href="https://dk.linkedin.com/in/martin-kvist-8305703"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-pinterest"></i></a>
            </div>
        </div>
    </div>
</footer>

<!-- Javascript -->
<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
<script src="assets/js/jquery.backstretch.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/retina-1.1.0.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/flexslider/jquery.flexslider-min.js"></script>
<script src="assets/js/jflickrfeed.min.js"></script>
<script src="assets/js/masonry.pkgd.min.js"></script>
<script src="http://maps.google.com/maps/api/js"></script>
<script src="assets/js/jquery.ui.map.min.js"></script>
<script src="assets/js/scripts.js"></script>


<!-- Lorenzo-s shit -->
<script type="text/javascript">
  $(document).ready(function(){
      var path = $(location).attr('href');
      var index = path.lastIndexOf("/") + 1;
      var page = path.substr(index);
      if(page=='') page = '/';
      console.log('page: ' + page);

      $( ".nav li a" ).each(function() {
      console.log('href: ' + $(this).attr('href'));
      var xxx = $(this).attr('href');
//      console.log('length: ' + xxx.length);
      var yyy = '/'+page+'/';
      var re = new RegExp(yyy, 'g');
      var zzz = xxx.match(re);
      console.log('xxx: ' + xxx);
      console.log('length: ' + xxx.length);
      if((xxx) && xxx == page){
          console.log('giot it !!!');
            $(this).parent().addClass('active');
            return false;
      } else {
            return true;
      }

        });
    });
</script>
</body>

</html>
