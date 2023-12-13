@extends('layout')
@section('main')
    <div class="card p-4">
        <div class="card-body">
            <a class="" href="/"><i class="bi bi-arrow-left"></i></a>
            <h5 class="card-title text-center">Registrierung</h5>
            <form method="post" action="/register">
                @csrf
                @error('error')
                    <div class="btn btn-danger">{{ $message }}
                    </div>
                @enderror
                @error('email')
                    <div class="btn btn-danger">{{ $message }}
                    </div>
                @enderror
                <div class="mb-3">
                    <label for="inputEmail" class="form-label">E-Mail-Adresse</label>
                    <input name="email" type="email" class="form-control form-input" id="inputEmail"
                        placeholder="name@example.com" value={{ old('email') }}>
                </div>
                @error('password')
                    <div class="btn btn-danger">{{ $message }}
                    </div>
                @enderror
                <div class="mb-3">
                    <label for="inputPassword" class="form-label">Passwort</label>
                    <input name="password" type="password" class="form-control form-input" id="inputPassword"
                        placeholder="*******" value={{ old('password') }}>
                </div>
                @error('password_confirmation')
                    <div class="btn btn-danger">{{ $message }}
                    </div>
                @enderror
                <div class="mb-3">
                    <label for="inputPasswordRe" class="form-label">Passwort wiederholen</label>
                    <input name="password_confirmation" type="password" class="form-control form-input" id="inputPasswordRe"
                        placeholder="*****" value={{ old('password_confirmation') }}>
                </div>

                <hr>

                @error('street')
                    <div class="btn btn-danger">{{ $message }}
                    </div>
                @enderror
                <div class="mb-3">
                    <label for="street" class="form-label">Straße & Hausnummer</label>
                    <input name="street" type="text" class="form-control form-input" id="street"
                        placeholder="Musterstraße 1" value={{ old('street') }}>
                </div>
                @error('city')
                    <div class="btn btn-danger">{{ $message }}
                    </div>
                @enderror
                <div class="mb-3">
                    <label for="city" class="form-label">Stadt</label>
                    <input name="city" type="text" class="form-control form-input" id="city"
                        placeholder="Musterstadt" value={{ old('city') }}>
                </div>
                @error('zip')
                    <div class="btn btn-danger">{{ $message }}
                    </div>
                @enderror
                <div class="mb-3">
                    <label for="zip" class="form-label">Postleitzahl</label>
                    <input name="zip" type="text" class="form-control form-input" id="zip" placeholder="1230" value={{ old('zip') }}>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Einloggen</button>
                </div>
            </form>
        </div>
    </div>
    
    {{-- <style>
        #body * :not(.btn, i) {
            color: inherit!important;
            background-color: inherit!important;
        }

    </style> --}}
@endsection
