


/* QUERIES THAT WE USED TO POPULATE THE DATABASE*/

/* Create 5 branches */
INSERT INTO branch values (1000,'Canada','Canada Branch');
INSERT INTO employee values (2000,1000,'Sarah','Manager',15040,NULL);

INSERT INTO branch values (1001,'Amercia','America Branch');
INSERT INTO employee values (2001,1001,'Erin','Manager',25040,NULL);


INSERT INTO branch values (1002,'China','China Branch');
INSERT INTO employee values (2002,1002,'May','Manager',25040,NULL);

INSERT INTO branch values (1003,'Australia','Australia Branch');
INSERT INTO employee values (2003,1003,'George','Manager',15040,NULL);

INSERT INTO branch values (1004,'Russia','Russia Branch');
INSERT INTO employee values (2004,1004,'Ana','Manager',15040,NULL);


/* Create 5 regular employees for each branch */

/*canada*/ 
INSERT INTO employee values (2005,1000,'Dave','Employee',1040,2000);
INSERT INTO employee values (2006,1000,'Carl','Employee',1041,2000);
INSERT INTO employee values (2007,1000,'Tyler','Employee',1043,2000);
INSERT INTO employee values (2008,1000,'May','Employee',1043,2000);
INSERT INTO employee values (2009,1000,'John','Employee',1050,2000);



/*America*/
INSERT INTO employee values (2010,1001,'Leon','Employee',1140,2001);
INSERT INTO employee values (2011,1001,'Jim','Employee',1541,2001);
INSERT INTO employee values (2012,1001,'Bob','Employee',1243,2001);
INSERT INTO employee values (2013,1001,'Skylar','Employee',1043,2001);
INSERT INTO employee values (2014,1001,'Chip','Employee',1050,2001);

/*China*/
INSERT INTO employee values (2015,1002,'Mox','Employee',1940,2002);
INSERT INTO employee values (2016,1002,'Molly','Employee',1941,2002);
INSERT INTO employee values (2017,1002,'Ruth','Employee',1763,2002);
INSERT INTO employee values (2018,1002,'Adam','Employee',1143,2002);
INSERT INTO employee values (2019,1002,'Arnold','Employee',1030,2002);


/*Australia*/
INSERT INTO employee values (2020,1003,'Annie','Employee',1000,2003);
INSERT INTO employee values (2021,1003,'Obi','Employee',2041,2003);
INSERT INTO employee values (2022,1003,'Law','Employee',4043,2003);
INSERT INTO employee values (2023,1003,'Nan','Employee',5043,2003);
INSERT INTO employee values (2024,1003,'Harry','Employee',1050,2003);
/*Russia*/
INSERT INTO employee values (2025,1004,'Russo','Employee',1042,2004);
INSERT INTO employee values (2026,1004,'Vlad','Employee',1541,2004);
INSERT INTO employee values (2027,1004,'Arnie','Employee',1845,2004);
INSERT INTO employee values (2028,1004,'Maya','Employee',1043,2004);
INSERT INTO employee values (2029,1004,'Johnathan','Employee',1050,2004);




/* Create some hosts  18  */
INSERT INTO host values (3000,'Sophie','Turner','Canada',5193444532,'are@gmail.com','1231  drive');
INSERT INTO host values (3001,'Kevin','Hart','Canada',5193224532,'rse@gmail.com','1232  drive');
INSERT INTO host values (3002,'Dwayne','Johnson','Canada',2293324532,'dre@gmail12.com','1233  drive');
INSERT INTO host values (3003,'Emin','nem','Canada',5193322232,'re@gmfail43.com','1234  drive');
INSERT INTO host values (3004,'Jay','Z','Canada',5223324532,'re@gmaisl.ca','1235  drive');
INSERT INTO host values (3005,'Bob','Dillon','Canada',5193324222,'re@gmail.crom','1236  drive');
INSERT INTO host values (3006,'Emily','Blunt','Canada',2293324532,'re@gmailtt.com','1237  drive');
INSERT INTO host values (3007,'Cara','Delevigne','Canada',5193774532,'re@g5mail.com','1238  drive');
INSERT INTO host values (3008,'Jack','Black','Canada',5193333532,'re@gmai4l.com','1239  drive');
INSERT INTO host values (3009,'Emma','Watson','United Kingdom',7493324532,'6re@gmail.com','1123  drive');
INSERT INTO host values (3010,'Emma','Stone','United Kingdom',5193324532,'8re@gmail.com','1223  drive');
INSERT INTO host values (3011,'Mark','Whalberg','Canada',5193332532,'6re@gmail.com','1323  drive');
INSERT INTO host values (3012,'Scarlet','Johaneson','Canada',5453324532,'re@gmail.com','1423  drive');
INSERT INTO host values (3013,'Rose','Leslie','Canada',5193324532,'r5e@gmail.com','1523  drive');
INSERT INTO host values (3014,'Melissa','Benoist','Canada',5193326732,'re2e@gmail.com','123  drive');
INSERT INTO host values (3015,'Bey','Yonce','Canada',5193323532,'re4@gmail44.com','1623  drive');
INSERT INTO host values (3016,'Ryan','Reynolds','Canada',5223324532,'wr3e@gmail53.com','1723  drive');
INSERT INTO host values (3017,'Blake','Lively','Canada',5193324882,'ree@gmail54.com','1823  drive');
INSERT INTO host values (3018,'Alexandra','Daddario','Canada',5193324566,'re@gmail234.com','1923  drive');
INSERT INTO host values (3019,'Anna','Kendrick','US',5193324332,'ree@gmail.com','10023  drive');
INSERT INTO host values (3020,'Saorise','Ronan','Ireland',5283324532,'awre@gmail.com','11123  drive');


/* create guests*/

INSERT INTO guest values(7000,223,'Stret88','Ottawa','Ontario','Canada','Selena','Gomez',1111111111);
INSERT INTO guest values(7001,223,'Street44','Ottawa','Ontario','Canada','Megan','Fox',1144411111);
INSERT INTO guest values(7002,123,'Street66','Ottawa','Ontario','Canada','Slyvester','Stallone',1115551111);
INSERT INTO guest values(7003,243,'Street12','Ottawa','Ontario','Canada','Queen','Elizabath',1111666511);
INSERT INTO guest values(7004,423,'Street76','Ottawa','Ontario','Canada','Jennifer','Aniston',455555664,NULL);


INSERT INTO guest values(7005,203,'Stret888','Edmonton','Alberta','Canada','Ellen','Degeneres',1111100111);
INSERT INTO guest values(7006,203,'Street448','Kitchner','Ontario','Canada','Russel','Peters',1004411111);
INSERT INTO guest values(7007,103,'Street668','Waterloo','Ontario','Canada','Nick','Cannon',1115551001);
INSERT INTO guest values(7008,203,'Street128','Kinston','Ontario','Canada','Ed','Sheeran',1001666511);
INSERT INTO guest values(7009,403,'Street768','Toronto','Ontario','Canada','Tom','Holland',400055664

/*  FUNCTIONALITY QUERIES*/


/* THESE ARE QUERIES THAT ARE RUN THROUGH THE PHP NOT DIRECTLY THROUGH THE PG ADMIN !!!!!! */


/* THESE ARE JUST SO YOU CAN SEE WHICH QUERIES WERE USED FOR WHICH FUNCTIONALITY*/

/* view information and properties run by employee */

SELECT * FROM employee WHERE id='$record';
SELECT employee.id, employee.name, property.id, property.host_price, property.property_type, property.country FROM employee inner join property on employee.id = '$record' and property.employee_id = '$record';

/*view properties booked by guest */
SELECT * FROM guest WHERE id='$record';
SELECT guest.id, guest.first_name, property.id, property.host_price, property.property_type, property.country FROM guest, property_agreement, property WHERE guest.id = '$record' and property_agreement.guest_id = '$record' and property_agreement.property_id = property.id;


/*guests viewing available properties based on specific attributes*/

"SELECT * FROM property WHERE property.host_price >= $min_price and property.host_price <= $max_price and property.city = '$city' and property.province = '$province' and property.country = '$country' and property.start_day = $sday and property.start_month = $smonth and property.start_year = $syear and property.end_day = $eday and property.end_month = $emonth and property.end_year = $eyear and property.id NOT IN (SELECT property_agreement.property_id FROM property_agreement);


/* to Create a property*/

/*finding an employee to assign to property*/

select employee.id from employee join branch on employee.branch_id=branch.id where branch.country='$country' order by RANDOM() limit 1;

/*to create property itself
insert into property(id, host_id, employee_id, review_id, host_price, property_type, start_day, start_month, start_year, end_day, end_month, end_year, house_num, street, city, province, country, description, room_type, pool, wifi, laundry, bed_count, bath_count) values ($randomid, $hostid, $employee, null, $pricepernight, '$property_type', $sday, $smonth, $syear, $eday, $emonth, $eyear, '$housenum', '$street', '$city', '$province', '$country', '$description', '$room_type', $pool, $wifi, $laundry, $bednum, $bathnum);



/* to view properties owned by host*/

SELECT * FROM host WHERE id='$record';
SELECT host.id, host.first_name, property.id, property.host_price, property.property_type, property.country FROM host inner join property on host.id = '$record' and property.host_id = '$record';



/* booking a property by creating a property agreement    */
insert into property_agreement values ($property_agreementID, $guestID, $propertyID,$sday,$smonth,$syear,$eday,$emonth,$eyear);

/* to make a payment on a proprty*/
insert into payment values ($paymentID, NULL, $guestID,$propertyID,NULL,$amountValue,'bought','$Paytype');
Update  payment Set  property_type=(SELECT property_type from property where ID=$propertyID) where ID=$paymentID;
Update  payment Set  property_agreement_id= (SELECT property_agreement.ID from property_agreement where property_id=$propertyID) where ID=$paymentID;
Update  payment Set  host_id= (SELECT host_ID from property where property.ID=$propertyID) where ID=$paymentID;


/* create a review and assign it to a property*/
insert into review values ($reviewid, $ratingvalue, '$communication', '$cleanliness');
UPDATE property SET review_id = $reviewid WHERE property.id=$propertyid;







