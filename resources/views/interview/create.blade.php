@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/bootstrap-datetimepicker.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-9 col-md-offset-1 column">
                <h2>添加新的面试邀请</h2>
                <hr>
                <form role="form" method="post" action="/interview">
                    {{ csrf_field() }}

                    <div class="form-group">
                         <label for="">面试时间</label>
                        <input name="when" size="16" type="text" class="form-control form_datetime">
                        {{--<input type="text" class="form-control" name="when" />--}}
                    </div>
                    <div class="form-group">
                        <label for="" >面试地址</label>
                        <select class="form-control" name="where">
                             <option selected="selected" value="脱普10楼1号会议室">脱普10楼1号会议室</option>
                             <option value="脱普10楼2号会议室">脱普10楼2号会议室</option>
                            <option value="脱普10楼3号会议室">脱普10楼3号会议室</option>
                        </select>
                    </div>
                    <div class="form-group">
                         <label for="">应聘职位</label>
                         <input type="text" class="form-control" name="position" value="{{ $person->job->position }}" disabled />
                         <input type="hidden" name="job_id" value="{{ $person->job->id }}">
                    </div>
                    <div class="form-group">
                        <label for="">应聘者</label>
                        <input type="text" class="form-control" name="" value="{{ $person->name }}" disabled />
                        <input type="hidden" name="interviewee" value="{{ $person->id }}">
                    </div>
                    <div class="form-group">
                        <label for="" >面试类型</label>
                        <select class="form-control" name="type">
                            <option selected="selected" value="初试">初试</option>
                            <option value="复试">复试</option>
                            <option value="终试">终试</option>
                            <option value="电话面试">电话面试</option>
                            <option value="视频面试">视频面试</option>
                        </select>
                    </div>
                    <div class="form-group">
                         <label for="">面试官</label>
                         <input type="text" class="form-control" name="interviewer" />
                    </div>

                    <input type="submit" class="btn btn-primary pull-right" value="提交">
                </form>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script src="{{ asset('js/bootstrap-datetimepicker.js') }}"></script>
{{--    <script src="{{ asset('js/bootstrap-datetimepicker.zh-CN.js') }}"></script>--}}

    <script>
        $('.form_datetime').datetimepicker({
            format:'yyyy-mm-dd hh:ii:ss',
            autoclose: true,
            todayBtn: true
        })
    </script>
@endsection