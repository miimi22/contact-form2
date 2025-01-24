<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact-form2</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika&display=swap" rel="stylesheet">

<body>
    <header class="header">
        <div class="header__inner">
            <a href='/' class="header__logo">FashionablyLate</a>
            <a href="/register" class="register__button">register</a>
        </div>
            
    </header>
    <main>
        <div class="login__content">
            <div class="login__heading">
                <h3>Login</h3>
            </div>
        </div>

        <form action="/admin" class="login-form" method="post">
            @csrf
            <div class="login-form__item">
                <p class="login-form__title-email">メールアドレス</p>
                <input type="email" class="login-form__item-email" placeholder="例:test@example.com" value="{{ old('email') }}">
                <div class="login__error-email">
                @error('email')
                {{ $message }}
                @enderror
                </div>
                <p class="login-form__title-password">パスワード</p>
                <input type="text" class="login-form__item-password" placeholder="例:coachtech1106">
                <div class="login__error-password">
                @error('password')
                {{ $message }}
                @enderror
                </div>
                <div class="login-form__button">
                    <button class="login-form__button-submit" type="submit">ログイン</button>
                </div>
            </div>
        </form>
    </main>    
</body>
</html>