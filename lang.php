<?php include("header2.php"); ?>

<style>
  .cardVido .card{
    overflow:hidden !important;
  }
iframe{
  height:200px !important;
  width: 100% !important;
}
.videosize{
  height:200px !important;
  width: 100% !important;
}
</style>
  <section class="indFullBnr p-sm-5 p-2" style="background:url(./images/<?php echo $setting['home_banner']; ?>);background-repeat: no-repeat;background-size: cover; display: flex;align-items: center;">

    <?php if(isset($setting['home_banner_content'])){

   ?>
    <div class="row">
      <div class="col-6 ms-auto txtBanner">
        <div class="card rounded-0 p-sm-5 p-2">
          <h1 class="text-light bnrText Poppins-Bold">
            <?php echo $setting['home_banner_content']; ?>
          </h1>
        </div>
      </div>
    </div>
  <?php } ?>
  </section>

<section class="firstCard py-sm-5 py-2">
  <div class="px-sm-5 px-2">
<div class="row">
<div class="col-lg-3 fs-14 topLateTrend">
    <div class="card bg-white shadow p-2 overflow-auto">
    <ul class="nav nav-tabs pt-3" id="leftNewsTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active text-dark Poppins-Bold" id="Top-tab" data-bs-toggle="tab" data-bs-target="#Top" type="button" role="tab" aria-controls="Top" aria-selected="true">Top News</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link text-dark Poppins-Bold" id="Latest-tab" data-bs-toggle="tab" data-bs-target="#Latest" type="button" role="tab" aria-controls="Latest" aria-selected="false">Latest News</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link text-dark Poppins-Bold" id="Trending-tab" data-bs-toggle="tab" data-bs-target="#Trending" type="button" role="tab" aria-controls="Trending" aria-selected="false">Trending News</button>
      </li>
    </ul>
    <div class="tab-content pt-3" id="leftNewsTabContent">
      <div class="tab-pane fade show active" id="Top" role="tabpanel" aria-labelledby="Top-tab">
        <div class="col-sm-12 finCard">
          <div class="mb-1">
            <?php
               $sql="SELECT * FROM `news` ORDER BY view DESC LIMIT 5";
               $result=$pdo->query($sql);
               $data=$result->fetchAll();
               foreach ($data as $value) {
                 # code...
             ?>
            <div class="row g-0 mb-2 mb-lg-0">
              <div class="col-4">
                <img src="images/<?php echo $value['image']; ?>" class="img-fluid rounded-start w-100" alt="financial">
              </div>
              <div class="col-8 p-2">
                <a href="child.php?cat=<?php echo $value['id']; ?>&cat1=<?php echo $value['category']; ?>"  class="text-dark text-decoration-none">
                <h2 class="card-text fs-16 fw-bold hoverRed Poppins-Bold"><?php echo $value['heading']; ?></h2>
                <p class="card-text fs-12"><small class="text-muted"><i class="fa fa-clock"></i> <?php echo time_elapsed_string($value['created_at']); ?></small></p>
              </a>
              </div>
            </div>
         <?php } ?>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="Latest" role="tabpanel" aria-labelledby="Latest-tab">
          <div class="col-sm-12 finCard">
        <div class="mb-1">
          <?php
           $sql="SELECT * FROM news ORDER BY id desc LIMIT 5";
           $result=$pdo->query($sql);
           $data=$result->fetchAll();
           foreach ($data as $value) {
             # code...
           ?>
        <div class="row g-0 mb-2 mb-lg-0">
              <div class="col-4">
                <img src="images/<?php echo $value['image'] ?>" class="img-fluid rounded-start w-100" alt="financial">
              </div>
              <div class="col-8 p-2">
                <a href="child.php?cat=<?php echo $value['id']; ?>&cat1=<?php echo $value['category']; ?>"  class="text-dark text-decoration-none">
                <h2 class="card-text fs-16 fw-bold hoverRed Poppins-Bold"> <?php echo $value['heading']; ?> </h2>
                <p class="card-text fs-12"><small class="text-muted"><i class="fa fa-clock"></i> <?php echo time_elapsed_string($value['created_at']); ?></small></p>
              </a>
              </div>
            </div>
            <?php } ?>
        </div>
      </div></div>
      <div class="tab-pane fade" id="Trending" role="tabpanel" aria-labelledby="Trending-tab">
          <div class="col-sm-12 finCard">
        <div class="mb-1">
          <?php
          $sql="SELECT * FROM news WHERE created_at > NOW() - INTERVAL 7 DAY ORDER BY view DESC LIMIT 5";
          $result=$pdo->query($sql);
          $data=$result->fetchAll();
          foreach ($data as $value) {
            # code...
          ?>
        <div class="row g-0 mb-2 mb-lg-0">
              <div class="col-4">
                <img src="images/<?php echo $value['image'] ?>" class="img-fluid rounded-start w-100" alt="financial">
              </div>
              <div class="col-8 p-2">
                <a href="child.php?cat=<?php echo $value['id']; ?>&cat1=<?php echo $value['category']; ?>"  class="text-dark text-decoration-none">
                <h2 class="card-text fs-16 fw-bold hoverRed Poppins-Bold"><?php echo $value['heading'] ?></h2>
                <p class="card-text fs-12"><small class="text-muted"><i class="fa fa-clock"></i> <?php echo time_elapsed_string($value['created_at']); ?></small></p>
              </a>
              </div>
            </div>
          <?php } ?>
      </div></div>
    </div>
    </div>
   </div>
  </div>
  <div class="col-lg-9 mt-2 mt-lg-0">
  <div class="row px-0">
       <?php $result=$pdo->query("SELECT * FROM news where important='Yes' ORDER BY id desc LIMIT 3");
          $data=$result->fetchAll();
          foreach ($data as $value) {
             # code...
            ?>
      <div class="col-lg-4 pb-2">
        <div class="card shadow-lg">
          <img src="./images/<?php echo $value['image']; ?>" class="card-img-top" alt="weekly-news">
          <div class="card-body">
            <h6 class="card-title Poppins-Bold hoverRed"><a href="child.php?cat=<?php echo $value['id']; ?>&cat1=<?php echo $value['category']; ?>" class="removeunderline hoverRed"><?php echo $value['heading']; ?></a></h6>
            <p class="card-text fs-16"><?php echo  substr($value['description'], 0, 200); ?> <a href="child.php?cat=<?php echo $value['id']; ?>&cat1=<?php echo $value['category']; ?>" class="removeunderline hoverRed"> read more...</a></p>
            </div>
            <div class="card-text row card-footer bg-transparent card-text border-top-0 pb-3">
              <div class="text-center">
                <!--<a href="javascript:void(0)" class="me-3"><i class="fa fa-share-alt text-secondary"></i></a>-->
                <a href="https://www.facebook.com/sharer/sharer.php?u=https://sociapanews.com/child.php?cat=<?php echo $value['id'] ?>&cat1=<?php echo $value['category'] ?>&t=<?php echo $value['heading'] ?>" class='me-3' onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook"><i class="fab fa-facebook text-secondary"></i></a>
                <a href="https://twitter.com/share?u=https://sociapanews.com/child.php?cat=<?php echo $value['id'] ?>&cat1=<?php echo $value['category'] ?>&t=<?php echo $value['heading'] ?>" class="me-3" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter"><i class="fab fa-twitter text-secondary"></i></a>
                <a href="https://www.linkedin.com/shareArticle?mini=true&u=https://sociapanews.com/child.php?cat=<?php echo $value['id'] ?>&cat1=<?php echo $value['category'] ?>&t=<?php echo $value['heading'] ?>" class="me-3" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Linkedin"><i class="fab fa-linkedin text-secondary"></i></a>
                  <a href="whatsapp://send?text=u=https://sociapanews.com/child.php?cat=<?php echo $value['id'] ?>&cat1=<?php echo $value['category'] ?>&t=<?php echo $value['heading'] ?>" class="me-3" data-action="share/whatsapp/share" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on whatsapp"><i class="fab fa-whatsapp text-secondary"></i></a>

            </div>
          </div>
        </div>
      </div>
    <?php } ?>
    </div>
  </div>
</div>
   </div>
</section>

<section class="indSec pb-sm-5 pt-sm-4 pt-3 pb-2">
  <div class="container">
    <div class="row">
      <div class="col-sm-9">
        <h2 class="Poppins-Bold">INDUSTRY STORY</h2>
        <div class="h-3 w-110 bg-red mb-4"></div>
        <div class="row indHeight">
          <?php
             $value=fetchdata('Industry Story',2);
             foreach ($value as $value1) {
               # code...
           ?>
          <div class="col-sm-12 col-lg-6 pb-2 pb-md-0 indCard">
            <div class="card shadow-lg mb-2 mb-lg-0">
              <img src="images/<?php echo $value1['image']; ?>" class="card-img-top" alt="weekly-news">
              <div class="card-body">
                <a class="text-dark text-decoration-none" href="child.php?cat=<?php echo $value1['id']; ?>&cat1=<?php echo $value1['category']; ?>">
                <h6 class="card-title Poppins-Bold hoverRed"><?php echo $value1['heading']; ?></h6></a>
                <p class="card-text fs-16"><?php echo  substr($value1['description'], 0, 200); ?><a href="child.php?cat=<?php echo $value1['id']; ?>&cat1=<?php echo $value1['category']; ?>" class="removeunderline hoverRed"> read more...</a></p>
              </div>

              <div class="card-footer bg-transparent card-text border-top-0 pb-3">
                <div class="row">
                  <small class="text-muted col-4"> <?php echo time_elapsed_string($value1['created_at']); ?> <i class="fa fa-clock"></i></small>
                  <!-- <i class="fa fa-share"></i> -->
                  <small class="text-muted col-4 text-center"> <a href="javascript:void(0)" class="text-secondary"></a></small>
                  <small class="text-muted col-4 text-end"><?php echo $value1['view']; ?> View <a href="javascript:void(0)" class="text-secondary"><i class="fa fa-eye"></i></a></small>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
          <div class="col-sm-12 pt-3">
            <span class="float-end"><a href="marketing-news.php?cat=Industry Story" class="text-red text-decoration-none Poppins-Bold fs-16">SEE MORE</a></span>
          </div>
        </div>
        <h2 class="Poppins-Bold">STARTUP STORY</h2>
        <div class="h-3 w-110 bg-red mb-4"></div>
        <div class="row strtHeight">
          <div class="col-sm-12">
            <?php
              $value=fetchdata('StartUp Story',4);
              foreach ($value as $value1) {
                # code...
             ?>
            <div class="card mb-3 shadow-lg">
              <div class="row g-0">
                <div class="col-md-3">
                  <img src="images/<?php echo $value1['image']; ?>" class="img-fluid rounded-start w-100 h-100" alt="weekly-news">
                </div>
                <div class="col-md-9">
                  <div class="card-body">
                    <a class="text-dark text-decoration-none" href="child.php?cat=<?php echo $value1['id']; ?>&cat1=<?php echo $value1['category']; ?>"><h6 class="card-title Poppins-Bold hoverRed"><?php echo $value1['heading']; ?></h6></a>
                    <p class="card-text text-justify"><?php echo  substr($value1['description'], 0, 200); ?><a href="child.php?cat=<?php echo $value1['id']; ?>&cat1=<?php echo $value1['category']; ?>" class="removeunderline hoverRed"> read more...</a></p>
                  </div>
                  <div class="card-footer bg-transparent card-text border-top-0 pb-3"><div class="row"><small class="text-muted col-4 fs-14"><?php echo time_elapsed_string($value1['created_at']); ?> <i  class="fa fa-clock"></i></small>
                    <!-- <i class="fa fa-comment"></i> -->
                    <small  class="text-muted col-4 text-center fs-14"><a href="javascript:void(0)" class="text-secondary"></a></small>
                    <small class="text-muted col-4 text-end fs-14"><?php echo $value1['view']; ?> View <a  href="javascript:void(0)" class="text-secondary"><i class="fa fa-eye"></i></a></small></div></div>
                </div>
              </div>
            </div>
          <?php } ?>
          </div>
          <div class="col-sm-12 pt-3">
            <span class="float-end"><a href="marketing-news.php?cat=StartUp Story" class="text-red text-decoration-none Poppins-Bold fs-16">SEE MORE</a></span>
          </div>
        </div>
      </div>
      <!-- advertisment area -->
      <div class="col-sm-3 py-3 py-sm-0 ps-5 ps-md-5 pe-5 pe-md-0">
      <div class="bg-white p-3 text-center">
        <h6 class="adFont">Advertisement</h6>
        <?php if($globalad[1]['ad_code']){ ?>
        <div>
         <?php echo $globalad[1]['ad_code']; ?>
        </div>
      <?php } if( $globalad[2]['ad_code']){ ?>
        <div>
           <?php echo $globalad[2]['ad_code']; ?>
        </div>
      <?php } if($globalad[3]['ad_code']){ ?>
        <div>
           <?php echo $globalad[3]['ad_code']; ?>
        </div>
      <?php } if($globalad[4]['ad_code']){ ?>
        <div>
          <?php echo $globalad[4]['ad_code']; ?>
        </div>
      <?php } ?>
      </div>
      </div>
      <!-- !advertisment area -->
    </div>

<!-- start video -->
<div class="row wonderRow">
  <div class="col-sm-12">
      <h2 class="Poppins-Bold">VIDEO</h2>
        <div class="h-3 w-110 bg-red mb-4"></div>
            <div class="owl-carousel cardVido">
              <?php
                $sql="SELECT * FROM videos_news where important=0 and is_active=0";
                $result=$pdo->query($sql);
                $data=$result->fetchAll();
               foreach ($data as $value) {
              ?>
                <div class="item cursor-pointer">
                  <div class="card">
                    <?php if(isset($value['yt_video'])){ ?>
                    <div>
                        <?php echo $value['yt_video']; ?>
                     </div>
                   <?php }
                    elseif (isset($value['cus_video'])) {
                   ?>
                     <div class="videosize">

                     </div>
                     <?php } ?>
                    <div class="card-body">
                      <a class="text-dark text-decoration-none Poppins-Bold" href="#">
                        <h6 class="card-text hoverRed Poppins-Bold"><?php echo $value['heading']; ?>
                          </h6></a>
                      </div>

                      <div class="card-footer bg-white border-0 pb-3">
                      <p class="card-text"><small class="text-muted"><i class="fa fa-clock"></i> <?php echo time_elapsed_string($value['created_at']); ?> </small></p>
                    </div>

                  </div>
                </div>
                <?php } ?>
            </div>
        </div>
      </div>
<!-- end video -->

<!-- advertisment -->
  <?php if(!empty($globalad[18]['ad_code'])){ ?>
    <div  class="mx-auto my-3 my-sm-5 py-2 text-center">
      <?php echo $globalad[18]['ad_code'] ?>
    </div>
  <?php } ?>
<!-- !advertisment -->

    <h2 class="Poppins-Bold">WONDER WOMAN</h2>
      <div class="h-3 w-110 bg-red mb-4"></div>
<div class="row wonderRow">
  <div class="col-sm-12">
    <div class="owl-carousel wndrCarohgt">
      <?php
        $value=fetchdata('Wonder Woman',5);
        foreach ($value as $value1) {
       ?>
      <div class="item cursor-pointer" id="">
        <div class="card">
          <img src="images/<?php echo $value1['image']; ?>" class="card-img-top" alt="wonder">
          <div class="card-body">
            <a class="text-dark text-decoration-none Poppins-Bold" href="child.php?cat=<?php echo $value1['id']; ?>&cat1=<?php echo $value1['category']; ?>"><h6 class="card-text text-justify hoverRed Poppins-Bold"><?php echo $value1['heading']; ?></h6></a>
            </div>
            <div class="card-footer bg-white border-0 pb-3">
            <p class="card-text"><small class="text-muted"><i class="fa fa-clock"></i> <?php echo time_elapsed_string($value1['created_at']); ?></small></p>
          </div>
        </div>
      </div>
    <?php } ?>
    </div>
  </div>

  <!-- advertisment area -->
        <div class="mx-auto my-3 my-sm-5 py-2 text-center bg-white">
          <?php echo $globalad[0]['ad_code']; ?>
        </div>
   <!-- !advertisment area -->

  <div class="col-sm-6 expHgt">
    <h2 class="Poppins-Bold mt-sm-0 mt-3">EXPERT OPINION</h1>
      <div class="h-3 w-110 bg-red mb-4"></div>
      <div class="col-sm-12 ">
        <?php
          $value=fetchdata('Expert Opinion',4);
          foreach ($value as $value1) {
            # code...
         ?>
        <div class="card mb-3 shadow-lg">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="images/<?php echo $value1['image'] ?>" class="img-fluid rounded-start w-100 h-100" alt="expert">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <a class="text-dark text-decoration-none" href="child.php?cat=<?php echo $value1['id']; ?>&cat1=<?php echo $value1['category']; ?>">
                  <h6 class="card-text my-3 hoverRed Poppins-Bold"><?php echo $value1['heading']; ?></h6></a>
                 <p class="card-text text-justify fs-16"><?php echo  substr($value1['description'], 0, 200); ?><a href="child.php?cat=<?php echo $value1['id']; ?>&cat1=<?php echo $value1['category']; ?>" class="removeunderline hoverRed"> read more...</a></p>
              </div>
                <div class="card-footer bg-transparent card-text border-top-0 pb-3">
                  <div class="row fs-14">
                     <small class="text-muted col-6"> <?php echo time_elapsed_string($value1['created_at']); ?> <i class="fa fa-clock"></i></small>
                     <!-- <i class="fa fa-share"></i> -->
                     <small class="text-muted col-6 text-end"><a href="javascript:void(0)"
                        class="text-secondary"></a></small>
                  </div>
                </div>
            </div>
          </div>
        </div>
      <?php } ?>
      </div>
      <div class="col-sm-12 pt-2 imaran">
        <span class="float-end"><a href="marketing-news.php?cat=Expert Opinion" class="text-red text-decoration-none Poppins-Bold fs-16">SEE MORE</a></span>
      </div>

  </div>
  <div class="col-sm-6 insdHgt">
    <h2 class="Poppins-Bold mt-sm-0 mt-3">INSIDE EDGE</h2>
      <div class="h-3 w-110 bg-red mb-4"></div>
      <div class="col-sm-12">
         <?php
          $value=fetchdata('Inside Edge',4);
          foreach ($value as $value1) {
            # code...
         ?>
        <div class="card mb-3 shadow-lg">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="images/<?php echo $value1['image'] ?>" class="img-fluid rounded-start w-100 h-100" alt="inside">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <a class="text-dark text-decoration-none" href="child.php?cat=<?php echo $value1['id']; ?>&cat1=<?php echo $value1['category']; ?>">
                  <h6 class="card-text my-3 hoverRed Poppins-Bold"><?php echo $value1['heading']; ?></h6></a>
                <p class="card-text text-justify fs-16"><?php echo  substr($value1['description'], 0, 200); ?><a href="child.php?cat=<?php echo $value1['id']; ?>&cat1=<?php echo $value1['category']; ?>" class="removeunderline hoverRed"> read more...</a></p>
              </div>

              <div class="card-footer bg-transparent card-text border-top-0 pb-3">
                  <div class="row fs-14">
                     <small class="text-muted col-6"> <?php echo time_elapsed_string($value1['created_at']); ?> <i class="fa fa-clock"></i></small>
                     <small class="text-muted col-6 text-end"> <a href="javascript:void(0)"
                        class="text-secondary"></a></small>
                        <!-- <i class="fa fa-share"></i> -->
                  </div>
                </div>
            </div>
          </div>
        </div>
      <?php } ?>
      </div>
      <div class="col-sm-12 pt-sm-3 pt-0">
        <span class="float-end"><a href="marketing-news.php?cat=Inside Edge" class="text-red text-decoration-none Poppins-Bold fs-16">SEE MORE</a></span>
      </div>
  </div>
  <div class="col-sm-6 col-md-8">
    <div class="row">
    <div class="col-sm-12 mrktHgt">
      <h2 class="Poppins-Bold mt-sm-5 mt-3">MARKETING CAMPAIGN</h2>
      <div class="h-3 w-110 bg-red mb-4"></div>
      <div class="row g-2">
        <?php
          $value=fetchdata('Marketing Campaign',3);
          foreach ($value as $value1) {
            # code...
         ?>
         <div class="col-lg-4 col-lg-6">
          <div class="card shadow-lg">
            <img src="images/<?php echo $value1['image'] ?>" class="card-img-top" alt="Marketing">
            <div class="card-body py-0">
              <a class="text-dark text-decoration-none" href="child.php?cat=<?php echo $value1['id']; ?>&cat1=<?php echo $value1['category']; ?>">
                <h6 class="card-text my-3 hoverRed Poppins-Bold"><?php echo $value1['heading']; ?></h6></a>

            </div>
            <div class="card-footer border-0 bg-white">
            <p class="card-text"><small class="text-muted fs-14"><i class="fa fa-clock"></i> <?php echo time_elapsed_string($value1['created_at']); ?></small></p>
            </div>
          </div>
        </div>
      <?php } ?>
      </div>
    </div>
    <div class="col-sm-12 pt-4">
      <span class="float-end"><a href="marketing-news.php?cat=Marketing Campaign" class="text-red text-decoration-none Poppins-Bold fs-16">SEE MORE</a></span>
    </div>
    <div class="col-sm-12">
      <h2 class="Poppins-Bold mt-sm-5 mt-3">PRODUCT LAUNCHES</h2>
      <div class="h-3 w-110 bg-red mb-4"></div>
    </div>
      <div class="col-sm-12 prdlauHgt">
        <?php
          $value=fetchdata('Product Launches',4);
          foreach ($value as $value1) {
            # code...
         ?>
        <div class="card mb-3 shadow-lg">
          <div class="row g-0">
            <div class="col-md-3">
              <img src="images/<?php echo $value1['image'] ?>" class="img-fluid rounded-start w-100 h-100" alt="product">
            </div>
            <div class="col-md-9">
              <div class="card-body">
                <a class="text-dark text-decoration-none" href="child.php?cat=<?php echo $value1['id']; ?>&cat1=<?php echo $value1['category']; ?>">
                <h6 class="card-title Poppins-Bold hoverRed"><?php echo $value1['heading']; ?></h6></a>
                <p class="card-text text-justify fs-16"><?php echo  substr($value1['description'], 0, 200); ?><a href="child.php?cat=<?php echo $value1['id']; ?>&cat1=<?php echo $value1['category']; ?>" class="removeunderline hoverRed"> read more...</a></p>
              </div>

              <div class="card-footer bg-transparent card-text border-top-0 pb-3 fs-14"><div class="row"><small class="text-muted col-6"> <?php echo time_elapsed_string($value1['created_at']); ?> <i class="fa fa-clock"></i></small>
                <small class="text-muted col-6 text-end"> <a href="javascript:void(0)" class="text-secondary"></a></small>
                <!-- <i class="fa fa-share"></i> -->
              </div></div>

            </div>
          </div>
        </div>
      <?php } ?>
      </div>
      <div class="col-sm-12 pt-2">
      <span class="float-end"><a href="marketing-news.php?cat=Product Launches" class="text-red text-decoration-none Poppins-Bold fs-16">SEE MORE</a></span>
      </div>
    </div>
    </div>
  <div class="col-sm-6 col-md-4">
    <div class="row">
          <div class="col-sm-12">
            <h4 class="Poppins-Bold mt-sm-5 mt-3 finanHed">COMPANY FINANCIAL UPDATE</h4>
            <div class="h-3 w-110 bg-red mb-4"></div>
          </div>
          <div class="col-sm-12 fnclHgt">
             <?php
          $value=fetchdata('Company Financial Updates',4);
          foreach ($value as $value1) {
            # code...
         ?>
            <div class="card mb-1 shadow-lg">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="images/<?php echo $value1['image'] ?>" class="img-fluid rounded-start w-100 h-100" alt="financial">
                </div>
                <div class="col-md-8 p-2">
                <div class="card-body">
                  <a class="text-dark text-decoration-none" href="child.php?cat=<?php echo $value1['id']; ?>&cat1=<?php echo $value1['category']; ?>">
                  <h6 class="card-title fs-14 Poppins-Bold hoverRed"><?php echo $value1['heading']; ?></h6>
                </a>

                  <p class="card-text fs-14"><?php echo  substr($value1['description'], 0, 200); ?><a href="child.php?cat=<?php echo $value1['id']; ?>&cat1=<?php echo $value1['category']; ?>" class="removeunderline hoverRed"> read more...</a></p>
                  </div>
                  <div class="card-footer bg-transparent card-text border-top-0 pb-3"><div class="row"><p class="card-text"><small class="text-muted fs-12"><i class="fa fa-clock"></i> <?php echo time_elapsed_string($value1['created_at']); ?></small></p></div></div>
              </div>
              </div>
            </div>
          <?php } ?>
          </div>
          <div class="col-sm-12 pt-sm-3 pt-0">
            <span class="float-end"><a href="marketing-news.php?cat=Company Financial Updates" class="text-red text-decoration-none Poppins-Bold fs-16">SEE MORE</a></span>
          </div>

           <!-- advertisment -->
           <?php
             if(isset($globalad[19]['ad_code'])){
           ?>
          <div  class="col-sm-12 ps-sm-5 ps-2 pt-4 pb-4 pbs-m-0">
            <div  class="p-2 mx-5 mx-sm-0">
             <?php echo $globalad[19]['ad_code'] ?>
            </div>
          </div>
         <!-- !advertisment -->
          <?php } ?>
      </div>
    </div>
  </div>
</div>
<!-- start more video -->
<div class="container">
<div class="row wonderRow">
  <div class="col-sm-12">
      <h2 class="Poppins-Bold">MORE VIDEO</h2>
        <div class="h-3 w-110 bg-red mb-4"></div>
            <div class="owl-carousel">
              <?php
                $sql="SELECT * FROM videos_news where important=1 and is_active=0";
                $result=$pdo->query($sql);
                $data=$result->fetchAll();
                foreach ($data as $value) {
                ?>
                <div class="item cursor-pointer">
                  <div class="card">
                     <?php if(isset($value['yt_video'])){

                      ?>
                    <div>
                       <?php echo $value['yt_video']; ?>
                    </div>
                  <?php } elseif (isset($value['cus_video'])) {
                   ?>
                    <div class="videosize">
                      <?php echo $value['cus_video']; ?>
                    </div>
                  <?php } ?>
                    <div class="card-body">
                      <a class="text-dark text-decoration-none Poppins-Bold" href="#">
                        <h6 class="card-text text-justify hoverRed Poppins-Bold"><?php echo $value['heading']; ?>
                          </h6></a>
                      </div>

                      <div class="card-footer bg-white border-0 pb-3">
                      <p class="card-text"><small class="text-muted"><i class="fa fa-clock"></i> <?php echo time_elapsed_string($value['created_at']); ?> </small></p>
                    </div>

                  </div>
                </div>
              <?php } ?>
            </div>
        </div>
      </div>
      </div>
      <!-- end more video -->

      <!-- advertisment -->
<?php if(isset($globalad[20]['ad_code'])){ ?>
<div class="container">
<div  class="mx-sm-auto mx-5 mt-2 mt-sm-5 py-1 text-center">
 <?php echo $globalad[20]['ad_code']; ?>
</div>
</div>
<?php } ?>
<!-- !advertsiment -->




  </div>
</section>

 <?php include("footer.php"); ?>