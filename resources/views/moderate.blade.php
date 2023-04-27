@extends('layouts.app')

<div class="br-contentpanel">
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5 text-center">Модерация обратной связи</h4>
    </div>

    <div class="br-pagebody pd-x-20 pd-sm-x-30 container-xl">
        <div class="card bd-0 shadow-base">
            <table class="table mg-b-0 table-contact">
                <thead>
                <tr>
                    <th class="tx-10-force tx-mont tx-medium">Ф.И.О</th>
                    <th class="tx-10-force tx-mont tx-medium hidden-xs-down">Номер телефона</th>
                    <th class="tx-10-force tx-mont tx-medium hidden-xs-down">E-mail</th>
                    <th class="tx-10-force tx-mont tx-medium hidden-xs-down">Сообщение</th>
                    <th class="tx-10-force tx-mont tx-medium hidden-xs-down">Ответ</th>
                </tr>
                </thead>
                <tbody>
                @forelse($feedbacks as $feedback)
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="mg-l-15">
                                    <div class="tx-inverse">Katherine Lumaad</div>
                                </div>
                            </div>
                        </td>
                        <td class="valign-middle hidden-xs-down">+1 234 6789</td>
                        <td class="valign-middle hidden-xs-down">$23,000</td>
                        <td class="valign-middle hidden-xs-down w-25">Lorem ipsum dolor sit amet, consectetur adi quasi
                            uLorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda ea maxime minima
                            obcaecati pariatur, quasi u quasi ut. Aliquam assumenda blanditiis dolorum, earum esse
                            excepturi maxime nostrum odio perspiciatis quasi temporibus, voluptates?
                        </td>
                        <td class="valign-middle hidden-xs-down">
                            <form action="{{route('accept-feedback', $feedback)}}" method="post">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-primary">Одобрить</button>
                            </form>
                            <form action="{{route('reject-feedback', $feedback)}}" method="post">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-danger">Отказать</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <div class="alert alert-primary text-dark" role="alert">
                            Сейчас нету заявок
                        </div>
                    </tr>
                @endforelse

                </tbody>
            </table>
        </div>
    </div><!-- br-pagebody -->
</div>

