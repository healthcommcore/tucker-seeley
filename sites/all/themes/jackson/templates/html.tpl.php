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

</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
<!-- Popup window for external links -->
	<script>
		(function($){
			var extLinks = $('.popup');
			var width = $(window).width() / 1.5;
			var height = $(window).height();
			var xPos = window.screenX + (window.outerWidth - width) / 2;
			var yPos = window.screenY + (window.outerHeight - height) / 2;;
			var options = "resizeable=yes,menubar=yes,toolbar=yes,status=yes,location=yes," + 
				"height=" + height + ",width=" + width + 
				",top=" + yPos + ",left=" + xPos;
			for(var i = 0; i < extLinks.length; i++){
				extLinks[i].onclick = function(){
					window.open(this.href, this.value, options);
					return false;
				}
			}

			$(document).ready(function(){	
				var rotators = $('.rotate').hide(), i = 0;
				/*
				(function cycle(){
					rotators.eq(i).fadeIn(500).delay(5000).fadeOut(500, cycle);
					i = ++i % rotators.length;
				})();
				*/
			});
		})(jQuery);
	</script>
</body>
</html>
