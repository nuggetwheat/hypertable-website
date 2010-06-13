<? include("release.inc") ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="inc/styles.css" />
<title>Download Hypertable</title>
</head>
<body>
<div id="all">
<? include("header.inc") ?>
	<div id="contents-container">
		<div id="contents">
			<div id="page" class="sub download">
				<div class="left">
					<h2>Download source code</h2>
					<p class="btn-big-download">
						<a href="download.php?v=<?= $download_version ?>">
							Download
							<span class="version">Hypertable <?= $release_version ?></span>
							<span class="date"><?= $release_date ?></span>
						</a>
					</p>
					<p>Get the latest <a class="external" href="http://code.google.com/p/hypertable/wiki/SourceCode?tm=4">source code from the repository</a></p>
					<h2>Download binary packages</h2>
					<p>For your convenience, some binary packages are available at <a href="http://www.hypertable.com/download/">www.hypertable.com/download</a></p>
				</div><!-- left -->
				<div class="right">
<? include("news.inc") ?>
				</div><!-- right -->
			</div><!-- home -->
		</div><!-- contents -->
	</div><!-- contents-container -->
</div><!-- all -->
<? include("footer.inc") ?>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-15179427-1");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>
