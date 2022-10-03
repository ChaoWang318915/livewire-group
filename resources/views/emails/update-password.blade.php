@php
    $link = route('login', ['email' => $email, 'password' => $password, 'token' => $token])
@endphp
<div>
    Click on this link to login into your account <a href="{{ $link }}"> {{ $link }} </a>
</div>