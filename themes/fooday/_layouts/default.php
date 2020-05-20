---
name: Default Layout
description: Front page main layout
---

---

<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
  <head>
  	
	<?= get_metas(); ?>
	
	<title>Restaurante Castellana - <?= get_title(); ?></title>
	
	<!-- Google Font-->
	<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
	
	<?= get_style_tags(); ?>
	
	
  </head>
  <body>
		
		<?= page(); ?>
	
		<?= get_script_tags(); ?>
		
  </body>
</html>