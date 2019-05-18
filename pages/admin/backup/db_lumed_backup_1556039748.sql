

CREATE TABLE `tbl_diagnosis` (
  `fld_diagnosisid` int(11) NOT NULL AUTO_INCREMENT,
  `fld_patientID` varchar(255) NOT NULL,
  `fld_date` date NOT NULL,
  `fld_casenumber` varchar(255) NOT NULL,
  `fld_complaint` varchar(255) NOT NULL,
  `fld_admission` varchar(255) NOT NULL,
  `fld_primary` varchar(255) NOT NULL,
  `fld_finaldiagnosis` varchar(255) NOT NULL,
  `fld_indication` varchar(255) NOT NULL,
  `fld_med` varchar(255) NOT NULL,
  PRIMARY KEY (`fld_diagnosisid`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;




CREATE TABLE `tbl_med` (
  `fld_medID` int(10) NOT NULL AUTO_INCREMENT,
  `fld_genericname` varchar(50) DEFAULT NULL,
  `fld_brandname` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`fld_medID`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

INSERT INTO tbl_med VALUES("1","IVABRADINE","CORLAN 7.5MG");
INSERT INTO tbl_med VALUES("2","ACECLOFENAC","DOLOWIN 100MG TAB");
INSERT INTO tbl_med VALUES("3","ACECLOFENAC","MOBENAC 100MG TAB");
INSERT INTO tbl_med VALUES("4","CELECOXIB","C-FLAM 200MG CAPSULE");
INSERT INTO tbl_med VALUES("5","CELECOXIB","CELECOXIB 200MG TAB");
INSERT INTO tbl_med VALUES("6","CELECOXIB","CELECOXIB 400MG TAB");
INSERT INTO tbl_med VALUES("7","CHAMOMILE EXTRACT, ESSENTIAL C","KAMILLOSAN M SPRAY 15ML");
INSERT INTO tbl_med VALUES("8","DICLOFENEC","LOFENAG 25MG AMP");
INSERT INTO tbl_med VALUES("9","IBUPRUFEN","ADVIL LIQUIGEL 200MG CAP");
INSERT INTO tbl_med VALUES("10","MELOXICAM","BEXXAM 15MG TAB");
INSERT INTO tbl_med VALUES("11","PARACETAMOL + TRAMADOL","PARACETRAM TAB");
INSERT INTO tbl_med VALUES("12","SUMATRIPAN","IMIGRAN 50MG TAB");
INSERT INTO tbl_med VALUES("13","TRAMADOL","TDL TRAMADOL 50 MG CAP");
INSERT INTO tbl_med VALUES("14","TRAMADOL","TDL TRAMADOL AMP");
INSERT INTO tbl_med VALUES("15","TRAMADOL","TRAMADOL 50MG/ML AMP");
INSERT INTO tbl_med VALUES("16","TRAMADOL","TRAMAL 100MG CAP");
INSERT INTO tbl_med VALUES("17","TRAMADOL + PARACETAMOL","ALGESIA 37.5MG/325MG TAB");
INSERT INTO tbl_med VALUES("18","TRAMADOL + PARACETAMOL ","PRADOL 37.5MG/325MG TAB");
INSERT INTO tbl_med VALUES("19","TRAMADOL + PARACETAMOL","PYREDOL TAB");
INSERT INTO tbl_med VALUES("20","TRAMADOL HYDROCHLORIDE","TRAMAL AMP");
INSERT INTO tbl_med VALUES("21","TRAMADOL + PARACETAMOL","CETODOL 37.5MG/325MG TAB");
INSERT INTO tbl_med VALUES("22","TEMPRA","TEMPRA 325MG TAB");
INSERT INTO tbl_med VALUES("23","IBUPRUFEN","DOLAN 100MG/2.5ML DROPS 15ML");
INSERT INTO tbl_med VALUES("24","IBUPRUFEN","DOLAN FP 100MG/5ML SUSP 60ML");
INSERT INTO tbl_med VALUES("25","IBUPRUFEN","IBUPRUFEN 400MG TAB");
INSERT INTO tbl_med VALUES("26","PARACETAMOL","AEKNIL AMP");
INSERT INTO tbl_med VALUES("27","PARACETAMOL ","BIOGESIC 100MG/ML DROPS 15ML");
INSERT INTO tbl_med VALUES("28","PARACETAMOL","BIOGESIC 325MG");
INSERT INTO tbl_med VALUES("29","PARACETAMOL","PARACETAMOL 500MG TAB");
INSERT INTO tbl_med VALUES("30","LIDOCAINE","LIDOCAINE 2% 20ML");
INSERT INTO tbl_med VALUES("31","LIDOCAINE","XYLOCAINE SPRAY 50ML");
INSERT INTO tbl_med VALUES("32","ALUMINUM HYDROXIDE + MAGNESIUM","MAALOX PLUS SUSP 60ML");
INSERT INTO tbl_med VALUES("33","ALUMINUM MAGNESIUM HYDROXIDE","ALUMINUM MAGNESIUM HYDROXIDE TAB");
INSERT INTO tbl_med VALUES("34","ALUMINUM MG HYDROXIDE ","MAALOX PLUS TAB");
INSERT INTO tbl_med VALUES("35","OMEPRAZOLE ","OMEPRAZOLE 20MG CAP");
INSERT INTO tbl_med VALUES("36","OMEPRAZOLE ","ZEVAR 40MG IV");
INSERT INTO tbl_med VALUES("37","PANTOPRAZOLE ","VEXPRAZOLE ");
INSERT INTO tbl_med VALUES("38","REBEPRAZOLE","PARIET 20MG TAB");
INSERT INTO tbl_med VALUES("39","CETIRIZINE","CETIRIZINE 10MG TAB");
INSERT INTO tbl_med VALUES("40","CETIRIZINE","CETIRIZINE 5MG/5ML SYRUP");
INSERT INTO tbl_med VALUES("41","CETIRIZINE","RM CETIRIZINE 10MG");
INSERT INTO tbl_med VALUES("42","CETIRIZINE","H-NE TABLET 10MG");
INSERT INTO tbl_med VALUES("43","DIPHENHYDRAMINE","BENADRYL 25MG CAP");
INSERT INTO tbl_med VALUES("44","DIPHENHYDRAMINE","BENADRYL SYRUP 120ML");
INSERT INTO tbl_med VALUES("45","HYDROCORTISONE","HYDROCORT100MG IV");
INSERT INTO tbl_med VALUES("46","HYDROXYZINE","ITERAX 2MG 100ML");
INSERT INTO tbl_med VALUES("47","HYDROXYZINE","ITERAX 2MG 60ML SYR");
INSERT INTO tbl_med VALUES("48","HYDROXYZINE DIHYDROCHLORIDE","ITERAX 10MG TAB");
INSERT INTO tbl_med VALUES("49","LORATADINE","ALLERTA 100MG TAB");
INSERT INTO tbl_med VALUES("50","LORATADINE","ALLERTA 5MG/5ML SYR 60ML");
INSERT INTO tbl_med VALUES("51","LORATADINE","RM LORATADINE 10MG TAB");
INSERT INTO tbl_med VALUES("52","LORATADINE + BETAMETHASONE","CLARICORT 5MG/250MG TAB");
INSERT INTO tbl_med VALUES("53","ANORO","ANORO 62.5/25MCG MDI");
INSERT INTO tbl_med VALUES("54","FLUTIFORM","FLUTIFORM 125/5 INHALER");
INSERT INTO tbl_med VALUES("55","AMBROXOL","RM AMBROXOL  15MG/ML SYRUP 60ML");
INSERT INTO tbl_med VALUES("56","AMBROXOL","RM AMBROXOL 30MG TAB");
INSERT INTO tbl_med VALUES("57","AMBROXOL","RM AMBROXOL 30MG/ML SYRUP 60ML");
INSERT INTO tbl_med VALUES("58","BAMBUTEROL","LEVARE 10MG");
INSERT INTO tbl_med VALUES("59","BUDESONIDE","BUDECORT 500MCG RESPULSE");
INSERT INTO tbl_med VALUES("60","BUDESONIDE + FORMOTEROL","SYMBICORT 320/90MCG");
INSERT INTO tbl_med VALUES("61","BUDESONIDE,FORMOTEROL FUMARATE","SYMBICORT 160MG/4.5MG TURBUHALER");
INSERT INTO tbl_med VALUES("62","DOXOFLLINE","ANSIMAR 200MG TAB");
INSERT INTO tbl_med VALUES("63","DOXOFYLLINE","ANSIMAR 400MG TAB");
INSERT INTO tbl_med VALUES("64","INDACATEROL + GLYCOPYRRONIU","ULTIBRO BREEZEHALER");
INSERT INTO tbl_med VALUES("65","","");



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
  `fld_created` datetime NOT NULL,
  PRIMARY KEY (`fld_id`)
) ENGINE=InnoDB AUTO_INCREMENT=155 DEFAULT CHARSET=latin1;

INSERT INTO tbl_patientpersonalrecords VALUES("149","P-230419149","","0","0","1","","","","","","","","","","","","","","","","","","","","","","","2019-04-23 18:02:35");
INSERT INTO tbl_patientpersonalrecords VALUES("150","P-230419150","","0","0","2","","","","","","","","","","","","","","","","","","","","","","","2019-04-23 18:02:50");
INSERT INTO tbl_patientpersonalrecords VALUES("151","P-230419151","","0","0","3","","","","","","","","","","","","","","","","","","","","","","","2019-04-23 18:03:03");
INSERT INTO tbl_patientpersonalrecords VALUES("152","P-230419152","","0","0","5","","","","","","","","","","","","","","","","","","","","","","","2019-04-23 18:08:32");
INSERT INTO tbl_patientpersonalrecords VALUES("153","P-230419153","","Edmar Isam","Cardenas","Ellorico","","","","","","","","","","","","","","","","","","","","","","","2019-04-23 21:01:19");
INSERT INTO tbl_patientpersonalrecords VALUES("154","P-240419154","","ISAM","ISAM","ISAM","","","","","","","","","","","","","","","","","","","","","","","2019-04-24 00:19:44");



CREATE TABLE `tbl_timerecord` (
  `fld_timeid` int(11) NOT NULL AUTO_INCREMENT,
  `fld_patientID` varchar(50) NOT NULL,
  `fld_date` date NOT NULL,
  `fld_timein` time NOT NULL,
  `fld_timeout` time NOT NULL,
  `fld_stayed` varchar(255) NOT NULL,
  `fld_userlevel` varchar(255) NOT NULL,
  PRIMARY KEY (`fld_timeid`)
) ENGINE=InnoDB AUTO_INCREMENT=204 DEFAULT CHARSET=latin1;

INSERT INTO tbl_timerecord VALUES("203","P-240419154","2019-04-23","23:58:53","00:19:44","","Reception");



CREATE TABLE `tbl_users` (
  `fld_id` int(11) NOT NULL AUTO_INCREMENT,
  `fld_username` varchar(30) NOT NULL,
  `fld_password` varchar(20) NOT NULL,
  `fld_fname` varchar(60) NOT NULL,
  `fld_mname` varchar(60) NOT NULL,
  `fld_lname` varchar(60) NOT NULL,
  `fld_userlevel` varchar(20) NOT NULL,
  PRIMARY KEY (`fld_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

INSERT INTO tbl_users VALUES("5","admin","€9$ó7Rö}","Edmar Isam","Cardenas","Ellorico","Admin");
INSERT INTO tbl_users VALUES("9","adminlang","€K%"¸õ[ &í‹ë","Admin","Admin","Admin","Admin");
INSERT INTO tbl_users VALUES("10","admin203","€ÜðÃoß‰w»RyÊÅ\Á","Admin202","Admin202","Admin202","Admin");
INSERT INTO tbl_users VALUES("11","doctor","€ ø|g3 ð·?]/CÐ§","Jaynard","Broken","Lat-og","Doctor");
INSERT INTO tbl_users VALUES("22","test","€£uÌ›ÔN|","Test","Test","Test","Admin");
INSERT INTO tbl_users VALUES("23","exam","€ïI¹ßY.","Exam","exam","exam","Admin");
INSERT INTO tbl_users VALUES("25","addition","€A0Tª~ì¼?","Add","Add","Add","Admin");
INSERT INTO tbl_users VALUES("26","sub","€WÔ	¨–sp","Sub","Sub","Sub","Admin");
INSERT INTO tbl_users VALUES("28","divide","€øLåÔÉ@L","divide","divide","divide","Admin");
INSERT INTO tbl_users VALUES("29","reception","€½Qï6ÍDº«?ï™[”È©","Chantelle","Julea","Talavera","Reception");
INSERT INTO tbl_users VALUES("30","cashier","€s\YÊ","Jaynard","Sanoan","Lat-og","Cashier");
INSERT INTO tbl_users VALUES("31","secretary","€p®Žæ#cˆÈù®ìl/;–w","one","an","other","Secretary");

