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
        <div class="col s12"><p>s12</p></div>
        <div class="col s12 m4 l2"><p>s12 m4</p></div>
        <div class="col s12 m4 l8"><p>s12 m4</p></div>
        <div class="col s12 m4 l2"><p>s12 m4</p></div>
      </div>
      <div class="row">
        <div class="col s12 m6 l3"><p>s12 m6 l3</p></div>
        <div class="col s12 m6 l3"><p>s12 m6 l3</p></div>
        <div class="col s12 m6 l3"><p>s12 m6 l3</p></div>
        <div class="col s12 m6 l3"><p>s12 m6 l3</p></div>
      </div>
      <p>-</p>

      <h3>Item List</h3>
      <p>Item List</p>
    </div>
  </div>
  <?php include($root.'/view/template/footer.php'); ?>
</body>

</html>
