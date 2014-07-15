Use floridaFishing;

CREATE TABLE users (
        username VARCHAR(32) NOT NULL UNIQUE,
        password VARCHAR(32) NOT NULL);

CREATE TABLE fish  (
        Species VARCHAR(20) NOT NULL UNIQUE,
        Equipment_flags int default 0,
        Weather_flags int default 0,
        latitude double default 0,
        longitue double default 0,
        Tide flags int default 0,
        Law flags int default 0);

CREATE TABLE equipment  (
        eqType VARCHAR(32) NOT NULL);

CREATE TABLE jokes  (
        joke text);

CREATE TABLE blog   (
        Question_flag boolean default false,
        Answer_flag boolean default false,
        Story_flag boolean default false,
        Text text);
CREATE TABLE `members` (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(30) NOT NULL,
    `email` VARCHAR(50) NOT NULL,
    `password` CHAR(128) NOT NULL,
    `salt` CHAR(128) NOT NULL 
) ENGINE = InnoDB;
CREATE TABLE `login_attempts` (
    `user_id` INT(11) NOT NULL,
    `time` VARCHAR(30) NOT NULL
) ENGINE=InnoDB

