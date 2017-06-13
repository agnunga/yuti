CREATE TABLE IF NOT EXISTS claimed_payments (
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  user_id int(11) NOT NULL,
  email varchar(60) NOT NULL, 
  phone varchar(14) NOT NULL,
  amount varchar(10) NOT NULL, 
  transaction_no varchar(50) NOT NULL,
  payment_mode varchar(50) NOT NULL,
  payment_time varchar(50) NOT NULL
);

