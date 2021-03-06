@extends('layouts/default') {{-- Page title --}} @section('title') Circle Sliders @stop {{-- local styles --}} @section('header_styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/custom_css/circle_sliders.css')}}"> @stop {{-- Page Header--}} @section('page-header')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Circle Sliders</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{url('index')}}">
                <i class="fa fa-fw fa-home"></i> Dashboard
            </a>
        </li>
        <li> Charts</li>
        <li class="active">
            Circle Sliders
        </li>
    </ol>
</section>
@stop {{-- Page content --}} @section('content')
<!--main content-->
<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">
                                <i class="ti-pie-chart"></i> Circle Dials
                            </h3>
                <span class="pull-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removepanel clickable"></i>
                                </span>
            </div>
            <div class="panel-body">
                <!--knob-->
                <div class="visible-ie8">
                    <div class="col-md-12">
                        <div class="alert alert-warning alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            The Circle Dial plugin is not compatible with Internet Explorer 8 and older.
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="col-md-3 col-sm-3 col-xs-12 text-center m-t-10">
                                <div class="text-left m-t-10 m-b-10">Disabled Display Input</div>
                                <input class="knob" data-width="120" data-height="120" data-fgColor="#6699cc" data-displayinput=false value="35">
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 text-center m-t-10">
                                <div class="text-left m-t-10 m-b-10">Cursor</div>
                                <input class="knob" data-width="120" data-height="120" data-cursor=true data-fgColor="#66cc99" data-thickness=.3 value="29">
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 text-center m-t-10">
                                <div class="text-left m-t-10 m-b-10">
                                    Display previous
                                </div>
                                <input class="knob" data-width="120" data-height="120" data-fgColor="#f0ad4e" data-min="-100" data-displayprevious=true value="44">
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 text-center m-t-10">
                                <div class="text-left m-t-10 m-b-10">
                                    Angle offset
                                </div>
                                <input class="knob" data-angleoffset="90" data-fgcolor="#ff6666" data-width="120" data-height="120" value="35">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="col-md-3 col-sm-3 col-xs-12 text-center m-t-10">
                                <div class="text-left m-t-10 m-b-10">
                                    Angle offset arc
                                </div>
                                <input class="knob" data-angleoffset="-125" data-anglearc="251" data-fgcolor="#f0ad4e" data-width="120" data-height="120" value="35">
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 text-center m-t-10">
                                <div class="text-left m-t-10 m-b-10">
                                    5-digit values
                                </div>
                                <input class="knob" data-min="-15000" data-fgColor="#ff6666" data-max="15000" data-width="120" data-height="120" value="-11000">
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 text-center m-t-10">
                                <div class="text-left m-t-10 m-b-10">Responsive</div>
                                <input class="knob" data-width="120" data-height="120" data-fgColor="#66cc99" value="35">
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 text-center m-t-10">
                                <div class="text-left m-t-10 m-b-10">Readonly</div>
                                <input class="knob" data-fgColor="#66ccff" data-thickness=".4" data-width="120" data-height="120" readonly value="22">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="demo">
                                <div class="text-left">Superpose (clock)</div>
                                <div>
                                    <div class="demo_hours">
                                        <input class="knob hour" data-min="0" data-max="24" data-bgColor="#dcdcdc" data-fgColor="#f0ad4e" data-displayInput=false data-width="240" data-height="240" data-thickness=".3" value="15">
                                    </div>
                                    <div class="demo_minutes">
                                        <input class="knob minute" data-min="0" data-max="60" data-bgColor="#dcdcdc" data-fgColor="#66ccff" data-displayInput=false data-width="160" data-height="160" data-thickness=".45" value="30">
                                    </div>
                                    <div class="demo_seconds">
                                        <input class="knob second" data-min="0" data-max="60" data-bgColor="#dcdcdc" data-fgColor="#66cc99" data-displayInput=false data-width="80" data-height="80" data-thickness=".3" value="20">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--knob ends-->
        </div>
    </div>
</div>
<!-- sparkline -->
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">
                                <i class="ti-bar-chart-alt"></i> Tiny Charts
                            </h3>
                <span class="pull-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removepanel clickable"></i>
                                </span>
            </div>
            <div class="panel-body">
                <div class="row sparkline_charts">
                    <div class="col-md-4 m-t-25 text-center">
                        <div>
                            <div>Tiny line chart</div>
                            <div class="chart linechart">Loading...</div>
                        </div>
                    </div>
                    <div class="col-md-4 m-t-25 text-center">
                        <div>
                            <div>Tiny bar chart</div>
                            <div class="chart barchart">Loading...</div>
                        </div>
                    </div>
                    <div class="col-md-4 m-t-25 text-center">
                        <div>
                            <div>Tiny stacked bar chart</div>
                            <div class="m-t-10 chart stackedbarchart">Loading...</div>
                        </div>
                    </div>
                    <div class="col-md-4 m-t-25 text-center">
                        <div>
                            <div>Tiny tristate chart</div>
                            <div class="m-t-10 chart tristatechart">Loading...</div>
                        </div>
                    </div>
                    <div class="col-md-4 m-t-25 text-center">
                        <div>
                            <div>Tiny bullet chart</div>
                            <div class="m-t-10 chart bulletchart">Loading...</div>
                        </div>
                    </div>
                    <div class="col-md-4 m-t-25 text-center">
                        <div>
                            <div>Tiny pie chart</div>
                            <div class="m-t-10 chart piechart">Loading...</div>
                        </div>
                    </div>
                    <div class="col-md-4 m-t-25 text-center">
                        <div>
                            <div>Tiny discrete chart</div>
                            <div class="m-t-10 chart discretechart">Loading...</div>
                        </div>
                    </div>
                    <div class="col-md-4 m-t-25 text-center">
                        <div>
                            <div>Tiny boxplot chart</div>
                            <div class="m-t-10 chart boxchart">Loading...</div>
                        </div>
                    </div>
                    <div class="col-md-4 m-t-25 text-center">
                        <div>
                            <div>Tiny composite line chart</div>
                            <div id="compositeline" class="m-t-10">
                                8,4,0,0,0,0,1,4,4,10,10,10,10,0,0,0,4,6,5,9,10
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 m-t-25 text-center">
                        <div>
                            <div>Tiny composite bar chart</div>
                            <div id="compositebar" class="m-t-10">4,6,7,7,4,3,2,1,4</div>
                        </div>
                    </div>
                    <div class="col-md-4 m-t-25 text-center">
                        <div>
                            <div>Tiny line chart with normal range</div>
                            <div id="normalline" class="m-t-10">
                                8,4,0,0,0,0,1,4,4,10,10,10,10,0,0,0,4,6,5,9,10
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 m-t-25 text-center">
                        <div>
                            <div>Tiny discrete chart with treshold</div>
                            <div id="discrete2" class="m-t-10">4,6,7,7,4,3,2,1,4</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- sparkline -->@stop {{-- local scripts --}} @section('footer_scripts')
<script src="{{asset('vendors/jquery-knob/js/jquery.knob.js')}}"></script>
<script src="{{asset('js/custom_js/sparkline/jquery.flot.spline.js')}}"></script>
<script src="{{asset('js/custom_js/circle_sliders.js')}}"></script> @stop
