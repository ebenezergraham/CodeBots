USE maurice5;

DROP TABLE IF EXISTS products_wanted;
CREATE TABLE products_wanted (
    id INT NOT NULL AUTO_INCREMENT,
    zone VARCHAR(255) NOT NULL,
    product_name VARCHAR(255),
    product_value INT,
    quantity INT,
    priority INT,
    PRIMARY KEY (id)
);

DROP TABLE IF EXISTS cart;
CREATE TABLE cart (
    id INT NOT NULL AUTO_INCREMENT,
    product_id INT,
    PRIMARY KEY (id)
);

DROP TABLE IF EXISTS product_categories;
CREATE TABLE product_categories (
    id INT NOT NULL AUTO_INCREMENT,
    product_name VARCHAR(255) NOT NULL,
    available_quantity INT,
    product_value INT,
    image_url VARCHAR(45),
    PRIMARY KEY (id)
);

#products wanted entries
INSERT INTO products_wanted VALUES ('1','Agriculture','Vegetables','4','20','1');
INSERT INTO products_wanted VALUES ('2','Agriculture','Vegetables','4','20','1');
INSERT INTO products_wanted VALUES ('3','Builders','Vegetables','4','20','1');
INSERT INTO products_wanted VALUES ('4','Builders','Vegetables','4','20','1');
INSERT INTO products_wanted VALUES ('5','Healers','Vegetables','4','20','1');
INSERT INTO products_wanted VALUES ('6','Healers','Vegetables','4','20','1');
INSERT INTO products_wanted VALUES ('7','Hunters','Vegetables','4','20','1');
INSERT INTO products_wanted VALUES ('8','Hunters','Vegetables','4','20','1');
INSERT INTO products_wanted VALUES ('9','Fisherman','Vegetables','4','20','1');
INSERT INTO products_wanted VALUES ('10','Fisherman','Vegetables','4','20','1');

#cart entries
INSERT INTO cart VALUES ('1','1');
INSERT INTO cart VALUES ('2','2');
INSERT INTO cart VALUES ('3','3');
INSERT INTO cart VALUES ('4','4');

#our product categories enteries
INSERT INTO product_categories VALUES ('1','Stones','20','4','images/test.jpg');
INSERT INTO product_categories VALUES ('2','Gas','10','4','images/test.jpg');
INSERT INTO product_categories VALUES ('3','Oil','20','4','images/test.jpg');
INSERT INTO product_categories VALUES ('4','Metal Ores','20','4','images/test.jpg');
INSERT INTO product_categories VALUES ('5','Quarry','20','4','images/test.jpg');
INSERT INTO product_categories VALUES ('6','Metallury','3','4','images/test.jpg');
