@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <h3>以下是目前所有的应聘者</h3>
            <h5>
                目前共有 {{ count($people) }} 位应聘者
                <a href="/person/create" class="btn btn-primary pull-right">添加新的应聘者</a>
            </h5>
        </div>
        <div class="row">
            @foreach($people as $person)
            <div class="col-md-6 column">
                <div class="media well">
                    <a href="#" class="pull-left">
                        @if($person->sex == '男')
                            <img src="{{ asset('img/man.PNG') }}" class="media-object img-circle" alt='' width="100" height="100"/>
                        @else
                            <img src="{{ asset('img/female.PNG') }}" class="media-object img-circle" alt='' width="100" height="100"/>
                        @endif
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">{{ $person->name }}
                            <span style="font-size: small" class="label label-default">{{ $person->job->position }}</span>
                            <a href="/person/{{ $person->id }}" class="btn btn-success pull-right">查看详情 >></a>
                        </h4>
                        <ul>
                            <li>所属部门：{{ $person->job->department }}</li>
                            <li>工作经验：{{ $person->experience }}</li>
                            <li>最高学历：{{ $person->degree }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection