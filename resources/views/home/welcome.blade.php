@extends('home.layout')

@section('modalWindows')
	@include('home._modals.editAccount')
	@include('home._modals.manageProjects')
@stop

@section('content')
	@if(App::environment('staging')||App::environment('development'))
	    <div class="helptip">
	        <div class="panel-body text-center">
	        	Here you can change your basic account settings, go straight to your profile, or soon open up a list of the projects you're working on.
	        </div>
	    </div>
	@endif
	@if(count($errors)>0)
		<div class="alert alert-danger">
			@foreach($errors->all() as $error)
				<p>{{$error}}</p>
			@endforeach
		</div>
	@endif

	@if(session('status'))
		<div class="alert alert-info">
			{{session('status')}}
		</div>
	@endif

	@if(session('error'))
		<div class="alert alert-danger">
			{{session('error')}}
		</div>
	@endif
	<div class="col-md-12 panel panel-default">
		<div class="panel-body text-center">
			<h2>Welcome Back, <em>{{ $user->name }}</em></h2>
			<a class="btn btn-default btn-block" href="/people/{{ $user->nick }}">
			    Edit Profile
			</a>
			<button class="btn btn-default btn-block" data-toggle="modal" data-target="#editAccount_modal">
			    Edit Account Information
			</button>
			@if(App::environment('development'))
			<button class="btn btn-default btn-block" data-toggle="modal" data-target="#manageProjects_modal">
			    Manage Projects
			</button>	
			@endif
			<a href="logout" class="btn btn-default">Logout</a>
		</div>
	</div>
	<div class="clear"></div>
@stop

@section('scripts')
	<script type="text/javascript">
		$(document).ready(function(){
			$("#account-info_submit").click(function(event){
				//first, check to see if anything is even set
				event.preventDefault();

				if($("#update-email-valid").val()&&$("#update-email-valid").val()==$("#update-email").val()){
					if($("#update-email").val() !== ""){
						alert('Email is valid');
					}else{
						alert('No empty strings allowed');
						return;
					}					
				}

				$("#update-user").submit();
			});
		});
	</script>
@stop
