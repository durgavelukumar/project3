
@extends('layouts.master')


	<b>
    <a href="/">Back to Home Page</a>
	</b>
	<br>

@section('content')
	<b>
	<form method='POST' action='/lorem'>
		<input type='hidden' name='_token' value='{{ csrf_token() }}'>
	    <label for="nbrOfParagraphs">How many paragraphs do you need?</label>
		 <input id="nbrOfParagraphs" type="text" name="nbrOfParagraphs" maxlength="3" size="1" value=
                <?php
                    if (!isset($_POST["nbrOfParagraphs"]))
                        echo "5"; 
                    else
                        echo $_POST["nbrOfParagraphs"];
                ?>>
        <br>
        <input id="see_Paragraphs" type="submit" value="Get Paragraphs">
	</b>
</form>

@stop


 



