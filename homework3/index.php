<?php
class Color
{
    private int $red;
    private int $green;
    private int $blue;


    private function setRed(int $red):self
    {
        if (!intdiv($red, 255)) $this->red = $red;
        else echo "Input number in range 0-255.<br>";
        return $this;
    }

    private function setGreen(int $green):self
    {
        if (!intdiv($green, 255)) $this->green = $green;
        else echo "Input number in range 0-255.<br>";
        return $this;
    }

    private function setBlue(int $blue):self
    {
        if (!intdiv($blue, 255)) $this->blue = $blue;
        else echo "Input number in range 0-255.<br>";
        return $this;
    }

    public function __construct($red, $green, $blue)
    {
        $this->setRed($red)
            ->setGreen($green)
            ->setBlue($blue);
    }

    public function getRed():int
    {
        return $this->red;
    }

    public function getGreen():int
    {
        return $this->green;
    }

    public function getBlue():int
    {
        return $this->blue;
    }

    public function mixColor(Color $color):self
    {
        $this->setRed(($this->getRed()+$color->getRed())/2);
        $this->setGreen(($this->getGreen()+$color->getGreen())/2);
        $this->setBlue(($this->getBlue()+$color->getBlue())/2);
        return $this;
    }
}

$color1 = new Color(10, 20, 30);
$color2 = new Color(90, 200, 80);

$mixedColor = $color2->mixColor($color1);
?>

<body style="background-color:rgb(<?php echo $mixedColor->getRed().", ".$mixedColor->getGreen().", ".$mixedColor->getBlue(); ?>)">