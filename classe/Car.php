<?php
class Car
{
    #region CONST */
    const MAX_SPEED = 80;
    const COLORS = ["black", "yellow", "red", "white"];
    #endregion CONST */

    #region PROPERTIES */
    private $color;
    protected $p1;
    private $p2 = "private";
    #endregion PROPERTIES */

    #region METHODS */

    #region GETTER / SETTER */
    public function getP2() {
        return $this->p2;
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        if ($this->isColorAllow($color)) {
            $this->color = $color;
        }
    }
    #endregion GETTER / SETTER */

    public function __construct($color = null)
    {
        if ($this->isColorAllow($color)) {
            $this->color = $color;
        } else {
            $this->color = $this->getRandomColorAllowed();
        }
    }

    public function __destruct()
    {
        //echo "An old god is gone...";
        //echo '<br />';
    }

    public function start()
    {
        return "started";
    }

    public function stop()
    {
        return "stopped";
    }

    private function getRandomColorAllowed() {
        return self::COLORS[mt_rand(0, count(self::COLORS) - 1)];
    }

    private function isColorAllow($color) {
        return in_array($color, self::COLORS);
    }
    #endregion METHODS */
}