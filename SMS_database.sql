drop table standard;
drop table fee;
drop table tuition_fee;
drop table buss_fee;
drop table hostel_fee;
create table if not exists standard(
	standard_id int,
	standard_name varchar(10),
	PRIMARY KEY (standard_id),
	student_id int references student(student_id)
	);

create table if not exists fee(
	fee_pk int,
	status varchar(5),
	due_amount float(20),
	type ENUM("tuition_fee", "bus_fee","hostel_fee")NOT NULL,
	PRIMARY KEY(fee_pk)
	); 

create table if not exists tuition_fee(
	monthly varchar(10),
	fee_pk int,
	PRIMARY KEY(fee_pk),
	fee_pk int REFERENCES fee(fee_pk)
);

create table if not exists bus_fee(
	yearly varchar(10),
	fee_pk int,
	PRIMARY KEY(fee_pk),
	fee_pk int REFERENCES fee(fee_pk)
);

create table if not exists hostel_fee(
	yearly varchar(10),
	fee_pk int,
	PRIMARY KEY(fee_pk),
	fee_pk int REFERENCES fee(fee_pk)
);
