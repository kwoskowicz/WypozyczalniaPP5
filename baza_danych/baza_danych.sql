CREATE TABLE User 
(
user_id int8 auto_increment,
login varchar(40) NOT NULL,
password varchar(30) NOT NULL,
mail varchar(40) NOT NULL,
telephone_number varchar(16) NOT NULL,
role int2 NOT NULL,
status int2,
PRIMARY KEY(user_id)
);

CREATE TABLE Category
(
category_id INT8 auto_increment,
category varchar(20) NOT NULL,
PRIMARY KEY(category_id)
);

CREATE TABLE Car 
(
car_id int8 auto_increment,
name varchar(30) NOT NULL,
price decimal(4,1) NOT NULL,
description varchar(256) NOT NULL,
category_id int8,
img_url varchar(250),
status int2,
PRIMARY KEY(car_id),
FOREIGN KEY (category_id) references Category(category_id)
);

CREATE TABLE History 
(
history_id int8 auto_increment,
car_id int8 NOT NULL,
history_text varchar(700) NOT NULL,
user_id int8 NOT NULL,
rate int2,
PRIMARY KEY(history_id),
FOREIGN KEY(car_id) references Car (car_id),
FOREIGN KEY(user_id) references User (user_id)
);

CREATE TABLE Car_Order (
order_id int8 auto_increment,
user_id int8 NOT NULL,
order_data date NOT NULL,
order_status int2 NOT NULL,
status int2,
PRIMARY KEY(order_id),
FOREIGN KEY (user_id) references User (user_id)
);

CREATE TABLE Has_Order (
order_has_car_id int8 auto_increment,
order_id int8 NOT NULL,
car_id int8 NOT NULL,
PRIMARY KEY(order_has_car_id),
FOREIGN KEY (car_id) references Car (car_id),
FOREIGN KEY (order_id) references Car_Order (order_id)
);