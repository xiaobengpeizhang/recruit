@extends('layouts.app')

@section('content')
    <div class="container">
    	<div class="row ">
    		<div class="col-md-9 col-md-offset-1 column">
				<h2>添加新的应聘者</h2>
				<hr>
    		<form role="form" method="post" action="/person">
    			{{ csrf_field() }}

				<div class="form-group">
					<label for="">name</label>
					<input type="text" class="form-control" name="name" />
				</div>
				<div class="form-group">
					<label for="">sex</label><br>
					<input type="radio" name="sex" value="男" checked="checked"> 男
					<input type="radio" name="sex" value="女"> 女
				</div>

				<div class="form-group">
					<label for="">position</label>
					<input type="text" class="form-control" name="position" value="{{ $job->position }}" disabled/>
					<input type="hidden" class="form-control" name="job_id" value="{{ $job->id }}" />
				</div>
				<div class="form-group">
					<label for="">experience</label>
					<input type="text" class="form-control" name="experience" />
				</div>
				<div class="form-group">
					<label for="">degree</label>
					<input type="text" class="form-control" name="degree" />
				</div>

				<div class="form-group">
					<label for="">telephone</label>
					<input type="text" class="form-control" name="telephone" />
				</div>
				<div class="form-group">
					<label for="">email</label>
					<input type="email" class="form-control" name="email" />
				</div>

                <input type="submit" class="btn btn-primary pull-right" value="提交">
    		</form>
    		</div>
    	</div>
    </div>

@endsection