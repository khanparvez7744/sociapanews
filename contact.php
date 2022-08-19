<?php include("header.php"); ?>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['txtName'];
    $mobile = $_POST['txtphone'];
    $email = $_POST['txtemail'];
    $msg1 = $_POST['txtmessage'];
    $sql="INSERT into connected_people(name,mobile,email,msg,created_at) values('$name','$mobile','$email','$msg1', NOW())";
    if($pdo->query($sql)){
        echo "<script type='text/javascript'>
               alert('Your Record is Saved. I will connect you soon...');
             </script>";

             $to = "web@sociapa.com,dheeraj@sociapa.com";
             $from       = 'Sociapa News <news@sociapanews.com>';   #sender email address
             $fromname   = 'Sociapa News';
             $subject = "'You\'ve been contacted by $name";
             $headers = "From: ".$fromname." <".$from."> \r\n";
             $headers   .= "Reply-To: ". $email . "\r\n";
             $headers   .= "MIME-Version: 1.0\r\n";
             $headers   .= "Content-type: text/html; charset=utf-8\r\n";
             $headers   .= "X-Mailer: PHP". phpversion() ."\r\n" ;


        $msg  = "<table style='max-width:600px;width: 100%;'>\r\n\n";
        $msg .= "<tr><td>Name</td><td>:</td><td>".$name."</td></tr>\r\n\n";
        $msg .= "<tr><td>Email Address</td><td>:</td><td>".$email."</td></tr>\r\n\n";
        $msg .= "<tr><td>Contact</td><td>:</td><td>".$mobile."</td></tr>\r\n\n";
        $msg .= "<tr><td>Message</td><td>:</td><td>".$msg1."</td></tr>\r\n\n";
        $msg .= "-----------------------------------------\r\n";
        $result= mail($to,$subject,$msg,$headers);
    }
}
?>
    <section class="container">
       <section class="contSec py-sm-5 py-2 px-sm-5 px-2">
<div class="container">
    <div class="row">
        <div class="col-xl-7 px-2 px-sm-5 py-2 py-sm-5 mx-auto bg-white">
            <h2 class="Poppins-Bold text-red mb-sm-5 mb-3">Contact Us</h2>
            <form class="row g-sm-3 g-0" method="post" >
                <div class="col-sm-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="txtName" name="txtName" placeholder="Name" required="required">
                        <label for="txtName" class="fs-25 text-green">Name</label>
                    </div>
                </div>



                <div class="col-sm-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="txtphone" name="txtphone" placeholder="Phone">
                        <label for="txtphone" required="required" class="fs-25 text-green">Mobile Number</label>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="txtemail" name="txtemail" placeholder="Email" required="required">
                        <label for="txtemail" class="fs-25 text-green">Email Address</label>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="mb-3">
                        <textarea class="form-control" id="txtmessage" rows="7" name="txtmessage" placeholder="Message" required="required"></textarea>

                    </div>
                </div>
                <div class="col-sm-12">
                    <button type="submit" class="btn bg-red rounded-0 px-sm-5 px-3 py-2" name="submit">Submit</button>
                </div>
              </form>
            </div>
    </div>
</div>

       </section>
    </section>

<!-- start contact modal -->
        <div class="modal rounded-0 contactMdl" id="contModal" tabindex="-1" aria-labelledby="contModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0">
            <div class="modal-header justify-content-center border-bottom-0 pb-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-5 text-center">
            <h2>Thanks !! We will get back soon !!!</h1>
            <button type="button" name="" class="btn bg-green rounded-0 fs-25 btn-sm mt-5 px-5">Ok</button>
            </div>
            </div>
        </div>
        </div>
     <!--end contact modal -->

    <?php include("footer.php"); ?>