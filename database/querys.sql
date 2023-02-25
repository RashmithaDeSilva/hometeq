CREATE DATABASE w1911221_SSWD;

CREATE TABLE Product(
	prodId INT(4) NOT NULL AUTO_INCREMENT,
    prodName VARCHAR(30),
    prodPicNameSmall VARCHAR(100),
    prodPicNameLarge VARCHAR(100),
    prodDescripShort VARCHAR(1000) NOT NULL,
    prodDescripLong VARCHAR(3000) NOT NULL,
    prodPrice DECIMAL(6,2),
    prodQuantity INT(4),
    PRIMARY KEY(prodId)
);

