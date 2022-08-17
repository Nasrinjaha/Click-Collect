create table admin(
    a_id int AUTO_INCREMENT PRIMARY  KEY,
    name varchar(100) NOT NULL,
    email varchar(100) NOT NULL,
    dob date,
    address varchar(100),
    pass varchar(100) , 
   img varchar(255)  
)engine = INNODB;



INSERT INTO `admin` (`a_id`, `name`, `email`, `dob`, `address`, `pass`, `img`) 
VALUES (NULL, 'ripa', 'ripa@gmail.com', '2022-08-08', 'ctg', '12345', NULL),
(NULL, 'jumu', 'jumu@gmail.com', '2022-08-08', 'ctg', '12345', NULL),
(NULL, 'admin3', 'admin3@gmail.com', '2022-08-08', 'ctg', '12345', NULL);



create table sellers(
     s_id int AUTO_INCREMENT PRIMARY  KEY,
     name varchar(100) NOT NULL,
     email varchar(100) NOT NULL,
     trade_licence varchar(255) NOT NUL,
     experience varchar(255) NOT NUL,
     cv varchar(255) NOT NUL,
     address varchar(100),
     dob date,
     gender varchar(100), 
     mobile varchar(100) NOT NULL,
     status int NOT NULL,
     pass varchar(100) NOT NULL ,
     img varchar(255) 
)engine = INNODB;





INSERT INTO `sellers` (`s_id`, `name`, `email`, `address`, `dob`, `gender`, `mobile`, `pass`, `status`, `img`) VALUES (NULL, 'sabiha', 'montaha@gmail.com', 'ctg', '2022-08-16', 'female', '01835493825', '12345',, NULL),
(NULL, 'seller1', 'seller1@gmail.com', 'ctg', '2022-08-16', 'female', '01835493825', '12345',, NULL),
(NULL, 'seller2', 'seller2@gmail.com', 'ctg', '2022-08-16', 'female', '01835493825', '12345',, NULL),
(NULL, 'seller2', 'seller3@gmail.com', 'ctg', '2022-08-16', 'female', '01835493825', '12345',, NULL),
(NULL, 'seller4', 'seller4@gmail.com', 'ctg', '2022-08-16', 'female', '01835493825', '12345',, NULL),
(NULL, 'seller5', 'seller5@gmail.com', 'ctg', '2022-08-16', 'female', '01835493825', '12345',, NULL);





create table customers(
     c_id int AUTO_INCREMENT PRIMARY  KEY,
     name varchar(100) NOT NULL,
     email varchar(100) NOT NULL,
     address varchar(100),
     dob date,
     gender varchar(100), 
     mobile varchar(100) NOT NULL,
     status int NOT NULL,
     pass varchar(100) NOT NULL ,
    img varchar(255) 
)engine = INNODB;





INSERT INTO `customers` (`c_id`, `name`, `email`, `address`, `dob`, `gender`, `mobile`, `pass`, `status`, `img`) VALUES (NULL, 'sabiha', 'montaha@gmail.com', 'ctg', '2022-08-16', 'female', '01835493825', '12345',, NULL),
(NULL, 'customer1', 'customer1@gmail.com', 'ctg', '2022-08-16', 'female', '01835493825', '12345',, NULL),
(NULL, 'customer2', 'customer2@gmail.com', 'ctg', '2022-08-16', 'female', '01835493825', '12345',, NULL),
(NULL, 'customer2', 'customer3@gmail.com', 'ctg', '2022-08-16', 'female', '01835493825', '12345',, NULL),
(NULL, 'customer4', 'customer4@gmail.com', 'ctg', '2022-08-16', 'female', '01835493825', '12345',, NULL),
(NULL, 'customer5', 'customer5@gmail.com', 'ctg', '2022-08-16', 'female', '01835493825', '12345',, NULL);







CREATE TABLE Brand(
    b_id int AUTO_INCREMENT PRIMARY KEY,
    name varchar(100)    
)engine = INNODB;





INSERT INTO `brand` ( `name`) VALUES ( 'Apple'),
( 'Nike'),
( 'barbie'),
('Dior'),
( 'Armani'),
( 'Arong'),
( 'Yellow'),
( 'cats Eye'),
('Plus Point');




CREATE TABLE Catagory(
    cat_id int AUTO_INCREMENT PRIMARY KEY,
    name varchar(100)    
)engine = INNODB;





INSERT INTO `catagory` ( `name`) VALUES ( 'Toys'),
( 'mancloth'),
( 'womancloth'),
( 'manShoesandWallets'),
( 'womanhandbagandwall'),
( 'manAccessories'),
( 'WomanAccessories'),
('Home Appliances'),
('Kitchen Appliances');



CREATE TABLE sub_category(
    sub_id int AUTO_INCREMENT,
    name varchar(100),
    cat_id int,
    PRIMARY KEY(sub_id),
    CONSTRAINT FK_catagory FOREIGN KEY (cat_id)
    REFERENCES category(cat_id)
    ON UPDATE CASCADE
    ON DELETE CASCADE 
)ENGINE=INNODB;



INSERT INTO `sub_category` (`sub_id`,`name`,`cat_id`) 
VALUES
(NULL, '  Shirts ','2'),
(NULL, ' Fashion Hoodies , Sweatshirts ','2'), 
(NULL, 'Sweaters','2'), 
(NULL, ' Jackets , Coats','2'),
(NULL, ' Jeans ','2'),
(NULL, ' Pants , Trousers','2'),
(NULL, 'Capris and Shorts ','2'),
(NULL, ' Swim','2'),
(NULL, ' Suits , Sport Coats','2'),
(NULL, ' Underwear','2'),
(NULL, '  Socks','2'),
(NULL, ' Sleep , Lounge','2'),
(NULL, 'T-Shirts , Tanks ','2'),
(NULL, '  Active','2'),
(NULL, '   Sport Coats ','2'),


(NULL, 'Shapewear','3'),
(NULL, 'Tops and shirts,kurti','3'), 
(NULL, 'Sweatshirts','3'), 
(NULL, 'Jeans and Trousers','3'),
(NULL, 'Fashion Hood ','3'),
(NULL, 'Capris and Shoe','3'),
(NULL, 'Leggings','3'),
(NULL, 'Swimsuits and Cover Ups ','3'),
(NULL, 'Lingerie, Sleep and Lounge','3'),
(NULL, 'Inner and Nightwear ','3'),
(NULL, 'Jumpsuits, Rompers and Overalls','3'),
(NULL, 'Coats, Jackets and Vests','3'),
(NULL, 'Suiting and Blazers ','3'),
(NULL, 'Socks and Hosiery','3'),


(NULL, 'Fashion Sneakers','4'),
(NULL, ' Loafers','4'),
(NULL, 'Slip-Ons','4'),
(NULL, ' Clogs','4'),
(NULL, 'outdoor','4'),
(NULL, 'oxford','4'),
(NULL, 'slippers','4'),


(NULL, 'Clutches','5'),
(NULL, ' Cross-Body Bags','5'),
(NULL, 'Evening Bags','5'),
(NULL, ' Shoulder Bags','5'),
(NULL, 'Top-Handle Bags','5'),
(NULL, 'Wristlets','5'),




(NULL, 'Belts','6'),
(NULL, 'Suspenders','6'),
(NULL, 'Eyewear Accessories','6'),
(NULL, 'Neckties','6'),
(NULL, 'Bow Ties and Cummerbunds','6'),
(NULL, 'Collar Stays','6'),


(NULL, 'Handbag Accessories','7'),
(NULL, 'Sunglasses Accessories','7'),
(NULL, 'Eyewear Accessories', '7'),
(NULL, 'Scarves and Wraps','7'),
(NULL, 'Gloves and Mittens', '7'),
(NULL, 'Hats and Caps', '7'),



(NULL, 'Air Coolers','8'), 
(NULL, 'Fans','8'),
(NULL, 'Microwaves','8'),
(NULL, 'Refrigerators','8'),
(NULL, 'Washing Machines','8'),
(NULL, 'Jars and Containers ','8'),
(NULL, 'LED and CFL bulbs','8'),
(NULL, 'Drying Racks ','8'),
(NULL, 'Laundry Baskets','8'), 
(NULL, 'Vases ','8'),
(NULL, 'Clocks','8'), 
(NULL, 'Bedsheets','8'),





(null, 'Air Fryers','9'), 
(NULL, ' Espresso Machines','9'),
(NULL, 'Food Processors','9'),
(NULL, 'Hand Blenders','9'),
(NULL, 'Induction Cooktops','9'),
(NULL, 'Juicers','9'),
(NULL, 'Microwave Ovens','9'),
(NULL, 'Mixers , Grinders','9'),
(NULL, 'Ovens','9'), 
(NULL, 'Rice Cookers','9'),
(NULL, 'Stand Mixers','9'), 
(NULL, 'Sandwich Makers','9'),
(NULL, 'Tandoor , Grills','9'),
(NULL, 'Toasters','9');




CREATE TABLE products(
    p_id int AUTO_INCREMENT,
    name varchar(100),
    b_id int,
    sub_id int,
    size varchar(100),
    description varchar(200),
    price double,
    quantity int,
    status int NOT NULL,
    PRIMARY KEY(p_id),
    CONSTRAINT FK_brand1  FOREIGN KEY (b_id)
    REFERENCES brand(b_id)
    ON UPDATE CASCADE
    ON DELETE CASCADE,
    CONSTRAINT FK_catagory1 FOREIGN KEY (sub_id)
    REFERENCES sub_category(sub_id)
    ON UPDATE CASCADE
    ON DELETE CASCADE
    
)ENGINE=INNODB;







INSERT INTO `products` (`p_id`, `name`, `b_id`, `sub_id`, `size`, `description`, `price`, `quantity`, `status`)
 VALUES (NULL, 'doll', '6', '20', '36', ' made from vinyl', '1900', '44', '1'),
        (NULL, 'kurti2', '6', '20', '37', ' Linen ( Original ), Laggings Fabric : Jersey ( Original )', '1890', '15',1),
        (NULL, 'kurti3', '6', '20', '38', ' Linen ( Original ), Laggings Fabric : Jersey ( Original )', '1890', '15',1), 
        (NULL, 'leggings1', '6', '22', '34', ' women organic cotton laggings', '1890', '15',1),
        (NULL, 'leggings2', '6', '22', '35', ' women organic cotton laggings', '1890', '15',1);




CREATE TABLE customer_order(
  o_id int AUTO_INCREMENT,
  c_id int,
  order_date date,
  PRIMARY KEY(o_id),
  CONSTRAINT FK_customer_order FOREIGN kEY(c_id)
  REFERENCES customers(c_id)
  ON UPDATE CASCADE
  ON DELETE CASCADE
)ENGINE = INNODB;




INSERT INTO `customer_order` (`o_id`, `c_id`, `order_date`) 
VALUES (NULL,1,  '2022-08-16'),
(NULL, 1,'2022-08-16'),
(NULL,1,  '2022-08-16'),
(NULL,2,'2022-08-16'),
(NULL, 2, '2022-08-16'),
(NULL, 3, '2022-09-16'),
(NULL,3,  '2022-08-16');




CREATE TABLE order_line(
  o_id int,
  p_id int,
  quantity int,
  CONSTRAINT FK_order_line FOREIGN kEY(o_id )
  REFERENCES customer_order(o_id)
  ON UPDATE CASCADE
  ON DELETE CASCADE,
  CONSTRAINT FK_order_line2 FOREIGN kEY(p_id)
  REFERENCES products(p_id)
  ON UPDATE CASCADE
  ON DELETE CASCADE,
  PRIMARY KEY(o_id,p_id)
  )ENGINE = INNODB;




INSERT INTO `order_line` (`o_id`, `p_id`, `quantity`) 
VALUES  ('11', '1', '2'),
('11', '2', '2'),
('12', '3', '2'),
('13', '4', '2'),
('14', '5', '2'),
('15', '2', '2'),
('16', '4', '2');





CREATE TABLE cart(
  cart_id int AUTO_INCREMENT,
  c_id int,
  p_id int,
  add_date date,
   quantity double,
  PRIMARY KEY(cart_id),
  CONSTRAINT FK_cart1 FOREIGN kEY(c_id)
  REFERENCES customers(c_id)
  ON UPDATE CASCADE
  ON DELETE CASCADE,
  CONSTRAINT FK_cart2 FOREIGN kEY(p_id)
  REFERENCES products(p_id)
  ON UPDATE CASCADE
  ON DELETE CASCADE
)ENGINE = INNODB;



INSERT INTO `cart` (`cart_id`, `c_id`, `p_id`, `add_date`, `quantity`)
 VALUES (NULL, 1,'1', '2022-08-22', '4'),
 (NULL,2,'1', '2022-08-22', '4'),
 (NULL,3,'2', '2022-08-22', '4'),
 (NULL,4,'3', '2022-08-22', '4'),
 (NULL,5,'4', '2022-08-29', '4');




 CREATE TABLE images(
    e_id int AUTO_INCREMENT PRIMARY KEY,
    p_id int,
    image varchar(200),
    CONSTRAINT FK_image FOREIGN kEY(p_id)
    REFERENCES products(p_id)
    ON UPDATE CASCADE
    ON DELETE CASCADE
    
)ENGINE = INNODB;




