@extends('layouts.app')
@section('title')
    <title>Summer Time - Home</title>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Contadores</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered text-center">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">G1</th>
                                    <th scope="col">G2</th>
                                    <th scope="col">G3</th>
                                    <th scope="col">G4</th>
                                    <th scope="col">Total quincenas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Q0 (27/06 -> 30/06) </th>
                                    <td>
                                        {{ Nino::where('grupo', 1)->where('quincena0', true)->count() }}
                                    </td>
                                    <td>
                                        {{ DB::table('ninos')->where('grupo', 2)->where('quincena0', true)->count() }}
                                    </td>
                                    <td>
                                        {{ DB::table('ninos')->where('grupo', 3)->where('quincena0', true)->count() }}
                                    </td>
                                    <td>
                                        {{ DB::table('ninos')->where('grupo', 4)->where('quincena0', true)->count() }}
                                    </td>
                                    <td>
                                        {{ DB::table('ninos')->where('quincena0', true)->count() }}
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Q1 (01/07 -> 15/07)</th>
                                    <td>
                                        {{ DB::table('ninos')->where('grupo', 1)->where('quincena1', true)->count() }}
                                    </td>
                                    <td>
                                        {{ DB::table('ninos')->where('grupo', 2)->where('quincena1', true)->count() }}
                                    </td>
                                    <td>
                                        {{ DB::table('ninos')->where('grupo', 3)->where('quincena1', true)->count() }}
                                    </td>
                                    <td>
                                        {{ DB::table('ninos')->where('grupo', 4)->where('quincena1', true)->count() }}
                                    </td>
                                    <td>
                                        {{ DB::table('ninos')->where('quincena1', true)->count() }}
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Q2 (18/07 -> 29/07)</th>
                                    <td>
                                        {{ DB::table('ninos')->where('grupo', 1)->where('quincena2', true)->count() }}
                                    </td>
                                    <td>
                                        {{ DB::table('ninos')->where('grupo', 2)->where('quincena2', true)->count() }}
                                    </td>
                                    <td>
                                        {{ DB::table('ninos')->where('grupo', 3)->where('quincena2', true)->count() }}
                                    </td>
                                    <td>
                                        {{ DB::table('ninos')->where('grupo', 4)->where('quincena2', true)->count() }}
                                    </td>
                                    <td>
                                        {{ DB::table('ninos')->where('quincena2', true)->count() }}
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Q3 (01/08 -> 15/08)</th>
                                    <td>
                                        {{ DB::table('ninos')->where('grupo', 1)->where('quincena3', true)->count() }}
                                    </td>
                                    <td>
                                        {{ DB::table('ninos')->where('grupo', 2)->where('quincena3', true)->count() }}
                                    </td>
                                    <td>
                                        {{ DB::table('ninos')->where('grupo', 3)->where('quincena3', true)->count() }}
                                    </td>
                                    <td>
                                        {{ DB::table('ninos')->where('grupo', 4)->where('quincena3', true)->count() }}
                                    </td>
                                    <td>
                                        {{ DB::table('ninos')->where('quincena3', true)->count() }}
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Q4 (16/08 -> 31/08) </th>
                                    <td>
                                        {{ DB::table('ninos')->where('grupo', 1)->where('quincena4', true)->count() }}
                                    </td>
                                    <td>
                                        {{ DB::table('ninos')->where('grupo', 2)->where('quincena4', true)->count() }}
                                    </td>
                                    <td>
                                        {{ DB::table('ninos')->where('grupo', 3)->where('quincena4', true)->count() }}
                                    </td>
                                    <td>
                                        {{ DB::table('ninos')->where('grupo', 4)->where('quincena4', true)->count() }}
                                    </td>
                                    <td>
                                        {{ DB::table('ninos')->where('quincena4', true)->count() }}
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Total grupos</th>
                                    <td>{{ DB::table('ninos')->where('grupo', 1)->where('quincena1', true)->count() + DB::table('ninos')->where('grupo', 1)->where('quincena2', true)->count() }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-bordered text-center">
                            <thead>
                                <th></th>
                                <th scope="row">Total grupos</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">G1</th>
                                    <td>{{ DB::table('ninos')->where('grupo', 1)->count() }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">G2</th>
                                    <td>{{ DB::table('ninos')->where('grupo', 2)->count() }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">G3</th>
                                    <td>{{ DB::table('ninos')->where('grupo', 3)->count() }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">G4</th>
                                    <td>{{ DB::table('ninos')->where('grupo', 4)->count() }}</td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
