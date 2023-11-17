
<!-- select co ban -->
select * form sinhvien where id = 1 
<!-- insert co ban -->
insert into sinhvien (id,ten,tuoi,lop) values (2,hang,19,wd18408)
<!-- delete co ban -->
delete * form sinhvien where id = 2
<!-- update co ban -->
update sinhvien set ten = trinh where id = 1
<!-- where - where like -->
select * form sinh vien where name like 'h%' <!-- where cau lenh loc ban ghi , like de loc ban ghi trong cot co sd cac  -->
<!-- offset - limit -->
select * form sinhvien limit 1 offset 3 <!-- limit la so ban ghi lay , offset thu tu la ban ghi bat dau lay  -->