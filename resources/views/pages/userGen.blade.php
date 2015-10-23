
@extends('layouts.master')


	<b>
    <a href="/">Back to Home Page</a>
	</b>
	<br>

@section('content')
	<b>
	<form method='POST' action='/userGen'>
		<input type='hidden' name='_token' value='{{ csrf_token() }}'>
	    <label for="nbrOfParagraphs">How many users do you need?</label>
		 <input id="nbrOfParagraphs" type="text" name="nbrOfUsers" maxlength="3" size="1" value=
                <?php
                    if (!isset($_POST["nbrOfUsers"]))
                        echo "5"; 
                    else
                        echo $_POST["nbrOfUsers"];
                ?>>
        <br>    
        <input id="see_Users" type="submit" value="Get Users">
	</b>
</form>

@stop


 



