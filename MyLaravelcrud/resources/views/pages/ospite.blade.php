    @extends('layouts.main-layout')

    @section('content')
        <div class="container text-center">
            <div class="row">
                <div class="col-12">
                    <h2>Ospite:</h2>
                    <p>ID: {{ $ospite -> id }}</p>
                    <p>Data di nascita: {{ $ospite -> date_of_birth }}</p>
                    <p>Tipo documento: {{ $ospite -> document_type}}</p>
                    <p>Numero documento: {{ $ospite -> document_number }}</p>
                </div>
            </div>
        </div>
    @endsection
