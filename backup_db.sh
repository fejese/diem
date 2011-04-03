#!/bin/bash

BU_DB="diem-sf2"
BU_USER="sf2"
BU_BASE="diem-sf2-`date +'%Y%m%d'`"
BU_DIR="./sql_dumps/"

if [ -f "$BU_DIR$BU_BASE.sql" ] || [ -f "$BU_DIR$BU_BASE.sql.gz" ]; then
  i=1
  while [ -f "$BU_DIR$BU_BASE-$i.sql" ] || [ -f "$BU_DIR$BU_BASE-$i.sql.gz" ]; do
    i=`expr $i + 1`
  done
  BU_NAME="$BU_BASE-$i"
else
  BU_NAME="$BU_BASE"
fi

echo "Full backup start" && \
  mysqldump $BU_DB -u $BU_USER -p > $BU_DIR$BU_NAME.sql && \
  echo "  Full backup done" && \
echo "Data-only backup start" && \
  mysqldump $BU_DB -nt -u $BU_USER -p > $BU_DIR$BU_NAME-data-only.sql && \
echo "All done! :)"
