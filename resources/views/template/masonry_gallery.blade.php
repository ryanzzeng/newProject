@extends('layouts/default') {{-- Page title --}} @section('title') Masonary Gallery @stop {{-- local styles --}} @section('header_styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/fancybox/jquery.fancybox.css')}}" />
<link href="{{asset('css/animated-masonry-gallery.css')}}" rel="stylesheet" type="text/css" /> @stop {{-- Page Header--}} @section('page-header')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Masonary Gallery</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{url('index')}}">
                <i class="fa fa-fw fa-home"></i> Dashboard
            </a>
        </li>
        <li> Gallery</li>
        <li class="active">
            Masonary Gallery
        </li>
    </ol>
</section>
@stop {{-- Page content --}} @section('content')
<div class="content gallery">
    <div class="row" id="slim">
        <div id="gallery">
            <div class="row m-b-10">
                <div class="col-md-5 col-xs-12" id="gallery-header-center-left-title">
                    All Galleries
                </div>
                <div class="pull-right">
                    <div class="col-xs-12">
                        <button type="button" id="filter-all" class="btn btn-responsive btn-info btn-xs">
                            All
                        </button>
                        <button type="button" id="filter-studio" class="btn btn-responsive btn-primary btn-xs">Studio
                        </button>
                        <button type="button" id="filter-landscape" class="btn btn-responsive btn-success btn-xs">Landscape
                        </button>
                    </div>
                </div>
            </div>
            <div id="gallery-content">
                <div id="gallery-content-center">
                    <a class="fancybox img-responsive" href="img/gallery/full/1.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                        <img alt="gallery" src="img/gallery/thumbs/1.jpg" class="all studio" />
                    </a>
                    <a class="fancybox img-responsive" href="img/gallery/full/2.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                        <img alt="gallery" src="img/gallery/thumbs/2.jpg" class="all landscape">
                    </a>
                    <a class="fancybox img-responsive" href="img/gallery/full/3.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                        <img alt="gallery" src="img/gallery/thumbs/3.jpg" class="all studio" />
                    </a>
                    <a class="fancybox img-responsive" href="img/gallery/full/4.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                        <img alt="gallery" src="img/gallery/thumbs/4.jpg" class="all studio" />
                    </a>
                    <a class="fancybox img-responsive" href="img/gallery/full/5.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                        <img alt="gallery" src="img/gallery/thumbs/5.jpg" class="all landscape">
                    </a>
                    <a class="fancybox img-responsive" href="img/gallery/full/6.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                        <img alt="gallery" src="img/gallery/thumbs/6.jpg" class="all studio" />
                    </a>
                    <a class="fancybox img-responsive" href="img/gallery/full/7.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                        <img alt="gallery" src="img/gallery/thumbs/7.jpg" class="all studio" />
                    </a>
                    <a class="fancybox img-responsive" href="img/gallery/full/8.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                        <img alt="gallery" src="img/gallery/thumbs/8.jpg" class="all landscape">
                    </a>
                    <a class="fancybox img-responsive" href="img/gallery/full/9.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                        <img alt="gallery" src="img/gallery/thumbs/9.jpg" class="all studio" />
                    </a>
                    <a class="fancybox img-responsive" href="img/gallery/full/10.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                        <img alt="gallery" src="img/gallery/thumbs/10.jpg" class="all studio" />
                    </a>
                    <a class="fancybox img-responsive" href="img/gallery/full/11.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                        <img alt="gallery" src="img/gallery/thumbs/11.jpg" class="all landscape">
                    </a>
                    <a class="fancybox img-responsive" href="img/gallery/full/12.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                        <img alt="gallery" src="img/gallery/thumbs/12.jpg" class="all studio" />
                    </a>
                    <a class="fancybox img-responsive" href="img/gallery/full/13.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                        <img alt="gallery" src="img/gallery/thumbs/13.jpg" class="all landscape">
                    </a>
                    <a class="fancybox img-responsive" href="img/gallery/full/14.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                        <img alt="gallery" src="img/gallery/thumbs/14.jpg" class="all studio" />
                    </a>
                    <a class="fancybox img-responsive" href="img/gallery/full/15.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                        <img alt="gallery" src="img/gallery/thumbs/15.jpg" class="all landscape">
                    </a>
                    <a class="fancybox img-responsive" href="img/gallery/full/16.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                        <img alt="gallery" src="img/gallery/thumbs/16.jpg" class="all studio" />
                    </a>
                    <a class="fancybox img-responsive" href="img/gallery/full/17.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                        <img alt="gallery" src="img/gallery/thumbs/17.jpg" class="all landscape">
                    </a>
                    <a class="fancybox img-responsive" href="img/gallery/full/18.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                        <img alt="gallery" src="img/gallery/thumbs/18.jpg" class="all studio" />
                    </a>
                    <a class="fancybox img-responsive" href="img/gallery/full/19.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                        <img alt="gallery" src="img/gallery/thumbs/19.jpg" class="all landscape">
                    </a>
                    <a class="fancybox img-responsive" href="img/gallery/full/20.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                        <img alt="gallery" src="img/gallery/thumbs/20.jpg" class="all studio" />
                    </a>
                    <a class="fancybox img-responsive" href="img/gallery/full/21.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                        <img alt="gallery" src="img/gallery/thumbs/21.jpg" class="all landscape">
                    </a>
                    <a class="fancybox img-responsive" href="img/gallery/full/22.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                        <img alt="gallery" src="img/gallery/thumbs/22.jpg" class="all studio" />
                    </a>
                    <a class="fancybox img-responsive" href="img/gallery/full/23.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                        <img alt="gallery" src="img/gallery/thumbs/23.jpg" class="all landscape">
                    </a>
                    <a class="fancybox img-responsive" href="img/gallery/full/24.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                        <img alt="gallery" src="img/gallery/thumbs/24.jpg" class="all studio" />
                    </a>
                    <a class="fancybox img-responsive" href="img/gallery/full/25.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                        <img alt="gallery" src="img/gallery/thumbs/25.jpg" class="all landscape">
                    </a>
                    <a class="fancybox img-responsive" href="img/gallery/full/26.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                        <img alt="gallery" src="img/gallery/thumbs/26.jpg" class="all studio" />
                    </a>
                    <a class="fancybox img-responsive" href="img/gallery/full/27.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                        <img alt="gallery" src="img/gallery/thumbs/27.jpg" class="all landscape">
                    </a>
                    <a class="fancybox img-responsive" href="img/gallery/full/28.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                        <img alt="gallery" src="img/gallery/thumbs/28.jpg" class="all studio" />
                    </a>
                    <a class="fancybox img-responsive" href="img/gallery/full/29.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                        <img alt="gallery" src="img/gallery/thumbs/29.jpg" class="all landscape">
                    </a>
                    <a class="fancybox img-responsive" href="img/gallery/full/30.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                        <img alt="gallery" src="img/gallery/thumbs/30.jpg" class="all studio" />
                    </a>
                    <a class="fancybox img-responsive" href="img/gallery/full/31.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                        <img alt="gallery" src="img/gallery/thumbs/31.jpg" class="all landscape">
                    </a>
                    <a class="fancybox img-responsive" href="img/gallery/full/32.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                        <img alt="gallery" src="img/gallery/thumbs/32.jpg" class="all studio" />
                    </a>
                    <a class="fancybox img-responsive" href="img/gallery/full/33.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                        <img alt="gallery" src="img/gallery/thumbs/33.jpg" class="all landscape">
                    </a>
                    <a class="fancybox img-responsive" href="img/gallery/full/34.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                        <img alt="gallery" src="img/gallery/thumbs/34.jpg" class="all studio" />
                    </a>
                </div>
            </div>
            <!-- .images-box -->
        </div>
    </div>
</div> @stop {{-- local scripts --}} @section('footer_scripts')
<script src="{{asset('js/jquery.isotope.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendors/fancybox/jquery.fancybox.pack.js')}}" type="text/javascript"></script>
<script src="{{asset('vendors/fancybox/helpers/jquery.fancybox-buttons.js')}}" type="text/javascript"></script>
<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="{{asset('vendors/fancybox/jquery.fancybox.js')}}"></script>
<script src="{{asset('js/animated-masonry-gallery.js')}}" type="text/javascript"></script>
@stop
