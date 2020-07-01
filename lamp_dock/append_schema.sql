CREATE　TABLE 'purchase_history'(
  `order_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `sum_purchase` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE 'purchase_statement'(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `order_id` int (11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
