@extends('layouts.app')

@section('content')
 <div class="container">
     <div class="row">

         <div class="col-sm-8 blog-main">

             <div class="blog-post">
                 <h2 class="blog-post-title">{{ $job->position }}</h2>
                 <p class="blog-post-meta"><span class="glyphicon glyphicon-calendar"></span> {{ $job->created_at }} By <span class="glyphicon glyphicon-user"></span><a href="#"> {{ $job->user->name }}</a></p>
                 <hr>
                <h3>职位要求：</h3>
                <ul>
                     <li>所需人数： {{ $job->number }}人</li>
                     <li>工作经验： {{ $job->experience }}</li>
                     <li>学历要求： {{ $job->degree }}</li>
                 </ul>
                 <h3>职位描述：</h3>

                 <p></p>
                 <ul>
                     <li>所属部门： {{ $job->department }}</li>
                     <li>岗位要求： {{ $job->description }}</li>
                 </ul>
             </div><!-- /.blog-post -->

            {{--分页--}}
             {{--<nav>--}}
                 {{--<ul class="pager">--}}
                     {{--<li><a href="#">Previous</a></li>--}}
                     {{--<li><a href="#">Next</a></li>--}}
                 {{--</ul>--}}
             {{--</nav>--}}

         </div><!-- /.blog-main -->

         <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
             <div class="sidebar-module sidebar-module-inset">
                 <h4>About</h4>
                 <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
             </div>
             <div class="sidebar-module">
                 <h4>Archives</h4>
                 <ol class="list-unstyled">
                     <li><a href="/job/create" class="btn btn-primary">新增岗位需求</a></li>
                     <li><a href="/job/{{ $job->id }}/edit" class="btn btn-success">修改岗位需求</a></li>
                     <li><a class="btn btn-danger" data-toggle="modal" data-target="#myModal">删除岗位需求</a></li>
                 </ol>
             </div>
             <div class="sidebar-module">
                 <h4>Elsewhere</h4>
                 <ol class="list-unstyled">
                     <li><a href="#" class="btn btn-warning">新增应聘者</a></li>
                 </ol>
             </div>
         </div><!-- /.blog-sidebar -->

         <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
             <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                             &times;
                         </button>
                         <h5 class="modal-title" id="myModalLabel">警告</h5>
                     </div>
                     <div class="modal-body">
                         您确定要删除该岗位需求吗？<br><h6><strong>注意：</strong>一旦删除则无法恢复！</h6>
                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                         <form role="form" method="post" action="/job/{{ $job->id }}" style="display: inline;">
                             {{ csrf_field() }}
                             {{ method_field('delete') }}
                             <button type="submit" class="btn btn-primary">确定</button>
                         </form>
                     </div>
                 </div><!-- /.modal-content -->
             </div><!-- /.modal -->
         </div>

     </div>
 </div>
@endsection