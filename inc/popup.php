
<?php 
if(isset($_POST['signup'])){
 $d1=new dbconn();
 $pdo=$d1->connect();
  $name = $_POST['name1'];
  $email = $_POST['email1'];
  $phone = $_POST['mobile'];
  $password = password_hash($_POST['password1'], PASSWORD_DEFAULT);
  $sql="INSERT INTO user (name,email,mobile,password,is_admin,created_at) values ('$name','$email','$phone','$password','1', NOW())";
  $pdo-> query($sql);
}

if(isset($_POST['login'])){
     $d1=new dbconn();
 $pdo=$d1->connect();
   $email= $_POST['email'];
   $password = $_POST['password'];
   $sql="SELECT * FROM user where email='$email' and is_admin=1 and is_active=0 limit 1";
   $result = $pdo->query($sql);
   $data = $result->fetch();
   if($data['email'] === $email){
       $varify=password_verify($password, $data['password']);
    if($varify){
        $_SESSION['user'] = $data['name'];
    }else
    echo "<script> alert('invalid password'); </script>";
   }
   else{
    echo "<script> alert('invalid email'); </script>";
   }
}
?>

<section class="loginModal">
  <!-- start login modal -->
<div class="modal fade rounded-0 loginMdl" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content rounded-0 pt-3 pb-0">
      <div class="modal-header justify-content-center border-bottom-0 pb-0">
        <h4 class="modal-title Poppins-Bold text-red">Log-in to your account</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body px-5">
        <form method="post">
          <div class="mb-2">
            <label class="col-form-label ">Email</label>
            <input type="text" name="email" class="form-control rounded-0">
          </div>
          <div class="">
            <label name="password" class="col-form-label ">Password</label>
            <input type="password" class="form-control rounded-0" name="password" >
          </div>
          <div class="text-center pt-4">
          <button type="submit" class="btn bg-red rounded-0 px-4" name="login">Login</button>
          <button type="button" class="btn bg-outline-red rounded-0 ms-sm-2 ms-1 px-4" data-bs-dismiss="modal">Cancel</button>
          </div>
          <div class="text-center py-3">
          <small class=" text-secondary">Not a member? <a href="javascript:void(0)" class="text-decoration-none text-secondary" id="signUpClick" data-bs-toggle="modal"  data-bs-target="#exampleModalsignup">Sign Up</a></small> 
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- end login modal -->
<!-- start registration modal -->
<div class="modal fade rounded-0 loginMdl" id="exampleModalsignup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content rounded-0 py-3">
      <div class="modal-header justify-content-center border-bottom-0 pb-0">
        <h4 class="modal-title Poppins-Bold text-red" id="exampleModalLabel text-green">Create an account</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body px-5 pb-1 pt-0">
        <form method="post">
          <div class="">
            <label class="col-form-label ">Name</label>
            <input type="text" name="name1" class="form-control rounded-0">
          </div>
          <div class="">
            <label class="col-form-label ">Email Address</label>
            <input type="text" name="email1" class="form-control rounded-0">
          </div>
          <div class="">
            <label class="col-form-label ">Phone Number</label>
            <input type="text" name="mobile" class="form-control rounded-0">
          </div>
          <div class="">
            <label name="password1" class="col-form-label ">Password</label>
            <input type="password" class="form-control rounded-0" name="password1">
          </div>
          <div class="text-center pt-4">
          <button type="submit" name="signup" class="btn bg-red rounded-0 px-4">Sign Up</button>
          <button type="button" class="btn bg-outline-red rounded-0 ms-sm-3 ms-1 px-4" data-bs-dismiss="modal">Cancel</button>
          </div>
          <div class="text-center pt-3">
          <small class=" text-secondary">Already have an account? <a href="javascript:void(0)" class="text-decoration-none text-secondary"  data-bs-toggle="modal" data-bs-target="#exampleModalsignup">Login</a></small> 
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- end registration modal -->
</section>