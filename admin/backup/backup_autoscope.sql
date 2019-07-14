DROP TABLE adminsignin;

CREATE TABLE `adminsignin` (
  `admin_uname` varchar(20) NOT NULL,
  `admin_pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO adminsignin VALUES("admin","111");



DROP TABLE assign_work;

CREATE TABLE `assign_work` (
  `Work_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Staff_ID` int(11) NOT NULL,
  `Sreqst_ID` int(11) NOT NULL,
  `Assign_Date` date NOT NULL,
  `S_ReturnDate` date NOT NULL,
  `Status` varchar(30) NOT NULL,
  PRIMARY KEY (`Work_ID`),
  KEY `Staff_ID` (`Staff_ID`),
  KEY `Sreqst_ID` (`Sreqst_ID`),
  CONSTRAINT `assign_work_ibfk_1` FOREIGN KEY (`Staff_ID`) REFERENCES `staff` (`Staff_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `assign_work_ibfk_2` FOREIGN KEY (`Sreqst_ID`) REFERENCES `service_request` (`Service_rqst_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

INSERT INTO assign_work VALUES("47","2","31","2022-11-18","2018-11-28","done");
INSERT INTO assign_work VALUES("48","3","32","2020-11-18","2018-11-21","done");
INSERT INTO assign_work VALUES("50","2","34","0000-00-00","2018-11-30","done");
INSERT INTO assign_work VALUES("51","2","35","2011-12-18","2018-12-13","done");



DROP TABLE bill;

CREATE TABLE `bill` (
  `billid` int(11) NOT NULL AUTO_INCREMENT,
  `Staff_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Work_ID` int(11) NOT NULL,
  `billdate` date NOT NULL,
  `gtotal` double NOT NULL,
  `discount` double NOT NULL DEFAULT '0',
  `status` varchar(20) NOT NULL DEFAULT 'not_generated',
  PRIMARY KEY (`billid`),
  KEY `Staff_ID` (`Staff_ID`),
  KEY `User_ID` (`User_ID`),
  KEY `Work_ID` (`Work_ID`),
  KEY `Staff_ID_2` (`Staff_ID`),
  CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`Staff_ID`) REFERENCES `staff` (`Staff_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`User_ID`) REFERENCES `user` (`User_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `bill_ibfk_3` FOREIGN KEY (`Work_ID`) REFERENCES `assign_work` (`Work_ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

INSERT INTO bill VALUES("37","2","32","47","2018-11-19","542.4","20","finalized");
INSERT INTO bill VALUES("38","3","32","48","2018-11-19","156","0","finalized");
INSERT INTO bill VALUES("40","2","34","50","2018-11-28","2100","100","finalized");
INSERT INTO bill VALUES("41","2","35","51","2018-12-09","0","0","not_generated");
INSERT INTO bill VALUES("42","2","35","51","2018-12-09","0","0","not_generated");
INSERT INTO bill VALUES("43","2","35","51","2018-12-09","1015","0","generated");



DROP TABLE bill_details;

CREATE TABLE `bill_details` (
  `bdid` int(11) NOT NULL AUTO_INCREMENT,
  `billid` int(11) NOT NULL,
  `itemname` varchar(40) NOT NULL,
  `qty` int(20) NOT NULL,
  `price` double NOT NULL,
  `tax` double NOT NULL,
  `total` double NOT NULL,
  PRIMARY KEY (`bdid`),
  KEY `billid` (`billid`),
  CONSTRAINT `bill_details_ibfk_1` FOREIGN KEY (`billid`) REFERENCES `bill` (`billid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

INSERT INTO bill_details VALUES("35","37","windfow","1","290","6","307.4");
INSERT INTO bill_details VALUES("36","37","painting","1","250","2","255");
INSERT INTO bill_details VALUES("37","38","windfow","1","150","4","156");
INSERT INTO bill_details VALUES("39","40","window","2","1000","10","2200");
INSERT INTO bill_details VALUES("40","43","right window scratch paint","1","1000","1.5","1015");



DROP TABLE feedback;

CREATE TABLE `feedback` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `User_ID` int(11) NOT NULL,
  `date` date NOT NULL,
  `feedback` longtext NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO feedback VALUES("1","31","2018-11-03","xyzzzzz");
INSERT INTO feedback VALUES("2","31","2018-12-02","");



DROP TABLE schedule;

CREATE TABLE `schedule` (
  `sch_id` int(11) NOT NULL AUTO_INCREMENT,
  `days` varchar(80) NOT NULL,
  `from_timings` time NOT NULL,
  `to_timings` time NOT NULL,
  `updated_date` date NOT NULL,
  PRIMARY KEY (`sch_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO schedule VALUES("1","Monday,Tuseday,Wednesday","09:00:00","06:00:00","2018-01-23");
INSERT INTO schedule VALUES("2","Thursday,Friday,Saturday","10:00:00","07:00:00","2018-01-23");
INSERT INTO schedule VALUES("3","Monday","12:00:00","13:00:00","2018-11-03");



DROP TABLE service;

CREATE TABLE `service` (
  `S_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Desciption` longtext NOT NULL,
  `S_Cost` double NOT NULL,
  `S_Type` varchar(60) NOT NULL,
  `S_Duration` varchar(20) NOT NULL,
  PRIMARY KEY (`S_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

INSERT INTO service VALUES("5","repair a body parts","1000","vehicle refinishing","2 days");
INSERT INTO service VALUES("6","makes break condition correct","10000","brake and transmission ","3 days");
INSERT INTO service VALUES("7","change the parts","2000","vehicle inspections","5 days");
INSERT INTO service VALUES("14","Cost depends","5000","other","5 days");
INSERT INTO service VALUES("18","service","2000","body repair ","5 days");
INSERT INTO service VALUES("25","this to clean the wind shield","2000","vehicle refinishing","1 week");



DROP TABLE service_request;

CREATE TABLE `service_request` (
  `Service_rqst_id` int(11) NOT NULL AUTO_INCREMENT,
  `User_ID` int(11) NOT NULL,
  `V_ID` int(11) NOT NULL,
  `Reqst_Date` date NOT NULL,
  `Service_Type` varchar(60) NOT NULL,
  `Extra_Service` varchar(50) NOT NULL,
  `Req_Ser_For` datetime NOT NULL,
  `Status` varchar(30) NOT NULL,
  PRIMARY KEY (`Service_rqst_id`),
  KEY `User_ID` (`User_ID`),
  KEY `V_ID` (`V_ID`),
  CONSTRAINT `service_request_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `user` (`User_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `service_request_ibfk_2` FOREIGN KEY (`V_ID`) REFERENCES `vehicle` (`V_ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

INSERT INTO service_request VALUES("31","32","32","2018-11-19","vehicle refinishing","xyz","2018-11-22 11:00:00","service_provided");
INSERT INTO service_request VALUES("32","32","32","2018-11-19","body repair ","xyzss","2018-11-20 09:00:00","service_provided");
INSERT INTO service_request VALUES("34","34","34","2018-11-28","body repair ","xyz","0000-00-00 00:00:00","service_provided");
INSERT INTO service_request VALUES("35","35","35","2018-12-09","vehicle refinishing","paint","2018-12-11 10:10:10","confirmed");



DROP TABLE staff;

CREATE TABLE `staff` (
  `Staff_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Staff_Name` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Contact_no` bigint(20) NOT NULL,
  `Worker_Type` varchar(50) NOT NULL,
  `E_Mail` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`Staff_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO staff VALUES("1","mammuty","kasargod","9933445522","body repair technicians","mamu@gmail.com","111");
INSERT INTO staff VALUES("2","Dulquer","kochi","1122334455","brake and transmission technician","Dq@gmail.com","111");
INSERT INTO staff VALUES("3","Kholi","Mumbai","2211334455","brake and transmission technician","vk@gmail.com","111");
INSERT INTO staff VALUES("4","bathi","madav","9933445544","body repair technicians","bathi@gmail.com","111");
INSERT INTO staff VALUES("5","roy","puttur","9977665544","brake and transmission technician","ry@gmail.com","111");
INSERT INTO staff VALUES("6","sameer","madav","8890675432","vehicle inspectors","sameer@gmail.com","111");
INSERT INTO staff VALUES("7","Hrithick","Baroda","7766554433","body repair technicians","Hr@gmail.com","111");
INSERT INTO staff VALUES("8","Dhanush","Chennai","8877996655","brake and transmission technician","Dh@gmail.com","111");



DROP TABLE staff_salary;

CREATE TABLE `staff_salary` (
  `Salary_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Staff_ID` int(11) NOT NULL,
  `Salary` double NOT NULL,
  PRIMARY KEY (`Salary_ID`),
  KEY `Staff_ID` (`Staff_ID`),
  CONSTRAINT `staff_salary_ibfk_1` FOREIGN KEY (`Staff_ID`) REFERENCES `staff` (`Staff_ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO staff_salary VALUES("3","2","25000");
INSERT INTO staff_salary VALUES("4","1","10000");
INSERT INTO staff_salary VALUES("5","3","15000");
INSERT INTO staff_salary VALUES("6","4","22000");
INSERT INTO staff_salary VALUES("7","5","29000");
INSERT INTO staff_salary VALUES("8","6","30000");
INSERT INTO staff_salary VALUES("9","7","50000");
INSERT INTO staff_salary VALUES("10","8","24000");



DROP TABLE user;

CREATE TABLE `user` (
  `User_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Full_Name` varchar(50) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Contact_no` bigint(20) NOT NULL,
  `E_Mail` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Reg_date` date NOT NULL,
  PRIMARY KEY (`User_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

INSERT INTO user VALUES("29","kaleel rashi","32959-1468690502420.jpg","puttur","7349270415","rs@gmail.com","Male","123","2018-03-27");
INSERT INTO user VALUES("30","simak","73537-1468716428625.jpg","sullia","9845942068","sm@gmail.com","Male","123","2018-03-27");
INSERT INTO user VALUES("31","aravind","61531-6.png","bhestan surat","8264220001","aa@gmail.com","Male","111","2018-11-01");
INSERT INTO user VALUES("32","aravind","56431-dsc_3524aa-(1).jpg","mangalore","8264220000","aravindkumar4323@gmail.com","Male","111","2018-11-19");
INSERT INTO user VALUES("33","MARIA","42040-h5.jpg","PUMPWELL","1010101010","ZZDF@GMAIL.COM","Female","123","2018-11-27");
INSERT INTO user VALUES("34","kumar","98868-89922-1468690502498.jpg","mangalore","1000000000","kumar@gmail.com","Male","123","2018-11-28");
INSERT INTO user VALUES("35","aravind","57268-_dsc0615.jpg","bhestan","9898888998","aravindkumar4323@gmail.com","Male","111","2018-12-09");



DROP TABLE vehicle;

CREATE TABLE `vehicle` (
  `V_ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_ID` int(11) NOT NULL,
  `V_No` varchar(30) NOT NULL,
  `Brand` varchar(30) NOT NULL,
  `V_Type` varchar(30) NOT NULL,
  `Model` varchar(30) NOT NULL,
  `model_no` int(11) NOT NULL,
  PRIMARY KEY (`V_ID`),
  KEY `User_ID` (`User_ID`),
  CONSTRAINT `vehicle_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `user` (`User_ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

INSERT INTO vehicle VALUES("27","30","KA 21 S 9923","four wheeler","benz","BNX12","2017");
INSERT INTO vehicle VALUES("28","30","KA 21 S 9923","four wheeler","benz","BNX12","2017");
INSERT INTO vehicle VALUES("29","30","KA 01 P 1996","four wheeler","bmw","BM23","2015");
INSERT INTO vehicle VALUES("32","32","0001","two wheeler","bajaj","121212","12121212");
INSERT INTO vehicle VALUES("34","34","0007","three wheeler","bajaj","152","12");
INSERT INTO vehicle VALUES("35","35","007","four wheeler","bmw","c-class","123");



