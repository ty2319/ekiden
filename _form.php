<?php

//データベース接続
$conn = "host='pgdb' dbname='westofc' user='westofc' password='ofc0610'";
if(!$db = pg_connect($conn)) {
echo '接続エラー<br>';
exit;
}

$str_sql = "select * from symbol_ekiden;";
$rs = pg_query($db, $str_sql);

$count = pg_fetch_assoc($rs);

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"
"http://www.w3.org/TR/REC-html40/loose.dtd">
<html lang="ja">
<head>
	<title>ＮＴＴ西日本｜第10回ＮＴＴグループ駅伝大会</title>
	<meta http-equiv="Content-Type" content="text/html; charset=SHIFT_JIS">
	<meta http-equiv="Content-Script-Type" content="text/javascript">
	<meta http-equiv="Content-Style-Type" content="text/css">
	<meta name="title" content="NTT WEST Official Web site">
	<meta name="copyright" content="Copyright (C) NIPPON TELEGRAPH AND TELEPHONE WEST CORPORATION">
	<meta name="keywords" content="NTT西日本">
	<meta name="description" content="NTT WEST Official Web site,NTT西日本公式ホームページ">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
	<script src="../js/slider.js" type="text/javascript"></script>
	<script type="text/javascript" src="../js/jquery.pngFix.js"></script>
	<script src="../js/alphafilter.js" type="text/javascript" defer></script>
	<script type="text/javascript" src="../../popwin.js"></script>
	<script type="text/javascript" src="../../font.js"></script>
	<script type="text/javascript" src="../../function.js"></script>

<!--headerSSI1（ｈｅａｄ内）-->
<link rel="stylesheet" href="../top03.css" type="text/css">
<style type="text/css">
<!--
#banner {
	margin: 0;
	padding: 0;
}
#banner li {
	display: inline;
	margin-right: -5px;
}
#banner img {
	border: none;
}
-->
</style>

</head>


<!--headerSSI2（ｈｅａｄ後）-->
<!---->
<body bgcolor="#FFFFFF" text="#000000" vlink="#FF0000" alink="#FF0000" link="#FF0000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">


<a name="pageTop" id="pageTop"></a>


<!--Header-->
<table width="600" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td nowrap><img src="/symbol/share_img/spacer.gif" width="8" height="1" alt=""><a href="http://www.ntt-west.co.jp/"><img src="/symbol/share_img/ci.gif" alt="NTT西日本　“光”。ひろがる。ひびきあう。" width="147" height="53" border="0" vspace="12"></a><img src="/symbol/share_img/hd_line_sougou.gif" alt="" width="44" height="78"></td><td align="right" class="right-text">　</td>
	</tr>
</table><table width="600" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td><img src="/symbol/share_img/footer_back.gif" alt="" width="600" height="7"></td>
	</tr>
</table>


<table width="600" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td colspan="4"><img src="/symbol/share_img/spacer.gif" width="1" height="5" alt=""></td>
  </tr>
  <tr>
  <td colspan="4" align="center"><img src="img/tit_form.gif" alt="参加・変更申込フォーム"></td>
  </tr>
  <tr>
  <td colspan="4"><img src="/symbol/share_img/spacer.gif" width="1" height="10" alt=""></td>
  </tr>
      <tr>
  <td colspan="4">
  
  <!-- メインコンテンツ ここから-->

<table width="560" border="0" align="center" cellpadding="2">

  <tr>
    <td>　</td>
  </tr>
  <tr>
    <td>変更お申し込みは終了しました。<br><br></td>
  </tr>

  <tr>
    <td>　</td>
  </tr>

  <tr>
    <td>今後、どうしても選手の変更が必要な場合は、当日、受付にてお申し出ください。<br>その際は、当日健康チェックシートを記入の上、医師の問診を受けていただきます。
    </td>
  </tr>
  <tr>
    <td>　</td>
  </tr>

  <tr>
    <td>　</td>
  </tr>
    </td>
  </tr>
  <tr>
    <td>　</td>
  </tr>

</table>

  <!-- メインコンテンツ ここまで-->

  </td>
  </tr>
    <tr>
  <td colspan="4"><img src="/symbol/share_img/spacer.gif" width="1" height="10" alt=""></td>
  </tr>
</table>


<!--NTT西日本公式フッタ-->
<table width="600" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td><img src="/symbol/share_img/spacer.gif" width="1" height="7" alt=""></td>
	</tr>
</table>
<table width="600" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td colspan="3" background="/symbol/share_img/footer_back.gif"><img src="/symbol/share_img/spacer.gif" alt="" width="1" height="6"></td>
	</tr>
	<tr>
		<td align="left"><a href="http://www.ntt-west.co.jp/share/copyright.html"><img src="/symbol/share_img/copy.gif" alt="Copyright(c) 西日本電信電話株式会社" width="250" height="19" border="0"></a></td>
	    <td align="right"><a href="http://www.ntt-west.co.jp/share/privacy.html" target="_blank" class="f-font">プライバシーポリシー</a><img src="/symbol/share_img/spacer.gif" alt="" width="10" height="1"></td>
	</tr>
</table>
</body>
</html>
