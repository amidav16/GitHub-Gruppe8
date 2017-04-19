CREATE TABLE comments (
	cid INT(11) not null AUTO_INCREMENT PRIMARY KEY,
    uid varchar(128) not null, 
    date datetime not null,
    message TEXT not null
);