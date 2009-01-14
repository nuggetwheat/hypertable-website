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
					<h2>Download</h2>
					<p class="btn-big-download">
						<a href="download.php?v=<?= $download_version ?>">
							Download
							<span class="version">Hypertable <?= $release_version ?></span>
							<span class="date"><?= $release_date ?></span>
						</a>
					</p>
					<p>Get the latest <a class="external" href="http://code.google.com/p/hypertable/wiki/SourceCode?tm=4">source code from the repository</a></p>
				</div><!-- left -->
				<div class="right">
<? include("news.inc") ?>
				</div><!-- right -->
			</div><!-- home -->
		</div><!-- contents -->
	</div><!-- contents-container -->
</div><!-- all -->
<? include("footer.inc") ?>
</body>
</html>
