DROP TABLE IF EXISTS 'query-log';
CREATE TABLE "query-log" (
AnonID,
Query,
QueryTime,
ItemRank,
ClickURL
);
LOAD DATA INFILE ROW_UNIQUIFY_CHARS=5 "aol.tsv" INTO TABLE 'query-log';
