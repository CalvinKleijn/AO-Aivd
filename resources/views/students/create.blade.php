@extends('main', ['titel' => '| Toevoegen'])

@section('content')

	<h1>Nieuwe student toevoegen</h1>

	<br>

	<form method="post" action="{{route('students.store')}}">
        @csrf

        <label for="naam">Studentennaam:</label><br>
        <input type="text" name="naam" placeholder="Studentennaam"><br><br>

        <label for="klas">Studentenklas:</label><br>
        <input type="text" name="klas" placeholder="Studentenklas"><br><br>

        <label for="voortgang">Voortgang:</label><br>
        <input type="text" name="voortgang" placeholder="Goed/Matig/Slecht"><br><br>

        <label for="resultaten">Resultaten:</label><br>
        <input type="text" name="resultaten" placeholder="Goed/Matig/Slecht"><br><br>

        <label for="werkhouding">Werkhouding:</label><br>
        <input type="text" name="werkhouding" placeholder="Goed/Matig/Slecht"><br><br>

        <label for="extrahulp">Extra hulp:</label><br>
        <input type="radio" name="extrahulp" value="Ja">Ja
        <input type="radio" name="extrahulp" value="Nee">Nee<br><br>

        <button type="submit" class="btn btn-success">Toevoegen</button>
        <a href="{{ URL::to('/') }}" class="btn btn-primary" style="width: 10%;"><i class="fas fa-backward"></i></a> 
	</form>

@endsection