<?php

namespace App;

class Tutor extends Student
{
    public string $group;

    public function __construct(string $name, int $age, array $marks = [], string $group = "")
    {
        parent::__construct($name, $age, $marks);
        $this->group = $group;
    }

    public function learn()
    {
        echo "<p>меня зовут $this->name, мне $this->age лет. Я учусь и помогаю учиться другим!</p>";
    }
}
