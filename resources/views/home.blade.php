@extends('layouts.app')

@section('content')
<main class="container">
    <section class="row justify-content-center">
        <article class="col-md-8">
            <div class="card">
                <header class="card-header">{{ __('Dashboard') }}</header>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>{{ __('You are logged in!') }}</p>
                </div>
            </div>
        </article>
    </section>
</main>
@endsection
