<?php require_once("conn.php"); ?>
<?php
 $d1=new dbconn();
 $pdo=$d1->connect();
 ?>
<?php require_once("function.php"); ?>
<?php
 //call all avdrstisment here
 $sql="SELECT * FROM adsense where is_active=0";
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
  <meta name="title" content="Sociapa News">
  <meta name="keywords" content="Sociapa News">
  <meta name="description" content="Sociapa News">
  <meta name="author" content="Sociapa News">
  <title>Sociapa News</title>
  <link rel="shortcut icon" type="image/png" href="images/favicon.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="css/owl.carousel.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap5.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">

  <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css" />
  <link type="text/css" rel="stylesheet"
    href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-classic.css" />
  <!--google analytics code-->
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6852006878125906"
    crossorigin="anonymous"></script>
</head>
<?php include('inc/popup.php'); ?>

<body>
  <header class="stickyHeader navSticky">
    <div class="row logoHeader px-lg-5 px-0 py-0 py-sm-2 bg-white">
      <nav class="navbar py-0">
        <div class="container-fluid">
          <a class="navbar-brand mb-md-2 mb-lg-0" href="index.php">
            <img src="images/<?php echo $setting['logo']; ?>" class="img-fluid" alt="Logo">
          </a>
          <form class="d-flex" action="search" method="post">
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
              <a href="category/news.php?cat=<?php echo $value['id'] ?>&cat1=<?php echo $value['category'] ?>"
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