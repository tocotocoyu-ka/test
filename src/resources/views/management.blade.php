<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/management.css') }}" />
</head>

<body>
    <header class="management__header">
        <div class="management__header-logo">
            <h2>管理システム</h2>
        </div>
    </header>

    <div class="management-form__content">
        <form class="management">

          <div class="management__group">
            <div class="management__group-title">
                <span class="management__label--item">お名前</span>
            </div>
            <div class="management__group-content">
                <div class="management__input--text">
                    <input type="text" name="name" />
                </div>
            </div>
          </div>
        

    <div class="management__group">
            <div class="management__group-title">
                <span class="management__label--item">性別</span>
            </div>
            <div class="form-check">
                <label class="radio-button">
                    {{ Form::radio('gender, 'male',($user->gender == 'male')? true:false, ['class' => 'radio-button__input']) }}
                    <label><input type="radio" name="gender" value="gender1">全て</label>
                    <label><input type="radio" name="gender" value="gender2">男性</label>
                    <label><input type="radio" name="gender" value="gender3">女性</label>
                </label>
            </div>
    </div>

    <div class="management__group">
            <div class="management__group-title">
                <span class="management__label--item">登録日</span>
            </div>
            <div class="management__group-content">
                <div class="management__input--text">
                    <input type="text" name="date" /><span>~</span><input type="text" name="date" />
                </div>
            </div>
    </div>

    <div class="management__group">
            <div class="management__group-title">
                <span class="management__label--item">メールアドレス</span>
            </div>
            <div class="management__group-content">
                <div class="management__input--text">
                    <input type="email" name="email" />
                </div>
            </div>
    </div>

    <div class="management__button">
            <button class="management__button-submit" type="submit">検索</button>
    </div>

    <a href="#">リセット</a>