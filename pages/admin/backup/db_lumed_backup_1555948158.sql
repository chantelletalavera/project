

CREATE TABLE `tbl_diagnosis` (
  `fld_diagnosisid` int(11) NOT NULL AUTO_INCREMENT,
  `fld_patientID` varchar(255) NOT NULL,
  `fld_date` date NOT NULL,
  `fld_casenumber` varchar(255) NOT NULL,
  `fld_complaint` varchar(255) NOT NULL,
  `fld_finaldiagnosis` varchar(255) NOT NULL,
  PRIMARY KEY (`fld_diagnosisid`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

INSERT INTO tbl_diagnosis VALUES("24","P-050419132","2019-04-22","C-22041924","       
NAys
","");
INSERT INTO tbl_diagnosis VALUES("25","P-050419132","2019-04-22","C-22041925","       
                    FINAL TEST","");
INSERT INTO tbl_diagnosis VALUES("26","P-050419134","2019-04-22","C-22041926","       
                    ","");
INSERT INTO tbl_diagnosis VALUES("27","P-050419132","2019-04-22","C-22041927","yyytyy6","");
INSERT INTO tbl_diagnosis VALUES("28","P-050419132","2019-04-22","C-22041928","       gfhfhgfhgf
                    ","");
INSERT INTO tbl_diagnosis VALUES("29","P-220419141","2019-04-22","C-22041929"," Migraine
                    ","");



CREATE TABLE `tbl_patientpersonalrecords` (
  `fld_id` int(11) NOT NULL AUTO_INCREMENT,
  `fld_patientID` varchar(100) NOT NULL,
  `fld_patientimage` varchar(500) NOT NULL,
  `fld_patientfname` varchar(100) NOT NULL,
  `fld_patientmname` varchar(100) NOT NULL,
  `fld_patientlname` varchar(100) NOT NULL,
  `fld_patientaddress` varchar(300) NOT NULL,
  `fld_patientage` varchar(3) NOT NULL,
  `fld_patientdob` varchar(20) NOT NULL,
  `fld_patientreligion` varchar(20) NOT NULL,
  `fld_patientnationality` varchar(20) NOT NULL,
  `fld_patientstatus` varchar(20) NOT NULL,
  `fld_patientgender` varchar(6) NOT NULL,
  `fld_patientoccupation` varchar(30) NOT NULL,
  `fld_patientnumber` varchar(15) NOT NULL,
  `fld_patientfather` varchar(100) NOT NULL,
  `fld_patientmother` varchar(100) NOT NULL,
  `fld_patientspouse` varchar(100) NOT NULL,
  `fld_patientspouseaddress` varchar(100) NOT NULL,
  `fld_patientservice` varchar(50) NOT NULL,
  `fld_patientcompany` varchar(100) NOT NULL,
  `fld_patientcase` varchar(50) NOT NULL,
  `fld_patientseniorID` varchar(50) NOT NULL,
  `fld_patienthmo` varchar(50) NOT NULL,
  `fld_patientphilhealth` varchar(50) NOT NULL,
  `fld_patientbp` varchar(20) NOT NULL,
  `fld_patienttemperature` varchar(20) NOT NULL,
  `fld_patientweight` varchar(55) NOT NULL,
  PRIMARY KEY (`fld_id`)
) ENGINE=InnoDB AUTO_INCREMENT=142 DEFAULT CHARSET=latin1;

INSERT INTO tbl_patientpersonalrecords VALUES("132","P-050419132","","Edmar Isam","Cardenas","Ellorico","Bio, Tagudin, Ilocos Sur","20","07-08-1998","Roman Catholic","Filipino","Single","Male","N/A","09959829115","N/A","Rosemarie C. Ellorico","N/A","N/A","Treatment","N/A","Serious","N/A","N/A","N/A","110/80","38","56");
INSERT INTO tbl_patientpersonalrecords VALUES("134","P-050419134","","Gerald","Cardenas","Ellorico","Bio, Tagudin, Ilocos Sur","19","09-17-1999","Roman Catholic","Filipino","Single","Male","N/A","09959829115","N/A","Rosemarie C. Ellorico","N/A","N/A","Treatment","N/A","Serious","N/A","N/A","N/A","110/80","38","56");
INSERT INTO tbl_patientpersonalrecords VALUES("138","P-090419138","","Jeoffreymar","Nico","Anapen","","","","","","--Select--","---Sel","","","","","","","","","","","","","","","");
INSERT INTO tbl_patientpersonalrecords VALUES("139","P-160419139","","Jaynard","Sanoan","Lat-og","San Juan, La Union","","","","","--Select--","---Sel","","","","","","","","","","","","","","","");
INSERT INTO tbl_patientpersonalrecords VALUES("140","P-160419140","","Jaynard","Sanoan","Lat-og","San Juan, La Union","","","","","--Select--","---Sel","","","","","","","","","","","","","","","");
INSERT INTO tbl_patientpersonalrecords VALUES("141","P-220419141","","Rommel","Ganado","Tangalin","JOCES","23","06-01-1995","INC","Filipino","Single","Male","IT","","","","","","","","","","","","","","");



CREATE TABLE `tbl_timerecord` (
  `fld_timeid` int(11) NOT NULL AUTO_INCREMENT,
  `fld_patientID` varchar(50) NOT NULL,
  `fld_date` date NOT NULL,
  `fld_timein` time NOT NULL,
  `fld_timeout` time NOT NULL,
  `fld_stayed` varchar(255) NOT NULL,
  `fld_userlevel` varchar(255) NOT NULL,
  PRIMARY KEY (`fld_timeid`)
) ENGINE=InnoDB AUTO_INCREMENT=170 DEFAULT CHARSET=latin1;

INSERT INTO tbl_timerecord VALUES("131","P-050419132","2019-04-22","12:54:52","12:55:00","","Reception");
INSERT INTO tbl_timerecord VALUES("133","P-050419132","2019-04-22","13:05:58","13:06:19","","Reception");
INSERT INTO tbl_timerecord VALUES("134","P-050419132","2019-04-22","13:06:30","13:06:32","","Reception");
INSERT INTO tbl_timerecord VALUES("135","P-050419132","2019-04-22","13:08:55","13:08:57","","Reception");
INSERT INTO tbl_timerecord VALUES("136","P-050419132","2019-04-22","13:17:31","13:35:13","","Reception");
INSERT INTO tbl_timerecord VALUES("137","P-050419132","2019-04-22","13:35:20","13:35:22","","Reception");
INSERT INTO tbl_timerecord VALUES("138","P-050419132","2019-04-22","13:35:44","13:35:47","","Reception");
INSERT INTO tbl_timerecord VALUES("139","P-050419134","2019-04-22","13:36:50","00:00:00","","Reception");
INSERT INTO tbl_timerecord VALUES("140","P-050419134","2019-04-22","13:36:50","13:36:54","","Reception");
INSERT INTO tbl_timerecord VALUES("141","P-050419132","2019-04-22","14:08:13","14:09:07","","Reception");
INSERT INTO tbl_timerecord VALUES("142","P-050419132","2019-04-22","14:10:35","00:00:00","","Cashier");
INSERT INTO tbl_timerecord VALUES("143","P-050419132","2019-04-22","14:17:00","14:17:59","","Reception");
INSERT INTO tbl_timerecord VALUES("144","P-050419132","2019-04-22","14:31:34","14:31:41","","Reception");
INSERT INTO tbl_timerecord VALUES("145","P-050419132","2019-04-22","14:32:29","14:32:47","","Reception");
INSERT INTO tbl_timerecord VALUES("146","P-050419132","2019-04-22","14:35:30","14:36:15","","Reception");
INSERT INTO tbl_timerecord VALUES("147","P-050419132","2019-04-22","14:37:11","14:37:15","","Reception");
INSERT INTO tbl_timerecord VALUES("148","P-050419132","2019-04-22","14:37:20","14:37:28","","Reception");
INSERT INTO tbl_timerecord VALUES("149","P-050419132","2019-04-22","14:40:11","14:43:20","","Reception");
INSERT INTO tbl_timerecord VALUES("150","P-050419132","2019-04-22","14:44:25","14:44:34","","Reception");
INSERT INTO tbl_timerecord VALUES("151","P-050419132","2019-04-22","14:44:53","14:46:14","","Reception");
INSERT INTO tbl_timerecord VALUES("152","P-050419132","2019-04-22","15:02:55","15:04:07","","Reception");
INSERT INTO tbl_timerecord VALUES("153","P-050419132","2019-04-22","15:04:41","15:04:45","","Reception");
INSERT INTO tbl_timerecord VALUES("154","P-050419132","2019-04-22","15:06:07","15:06:25","","Reception");
INSERT INTO tbl_timerecord VALUES("155","P-050419132","2019-04-22","15:09:08","15:10:38","","Reception");
INSERT INTO tbl_timerecord VALUES("156","P-050419132","2019-04-22","15:11:02","15:11:13","","Reception");
INSERT INTO tbl_timerecord VALUES("157","P-050419132","2019-04-22","15:12:06","15:12:10","","Reception");
INSERT INTO tbl_timerecord VALUES("158","P-050419132","2019-04-22","15:14:09","15:16:36","","Reception");
INSERT INTO tbl_timerecord VALUES("159","P-050419132","2019-04-22","15:16:57","15:17:02","","Reception");
INSERT INTO tbl_timerecord VALUES("160","P-050419132","2019-04-22","15:17:55","15:18:04","","Reception");
INSERT INTO tbl_timerecord VALUES("161","P-050419132","2019-04-22","15:21:49","15:21:55","","Reception");
INSERT INTO tbl_timerecord VALUES("162","P-050419132","2019-04-22","15:22:36","15:22:44","","Reception");
INSERT INTO tbl_timerecord VALUES("163","P-050419132","2019-04-22","15:23:20","15:23:58","","Reception");
INSERT INTO tbl_timerecord VALUES("164","P-050419132","2019-04-22","15:24:38","15:24:46","","Reception");
INSERT INTO tbl_timerecord VALUES("165","P-050419134","2019-04-22","15:29:35","15:29:40","","Reception");
INSERT INTO tbl_timerecord VALUES("166","P-050419132","2019-04-22","15:35:31","15:35:42","","Reception");
INSERT INTO tbl_timerecord VALUES("167","P-050419132","2019-04-22","15:52:26","15:52:35","","Reception");
INSERT INTO tbl_timerecord VALUES("168","P-220419141","2019-04-22","16:31:01","16:31:45","","Reception");
INSERT INTO tbl_timerecord VALUES("169","P-050419134","2019-04-22","20:40:47","00:00:00","","Reception");



CREATE TABLE `tbl_users` (
  `fld_id` int(11) NOT NULL AUTO_INCREMENT,
  `fld_username` varchar(30) NOT NULL,
  `fld_password` varchar(20) NOT NULL,
  `fld_fname` varchar(60) NOT NULL,
  `fld_mname` varchar(60) NOT NULL,
  `fld_lname` varchar(60) NOT NULL,
  `fld_userlevel` varchar(20) NOT NULL,
  PRIMARY KEY (`fld_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

INSERT INTO tbl_users VALUES("5","admin","€9$ó7Rö}","Edmar Isam","Cardenas","Ellorico","Admin");
INSERT INTO tbl_users VALUES("9","adminlang","€K%"¸õ[ &í‹ë","Admin","Admin","Admin","Admin");
INSERT INTO tbl_users VALUES("10","admin203","€ÜðÃoß‰w»RyÊÅ\Á","Admin202","Admin202","Admin202","Admin");
INSERT INTO tbl_users VALUES("11","doctor","€ ø|g3 ð·?]/CÐ§","Jaynard","Broken","Lat-og","Doctor");
INSERT INTO tbl_users VALUES("22","test","€£uÌ›ÔN|","Test","Test","Test","Admin");
INSERT INTO tbl_users VALUES("23","exam","€ïI¹ßY.","Exam","exam","exam","Admin");
INSERT INTO tbl_users VALUES("24","quiz","€(f_x","Quiz","Quiz","QUiz","Admin");
INSERT INTO tbl_users VALUES("25","addition","€A0Tª~ì¼?","Add","Add","Add","Admin");
INSERT INTO tbl_users VALUES("26","sub","€WÔ	¨–sp","Sub","Sub","Sub","Admin");
INSERT INTO tbl_users VALUES("28","divide","€øLåÔÉ@L","divide","divide","divide","Admin");
INSERT INTO tbl_users VALUES("29","reception","€½Qï6ÍDº«?ï™[”È©","Chantelle","Julea","Talavera","Reception");
INSERT INTO tbl_users VALUES("30","cashier","€s\YÊ","Jaynard","Sanoan","Lat-og","Cashier");

