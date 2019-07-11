<?php
  $root = $_SERVER["DOCUMENT_ROOT"];

  function getInventoryData(){
	$url = 'https://steamcommunity.com/profiles/'.$_SESSION['steamid'].'/inventory/json/730/2';
	$json = json_decode(file_get_contents($url));

	foreach($json->rgDescriptions as $value => $v){

		// we cant know what value $v is because its different everytime
		//that's why we are using '=>' after rgDescription

		$name = $v->market_hash_name;
		$icon_url = $v->icon_url;

	   //http://cdn.steamcommunity.com/economy/image/$icon_url
	   //echo this link in img src
		echo "<img src='http://cdn.steamcommunity.com/economy/image/$icon_url'>";
		echo $name;
	}
  }
?>

<!DOCTYPE html>
<html lang="id">
<?php include($root.'/view/template/head.php'); ?>

<body>
  <?php include($root.'/view/template/header.php'); ?>
  <div class="home">
    <div class="container">

    <a class="waves-effect waves-light btn modal-trigger" href="#depositItemModal">Deposit Item</a>
    <div class="row">
	     <?php include ($root.'/controller/userInfo.php');
        // Protected content
        echo "Welcome back " . $steamprofile['personaname'] . "</br>";
        echo "here is your avatar: </br>" . '<img src="'.$steamprofile['avatarfull'].'" title="" alt="" /><br>'; // Display their avatar!
        echo "inventory: </br>" . getInventoryData(); // Display their avatar!
	     ?>
    </div>

    </div>
  </div>

  <!-- Deposit Item Modal -->
  <div id="depositItemModal" class="modal modal-fixed-footer" style="background-color: #253448;">
    <div class="modal-content" style="padding: 0px">
      <div style="
        background-image: url( 'https://steamcommunity-a.akamaihd.net/public/images/profile/profile_header_small_bg_texture.jpg');
        min-height: 60px;
      ">
        <h4>Item Inventory</h4>
      </div>
      <div style="display: flex">
        <div style="background-color: #3a3a3a;"></div>
        <div style="background-color: #3a3a3a;"></div>
        <div></div>
        <div></div>
      </div>
    </div>
    <div class="modal-footer" style="background-color: #253448;">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>

  <?php include($root.'/view/template/footer.php'); ?>
</body>

<script>

$(document).ready(function() {
  console.log("Ready");
  var elems = document.querySelectorAll('.modal');
  var instances = M.Modal.init(elems, {});
});

</script>

</html>
