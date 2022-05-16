

CREATE TABLE anonyusers(
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50),
   `lastname` varchar(50),
   `email` varchar(255),
   `status` varchar(50),
   `password` varchar(255),
   `Profileimage` blob,
   `Bio` varchar(255),
   `reg_date` barchar(50)
   PRIMARY KEY(id)
);