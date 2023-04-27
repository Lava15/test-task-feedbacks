@extends('layouts.app')
<form id="contact-form" method="post"
{{--      action="{{ url('/') }}"--}}
      class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">
    @csrf
    <div class="login-wrapper wd-300 wd-xs-600 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> Отзыв <span
                class="tx-normal">]</span></div>
        <div class="tx-center mg-b-40">Форма обратной связи</div>
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="form-group">
            <label for="full_name">Ф.И.О</label>
            <input type="text" class="form-control" name="full_name" minlength="3" maxlength="50" id="full_name"
                   required>
            <p id="nameError" style="color: red; margin-top: 10px;"></p>
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" name="email" minlength="3" maxlength="50" id="email" required>
        </div>
        <div class="form-group">
            <label for="phone">Номер телефона</label>
            <input type="text" class="form-control" name="phone" id="phone-js" required>
        </div>
        <div class="form-group">
            <label for="message">Сообщение</label>
            <textarea type="text" class="form-control" minlength="3" maxlength="255" name="message" id="message"
                      cols="30" rows="10"
                      required></textarea>
        </div>

        <label for="captcha" class="captcha-title">Введите код:</label>
        <div id="captcha-code"></div>
        <input type="text" class="form-control" id="captcha" name="captcha"/>

        <button type="submit" class="btn btn-info btn-block">Отправить</button>
    </div>
</form>
{{--NAME VALIDATION--}}
<script>
    function validateName(name) {
        const regex = /^[a-zA-Zа-яА-ЯЁё' ]+$/;
        return regex.test(name);
    }

    const nameField = document.getElementById('full_name');
    const errorName = document.getElementById('nameError');

    nameField.addEventListener('blur', function () {
        if (!validateName(nameField.value)) {
            errorName.innerText = 'Введите ФИО только буквами(Латиница, кирилица)';
        }
    });
</script>
{{--MASK--}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const phoneInput = document.getElementById("phone-js");
        const phoneMask = new IMask(phoneInput, {
            mask: "+\\9\\98(00) 000-00-00",
            lazy: false,
        });
    });
</script>
CAPTCHA
<script>
    let characters =
        "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    let captcha = "";
    for (let i = 0; i < 6; i++) {
        captcha += characters.charAt(Math.floor(Math.random() * characters.length));
    }
    let captchaElem = document.querySelector("#captcha-code");
    captchaElem.innerText = captcha;

    const form = document.getElementById("contact-form");
    form.addEventListener("submit", function (event) {
        let input = document.getElementById("captcha").value;
        if (input === captcha) {
            document.getElementById("contact-form").action =
                "/";
        } else {
            event.preventDefault();
            alert("Пожалуйста введите капчу!");
            captcha = "";
            for (let i = 0; i < 6; i++) {
                captcha += characters.charAt(
                    Math.floor(Math.random() * characters.length)
                );
            }
            captchaElem.innerText = captcha;
        }
    });
</script>
