<?php require_once("../conn.php"); ?>
<?php
    /*Just for your server-side code*/
    // header('Content-Type: text/html; charset=ISO-8859-1');
?>
<?php
 $d1=new dbconn();
 $pdo=$d1->connect();
 ?>
 <?php require_once("../function.php"); ?>
 <?php

 //call all avdrstisment here
 $sql="SELECT * FROM adsparent where is_active=0";
 $result=$pdo->query($sql);
 $globalad=$result->fetchAll();
 //call all common contect here
 $sql="SELECT * FROM setting";
 $sett=$pdo->query($sql);
 $setting=$sett->fetch();

 //for logout
if(isset($_POST['logout'])){
unset($_SESSION['user']);
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-213528996-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-213528996-1');
</script>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="title" content="Sociapa News | Startup-Story">
  <meta name="keywords" content="Sociapa News | Startup-Story">
  <meta name="description" content="Sociapa News | Startup-Story">
  <meta name="author" content="Sociapa News | Startup-Story">
  <title>Sociapa News | Startup-Story</title>
  <link rel="shortcut icon" type="image/png" href="../images/favicon.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="css/owl.carousel.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap5.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css">

<link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css" />
<link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-classic.css" />

<!--google analytics code-->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6852006878125906"
     crossorigin="anonymous"></script>
</head>
<!----->
<?php include('../inc/popup.php'); ?>

<body>
  <header class="stickyHeader navSticky">
    <div class="row logoHeader px-lg-5 px-0 py-0 py-sm-2 bg-white">
      <nav class="navbar py-0">
        <div class="container-fluid">
          <a class="navbar-brand mb-md-2 mb-lg-0" href="https://sociapanews.com/">
            <img src="../images/<?php echo $setting['logo']; ?>" class="img-fluid" alt="Logo">
          </a>
          <form class="d-flex" action="../search" method="post">
              <input class="form-control me-2 bg-white border-1 rounded-0 searchInput" type="search" placeholder="Search" aria-label="Search" name="search">
              <button class="btn bg-darkred" type="submit"> <i class="fa fa-search"></i></button>
          </form>
          <div class="dropdown  ms-md-5 ms-0">
              <div class="translate btn btn-white text-red fw-bold" id="google_translate_element"></div>
                          <script type="text/javascript">
                              function googleTranslateElementInit() {
                              new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                                      }
                         </script>
             <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
          </div>
        </div>
      </nav>
    </div>
    <div class="row menubarTop bg-red py-0 py-sm-1 ps-0" id="mobileBg">
      <div class="">
      <nav class="navbar navbar-expand-lg py-0 float-lg-end float-start">
        <div class="container-fluid">
          <button class="navbar-toggler" id="mobileToggle" type="button" data-bs-toggle="collapse" data-bs-target="#nndMenubar"
            aria-controls="nndMenubar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars text-red"></span>
          </button>
          <div class="collapse navbar-collapse" id="nndMenubar">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-light text-capitalize" href="index">Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link text-light text-capitalize" href="industry-story">Industry</a>
              </li>



              <li class="nav-item">
                <a class="nav-link text-light text-capitalize" href="expert-opinion">Analysis</a>
              </li>

              <li class="nav-item">
                <a class="nav-link text-light text-capitalize" href="inside-edge">Insides</a>
              </li>

              <li class="nav-item">
                <a class="nav-link text-light text-capitalize" href="marketing-campaign">Campaigns</a>
              </li>
            <!-- <?php if(!empty($_SESSION['user']) and isset($_SESSION['user'])){ ?>
              <li class="nav-item">
                <a class="nav-link text-light text-capitalize dropdown-toggle" href="#" data-bs-toggle="dropdown"><i class="fa fa-user-circle"></i> <?php echo explode(" ", $_SESSION['user'])[0]; ?></a>
                 <ul class="dropdown-menu rounded-0" aria-labelledby="downBroch">
                                        <li>
                                             <form method="post">
                                            <button class="dropdown-item fs-25 text-green" type="submit" name="logout">logout</button>
                                            </form>
                                            </li>
                                    </ul>
              </li>
            <?php } else { ?>
            <li class="nav-item">
                <a class="nav-link text-light text-capitalize" href="#" data-bs-toggle="modal" data-bs-target="#loginModal"><i class="fa fa-user-circle"></i> Login</a>
              </li>
              <?php } ?> -->

            </ul>
          </div>
        </div>
      </nav>
      </div>
    </div>
    <div class="row bg-light-red px-sm-5 px-1 py-1">
      <div class="col-xxl-2 col-4">
        <button class="btn bg-red rounded-pill px-xl-5 px-lg-3 px-1 fs-16 cursor-default">Latest News</button>
      </div>
      <div class="col-xxl-10 col-8">
        <marquee onmouseover="this.stop();" onmouseout="this.start();">
          <ul class="list-style-none marqLNews">
            <?php
            $result=$pdo->query("SELECT heading,id,category FROM news where is_active=0 ORDER BY id desc LIMIT 7");
            $data=$result->fetchAll();
            foreach ($data as $value) {
              # code...
              $a=strip_tags( $value['heading']);
            ?>
            <li class="text-dark fs-16">
           <a href="news.php?cat=<?php echo $value['id'] ?>&cat1=<?php echo $value['category'] ?>" class="text-dark text-decoration-none">
             <?php echo $a; ?>
            </a>
            </li>
          <?php } ?>
          </ul>
        </marquee>
      </div>
    </div>
  </header>

  <?php
     $data=0;
     $sql="SELECT * FROM category where category='StartUp-Story' and is_active=0";
     $result=$pdo->query($sql);
     $data=$result->fetch();
     if(empty($data)){
        $result=$pdo->query("SELECT * FROM subcategory where sub_category='StartUp-Story' and is_active=0");
        $data=$result->fetch();
     }
   ?>
  <!--<section>-->
  <!--  <div class="row">-->
  <!--    <div class="col-sm-12">-->
  <!--      <img src="images/<?php echo $data['banner']; ?>" class="img-fluid w-100" alt="Marketing Banner">-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</section>-->
  <!--<section class="py-lg-4 py-sm-2 py-1">-->
  <!--<div class="container">-->
  <!--<div class="row justify-content-center py-1 pb-sm-3 mb-sm-3">-->
  <!--  <div class="col-12 text-center">-->
      <!--<?php if($globalad[9]['ads_type'] == 'google_ad'){ if(!empty($globalad[9]['ad_code'])){ ?>-->
      <!--  <div>-->
      <!--   <?php echo $globalad[9]['ad_code'] ?>-->
      <!--  </div>-->
      <!--<?php }}else if($globalad[9]['ads_type']=='native_ad'){ if(!empty($globalad[9]['ad_img'])){ ?>-->
      <!--<div>-->
      <!--   <img src="./images/ads/<?php echo $globalad[9]['ad_img']; ?>" alt="ads11" />-->
      <!--  </div>-->
      <!--  <?php }} ?>-->
  <!--  </div>-->
  <!--</div>-->
  <section class="container">
      <div class="row">
          <div class="col-12 text-center pt-2">
                    <?php if($globalad[9]['ads_type'] == 'google_ad'){ if(!empty($globalad[9]['ad_code'])){ ?>
        <div>
         <?php echo $globalad[9]['ad_code'] ?>
        </div>
      <?php }}else if($globalad[9]['ads_type']=='native_ad'){ if(!empty($globalad[9]['ad_img'])){ ?>
      <div>
         <img src="../images/ads/<?php echo $globalad[9]['ad_img']; ?>" alt="ads11" class="img-fluid"/>
        </div>
        <?php }} ?>
          </div>
      </div>
  </section>

<section class="py-md-5 py-3 mrktCard">
  <div class="container">
    <div class="row">

<!-- advertisment area -->
<div class="col-lg-2 col-3">
  <div class="bg-white text-center p-2">
          <?php if($globalad[5]['ads_type'] == 'google_ad'){ if(!empty($globalad[5]['ad_code'])){ ?>
        <div>
         <?php echo $globalad[5]['ad_code'] ?>
        </div>
      <?php }}else if($globalad[5]['ads_type']=='native_ad'){ if(!empty($globalad[5]['ad_img'])){ ?>
      <div>
         <img src="./images/ads/<?php echo $globalad[5]['ad_img']; ?>" alt="ads11" />
        </div>
         <?php }} if($globalad[6]['ads_type'] == 'google_ad'){ if(!empty($globalad[6]['ad_code'])){ ?>
        <div>
         <?php echo $globalad[6]['ad_code'] ?>
        </div>
      <?php }}else if($globalad[6]['ads_type']=='native_ad'){ if(!empty($globalad[6]['ad_img'])){ ?>
      <div>
         <img src="./images/ads/<?php echo $globalad[6]['ad_img']; ?>" alt="ads11" />
        </div>
         <?php }} if($globalad[7]['ads_type'] == 'google_ad'){ if(!empty($globalad[7]['ad_code'])){ ?>
        <div>
         <?php echo $globalad[7]['ad_code'] ?>
        </div>
      <?php }}else if($globalad[7]['ads_type']=='native_ad'){ if(!empty($globalad[7]['ad_img'])){ ?>
      <div>
         <img src="./images/ads/<?php echo $globalad[7]['ad_img']; ?>" alt="ads11" />
        </div>
       <?php }} if($globalad[8]['ads_type'] == 'google_ad'){ if(!empty($globalad[8]['ad_code'])){ ?>
        <div>
         <?php echo $globalad[8]['ad_code'] ?>
        </div>
      <?php }}else if($globalad[8]['ads_type']=='native_ad'){ if(!empty($globalad[8]['ad_img'])){ ?>
      <div>
         <img src="./images/ads/<?php echo $globalad[8]['ad_img']; ?>" alt="ads11" />
        </div>
        <?php }} ?>

      </div>
      </div>
<!-- !advertisment area -->



      <div class="col-lg-8 col-6 px-lg-5 px-0">
        <h2 class="Poppins-Bold"><?php echo $data['heading']; ?></h2>
        <div class="h-3 w-110 bg-red mb-md-4 mb-sm-3 mb-2 hoverRed"></div>
        <div class="row g-3">
          <?php $sql="SELECT * FROM news where (category='StartUp-Story' or sub_category='StartUp-Story') and is_active=0";
           $result=$pdo->query($sql);
          $data=$result->fetchAll();
          foreach ($data as $value) {
              $a = strip_tags( $value['heading']);
              $b = strip_tags( $value['description']);
           ?>
          <div class="col-xl-6 col-xxl-4">
            <div class="card shadow-lg">
              <img src="../images/<?php echo $value['image']; ?>" class="card-img-top" alt="weekly-news">
              <div class="card-body">
                <a href="news.php?cat=<?php echo $value['id']; ?>&cat1=<?php echo $value['category']; ?>" class="text-decoration-none text-dark">
                <h6 class="card-title Poppins-Bold hoverRed"><?php echo substr($a,0,50); ?>...</h6></a>
                <p class="card-text fs-16"><?php echo  substr($b, 0, 80); ?><a href="news.php?cat=<?php echo $value['id']; ?>&cat1=<?php echo $value['category']; ?>" class="removeunderline text-primary"> read more...</a></p>
                <div class="border-top col-6 mx-auto pb-1"></div>
                <div class="share text-center">
                <a href="https://www.facebook.com/sharer/sharer.php?u=https://sociapanews.com/category/news.php?cat=<?php echo $value['id'] ?>" class="me-3" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook"><i class="fab fa-facebook text-secondary"></i></a>
                <a href="https://twitter.com/share?u=https://sociapanews.com/category/news.php?cat=<?php echo $value['id'] ?>&cat1=<?php echo $value['category'] ?>&t=<?php echo $a ?>" class="me-3" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter"><i class="fab fa-twitter text-secondary"></i></a>
                <a href="https://www.linkedin.com/shareArticle?mini=true&u=https://sociapanews.com/category/news.php?cat=<?php echo $value['id'] ?>&cat1=<?php echo $value['category'] ?>&t=<?php echo $a ?>" class="me-3" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Linkedin"><i class="fab fa-linkedin text-secondary"></i></a>
                <a href="https://api.whatsapp.com/send?text=https://sociapanews.com/category/news.php?cat=<?php echo $value['id'] ?>" class="me-3" data-action="share/whatsapp/share" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on whatsapp"><i class="fab fa-whatsapp text-secondary"></i></a>
              </div>
              </div>

            </div>
          </div>
        <?php } ?>
        </div>
      </div>

<!-- advertisment area -->
   <div class="col-lg-2 col-3">
      <div class="bg-white text-center p-2 stickyRightSide">
         <?php if($globalad[21]['ads_type'] == 'google_ad'){ if(!empty($globalad[21]['ad_code'])){ ?>
        <div>
         <?php echo $globalad[21]['ad_code'] ?>
        </div>
      <?php }}else if($globalad[21]['ads_type']=='native_ad'){ if(!empty($globalad[21]['ad_img'])){ ?>
      <div>
         <img src="./images/ads/<?php echo $globalad[21]['ad_img']; ?>" alt="ads11" />
        </div>
         <?php }} if($globalad[22]['ads_type'] == 'google_ad'){ if(!empty($globalad[22]['ad_code'])){ ?>
        <div>
         <?php echo $globalad[22]['ad_code'] ?>
        </div>
      <?php }}else if($globalad[22]['ads_type']=='native_ad'){ if(!empty($globalad[22]['ad_img'])){ ?>
      <div>
         <img src="./images/ads/<?php echo $globalad[22]['ad_img']; ?>" alt="ads11" />
        </div>
         <?php }} if($globalad[23]['ads_type'] == 'google_ad'){ if(!empty($globalad[23]['ad_code'])){ ?>
        <div>
         <?php echo $globalad[23]['ad_code'] ?>
        </div>
      <?php }}else if($globalad[23]['ads_type']=='native_ad'){ if(!empty($globalad[23]['ad_img'])){ ?>
      <div>
         <img src="./images/ads/<?php echo $globalad[23]['ad_img']; ?>" alt="ads11" />
        </div>
       <?php }} if($globalad[24]['ads_type'] == 'google_ad'){ if(!empty($globalad[24]['ad_code'])){ ?>
        <div>
         <?php echo $globalad[24]['ad_code'] ?>
        </div>
      <?php }}else if($globalad[24]['ads_type']=='native_ad'){ if(!empty($globalad[24]['ad_img'])){ ?>
      <div>
         <img src="./images/ads/<?php echo $globalad[24]['ad_img']; ?>" alt="ads11" />
        </div>
        <?php }} ?>
        </div> </div>
<!-- !advertisment area -->

    </div>
</div>
  </div>
</section>
 <?php include("../footer.php"); ?>