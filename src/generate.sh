#!/bin/sh

srcdir=`dirname $0`

for f in $srcdir/*.php; do
  gen=`basename $f .php`.html
  echo "Generating $gen"
  php $f > $gen
done
