<?php


class ClassFan
{
    const SLOW = 1;
    const MEDIUM = 2;
    const FAST = 3;
    private int $speed;
    private bool $on;
    private float $radius;
    private string $color;

    /**
     * @param float|int $radius
     */
    public function setRadius(float|int $radius): void
    {
        $this->radius = $radius;
    }

    /**
     * @return float|int
     */
    public function getRadius(): float|int
    {
        return $this->radius;
    }

    /**
     * @param int $speed
     */
    public function setSpeed(int $speed): void
    {
        $this->speed = $speed;
    }

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * @param bool $on
     */
    public function setOn(bool $on): void
    {
        $this->on = $on;
    }

    /**
     * @return bool
     */
    public function isOn(): bool
    {
        return $this->on;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    public function __construct()
    {
        $this->speed = self::SLOW;
        $this->on = false;
        $this->radius = 5;
        $this->color = "dế lầu";
    }

    public function __toString(): string
    {
        if ($this->on){
            return "Quat da bat";
        }else{
         return "Quat ko bat";
        }
    }
}

//echo "speed: " . $this->getSpeed() .
//    " color: " . $this->getColor() .
//    " radius: " . $this->getRadius();
$fan = new ClassFan();
$fan->setOn(true);
echo $fan;