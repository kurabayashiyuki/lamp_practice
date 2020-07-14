<!DOCTYPE html>
<html lang="ja">
<head>
  <?php include VIEW_PATH . 'templates/head.php'; ?>
  <title>購入履歴画面</title>
  <link rel="stylesheet" href="<?php print(STYLESHEET_PATH . 'admin.css'); ?>">
</head>
<body>
  <?php
  include VIEW_PATH . 'templates/header_logined.php';
  ?>

  <div class="container">
    <h1>購入履歴画面</h1>
    <?php if(count($purchase_history) > 0){ ?>
      <table class="table table-bordered text-center">
        <thead class="thead-light">
          <tr>
            <th>注文番号</th>
            <th>購入日時</th>
            <th>合計金額</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($purchase_history as $history){ ?>
          <tr>
            <td><?php print(h($history['order_id'])); ?></td>
            <td><?php print(h($history['created'])); ?></td>
            <td><?php print(h($history['sum_purchase'])); ?>円</td>
            <td>
              <form action = "purchase_statement.php">
                <input type = "submit" value = "購入明細表示">
                <input type = "hidden" value = "<?php print(h($history['order_id'])); ?>" name = "order_id">
              </form>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    <?php } else { ?>
      <p>商品はありません。</p>
    <?php } ?>
  </div>
  </script>
</body>
</html>