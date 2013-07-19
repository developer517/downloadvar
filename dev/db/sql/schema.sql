
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- user
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(60) NOT NULL,
    `username` VARCHAR(50) NOT NULL,
    `password` VARCHAR(50) NOT NULL,
    `email` VARCHAR(60),
    `mobile` VARCHAR(15),
    PRIMARY KEY (`id`),
    UNIQUE INDEX `name` (`name`),
    UNIQUE INDEX `username` (`username`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- matter
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `matter`;

CREATE TABLE `matter`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `main_subject` VARCHAR(255) NOT NULL,
    `short_subject` VARCHAR(100) NOT NULL,
    `long_desc` TEXT NOT NULL,
    `short_desc` TEXT,
    `english_desc` TEXT,
    `help_desc` TEXT,
    `download_link` TEXT NOT NULL,
    `tag_keywords` VARCHAR(255),
    `tag_desc` VARCHAR(255),
    `view_count` INTEGER,
    `order` INTEGER NOT NULL,
    `need` INTEGER NOT NULL,
    `spicial` INTEGER NOT NULL,
    `download_count` INTEGER,
    `date` VARCHAR(255) NOT NULL,
    `publisher` INTEGER NOT NULL,
    `user_id` INTEGER NOT NULL,
    `third_category_id` INTEGER NOT NULL,
    PRIMARY KEY (`id`),
    INDEX `matter_FI_1` (`user_id`),
    INDEX `matter_FI_2` (`third_category_id`),
    CONSTRAINT `matter_FK_1`
        FOREIGN KEY (`user_id`)
        REFERENCES `user` (`id`)
        ON UPDATE CASCADE
        ON DELETE SET NULL,
    CONSTRAINT `matter_FK_2`
        FOREIGN KEY (`third_category_id`)
        REFERENCES `third_category` (`id`)
        ON UPDATE CASCADE
        ON DELETE SET NULL
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- one_category
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `one_category`;

CREATE TABLE `one_category`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `persian_name` VARCHAR(50) NOT NULL,
    `english_name` VARCHAR(50) NOT NULL,
    `description` VARCHAR(255) NOT NULL,
    `tag` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE INDEX `persian_name` (`persian_name`),
    UNIQUE INDEX `englishname` (`english_name`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- second_category
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `second_category`;

CREATE TABLE `second_category`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `persian_name` VARCHAR(50) NOT NULL,
    `english_name` VARCHAR(50) NOT NULL,
    `description` VARCHAR(255) NOT NULL,
    `tag` VARCHAR(255) NOT NULL,
    `one_category_id` INTEGER NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE INDEX `persian_name` (`persian_name`),
    UNIQUE INDEX `englishname` (`english_name`),
    INDEX `second_category_FI_1` (`one_category_id`),
    CONSTRAINT `second_category_FK_1`
        FOREIGN KEY (`one_category_id`)
        REFERENCES `one_category` (`id`)
        ON UPDATE CASCADE
        ON DELETE SET NULL
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- third_category
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `third_category`;

CREATE TABLE `third_category`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `persian_name` VARCHAR(50) NOT NULL,
    `english_name` VARCHAR(50) NOT NULL,
    `description` VARCHAR(255) NOT NULL,
    `tag` VARCHAR(255) NOT NULL,
    `second_category_id` INTEGER NOT NULL,
    PRIMARY KEY (`id`),
    INDEX `third_category_FI_1` (`second_category_id`),
    CONSTRAINT `third_category_FK_1`
        FOREIGN KEY (`second_category_id`)
        REFERENCES `second_category` (`id`)
        ON UPDATE CASCADE
        ON DELETE SET NULL
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- news
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `subject` VARCHAR(255) NOT NULL,
    `order` INTEGER NOT NULL,
    `date` VARCHAR(255) NOT NULL,
    `desc` TEXT NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- tiket
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `tiket`;

CREATE TABLE `tiket`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `desc` TEXT NOT NULL,
    `category` VARCHAR(255) NOT NULL,
    `order` INTEGER NOT NULL,
    `action` INTEGER,
    `increase` INTEGER NOT NULL,
    `date` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- comment
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `comment`;

CREATE TABLE `comment`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(50) NOT NULL,
    `email` VARCHAR(60),
    `website` VARCHAR(100),
    `date` VARCHAR(255) NOT NULL,
    `desc` TEXT NOT NULL,
    `action` INTEGER NOT NULL,
    `matter_id` INTEGER NOT NULL,
    PRIMARY KEY (`id`),
    INDEX `comment_FI_1` (`matter_id`),
    CONSTRAINT `comment_FK_1`
        FOREIGN KEY (`matter_id`)
        REFERENCES `matter` (`id`)
        ON UPDATE CASCADE
        ON DELETE SET NULL
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- gap
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `gap`;

CREATE TABLE `gap`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `desc` TEXT NOT NULL,
    `date` VARCHAR(255) NOT NULL,
    `comment_id` INTEGER NOT NULL,
    PRIMARY KEY (`id`),
    INDEX `gap_FI_1` (`comment_id`),
    CONSTRAINT `gap_FK_1`
        FOREIGN KEY (`comment_id`)
        REFERENCES `comment` (`id`)
        ON UPDATE CASCADE
        ON DELETE SET NULL
) ENGINE=MyISAM;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
