<?php
/*
require '../util.php';
$config = (require '../../config.php');

$blockHeader = fetch_rpc($config['api'], 'getlastblockheader', '""');

$rewardRaw = $blockHeader['result']['block_header']['reward'];
$reward = number_format($rewardRaw / 100, 2, ".", "");

print_r($reward);
*/

require dirname(__FILE__) . '/../util.php';
$config = (require dirname(__FILE__) . '/../../config.php');

$blockHeader = url_get_contents_post($config['api'], 'getlastblockheader', '" "');
$rewardRaw = $blockHeader['result']['block_header']['reward'];
$reward = number_format($rewardRaw / 100000000, 8, ".", "");

print_r($reward);

?>
