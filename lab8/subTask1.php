<?php

class MTable
{
    private $count;

    function __construct($count)
    {
        if (is_numeric($count)) {
            $this->count = $count;
        } else {
            $this->count = 0;
        }
    }

    function show()
    {
        if ($this->count != 0) {
            for ($i = 1; $i <= 1; $i++) {
                echo "<div
    style='
    margin: 10px;
    border: 1px solid black;
    border-radius: 5px 10px;
    min-width: 120px;
    text-align: center;
    '>";
                for ($i = 1; $i <= 10; $i++) {
                    $temp = $this->count * $i;
                    echo "<p>$this->count * $i = $temp</p>";
                }
                echo "</div></br>";
            }
            echo "<br>";
        } else {
            echo "<h4 style='color: red'>Not a number</h4><br>";
        }
    }
}

$one = new MTable(1);
$two = new MTable(2);

echo "<br/><div><div>";
$one->show();
$two->show();
echo "</div></div>";
?>
