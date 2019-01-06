
CREATE TABLE `webdb`.`productdetails` ( `productId` INT(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, `productName` VARCHAR(30) NULL DEFAULT NULL , `productBasePrice` FLOAT(2) NULL DEFAULT NULL , `productDescription` TEXT NULL DEFAULT NULL , `productDefaultImage` LONGBLOB NULL DEFAULT NULL , PRIMARY KEY (`productId`));

CREATE TABLE `webdb`.`productcolorvariant` ( `productId` INT(3) NULL DEFAULT NULL , `colorId` INT NOT NULL , `priceAddition` INT NOT NULL , `productColorImage` LONGBLOB NOT NULL ) ENGINE = MyISAM;

CREATE TABLE `webdb`.`colorchart` ( `colorId` INT UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, `colorName` VARCHAR(10) NOT NULL , PRIMARY KEY (`colorId`)) ENGINE = MyISAM;

CREATE TABLE `webdb`.`order` ( `sn` INT UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,`orderNumber` INT(20) NULL DEFAULT NULL , `productId` INT(3) NULL DEFAULT NULL , `colorId` INT NULL DEFAULT NULL , `customerId` INT(10) NULL DEFAULT NULL , `finalPrice` FLOAT(2) NULL DEFAULT NULL , `orderConfirm` BIT NULL DEFAULT NULL , `OrderConfirmAdmin` VARCHAR(20) NULL DEFAULT NULL, PRIMARY KEY (`sn`) ) ENGINE = MyISAM;

CREATE TABLE `webdb`. cart ( `sn` INT UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT , `customerId` INT(10) NOT NULL , `productId` INT(3) NOT NULL , `qty` INT NOT NULL , `netPrice` DOUBLE NOT NULL , PRIMARY KEY (`sn`)) ENGINE = MyISAM;












UPDATE `order` SET `orderConfirm` = b'1' WHERE `order`.`sn` = 0000000005



INSERT INTO `order` (`orderNumber`, `customerId`, `productId`, `color`, `qty`, `netPrice`, `orderConfirm`, `OrderConfirmAdmin`) VALUES (NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL)





INSERT INTO `customerlogin` (`customerId`, `firstName`, `lastName`, `emailId`, `password`) VALUES (NULL, 'dscd', 'dsc', 'dscdsc', 'csdcd')




INSERT INTO `customerlogin` (`customerId`, `firstName`, `lastName`, `emailId`, `password`) VALUES (NULL, 'vcxv', 'vcx', 'cxvcxv', 'cxvcxv')

