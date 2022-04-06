@extends('admin.layouts.app')

@section('content')

	<main id="main" class="main">

	  <div class="pagetitle">
	    <h1>By Laws</h1>
	    <nav>
	      <ol class="breadcrumb">
	        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
	        <li class="breadcrumb-item active">By Laws</li>
	      </ol>
	    </nav>
	  </div><!-- End Page Title -->

	  <section class="section">
	    <div class="row">
	      <div class="col-lg-12">

	        <div class="card">
	          <div class="card-body">
	            <h5 class="card-title">By Laws Chapters</h5>
	            @can('create-users')
	            <a href="{{route('admin.law.create')}}" class="btn btn-primary right"><i class="bi bi-plus"></i> Create Chapter</a>
	            @endcan
	            <!-- Table with stripped rows -->
	            <table class="table datatable">
	              <thead>
	                <tr>
	                  <th scope="col">#</th>
	                  <th scope="col">Chapter</th>
	                  <th scope="col">Date Created</th>
	                  <th scope="col">Action</th>
	                </tr>
	              </thead>
	              <tbody>
	              	@foreach($laws as $key => $law)
	                <tr>
	                  <th scope="row">{{$loop->iteration}}</th>
	                  <td>{{$law->name}}</td>
	                  <td>{{$law->created_at->diffForHumans()}}</td>
	                  <td class="btn-group">
	                  	@can('read-users')
	                  	<a href="{{route('admin.law.edit', $law->id)}}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
	                  	@endcan
	                  	@can('delete-users')
	                  	<a href="" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('del#{{$law->id}}').submit();"><i class="bi bi-trash"></i></a>
	                  	<form id="del#{{$law->id}}" action="{{ route('admin.law.destroy', $law->id) }}" method="POST" onsubmit="return confirm('Are you sure');" style="display: inline-block;">
                          <input type="hidden" name="_method" value="DELETE">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      </form>
	                  	@endcan
	                  </td>
	                </tr>
	                @endforeach
	              </tbody>
	            </table>
	            <!-- End Table with stripped rows -->

	          </div>
	        </div>

	      </div>
	    </div>
	  </section>

	</main><!-- End #main -->

 @endsection