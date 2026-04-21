<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p {
            margin: 0;
        }
    </style>
</head>

<body>
    <b>Access_Modifier</b>
    <p>คือ ระดับการเข้าถึง Class,Attribute,Method และอื่นๆ ในภาษาเชิงวัตถุ โดยมีประโยชน์อย่างมากในเรื่องของการกำหนดระดับการเข้าถึงสิทธิในการเข้างานงาน การซ้อข้อมูล</p>
    <hr>
    <p><b><u>Public</u></b> เป็นการประกาศระดับการเข้าถึงที่เข้มง่วงน้อยที่สุด ใครๆก็สามารถเข้าถึงและเรียกใช้งานได้</p>
    <p><b><u>Protected</u></b> เป็นการประกาศระดับการเข้าึงที่เกี่ยวข้องกับเรื่องการสืบทอด ทำให้คลาสนั้นๆ สามารถเรียกใช้งานสมาชิกของคลาสที่ถูกกำหนดเป็น Protected ได้</p>
    <p><b><u>Private</u></b> เป็นการประกาศระดับการเข้าถึงที่เข้มงวดที่สุด กล่าวคือ จะมีแต่คลาสของตัวมันเอกเท่านั้นที่มีสิทธิ์ใช้งานได้</p>
    <hr>
    <b>การสร้าง Attribute</b>
    <p><b><u>this keyword</u></b>
        การใช้ตียร์เวอร์ด $this จะเป็นตัวชี้หรือตัวที่บ่งบอกว่าตอนนี้เราทำงานกับสุตถุใด ให้บอกตัวตนของวัตถุนั้นๆ เช่น การกำหนดคุณสมบัติต่างๆ ในวัตถุ เป็นต้น</p>
    <br>
    <?php

    class Employee
    {
        //ตอนนิยามขึ้นมาใส่ $ 
        private $name;
        private $job;
        private $salary;

        public function setEmpname($nameParam)
        {
            $this->name = $nameParam;
        }
        public function setjob($namejob)
        {
            $this->job = $namejob;
        }
        public function setsataly($salary)
        {
            $this->salary = $salary;
        }

        public function showdata()
        {
            echo "ชื่อพนักงาน " . $this->name . " ตำแหน่งงาน " . $this->job . " เงินเดือน " . $this->salary . "<hr>";
        }
    }

    $emp1 = new Employee("เจน", "บัญชี", 1500);
    $emp1->setEmpname("เจน");
    $emp1->setjob("บัญชี");
    $emp1->setsataly(1500);
    $emp1->showdata();


    //ตอนใช่งานไม่ต้องใส่ $
    // $emp1->name = "เจน";
    // $emp1->job = "ITSup";
    // $emp1->name = "เจนนี่";

    $emp2 = new Employee("เจน", "บัญชี", 1500);
    $emp2->setEmpname("แจน");
    $emp2->setjob("ITSupteme");
    $emp2->setsataly(3000);
    $emp2->showdata();
    // $emp2->name = "ก้อง";
    // $emp2->job = "ITSupteme";


    // echo "ชื่อพนักงาน " . $emp1->name . " ตำแหน่งงาน " . $emp1->job . "<br>";
    // echo "ชื่อพนักงาน " . $emp2->name . " ตำแหน่งงาน " . $emp2->job;
    // 
    ?>
</body>

</html>