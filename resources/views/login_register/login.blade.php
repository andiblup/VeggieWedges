@extends('layout')

{{-- @section('header')
    <div class="d-flex  m-4">
        <a class="btn" href="/"><i class="bi bi-arrow-left"></i></a>
    </div>
@endsection --}}

@section('main')
    <div class="card p-4">
        <div class="card-body @if (session()->get('darkMode') == true) dark-mode @else light-mode @endif">
            
            {{-- <span class="d-inline-flex  m-4">
                <a class="btn" href="/"><i class="bi bi-arrow-left"></i></a>
            </span> --}}
            <a class="" href="/"><i class="bi bi-arrow-left"></i></a>
            <h5 class="card-title text-center">Login</h5>
            <form method="post" action="/login">
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
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Einloggen</button>
                </div>
            </form>
        </div>
    </div>

    {{-- <script>
        if (localStorage.getItem('darkMode') === 'enabled') {
            localStorage.setItem('darkMode', isDarkMode ? 'disabled' : 'enabled');
            document.body.classList.add('dark-mode');
            document.getElementById("darkModeToggle").checked = true;
            
        }
    </script> --}}
@endsection
