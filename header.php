
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <div class="lang-switch">
      <button onclick="switchLang('fa')">FA</button>
      <button onclick="switchLang('en')">EN</button>
    </div>
    <h1>🌐 Maryland | مری لند</h1>
    <nav>
      <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
    </nav>
</header>
<script>
function switchLang(lang) {
  if(lang==='en'){document.body.dir='ltr';alert("نسخه انگلیسی فعال می‌شود");}
  else {document.body.dir='rtl';alert("نسخه فارسی فعال شد");}
}
</script>
