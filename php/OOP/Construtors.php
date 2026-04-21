<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <b>Construtors</b>
    <p>เป็นฟังก์ชั่นที่จะถูกใช้งานเมื่อตอนเริ่มสร้างวุตถุและทำงานอัตโนมัติเพียงครั้งเดียวในตอนเริ่มต้น</p>

    <?php

    class Employee
    {
        //ตอนนิยามขึ้นมาใส่ $ 
        private $name;
        private $job;
        private $salary;

        function __construct($nameParam, $namejob, $salary)
        {
            $this->name = $nameParam;
            $this->job = $namejob;
            $this->salary = $salary;
        }

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
            echo " ชื่อพนักงาน " . $this->name;
            echo  " ตำแหน่งงาน " . $this->job;
            echo " เงินเดือน " . $this->salary . "<hr>";
        }
    }

    $emp1 = new Employee("เจน", "บัญชี", 1500);
    $emp1->setsataly(80000);
    $emp1->showdata();

    $emp2 = new Employee("แจน", "ITSupteme", 3000);
    $emp2->showdata();

    ?>
</body>

</html>