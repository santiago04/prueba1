CREATE DATABASE IF NOT EXISTS `dbinicial` DEFAULT CHARACTER SET utf8 ;
USE `dbinicial` ;

CREATE TABLE IF NOT EXISTS `dbinicial`.`Personas` (
  `idpersona` INT NOT NULL AUTO_INCREMENT,
  `cedula` INT NOT NULL,
  `nombres` VARCHAR(45) NOT NULL,
  `apellidos` VARCHAR(45) NOT NULL,
  `correo` VARCHAR(45) NOT NULL,
  `direccion` VARCHAR(45) NULL,
  `telefono` VARCHAR(45) NULL,
  `fecha_nacimiento` DATE NOT NULL,
  PRIMARY KEY (`idpersona`))
ENGINE = InnoDB;
