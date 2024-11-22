<div>
    <h1> {{ __('ui.Un utente ha chiesto di lavorare con noi')}}</h1>
    <h2>{{ __('ui.Ecco i suoi dati')}}:</h2>
    <p>{{__('ui.Nome')}}: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    <p>{{__('ui.Nome')}}: {{ $question }}</p>
    <p>{{__('ui.se vuoi renderl* revisor, clicca qui')}}:</p>
    <a href="{{ route('make.revisor', compact('user')) }}">{{ __('ui.Rendi revisor')}}</a>
</div>