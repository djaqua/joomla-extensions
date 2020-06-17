CREATE TABLE IF NOT EXISTS `#__helloworld` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
    `a_column` text NOT NULL,

    PRIMARY KEY (`id`)
) ENGINE=INNODB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

INSERT INTO `#__helloworld` (`a_column`) VALUES ('a value'), ('another value');
