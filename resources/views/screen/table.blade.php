@extends('layouts.app')

@section('title', 'Moell Blog')

@section('content')

        <!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        table
        <small>table测试</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
    </ol>
</section>

<!-- Main content -->
<section class="content" >
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">查询</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <span class="pull-right"> <a type="button" href="#"  id="open_modal" class="btn btn-info">追加</a> </span>
            <table class="table table-bordered">
                <thead><tr>
                    <th style="width: 10px">#</th>
                    <th>Task</th>
                    <th>Progress</th>
                    <th style="width: 40px">Label</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($data as $user)
                    <tr>
                        <td>{{ $user->id }}.</td>
                        <td>{{ $user->name }}</td>
                        <td>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                            </div>
                        </td>
                        <td><span class="badge bg-red">55%</span></td>
                    </tr>
                @endforeach
                </tbody></table>

        </div>
        <!-- /.box-body -->
        {{--<div class="box-footer clearfix">--}}
            {{--<ul class="pagination pagination-sm no-margin pull-right">--}}
                {{--<li><a href="#">«</a></li>--}}
                {{--<li><a href="#">1</a></li>--}}
                {{--<li><a href="#">2</a></li>--}}
                {{--<li><a href="#">3</a></li>--}}
                {{--<li><a href="#">»</a></li>--}}
            {{--</ul>--}}
        {{--</div>--}}
        <div class="box-footer clearfix">
        {!! $data->links() !!}
        </div>
    </div>
</section>
<!-- /.content -->
<section class="other" >
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="myModal1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Default Modal</h4>
                </div>
                <div class="modal-body">
                    <p>One fine body…</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>
</section>
@endsection

@section('script')
    <script>
        $('#open_modal').click(function(){
            $('#myModal1').modal('show')
        })
    </script>
@endsection