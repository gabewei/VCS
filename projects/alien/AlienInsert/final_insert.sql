INSERT INTO `personalInformation` (`IDpersonal`, `fname`, `lname`, `dayBirth`, `monthBirth`, `yearBirth`, `email`, `phone`, `streetAddress`, `city`, `stateAddress`,
 `zip`, `country`)
 VALUES (NULL, 'Adam', 'Kiefner', '17', '11', '2002', 'adamkienfer@gmail.com', '208-968-2934', '1234 S computer lane', 'Boise', 'ID', '83616', 
 'United States of America');

INSERT INTO `incidentReport` (`IDreport`, `IDpersonal`, `dayOccur`, `monthOccur`, `yearOccur`, `streetOccur`, `cityOccur`, `stateOccur`, `zipOccur`,
 `countryOccur`, `classEncounter`,
 `threatEncounter`, `corroborated`, `usingPsychedelics`)
 VALUES (NULL, 5, '04', '07', '19', '1234 S computer lane', 'Boise', 'ID', '83616', 'Untied States of America', '2', '3', b'0', b'0');

INSERT INTO `classTwoReport` (`IDclassTwo`, `inVehicle`, `typeOfVehicle`, `personHarmDone`, `environmentHarmDone`, `physicalTrace`, `descriptionOfTrace`,
 `additionalDetails`, `IDreport`)
 VALUES (NULL, b'0', 'T', b'0', b'0', b'0', 'none', 'none', '1');


INSERT INTO personalInformation(fname, lname, dayBirth, monthBirth, yearBirth, email, phone, streetAddress, city, stateAddress, zip, country)
VALUES('Joe', 'Mendez', 02,03,2002,'example@gmail.com','208-856-2514','N. Example St.','Pheonix','AZ','9875-65321','United States');
INSERT INTO incidentReport(dayOccur,monthOccur,yearOccur,streetOccur,cityOccur,stateOccur,zipOccur,countryOccur,classEncounter,threatEncounter,corroborated,usingPsychedelics,IDpersonal)
VALUES(09,08,2015,'N beak St.', 'Reno', 'NV','85974','United States', 2, 'Y', 0, 0, 1);
INSERT INTO classTwoReport(inVehicle,typeOfVehicle,personHarmDone, environmentHarmDone, physicalTrace, descriptionOfTrace,additionalDetails,IDreport)
VALUES(0,'NA',0,1,1,'text text text about the trace', 'blacked out after',1);INSERT INTO `personalInformation` (`IDpersonal`, `fname`, `lname`, `dayBirth`, `monthBirth`, `yearBirth`, `email`, `phone`, `streetAddress`, `city`, `stateAddress`, `zip`, `country`) 
VALUES (NULL, 'Jane', 'Lunar', '2', '2', '2012', 'BigJ@gmail.com', '(305) 216-8488', '8945 S Westingham Dr', 'Los Angeles', 'CA', '89459', 'USA');

INSERT INTO `incidentReport` (`IDreport`, `dayOccur`, `monthOccur`, `yearOccur`, `streetOccur`, `cityOccur`, `stateOccur`, `zipOccur`, `countryOccur`, `classEncounter`, `threatEncounter`, `corroborated`, `usingPsychedelics`, `IDpersonal`) 
VALUES (NULL, '6', '7', '2015', 'N Bloomington Way', 'Denver', 'CO', '89546', 'USA', '1', '1', b'0', b'0', '1');

INSERT INTO `classOneReport` (`IDclassOne`, `inVehicle`, `typeOfVehicle`, `additionalDetails`, `IDreport`) 
VALUES (NULL, b'0', 'UF', 'I died', '1');

INSERT INTO `personalInformation` (`IDpersonal`, `fname`, `lname`, `dayBirth`, `monthBirth`, `yearBirth`, `email`, `phone`, `streetAddress`, `city`, `stateAddress`, `zip`, `country`) 
VALUES (NULL, 'Brandon', 'Wade', '2', '5', '2001', 'IlikeIke@gmail.com', '2086517859', '5423 N broxlow Way', 'Boise', 'ID', '83123', 'United States of america');

INSERT INTO `incidentReport` (`IDreport`, `dayOccur`, `monthOccur`, `yearOccur`, `streetOccur`, `cityOccur`, `stateOccur`, `zipOccur`, `countryOccur`, `classEncounter`, `threatEncounter`, `corroborated`, `usingPsychedelics`, `IDpersonal`) 
VALUES (NULL, '4', '9', '2022', '5479 W koother street', 'Nampa', 'ID', '83123', 'Untied States of America', '2', 'F', b'00', b'00', '1');

INSERT INTO `classTwoReport` (`IDclassTwo`, `inVehicle`, `typeOfVehicle`, `personHarmDone`, `environmentHarmDone`, `physicalTrace`, `descriptionOfTrace`, `additionalDetails`, `IDreport`) 
VALUES (NULL, b'000', 'GR', b'00', b'000', b'000', 'Slimy residue coming from what i assume to be the ear canal', 'gave birth to fireflies every time it sneezed', '1');
INSERT INTO personalInformation (IDpersonal, fname, lname, dayBirth, monthBirth, yearBirth, email, phone, streetAddress, city, stateAddress, zip, country) 
VALUES (NULL, 'Brock', 'Darnall', '01', '03', '2001', 'bdarn7672@westada.org', '2087278282', '4321 South Maple St', 'Eagle', 'ID', '83616', 'United States');

INSERT INTO incidentReport (IDreport, dayOccur, monthOccur, yearOccur, streetOccur, cityOccur, stateOccur, zipOccur, countryOccur, classEncounter, threatEncounter, corroborated, usingPsychedelics, IDpersonal) 
VALUES (NULL, '12', '15', '2013', 'Linder', 'Meridian', 'ID', '83646', 'United States', '1', 'N', b'1', b'1', '3');

INSERT INTO classTwoReport (IDclassTwo, inVehicle,typeOfVehicle, personHarmDone, environmentHarmDone, physicalTrace, descriptionOfTrace, additionalDetails, IDreport) 
VALUES (NULL, b'0', 'U', b'0', b'1', b'1', 'Lots of Gas left in the air(U=UFO)', NULL, '3');
/*Personal Info*/
INSERT INTO personalInformation (IDpersonal,fname,lname,dayBirth,monthBirth,yearBirth,email,phone,streetAddress,city,stateAddress,zip,country) VALUES (NULL,'Lance','Jones','16','12','72','example@google.com','123-231-1111','123 N Sunshine Dr.', 'Boise','ID','83713','United States');

/*Incident Report*/
INSERT INTO incidentReport(IDreport,dayOccur,monthOccur,yearOccur,streetOccur,cityOccur,stateOccur,zipOccur,countryOccur,classEncounter,threatEncounter,corroborated,usingPsychedelics,IDpersonal) VALUES (NULL,'12','02','04','Violet Dr.','Boise','ID','83713','United States','1','2',0,0,'1');

/*Class Report 1*/
INSERT INTO classOneReport(IDclassOne,inVehicle,typeOfVehicle,additionalDetails,IDreport) VALUES (NULL,0,'SW',NULL,'1');
INSERT INTO `personalInformation` (`IDpersonal`, `fname`, `lname`, `dayBirth`, `monthBirth`, `yearBirth`, `email`, `phone`, `streetAddress`, `city`, `stateAddress`,
 `zip`, `country`)
 VALUES (NULL, 'Jeff', 'Riderr', '12', '6', '2000', 'jeffr@gmail.com', '208-657-2334', '2224 S jerry lane', 'Boise', 'ID', '34416', 
 'United States of America');

INSERT INTO `incidentReport` (`IDreport`, `IDpersonal`, `dayOccur`, `monthOccur`, `yearOccur`, `streetOccur`, `cityOccur`, `stateOccur`, `zipOccur`,
 `countryOccur`, `classEncounter`,
 `threatEncounter`, `corroborated`, `usingPsychedelics`)
 VALUES (NULL, NULL, '04', '07', '19', '2224 S jerry lane', 'Boise', 'ID', '34416', 'Untied States of America', '2', '3', b'0', b'0');

INSERT INTO `classTwoReport` (`IDclassTwo`, `inVehicle`, `typeOfVehicle`, `personHarmDone`, `environmentHarmDone`, `physicalTrace`, `descriptionOfTrace`,
 `additionalDetails`, `IDreport`)
 VALUES (NULL, b'0', 'T', b'0', b'0', b'0', 'none', 'none', '1');

INSERT INTO `personalInformation` (`IDpersonal`, `fname`, `lname`, `dayBirth`, `monthBirth`, `yearBirth`, `email`, `phone`, `streetAddress`,
    `city`, `stateAddress`, `zip`, `country`) 
    VALUES (NULL, 'Christopher', 'Zeik', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `incidentReport` (`IDreport`, `dayOccur`, `monthOccur`, `yearOccur`, `streetOccur`, `cityOccur`, `stateOccur`,
    `zipOccur`, `countryOccur`, `classEncounter`, `threatEncounter`, `corroborated`, `usingPsychedelics`, `IDpersonal`)
    VALUES (NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'0', b'0', '1');
INSERT INTO `classTwoReport` (`IDclassTwo`, `inVehicle`, `typeOfVehicle`, `personHarmDone`, `environmentHarmDone`, `physicalTrace`,
    `descriptionOfTrace`, `additionalDetails`, `IDreport`)
    VALUES (NULL, b'0', 'NA', b'0', b'0', b'0', NULL, NULL, '1');INSERT INTO personalInformation (IDpersonal, fname, lname, dayBirth, monthBirth, yearBirth, email, phone, streetAddress, city, stateAddress, zip, country) VALUES 
(NULL, 'Trevor', 'Philips', '05', '01', '1986', 'trevorp@gmail.com', '401-871-4068', '34127 N Burbank Way', 'Memphis', 'TN', '3457-85762', 'United States');

INSERT INTO incidentReport (IDreport, dayOccur, monthOccur, yearOccur, streetOccur, cityOccur, stateOccur, zipOccur, countryOccur, classEncounter, threatEncounter, corroborated, usingPsychedelics, IDpersonal) VALUES 
(NULL, '1', '05', '2016', 'Leslie Street', 'Boise', 'ID', '83646', 'United States', '2', '1', b'0', b'0', '1');

INSERT INTO classOneReport (IDclassOne, inVehicle, typeOfVehicle, additionalDetails, IDreport) VALUES 
(NULL, b'0', 'SU', 'IT WAS SO BIG LIKE HOLY COW IT WAS BIG!!!', '1');INSERT INTO personalInformation (IDpersonal, fname, lname, dayBirth, monthBirth, yearBirth, email, phone, streetAddress, city, stateAddress, zip, country) 
VALUES (NULL, 'Gabriel', 'Weible', '05', '06', '2002', 'gweib5495@westada.org', '2088675309', '123 Alphabet Ln.', 'Eagle', 'ID', '83616', 'United States');

INSERT INTO incidentReport (IDreport, dayOccur, monthOccur, yearOccur, streetOccur, cityOccur, stateOccur, zipOccur, countryOccur, classEncounter, threatEncounter, corroborated, usingPsychedelics, IDpersonal) 
VALUES (NULL, '10', '03', '2019', 'Cloverdale', 'Meridian', 'ID', '83646', 'United States', '2', 'N', b'1', b'1', '1');

INSERT INTO classTwoReport (IDclassTwo, inVehicle,typeOfVehicle, personHarmDone, environmentHarmDone, physicalTrace, descriptionOfTrace, additionalDetails, IDreport) 
VALUES (NULL, b'1', 'FO', b'0', b'1', b'1', 'Burn marks from FO(Flying Object) takeoff', NULL, '1');
INSERT INTO `personalInformation` (`IDpersonal`, `fname`, `lname`, `dayBirth`, `monthBirth`, `yearBirth`, `email`, `phone`, `streetAddress`, `city`, 
`stateAddress`, `zip`, `country`) VALUES 
(NULL, 'Haden', 'Harris', '06', '07', '2002', 'Hayden@gmail.com', '(205) 674-7895', '4563 West Conspiracy Street', 'Boise', 'Id', '563567', 'United States');


INSERT INTO `incidentReport` (`IDreport`, `IDpersonal`, `dayOccur`, `monthOccur`, `yearOccur`, `streetOccur`, `cityOccur`, `stateOccur`, `zipOccur`, 
`countryOccur`, `classEncounter`, `threatEncounter`, `corroborated`, `usingPsychedelics`) 
VALUES (NULL, NULL, '08', '07', '2009', '3456 West Conspiracy Street', 'Boise', 'Id', '236362', 'United States', '2', '1', b'0', b'0');

INSERT INTO `classTwoReport` (`IDclassTwo`, `inVehicle`, `typeOfVehicle`, `personHarmDone`, `environmentHarmDone`, 
`physicalTrace`, `descriptionOfTrace`, `additionalDetails`, `IDreport`) 
VALUES (NULL, b'1', '2', b'1', b'1', b'1', 'a footprint', 'was green', '1');INSERT INTO `personalInformation` (`IDpersonal`, `fname`, `lname`, `dayBirth`, `monthBirth`, `yearBirth`, `email`, `phone`, `streetAddress`, `city`, `stateAddress`, `zip`, `country`) VALUES (NULL, 'John', 'Berkley', '03', '23', '1995', 'berkley_yeet@yahoo.com', '985-406-7859', '4592 Bassel Street', 'Houma, Louisiana', 'LA', '70360', 'America')

INSERT INTO `incidentReport` (`IDreport`, `dayOccur`, `monthOccur`, `yearOccur`, `streetOccur`, `cityOccur`, `stateOccur`, `zipOccur`, `countryOccur`, `classEncounter`, `threatEncounter`, `corroborated`, `usingPsychedelics`, `IDpersonal`) VALUES (NULL, '23', '01', '2005', '1249 Modoc Alley', 'Eagle', 'ID', '83642', 'America', '1', 'n', b'0', b'0', '1')

INSERT INTO `classOneReport` (`IDclassOne`, `inVehicle`, `typeOfVehicle`, `additionalDetails`, `IDreport`) VALUES (NULL, b'0', 'n', 'I saw a light', '1')
INSERT INTO personalInformation(IDpersonal, fname, lname, dayBirth, monthBirth, yearBirth, email, phone, streetAddress, city, stateAddress, zip, country)
        VALUES (NULL, 'Bill', 'Joe', '06', '06','2004', 'bill@gmail.com', '2086662345', '123 South Street', 'Boise', 'ID', '83704', 'USA');


INSERT INTO incidentReport(IDreport, dayOccur, monthOccur, yearOccur, streetOccur, cityOccur, stateOccur, zipOccur, countryOccur, classEncounter, threatEncounter, corroborated, usingPsychedelics, IDpersonal)
        VALUES (NULL, '23', '10', '2010', '324 Main Street','Boise', 'ID', '83709', 'USA', '1', '1', b'0', b'0', '6');

INSERT INTO classOneReport(IDclassone, inVehicle, typeOfVehicle, additionalDetails, IDreport)
        VALUES (NULL, b'0', 'FL', 'It was very large and fast', NULL);
INSERT INTO `personalInformation` (`IDpersonal`, `fname`, `lname`, `dayBirth`, `monthBirth`, `yearBirth`, `email`, `phone`, `streetAddress`, `city`, `stateAddress`, `zip`, `country`) VALUES (null, 'Perry', 'Liver', '12', '8', '1999', 'hotdogs@gmail.com', '(208)532-5413', '134 W Westwood Way.', 'Moscow', 'ID', '213452', 'United States of America');

INSERT INTO `incidentReport` (`IDreport`, `dayOccur`, `monthOccur`, `yearOccur`, `streetOccur`, `cityOccur`, `stateOccur`, `zipOccur`, `countryOccur`, `classEncounter`, `threatEncounter`, `corroborated`, `usingPsychedelics`, `IDpersonal`) VALUES (NULL, '25', '4', '2009', '123 N Wildwood Way.', 'Moscow', 'ID', '83843', 'United States Of America', NULL, 'H', b'0', b'0', '23');

INSERT INTO `classTwoReport` (`IDclassTwo`, `inVehicle`, `typeOfVehicle`, `personHarmDone`, `environmentHarmDone`, `physicalTrace`, `descriptionOfTrace`, `additionalDetails`, `IDreport`) VALUES (null, b'0', 'SW', b'0', b'0', b'0', 'Flying through the water and shooting all the fish. Looked kind of fun...', 'Sleek with gun ports all over the ship.', '23');

INSERT INTO `classOneReport` (`IDclassOne`, `inVehicle`, `typeOfVehicle`, `additionalDetails`, `IDreport`) VALUES (NULL, b'0', 'SW', 'Was flying in the water and shooting lasers at all the fish. Looked kind of fun...', '23');
INSERT INTO `personalInformation` (`IDpersonal`, `fname`, `lname`, `dayBirth`, `monthBirth`, `yearBirth`, `email`, `phone`, `streetAddress`, `city`, `stateAddress`, `zip`, `country`) 
VALUES (NULL, 'Billy', 'Smith', '29', '02', '1972', 'JimmyBeans@gmail.com', '208-958-3621', '4793 W. Molly Way', 'Moscow', 'ID', '83646', 'United States')

INSERT INTO `incidentReport` (`IDreport`, `dayOccur`, `monthOccur`, `yearOccur`, `streetOccur`, `cityOccur`, `stateOccur`, `zipOccur`, `countryOccur`, `classEncounter`, `threatEncounter`, `corroborated`, `usingPsychedelics`, `IDpersonal`)
 VALUES (NULL, '18', '03', '1972', 'Cherry ln', 'Meridian', 'ID', '83646', 'United States', 'h', '1', b'1', b'0', '1')

INSERT INTO `classThreeReport` (`IDclassThree`, `inVehicle`, `typeOfVehicle`, `personHarmDone`, `environmentHarmDone`, `physicalTrace`, `descriptionOfTrace`, `colorCreature`, `numLegsStandingOn`, `closestAnimal`, `otherAppendages`, `alienSize`, `numEyes`, `abducted`, `toOffWorld`, `timeGone`, `howManyCreatures`, `additionalDetails`, `IDreport`) 
VALUES (NULL, b'1', 'GR', b'0', b'0', b'1', 'Crop circles', 'Yellowish green', '2', 'Ape', 'None', 'Size of Big Foot', '4', b'0', b'0', 'None', '8', 'None', '1')
