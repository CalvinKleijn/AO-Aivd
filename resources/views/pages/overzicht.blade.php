@extends('main', ['titel' => '| Overzicht'])

@section('content')
            <form action="/overzichtrequest.php">   
                <table class="table">
                    <thead>
                        <tr>
                            <th>Leerlingen</th>
                            <th>Voortgang</th>
                            <th>Resultaten</th>
                            <th>Werkhouding</th>
                            <th>Extra hulp</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Calvin</th>
                            <td ><input type="radio"></td>
                            <td><input type="radio"></td>
                            <td><input type="radio"></td>
                            <td><input type="radio"></td>
                            <td><a class="btn btn-success" href="#" role="button">Opslaan</a></td>
                        </tr>
                        <tr>
                            <th>Jelmer</th>
                            <td><input type="radio"></td>
                            <td><input type="radio"></td>
                            <td><input type="radio"></td>
                            <td><input type="radio"></td>
                            <td><a class="btn btn-success" href="#" role="button">Opslaan</a></td>
                        </tr>
                        <tr>
                            <th>Merijn</th>
                            <td><input type="radio"></td>
                            <td><input type="radio"></td>
                            <td><input type="radio"></td>
                            <td><input type="radio"></td>
                            <td><a class="btn btn-success" href="#" role="button">Opslaan</a></td>
                        </tr>
                        <tr>
                            <th>Marko</th>
                            <td><input type="radio"></td>
                            <td><input type="radio"></td>
                            <td><input type="radio"></td>
                            <td><input type="radio"></td>
                            <td><a class="btn btn-success" href="#" role="button">Opslaan</a></td>
                        </tr>
                        <tr>
                            <th>Dilano</th>
                            <td><input type="radio"></td>
                            <td><input type="radio"></td>
                            <td><input type="radio"></td>
                            <td><input type="radio"></td>
                            <td><a class="btn btn-success" href="#" role="button">Opslaan</a></td>
                        </tr>
                    </tbody>
                </table>
            </form>
            <div class="button">
                <br>
                <a type="create" class="btn btn-primary">Create</a>
            </div>
@endsection