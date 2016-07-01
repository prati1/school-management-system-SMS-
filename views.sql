create view if not exists administration as 
	select
		student_id, CONCAT(first_name, ' ',middle_name,' ', last_name) As Name,
		gender, DOBad, date_of_admission, student_roll,
		YEAR(CURDATE()) - YEAR(DOBad) AS age,
		CONCAT(address_temp_street,'-',address_temp_ward,',',address_temp_vdcmun,',',address_temp_district,',',address_temp_zone,',',address_temp_country) as temp_address
	FROM student;