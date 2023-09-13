<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
    <header class="contact-form__heading">
        <h1>お問い合わせ</h1>
    </header>
    
    <div class="contact-form__content">
      <form class="form" action="/contacts/confirm" method="post">
        @csrf

        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="name" value="{{ old('name') }}" /><br/>
                    <p class="example--text">例）山田</p>
                </div>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="name" /><br/>
                    <p class="example--text">例）太郎</p>
                </div>
                <div class="form__error">
                    @error('name')
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
            <div class="form-check">
                <label class="radio-button">
                    {{ Form::radio('gender, 'male',($user->gender == 'male')? true:false, ['class' => 'radio-button__input']) }}
                    <label><input type="radio" name="gender" value="gender1">男性</label>
                    <label><input type="radio" name="gender" value="gender2">女性</label>
                </label>
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
                    <input type="email" name="email" value="{{ old('email') }}" /><br/>
                    <p class="example--text">例）test@example.com</p>
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
                <span class="form__label--item">郵便番号</span>
                <span class="form__label--requires">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <label>〒<input type="text" name="post-code" value="{{ old('post-code') }}" /></label><br/>
                    <p class="example--text">例）123-4567</p>
                </div>
                <div class="form__error">
                    @error('post-code')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">住所</span>
                <span class="form__label--requires">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="address" value="{{ old('address') }}" /><br/>
                    <p class="example--text">例）東京都渋谷区千駄ヶ谷1‐2‐3</p>
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
                    <input type="text" name="building-name" value="{{ old('building-name') }}" /><br/>
                    <p class="example--text">例）千駄ヶ谷マンション101</p>
                </div>
            </div>
            <div class="form__error">
                    @error('building-name')
                    {{ $message }}
                    @enderror
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">ご意見</span>
                <span class="form__label--requires">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <textarea name="textarea" cols="30" rows="6" value="{{ old('content') }}">
                </div>
                <div class="form__error">
                    @error('content')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>

        <div class="form__button">
            <button class="form__button-submit" type="submit">確認</button>
        </div>
      </form>
    </div>
</dody>

</html>