<?php require_once("../conn.php"); ?>
<?php
 $d1=new dbconn();
 $pdo=$d1->connect();
 ?>
<?php require_once("../function.php"); ?>
<?php

 //call all avdrstisment here
 $sql="SELECT * FROM adschild where is_active=0";
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
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-213528996-1');
  </script>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="title" content="Sociapa News | News">
  <meta name="keywords" content="Sociapa News | News">
  <meta name="description" content="Sociapa News | News">
  <meta name="author" content="Sociapa News | News">
  <title>Sociapa News | News</title>
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
  <link type="text/css" rel="stylesheet"
    href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-classic.css" />
  <!--google analytics code-->
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6852006878125906"
    crossorigin="anonymous"></script>
</head>
<?php include('../inc/popup.php'); ?>

<body>
  <header class="stickyHeader navSticky">
    <div class="row logoHeader px-lg-5 px-0 py-0 py-sm-2 bg-white">
      <nav class="navbar py-0">
        <div class="container-fluid">
          <a class="navbar-brand mb-md-2 mb-lg-0" href="../index.php">
            <img src="../images/<?php echo $setting['logo']; ?>" class="img-fluid" alt="Logo">
          </a>
          <form class="d-flex" action="../search.php" method="post">
            <input class="form-control me-2 bg-white border-1 rounded-0 searchInput" type="search" placeholder="Search"
              aria-label="Search" name="search">
            <button class="btn bg-darkred" type="submit"> <i class="fa fa-search"></i></button>
          </form>
          <div class="dropdown  ms-md-5 ms-0">
            <div class="translate btn btn-white text-red fw-bold" id="google_translate_element"></div>
            <script type="text/javascript">
              function googleTranslateElementInit() {
                new google.translate.TranslateElement({ pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE }, 'google_translate_element');
              }
            </script>
            <script type="text/javascript"
              src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
          </div>
        </div>
      </nav>
    </div>
    <div class="row menubarTop bg-red py-0 py-sm-1 ps-0" id="mobileBg">
      <div class="">
        <nav class="navbar navbar-expand-lg py-0 float-lg-end float-start">
          <div class="container-fluid">
            <button class="navbar-toggler" id="mobileToggle" type="button" data-bs-toggle="collapse"
              data-bs-target="#nndMenubar" aria-controls="nndMenubar" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="fa fa-bars text-red"></span>
            </button>
            <div class="collapse navbar-collapse" id="nndMenubar">
              <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link text-light text-capitalize" href="index">Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link text-light text-capitalize" href="category/industry-story">Industry</a>
              </li>



              <li class="nav-item">
                <a class="nav-link text-light text-capitalize" href="category/expert-opinion">Analysis</a>
              </li>

              <li class="nav-item">
                <a class="nav-link text-light text-capitalize" href="category/inside-edge">Insides</a>
              </li>

              <li class="nav-item">
                <a class="nav-link text-light text-capitalize" href="category/marketing-campaign">Campaigns</a>
              </li>
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
              <a href="news.php?cat=<?php echo $value['id'] ?>&cat1=<?php echo $value['category'] ?>"
                class="text-dark text-decoration-none">
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
           $heading=$_GET['cat'];
           $category=$_GET['cat1'];
           $sql="SELECT * FROM news where id='$heading' UNION SELECT * FROM news where category='$category'";
           $result=$pdo->query($sql);
           $value=$result->fetchAll();
           $viewcount=$value[0]['view']+1;
           $pdo->query("UPDATE news set view='$viewcount' where id='$heading'");
 ?>

  <style>
    #hd1 {
      font-size: 30px;
      margin-bottom: 15px;
      text-transform: capitalize;
    }

    @media screen and (max-width:300px) {
      #hd1 {
        font-size: 14px;
      }
    }

    @media screen and (min-width:301px) and (max-width:400px) {
      #hd1 {
        font-size: 16px;
      }
    }

    @media screen and (min-width:401px) and (max-width:600px) {
      #hd1 {
        font-size: 18px;
      }
    }

    @media screen and (min-width:601px) and (max-width:767px) {
      #hd1 {
        font-size: 20px;
      }
    }

    @media screen and (min-width:768px) and (max-width:991px) {
      #hd1 {
        font-size: 22px;
      }
    }

    @media screen and (min-width:992px) and (max-width:1199px) {
      #hd1 {
        font-size: 24px;
      }
    }

    @media screen and (min-width:1200px) and (max-width:1400px) {
      #hd1 {
        font-size: 26px;
      }
    }

    @media screen and (min-width:1401px) and (max-width:1600px) {
      #hd1 {
        font-size: 28px;
      }

    }

  </style>

  <section class="py-lg-4 py-sm-2 py-1">
    <div class="container">
      <div class="row justify-content-center py-1 pb-sm-3 mb-sm-3">
        <div class="col-6 bg-white text-center py-sm-2 py-1">
          <?php if($globalad[25]['ads_type'] == 'google_ad'){ if(!empty($globalad[25]['ad_code'])){ ?>
          <div>
            <?php echo $globalad[25]['ad_code'] ?>
          </div>
          <?php }}else if($globalad[25]['ads_type']=='native_ad'){ if(!empty($globalad[25]['ad_img'])){ ?>
          <div>
            <img src="./images/ads/<?php echo $globalad[25]['ad_img']; ?>" alt="ads11" />
          </div>
          <?php }} ?>
        </div>
      </div>

      <div class="row">
        <div class="col-10 col-sm-9  pe-sm-5 pe-3 newsColLoop9">
        <?php
        foreach ($value as $data) {
        ?>
        <div class="row">
          <h1 id="hd1" class="Poppins-Bold">
            <?php echo $data['heading']; ?>
          </h1>
          <img src="../images/<?php echo $data['banner']; ?>" class="img-fluid w-100 mt-1 mb-sm-2" alt="sports">
          <?php
           $text =$data['details'];
           $splitat = strpos($text," ",strlen($text)/2);
           $col1 = substr($text, 0, $splitat);
           $col2 = substr($text, $splitat);
          ?>
          <p class="text-justify fsize-16">
            <?php echo $text ?>
          </p>
          <div class="border-top col-sm-6 mx-auto mb-sm-2 mb-2 mt-sm-2 mt-0"></div>
          <!-- start social icon -->
          <div class="text-center mb-sm-5 mb-4 mt-2 mt-sm-2">
            <a href="https://www.facebook.com/sharer/sharer.php?u=https://sociapanews.com/category/news.php?cat=<?php echo $data['id'] ?>"
              class="me-4 d-inline-block"
              onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
              target="_blank" title="Share on Facebook"><i class="fab fa-facebook text-danger fs-2"></i></a>
            <a href="https://twitter.com/share?u=https://sociapanews.com/category/news.php?cat=<?php echo $data['id'] ?>"
              class="me-4 d-inline-block"
              onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
              target="_blank" title="Share on Twitter"><i class="fab fa-twitter text-danger fs-2"></i></a>
            <a href="https://www.linkedin.com/shareArticle?mini=true&u=https://sociapanews.com/category/news.php?cat=<?php echo $data['id'] ?>"
              class="me-4 d-inline-block"
              onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
              target="_blank" title="Share on Linkedin"><i class="fab fa-linkedin text-danger fs-2"></i></a>
            <a href="https://api.whatsapp.com/send?text=https://sociapanews.com/category/news.php?cat=<?php echo $data['id'] ?>"
              class="me-4 d-inline-block" data-action="share/whatsapp/share"
              onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
              target="_blank" title="Share on whatsapp"><i class="fab fa-whatsapp text-danger fs-2"></i></a>
          </div>
          <!-- end social icons -->
          </div>
          <?php } ?>
        </div>

        <div class="col-2 col-sm-3 py-3 ps-2">
          <div class="bg-white p-sm-3 p-1">
            <?php if($globalad[10]['ads_type'] == 'google_ad'){ if(!empty($globalad[10]['ad_code'])){ ?>
            <div>
              <?php echo $globalad[10]['ad_code'] ?>
            </div>
            <?php }}else if($globalad[10]['ads_type']=='native_ad'){ if(!empty($globalad[10]['ad_img'])){ ?>
            <div>
              <img src="./images/ads/<?php echo $globalad[10]['ad_img']; ?>" alt="ads11" />
            </div>
            <?php }} if($globalad[11]['ads_type'] == 'google_ad'){ if(!empty($globalad[11]['ad_code'])){ ?>
            <div>
              <?php echo $globalad[11]['ad_code'] ?>
            </div>
            <?php }}else if($globalad[11]['ads_type']=='native_ad'){ if(!empty($globalad[11]['ad_img'])){ ?>
            <div>
              <img src="./images/ads/<?php echo $globalad[11]['ad_img']; ?>" alt="ads11" />
            </div>
            <?php }} if($globalad[12]['ads_type'] == 'google_ad'){ if(!empty($globalad[12]['ad_code'])){ ?>
            <div>
              <?php echo $globalad[12]['ad_code'] ?>
            </div>
            <?php }}else if($globalad[12]['ads_type']=='native_ad'){ if(!empty($globalad[12]['ad_img'])){ ?>
            <div>
              <img src="./images/ads/<?php echo $globalad[12]['ad_img']; ?>" alt="ads11" />
            </div>
            <?php }} if($globalad[13]['ads_type'] == 'google_ad'){ if(!empty($globalad[13]['ad_code'])){ ?>
            <div>
              <?php echo $globalad[13]['ad_code'] ?>
            </div>
            <?php }}else if($globalad[13]['ads_type']=='native_ad'){ if(!empty($globalad[13]['ad_img'])){ ?>
            <div>
              <img src="./images/ads/<?php echo $globalad[13]['ad_img']; ?>" alt="ads11" />
            </div>
            <?php }} ?>
          </div>
        </div>
      </div>

    </div>
  </section>
  <?php include("../footer.php"); ?>