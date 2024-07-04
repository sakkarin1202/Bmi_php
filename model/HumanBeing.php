<?php
require_once 'BmiIndexer.php';
require_once 'HealthAnalyzer.php';

class HumanBeing {
    private $height;
    private $weight;
    private $bmi;

    public function getHeight() {
        return $this->height;
    }

    public function setHeight($height) {
        $this->height = $height;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
    }

    public function getBmi() {
        return $this->bmi;
    }

    private function setBmi($bmi) {
        $this->bmi = $bmi;
    }

    public function calculateBMI() {
        $bi1 = new BmiIndexer();
        $this->setBmi($bi1->calculateBMI($this->getHeight(), $this->getWeight()));
    }

    public function analyzeBmi() {
        $ha = new HealthAnalyzer();
        return $ha->analyzeBmi($this->getBmi());
    }
}
?>
