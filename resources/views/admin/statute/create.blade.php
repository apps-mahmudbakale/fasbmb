@extends('admin.layouts.app')

@section('content')

	<main id="main" class="main">

	  <div class="pagetitle">
	    <h1>Create Chapter</h1>
	    <nav>
	      <ol class="breadcrumb">
	        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
	        <li class="breadcrumb-item"><a href="{{route('admin.statute.index')}}">Chapters</a></li>
	        <li class="breadcrumb-item active">Create Chapter</li>
	      </ol>
	    </nav>
	  </div><!-- End Page Title -->

	  <section class="section">
	    <div class="row">
	      <div class="col-lg-12">
	      		<div class="card">
	      		  <div class="card-body">
	      		    <h5 class="card-title">Create Chapter</h5>
	      		    <!-- No Labels Form -->
	      		    <form  action="{{route('admin.statute.store')}}" method="POST" class="row g-3">
	      		    	@csrf
	      		      <div class="col-md-12">
	      		        <input type="text" name="name" class="form-control" placeholder="Chapter Name">
	      		      </div>
	      		      <div class="col-md-12">
	      		       <textarea name="content" id="summernote" placeholder="Job Description"  cols="30" rows="10"></textarea>
	      		      </div>
	      		      <div>
	      		        <button type="submit" class="btn btn-primary">Submit</button>
	      		      </div>
	      		    </form><!-- End No Labels Form -->

	      		  </div>
	      		</div>
	      </div>
	    </div>
	  </section>

	</main><!-- End #main -->

 @endsection