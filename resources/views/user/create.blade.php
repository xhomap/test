@extends('layouts.layouts')

@section('content')

    <div>
        <h4>Vytvořit uživatele</h4>

        <div>
            <form id="login-form"  action="{{ route('user.store') }}" method="POST" autocomplete="off">
                @csrf
                <div>
                    <div>
                        <label for="firstName">Jméno</label>
                        <input type="text" id="firstName" name="firstName" required>

                        <label for="lastName">Příjmení</label>
                        <input type="text" id="lastName" name="lastName" required>
                    </div>

                    <div>
                        <label for="phone">Telefon</label>
                        <select name="countryCodePhoneId">
                            @foreach($countries as $country)
                                <option value="{{ $country->id }}" @if($country->id == \App\Country::CZECH_ID) selected @endif>
                                    {{ $country->phoneCode }}
                                </option>>
                            @endforeach
                        </select>
                        <input type="text" id="phone" name="phone" required>
                    </div>

                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="Váš email" required>
                        <label for="note">Poznámka</label>

                        <textarea name="note" id="note">

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

