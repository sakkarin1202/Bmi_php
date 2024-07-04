<?php
class HealthAnalyzer {
    public function analyzeBmi($bmi) {
        if ($bmi <= 18.5) {
            return "Underweight"; // น้ำหนักน้อยเกินไป
        } else if ($bmi <= 24.9) {
            return "Normal weight"; // น้ำหนักปกติ
        } else if ($bmi <= 29.9) {
            return "Overweight"; // น้ำหนักเกิน
        } else {
            return "Obese"; // อ้วน
        }
    }
}
?>
