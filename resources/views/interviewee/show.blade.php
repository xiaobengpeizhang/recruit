@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <div class="media">
                <a href="#" class="pull-left">
                    @if( $person->sex == '男' )
                    <img src="{{ asset('img/man.PNG') }}" width="90" height="90" class="media-object img-circle" alt='' />
                    @else
                    <img src="{{ asset('img/female.PNG') }}" width="90" height="90" class="media-object img-circle" alt='' />
                    @endif
                </a>
                <div class="media-body">
                    <h3 class="media-heading"> {{ $person->name }} <a href="#" class="btn btn-primary pull-right">邀请面试</a></h3>
                    <ul>
                        <li>应聘职位：{{ $person->job->position }}</li>
                        <li>工作经验：{{ $person->experience }}</li>
                        <li>最高学历：{{ $person->degree }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <h3>面试记录表</h3>
        <table class="table table-bordered table-hover table-responsive">
            <thead>
            <tr>
                <th>时间</th>
                <th>地点</th>
                <th>面试类型</th>
                <th>面试主导</th>
                <th>面试结果</th>
                <th>评价</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>2017-06-31</td>
                <td>脱普10楼</td>
                <td>初试</td>
                <td>爱谁谁</td>
                <td>合格</td>
                <td>成熟稳重</td>
                <td>
                    <a href="" class="btn btn-sm btn-success">修改面试评价</a>
                    <a href="#" class="btn btn-sm btn-info">通知面试结果</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

@endsection