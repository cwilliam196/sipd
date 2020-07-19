@extends('layout.userMain')

@section('title', 'Update Profile')

@section('container')


<!--agileinfo-grap-->
<div class="agileinfo-grap">
	<div class="agileits-box">
	<header class="agileits-box-header clearfix">
	<h2 class="mgbt-xs-20"> Profile: <span class="font-semibold">{{Auth::user()->name}}</span> </h2>
	</header>
<form class="form-horizontal" method="POST" action="{{route('edit')}}" enctype="multipart/form-data" role="form">
			@csrf
			<div class="panel-body">
				<br>
				<div class="row">
				<div class="col-sm-3 mgbt-xs-20">
					<div class="form-group">
					<div class="col-xs-12">
						<div class="form-img text-center mgbt-xs-15"> <img alt="example image" src="{{asset('storage/'.auth()->user()->images) }}"> </div>
						<br>
						<div>
						<table class="table table-striped table-hover">
							<tbody>
							<tr>
								<td style="width:60%;">Status</td>
								<td><span class="label label-success">{{Auth::user()->status}}</span></td>
							</tr>
							<tr>
								<td>Dibuat</td>
								<td>{{Auth::user()->created_at}}</td>
							</tr>
							</tbody>
						</table>
						</div>
					</div>
					</div>
				</div>
				<div class="col-sm-9">
					<h3 class="mgbt-xs-15">Account Setting</h3>
					@if (session('status'))
						<div class="alert alert-success">
							{{session('status')}}
						</div>
					@endif
					<div class="form-group">
					<label class="col-sm-3 control-label">Email</label>
					<div class="col-sm-9 controls">
						<div class="row mgbt-xs-0">
						<div class="col-xs-9">
							<input type="email" id="email"name="email" value="{{Auth::user()->email}}">
							<input type="id" id="id"name="id" value="{{Auth::user()->id}}" hidden>
						</div>
						</div>
						<!-- row -->
					</div>
					<!-- col-sm-10 -->
					</div>
					<!-- form-group -->

					<div class="form-group">
					<label for="name" class="col-sm-3 control-label">Name</label>
					<div class="col-sm-9 controls">
						<div class="row mgbt-xs-0">
						<div class="col-xs-9">
							<input id="name" type="name" class="form-control" name="name" value="{{Auth::user()->name}}">
						</div>
						</div>
						<!-- row -->
					</div>
					<!-- col-sm-10 -->
					</div>

					<!-- form-group -->

					<div class="form-group">
					<label class="col-sm-3 control-label">Upload Photo</label>
					<div class="col-sm-9 controls">
						<div class="row mgbt-xs-0">
						<div class="col-xs-9">
							<input type="file" id="images" name="images" value="{{Auth::user()->images}}">
						</div>
						<!-- col-xs-12 -->
						</div>
						<!-- row -->
					</div>
					<!-- col-sm-10 -->
					</div>
					<!-- form-group -->

					<div class="form-group">
					<label class="col-sm-3 control-label">Password</label>
					<div class="col-sm-9 controls">
						<div class="row mgbt-xs-0">
						<div class="col-xs-9">
							<input type="password" id="password" name="password" class="width-40" required>
						</div>
						<!-- col-xs-12 -->
						</div>
						<!-- row -->
					</div>
					<!-- col-sm-10 -->
					</div>

					<button class="btn vd_btn vd_bg-green col-md-offset-3" ><span class="menu-icon"><i class="fa fa-fw fa-check"></i></span> Simpan</button>



				</div>
				<!-- col-sm-12 -->
				</div>
				<!-- row -->
			</div>


		<!-- panel-body -->
		</form>
	</div>
</div>
	<!--//agileinfo-grap-->



@endsection
