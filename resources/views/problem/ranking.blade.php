@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Ranking do problema</div>

                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Poição</th>
                                    <th>Nome </th>
                                    <th>Pontuação</th>
                                    <th>data</th>
                                    <th>Tentativas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> 1º </td>
                                    <td>José </td>
                                    <td><code> 12 pt </code></td>
                                    <td> 05/08/2017</td>
                                    <td> #3 </td>
                                </tr>
                                <tr>
                                    <td> 2º </td>
                                    <td>João </td>
                                    <td><code> 9 pt </code></td>
                                    <td> 05/08/2017</td>
                                    <td> #3 </td>
                                </tr>
                                <tr>
                                    <td> 3º </td>
                                    <td> Maria </td>
                                    <td><code> 3 pt </code></td>
                                    <td> 05/08/2017</td>
                                    <td> #9 </td>
                                </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection