<?php
	$root = $_SERVER["DOCUMENT_ROOT"];
	include($root.'/controller/steamauth.php');
?>
<nav class="header">
  <div class="nav-wrapper blue-grey darken-4">
    <ul id="nav-mobile" class="left hide-on-med-and-down">
      <li><a href="">Logo</a></li>
      <li><a href="">Search bar</a></li>
      <li><a href="">Catalog</a></li>
    </ul>
    <a href="#" class="brand-logo center">Beli Skin</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
			<?php if (isset($_SESSION['steamid'])) { ?>
				<li><a href="deposit.php">Deposit Item</a></li>
			<?php } ?>
      <li><a href="">Get Started</a></li>
      <li><?php (!isset($_SESSION['steamid']) ? loginbutton() :logoutbutton()) ?></li>
    </ul>
  </div>
</nav>
