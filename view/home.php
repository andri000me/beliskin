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

      <div class="row">
        <div class="col s12 m6 l3"></div>
        <div class="col s12 m6 l3 center">
          <img class="benefits__img" alt="" imagelazyload="" src="/view/assets/img/home/benefits-item1.svg">
          <span class="benefit-text">Commission Free Trading</span>
        </div>
        <div class="col s12 m6 l3 center">
          <img class="benefits__img" alt="" imagelazyload="" src="/view/assets/img/home/benefits-item2.svg">
          <span class="benefit-text">100% Secure</span>
        </div>
        <div class="col s12 m6 l3"></div>
      </div>

    </div>
  </div>
  <?php include($root.'/view/template/footer.php'); ?>
</body>

</html>
