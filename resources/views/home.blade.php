@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron">
        <h3>欢迎来到招聘管理系统</h3>
        <h5>
            以下是目前在招的所有职位<a href="/job/create" class="btn btn-primary pull-right">发布新的岗位需求</a>
        </h5>
    </div>

        <div class="row clearfix">
            @foreach($jobs as $job)
            <div class="col-md-4 column">
                <h3>{{ $job->position }}  </h3>
                <p>所属部门：{{ $job->department }} | 需求人数：{{ $job->number }}</p>
                {{--<p>学历要求：{{ $job->degree }} | 工作经验：{{ $job->experience }}</p>--}}
                <p>{!! mb_substr($job->description,0,40)  !!}...... </p>
                <p>
                    <a class="btn btn-success" href="/job/{{$job->id}}">查看详情 »</a>
                </p>
            </div>
            @endforeach
        </div>

</div>
@endsection
