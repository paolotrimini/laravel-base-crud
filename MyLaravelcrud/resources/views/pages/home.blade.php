    @extends('layouts.main-layout')

    @section('content')
        <div class="container text-center">
            <div class="row">
                <div class="col-12">
                    <h2>Lista ospiti:</h2>
                    <ul>
                        @foreach($ospiti as $ospite)
                            <li>
                                <a href="{{ route('ospite', $ospite -> id) }}">
                                    {{ $ospite -> name }}
                                    {{ $ospite -> lastname }}
                                </a>
                            </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    @endsection
