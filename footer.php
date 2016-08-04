<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

 <div class="newsletter-background">
    <div class="newsletter-background-color">
    <div class="row newsletter">
        <div class="small-12 columns">
          <h3>Newsletter Signup </h3>
          <p>To subscribe to the Future Perfect listserv, participate in the conversation and stay up to date on events please <a href="mailto:listserv@listserv.albany.edu?body=Subscribe%ANTHROPOCENE">email listserv@listserv.albany.edu</a> with a blank subject and the command Subscribe ANTHROPOCENE in the body of the email.</p>
        </div>

    </div></div>


  <footer>

      <div class="row">
        <div class="small-12 columns">

          <nav>
              
                   <ul>
                      <li><a href="http://albany.edu/futureperfect">Home</a></li>
                      <li><a href="http://albany.edu/futureperfect/exhibition.html">Exhibition</a></li>
                     
                      <li><a href="http://albany.edu/futureperfect/contributors.html">Contributors</a></li>
                       <!--<li><a href="http://albany.edu/futureperfect">Events</a></li>
                      <li><a href="http://albany.edu/futureperfect">Bibliography</a></li>
                      <li><a href="http://albany.edu/futureperfect">News</a></li>-->
                      <li><a href="http://albany.edu/futureperfect/podium.html">Podium</a></li>


                        <ul class="social-media">

                            <li><a href="http://ualbanyartmuseum.tumblr.com/" target="blank"><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>
                            <li><a href="https://twitter.com/UAlbany_Museum" target="blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.instagram.com/ualbanyartmuseum/" target="blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="www.facebook.com/ualbanyartmuseum" target="blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

                         </ul>


                  </ul>

                

                   </nav>



        </div>
      </div>

       <div class="university-nav">

        <div class="row">

          <div class="small-12 large-4 columns">
           <a href="http://albany.edu/museum" target="blank"><img src="http://albany.edu/futureperfect/images/museum-logo.png"></a>
          </div>

          <div class="small-12 large-2 large-offset-6 columns">
            <p><a href="http://albany.edu/" target="blank">UAlbany Home</a></p>

          </div>

        </div>


      </div>
     
 </footer>
<?php do_action( 'foundationpress_before_closing_body' ); ?>


<script src="http://albany.edu/futureperfect/js/WOW-master/dist/wow.min.js"></script>
    <script src="http://albany.edu/futureperfect/js/masonry.pkgd.js"></script>
    <script src="http://albany.edu/futureperfect/js/imagesloaded.js"></script>


    

    <script>

    
    $('.grid').masonry({
        // options
        itemSelector: '.grid-item',
    });
    
    var $grid = $('.grid').masonry({
            // options...
          });
          // layout Masonry after each image loads
          $grid.imagesLoaded().progress( function() {
            $grid.masonry('layout');
          });

    </script>

     <script>
      new WOW().init();
    </script>
    <script>


</body>
</html>
