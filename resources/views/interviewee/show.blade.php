@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/bootstrap-table.css') }}">
@endsection

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
                    <h3 class="media-heading"> {{ $person->name }} <a href="/interview/create/{{ $person->id }}" class="btn btn-primary pull-right">邀请面试</a></h3>
                    <ul>
                        <li>应聘职位：{{ $person->job->position }}</li>
                        <li>工作经验：{{ $person->experience }}</li>
                        <li>最高学历：{{ $person->degree }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <h3>面试记录表</h3>
        <table data-toggle="table"
               {{--data-pagination="true"--}}
        >
            <thead>
            <tr>
                <th data-sortable="true">时间</th>
                <th data-sortable="true">地点</th>
                <th data-sortable="true">面试类型</th>
                <th data-sortable="true">面试主导</th>
                <th data-sortable="true">面试结果</th>
                <th data-sortable="true">评价</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach( $person->interviews as $interview )
            <tr>
                <td>{{ $interview->when }}</td>
                <td>{{ $interview->where }}</td>
                <td>{{ $interview->type }}</td>
                <td>{{ $interview->interviewer }}</td>
                <td>{{ $interview->result }}</td>
                <td>{{ $interview->reason }}</td>
                <td>
                    <a href="#" class="btn btn-sm btn-success">修改面试评价</a>
                    <a href="#" class="btn btn-sm btn-info">通知面试结果</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection

@section('script')
    {{--引入bootstrap-table--}}
    <script src="{{ asset('js/bootstrap-table.js') }}"></script>
    <script src="{{ asset('js/bootstrap-table-zh-CN.js') }}"></script>
@endsection