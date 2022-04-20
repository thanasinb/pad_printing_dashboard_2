ช่วงเวลาใน Videos (https://www.youtube.com/watch?v=svziC8BblM0) 1:09:30 - 1:27:00

1. สร้างรูปแบบของปุ่ม View ขึ้นมาในลักษณะของ Modal โดยค้นหารูปแบบได้จากใน getbootstrap.com
![19](https://user-images.githubusercontent.com/69668143/164050571-23fe892b-ac7b-4065-bbac-2136ac748e22.png)

2. นำรูปแบบที่ได้มาใช้ใน TableActionButton.js 
![20](https://user-images.githubusercontent.com/69668143/164050600-554a4ee8-a524-4b55-b3f3-b06df50008bb.png)

3. สร้างไฟล์ ชื่อ ViewModal.js ลงใน components/employeeList
![21](https://user-images.githubusercontent.com/69668143/164050618-478bd77e-1248-417f-b7e7-2f97c4d9f508.png)

4. นำรูปแบบ Modal ที่ได้จาก getbootstrap.com มาใช้งานในส่วนของ ViewModal.js
![22](https://user-images.githubusercontent.com/69668143/164050660-e3f59a89-35e9-475d-a4f1-de6cb08a57c4.png)

5. (ต่อ)
![23](https://user-images.githubusercontent.com/69668143/164050678-3beebb19-02f8-42bc-bd67-97d14e53016c.png)

6. เมื่อกด View จะมีหน้า Modal เด้งขึ้นมา
![24](https://user-images.githubusercotent.com/69668143/164050699-4d071098-363a-4128-b972-54c880e89827.png)

7. สร้าง Function สำหรับ GET ข้อมูลพนักงานขึ้นมา
![25](https://user-images.githubusercontent.com/69668143/164050737-c8c01676-69ed-4abd-8649-e680e242941d.png)

8. เพิ่ม Route ของการเรียกข้อมูลพนักงานขึ้นมาในไฟล์ web.php
![26](https://user-images.githubusercontent.com/69668143/164050776-121b5cb2-25a2-4042-a60d-6b3f0ea566f3.png)

9. สร้าง Function ขึ้นมาใน EmployeesController
![27](https://user-images.githubusercontent.com/69668143/164050801-c2405e47-1e7c-49f3-ab56-0f8cfab2456e.png)

10. ตรวจสอบ Response ที่เข้ามา
![28](https://user-images.githubusercontent.com/69668143/164050851-4e09f736-5205-45cf-8873-025a813cb430.png)

11. ลักษณะ Code ของ ViewModal.js 
![pp1](https://user-images.githubusercontent.com/69668143/164055998-f19a6cc9-0c5a-4b9a-8bc6-8133f98e5eb2.jpeg)

12. import ไฟล์ ViewModal.js มาใช้งานในส่วนของ TableActionButton.js
![pp2](https://user-images.githubusercontent.com/69668143/164056120-cd92154e-efcb-4f57-b9bb-e946adbcbe14.jpeg)

13. ลักษณะ Code ที่ออกแบบส่วน ViewModal ในหน้าของ TableActionButton.js
![pp3](https://user-images.githubusercontent.com/69668143/164056155-984f3a74-1694-40f5-8947-4ab456850522.jpeg)

14. ลักษณะ Code ส่วน Function getEmployeeDetails
![pp4](https://user-images.githubusercontent.com/69668143/164056184-851ac858-36a0-4be5-a40a-a1eac01a7268.jpeg)

15. ลักษณะ Code ส่วน Route ของ getEmployeeDetails.js
![pp5](https://user-images.githubusercontent.com/69668143/164056226-43774c45-17ed-4d87-86c1-19350598f13e.jpeg)

16. ภาพตัวอย่างการแสดงผล
![pp6](https://user-images.githubusercontent.com/69668143/164056288-26bf83d5-4c71-4de2-96b5-2e1b86c8e457.jpeg)

