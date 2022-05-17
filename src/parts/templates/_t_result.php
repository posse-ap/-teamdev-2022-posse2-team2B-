<?php

require(dirname(__FILE__) . '/../parts.php');

// HTMLはじめ
a_html_head($pgdata['page_title']);

// ヘッダー
o_header();

// 再検索のエリア
o_re_search();

// 検索結果のカードが並んでいるエリア
o_result($pgdata['result_agents']);

// 閲覧履歴のエリア
o_history($pgdata['result_agents']);

// 追従ボタン（まとめて問い合わせ、BOXを見る）
o_foot($pgdata['result_agents']);

?>

<!-- IndexedDBのライブラリ -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/dexie/4.0.0-alpha.2/dexie.min.js" integrity="sha512-YVHSEwMLRaQHvifwu/g/7OeZPCGaBSAe44gR74njhuIBt1XBtS+NNo1hXyJ1nE3zzBV0ImktKwMxBYMwiaMVhA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- BOX追加機能 -->
<script src="./script/box.js"></script>
<!-- 再検索部分の折りたたみ -->
<script src="./script/accordion.js"></script>
<!-- スマホ版 画面下固定BOX関連ボタン -->
<script src="./script/show-box-mobile.js"></script>
<!-- 検索エリアのタグクリック時の動作 -->
<script src="./script/search.js"></script>

<?php

// HTMLおわり
a_html_foot();