<?php
function req_get($name, $default) {
  if (isset($_REQUEST[$name]))
    return $_REQUEST[$name];
  return $default;
}

$message=trim(req_get('message', null));

if (!empty($message)) {
  $subject = req_get('subject', '[Feedback] <no subject>');
  $from = req_get('email', 'Feedback <no email>');
  mail('support@hypertable.org', $_REQUEST['subject'], print_r($_REQUEST, 1),
       "From: $email");
  $blurb = "Thanks for your feedback!";
  //$blurb .="<pre>". htmlspecialchars(print_r($_REQUEST,1)) ."</pre>";
}
else {
  $blurb = "Thanks for kicking around the tires, feel free to say something!";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="description" content="We'd love to hear from you, if you're not comfortable to discuss in the forum feel free to use the following feedback form" />
<link rel="stylesheet" type="text/css" href="inc/styles.css" />
<title>Feedback</title>
</head>
<body>
<div id="all">
<div id="header">
<div id="logo">
<h1><a href="index.html"><img src="images/lgo-hypertable.jpg" alt="Hypertable" /></a></h1>
<p>An Open Source, High Performance, Scalable Database</p>
</div><!-- logo -->
<div id="nav">
<ul>
<li><a href="about.html">About</a></li>
<li><a href="download.html">Download</a></li>
<li><a href="license.html">License</a></li>
<li><a href="documentation.html">Documentation</a></li>
<li><a href="http://code.google.com/p/hypertable/issues/list">Bug Tracker</a></li>
<li><a href="mailing-list.html">Mailing Lists</a></li>
<li><a href="sponsors.html">Sponsors</a></li>
<li class="last"><a href="feedback.html" class="on">Feedback</a></li>
</ul>
</div><!-- nav -->
</div><!-- header -->
<div id="contents-container">
<div id="contents">
<div id="news" style="margin: 2em">
<h3><?= $blurb ?></h3>
<dl>
<dt><a href="/feedback.html">Go back to feedback page</a></dt>
</dl>
</div>
</div>
</div>
</div>
<div id="footer-container">
<div id="footer">
<p class="nav">
<a href="about.html">About</a> |
<a href="download.html">Download</a> |
<a href="license.html">License</a> |
<a href="documentation.html">Documentation</a> |
<a href="http://code.google.com/p/hypertable/issues/list">Bug Tracker</a> |
<a href="mailing-list.html">Mailing Lists</a> |
<a href="sponsors.html">Sponsors</a> |
<a href="feedback.html">Feedback</a> |
<a href="sitemap.html">Sitemap</a>
</p><!-- . nav -->
<p class="copy">Copyright 2008 Hypertable. All rights reserved.</p>
<ul>
<li class="first"><span>Sponsors:</span></li>
<li><a href="http://corporate.zvents.com" target="_blank"><img src="images/lgo-zvents.gif" alt="Zvents" /></a></li>
</ul>
</div><!-- footer -->
</div><!-- footer-container -->
</body>
</html>
