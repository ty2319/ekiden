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
	<title>ＮＴＴ西日本｜第14回ＮＴＴグループ駅伝大会</title>
	<meta http-equiv="Content-Type" content="text/html; charset=SHIFT_JIS">
	<meta http-equiv="Content-Script-Type" content="text/javascript">
	<meta http-equiv="Content-Style-Type" content="text/css">
	<meta name="title" content="NTT WEST Official Web site">
	<meta name="copyright" content="Copyright (C) NIPPON TELEGRAPH AND TELEPHONE WEST CORPORATION">
	<meta name="keywords" content="NTT西日本">
	<meta name="description" content="NTT WEST Official Web site,NTT西日本公式ホームページ">
	<link href="top.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="../popwin.js">
	<!--
	//-->
	</script>
<script type="text/javascript" src="../font.js">
	<!--
	//-->
	</script>
<script type="text/javascript" src="../function.js">
	<!--
	//-->
	</script>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
	
	

<!--headerSSI1（ｈｅａｄ内）-->
	<link rel="stylesheet" href="../style.js">
    <link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css">

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
    <td>
参加をご希望のチームは、以下のフォームからお申し込み下さい。
    </td>
  </tr>
  <tr>
    <td>
新規のお申し込みをご希望の方は「新規」のフォームへお進みください。
    </td>
  </tr>  
  <tr>
    <td>　</td>
  </tr>
  <tr>
    <td>■新規お申し込み<br><br></td>
  </tr>
  <tr>
    <td>

  <tr>
    <td>

<?php

//データベース接続
$conn = "host='pgdb' dbname='westofc' user='westofc' password='ofc0610'";
if(!$db = pg_connect($conn)) {
echo '接続エラー<br>';
exit;
}

$str_sql = "select men from symbol_ekiden;";
$rs1 = pg_query($db, $str_sql);
$count_men = pg_fetch_result($rs1,0,0);

$str_sql = "select women from symbol_ekiden;";
$rs2 = pg_query($db, $str_sql);
$count_women = pg_fetch_result($rs2,0,0);

$str_sql = "select tug from symbol_ekiden;";
$rs3 = pg_query($db, $str_sql);
$count_tug = pg_fetch_result($rs3,0,0);

if ( $count_men > 0 )
 { $men_disp = "<a href=\"goform_men.php\">駅伝大会（男子の部）新規お申し込みフォーム</a>（残数 ".$count_men." ）"; } else { $men_disp = "
<font color=\"red\">駅伝大会（男子の部）新規お申し込みは終了いたしました。</font><br>　キャンセル待ちを受け付けます。<br>　キャンセル待ちの申請は以下をクリックしてください。<br>
<a href=\"https://enq.customer.ntt-west.co.jp/cgi-bin/enquete-fc.cgi/1mya/\" target=\"_blank\">駅伝大会（男子の部）キャンセル待ちお申し込みフォーム</a>"; }

if ( $count_women > 0 ) { $women_disp = "<a href=\"goform_women.php\">駅伝大会（女子の部）新規お申し込みフォーム</a>（残数 ".$count_women." ）"; } else { $women_disp = "
<font color=\"red\">駅伝大会（女子の部）新規お申し込みは終了いたしました。</font><br>　キャンセル待ちを受け付けます。<br>　キャンセル待ちの申請は以下をクリックしてください。<br>
<a href=\"https://enq.customer.ntt-west.co.jp/cgi-bin/enquete-fc.cgi/5pvx/\" target=\"_blank\">駅伝大会（女子の部）キャンセル待ちお申し込みフォーム</a>"; }

if ( $count_tug > 0 ) { $tug_disp = "<a href=\"goform_tug.php\">綱引き大会　新規お申し込みフォーム</a>（残数 ".$count_tug." ）"; } else { $tug_disp = "
<font color=\"red\">綱引き大会　新規お申し込みは終了いたしました。</font><br>　キャンセル待ちを受け付けます。<br>　キャンセル待ちの申請は以下をクリックしてください。<br>
<a href=\"https://enq.customer.ntt-west.co.jp/cgi-bin/enquete-fc.cgi/mmas/\" target=\"_blank\">駅伝大会（綱引き）キャンセル待ちお申し込みフォーム</a>"; }

?>

      <?php echo $men_disp; ?><br><br>
    </td>
  </tr>
  <tr>
    <td>
      <?php echo $women_disp; ?><br><br>
    </td>
  </tr>
  <tr>
    <td>
      <?php echo $tug_disp; ?><br><br>
    </td>
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
