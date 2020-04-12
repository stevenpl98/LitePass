CREATE TABLE IF NOT EXISTS `credentials` (  
  `email` varchar(200) NOT NULL,  
  `siteApp` text(200) NOT NULL, 
  `user` varchar(200) NOT NULL,  
  `password` varchar(200) NOT NULL, 
  PRIMARY KEY (`siteApp`)  
) ENGINE=InnoDB DEFAULT CHARSET=latin1; 