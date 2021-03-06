/*
	VANESSA ULLOA
	DANIEL KUSHNER
	CST 363
	FINAL PROJECT
	ADD DATA TO TABLES SQL FILE
*/

set echo off
set heading off
set verify off

SPOOL V:\Desktop\FP_InsertData.txt

INSERT INTO FP_COURSE VALUES('Math 100','Mathematics');
INSERT INTO FP_COURSE VALUES('Math 200','Mathematics');
INSERT INTO FP_COURSE VALUES('Eng 101','English');
INSERT INTO FP_COURSE VALUES('Hist 111','History');
INSERT INTO FP_COURSE VALUES('Psych 101','Psychology');
INSERT INTO FP_COURSE VALUES('Math 300','Mathematics');
INSERT INTO FP_COURSE VALUES('Eng 201','English');
INSERT INTO FP_COURSE VALUES('Psych 201','Psychology');
INSERT INTO FP_COURSE VALUES('Hist 211','History');
INSERT INTO FP_COURSE VALUES('Eng 301','English');
INSERT INTO FP_COURSE VALUES('Bio 101','Science');
INSERT INTO FP_COURSE VALUES('Bio 201','Science');

INSERT INTO FP_CLASS VALUES('123456','Math 100','MW','1300-1600');
INSERT INTO FP_CLASS VALUES('234567','Math 200','TTH','0800-1200');
INSERT INTO FP_CLASS VALUES('345678','Eng 101','F','1200-1700');
INSERT INTO FP_CLASS VALUES('456789','Hist 111','MW','1700-2200');
INSERT INTO FP_CLASS VALUES('567890','Psych 101','S','0800-1200');
INSERT INTO FP_CLASS VALUES('678901','Math 300','MW','0800-1200');
INSERT INTO FP_CLASS VALUES('789012','Eng 201','S','0800-1200');
INSERT INTO FP_CLASS VALUES('890123','Psych 201','TH','0700-1100');
INSERT INTO FP_CLASS VALUES('901234','Hist 211','T','1700-2200');
INSERT INTO FP_CLASS VALUES('654321','Eng 301','F','0800-1200');
INSERT INTO FP_CLASS VALUES('765432','Bio 101','MW','0800-1200');
INSERT INTO FP_CLASS VALUES('876543','Bio 201','TTH','0800-1200');

INSERT INTO FP_COURSE_DETAILS VALUES('123456','30');
INSERT INTO FP_COURSE_DETAILS VALUES('234567','30');
INSERT INTO FP_COURSE_DETAILS VALUES('345678','50');
INSERT INTO FP_COURSE_DETAILS VALUES('456789','10');
INSERT INTO FP_COURSE_DETAILS VALUES('567890','20');
INSERT INTO FP_COURSE_DETAILS VALUES('678901','30');
INSERT INTO FP_COURSE_DETAILS VALUES('789012','50');
INSERT INTO FP_COURSE_DETAILS VALUES('890123','20');
INSERT INTO FP_COURSE_DETAILS VALUES('901234','10');
INSERT INTO FP_COURSE_DETAILS VALUES('654321','50');
INSERT INTO FP_COURSE_DETAILS VALUES('765432','40');
INSERT INTO FP_COURSE_DETAILS VALUES('876543','40');

INSERT INTO FP_STU_ENROLL VALUES('1','123456');
INSERT INTO FP_STU_ENROLL VALUES('1','345678');
INSERT INTO FP_STU_ENROLL VALUES('1','567890');
INSERT INTO FP_STU_ENROLL VALUES('2','123456');
INSERT INTO FP_STU_ENROLL VALUES('2','654321');
INSERT INTO FP_STU_ENROLL VALUES('2','876543');
INSERT INTO FP_STU_ENROLL VALUES('3','901234');
INSERT INTO FP_STU_ENROLL VALUES('3','654321');
INSERT INTO FP_STU_ENROLL VALUES('3','765432');
INSERT INTO FP_STU_ENROLL VALUES('4','678901');
INSERT INTO FP_STU_ENROLL VALUES('4','789012');
INSERT INTO FP_STU_ENROLL VALUES('4','890123');
INSERT INTO FP_STU_ENROLL VALUES('5','789012');
INSERT INTO FP_STU_ENROLL VALUES('5','890123');
INSERT INTO FP_STU_ENROLL VALUES('5','901234');






SELECT * FROM FP_STUDENT;
SELECT * FROM FP_PROFESSOR;
SELECT * FROM FP_STU_ENROLL;
SELECT * FROM FP_CLASS;
SELECT * FROM FP_COURSE_DETAILS;
SELECT * FROM FP_COURSE;


SPOOL OFF
