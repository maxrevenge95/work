СREATE DATABASE IF NOT EXISTS `comment`;

CREATE TABLE IF NOT EXISTS `comm` (
`commentID` int(11) NOT NULL AUTO_INCREMENT,
  `autor` varchar(45) COLLATE utf8_unicode_520_ci NOT NULL,
  `commentText` varchar(512) COLLATE utf8_unicode_520_ci NOT NULL,
  PRIMARY KEY(`commentID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;