# Tutorial



// insert query
insert into blog(title, details) Values ('Dr.Yubraj Khatiwada','Goverment of nepal to appoint Dr.')




//select query *--> all
SELECT * FROM blog WHERE id='2' OR title='KP Oli';
 

//update query
 UPDATE blog SET title='Dr.Govinda KC', content='He is a great social activist' WHERE id='2';

// delete query
delete from blog where title='Dr.Govinda KC';