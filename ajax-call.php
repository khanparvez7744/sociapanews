 <?php require('conn.php'); ?>
 <?php
  $d1=new dbconn();
  $pdo=$d1->connect();
  if(isset($_POST['email'])){
    $email = $_POST['email'];
    $sql = "INSERT INTO subscriber(email,created_at) values ('$email', NOW())";
    if($pdo -> query($sql)){
     $to = $email;
             $from       = 'sociapanews <news@sociapanews.com>';   #sender email address
             $subject = "sociapanews";
             $headers = "From: <".$from."> \r\n";
             $headers   .= "Reply-To: ". $email . "\r\n";
             $headers   .= "MIME-Version: 1.0\r\n";
             $headers   .= "Content-type: text/html; charset=utf-8\r\n";
             $headers   .= "X-Mailer: PHP". phpversion() ."\r\n" ;


        $msg  = "<h1>Dear Sir/Madam,</h1><br>";
        $msg .= "<p>Thank you for subscribing, you will be the first to know about new releases, information.</p>";
        $msg .= "<p>Stay Tuned</p><br>";
        $msg .= "<h4>Thanks & Regards</h4><br>";
        $msg .= "<h4>sociapanews</h4><br>";
        $msg .= "-----------------------------------------\r\n";
        $result= mail($to,$subject,$msg,$headers);
    }
  }
 ?>