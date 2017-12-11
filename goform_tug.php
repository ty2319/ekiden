<?php

//　綱引き申し込み用
//　データベース接続
$conn = "host='pgdb' dbname='westofc' user='westofc' password='ofc0610'";
if(!$db = pg_connect($conn)) {
echo '接続エラー<br>';
exit;
}

$str_sql = "select tug from symbol_ekiden;";
$rs3 = pg_query($db, $str_sql);
$count_tug = pg_fetch_result($rs3,0,0);

if ( $count_tug > 0 ) {
$str_sql = "update symbol_ekiden set tug = tug - 1;";
pg_query($db, $str_sql);
header ('Location: https://enq.customer.ntt-west.co.jp/cgi-bin/enquete-fc.cgi/4oer/');
} else {
header ('Location: http://www.ntt-west.co.jp/symbol/ekiden/form.php');
}

?>
