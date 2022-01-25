CREATE SCHEMA `tester` ;


/* register table */
CREATE TABLE `tester`.`login` (
  `username` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NULL,
  `id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(255) NULL,
  PRIMARY KEY (`id`));


ALTER TABLE `tester`.`login` 
DROP COLUMN `username`;



/*products table */
CREATE TABLE `tester`.`products` (
  `idproducts` INT NOT NULL AUTO_INCREMENT,
  `nameproducts` VARCHAR(45) NULL,
  `skuproducts` VARCHAR(45) NULL,
  `price` VARCHAR(45) NULL,
  PRIMARY KEY (`idproducts`));

ALTER TABLE `tester`.`products` 
ADD COLUMN `categoryproducts` VARCHAR(45) NULL AFTER `priceproducts`,
CHANGE COLUMN `price` `priceproducts` VARCHAR(45) NULL DEFAULT NULL ;
