<?php
require_once $abs_us_root . $us_url_root . 'usersc/templates/' . $settings->template . '/container_close.php'; //custom template container
require_once $abs_us_root . $us_url_root . 'users/includes/page_footer.php';
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha512-Oy5BruJdE3gP9+LMJ11kC5nErkh3p4Y0GawT1Jrcez4RTDxODf3M/KP3pEsgeOYxWejqy2SPnj+QMpgtvhDciQ==" crossorigin="anonymous"></script>
<script>
var $hamburger = $(".hamburger");
$hamburger.on("click", function(e) {
  $hamburger.toggleClass("is-active");
  // Do something else, like open/close menu
});
</script>
<footer>
<p align="center">&copy; <?php echo date("Y"); ?> <?=$settings->copyright; ?></p>
</footer>
<?php require_once($abs_us_root.$us_url_root.'users/includes/html_footer.php');?>
