<?php
$v = urlencode($_REQUEST['v']);
header("Location: http://hypertable.googlecode.com/files/hypertable-$v-src.tar.gz");
