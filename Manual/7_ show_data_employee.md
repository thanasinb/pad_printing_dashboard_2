ช่วงเวลาในวิดีโอ 00.46.10-1.04.16 น

1. สร้าง Function ขึ้นมาเพื่อรอ GET ข้อมูล Employee
![1](https://user-images.githubusercontent.com/69668143/164048598-0d0d3fe1-ee4d-4fb4-9a45-215c74c9771b.png)

2. สร้างไฟล์ controller ชื่อ Employeesontroller โดยใช้งานคำสั่ง 
   php artisan make:controller EmployeesController
![2](https://user-images.githubusercontent.com/69668143/164048619-c6fc307a-8828-445f-b0c9-e9b4d8880aef.png)

3. สร้าง Route ให้กับการ GET ข้อมูล Employee
![3](https://user-images.githubusercontent.com/69668143/164048646-f22ce956-e397-47a9-b875-79848c0feb35.png)

4. สร้าง Function ที่ใช้งานการ GET ข้อมูล Employee ใน EmployeesController
![4](https://user-images.githubusercontent.com/69668143/164048664-537b37d5-237e-4619-a61d-5af0f8497d07.png)

5. ตรวจสอบ Response ของข้อมูล ว่ามีเข้ามาจริงมั้ย
![5](https://user-images.githubusercontent.com/69668143/164048697-12952edb-9725-4e00-a791-6783dcebe03e.png)

6. (ต่อ)
![6](https://user-images.githubusercontent.com/69668143/164048722-0d9a6e16-cd72-471b-99a0-66883f1d6085.png)

7. ใช้งานค่่าที่ได้มาจาก Response
![7](https://user-images.githubusercontent.com/69668143/164048763-b78b1321-7137-41b8-9d0e-11b54ed596e0.png)

8. import ไฟล์ TableRow มาใช้งาน
![8](https://user-images.githubusercontent.com/69668143/164048796-f7626801-9e04-404d-8d83-97ed081e355b.png)

9. นำ Response ที่ได้นำมา Map เเละแสดงผลในหน้า Table.js โดยส่วนประกอบภายในอยู่ใน TableRow ที่ดึงมาใช้งาน
![9](https://user-images.githubusercontent.com/69668143/164048840-79cd1d49-7e27-4247-abb1-1ea835b210b6.png)

10. ภายใน TableRow แสดงผลข้อมูลส่วนต่างๆที่ได้รับมาจาก Response
![10](https://user-images.githubusercontent.com/69668143/164048862-d4d84bfa-9001-4360-9ed3-1c6244e347e6.png)

11. Response ที่ได้แสดงบนหน้าจอ
![11](https://user-images.githubusercontent.com/69668143/164048896-97f421b7-d6ca-4c3c-ae61-64648db680ad.png)
