
@extends('layouts.master')

	<b>
    <a href="/">Back to Home Page</a>
	</b>
	<br>
	
@section('content')
	
<?php $generator = new Badcow\LoremIpsum\Generator();?>
<?php $paragraphs = $generator->getParagraphs($nbrOfParagraphs);?>
<?php echo implode('<p><b>', $paragraphs), '</b>';  ?>

@stop


 



