<?php
$v = htmlspecialchars($_REQUEST['v']);
$v0 = htmlspecialchars(preg_replace('/-\w+$/', '', $v));
header("Location: http://hypertable.googlecode.com/svn/tags/v$v0/hypertable-$v-src.tar.gz");
