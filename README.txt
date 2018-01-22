# rabbitscript
兎の国スクリプト（仮）（Ver.1.0）
鏡の国様で配布されている「2chみたいな掲示板」を改造したものです。
再配布、改変は自由とのことでしたので、それに近い修正BSDライセンスで配布させていただきます。

・おもな修正箇所
　・名無しをLIST774.txtから編集するようにした。(1/21)管理ページから名無しの設定を変えられるようにした。
　・鏡の国スクリプトはshort_numberがoffの際エラーを出すため、「<?」のみだった部分を「<?php」に変更。
　・付け足しメッセージ機能（名前の後に「＠なんとかかんとか」みたいに追加できる機能）を追加。
　・NGWord機能をデフォルトで導入。
 
・注意
　・UTF-8対応のため、一部の（というかほぼ全て？）専ブラでは文字化けする可能性あり（未検証、少なくともJanestyleでは文字化けを確認）。

・目標
　・PHPのネット上で管理をできるようにする。
　・できる限りPHP環境（html/css/js+php）のみで動かせるようにする。

パーミッションは以下の通りです。
adminディレクトリの名前は不正アクセス予防のため分かりにくい名前に変えた方が良いでしょう。
ファイル名は変えないでください。
 bbs18(755)/┬admin(755)/┬admin.php(644) 
            │           ├abon.php(644)
            │           ├cap.php(644)
            │           ├deleboard.php(644)
            │           ├deny.php(644)
            │           ├edit.php(644)
            │           ├hostlog.php(644)
            │           ├image.php(644)
            │           ├main.php(644)
            │           ├makeboard.php(644)
            │           ├menu.php(644)
            │           ├passcheck.php(644)
            │           ├setboard.php(644)
            │           ├setboard2.php(644)
            │           ├threadm.php(644)
            │           ├vip.php(644)
            │           ├main.css(644)
            │           ├menu.css(644)
            │           └passfile.cgi(666)
            │
            ├test(755)/ ┬bbs.php(644)
            │           ├bbs2.php(644)
            │           ├read.php(644)
            │           ├make_html.php(644)
            │           ├make_work.php(644)
            │           ├new_thread.php(644)
            │           ├config_r.php(644)
            │           ├b.php(644)
            │           ├p.php(644)
            │           ├r.php(644)
            │           ├index.txt(644)
            │           ├form.txt(644)
            │           ├caps.cgi(666)
            │           ├headad.txt(666)
            │           ├putad.txt(666)
            │           ├option.txt(666)
            │           └omikuji(755)/┬omikuji.txt(644)
            │                          ├base.txt(644)
            │                          ├who.txt(644)
            │                          ├where.txt(644)
            │                          ├do.txt(644)
            │                          └food.txt(644)
            │
            ├2ch.gif(644)
            ├ba.gif(644)
            │
            └board(755)/┬dat(777)/
                         ├html(777)/
                         ├kako(777)/┬index.php(644)
                         │          └kako.txt(666)
                         ├i(755)/─index.html(666)
                         ├img(777)/
                         ├img2(777)/
                         ├0thello(777)/
                         ├LIST774.TXT(666)
                         ├NGWord.txt(666)
                         ├SETTING.TXT(666)
                         ├config.php(666)
                         ├subject.txt(666)
                         ├subback.html(666)
                         ├index.html(666)
                         ├head.txt(666)
                         ├RIP.cgi(666)
                         ├timecheck.cgi(666)
                         ├hostlog.cgi(666)
                         ├uerror.cgi(666)
                         └threadconf.cgi(666)
