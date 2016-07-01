CREATE TABLE if not exists Users
(
    uid INTEGER AUTO_INCREMENT NOT NULL,
    name VARCHAR(20) NOT NULL,
    type ENUM("DirectLogin", "OpenID") NOT NULL,
    primary key (uid)
);

CREATE TABLE if not exists examID
(
    uid INTEGER NOT NULL,
    username VARCHAR(20) NOT NULL,
    password VARCHAR(20) NOT NULL,
	type ENUM("exam") NOT NULL,
    PRIMARY KEY(uid),
	FOREIGN KEY (uid) references Users(uid)
) ENGINE= InnoDB;

CREATE TABLE if not exists accountID
(
    uid INTEGER NOT NULL,
    username VARCHAR(20) NOT NULL,
    password VARCHAR(20) NOT NULL,
	type ENUM("accountID") NOT NULL,
    PRIMARY KEY(uid),
    FOREIGN KEY (uid) REFERENCES Users(uid)
);

CREATE TABLE if not exists administrationID
(
    uid INTEGER NOT NULL,
    username VARCHAR(20) NOT NULL,
    password VARCHAR(20) NOT NULL,
	type ENUM("administrationID") NOT NULL,
    PRIMARY KEY(uid),
    FOREIGN KEY (uid) REFERENCES Users(uid)
);

create table if not exists fee(
	standard_id int,
	status varchar(5),
	due_amount float(20)
	); 

create table if not exists tuition_fee(
	monthly varchar(10),
	standard_id int REFERENCES fee(standard_id)
);

create table if not exists bus_fee(
	yearly varchar(10),
	standard_id int REFERENCES fee(standard_id)
);

create table if not exists hostel_fee(
	yearly varchar(10),
	standard_id int REFERENCES fee(standard_id)
);

create table if not exists standard(
	standard_id int,
	standard_name varchar(10),
	PRIMARY KEY (standard_id)
	); 

create table if not exists admission_fee(
	payment_date DATE,
	payment_amount FLOAT,
	student_id int references student(student_id),
	standard_id int references standard(standard_id)	
	); 
	
create table if not exists subject(
	subj_id int,
	standard_id int,
	subj_name varchar(10),
	PRIMARY KEY (subj_id)
	); 
	
create table if not exists attendance(
	student_id int,
	name varchar(50),
	count int(254),
	percent varchar(5)
	); 
	
create table if not exists report(
	student_id int,
	standard_id int,
	first_term int(5),
	second_term int(5),
	third_term int(5),
	remarks varchar(50)
	);

create table if not exists marks(
	student_id int,
	standard_id int,
	subject_id int,
	first_term int(5),
	second_term int(5),
	third_term int(5)
	);	
	
	
