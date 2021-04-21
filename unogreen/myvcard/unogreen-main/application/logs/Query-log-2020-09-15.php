SELECT  u.*,r.role_name,r.id as role_id,p.fname as pfname,p.lname as plname
                FROM user AS u 
                LEFT JOIN roles AS r ON r.id = u.user_type
                LEFT JOIN user AS p ON p.id = u.placed_under where u.placed_under="12" 
 Execution Time:0.0015559196472168
 Exection Date & Time:2020-09-15 11:14:50
 IP Address: ::1

SELECT  u.*,r.role_name,r.id as role_id,p.fname as pfname,p.lname as plname
                FROM user AS u 
                LEFT JOIN roles AS r ON r.id = u.user_type
                LEFT JOIN user AS p ON p.id = u.placed_under where u.placed_under="12" 
 Execution Time:0.00064492225646973
 Exection Date & Time:2020-09-15 11:14:52
 IP Address: ::1

SELECT  u.*,r.role_name,r.id as role_id,p.fname as pfname,p.lname as plname
                FROM user AS u 
                LEFT JOIN roles AS r ON r.id = u.user_type
                LEFT JOIN user AS p ON p.id = u.placed_under where u.placed_under="12" 
 Execution Time:0.00093793869018555
 Exection Date & Time:2020-09-15 11:15:30
 IP Address: ::1

select * from roles WHERE  status IN ('1,2') 
 Execution Time:0.001007080078125
 Exection Date & Time:2020-09-15 14:46:04
 IP Address: ::1

select * from reporting_person WHERE  status IN ('1') 
 Execution Time:0.0018990039825439
 Exection Date & Time:2020-09-15 14:46:04
 IP Address: ::1

select * from products WHERE  status IN ('1') order by c_date desc 
 Execution Time:0.090131044387817
 Exection Date & Time:2020-09-15 14:46:46
 IP Address: ::1

SELECT  u.*,r.role_name,r.id as role_id,p.fname as pfname,p.lname as plname
                FROM user AS u 
                LEFT JOIN roles AS r ON r.id = u.user_type
                LEFT JOIN user AS p ON p.id = u.placed_under where u.user_type IN (1,2) order by u.fname asc 
 Execution Time:0.02478289604187
 Exection Date & Time:2020-09-15 14:46:46
 IP Address: ::1

select * from customer WHERE  status IN ('0') order by created_date desc 
 Execution Time:0.00089812278747559
 Exection Date & Time:2020-09-15 14:46:46
 IP Address: ::1

select * from customer WHERE  status IN ('0') order by created_date desc limit 10 
 Execution Time:0.00075602531433105
 Exection Date & Time:2020-09-15 14:46:46
 IP Address: ::1

SELECT  l.*,u.fname AS fname,u.lname AS lname,u.id AS user_id,u.user_type,r.role_name,c.calling_remark,c.intersted_in_services FROM lead AS l
        LEFT JOIN user AS u ON u.id = l.form_user_id
        LEFT JOIN roles AS r ON r.id = u.user_type
        LEFT JOIN customer AS c ON c.id = l.cust_id
        WHERE l.to_user_id='1'  AND  l.client_status='CA' order by l.created_date desc  
 Execution Time:0.034927845001221
 Exection Date & Time:2020-09-15 14:48:02
 IP Address: ::1

select * from products WHERE  status IN ('1') order by c_date desc 
 Execution Time:0.018678903579712
 Exection Date & Time:2020-09-15 14:48:02
 IP Address: ::1

select * from products WHERE  status IN ('1') order by c_date desc 
 Execution Time:0.001021146774292
 Exection Date & Time:2020-09-15 14:48:07
 IP Address: ::1

SELECT  u.*,r.role_name,r.id as role_id,p.fname as pfname,p.lname as plname
                FROM user AS u 
                LEFT JOIN roles AS r ON r.id = u.user_type
                LEFT JOIN user AS p ON p.id = u.placed_under where u.user_type IN (1,2) order by u.fname asc 
 Execution Time:0.00072908401489258
 Exection Date & Time:2020-09-15 14:48:07
 IP Address: ::1

select * from customer WHERE  status IN ('0') order by created_date desc 
 Execution Time:0.00038599967956543
 Exection Date & Time:2020-09-15 14:48:07
 IP Address: ::1

select * from customer WHERE  status IN ('0') order by created_date desc limit 10 
 Execution Time:0.00031495094299316
 Exection Date & Time:2020-09-15 14:48:07
 IP Address: ::1

