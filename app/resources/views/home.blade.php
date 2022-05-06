@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Aquí irán los contadores') }}

                        <table class="table table-striped table-bordered text-center">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>G1</th>
                                    <th>G2</th>
                                    <th>G3</th>
                                    <th>G4</th>
                                    <th>Total quincenas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Q1</th>
                                    <td>{{ count(DB::table('ninos')->select()->where('grupo', 1)->where('quincena1', true)->get()) }}</td>
                                    <td>{{ count(DB::table('ninos')->select()->where('grupo', 2)->where('quincena1', true)->get()) }}</td>
                                    <td>{{ count(DB::table('ninos')->select()->where('grupo', 3)->where('quincena1', true)->get()) }}</td>
                                    <td>{{ count(DB::table('ninos')->select()->where('grupo', 4)->where('quincena1', true)->get()) }}</td>
                                    <td>{{ count(DB::table('ninos')->select()->where('quincena1', true)->get()) }}</td>
                                </tr>
                                <tr>
                                    <th>Q2</th>
                                    <td>{{ count(DB::table('ninos')->select()->where('grupo', 1)->where('quincena2', true)->get()) }}</td>
                                    <td>{{ count(DB::table('ninos')->select()->where('grupo', 2)->where('quincena2', true)->get()) }}</td>
                                    <td>{{ count(DB::table('ninos')->select()->where('grupo', 3)->where('quincena2', true)->get()) }}</td>
                                    <td>{{ count(DB::table('ninos')->select()->where('grupo', 4)->where('quincena2', true)->get()) }}</td>
                                    <td>{{ count(DB::table('ninos')->select()->where('quincena2', true)->get()) }}</td>
                                </tr>
                                <tr>
                                    <th>Q3</th>
                                    <td>{{ count(DB::table('ninos')->select()->where('grupo', 1)->where('quincena3', true)->get()) }}</td>
                                    <td>{{ count(DB::table('ninos')->select()->where('grupo', 2)->where('quincena3', true)->get()) }}</td>
                                    <td>{{ count(DB::table('ninos')->select()->where('grupo', 3)->where('quincena3', true)->get()) }}</td>
                                    <td>{{ count(DB::table('ninos')->select()->where('grupo', 4)->where('quincena3', true)->get()) }}</td>
                                    <td>{{ count(DB::table('ninos')->select()->where('quincena3', true)->get()) }}</td>
                                </tr>
                                <tr>
                                    <th>Q4</th>
                                    <td>{{ count(DB::table('ninos')->select()->where('grupo', 1)->where('quincena4', true)->get()) }}</td>
                                    <td>{{ count(DB::table('ninos')->select()->where('grupo', 2)->where('quincena4', true)->get()) }}</td>
                                    <td>{{ count(DB::table('ninos')->select()->where('grupo', 3)->where('quincena4', true)->get()) }}</td>
                                    <td>{{ count(DB::table('ninos')->select()->where('grupo', 4)->where('quincena4', true)->get()) }}</td>
                                    <td>{{ count(DB::table('ninos')->select()->where('quincena4', true)->get()) }}</td>
                                </tr>
                                <tr>
                                    <th>Total grupos</th>
                                    <td>{{ count(DB::table('ninos')->select()->where('grupo', 1)->get()) }}</td>
                                    <td>{{ count(DB::table('ninos')->select()->where('grupo', 2)->get()) }}</td>
                                    <td>{{ count(DB::table('ninos')->select()->where('grupo', 3)->get()) }}</td>
                                    <td>{{ count(DB::table('ninos')->select()->where('grupo', 4)->get()) }}</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
