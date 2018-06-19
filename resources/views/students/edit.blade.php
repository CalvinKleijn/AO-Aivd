@extends('main', ['titel' => '| Bewerken'])

@section('content')

    <h1>Student bewerken</h1>

    <form method="post" action="{{route('students.update', ['id' => $students->id])}}">
        {{csrf_field()}}
        
        <label for="naam">Studentennaam:</label><br>
        <input type="text" name="naam" value="{{$students->naam}}"><br><br>

        <label for="klas">Studentenklas:</label><br>
        <input type="text" name="klas" value="{{$students->klas}}"><br><br>

        <label for="voortgang">Voortgang:</label><br>
        <input type="text" name="voortgang" value="{{$students->voortgang}}"><br><br>

        <label for="resultaten">Resultaten:</label><br>
        <input type="text" name="resultaten" value="{{$students->resultaten}}"><br><br>

        <label for="werkhouding">Werkhouding:</label><br>
        <input type="text" name="werkhouding" value="{{$students->werkhouding}}"><br><br>

        <label for="extrahulp">Extra hulp:</label><br>
        <input type="radio" name="extrahulp" value="Ja">Ja
        <input type="radio" name="extrahulp" value="Nee">Nee<br><br>

        <button type="submit" class="btn btn-success">Bewerken</button>
        <a href="{{ URL::to('/') }}" class="btn btn-primary" style="width: 10%;"><i class="fas fa-backward"></i></a> 
    </form>

@endsection

