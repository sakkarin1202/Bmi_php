<?php
require_once './model/HumanBeing.php';
require_once './model/BmiIndexer.php';
require_once './model/HealthAnalyzer.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $height = $_POST['height'] ?? '';
    $weight = $_POST['weight'] ?? '';

    $hb = new HumanBeing();
    $hb->setHeight($height);
    $hb->setWeight($weight);
    $hb->calculateBMI();

    echo "<p>BMI: " . $hb->getBmi() . "</p>";
    echo "<p>Result: " . $hb->analyzeBmi() . "</p>";
}
?>
