    @extends('layouts.main-layout')

    @section('content')
        <div class="container text-center">
            <div class="row">
                <div class="col-12">
                    <h2>Lista ospiti:</h2>
                    <ul>
                        @foreach($ospiti as $ospite)
                            <li>
                                {{ $ospite -> name }}
                                {{ $ospite -> lastname }}
                            </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    @endsection
