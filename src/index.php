<? include("release.inc") ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="description" content="Hypertable is an open source project based on published best practices and our own experience in solving large-scale data-intensive tasks. Our goal is nothing less than that Hypertable become the world's most massively parallel high performance database platform." />
<meta http-equiv="keywords" content="hyper table, hyypertable, hipertable, hyprotable, hypertble" />
<link rel="stylesheet" type="text/css" href="inc/styles.css" />
<link rel="alternate" type="application/atom+xml" href="atom.xml" title="Hypertable News &amp; Announcements" />

<title>Hypertable: An Open Source, High Performance, Scalable Database</title>
<script type="text/javascript">
	var cubeTimer;
	var preload = new Image();
	preload.src = "images/gra-tesseract.gif";

	function animateCube(img) {
		clearTimeout(cubeTimer);
		img.src = preload.src;
	}
	function stillCube(img) {
		cubeTimer = setTimeout(function() {
			img.src = "images/tesseract.jpg" }, 5100);
	}
</script>
</head>
<body>
<div id="all">
<? include("header.inc") ?>
	<div id="contents-container">
		<div id="contents">
			<div id="page" class="home">
				<div class="left">
					<h2>Performance <span>and</span> scalability.</h2>
					<h3>In a web-driven world, datasets are larger than ever before – with “web scale” becoming the term of choice to describe the ultimate size of problems.</h3>
					<p>
						Hypertable is an open source project based on published best practices and our own experience in solving large-scale data-intensive tasks. Our goal is to bring the benefits of new levels of both performance and scale to many data-driven businesses who are currently limited by previous-generation platforms.  Our goal is nothing less than that Hypertable become one of the world’s most massively parallel high performance database platforms.<br /><br />
					</p>
					<p class="more"><a href="about.html" class="morebutton">More about
					Hypertable »</a></p><br /><br />
			</div><!-- left -->
			<div class="right">
				<p align="center"><img id="cube" src="images/tesseract.jpg" alt="Hypertable tesseract image" width="150" height="173" onmouseover="animateCube(this)" onmouseout="stillCube(this)" /></p>
				<p class="btn-big-download">
					<a href="download.html">
						Download
						<span class="version">Hypertable <?= $release_version ?></span>
						<span class="date"><?= $release_date ?></span>
					</a>
				</p>
			</div><!-- right -->
		</div><!-- home -->
<? include("news.inc") ?>
			<div id="sponsors">
				<h3>Become a Sponsor</h3>
				<dl>
					<dd>If you would like to sponsor this project, visit the <a href="sponsors.html">Sponsors</a> page or send an email to <a href="mailto:sponsor@hypertable.org">sponsor@hypertable.org »</a></dd>
				</dl>
			</div><!-- sponsors -->
		</div><!-- contents -->
	</div><!-- contents-container -->
</div><!-- all -->
<? include("footer.inc") ?>
</body>
</html>
