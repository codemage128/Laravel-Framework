@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Sweetalert
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link href="{{ asset('assets/vendors/sweetalert/css/sweetalert2.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/animate.min.css') }}"/>

@stop
<style>
    .button-alignment{
        margin-top:5px;
    }
</style>
{{-- Page content --}}
@section('content')

    <section class="content-header">
        <!--section starts-->
        <h1>Sweet Alert</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#">UI Features</a>
            </li>
            <li class="active">Sweet Alert</li>
        </ol>
    </section>
    <!--section ends-->
    <!-- Main content -->
    <section class="content">
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Basic Sweet Alerts
                    </h3>
                    <span class="pull-right">
                             <i class="glyphicon glyphicon-chevron-up clickable"></i>
                             <i class="glyphicon glyphicon glyphicon-remove removepanel clickable"></i>
                        </span>
                </div>
                <div class="panel-body">
                    <div class="col-lg-4 col-md-6 col-sm-4">
                        <button type="button" class="btn button-alignment btn-primary" id="btn1">Simple Alert</button>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-4">
                        <button type="button" class="btn  button-alignment  btn-primary" id="btn2">Some Large Text</button>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-4">
                        <button type="button" class="btn  button-alignment  btn-primary" id="btn3">Success Alert</button>
                    </div>
                </div>
            </div></div>
        <div class="col-md-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Advanced Sweet Alerts
                    </h3>
                    <span class="pull-right">
                             <i class="glyphicon glyphicon-chevron-up clickable"></i>
                             <i class="glyphicon glyphicon glyphicon-remove removepanel clickable"></i>
                        </span>
                </div>
                <div class="panel-body">
                    <div class="col-md-5 col-sm-6">
                        <button type="button" class="btn  button-alignment btn-info" id="btn4">Submit action</button>
                    </div>
                    <div class="col-md-7 col-sm-6">
                        <button type="button" class="btn  button-alignment btn-info" id="btn5">Both Submit and Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix visible-md"></div>
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Sweet Alerts with images
                    </h3>
                    <span class="pull-right">
                             <i class="glyphicon glyphicon-chevron-up clickable"></i>
                             <i class="glyphicon glyphicon glyphicon-remove removepanel clickable"></i>
                        </span>
                </div>
                <div class="panel-body">
                    <div class="col-md-6 col-sm-6">
                        <button type="button" class="btn button-alignment  btn-primary" id="btn6">Simple Image</button>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <button type="button" class="btn  button-alignment  btn-primary" id="btn7">Simple Image2</button>
                    </div>
                </div>
            </div></div>
        <div class="col-md-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Sweet Alerts with closing time
                    </h3>
                    <span class="pull-right">
                             <i class="glyphicon glyphicon-chevron-up clickable"></i>
                             <i class="glyphicon glyphicon glyphicon-remove removepanel clickable"></i>
                        </span>
                </div>
                <div class="panel-body">
                    <div class="col-md-6 col-sm-6">
                        <button type="button" class="btn  button-alignment btn-info" id="btn8">Auto Close</button>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <button type="button" class="btn  button-alignment btn-info" id="btn9">Ajax usage</button>
                    </div>
                </div>
            </div></div>
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Sweet Alert with Animation
                    </h3>
                    <span class="pull-right">
                             <i class="glyphicon glyphicon-chevron-up clickable"></i>
                             <i class="glyphicon glyphicon glyphicon-remove removepanel clickable"></i>
                        </span>
                </div>
                <div class="panel-body">
                    <div class="col-lg-4 col-md-6 col-sm-4">
                        <button type="button" class="btn button-alignment  btn-primary" id="btn10">RubberBand</button>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-4">
                        <button type="button" class="btn  button-alignment  btn-primary" id="btn11">Tada </button>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-4">
                        <button type="button" class="btn  button-alignment  btn-primary" id="btn12">Swing </button>
                    </div>
                </div>
            </div></div>
        <div class="col-md-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Other Examples
                    </h3>
                    <span class="pull-right">
                             <i class="glyphicon glyphicon-chevron-up clickable"></i>
                             <i class="glyphicon glyphicon glyphicon-remove removepanel clickable"></i>
                        </span>
                </div>
                <div class="panel-body">
                    <div class="col-md-5 col-sm-6">
                        <button type="button" class="btn  button-alignment btn-info" id="btn13">Wizard</button>
                    </div>
                    <div class="col-md-7 col-sm-6">
                        <button type="button" class="btn  button-alignment btn-info" id="btn14">What is my IP?</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Sweetalert Positions
                    </h3>
                    <span class="pull-right">
                             <i class="glyphicon glyphicon-chevron-up clickable"></i>
                             <i class="glyphicon glyphicon glyphicon-remove removepanel clickable"></i>
                        </span>
                </div>
                <div class="panel-body">
                    <div class="col-md-5 col-sm-6">
                        <button type="button" class="btn btn-primary button-alignment " id="btn15">Top Right</button>
                    </div>
                    <div class="col-md-7 col-sm-6">
                        <button type="button" class="btn  button-alignment btn-primary" id="btn16">Bottom Left</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- content -->
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- begining of page level js -->
    <script src="{{ asset('assets/vendors/sweetalert/js/sweetalert2.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/js/pages/custom_sweetalert.js') }}" type="text/javascript"></script>
    <script>
        var image="{{ asset('assets/images/c1.jpg') }}";
        var image1="{{ asset('assets/images/c2.jpg') }}";

    </script>

@stop
