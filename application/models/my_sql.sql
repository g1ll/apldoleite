SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `apl_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `apl_db` ;

-- -----------------------------------------------------
-- Table `apl_db`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `apl_db`.`user` (
  `iduser` BIGINT NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(200) NOT NULL,
  `password` VARCHAR(16) NOT NULL,
  PRIMARY KEY (`iduser`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `apl_db`.`news`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `apl_db`.`news` (
  `idnews` INT NOT NULL AUTO_INCREMENT,
  `news_title` VARCHAR(200) NOT NULL,
  `news_subtitle` VARCHAR(500) NULL,
  `news_text` VARCHAR(4000) NOT NULL,
  `user_iduser` BIGINT NOT NULL,
  PRIMARY KEY (`idnews`),
  INDEX `fk_news_user1_idx` (`user_iduser` ASC),
  CONSTRAINT `fk_news_user1`
    FOREIGN KEY (`user_iduser`)
    REFERENCES `apl_db`.`user` (`iduser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `apl_db`.`pages`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `apl_db`.`pages` (
  `idpages` BIGINT NOT NULL AUTO_INCREMENT,
  `pages_title` VARCHAR(200) NOT NULL,
  `pages_text` VARCHAR(2000) NOT NULL,
  `pages_n_news` INT NOT NULL DEFAULT 0,
  `pages_type_album` INT NULL DEFAULT 0,
  `user_iduser` BIGINT NOT NULL,
  PRIMARY KEY (`idpages`),
  INDEX `fk_pages_user1_idx` (`user_iduser` ASC),
  CONSTRAINT `fk_pages_user1`
    FOREIGN KEY (`user_iduser`)
    REFERENCES `apl_db`.`user` (`iduser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `apl_db`.`album`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `apl_db`.`album` (
  `idalbum` BIGINT NOT NULL AUTO_INCREMENT,
  `album_title` VARCHAR(200) NULL,
  `album_desc` VARCHAR(500) NULL,
  `user_iduser` BIGINT NOT NULL,
  `news_idnews` INT NULL,
  `pages_idpages` BIGINT NULL,
  PRIMARY KEY (`idalbum`),
  INDEX `fk_album_user1_idx` (`user_iduser` ASC),
  INDEX `fk_album_news1_idx` (`news_idnews` ASC),
  INDEX `fk_album_pages1_idx` (`pages_idpages` ASC),
  CONSTRAINT `fk_album_user1`
    FOREIGN KEY (`user_iduser`)
    REFERENCES `apl_db`.`user` (`iduser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_album_news1`
    FOREIGN KEY (`news_idnews`)
    REFERENCES `apl_db`.`news` (`idnews`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_album_pages1`
    FOREIGN KEY (`pages_idpages`)
    REFERENCES `apl_db`.`pages` (`idpages`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `apl_db`.`image`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `apl_db`.`image` (
  `idimage` BIGINT NOT NULL AUTO_INCREMENT,
  `image_src` VARCHAR(200) NOT NULL,
  `image_title` VARCHAR(45) NOT NULL,
  `album_idalbum` BIGINT NOT NULL,
  `user_iduser` BIGINT NOT NULL,
  PRIMARY KEY (`idimage`),
  INDEX `fk_image_album1_idx` (`album_idalbum` ASC),
  INDEX `fk_image_user1_idx` (`user_iduser` ASC),
  CONSTRAINT `fk_image_album1`
    FOREIGN KEY (`album_idalbum`)
    REFERENCES `apl_db`.`album` (`idalbum`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_image_user1`
    FOREIGN KEY (`user_iduser`)
    REFERENCES `apl_db`.`user` (`iduser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `apl_db`.`videos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `apl_db`.`videos` (
  `idvideos` BIGINT NOT NULL AUTO_INCREMENT,
  `video_src` VARCHAR(200) NULL,
  `video_title` VARCHAR(200) NULL,
  `user_iduser` BIGINT NOT NULL,
  `news_idnews` INT NULL,
  `pages_idpages` BIGINT NULL,
  PRIMARY KEY (`idvideos`),
  INDEX `fk_videos_user1_idx` (`user_iduser` ASC),
  INDEX `fk_videos_news1_idx` (`news_idnews` ASC),
  INDEX `fk_videos_pages1_idx` (`pages_idpages` ASC),
  CONSTRAINT `fk_videos_user1`
    FOREIGN KEY (`user_iduser`)
    REFERENCES `apl_db`.`user` (`iduser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_videos_news1`
    FOREIGN KEY (`news_idnews`)
    REFERENCES `apl_db`.`news` (`idnews`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_videos_pages1`
    FOREIGN KEY (`pages_idpages`)
    REFERENCES `apl_db`.`pages` (`idpages`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `apl_db`.`papers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `apl_db`.`papers` (
  `idpapers` INT NOT NULL AUTO_INCREMENT,
  `paper_author` VARCHAR(500) NOT NULL,
  `paper_abst` VARCHAR(200) NULL,
  `paper_text` VARCHAR(200) NULL,
  `paper_link` VARCHAR(200) NULL,
  `user_iduser` BIGINT NOT NULL,
  PRIMARY KEY (`idpapers`),
  INDEX `fk_papers_user1_idx` (`user_iduser` ASC),
  CONSTRAINT `fk_papers_user1`
    FOREIGN KEY (`user_iduser`)
    REFERENCES `apl_db`.`user` (`iduser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `apl_db`.`partners`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `apl_db`.`partners` (
  `idpartners` INT NOT NULL,
  `partners_desc` VARCHAR(200) NULL,
  `partners_name` VARCHAR(200) NOT NULL,
  `partners_link` VARCHAR(200) NULL,
  `partners_logo` VARCHAR(200) NOT NULL,
  `user_iduser` BIGINT NOT NULL,
  PRIMARY KEY (`idpartners`),
  INDEX `fk_partners_user1_idx` (`user_iduser` ASC),
  CONSTRAINT `fk_partners_user1`
    FOREIGN KEY (`user_iduser`)
    REFERENCES `apl_db`.`user` (`iduser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
