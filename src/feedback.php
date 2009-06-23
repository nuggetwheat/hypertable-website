<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="description" content="Provide feedback on compiling, installing, and running the Hypertable software, as well as the documentation." />
<link rel="stylesheet" type="text/css" href="inc/styles.css" />
<title>Hypertable Feedback</title>
</head>
<body>
<div id="all">
<? include("header.inc") ?>
<div id="contents-container">
	<div id="contents">
		<div id="page" class="sub feedback">
			<div class="left">
				<h2>Feedback</h2>
				<p>If you have any trouble compiling, installing, and/or running Hypertable, notice any problems with the documentation, or have suggestions of any kind, please post to one of the Hypertable <a href="mailing-list.html">mailing lists</a> or use this form to provide your feedback.</p>
				<form action="feedback.php" method="post">
					<fieldset>
						<p>All fields are required.</p>
						<dl>
						<dt><label for="name">Your name:</label></dt>
						<dd><input type="text" id="name" name="name" /></dd>
						<dt><label for="email">Your email address:</label></dt>
						<dd><input type="text" id="email" name="email" /></dd>
						<dt><label for="subject">Subject:</label></dt>
						<dd><input type="text" id="subject" name="subject" /></dd>
						<dt><label for="message">Feedback:</label></dt>
						<dd><textarea name="message" rows="9" cols="100%" id="message" ></textarea></dd>
						<dt><label for="version">Version:</label></dt>
						<dd><input type="text" id="version" name="version" /></dd>
						<dt><label for="attachment">Attachment:</label></dt>
						<dd class="attach"><input type="text" id="attachment" name="attachment" /><a href="#" class="file">Browse</a></dd>
						</dl>
						<hr noshade="noshade" width="500" />
						<p>
							<input type="reset" class="reset" value="CLEAR FORM" />
							<input type="submit" class="submit" value="SUBMIT FORM" />
						</p>
					</fieldset>
				</form>
				<p>The Feedback information will be used to help resolve any Hypertable issues that are encountered.  Please note that the information included in the form may also be posted on the Hypertable public mailing list. <img src="images/gra-end-of-page.gif" alt=" " /></p>
			</div><!-- left -->
		</div><!-- home -->
	</div><!-- contents -->
</div><!-- contents-container -->
</div><!-- all -->
<? include("footer.inc") ?>
</body>
</html>
