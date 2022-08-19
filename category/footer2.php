<?php include('../inc/popup.php'); ?>
<footer class="bg-red">
<div class="container">
  <div class="row py-sm-5 pt-3 px-2 px-sm-0">
    <div class="col-lg-6 col-md-12 footIcon">
      <h5 class="Poppins-Bold"><?php echo $setting['about_heading']; ?></h5>
      <p class="py-sm-2 py-0 fs-16"><?php echo $setting['about_content']; ?></p>
      <ul class="list-style-none">
         <?php if(isset($setting['location'])){ ?>
        <li class="mb-2 fs-14"><i class="fa fa-map-marker-alt"></i> &nbsp;<?php echo $setting['location']; ?></li>
        <?php } if(isset($setting['contact'])){ ?>
        <li class="mb-2 fs-14"><i class="fa fa-phone-alt"></i> &nbsp;<?php echo $setting['contact']; ?></li>
        <?php } if(isset($setting['email'])){ ?>
         <li class="fs-14"><i class="fa fa-envelope"></i> &nbsp;<?php echo $setting['email']; ?></li> 
         <?php } ?>
      </ul>
    </div>
    <div class="col-lg-4 col-md-8 connectWithUs">
      <h5 class="Poppins-Bold">CONNECT WITH US</h5>
      <div class="d-flex my-sm-4 my-3">
          <?php if(isset($setting['fb_link'])){ ?>
        <a href="<?php echo $setting['fb_link'] ?>" class="me-sm-2" target="_blank"><i class="fab fa-facebook fa-2x text-light"></i></a>
        <?php }if(isset($setting['insta_link'])){ ?>
        <a  href="<?php echo $setting['insta_link'] ?>" class="me-sm-2" target="_blank"><i class="fab fa-instagram fa-2x text-light"></i></a>
        <!--<a href="<?php echo $setting['linkedin_link'] ?>" class="me-sm-2" target="_blank"><i class="fab fa-twitter fa-2x text-light"></i></a>-->
        <!--<a href="<?php echo $setting['twitter_link'] ?>" class="me-sm-2"><i class="fab fa-linkedin fa-2x text-light"></i></a>-->
        <!--<a href="<?php echo $setting['youtube_link'] ?>" class="me-sm-2" target="_blank"><i class="fab fa-youtube fa-2x text-light"></i></a>-->
        <?php } if(isset($setting['whatsapp'])){ ?>
        <a  href="https://wa.me/91<?php echo $setting['whatsapp'] ?>" target="_blank" class="whatsapp_btn me-md-4 me-sm-2" target="_blank"><i class="fab fa-whatsapp fa-2x text-light"></i></a>
        <?php } ?>
      </div>
<h6 class="Poppins-Bold">Subscribe Your Retail Story News letter</h6>
<p class="my-3 fs-14">25000+ Industry Leader already read it everyday</p>
<form class="d-flex" method="post" id="my-form">
  <input class="form-control w-75 fs-14 rounded-start" type="search" placeholder="Email" aria-label="Search" name="srch" id="email" required>
  <button class="btn bg-red rounded-end fs-16 rounded-0" type="submit" name="subs" id="subsBtn"><a class="text-white text-decoration-none">Subscribe</a></button>
</form>
<p class="mt-3 fs-14" id="message"></p>
    </div>
    <div class="col-lg-2 col-md-4 pt-4 pt-sm-0">
    <h5 class="Poppins-Bold pb-2">QUICK LINKS</h5>
    <ul class="list-style-none quickLinkFoot">
    <li class="fs-14 mt-2"><a href="t&c" class="text-white text-decoration-none">TERMS & CONDITION</a></li>
    <li class="fs-14 mt-2"><a href="policy" class="text-white text-decoration-none">PRIVACY POLICY</a></li>
    
    <li class="fs-14 mt-2"><a href="sitemap.html" class="text-white text-decoration-none">SITEMAP</a></li>
    <li class="fs-14 mt-2"><a href="contact" class="text-white text-decoration-none">CONTACT US</a></li>
      </ul>
    </div>
  </div>
</div>
<section class=" bg-brown">
<div class="container">
<div class="row">
  <div class="col-sm-6 py-sm-2 py-1 fs-14 d-none d-sm-block">
    <small>© <?php echo $setting['footer_head']; ?></small>
  </div>
  <div class="col-sm-6 py-sm-2 py-1 fs-14">
    <small class="float-end">Website designed & developed by <a href="https://sociapa.com/" class="text-white text-decoration-none" target="_blank">Sociapa.</a></small>
  </div>
</div>
</div>
</section>
  </footer>
  <!-- start social icons -->
  <section class="socialIcon">
       <?php  if(isset($setting['insta_link'])){ ?>
  <a href="<?php echo $setting['fb_link'] ?>" target="_blank" data-bs-toggle="tooltip" data-bs-placement="left" title="Facebook"><i class="fab fa-1x fa-facebook text-red"></i></a>
  <?php } if(isset($setting['insta_link'])){ ?>
  <a  href="<?php echo $setting['insta_link'] ?>" data-bs-toggle="tooltip" data-bs-placement="left" title="Instagram" target="_blank"><i class="fab fa-instagram fa-1x text-red"></i></a>
  <!--<a data-bs-toggle="tooltip" data-bs-placement="left" title="Twitter" href="<?php echo $setting['twitter_link'] ?>" target="_blank"><i class="fab fa-1x fa-twitter text-red"></i></a>-->
  <!--<a data-bs-toggle="tooltip" data-bs-placement="left" title="LinkedIn" href="<?php echo $setting['linkedin_link'] ?>" target="_blank"><i class="fab fa-1x fa-linkedin text-red"></i></a>-->
  <?php } if(isset($setting['whatsapp'])){ ?>
  <a data-bs-toggle="tooltip" data-bs-placement="left" title="Whatsapp" href="https://wa.me/91<?php echo $setting['whatsapp'] ?>" target="_blank"><i class="fab fa-1x fa-whatsapp text-red"></i></a>
  <?php } ?>
  <!--<a data-bs-toggle="tooltip" data-bs-placement="left" title="Share" href="javascript:void(0)" class="text-dark"><i class="fa fa-1x fa-share-alt text-red"></i></a>-->
</section>
  <!-- end social icons -->

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap5.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>


 <script>
            $(document).ready(function() {
               
                $('#my-form').submit(function(e) {
                    e.preventDefault();
                    var email = $('#email').val();
                   
                    $.ajax( {
                       
                        url: "ajax-call.php",
                        method: "post",
                        data: {email:email},
                        type: "html",
                        success: function(success,status) {
                            $("#message").text('Thank you for subscribing us.');
                             setTimeout(function(){
                                    $('#message').fadeOut();
                                },4000);
                            $("#my-form")[0].reset();
                        }
                    });
                });



 // start left sticky
 let parent = document.querySelector('.stickyLeftSide').parentElement;
    var stickyNavTop = $('.stickyLeftSide').offset().top;
    var stickyNav = function () {
        var scrollTop = $(window).scrollTop();
        if (scrollTop > stickyNavTop) {
            $('.stickyLeftSide').addClass('stickyR');
        } else {
            $('.stickyLeftSide').removeClass('stickyR');
        }
    };
    stickyNav();
    $(window).scroll(function () {
        stickyNav();
    });
    // end left sticky

// start right sticky
let pk = document.querySelector('.stickyRightSide').parentElement;
    var snt = $('.stickyRightSide').offset().top;
    var sn = function(){
    var st = $(window).scrollTop();
    if (st > snt) { 
        $('.stickyRightSide').addClass('stickyR');
    } else {
        $('.stickyRightSide').removeClass('stickyR'); 
    }
    };
    sn();
    $(window).scroll(function() {
        sn();
});
// end right sticky


});
</script>


