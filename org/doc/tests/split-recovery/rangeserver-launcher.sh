#!/bin/sh

VERSION=`cat ~/.hypertable_version`

~/hypertable/$VERSION/bin/Hypertable.RangeServer --config=hypertable.cfg --verbose $@ >> rangeserver.output

echo "" >> rangeserver.output
echo "!!!! CRASH ($@) !!!!" >> rangeserver.output
echo "" >> rangeserver.output

sleep 2

PIDFILE=/data1/doug/hypertable/$VERSION/run/Hypertable.RangeServer.pid

~/hypertable/$VERSION/bin/Hypertable.RangeServer --pidfile=$PIDFILE --config=hypertable.cfg --verbose >> rangeserver.output

