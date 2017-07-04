@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-offset-1 column">
                <h2>修改岗位需求</h2>
                <hr>
                <form role="form" method="post" action="/job/{{ $job->id }}">
                    {{csrf_field()}}
                    {{method_field('patch')}}
                    <div class="form-group">
                        <label for="">position</label>
                        <input type="text" class="form-control" name="position" value="{{ $job->position }}"/>
                    </div>
                    <div class="form-group">
                        <label for="">number</label>
                        <input type="number" class="form-control" name="number" value="{{ $job->number }}"/>
                    </div>
                    <div class="form-group">
                        <label for="">department</label>
                        <input type="text" class="form-control" name="department" value="{{ $job->department }}"/>
                    </div>
                    <div class="form-group">
                        <label for="">experience</label>
                        <input type="text" class="form-control" name="experience" value="{{ $job->experience }}"/>
                    </div>
                    <div class="form-group">
                        <label for="">degree</label>
                        <input type="text" class="form-control" name="degree" value="{{ $job->degree }}"/>
                    </div>
                    <div class="form-group">
                        <label for="">description</label>
                        <textarea name="description" id="" class="form-control" cols="30" rows="10">{{ $job->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">提交</button>
                </form>
            </div>
        </div>
    </div>
    <br>
    <br>
@endsection