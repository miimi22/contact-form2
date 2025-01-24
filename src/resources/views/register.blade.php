<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact-form2</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika&display=swap" rel="stylesheet">

<body>
    <header class="header">
        <div class="header__inner">
            <a href='/' class="header__logo">FashionablyLate</a>
            <a href="/login" class="login__button">login</a>
        </div>
            
    </header>
    <main>
        <div class="register__content">
            <div class="register__heading">
                <h3>Register</h3>
            </div>
        </div>

        <form action="/login" class="register-form" method="post">
            @csrf
            <div class="register-form__item">
                <p class="register-form__title-name">お名前</p>
                <input type="name" name="name" class="register-form__item-name" placeholder="例:山田　太郎" value="{{ old('name') }}">
            <div class="register__error-name">
            @error('name')
            {{ $message }}
            @enderror
            </div>
                <p class="register-form__title-email">メールアドレス</p>
                <input type="email" name="email" class="register-form__item-email" placeholder="例:test@example.com" value="{{ old('email') }}">
            <div class="register__error-email">
            @error('email')
            {{ $message }}
            @enderror
            </div>
                <p class="register-form__title-password">パスワード</p>
                <input type="text" name="password" class="register-form__item-password" placeholder="例:coachtech1106" value="{{ old('password') }}">
            <div class="register__error-password">
            @error('password')
            {{ $message }}
            @enderror
            </div>
                <div class="register-form__button">
                    <button class="register-form__button-submit" type="submit">登録</button>
                </div>
            </div>
        </form>
    </main>    
</body>
</html>