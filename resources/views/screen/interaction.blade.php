@extends('layouts.app')

@section('title', 'Moell Blog')

@section('content')

        <!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        微信墙
        <small>欢迎关注omron微信墙</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
    </ol>
</section>

<!-- Main content -->
<section class="content" >
    <!-- Your Page Content Here -->
    <!-- Construct the box with style you want. Here we are using box-danger -->
    <!-- Then add the class direct-chat and choose the direct-chat-* contexual class -->
    <!-- The contextual class should match the box, so we are using direct-chat-danger -->
    <div class="box box-danger direct-chat direct-chat-info" >
        <div class="box-header with-border">
            <h3 class="box-title">Direct Chat</h3>

            <div class="box-tools pull-right">
                <span data-toggle="tooltip" title="3 New Messages" class="badge bg-red">3</span>
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>

                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div><!-- /.box-header -->
        <div class="box-body">
            <!-- Conversations are loaded here -->
            <div class="direct-chat-messages" style="height:670px">
                <!-- Message. Default to the left -->
                <div class="direct-chat-msg">
                    <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-left">Alexander Pierce</span>
                        <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                    </div><!-- /.direct-chat-info -->
                    <img class="direct-chat-img" src="../dist/img/user1-128x128.jpg" alt="message user image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                        Is this template really for free? That's unbelievable!
                    </div><!-- /.direct-chat-text -->
                </div><!-- /.direct-chat-msg -->

                <!-- Message to the right -->
                <div class="direct-chat-msg right">
                    <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-right">Sarah Bullock</span>
                        <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                    </div><!-- /.direct-chat-info -->
                    <img class="direct-chat-img" src="../dist/img/user3-128x128.jpg" alt="message user image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                        You better believe it!
                    </div><!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->

                <!-- Message. Default to the left -->
                <div class="direct-chat-msg">
                    <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-left">Alexander Pierce</span>
                        <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                    </div><!-- /.direct-chat-info -->
                    <img class="direct-chat-img" src="../dist/img/user1-128x128.jpg" alt="message user image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                        Is this template really for free? That's unbelievable!
                    </div><!-- /.direct-chat-text -->
                </div><!-- /.direct-chat-msg -->

                <!-- Message to the right -->
                <div class="direct-chat-msg right">
                    <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-right">Sarah Bullock</span>
                        <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                    </div><!-- /.direct-chat-info -->
                    <img class="direct-chat-img" src="../dist/img/user3-128x128.jpg" alt="message user image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                        You better believe it!
                    </div><!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->

                <!-- Message. Default to the left -->
                <div class="direct-chat-msg">
                    <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-left">Alexander Pierce</span>
                        <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                    </div><!-- /.direct-chat-info -->
                    <img class="direct-chat-img" src="../dist/img/user1-128x128.jpg" alt="message user image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                        Is this template really for free? That's unbelievable!
                    </div><!-- /.direct-chat-text -->
                </div><!-- /.direct-chat-msg -->

                <!-- Message to the right -->
                <div class="direct-chat-msg right">
                    <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-right">Sarah Bullock</span>
                        <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                    </div><!-- /.direct-chat-info -->
                    <img class="direct-chat-img" src="../dist/img/user3-128x128.jpg" alt="message user image"/>
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                        You better believe it!
                    </div><!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->
                <div id="test"> </div>
            </div><!--/.direct-chat-messages-->
        </div><!-- /.box-body -->
        <div class="box-footer">
            <div class="input-group">
                <input type="text" name="message" placeholder="Type Message ..." class="form-control">
      <span class="input-group-btn">
        <button type="button" class="btn btn-danger btn-flat">Send</button>
      </span>
            </div>
        </div><!-- /.box-footer-->
    </div><!--/.direct-chat -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('script')
    <script>
        $(function() {
            var s = setInterval("hello()", 2000);
            setTimeout(function () {
                clearInterval(s);
            }, 1000 * 300);
        });
        var i=1;

        var hello=function(){
            $.get("http://active.st-blog.top/test", function (data) {
                if (parseInt(data.code) === 1) {
                    $.each(data.data,function(e,i){
                        console.log(i,1234)
                        var msg=$.parseJSON(i);
                        var text='<div class="direct-chat-msg"><div class="direct-chat-info clearfix"> <span class="direct-chat-name pull-left">Alexander Pierce</span> <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span> </div> <img class="direct-chat-img" src="../dist/img/user3-128x128.jpg" alt="message user image"/> <div class="direct-chat-text">'+msg.Content+ '</div>';
                        $('#test').fadeIn(1000, function () {
                            $('.direct-chat-messages').append(text);
                        });
                    })
                }
            });
        }
    </script>
@endsection