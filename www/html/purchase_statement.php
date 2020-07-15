<?php
require_once '../conf/const.php';
require_once MODEL_PATH . 'functions.php';
require_once MODEL_PATH . 'user.php';
require_once MODEL_PATH . 'item.php';
require_once MODEL_PATH . 'cart.php';

session_start();

if(is_logined() === false){
  redirect_to(LOGIN_URL);
}
$order_id = get_get('order_id');
$db = get_db_connect();
$user = get_login_user($db);

if (is_admin($user)){
  $purchase_statement = purchase_statement($db, $order_id);
  $purchase_histories = purchase_history($db);
} else {
  $purchase_statement = purchase_statement($db, $order_id, $user['user_id']);
  $purchase_histories = purchase_history($db, $user['user_id']);
}

$purchase_history = [];
foreach($purchase_histories as $history) {
  if ($history['order_id'] == $order_id){
      $purchase_history = $history;
      break;
  }
}

include_once '../view/purchase_statement_view.php';