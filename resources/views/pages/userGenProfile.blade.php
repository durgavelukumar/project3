
@extends('layouts.master')

	<b>
    <a href="/">Back to Home Page</a>
	</b>
	<br>
	
@section('content')
	
<?php $faker = Faker\Factory::create();?>
<?php
for ($i=0; $i < $nbrOfUsers; $i++) {
  echo $faker->name, "<br>";
}
?>
@stop

