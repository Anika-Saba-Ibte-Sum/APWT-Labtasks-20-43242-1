<?php
class Person {
  // Properties
  private $name;
  private $id;
  private $age;
  private $gender;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }

  function set_id($id) {
    $this->id = $id;
  }
  function get_id() {
    return $this->id;
  }

  function set_age($age) {
    $this->age = $age;
  }
  function get_age() {
    return $this->age;
  }

  function set_gender($gender) {
    $this->gender = $gender;
  }
  function get_gender() {
    return $this->gender;
  }
}

$Anika = new Person();
$Anika->set_name('Anika Saba Ibte Sum');
echo $Anika->get_name();
echo "<br>";

$pid = new Person();
$pid->set_name(20432421);
echo $pid->get_name();
echo "<br>";

$page = new Person();
$page->set_name(23);
echo $page->get_name();
echo "<br>";

$pgender = new Person();
$pgender->set_name('Female');
echo $pgender->get_name();
echo "<br>";

?>