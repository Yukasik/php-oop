<?php

namespace App;

class Student
{
    public string $name;
    protected int $age;

    public array $marks;

    public function __construct(string $name, int $age, array $marks = [])
    {
        $this->name = $name;
        $this->age = $age;
        $this->marks = $marks;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge(int $age)
    {
        if ($age >= 16 && $age <= 60) {
            $this->age = $age;
        }
    }

    public function learn()
    {
        echo "<p>меня зовут $this->name, мне $this->age лет. Я учусь!</p>";
    }

    public function addMark(int $mark): self
    {
        $this->marks[] = $mark;
        return $this;
    }

    public function resultMark(): string
    {
        $avg = array_sum($this->marks) / count($this->marks);
        $result = match (true) {
            $avg < 3 => "неуд",
            $avg < 3.5 => "удовл",
            $avg < 4.5 => "хорошо",
            $avg >= 4.5 => "отлично",
        };
        return $result;
    }
}
