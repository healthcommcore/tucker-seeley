<?php
?>
<!doctype html>
<html>
<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
<!--[if lte IE 8]>
	<script>
		var elements = ["header", "nav", "article", "footer"];
		for(i = 0; i < elements.length; i++)
			document.createElement(elements[i]);
	</script>
<![endif]-->

<!-- Google Analytics -->
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)j
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
 ga('create', 'UA-42499556-1', 'harvard.edu');
  ga('send', 'pageview');
</script>

</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
