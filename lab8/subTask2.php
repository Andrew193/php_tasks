<?php

class Country
{
    private $array;

    function __construct($q, $w, $e)
    {
        $this->array = array(array($q, "Name"), array($w, "Capital"), array($e, "Capital population"));
    }

    function show()
    {
        echo "<table>";
        foreach ($this->array as $t) {
            echo "<tr>
                        <th style='padding: 10px'>
                $t[1]
                        </th>
                        <td style='padding: 10px'>
                $t[0]
                        </td>
                    </tr>";
        }
        echo "</table><br>";
    }
}

$array = array(
    new Country("test", "dest", "qest"),
    new Country("rest", "pest", "aest"),
    new Country("fest", "mest", "zest"),
    new Country("cest", "best", "iest"),
    new Country(";est", "[est", "hest"),
);

echo "<br/><div><div>";
foreach ($array as $t) {
    $t->show();
}
echo "</div></div>";
?>
