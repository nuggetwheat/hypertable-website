<?php
function tab_on($name) {
  if ($name == basename($GLOBALS['argv'][0], ".php"))
    echo ' class="on"';
}
?>
<div id="header">
	<div id="logo">
		<h1><a href="index.html"><img src="images/lgo-hypertable.jpg" alt="Hypertable" /></a></h1>
		<p>An Open Source, High Performance, Scalable Database</p>
	</div><!-- logo -->
	<div id="nav">
		<ul>
			<li><a href="about.html"<? tab_on("about") ?>>About</a></li>
			<li><a href="download.html"<? tab_on("download") ?>>Download</a></li>
			<li><a href="license.html"<? tab_on("license") ?>>License</a></li>
			<li><a href="documentation.html"<? tab_on("documentation") ?>>Documentation</a></li>
			<li><a class="external" href="http://code.google.com/p/hypertable/issues/list">Bug Tracker</a></li>
			<li><a href="mailing-list.html"<? tab_on("mailing-list") ?>>Mailing Lists</a></li>
			<li><a href="sponsors.html"<? tab_on("sponsors") ?>>Sponsors</a></li>
			<li><a href="feedback.html"<? tab_on("feedback") ?>>Feedback</a></li>
                        <li><a class="last" href="http://www.twitter.com/hypertable" target="_blank"><img src="http://twitter-badges.s3.amazonaws.com/t_mini-c.png" alt="Follow hypertable on Twitter" border="0" align="middle"/></a></li>
		</ul>
	</div><!-- nav -->
</div><!-- header -->
