<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<head>
  <?php require_once("layouts/headmeta.php"); ?>
</head>

<body id="home">

    <section id="mast_header" class="full_section">
      <?php require_once("layouts/header.php"); ?>
      <section id="banner" class="red_gradient full_section">
        <ul id="main_sections" class="content">
          <li>
            <img src="public/images/logo.png" alt="">
            <header class="custom_bold">Some Option</header>
            <p>Some text about the option that is pretty dang cool.</p>
            <a href="" title="">Some link to some option</a>
          </li>
          <li>
            <img src="public/images/logo.png" alt="">
            <header class="custom_bold">Some Option</header>
            <p>Some text about the option that is pretty dang cool.</p>
            <a href="" title="">Some link to some option</a>
          </li>
          <li>
            <img src="public/images/logo.png" alt="">
            <header class="custom_bold">Some Option</header>
            <p>Some text about the option that is pretty dang cool.</p>
            <a href="" title="">Some link to some option</a>
          </li>
          <div class="clear"></div>
        </ul>
      </section>
      <div class="clear"></div>
    </section>
    
    <section id="content" class="full_section">
      <?php require_once("views/index.php"); ?>
      <div class="clear"></div>
    </section>

    <footer class="full_section">
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