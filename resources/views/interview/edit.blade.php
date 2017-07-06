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
                <form role="form" method="post" action="/interview/{{ $interview->id }}">
                    {{ csrf_field() }}
                    {{ method_field('put') }}
                    <div class="form-group">
                        <label for="">面试时间</label>
                        <input name="when" size="16" type="text" class="form-control form_datetime" value="{{ $interview->when }}"  >
                        {{--<input type="text" class="form-control" name="when" />--}}
                    </div>
                    <div class="form-group">
                        <label for="">面试地址</label>
                        <input name="where" type="text" class="form-control" value="{{ $interview->where }}" readonly >
                    </div>
                    <div class="form-group">
                        <label for="">应聘职位</label>
                        <input type="text" class="form-control"  value="{{ $interview->job->position }}" disabled >
                        <input type="hidden" name="job_id" value="{{ $interview->job->id }}">
                    </div>
                    <div class="form-group">
                        <label for="">应聘者</label>
                        <input type="text" class="form-control" name="" value="{{ $interview->people->name }}" disabled >
                        <input type="hidden" name="interviewee" value="{{ $interview->people->id }}">
                    </div>
                    <div class="form-group">
                        <label for="">面试类型</label>
                        <input name="type" type="text" class="form-control" value="{{ $interview->type }}" readonly >
                    </div>

                    <div class="form-group">
                        <label for="">面试官</label>
                        <input type="text" class="form-control" name="interviewer" value="{{ $interview->interviewer }}" >
                    </div>

                    <div class="form-group">
                        <label for="" class="control-label">面试结果</label>
                        <select class="selectpicker form-control" name="result">
                            @if(($interview->result == null) || ($interview->result == '合适'))
                              <option selected="selected" value="合适">合适</option>
                              <option value="不合适">不合适</option>
                            @else
                                <option value="合适">合适</option>
                                <option selected="selected" value="不合适">不合适</option>
                            @endif
                        </select>
                    </div>

                    <div class="form-group">
                         <label for="">面试评价</label>
                        <textarea name="reason" class="form-control" id="" cols="30" rows="10">{{ $interview->reason }}</textarea>
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