<?php


class ValueObject {
    private $red;
    private $green;
    private $blue;

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
            return true;
        } else {
            return false;
        }
    }

    public static function random() {

        return new ValueObject(rand(0,255),rand(0,255),rand(0,255));
    }

    public function mix($addedColors) {
        $mixedRed = ($this->red + $addedColors->red) / 2;
        $mixedGreen = ($this->green + $addedColors->green) / 2;
        $mixedBlue = ($this->blue + $addedColors->blue) / 2;
        return new ValueObject($mixedRed, $mixedGreen, $mixedBlue);
    }

}

$color = new ValueObject(48,73,110);

echo "<pre>";
print_r($color);
echo "</pre>\n";

echo $color->equals();

$randomColor = $color::random();
echo "<pre>";
print_r($randomColor);
echo "</pre>\n";

$mixedColor = $color->mix(new ValueObject(100,100,100));
echo "<pre>";
print_r($mixedColor);
echo "</pre>\n";