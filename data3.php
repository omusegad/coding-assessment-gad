<?php

require_once('Person.php');

$alice = new Person(0, 'Alice');
$bob = new Person(1, 'Bob');
$carlos = new Person(2, 'Carlos');
$carol = new Person(3, 'Carol');
$charlie = new Person(4, 'Charlie');
$chuck = new Person(5, 'Chuck');
$dave = new Person(6, 'Dave');
$eve = new Person(7, 'Eve');
$mallory = new Person(8, 'Mallory');
$peggy = new Person(9, 'Peggy');
$trent = new Person(10, 'Trent');
$victor = new Person(11, 'Victor');
$walter = new Person(12, 'Walter');

$a_team = new Person(90, 'The A-Team', [$alice, $bob, $carlos]);
$b_team = new Person(91, 'The B-Team', [$peggy, $trent, $victor]);
$c_team = new Person(92, 'The C-Team', [$charlie, $eve, $a_team]);

array_push($a_team->members, $b_team);
array_push($b_team->members, $c_team);

$people = [$alice, $bob, $carlos, $carol, $charlie, $chuck, $dave, $eve, $mallory,
           $peggy, $trent, $victor, $walter, $a_team, $b_team, $c_team]

?>