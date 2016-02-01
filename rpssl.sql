CREATE TABLE IF NOT EXISTS `actions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `action` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

INSERT INTO `actions` (`id`, `action`) VALUES
(0, 'Random / Computer'),
(1, 'Rock'),
(2, 'Paper'),
(3, 'Scissors'),
(4, 'Spock'),
(5, 'Lizard');



CREATE TABLE IF NOT EXISTS `compares` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `action1` int(11) NOT NULL,
  `action2` int(11) NOT NULL,
  `result` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `action1` (`action1`,`action2`),
  KEY `action2` (`action2`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

INSERT INTO `compares` (`id`, `action1`, `action2`, `result`) VALUES
(1, 1, 3, 'crushes'),
(2, 1, 5, 'crushes'),
(3, 2, 1, 'covers'),
(4, 2, 4, 'disproves'),
(5, 3, 2, 'cuts'),
(6, 3, 5, 'decapitates'),
(7, 5, 2, 'eats'),
(8, 5, 4, 'poisons'),
(9, 4, 1, 'vaporizes'),
(10, 4, 3, 'smashes');



CREATE TABLE IF NOT EXISTS `history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `player1name` varchar(25) NOT NULL,
  `player1action` int(11) NOT NULL,
  `player2name` varchar(25) NOT NULL,
  `player2action` int(11) NOT NULL,
  `winner` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `player2action` (`player2action`),
  KEY `player1action` (`player1action`),
  KEY `winner` (`winner`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

INSERT INTO `history` (`id`, `player1name`, `player1action`, `player2name`, `player2action`, `winner`, `created_at`) VALUES
(1, 'Kender', 5, 'Computer 2', 5, 0, '2016-02-01 04:28:33'),
(58, 'Kender', 4, 'JuneBug', 5, 5, '2016-02-01 04:34:14'),
(59, 'Kender', 4, 'JuneBug', 1, 4, '2016-02-01 04:34:47'),
(60, 'Kender', 5, 'Computer 2', 1, 1, '2016-02-01 04:45:42');



ALTER TABLE `compares`
  ADD CONSTRAINT `compares_ibfk_1` FOREIGN KEY (`action1`) REFERENCES `actions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `compares_ibfk_2` FOREIGN KEY (`action2`) REFERENCES `actions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`player1action`) REFERENCES `actions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `history_ibfk_2` FOREIGN KEY (`player2action`) REFERENCES `actions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;