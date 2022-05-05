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

                        <table>

                            <thead>
                                <tr>
                                    <th></th>
                                    <th>G1</th>
                                    <th>G2</th>
                                    <th>G3</th>
                                    <th>G4</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Q1</td>
                                    <td>{{ count(DB::table('ninos')->select()->where('grupo', 1)->and()->where('quincena1', true)) }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
