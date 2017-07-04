@extends('layouts.app')

@section('content')
    <div class="container">
    	<div class="row">
    		<div class="col-md-9 col-md-offset-1 column">
				<h2>添加新的岗位需求</h2>
				<hr>
    		<form role="form" method="post" action="/job">
				{{csrf_field()}}
				<div class="form-group">
				     <label for="">position</label>
				     <input type="text" class="form-control" name="position" />
				</div>
				<div class="form-group">
				     <label for="">number</label>
				     <input type="number" class="form-control" name="number" />
				</div>
				<div class="form-group">
				     <label for="">department</label>
				     <input type="text" class="form-control" name="department" />
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
				     <label for="">description</label>
					<textarea name="description" id="" class="form-control" cols="30" rows="10"></textarea>
				</div>
                <button type="submit" class="btn btn-primary pull-right">提交</button>
    		</form>
    		</div>
    	</div>
    </div>
@endsection