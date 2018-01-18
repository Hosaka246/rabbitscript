<?
#============================================================================================================
#
#	検索用PHP(まちがえてすみません)
#	search.php
#	-----------------------------------------------------
#	2017.12.13 ぜろちゃんねるのsearch.cgiをベースに執筆開始
#
#============================================================================================================
$PATH   = "../".$_POST['bbs']."/";
$DATPATH  = $PATH."dat/";
$TEMPPATH = $PATH."html/";
$INDEXFILE  = $PATH."index.html";
$SUBFILE  = $PATH."subback.html";
$IMODEFILE  = $PATH."i/index.html";
$IMGPATH  = $PATH."img/";
$IMGPATH2 = $PATH."img2/";
$sWORD = "";

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<base href="<?=$BASEURL?>">
<title>検索＠兎の国</title>
<style type=text/css><!-- img {border:0;} --></style>
</head>
<body bgcolor="<?=$SETTING['BBS_BG_COLOR']?>" text="<?=$SETTING['BBS_TEXT_COLOR']?>" link="<?=$SETTING['BBS_LINK_COLOR']?>" alink="<?=$SETTING['BBS_ALINK_COLOR']?>" vlink="<?=$SETTING['BBS_VLINK_COLOR']?>">
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-87244630-3"></script>
<table border="1" cellspacing="7" cellpadding="3" width="95%" bgcolor="#ccffcc" style="margin-bottom:1.2em;" align="center">
 <tr>
  <td>
  <font size="+1"><b>検索＠うさ民</b></font>
  <div align="center" style="margin:1.2em 0;">
  <form action="../search.php" method="POST">
  <table border="0">
   <tr>
    <td>検索ワード</td>
    <td><input type="text" size="40" name="WORD"></td>
   </tr>
   <tr>
    <td>検索種別</td>
    <td>
    <input type="checkbox" name="TYPE" value="1" $cTYPE[0]>名前検索<br>
    <input type="checkbox" name="TYPE" value="4" $cTYPE[2]>ID・日付検索<br>
    <input type="checkbox" name="TYPE" value="2" $cTYPE[1]>本文検索<br>
    </td>
   </tr>
   <tr>
    <td colspan="2" align="right">
    <hr>
    <input type="submit" value="検索" style="width:150px;">
    </td>
   </tr>
  </table>
  </form>
  </div>
  </td>
 </tr>
</table>
<?
#datから検索
if (!isset($_POST['WORD'])) $_POST['WORD'] = '';

?>

</body>
</html>
