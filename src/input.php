<?php
require(dirname(__FILE__) . "/dbconnect.php");
require(dirname(__FILE__) . '/app/functions.php');

if(!isset($_POST['inq_agents'])) {
  echo '問い合わせBOXの情報の送信に失敗しました。';
  exit();
}

$pgdata = array();
$pgdata += array('page_title' => 'トップ');
$pgdata += array('inq_agents' => $_POST['inq_agents']);

// ここからHTML
include(dirname(__FILE__) . '/parts/templates/_t_input.php');

