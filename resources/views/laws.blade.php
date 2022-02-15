@extends('layouts.app')

@section('content')

<section class="wrapper bg-soft-primary">
  <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
    <div class="row">
      <div class="col-md-10 col-xl-8 mx-auto">
        <div class="post-header">
          <div class="post-category text-line">
            <a href="#" class="hover" rel="category">By Laws</a>
          </div>
          <!-- /.post-category -->
          <h1 class="display-1 mb-4" style="font-size: 24px;">{{$chapter->name}}</h1>
          <!-- /.post-meta -->
        </div>
        <!-- /.post-header -->
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
    <div class="container inner py-8">
      <div class="row gx-lg-8 gx-xl-12 gy-4 gy-lg-0">
        <div class="col-md-8 align-self-center text-center text-md-start navigation">
        @if(isset($previous))
          <a href="{{route('laws.view.chapter', $previous->slug)}}" class="btn btn-sm btn-soft-ash rounded-pill btn-icon btn-icon-start mb-0 me-1"><i class="uil uil-arrow-left"></i>{{$previous->name}}</a>
         @endif
        </div>
        <!--/column -->
        <aside class="col-lg-4 sidebar">
        	@if(isset($next))
        	  <a href="{{route('laws.view.chapter', $next->slug)}}" class="btn btn-sm btn-soft-ash rounded-pill btn-icon btn-icon-start mb-0 me-1"><i class="uil uil-arrow-right"></i>{{$next->name}}</a>
        	 @endif
        </aside>
        <!-- /column .sidebar -->
      </div>
      <!--/.row -->
    </div>
  </div>
  <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light">
  <div class="container pb-14 pb-md-16">
    <div class="row">
      <div class="col-lg-10 mx-auto">
        <div class="blog single mt-n17">
          <div class="card">
            <div class="card-body">
              <div class="classic-view">
                <article class="post">
                  <div class="post-content mb-5">
                    {!! $chapter->content !!}
                  </div>
                  <!-- /.post-content -->
                </article>
                <!-- /.post -->
              </div>
              <!-- /.classic-view -->
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.blog -->
        <div class="container inner py-8">
          <div class="row gx-lg-8 gx-xl-12 gy-4 gy-lg-0">
            <div class="col-md-8 align-self-center text-center text-md-start navigation">
              @if(isset($previous))
                <a href="{{route('laws.view.chapter', $previous->slug)}}" class="btn btn-sm btn-soft-ash rounded-pill btn-icon btn-icon-start mb-0 me-1"><i class="uil uil-arrow-left"></i>{{$previous->name}}</a>
               @endif
            </div>
            <!--/column -->
            <aside class="col-lg-4 sidebar">
             @if(isset($next))
               <a href="{{route('laws.view.chapter', $next->slug)}}" class="btn btn-sm btn-soft-ash rounded-pill btn-icon btn-icon-start mb-0 me-1"><i class="uil uil-arrow-right"></i>{{$next->name}}</a>
              @endif
            </aside>
            <!-- /column .sidebar -->
          </div>
          <!--/.row -->
        </div>
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->
@endsection