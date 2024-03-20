-- Создание таблицы магазина shop
CREATE TABLE
  shop (id INTEGER PRIMARY KEY, name TEXT, address TEXT);

-- Создание таблицы продуктов product
CREATE TABLE
  product (
    id INTEGER PRIMARY KEY,
    name TEXT,
    price REAL,
    count INTEGER
  );

-- Создание таблицы заказа order
CREATE TABLE
  "order" (
    id INTEGER PRIMARY KEY,
    created_at DATETIME,
    shop_id INTEGER,
    client_id INTEGER,
    FOREIGN KEY (shop_id) REFERENCES shop (id),
    FOREIGN KEY (client_id) REFERENCES client (id)
  );

-- Создание таблицы соответствий продуктов и заказов order_product
CREATE TABLE
  order_product (
    id INTEGER PRIMARY KEY,
    order_id INTEGER,
    product_id INTEGER,
    price REAL,
    count INTEGER,
    FOREIGN KEY (order_id) REFERENCES "order" (id),
    FOREIGN KEY (product_id) REFERENCES product (id)
  );

-- Создание таблицы покупателя client
CREATE TABLE
  client (
    id INTEGER PRIMARY KEY,
    name TEXT,
    phone TEXT,
    birthrate DATE
  );