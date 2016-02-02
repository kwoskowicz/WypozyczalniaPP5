CREATE TABLE User 
(
user_id int auto_increment,
login varchar(20) NOT NULL,
password varchar(30) NOT NULL,
mail varchar(30) NOT NULL,
telephone_number varchar(16) NOT NULL,
role int2 NOT NULL,
status int,
PRIMARY KEY(user_id)
);

CREATE TABLE Category
(
category_id int auto_increment,
category varchar(20) NOT NULL,
PRIMARY KEY(category_id)
);

CREATE TABLE Car 
(
car_id int auto_increment,
name varchar(30) NOT NULL,
price int(6) NOT NULL,
description varchar(256) NOT NULL,
category_id int,
img_url varchar(150),
seats varchar(10),
status int,
PRIMARY KEY(car_id),
FOREIGN KEY (category_id) references Category(category_id)
);

CREATE TABLE History 
(
history_id int auto_increment,
car_id int NOT NULL,
history_text varchar(400) NOT NULL,
user_id int NOT NULL,
rate int,
PRIMARY KEY(history_id),
FOREIGN KEY(car_id) references Car (car_id),
FOREIGN KEY(user_id) references User (user_id)
);

CREATE TABLE Car_Order (
order_id int auto_increment,
user_id int NOT NULL,
order_data date NOT NULL,
order_status int2 NOT NULL,
status int,
PRIMARY KEY(order_id),
FOREIGN KEY (user_id) references User (user_id)
);

CREATE TABLE Has_Order (
order_has_car_id int auto_increment,
order_id int NOT NULL,
car_id int NOT NULL,
PRIMARY KEY(order_has_car_id),
FOREIGN KEY (car_id) references Car (car_id),
FOREIGN KEY (order_id) references Car_Order (order_id)
);