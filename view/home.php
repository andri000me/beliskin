<?php
  $root = $_SERVER["DOCUMENT_ROOT"];
?>

<!DOCTYPE html>
<html lang="id">
<?php include($root.'/view/template/head.php'); ?>

<body>
  <?php include($root.'/view/template/header.php'); ?>
  <div class="home">
    <div class="container">

      <div style="display: flex; justify-content: center;">
        <div style="display: flex; align-items: center; margin-right: 35px">
          <img class="" alt="" imagelazyload="" src="/view/assets/img/home/benefits-item1.svg">
          <span class="benefit-text">Commission Free Trading</span>
        </div>
        <div style="display: flex; align-items: center">
          <img class="" alt="" imagelazyload="" src="/view/assets/img/home/benefits-item2.svg">
          <span class="benefit-text">100% Secure</span>
        </div>
      </div>

      <div class="row" style="margin-top: 40px">
        <div class="col l2"></div>
        <div class="col l8">
          <h1 class="welcome-text center">Welcome to a cross-game universe for trading virtual assets. Trade your Steam items now.</h1>
          <div style="display: flex; justify-content: space-evenly; margin-top: 80px">
            <a class="waves-effect waves-light btn-large p72" style="padding: 0 72px;">Buy Items</a>
            <a class="waves-effect waves-light btn-large p72" style="padding: 0 72px;">Sell Items</a>
          </div>
        </div>
        <div class="col l2"></div>
      </div>

    </div>
  </div>
  <?php include($root.'/view/template/footer.php'); ?>
</body>

</html>
