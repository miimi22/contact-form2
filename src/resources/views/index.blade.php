@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
        <h3>Contact</h3>
    </div>
</div>

<form action="/confirm" class="form" method="post">
    @csrf
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
                <input class="form__input--text-lastname" type="name" name="last_name" placeholder="例:山田" value="{{ old('last_name') }}" />
                <input class="form__input--text-firstname" type="name" name="first_name" placeholder="例:太郎" value="{{ old('first_name') }}" />
            </div>
            <div class="form__error">
                @error('last_name')
                {{ $message }} 
                @enderror
            </div>
            <div class="form__error">
                @error('first_name')
                {{ $message }}
                @enderror
            </div>
        </div>
    </div>
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">性別</span>
            <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
                <div class="form__input--text-man">
                    <input class="form__input--text-man" type="radio" name="gender" value="男性" checked value="{{ old('gender') }}">男性
                </div>
                <div class="form__input--text-woman">
                    <input class="form__input--text-woman" type="radio" name="gender" value="女性" value="{{ old('gender') }}">女性
                </div>
                <div class="form__input--text-other">
                    <input class="form__input--text-other" type="radio" name="gender" value="その他" value="{{ old('gender') }}">その他
                </div>
            </div>
            <div class="form__error">
                @error('gender')
                {{ $message }}
                @enderror
            </div>
        </div>
    </div>
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
                <input class="form__input--text-email" type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}" />
            </div>
            <div class="form__error">
                @error('email')
                {{ $message }}
                @enderror
            </div>
        </div>
    </div>
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
                <input class="form__input--text-tel" type="tel" name="tel" placeholder="080" value="{{ old('tel') }}" />
                <div class="form__input--text-hyphen">-</div>
                <input class="form__input--text-tel" type="tel" name="tel" placeholder="1234" value="{{ old('tel') }}" />
                <div class="form__input--text-hyphen">-</div>
                <input class="form__input--text-tel" type="tel" name="tel" placeholder="5678" value="{{ old('tel') }}" />
            </div>
            <div class="form__error">
                @error('tel')
                {{ $message }}
                @enderror
            </div>
        </div>
    </div>
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
                <input class="form__input--text-address" type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
            </div>
            <div class="form__error">
                @error('address')
                {{ $message }}
                @enderror
            </div>
        </div>
    </div>
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">建物名</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
                <input class="form__input--text-building" type="text" name="building" placeholder="例:千駄ヶ谷マンション101" />
            </div>
        </div>
    </div>
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">お問い合わせの種類</span>
            <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
                <div class="form__input--text-select">
                    <select name="kinds" value="{{ old('kinds') }}">
                        <option selected>選択してください</option>
                        @foreach ($categories as $category)
                        <option>{{$category->content}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form__error">
                @error('kinds')
                {{ $message }}
                @enderror
            </div>
        </div>
    </div>
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span>
            <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
                <textarea class="form__input--text-textarea" name="detail" placeholder="お問い合わせ内容をご記載ください" value="{{ old('detail') }}"></textarea>
            </div>
            <div class="form__error">
                @error('detail')
                {{ $message }}
                @enderror
            </div>
        </div>
    </div>
    <div class="form__button">
        <button class="form__button-submit" type="submit">確認画面</button>
    </div>
</form>
@endsection