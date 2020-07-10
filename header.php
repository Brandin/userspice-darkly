<?php require_once($abs_us_root.$us_url_root.'users/includes/template/header1_must_include.php'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.5.0/darkly/bootstrap.min.css" integrity="sha512-3dJRgi2IMRLFj7cueBWFJImQVLWFCrMBHVYyCaHGoFlHpHEerp1VujyqPEnpNX5JWXFKU+mXRMiCB3d77/c9ww==" crossorigin="anonymous" />
<link href="<?=$us_url_root?>usersc/templates/<?=$settings->template?>/assets/css/hamburgers.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
<?php
if (file_exists($abs_us_root.$us_url_root.'usersc/templates/'.$settings->template.'.css')) {?> <link href="<?=$us_url_root?>usersc/templates/<?=$settings->template?>.css" rel="stylesheet"> <?php } ?>
</head>
<?php require_once($abs_us_root.$us_url_root.'users/includes/template/header3_must_include.php'); ?>
