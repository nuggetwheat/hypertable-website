<?php
$v = urlencode($_REQUEST['v']);
header("Location: http://www.hypertable.com/download/packages/$v/hypertable-$v-src.tar.gz");
