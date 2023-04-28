@extends('layouts.app')


<div class="br-contentpanel">
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5 text-center">Комментарии клиентов</h4>
    </div>

    <div class="d-flex align-items-center justify-content-start pd-x-20 pd-sm-x-30 pd-t-25 mg-b-20 mg-sm-b-30">
            <div class="container">
                @if($result )
                <div class="card mb-5">
                    <div class="card-body">
                            <div class="col-md-2 mx-auto">
                                <img src="https://www.gravatar.com/avatar/d=identicon"
                                     class="img img-rounded ml-5 img-fluid"/>
                                <p class="text-secondary text-center">{{$result->created_at->diffForHumans()}}</p>
                            </div>
                            <div class="col-md-10">
                                <p class="float-left">{{$result->full_name}}</p>
                                <div class="clearfix"></div>
                                <p>{{$result->message}}</p>
                            </div>
                    </div>
                </div>
                @else
                    <div class="pd-x-20 pd-sm-x-30 pd-t-20 mx-auto pd-sm-t-30">
                        <h4 class="tx-gray-800 mg-b-5 text-info text-center">Ничего не найдено</h4>
                    </div>
                @endif
            </div>
    </div>
</div>

