<?php
  $page_title = 'Home Page';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>
 <div class="col-md-12">
    <div class="panel">
      <div class="jumbotron text-center">
         <h1>Welcome to KEBS home page!</h1>
         <p>KEBS - InventoWeb</p>
         <img class="img-square img-size-3" src="uploads/users/logo.png" alt="" style="border-radius: 40%;">
      </div>
    </div>
 </div>
</div>
<?php include_once('layouts/footer.php'); ?>
