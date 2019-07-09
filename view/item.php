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

    <div class="row">
	<?php include ($root.'/controller/userInfo.php');

    //Protected content
    echo "Welcome back " . $steamprofile['personaname'] . "</br>";
    echo "here is your avatar: </br>" . '<img src="'.$steamprofile['avatarfull'].'" title="" alt="" /><br>'; // Display their avatar! 
    echo "inventory: </br>" . getInventoryData(); // Display their avatar! 
	?>
    </div>

    </div>
  </div>
  <?php include($root.'/view/template/footer.php'); ?>
</body>

</html>
