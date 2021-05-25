    @extends('layouts.main-layout')
    @section('content')
        <div class="container text-center">
            <div class="row">
                <div class="col-12">
                    <h2>Nuovo ospite</h2>
                </div>
            </div>
        </div>

        <form method="POST" action="{{ route('store') }}">

            @csrf
            @method('POST')

            {{-- NOME --}}
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">Nome</label>
                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name" placeholder="inserire il nome">
                </div>
            </div>
            {{-- COGNOME --}}
            <div class="form-group row">
                <label for="lastname" class="col-md-4 col-form-label text-md-right">Cognome</label>
                <div class="col-md-6">
                    <input id="lastname" type="text" class="form-control" name="lastname" placeholder="inserire il cognome">
                </div>
            </div>
            {{-- BUTTON--}}
            <div class="form-group row">
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary">
                        CREATE
                    </button>
                </div>
            </div>
        </form>

    @endsection
