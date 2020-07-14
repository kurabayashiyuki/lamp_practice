<!DOCTYPE html>
<html lang="ja">

<head>
  <?php include VIEW_PATH . 'templates/head.php'; ?>
  <title>購入明細画面</title>
  <link rel="stylesheet" href="<?php print(STYLESHEET_PATH . 'admin.css'); ?>">
</head>

<body>
  <?php
  include VIEW_PATH . 'templates/header_logined.php';
  ?>

  <div class="container">

    <table class="table table-bordered text-center">
      <thead class="thead-light">
        <tr>
          <th>注文番号</th>
          <th>購入日時</th>
          <th>合計</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?php print(h($purchase_history['order_id'])); ?></td>
          <td><?php print(h($purchase_history['created'])); ?></td>
          <td><?php print(h($purchase_history['sum_purchase'])); ?></td>
        </tr>
      </tbody>
    </table>


    <h1>購入明細画面</h1>
    <?php if (!empty($purchase_statement)) { ?>
      <table class="table table-bordered text-center">
        <thead class="thead-light">
          <tr>
            <th>商品名</th>
            <th>価格</th>
            <th>購入数</th>
            <th>小計</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($purchase_statement as $statement) { ?>
            <tr>
              <td><?php print(h($statement['name'])); ?></td>
              <td><?php print(h($statement['price'])); ?></td>
              <td><?php print(h($statement['amount'])); ?></td>
              <td><?php print(h($statement['subtotal'])); ?>円</td>
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