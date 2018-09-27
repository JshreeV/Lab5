<?php
/**
 * Created by PhpStorm.
 * User: Jayshree
 * Date: 2018-09-27
 * Time: 11:15 AM
 */

require_once 'person.php';

$p = new Person('Jayshree','female',23);
$p->setName('Vanneldas');
$p->setGender(Person::FEMALE);
$display = $p->display();
echo $display;