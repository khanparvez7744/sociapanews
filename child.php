<?php include("header.php"); ?>

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
    #hd1{
        font-size: 30px !important;
        margin-bottom: 15px !important;
        text-transform: capitalize !important;
    }
</style>

<section class="py-lg-4 py-sm-2 py-1">
  <div class="container">
  <div class="row justify-content-center py-1 pb-sm-3 mb-sm-3">
    <div class="col-6 bg-white text-center py-2">
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
<?php
foreach ($value as $data) {
?>
    <div class="row">
      <div class="col-sm-9 pe-sm-5 pe-3">
        <h1 id="hd1" class="Poppins-Bold"><?php echo $data['heading']; ?></h1>
        <img src="images/<?php echo $data['banner']; ?>" class="img-fluid w-100 mt-1 mb-sm-5 mb-2" alt="sports">
          <?php
           $text =$data['details'];
           $splitat = strpos($text," ",strlen($text)/2);
           $col1 = substr($text, 0, $splitat);
           $col2 = substr($text, $splitat);
        //   echo $col1;
        echo $text;
         ?>

         <!-- advertisment area -->
      <!--   <?php if($globalad[9]['ad_code']){ ?>-->
      <!--  <div class="mx-auto my-4 py-sm-4 py-2 text-center bg-white">-->
      <!--   <?php echo $globalad[9]['ad_code']; ?>-->
      <!--  </div>-->
      <!--<?php } ?>-->

<div>


</div>

<!-- start social icon -->
<div class="border-top col-sm-6 col-3 mx-auto mb-sm-4 mb-3"></div>
<div class=""><div class="text-center">
   <a href="https://www.facebook.com/sharer/sharer.php?u=https://sociapanews.com/child.php?cat=<?php echo $value['id'] ?>&cat1=<?php echo $value['category'] ?>&t=<?php echo $value['heading'] ?>" class="me-4 d-inline-block" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook"><i class="fab fa-facebook text-danger fs-2"></i></a>
                <a href="https://twitter.com/share?u=https://sociapanews.com/child.php?cat=<?php echo $value['id'] ?>&cat1=<?php echo $value['category'] ?>&t=<?php echo $value['heading'] ?>" class="me-4 d-inline-block" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter"><i class="fab fa-twitter text-danger fs-2"></i></a>
                <a href="https://www.linkedin.com/shareArticle?mini=true&u=https://sociapanews.com/child.php?cat=<?php echo $value['id'] ?>&cat1=<?php echo $value['category'] ?>&t=<?php echo $value['heading'] ?>" class="me-4 d-inline-block" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Linkedin"><i class="fab fa-linkedin text-danger fs-2"></i></a>
                <a href=https://api.whatsapp.com/send?text=https://sociapanews.com/child.php?cat=<?php echo $value['id'] ?>&cat1=<?php echo $value['category'] ?>&t=<?php echo $value['heading'] ?>" class="me-4 d-inline-block" data-action="share/whatsapp/share" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on whatsapp"><i class="fab fa-whatsapp text-danger fs-2"></i></a>
</div></div>

<!-- end social icons -->


<div class="col-sm-12 lastBorder mt-5"></div>



      </div>
      <div class="col-sm-3 py-3 ps-2">
        <div class="bg-white p-3">
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
<div class="mb-5">

</div>
<?php } ?>
  </div>
</section>

 <?php include("footer.php"); ?>