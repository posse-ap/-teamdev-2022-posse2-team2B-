<?php

require(dirname(__FILE__) . "/dbconnect.php");
require(dirname(__FILE__) . '/app/functions.php');

if (!isset($_POST['search'])) {
  header('Location: http://' . $_SERVER['HTTP_HOST'] . '/index.php');
  exit();
}

// 条件に合うエージェントを取得
$condition = array();
$tags = $_POST['tags'];
$in_clause = substr(str_repeat(',?', count($tags)), 1);

$result_agents_stmt = $db->prepare(sprintf(
  "SELECT
    DISTINCT(agents.id) AS id,
    agent_name,
    expires_at,
    evaluation1,
    evaluation2,
    evaluation3,
    paragraph1,
    paragraph2,
    paragraph3,
    paragraph4,
  FROM
    agents
  RIGHT JOIN agent_tags ON agents.id = agent_tags.agent_id
  WHERE tag_id IN (%s)",
  $in_clause
));
$result_agents_stmt->execute($tags);
$result_agents = $result_agents_stmt->fetchAll();

$pgdata = array();
$pgdata += array('page_title' => '検索結果');
$pgdata += array('result_agents' => $result_agents);

include(dirname(__FILE__) . '/parts/templates/_t_result.php');
