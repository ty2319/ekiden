<?php

//　男子申し込み用
//　データベース接続
$conn = "host='pgdb' dbname='westofc' user='westofc' password='ofc0610'";
if(!$db = pg_connect($conn)) {
echo '接続エラー<br>';
exit;
}

$str_sql = "select men from symbol_ekiden;";
$rs1 = pg_query($db, $str_sql);
$count_men = pg_fetch_result($rs1,0,0);

if ( $count_men > 0 ) {
$str_sql = "update symbol_ekiden set men = men - 1;";
pg_query($db, $str_sql);
header ('Location: https://enq.customer.ntt-west.co.jp/cgi-bin/enquete-fc.cgi/xqht/');
} else {
header ('Location: http://www.ntt-west.co.jp/symbol/ekiden/form.php');
}

?>
