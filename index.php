<?php

abstract class Figure
{
    protected $_params;
    abstract public function draw();

    public function setParams(array $params)
    {
        $this->_params = $params;
    }
}

class Square extends Figure{
    public function draw()
    {
       echo 'Square';
    }
}

class Triangle extends Figure
{
    public function draw()
    {
        echo 'Triangle';
    }
}

class Circle extends Figure
{
    public function draw()
    {
        echo 'Circle';
    }
}

$figures = [
    'square'=>['params'=>[23,43,54,76]],
    'triangle'=>['params'=>[23,43,54,76]],
    'circle'=>['params'=>[23,43,54,76]],
];

foreach ($figures as $figure=>$params){
    $className = ucfirst($figure);
    if(class_exists($className))
    {
        $class = new $className();
        $class->setParams($params['params']);
        $class->draw();
    }
}