@extends('layouts.app')


<div class="br-header container">
    <div class="input-group mx-auto wd-500 transition">
        <input id="searchbox" type="text" class="form-control " placeholder="Search">
        <button class="btn btn-dark" type="button">Поиск</button>
    </div>
</div>

<div class="br-contentpanel">
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <h4 class="tx-gray-800 mg-b-5 text-center">Комментарии клиентов</h4>
    </div>

    <div class="d-flex align-items-center justify-content-start pd-x-20 pd-sm-x-30 pd-t-25 mg-b-20 mg-sm-b-30">
            <div class="container">
                @forelse($feedbacks as $comment)

                <div class="card mb-5">
                    <div class="card-body">

                            <div class="col-md-2 mx-auto">
                                <img src="https://www.gravatar.com/avatar/d=identicon"
                                     class="img img-rounded ml-5 img-fluid"/>
                                <p class="text-secondary text-center">{{$comment->created_at->diffForHumans()}}</p>
                            </div>
                            <div class="col-md-10">
                                <p class="float-left">{{$comment->full_name}}</p>
                                <div class="clearfix"></div>
                                <p>{{$comment->message}}</p>
                            </div>


                    </div>

                </div>
                @empty
                    <div class="pd-x-20 pd-sm-x-30 pd-t-20 mx-auto pd-sm-t-30">
                        <h4 class="tx-gray-800 mg-b-5 text-info text-center">Сейчас нет комментариев</h4>
                    </div>
                @endforelse
                    {{$feedbacks->links()}}

            </div>
    </div>
</div>

