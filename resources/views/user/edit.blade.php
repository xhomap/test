@extends('layouts.layouts')

@section('content')

<div>
    <h4>Upravit uživatele {{ $user->name}}</h4>

    <div>
        <form id="login-form"  action="{{ route('user.store', $user->id) }}" method="POST" autocomplete="off">
            @csrf
            @method('PATCH')
            <div>
                <div>
                    <label for="firstName">Jméno</label>
                    <input type="text" id="firstName" name="firstName" value="{{ $user->firstName }}" required>

                    <label for="lastName">Příjmení</label>
                    <input type="text" id="lastName" name="lastName" value="{{ $user->lastName }}" required>
                </div>

                <div>
                    <label for="phone">Telefon</label>
                    <select name="countryCodePhoneId">
                        @foreach($countries as $country)
                            <option value="{{ $country->id }}" @if($user->phoneCountry->id == $country->id) selected @endif>
                                {{ $country->phoneCode }}
                            </option>>
                        @endforeach
                    </select>

                    <input type="text" id="phone" name="phone" value="{{ $user->phone }}" required>
                </div>

                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Váš email" value="{{ $user->email }}" required>
                    <label for="note">Poznámka</label>
                    <textarea name="note" id="note">
                        {{ $user->note }}
                    </textarea>
                </div>

                <div>
                    <button type="submit">Uložit</button>
                    <a href="{{ URL::previous() }}">Zpět</a>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection

