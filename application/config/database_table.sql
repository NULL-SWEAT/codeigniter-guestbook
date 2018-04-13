CREATE TABLE entry (
        id int(11) NOT NULL AUTO_INCREMENT,
        author varchar(128) NOT NULL,
        text text NOT NULL,
    	time DATETIME DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id)
);