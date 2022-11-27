<?php
class car 
{
public $color;
public $position;
public $width;
public $speed;

public function __construct($c_color, $c_position, $c_width, $c_speed)
{
    $this->color = $c_color;
    $this->position = $c_position;
    $this->width = $c_width;
    $this->speed = $c_speed;
}

public function show()
{
    echo '<img class="car" 
    src="/photos/'.$this->color.'.png" 
    style="top:'.$this->position.'%;
    width:'.$this->width.'%; 
    animation-duration: calc(500s/'.$this->speed.');" />';
}


}
?>