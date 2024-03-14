#dataname = DANHBADIENTHOAI

CREATE TABLE departments (
	department_ID INTEGER  NOT NULL AUTO_INCREMENT,
	department_Name VARCHAR(255) NOT NULL ,
	address VARCHAR(255) NOT NULL,
	email VARCHAR(255) NOT NULL,
	phone VARCHAR(255) NOT NULL,
	logo VARCHAR(255) NOT NULL,
	website VARCHAR(255) NOT NULL,
	parent_Department_ID INTEGER ,
	PRIMARY KEY (department_ID),
	FOREIGN KEY (parent_Department_ID) REFERENCES departments(department_ID) 
)	

CREATE TABLE employees (
	employee_ID INTEGER NOT NULL ,
	full_name VARCHAR(255) NOT NULL,
	address VARCHAR(255) NOT NULL,
	mobile_phone VARCHAR(255) NOT NULL,
	posi_tion VARCHAR(255) NOT NULL ,
	avatar VARCHAR(255) NOT NULL ,
	department_ID INTEGER ,
	PRIMARY KEY (employee_ID),
	FOREIGN KEY (department_ID) REFERENCES departments(department_ID)
	
)

CREATE TABLE users (
	user_name VARCHAR(255) NOT NULL ,
	pass_word VARCHAR(255) NOT NULL ,
	ROLE VARCHAR(255) NOT NULL ,
	employee_ID INTEGER,
	PRIMARY KEY (user_name),
	FOREIGN KEY (employee_ID) REFERENCES employees (employee_ID) 
)

#INSERT TABLE DEPARTMENT
insert into departments (department_ID, department_Name, address, email, phone, logo, website, parent_Department_ID) values (1, 'Parsifal', 'PO Box 2088', 'praddish0@princeton.edu', '11111', 'https://d1hjkbq40fs2x4.cloudfront.net/2017-08-21/files/landscape-photography_1645-t.jpg', 'uk.co.amazon.Y-find', 1);
insert into departments (department_ID, department_Name, address, email, phone, logo, website, parent_Department_ID) values (2, 'Jerrilee', 'PO Box 82267', 'jhenzer1@epa.gov', '22222', 'https://d1hjkbq40fs2x4.cloudfront.net/2017-08-21/files/landscape-photography_1645-t.jpg', 'com.github.Zoolab', 2);
insert into departments (department_ID, department_Name, address, email, phone, logo, website, parent_Department_ID) values (3, 'Isador', '14th Floor', 'idahlman2@furl.net', '33333', 'https://d1hjkbq40fs2x4.cloudfront.net/2017-08-21/files/landscape-photography_1645-t.jpg', 'la.51.Bigtax', 3);
insert into departments (department_ID, department_Name, address, email, phone, logo, website, parent_Department_ID) values (4, 'Antons', '16th Floor', 'aheeley3@earthlink.net', '55555', 'https://d1hjkbq40fs2x4.cloudfront.net/2017-08-21/files/landscape-photography_1645-t.jpg', 'com.nba.Domainer', 4);
insert into departments (department_ID, department_Name, address, email, phone, logo, website, parent_Department_ID) values (5, 'Kris', 'PO Box 80573', 'kyeardsley4@infoseek.co.jp', '444444', 'https://d1hjkbq40fs2x4.cloudfront.net/2017-08-21/files/landscape-photography_1645-t.jpg', 'uk.ac.cam.Fintone', 5);
insert into departments (department_ID, department_Name, address, email, phone, logo, website, parent_Department_ID) values (6, 'Peter', 'Room 881', 'pcollington5@ovh.net', '666666', 'https://d1hjkbq40fs2x4.cloudfront.net/2017-08-21/files/landscape-photography_1645-t.jpg', 'uk.gov.Otcom', 6);
insert into departments (department_ID, department_Name, address, email, phone, logo, website, parent_Department_ID) values (7, 'Glennie', 'Room 1560', 'ghalworth6@mlb.com', '777777', 'https://d1hjkbq40fs2x4.cloudfront.net/2017-08-21/files/landscape-photography_1645-t.jpg', 'com.scientificamerican.Y-find', 7);
insert into departments (department_ID, department_Name, address, email, phone, logo, website, parent_Department_ID) values (8, 'Cecilio', 'Room 117', 'cstitch7@prweb.com', '888888', 'https://d1hjkbq40fs2x4.cloudfront.net/2017-08-21/files/landscape-photography_1645-t.jpg', 'com.apple.Asoka', 8);
insert into departments (department_ID, department_Name, address, email, phone, logo, website, parent_Department_ID) values (9, 'Lynn', 'PO Box 72955', 'lobradden8@instagram.com', '999999', 'https://d1hjkbq40fs2x4.cloudfront.net/2017-08-21/files/landscape-photography_1645-t.jpg', 'gov.noaa.Solarbreeze', 9);
insert into departments (department_ID, department_Name, address, email, phone, logo, website, parent_Department_ID) values (10, 'Mauricio', '10th Floor', 'msprowell9@buzzfeed.com', '1233245', 'https://d1hjkbq40fs2x4.cloudfront.net/2017-08-21/files/landscape-photography_1645-t.jpg', 'com.bluehost.Bitwolf', 10);

#INSERT TABLE EMPLOYEES
INSERT INTO employees (employee_ID, full_name, address, mobile_phone, posi_tion, avatar, department_ID) VALUES 
	(1, 'John Doe', '123 Main St', '123456789', 'Manager', 'avatar.jpg', 1);
INSERT INTO employees (employee_ID, full_name, address, mobile_phone, posi_tion, avatar, department_ID)
VALUES (2, 'Jane Smith', '456 Elm St', '987654321', 'Assistant', 'avatar.jpg', 1);

INSERT INTO employees (employee_ID, full_name, address, mobile_phone, posi_tion, avatar, department_ID)
VALUES (3, 'David Johnson', '789 Oak St', '555555555', 'Clerk', 'avatar.jpg', 2);

INSERT INTO employees (employee_ID, full_name, address, mobile_phone, posi_tion, avatar, department_ID)
VALUES (4, 'Sarah Williams', '321 Maple Ave', '111111111', 'Engineer', 'avatar.jpg', 2);

INSERT INTO employees (employee_ID, full_name, address, mobile_phone, posi_tion, avatar, department_ID)
VALUES (5, 'Michael Brown', '654 Pine St', '222222222', 'Technician', 'avatar.jpg', 3);

INSERT INTO employees (employee_ID, full_name, address, mobile_phone, posi_tion, avatar, department_ID)
VALUES (6, 'Emily Davis', '987 Cedar St', '333333333', 'Analyst', 'avatar.jpg', 3);

INSERT INTO employees (employee_ID, full_name, address, mobile_phone, posi_tion, avatar, department_ID)
VALUES (7, 'Daniel Wilson', '741 Birch St', '444444444', 'Manager', 'avatar.jpg', 4);

INSERT INTO employees (employee_ID, full_name, address, mobile_phone, posi_tion, avatar, department_ID)
VALUES (8, 'Olivia Taylor', '852 Willow St', '888888888', 'Assistant', 'avatar.jpg', 4);

INSERT INTO employees (employee_ID, full_name, address, mobile_phone, posi_tion, avatar, department_ID)
VALUES (9, 'Matthew Anderson', '963 Oak St', '999999999', 'Clerk', 'avatar.jpg', 5);

INSERT INTO employees (employee_ID, full_name, address, mobile_phone, posi_tion, avatar, department_ID)
VALUES (10, 'Ava Martinez', '159 Elm St', '777777777', 'Engineer', 'avatar.jpg', 5);


#INSERT TABLE USERS
INSERT INTO users (user_name, pass_word, ROLE, employee_ID)
VALUES ('user1', 'password1', 'regular', 1);

INSERT INTO users (user_name, pass_word, ROLE, employee_ID)
VALUES ('user2', 'password2', 'regular', 2);

INSERT INTO users (user_name, pass_word, ROLE, employee_ID)
VALUES ('user3', 'password3', 'admin', 3);

INSERT INTO users (user_name, pass_word, ROLE, employee_ID)
VALUES ('user4', 'password4', 'regular', 4);

INSERT INTO users (user_name, pass_word, ROLE, employee_ID)
VALUES ('user5', 'password5', 'regular', 5);

INSERT INTO users (user_name, pass_word, ROLE, employee_ID)
VALUES ('user6', 'password6', 'admin', 6);

INSERT INTO users (user_name, pass_word, ROLE, employee_ID)
VALUES ('user7', 'password7', 'regular', 7);

INSERT INTO users (user_name, pass_word, ROLE, employee_ID)
VALUES ('user8', 'password8', 'regular', 8);

INSERT INTO users (user_name, pass_word, ROLE, employee_ID)
VALUES ('user9', 'password9', 'admin', 9);

INSERT INTO users (user_name, pass_word, ROLE, employee_ID)
VALUES ('user10', 'password10', 'regular', 10);

