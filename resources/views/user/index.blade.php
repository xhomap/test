@extends('layouts.layouts')

@section('content')

    <div>
        <div>
            <div>
                <h4>Uživatelé</h4>
            </div>
            <div>
                <a href="{{route('user.create')}}">Přidat nového uživatele</a>
            </div>
        </div>

        <div>
            <table>
                <thead>
                <tr>
                    <th>Jméno</th>
                    <th>Telefonní číslo</th>
                    <th>Email</th>
                    <th>Poznámka</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <th> {{ $user->name }} </th>
                        <th> {{ $user->phoneWithPrefix }} </th>
                        <th> {{ $user->email }} </th>
                        <th> {{ $user->note }} </th>
                        <th>
                            <a href="{{ route('user.edit', [$user->id, strtolower($user->firstName),]) }}">Upravit</a>
                            <a href="{{ route('user.delete', $user->id) }}">Smazat</a>
                        </th>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {!! $users->links('layouts.pagination') !!}
        </div>
    </div>

@endsection
