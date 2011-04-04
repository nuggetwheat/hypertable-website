<?php
$v = urlencode($_REQUEST['v']);
header("Location: http://cdn.hypertable.com/download/packages/$v/hypertable-$v-src.tar.gz");
