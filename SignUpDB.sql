CREATE DATABASE eventsignup;

USE eventsignup;

CREATE TABLE participant (
	participantID INTEGER AUTO_INCREMENT,
	full_name VARCHAR(150) NOT NULL,
	email VARCHAR(255) NOT NULL,
	CONSTRAINT participant_pk PRIMARY KEY (participantID));