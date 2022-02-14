@extends('admin.layouts.app')

@section('content')

	<main id="main" class="main">

	  <div class="pagetitle">
	    <h1>Constituton</h1>
	    <nav>
	      <ol class="breadcrumb">
	        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
	        <li class="breadcrumb-item active">Constitution</li>
	      </ol>
	    </nav>
	  </div><!-- End Page Title -->

	  <section class="section">
	    <div class="row">
	      <div class="col-lg-12">

	        <div class="card">
	          <div class="card-body">
	            <h5 class="card-title">Consititution Chapters</h5>
	            @can('create-users')
	            <a href="{{route('admin.constitution.create')}}" class="btn btn-primary right"><i class="bi bi-plus"></i> Create Chapter</a>
	            @endcan
	            <!-- Table with stripped rows -->
	            <table class="table datatable">
	              <thead>
	                <tr>
	                  <th scope="col">#</th>
	                  <th scope="col">Role</th>
	                  <th scope="col">Location</th>
	                  <th scope="col">Quantity</th>
	                  <th scope="col">Date Created</th>
	                  <th scope="col">Action</th>
	                </tr>
	              </thead>
	              <tbody>
	              	@foreach($consts as $key => $const)
	                <tr>
	                  <th scope="row">{{$loop->iteration}}</th>
	                  <td>{{$const->role}}</td>
	                  <td>{{$const->location}}</td>
	                  <td>{{$const->qty}}</td>
	                  <td>{{$const->created_at->diffForHumans()}}</td>
	                  <td class="btn-group">
	                  	@can('read-users')
	                  	<a href="{{route('admin.jobs.edit', $const->id)}}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
	                  	@endcan
	                  	@can('delete-users')
	                  	<a href="" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('del#{{$const->id}}').submit();"><i class="bi bi-trash"></i></a>
	                  	<form id="del#{{$const->id}}" action="{{ route('admin.jobs.destroy', $const->id) }}" method="POST" onsubmit="return confirm('Are you sure');" style="display: inline-block;">
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