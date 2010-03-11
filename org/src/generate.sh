#!/bin/sh

srcdir=`dirname $0`

generate() {
  for f in $srcdir/*.$1; do
    gen=`basename $f .$1`.$2
    echo "Generating $gen"
    php $f > $gen
  done
}

generate php html
generate phx xml
