-- MySQL Script generated by MySQL Workbench
-- lun 13 ago 2018 11:18:40 CDT
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering
-- DROP DATABASE BDRevolution03


SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema RevolutioBD
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema RevolutioBD
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `RevolutioBD` ;
USE `RevolutioBD` ;

-- -----------------------------------------------------
-- Table `RevolutioBD`.`CoordinadorRev`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RevolutioBD`.`CoordinadorRev` (
  `ID_coordinador` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NULL,
  `P.app` VARCHAR(45) NULL,
  `S.app` VARCHAR(45) NULL,
  `e-mail` VARCHAR(45) NULL,
  PRIMARY KEY (`ID_coordinador`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RevolutioBD`.`Empresa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RevolutioBD`.`Empresa` (
  `ID_empresa` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NULL,
  `Telefono` VARCHAR(45) NULL,
  `ID_coordinador` INT NOT NULL,
  PRIMARY KEY (`ID_empresa`),
    FOREIGN KEY (`ID_coordinador`)
    REFERENCES `RevolutioBD`.`CoordinadorRev` (`ID_coordinador`)
    ON DELETE CASCADE
    ON UPDATE CASCADE )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RevolutioBD`.`Empleado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RevolutioBD`.`Empleado` (
  `ID_Empleado` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NULL,
  `P.app` VARCHAR(45) NULL,
  `S.app` VARCHAR(45) NULL,
  `Telefono` VARCHAR(45) NULL,
  `e-mail` VARCHAR(45) NULL,
  `ID_empresa` INT NOT NULL,	
  PRIMARY KEY (`ID_Empleado`),
    FOREIGN KEY (`ID_empresa`)
    REFERENCES `RevolutioBD`.`Empresa` (`ID_empresa`)
    )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RevolutioBD`.`Peticion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RevolutioBD`.`Peticion` (
  `ID_peticion` INT NOT NULL AUTO_INCREMENT,
  `FechaIni` DATE NULL,
  `FechaFin` DATE NULL,
  `Status` VARCHAR(45) NULL,
  `Descripcion` VARCHAR(45) NULL,
  `ID_Empleado` INT NOT NULL,
  `ID_coordinador` INT NOT NULL,
  PRIMARY KEY (`ID_peticion`),
    FOREIGN KEY (`ID_Empleado`)
    REFERENCES `RevolutioBD`.`Empleado` (`ID_Empleado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (`ID_coordinador`)
    REFERENCES `RevolutioBD`.`CoordinadorRev` (`ID_coordinador`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RevolutioBD`.`Analista`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RevolutioBD`.`Analista` (
  `ID_analista` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NULL,
  `P.app` VARCHAR(45) NULL,
  `S.app` VARCHAR(45) NULL,
  `e-mailEmpresa` VARCHAR(45) NULL,
  `Telefono` VARCHAR(45) NULL,
  `ID_encargado` INT NOT NULL,
  PRIMARY KEY (`ID_analista`),
    FOREIGN KEY (`ID_encargado`)
    REFERENCES `RevolutioBD`.`CoordinadorRev` (`ID_coordinador`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RevolutioBD`.`EstudioSocioE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RevolutioBD`.`EstudioSocioE` (
  `ID_estudio` INT NOT NULL AUTO_INCREMENT,
  `PuestoSol` VARCHAR(45) NULL,
  `Region` VARCHAR(45) NULL,
  `FechEval` DATE NULL,
  `estatus` VARCHAR(45) NULL,
  `FechTerm` VARCHAR(45) NULL,
  `ID_analista` INT NOT NULL,
  `ID_encargado` INT NOT NULL,
  PRIMARY KEY (`ID_estudio`),
    FOREIGN KEY (`ID_analista`)
    REFERENCES `RevolutioBD`.`Analista` (`ID_analista`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RevolutioBD`.`DatosPersonales`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RevolutioBD`.`DatosPersonales` (
  `ID_datP` INT NOT NULL AUTO_INCREMENT,
  `Edad` VARCHAR(15) NULL,
  `FechNac` DATE NULL,
  `LugarNac` VARCHAR(45) NULL,
  `EdoCivil` VARCHAR(45) NULL,
  `GradoAcad` VARCHAR(45) NULL,
  `Tel.casa` VARCHAR(45) NULL,
  `TipoVivienda` VARCHAR(45) NULL,
  `ID_estudio` INT NOT NULL,
  PRIMARY KEY (`ID_datP`),
    FOREIGN KEY (`ID_estudio`)
    REFERENCES `RevolutioBD`.`EstudioSocioE` (`ID_estudio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RevolutioBD`.`RefLab`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RevolutioBD`.`RefLab` (
  `ID_RefLab` INT NOT NULL AUTO_INCREMENT,
  `NomEmpresa` VARCHAR(45) NULL,
  `Giro` VARCHAR(45) NULL,
  `Domicilio` VARCHAR(70) NULL,
  `DelMun` VARCHAR(45) NULL,
  `UltimoPuesto` VARCHAR(45) NULL,
  `JefeInmediato` VARCHAR(45) NULL,
  `FechIngreso` VARCHAR(45) NULL,
  `SueldoIni` VARCHAR(45) NULL,
  `MotSalida` VARCHAR(45) NULL,
  `ResponsableRH` VARCHAR(45) NULL,
  `Comentarios` VARCHAR(150) NULL,
  `Colonia` VARCHAR(45) NULL,
  `Telefono` VARCHAR(45) NULL,
  `Puesto` VARCHAR(45) NULL,
  `FechSalida` VARCHAR(45) NULL,
  `SueldoFinal` VARCHAR(45) NULL,
  `ID_estudio` INT NOT NULL,
  PRIMARY KEY (`ID_RefLab`),
    FOREIGN KEY (`ID_estudio`)
    REFERENCES `RevolutioBD`.`EstudioSocioE` (`ID_estudio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `RevolutioBD`.`RefPers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RevolutioBD`.`RefPers` (
  `ID_RefPers` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NULL,
  `Telefono` VARCHAR(45) NULL,
  `Parentesco` VARCHAR(45) NULL,
  `TmpConocer` VARCHAR(45) NULL,
  `Opinion` VARCHAR(45) NULL,
  `Recomienda` VARCHAR(15) NULL,
  `Observacion` VARCHAR(80) NULL,
  `ID_estudio` INT NOT NULL,
  PRIMARY KEY (`ID_RefPers`),
    FOREIGN KEY (`ID_estudio`)
    REFERENCES `RevolutioBD`.`EstudioSocioE` (`ID_estudio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RevolutioBD`.`Psicosocial`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RevolutioBD`.`Psicosocial` (
  `ID_Psicosocial` INT NOT NULL,
  `FacebookObs` VARCHAR(45) NULL,
  `LinkedObs` VARCHAR(45) NULL,
  `TwitterObs` VARCHAR(45) NULL,
  `Resultado` VARCHAR(45) NULL,
  `ID_estudio` INT NOT NULL,
  PRIMARY KEY (`ID_Psicosocial`),
    FOREIGN KEY (`ID_estudio`)
    REFERENCES `RevolutioBD`.`EstudioSocioE` (`ID_estudio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `RevolutioBD`.`PortadaSocio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RevolutioBD`.`PortadaSocio` (
  `ID_portadaSocio` INT NOT NULL,
  `ResumenTelefono` VARCHAR(45) NULL,
  `ResumenPsicosocial` VARCHAR(45) NULL,
  `FactorRiesgo` VARCHAR(15) NULL,
  `Deshonestidad` VARCHAR(15) NULL,
  `Adicciones` VARCHAR(15) NULL,
  `PerversionSexual` VARCHAR(15) NULL,
  `InestabilidadEmocional` VARCHAR(15) NULL,
  `Observaciones` VARCHAR(80) NULL,
  `Resultado` VARCHAR(45) NULL,
  `ID_estudio` INT NOT NULL,
  PRIMARY KEY (`ID_portadaSocio`),
    FOREIGN KEY (`ID_estudio`)
    REFERENCES `RevolutioBD`.`EstudioSocioE` (`ID_estudio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

