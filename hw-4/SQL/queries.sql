-- Запрос: Вывести для каждого клиента сумму его покупок, сделанных в период +- 3 дня от его дня рождения
SELECT
  c.name AS client_name,
  SUM(p.price * op.count) AS total_purchase_amount
FROM
  client c
  JOIN "order" o ON c.id = o.client_id
  JOIN order_product op ON o.id = op.order_id
  JOIN product p ON op.product_id = p.id
WHERE
  strftime ('%m-%d', c.birthdate) BETWEEN strftime ('%m-%d', o.created_at, '-3 days') AND strftime  ('%m-%d', o.created_at, '+3 days')
GROUP BY
  c.name;

-- Запрос: Вывести заказы, в которых цена продукта отличается от нынешней в таблице, а также вывести разницу в сумме
SELECT
  o.id AS order_id,
  p.name AS product_name,
  p.price AS current_price,
  op.price AS ordered_price,
  (p.price - op.price) AS price_difference
FROM
  "order" o
  JOIN order_product op ON o.id = op.order_id
  JOIN product p ON op.product_id = p.id
WHERE
  p.price <> op.price;

-- Запрос: Найти самый прибыльный магазин
SELECT
  s.name AS shop_name,
  SUM(p.price * op.count) AS total_revenue
FROM
  shop s
  JOIN "order" o ON s.id = o.shop_id
  JOIN order_product op ON o.id = op.order_id
  JOIN product p ON op.product_id = p.id
GROUP BY
  s.name
ORDER BY
  total_revenue DESC
LIMIT
  1;

-- Запрос: Найти магазин, в котором произвели больше всего покупок
SELECT
  s.name AS shop_name,
  COUNT(op.id) AS total_purchases
FROM
  shop s
  JOIN "order" o ON s.id = o.shop_id
  JOIN order_product op ON o.id = op.order_id
GROUP BY
  s.name
ORDER BY
  total_purchases DESC
LIMIT
  1;