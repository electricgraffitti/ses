<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<head>
  <?php require_once("layouts/headmeta.php"); ?>
</head>

<body>
  <!-- Application Layout -->
  <div id="wrapper">

	  <header>
      <?php require_once("layouts/header.php"); ?>
      <div class="clear"></div>
	  </header>
	  
    <div id="content">
			<?php require_once("views/index.php"); ?>
			<div class="clear"></div>
    </div>

    <footer>
      <?php require_once("layouts/footer.php"); ?>
      <div class="clear"></div>
    </footer>
    <div class="clear"></div>
	</div>
	
	
	
	<?php require_once("layouts/scripts.php"); ?>
	
  <script type="text/javascript" charset="utf-8">
    $(document).ready(function() {

    });
  </script>
</body>

</html>