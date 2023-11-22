<?php


class ValueObject {
    private int $red;
    private int $green;
    private int $blue;

    public function __construct($red, $green, $blue) {
        $this->red = $red;
        $this->green = $green;
        $this->blue = $blue;
    }

    public function setRed() {
        if ($this->red >= 0 && $this->red <=255) {
            echo "Red is valid\n";
        } else {
            echo "Red is NOT valid\n";
        }
    }
    public function setGreen() {
        if ($this->green >= 0 && $this->green <=255) {
            echo "Green is valid\n";
        } else {
            echo "Green is NOT valid\n";
        }
    }
    public function setBlue() {
        if ($this->blue >= 0 && $this->blue <=255) {
            echo "Blue is valid\n" ;
        } else {
            echo "Blue is NOT valid\n";
        }
    }

    public function getRed() {
        echo $this->red . PHP_EOL;
    }

    public function getGreen() {
        echo $this->green . PHP_EOL;
    }

    public function getBlue() {
        echo $this->blue . PHP_EOL;
    }

    public function equals() {
        if ($this->red == $this->green && $this->green == $this->blue) {
            echo "colors are equal";
        } else {
            echo "colors are NOT equal";
        }
    }

    public function rand() {

    }

}

$color = new ValueObject(252,252,252);

echo "<pre>";
print_r($color);
echo "</pre>\n";

$color->setRed();
$color->setGreen();
$color->setBlue();

$color->getRed();
$color->getGreen();
$color->getBlue();

$color->equals();

