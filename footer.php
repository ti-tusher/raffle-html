<!-- footer start -->
<footer class="footer py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="footer-heading text-uppercase">Raffle</h1>
                        <p>Tel: 0185564XXXX</p>
                        <p>Address: House #123, Road #45D, Uttara, Dhaka 1230</p>
                    </div>

                    <div class="col-md-3 social-div">
                        <h3 class="footer-heading text-uppercase">Follow Us</h3>
                        <ul class="footer-social-link">
                            <li><a href="https://www.facebook.com/" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="twitter" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="intagram" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                       </ul>
                    </div>

                    <div class="col-md-3 quick-link-div">
                        <h3 class="footer-heading text-uppercase">QUICK LINKS</h3>
                        <ul class="list-unstyled quick-links">
                            <li>
                                <a href="#">About Us</a>
                            </li>
                           <li>
                              <a href="#">Contact Us</a>
                           </li>                        
                           <li>
                            <a href="#">Terms & Conditions</a>
                            </li>
                            <li>
                                <a href="#">Privacy policy</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-12">
                        <hr>
                        <p class="text-center copyright-text">Copyright &copy; <?php echo date("Y"); ?> Raffle. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer start -->
        <a id="back-to-top" href="#" class="btn btn-warning btn-sm back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/elevateZoom-3.0.8.min.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/custom.js"></script>
<script>
$(document).ready(function(){
  
  $('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      nav:false,
      dots: true,
      autoplay:true,
      autoplayTimeout:2000,
      autoplayHoverPause:true,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:3
          },
          1000:{
              items:5
          }
      }
  })
});
</script>

</body>

</html>