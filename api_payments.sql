CREATE TABLE IF NOT EXISTS api_payments ( 
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,  
  phone varchar(14) NOT NULL,
  amount varchar(10) NOT NULL, 
  transaction_no varchar(50) NOT NULL,
  payment_mode varchar(50) NOT NULL,
  payment_time varchar(50) NOT NULL
);

