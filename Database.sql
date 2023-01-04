CREATE TABLE users(
	id int primary key not null,
	firstname varchar(250),
	lastname varchar(250),
	age int ,
	email varchar(250),
	password varchar(250),
	birthdate date,
	role varchar(100),
	photo text
);
CREATE TABLE Comment(
	id_comment int primary key,
	content text,
	created_at date,
	id_user int
);
CREATE TABLE Post(
	id_post int primary key,
	content_post text,
	created_at date
);
CREATE TABLE Message(
	id_message int primary key,
	messageTo varchar(200),
	messageFrom varchar(200),
	message_content text,
	status boolean,
	upload_message text	
);

insert into users (id, firstname, lastname, age, email, password, birthdate, role) values (1, 'Moustapha Adrien', 'Mboumba', 23, 'moustaphaadrienmboumba@esp.sn', 'passer123', '1999-01-01','admin');
