<?php

//　女子申し込み用
//　データベース接続
$conn = "host='pgdb' dbname='westofc' user='westofc' password='ofc0610'";
if(!$db = pg_connect($conn)) {
echo '接続エラー<br>';
exit;
}

$str_sql = "select women from symbol_ekiden;";
$rs2 = pg_query($db, $str_sql);
$count_women = pg_fetch_result($rs2,0,0);

if ( $count_women > 0 ) {
$str_sql = "update symbol_ekiden set women = women - 1;";
pg_query($db, $str_sql);
header ('Location: https://enq.customer.ntt-west.co.jp/cgi-bin/enquete-fc.cgi/6q8f/');
} else {
header ('Location: http://www.ntt-west.co.jp/symbol/ekiden/form.php');
}

?>
