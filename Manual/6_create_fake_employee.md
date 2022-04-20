ช่วงเวลาในคลิป 34.30-46.10 น.

1. เริ่มการทำงานของ Server ด้วยคำสั่ง php artisan serve

![ขั้น1](https://user-images.githubusercontent.com/69668143/163854266-2be977cf-5124-44e4-9fa0-543d447537c4.png)

2. เข้าดู / ใช้งานฐานข้อมูลด้วย localhost/phpmyadmin

![ขั้น2](https://user-images.githubusercontent.com/69668143/163854299-05eee96e-1d54-4ab0-adc5-77e266356bb4.png)

3. สร้าง Function ส่วนของการเรียกดูข้อมูลพนักงาน

![ขั้น3](https://user-images.githubusercontent.com/69668143/163854311-350173a1-56ee-43d6-9711-aef6ede66e7d.png)

4. สร้าง model ของ Employee ขึ้นมา เพื่อเป็นฐานข้อมูลให้กับ Employee Data

![ขั้น4](https://user-images.githubusercontent.com/69668143/163854339-1f0c3ae7-6146-4f32-9f65-84434f8c8c59.png)

5. ชุดคำสั่ง php ปรากฏขึ้นมา
 
![ขั้น5](https://user-images.githubusercontent.com/69668143/163854353-08feaf4b-6684-408e-871c-4944997c3afd.png)

6. กำหนด colume ที่จะสร้างใน Table employee

![ขั้น6](https://user-images.githubusercontent.com/69668143/163854368-c46d5dde-8a00-4323-ba20-da71403d6974.png)

7. ใช้งานคำสั่ง php artisan migrate เพื่อ active code เพื่อให้เกิด colume ใน phpmyadmin 
    หากไม่สำเร็จ ให้ใช้งาน php artisan migrate:reset ก่อน เเล้วจึงใช้งานคำสั่ง php artisan migrate อีกครั้ง
 
![ขั้น7](https://user-images.githubusercontent.com/69668143/163854377-a36f6e1c-f6b1-4c6a-aaa8-f3b97e22342c.png)

8. มี colume ปรากฏขึ้นมาใน phpmyadmin

![ขั้น8](https://user-images.githubusercontent.com/69668143/163854393-b6cd0ca3-d8e3-480a-9984-b478c28075bd.png)
 
9. ในส่วนของ EmployeeFactory เป็นส่วนในการ Genarate ข้อมูล Employee แบบสุ่มขึ้นมา

![ขั้น9](https://user-images.githubusercontent.com/69668143/163854407-4687f009-afd0-462e-a12a-e15b13fb1e14.png)

10. ส่วนของไฟล์ EmployeeSeeder.php เป็นส่วนที่รันการทำงานของ code ส่วนในการ Genarate Faker Employee อีกทีโดยที่
    Employee:factory(100)->create(); หมายถึง Genarate Faker Employee ขึ้นมา 100 คน

![ขั้น10](https://user-images.githubusercontent.com/69668143/163854421-6f4342f7-36f7-4e1c-9e53-70ef5f9b8377.png)

11. ส่วนของการกำหนดว่า Colume ไหนบ้างที่เพิ่มข้อมูลเข้าไปได้ (ส่วน ID , timestamp ระบบ Genarate ขึ้นมาเอง) 

![ขั้น11](https://user-images.githubusercontent.com/69668143/163854437-865e4b15-ae8d-4a4f-a825-402bcdcb1532.png)

12. ส่วนเรียกใช้งาน EmployeeSeeder

![ขั้น12](https://user-images.githubusercontent.com/69668143/163854449-8ced9ab1-84d3-486c-959a-cd44c1a15253.png)

13. คำสั่งรันการทำงานของระบบ Genarate ก่อนหน้านี้ php artisan migrate --seed

![ขั้น13](https://user-images.githubusercontent.com/69668143/163854462-a1f73a5d-df07-43eb-90a4-e253b72ae07e.png)

14. แสดงจำนวนพนักงานที่ Genarate มาได้

![ขั้น14](https://user-images.githubusercontent.com/69668143/163854473-1277ec77-0902-4626-ab0c-5cffcf5208fe.png)

15. พนักงานมีชื่อสุ่ม เเล้วเงินเดือนสุ่มระหวา่ง (50000-500000)

![ขั้น15](https://user-images.githubusercontent.com/69668143/163854482-a33bc457-e0c9-4f62-b2f5-76df2a921080.png)
