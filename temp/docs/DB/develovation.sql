USE `develovation`;

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
    `id` int NOT NULL AUTO_INCREMENT,
    `user_name` varchar(50) NOT NULL DEFAULT '',
    `email` varchar(50) NOT NULL DEFAULT '',
    `password` varchar(100) NOT NULL DEFAULT '',
    `display_name` varchar(50) DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;