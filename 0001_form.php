<?php

//�f�[�^�x�[�X�ڑ�
$conn = "host='pgdb' dbname='westofc' user='westofc' password='ofc0610'";
if(!$db = pg_connect($conn)) {
echo '�ڑ��G���[<br>';
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
	<title>�m�s�s�����{�b��10��m�s�s�O���[�v�w�`���</title>
	<meta http-equiv="Content-Type" content="text/html; charset=SHIFT_JIS">
	<meta http-equiv="Content-Script-Type" content="text/javascript">
	<meta http-equiv="Content-Style-Type" content="text/css">
	<meta name="title" content="NTT WEST Official Web site">
	<meta name="copyright" content="Copyright (C) NIPPON TELEGRAPH AND TELEPHONE WEST CORPORATION">
	<meta name="keywords" content="NTT�����{">
	<meta name="description" content="NTT WEST Official Web site,NTT�����{�����z�[���y�[�W">
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
	<script src="../js/slider.js" type="text/javascript"></script>
	<script type="text/javascript" src="../js/jquery.pngFix.js"></script>
	<script src="../js/alphafilter.js" type="text/javascript" defer></script>
	<script type="text/javascript" src="../../popwin.js"></script>
	<script type="text/javascript" src="../../font.js"></script>
	<script type="text/javascript" src="../../function.js"></script>

<!--headerSSI1�i�����������j-->
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


<!--headerSSI2�i����������j-->
<!---->
<body bgcolor="#FFFFFF" text="#000000" vlink="#FF0000" alink="#FF0000" link="#FF0000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">


<a name="pageTop" id="pageTop"></a>


<!--Header-->
<table width="600" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td nowrap><img src="/symbol/share_img/spacer.gif" width="8" height="1" alt=""><a href="http://www.ntt-west.co.jp/"><img src="/symbol/share_img/ci.gif" alt="NTT�����{�@�g���h�B�Ђ낪��B�Ђт������B" width="147" height="53" border="0" vspace="12"></a><img src="/symbol/share_img/hd_line_sougou.gif" alt="" width="44" height="78"></td><td align="right" class="right-text">�@</td>
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
  <td colspan="4" align="center"><img src="img/tit_form.gif" alt="�Q���E�ύX�\���t�H�[��"></td>
  </tr>
  <tr>
  <td colspan="4"><img src="/symbol/share_img/spacer.gif" width="1" height="10" alt=""></td>
  </tr>
      <tr>
  <td colspan="4">
  
  <!-- ���C���R���e���c ��������-->

<table width="560" border="0" align="center" cellpadding="2">
  <tr>
    <td>
�Q��������]�̃`�[���́A�ȉ��̃t�H�[�����炨�\�����݉������B
    </td>
  </tr>
  <tr>
    <td>
�V�K�̂��\�����݂�����]�̕��́u�V�K�v�̃t�H�[���ւ��i�݂��������B
    </td>
  </tr>  
  <tr>
    <td>�@</td>
  </tr>
  <tr>
    <td>���V�K���\������<br><br></td>
  </tr>
  <tr>
    <td>

  <tr>
    <td>

<?php

//�f�[�^�x�[�X�ڑ�
$conn = "host='pgdb' dbname='westofc' user='westofc' password='ofc0610'";
if(!$db = pg_connect($conn)) {
echo '�ڑ��G���[<br>';
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
 { $men_disp = "<a href=\"goform_men.php\">�w�`���i�j�q�̕��j�V�K���\�����݃t�H�[��</a>�i�c�� ".$count_men." �j"; } else { $men_disp = "
<font color=\"red\">�w�`���i�j�q�̕��j�V�K���\�����݂͏I���������܂����B</font><br>�@�L�����Z���҂����󂯕t���܂��B<br>�@�L�����Z���҂��̐\���͈ȉ����N���b�N���Ă��������B<br>
<a href=\"https://enq.customer.ntt-west.co.jp/cgi-bin/enquete-fc.cgi/1mya/\" target=\"_blank\">�w�`���i�j�q�̕��j�L�����Z���҂����\�����݃t�H�[��</a>"; }

if ( $count_women > 0 ) { $women_disp = "<a href=\"goform_women.php\">�w�`���i���q�̕��j�V�K���\�����݃t�H�[��</a>�i�c�� ".$count_women." �j"; } else { $women_disp = "
<font color=\"red\">�w�`���i���q�̕��j�V�K���\�����݂͏I���������܂����B</font><br>�@�L�����Z���҂����󂯕t���܂��B<br>�@�L�����Z���҂��̐\���͈ȉ����N���b�N���Ă��������B<br>
<a href=\"https://enq.customer.ntt-west.co.jp/cgi-bin/enquete-fc.cgi/5pvx/\" target=\"_blank\">�w�`���i���q�̕��j�L�����Z���҂����\�����݃t�H�[��</a>"; }

if ( $count_tug > 0 ) { $tug_disp = "<a href=\"goform_tug.php\">�j�������@�V�K���\�����݃t�H�[��</a>�i�c�� ".$count_tug." �j"; } else { $tug_disp = "
<font color=\"red\">�j�������@�V�K���\�����݂͏I���������܂����B</font><br>�@�L�����Z���҂����󂯕t���܂��B<br>�@�L�����Z���҂��̐\���͈ȉ����N���b�N���Ă��������B<br>
<a href=\"https://enq.customer.ntt-west.co.jp/cgi-bin/enquete-fc.cgi/mmas/\" target=\"_blank\">�w�`���i�j�����j�L�����Z���҂����\�����݃t�H�[��</a>"; }

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
    <td>�@</td>
  </tr>

</table>

  <!-- ���C���R���e���c �����܂�-->

  </td>
  </tr>
    <tr>
  <td colspan="4"><img src="/symbol/share_img/spacer.gif" width="1" height="10" alt=""></td>
  </tr>
</table>


<!--NTT�����{�����t�b�^-->
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
		<td align="left"><a href="http://www.ntt-west.co.jp/share/copyright.html"><img src="/symbol/share_img/copy.gif" alt="Copyright(c) �����{�d�M�d�b�������" width="250" height="19" border="0"></a></td>
	    <td align="right"><a href="http://www.ntt-west.co.jp/share/privacy.html" target="_blank" class="f-font">�v���C�o�V�[�|���V�[</a><img src="/symbol/share_img/spacer.gif" alt="" width="10" height="1"></td>
	</tr>
</table>
</body>
</html>