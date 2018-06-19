@extends('main', ['titel' => '| Overzicht'])

@section('content')

            <h1>Overzicht</h1>

            @if (session('status'))
                <div class="alert alert-success">
                <a href="/" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('status') }}
                </div>
            @endif

            <form action="#">   
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Leerlingen</th>
                            <th>Klas</th>
                            <th>Voortgang</th>
                            <th>Resultaten</th>
                            <th>Werkhouding</th>
                            <th>Extra hulp</th>
                            <th>Functies</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($students as $student)
                        <tr>
                            <th>{{$student->naam}}</th>
                            <th>{{$student->klas}}</th>
                            <td>{{$student->voortgang}}</td>
                            <td>{{$student->resultaten}}</td>
                            <td>{{$student->werkhouding}}</td>
                            <td>{{$student->extrahulp}}</td>
                            <td style="position:relative; left: 10px;">
                                <span><a href="{{route('students.edit', ['id' => $student->id])}}" style="color:#3490DC"><i class="fas fa-pencil-alt"></i></a></span>
                                <span><a href="{{route('students.destroy', ['id' => $student->id])}}" style="color:#E3342F"><i class="fas fa-trash-alt"></i></a></span>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </form>
            <span><a href="{{ route('students.create') }}" class="btn btn-primary" style="width: 10%;"><i class="fas fa-user-plus"></i></a></span>
@endsection