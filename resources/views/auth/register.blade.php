@extends("layout")

@section("title", "page d'inscription")

@section("body")

    <h1 class="text-center">page d'inscription</h1>

    <form action="" method="post">
        @csrf
        @include("components.input", ["name" => "username", "label" => "Nom d'utlisateur", "value" => old("username")])
        @include("components.input", [
                                      "name" => "email",
                                      "label" => "Votre email",
                                      "type" => "email",
                                      "value" => old("email")
                                     ])
        @include("components.input", ["name" => "password",
                                      "label" => "Mote de passe",
                                      "type" => "password",
                                      "value" => old("password")
                                      ])
        <button class="btn btn-outline-success" type="submit">Inscription</button>

    </form>


@endsection
