CREATE TABLE IF NOT EXISTS users (
  id int(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  gender varchar(255) NOT NULL,
  min_age int(2) NOT NULL,
  max_age int(3) NOT NULL,
  location varchar(255) NOT NULL,
  dob varchar(255) NOT NULL,
  fullname varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  drinking varchar(255) NOT NULL,
  religion varchar(255) NOT NULL,
  ethnicity varchar(255) NOT NULL,
  employment varchar(255) NOT NULL,
  build varchar(255) NOT NULL,
  smoking varchar(255) NOT NULL,
  children varchar(255) NOT NULL,
  education varchar(255) NOT NULL,
  profession varchar(255) NOT NULL,
  essay text NOT NULL,
  image varchar(255) NOT NULL
);

