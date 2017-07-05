@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/bootstrap-table.css') }}">
@endsection

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
                 <ul>
                     <li>所属部门： {{ $job->department }}</li>
                     <li>岗位要求： {{ $job->description }}</li>
                 </ul>
                 <hr>
                 {{--应聘者列表--}}
                 <h3>应聘者列表：</h3>
                 <table  data-toggle="table"
                         {{--data-search="true"--}}
                         {{--data-show-refresh="true"--}}
                         {{--data-show-toggle="true"--}}
                         {{--data-show-columns="true"--}}
                         data-pagination="true"
                        style="font-size: small"
                 >
                     <thead>
                     <tr>
                         <th data-sortable="true">姓名</th>
                         <th data-sortable="true">性别</th>
                         <th data-sortable="true">学历</th>
                         <th data-sortable="true">工作经验</th>
                         <th data-sortable="true">邮箱</th>
                         <th data-sortable="true">手机</th>
                         <th>操作</th>
                     </tr>
                     </thead>
                     <tbody>
                     @foreach( $job->people as $person )
                         <tr>
                             <td>{{ $person->name }}</td>
                             <td>{{ $person->sex }}</td>
                             <td>{{ $person->degree }}</td>
                             <td>{{ $person->experience }}</td>
                             <td>{{ $person->email }}</td>
                             <td>{{ $person->telephone }}</td>
                             <td>
                                 <a href="/interview/create/{{ $person->id }}" class="btn btn-sm btn-success">邀请面试</a>
                                 <a href="/person/{{ $person->id }}" class="btn btn-sm btn-info">查看详情</a>
                                 {{--<a href="" class="btn btn-sm btn-danger">遗憾放弃</a>--}}
                                 {{--按钮组--}}
                                 {{--<div class="btn-group btn-group-sm">--}}
                                     {{--<button class="btn btn-success" type="button">邀请面试</button>--}}
                                     {{--<button class="btn btn-info" type="button">查看详情</button>--}}
                                 {{--</div>--}}
                             </td>
                         </tr>
                     @endforeach
                     </tbody>
                 </table>


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
                     <li><a href="/interviewee/add/{{ $job->id }}" class="btn btn-warning">新增应聘者</a></li>
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

@section('script')
    {{--引入bootstrap-table--}}
    <script src="{{ asset('js/bootstrap-table.js') }}"></script>
    <script src="{{ asset('js/bootstrap-table-zh-CN.js') }}"></script>
@endsection