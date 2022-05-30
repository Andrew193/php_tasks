<?php

class Calculator
{
    private $firstNumber;
    private $secondNumber;

    function __construct($firstNumber, $secondNumber)
    {
        if (is_numeric($firstNumber) && is_numeric($secondNumber)) {
            $this->firstNumber = $firstNumber;
            $this->secondNumber = $secondNumber;
        } else {
            $this->firstNumber = 0;
            $this->secondNumber = 0;
        }
    }

    function addition()
    {
        echo "<h5>" . ("$this->firstNumber + $this->secondNumber " . ($this->firstNumber + $this->secondNumber)) . "</h5>";
    }

    function subtraction()
    {
        echo "<h5>" . ("$this->firstNumber - $this->secondNumber =" . ($this->firstNumber - $this->secondNumber)) . "</h5>";
    }

    function helper($text)
    {
        if ($this->secondNumber != 0) {
            echo $text;
        } else {
            echo "<h4 style='color: red'>(/)<br>Error! Divison by zero</h4>";
        }
    }

    function division()
    {
        $this->helper("<h5>" . "$this->firstNumber / $this->secondNumber =" . $this->firstNumber / $this->secondNumber . "</h5>");
    }

    function modularDivison()
    {
        $this->helper("<h5>" . "$this->firstNumber % $this->secondNumber =" . $this->firstNumber % $this->secondNumber . "</h5>");
    }

    function rootExtraction()
    {
        if ($this->firstNumber >= 0 && $this->secondNumber >= 0) {
            echo "<h5>sqrt($this->firstNumber) = " . round(sqrt($this->firstNumber), 3) . "</h5>";
            echo "<h5>sqrt($this->secondNumber) = " . round(sqrt($this->secondNumber), 3) . "</h5>";
        } else {
            echo "<h4 style='color: red'>(sqrt)<br>Error! Numbers must be >= 0</h4>";
        }
    }

    function pow()
    {
        echo "<h5>" . "$this->firstNumber ^ $this->secondNumber =" . pow($this->firstNumber, $this->secondNumber) . "</h5>";
    }

    function test()
    {
        echo "<div style='border: solid green; padding: 10px'>";
        $this->addition();
        $this->subtraction();
        $this->division();
        $this->modularDivison();
        $this->rootExtraction();
        $this->pow();
        echo "</div><br>";
    }
}

$one = new Calculator(2, 2);

echo "<br/><div><div>";
$one->test();
echo "</div></div>";
?>
