CREATE TABLE IF NOT EXISTS `login` (  
  `email` varchar(200) NOT NULL,  
  `password` varchar(200) NOT NULL,  
  PRIMARY KEY (`email`)  
) ENGINE=InnoDB DEFAULT CHARSET=latin1; 