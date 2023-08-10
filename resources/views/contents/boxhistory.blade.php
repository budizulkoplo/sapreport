@extends('index')

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>{{$datas['title']}}</h2>
        <ol class="breadcrumb">
            <li>
                <a href="\">Home</a>
            </li>
            <li class="active">
                {{-- <strong>{{$title}}</strong> --}}
            </li>
        </ol>
    </div>
    <div class="col-sm-8">
        <div class="title-action">
            <a href="" class="btn btn-primary">This is action area</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="wrapper wrapper-content">
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">ibox-title</div>
                    <div class="ibox-content">
                        @foreach ($datas['data'] as $row)
                            <p>{{ $row->CBPACK }}</p>
                        @endforeach

                        

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection