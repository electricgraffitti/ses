<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<head>
  <?php require_once("layouts/headmeta.php"); ?>
</head>

<body class="internal">
<?php require_once("layouts/facebook_script.php"); ?>
    <section id="mast_header" class="full_section">
      <?php require_once("layouts/header.php"); ?>
      <div class="clear"></div>
    </section>
    
    <section id="content" class="full_section">
      <?php require_once("views/service_content.php"); ?>
      <div class="clear"></div>
    </section>

    <footer id="mast_footer" class="full_section">
      <?php require_once("layouts/footer.php"); ?>
      <div class="clear"></div>
    </footer>
    <div class="clear"></div>

  
  
  
  <?php require_once("layouts/scripts.php"); ?>
  
  <script type="text/javascript" charset="utf-8">
    $(document).ready(function() {

    });
  </script>
</body>

</html>