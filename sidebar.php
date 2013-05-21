<div id="sidebar">
	<div>
		<a href="http://roshow.net/feed/" title="Syndicate this site using RSS 2.0" target="_blank"><img src="http://roshow.net/wp-content/uploads/2011/02/rss1.png"></a>
		<a href="http://twitter.com/roshow" target="_blank"><img src="http://roshow.net/wp-content/uploads/2011/02/twitter.png"></a>
		<a href="http://facebook.com/roshow" target="_blank"><img src="http://roshow.net/wp-content/uploads/2011/02/facebook.png"></a>
	</div>
		<a class="twitter-timeline" href="https://twitter.com/roshow" data-widget-id="336751316292476928">Tweets by @roshow</a>
		<script>
		! function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0],
				p = /^http:/.test(d.location) ? 'http' : 'https';
			if (!d.getElementById(id)) {
				js = d.createElement(s);
				js.id = id;
				js.src = p + "://platform.twitter.com/widgets.js";
				fjs.parentNode.insertBefore(js, fjs);
			}
		}(document, "script", "twitter-wjs");
		</script>
	<div class="sidebar_content">
	<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : endif?>
	</div>

</div>