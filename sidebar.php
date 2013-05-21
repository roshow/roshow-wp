<div id="sidebar">
	<div>
		<a href="http://roshow.net/feed/" title="Syndicate this site using RSS 2.0" target="_blank"><img src="http://roshow.net/wp-content/uploads/2011/02/rss1.png"></a>
		<a href="http://twitter.com/roshow" target="_blank"><img src="http://roshow.net/wp-content/uploads/2011/02/twitter.png"></a>
		<a href="http://facebook.com/roshow" target="_blank"><img src="http://roshow.net/wp-content/uploads/2011/02/facebook.png"></a>
	</div>
	<div style="position:relative;">
		<script src="http://widgets.twimg.com/j/2/widget.js"></script>
		<script>
			new TWTR.Widget({
			  version: 2,
			  type: 'profile',
			  rpp: 5,
			  interval: 6000,
			  width: 'auto',
			  height: 'auto',
			  theme: {
			    shell: {
			      background: '#eeeab6',
			      color: '#0F0F0F'
			    },
			    tweets: {
			      background: '#eeeab6',
			      color: '#000000',
			      links: '#000000'
			    }
			  },
			  features: {
			    scrollbar: false,
			    loop: false,
			    live: false,
			    hashtags: true,
			    timestamp: true,
			    avatars: false,
			    behavior: 'all'
			  }
			}).render().setUser('roshow').start();
		</script>
	</div>
	<div class="sidebar_content">
	<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : endif?>
	</div>

</div>