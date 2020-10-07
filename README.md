# Tutorial

1.DDL(Data Definition Language)
create, drop, alter, rename


2.DML(Data Manipulation Language)
Select-->Retrive,
Insert-->Create
Update-->Update
Delete
Merge


3.TCL(Transaction Control Language)
commit
rollback
set transaction


4.DCL(Data Control Language)
read acces, R/W access , access, grant,revoke



// insert query
insert into blog(title, details) Values ('Dr.Yubraj Khatiwada','Goverment of nepal to appoint Dr.')




//select query *--> all
SELECT * FROM blog WHERE id='2' OR title='KP Oli';
 

//update query
 UPDATE blog SET title='Dr.Govinda KC', content='He is a great social activist' WHERE id='2';

// delete query
delete from blog where title='Dr.Govinda KC';