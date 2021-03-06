-- MySQL Script generated by MySQL Workbench
-- Tue 05 May 2020 11:25:25 AM +04
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
-- -----------------------------------------------------
-- Schema coco-projet
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema coco-projet
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `coco-projet` DEFAULT CHARACTER SET latin1 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`client`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`client` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(16) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `password` VARCHAR(32) NOT NULL,
  `create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `prenom` VARCHAR(45) NOT NULL,
  `nom` VARCHAR(45) NOT NULL,
  `adresse` VARCHAR(255) NOT NULL,
  `ville` VARCHAR(45) NOT NULL,
  `pays` VARCHAR(45) NOT NULL,
  `telephone_portable` VARCHAR(45) NOT NULL,
  `telephone_autre` VARCHAR(45) NULL,
  UNIQUE INDEX `username_UNIQUE` (`username` ASC) VISIBLE,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`veterinaire`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`veterinaire` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `prenom` VARCHAR(45) NOT NULL,
  `nom` VARCHAR(45) NOT NULL,
  `adresse_cabinet` VARCHAR(45) NOT NULL,
  `ville_cabinet` VARCHAR(45) NOT NULL,
  `pays_cabinet` VARCHAR(45) NOT NULL,
  `tel_cabinet` VARCHAR(45) NOT NULL,
  `tel_cabinet_autre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `username_UNIQUE` (`username` ASC) VISIBLE,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`carnet_sante`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`carnet_sante` (
  `id` INT NOT NULL,
  `données_santé_vaccin` VARCHAR(255) NULL,
  `données_santé_maladie` VARCHAR(255) NULL,
  `données santé 3` VARCHAR(255) NULL,
  `données_santé_alimentation` VARCHAR(255) NULL,
  `données_santé_divers_1` VARCHAR(255) NULL,
  `données_santé_divers_2` VARCHAR(255) NULL,
  `rdv_veto_historique` VARCHAR(255) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`chien`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`chien` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `prenom` VARCHAR(45) NOT NULL,
  `nom` VARCHAR(45) NOT NULL,
  `date_naissance` DATE NULL,
  `race` VARCHAR(45) NULL,
  `client_id` INT NOT NULL,
  `veterinaire_id` INT NOT NULL,
  `carnet_sante_id` INT NOT NULL,
  PRIMARY KEY (`id`, `client_id`, `veterinaire_id`, `carnet_sante_id`),
  INDEX `fk_chien_client1_idx` (`client_id` ASC) VISIBLE,
  INDEX `fk_chien_veterinaire1_idx` (`veterinaire_id` ASC) VISIBLE,
  INDEX `fk_chien_carnet_sante1_idx` (`carnet_sante_id` ASC) VISIBLE,
  CONSTRAINT `fk_chien_client1`
    FOREIGN KEY (`client_id`)
    REFERENCES `mydb`.`client` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_chien_veterinaire1`
    FOREIGN KEY (`veterinaire_id`)
    REFERENCES `mydb`.`veterinaire` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_chien_carnet_sante1`
    FOREIGN KEY (`carnet_sante_id`)
    REFERENCES `mydb`.`carnet_sante` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `coco-projet` ;

-- -----------------------------------------------------
-- Table `coco-projet`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `coco-projet`.`users` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `email_verified_at` TIMESTAMP NULL DEFAULT NULL,
  `password` VARCHAR(255) NOT NULL,
  `remember_token` VARCHAR(100) NULL DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  `first_name` VARCHAR(255) NOT NULL,
  `last_name` VARCHAR(255) NOT NULL,
  `address` VARCHAR(255) CHARACTER SET 'big5' NOT NULL,
  `address_plus` VARCHAR(255) NULL,
  `postal_code` CHAR(5) NOT NULL,
  `city` VARCHAR(50) NOT NULL,
  `country` CHAR(2) NOT NULL,
  `phone` VARCHAR(10) NOT NULL,
  `phone_plus` VARCHAR(10) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `users_email_unique` (`email` ASC) VISIBLE,
  UNIQUE INDEX `username_UNIQUE` (`username` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `coco-projet`.`veterinaries`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `coco-projet`.`veterinaries` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `email_verified_at` TIMESTAMP NULL DEFAULT NULL,
  `password` VARCHAR(255) NOT NULL,
  `remember_token` VARCHAR(100) NULL DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  `first_name` VARCHAR(255) NOT NULL,
  `last_name` VARCHAR(255) NOT NULL,
  `address_practice` VARCHAR(255) CHARACTER SET 'big5' NOT NULL,
  `address_plus_practice` VARCHAR(255) COLLATE 'Default Collation' NULL,
  `postal_code_practice` CHAR(5) NOT NULL,
  `city_practice` VARCHAR(50) NOT NULL,
  `country_practice` CHAR(2) NOT NULL,
  `phone_practice` VARCHAR(10) NOT NULL,
  `phone_plus_practice` VARCHAR(10) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `users_email_unique` (`email` ASC) VISIBLE,
  UNIQUE INDEX `username_UNIQUE` (`username` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `coco-projet`.`health_records`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `coco-projet`.`health_records` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `vaccine_info` VARCHAR(255) NULL,
  `disease_info` VARCHAR(255) NULL,
  `diet_info` VARCHAR(255) NULL,
  `misc_info` VARCHAR(255) NULL,
  `misc_plus_info` VARCHAR(255) NULL,
  `next_appointment` DATETIME NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `coco-projet`.`animals`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `coco-projet`.`animals` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(255) NOT NULL,
  `last_name` VARCHAR(255) NOT NULL,
  `birth_date` DATE NULL DEFAULT NULL,
  `type` VARCHAR(45) NOT NULL,
  `breed` VARCHAR(255) NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  `users_id` BIGINT(20) UNSIGNED NOT NULL,
  `veterinary_id` BIGINT(20) UNSIGNED NOT NULL,
  `health_records_id` BIGINT(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`, `users_id`, `veterinary_id`, `health_records_id`),
  UNIQUE INDEX `users_email_unique` (`last_name` ASC) VISIBLE,
  INDEX `fk_animal_users_idx` (`users_id` ASC) VISIBLE,
  INDEX `fk_animal_veterinary1_idx` (`veterinary_id` ASC) VISIBLE,
  INDEX `fk_animals_health_records1_idx` (`health_records_id` ASC) VISIBLE,
  CONSTRAINT `fk_animal_users`
    FOREIGN KEY (`users_id`)
    REFERENCES `coco-projet`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_animal_veterinary1`
    FOREIGN KEY (`veterinary_id`)
    REFERENCES `coco-projet`.`veterinaries` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_animals_health_records1`
    FOREIGN KEY (`health_records_id`)
    REFERENCES `coco-projet`.`health_records` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
