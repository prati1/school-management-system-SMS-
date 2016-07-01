

create table if not exists student(
	student_id INT NOT NULL AUTO_INCREMENT,
	first_name VARCHAR(20) NOT NULL,
	middle_name VARCHAR(20),
	last_name VARCHAR(20) NOT NULL,
	gender ENUM('Male','Female'),
	DOBad DATE NOT NULL,
	DOBbs DATE NOT NULL,
	date_of_admission DATE NOT NULL,
	email_id VARCHAR(50) NOT NULL,
	admitted_std VARCHAR(3) NOT NULL,
	student_roll INT NOT NULL,
	address_temp_street VARCHAR(20),
	address_temp_ward INT,
	address_temp_vdcmun VARCHAR(20),
	address_temp_district VARCHAR(20),
	address_temp_zone VARCHAR(20),
	address_temp_country VARCHAR(20),
	address_perm_street VARCHAR(20),
	address_perm_ward INT,
	address_perm_vdcmun VARCHAR(20),
	address_perm_district VARCHAR(20),
	address_perm_zone VARCHAR(20),
	address_perm_country VARCHAR(20),
	primary key(student_id)
	);
	



insert into student (student_id,first_name,middle_name,last_name,gender,DOBad,DOBbs,date_of_admission,email_id,admitted_std,student_roll,address_perm_street,address_perm_ward,address_perm_vdcmun,
address_perm_district,address_perm_zone,address_perm_country,address_temp_street,address_temp_ward,address_temp_vdcmun,address_temp_district,address_temp_zone,address_temp_country) values
('12312','Ankita','Nandita','Sharma','Female','1996-03-27','2052-04-28','2014-04-14','xmastree@gmail.com','3','2','Girijaghar','02','Pokhara','Kaski','Gandaki','Nepal','28 Kilo','16','Dhulikhel','Kavre','Bagmati','Nepal');
insert into student (student_id,first_name,middle_name,last_name,gender,DOBad,DOBbs,date_of_admission,email_id,admitted_std,student_roll,address_perm_street,address_perm_ward,address_perm_vdcmun,
address_perm_district,address_perm_zone,address_perm_country,address_temp_street,address_temp_ward,address_temp_vdcmun,address_temp_district,address_temp_zone,address_temp_country) values
('12313','Kiran','','Prajapati','Female','1995-03-24','2052-02-11','2013-01-12','krnprz@gmail.com','2','4','Sankhutole','04','Bhaktapur','Bhaktapur','Bagmati','Nepal','28 Kilo','16','Dhulikhel','Kavre','Bagmati','Nepal');

create table guardian(
	guardian_id VARCHAR NOT NULL,
	gfirst_name VARCHAR(20) NOT NULL,
	gmiddle_name VARCHAR(20),
	glast_name VARCHAR(20) NOT NULL,
	address_street VARCHAR(20),
	address_ward INT,
	address_vdcmun VARCHAR(20),
	address_district VARCHAR(20),
	address_zone VARCHAR(20),
	address_country VARCHAR(20),
	phone_no BIGINT,
	relation VARCHAR(20),
	email_id VARCHAR(50),
	student_id INT references student(student_id)
	);

insert into guardian(guardian_id, gfirst_name, gmiddle_name, glast_name,address_street,address_ward,address_vdcmun,address_district,address_zone,address_country,
phone_no,relation,email_id,std_id) values ('101','Lal','Bahadur','Prajapati','Sankhutole','04','Bhaktapur','Bhaktapur','Bagmati','Nepal','9867646890','Father','lal@gmail.com','12313');

insert into guardian(guardian_id, gfirst_name, gmiddle_name, glast_name,address_street,address_ward,address_vdcmun,address_district,address_zone,address_country,
phone_no,relation,email_id,std_id) values ('102','Parvati','Devi','Sharma','Girijaghar','02','Pokhara','Kaski','Gandaki','Nepal','9841789820','Mother','s.parvati@gmail.com','12312');
