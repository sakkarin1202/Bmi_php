<?php
class BmiIndexer {
    public function calculateBMI($height, $weight) {
        // แปลงความสูงเป็นเมตร
        $heightInMeter = $height / 100.0; // เปลี่ยนจากเซนติเมตรเป็นเมตร

        // คำนวณ BMI โดยใช้สูตรที่ถูกต้อง
        $bmi = $weight / ($heightInMeter * $heightInMeter);

        return $bmi;
    }
}
?>
