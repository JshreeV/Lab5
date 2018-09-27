<?php
/**
 * Created by PhpStorm.
 * User: Jayshree
 * Date: 2018-09-27
 * Time: 11:01 AM
 */

class Person
{

    const MALE = 'm';
    const FEMALE = 'f';
    private $name;
    private $gender;
    private $age;
    private static $count = 1;

    public function __construct($name, $gender, $age)
    {
        $this->age = $age;
        $this->name = $name;
        $this->setGender($gender);
        self::$count++;
    }

    public static function getCount()
    {
        return self::$count;
    }

    public function display()
    {
        return "Name: " . $this->name . " Gender: " . $this->gender . " Age: " . $this->age;
    }

    public function setName($value)
    {
        $this->name = $value;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setGender($value)
    {
        if ($value == self::MALE || $value == self::FEMALE) {
            $this->gender = $value;
        }
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function __destruct()
    {
        echo "close database";
    }
}