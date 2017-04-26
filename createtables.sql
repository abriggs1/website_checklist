CREATE TABLE users (
  ID int NOT NULL AUTO_INCREMENT,
  username varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  PRIMARY KEY (ID));

CREATE TABLE courses (
  ID int NOT NULL AUTO_INCREMENT,
  class_name varchar(255) NOT NULL,
  description varchar(500),
  PRIMARY KEY (ID));

CREATE TABLE users_courses (
  user_id int NOT NULL,
  class_id int NOT NULL,
  PRIMARY KEY(user_id,class_id));
