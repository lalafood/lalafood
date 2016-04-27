@extends('admin.layouts.template')
@section('stylesheet')
	<link href="{{asset('assets/css/admin-upload.css')}}" rel="stylesheet" type="text/css"/>
@stop
@section('content')
<form action="{{url('/admin/upload/action')}}" method="post" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="row page-header">
		<div class="col-sm-12">
			<h1 class="">Basic Uploader</h1>
		</div>
		<div class="col-sm-6 text-right padding-top-20">
			<input type="file" name="uploader1" id="uploader" />
			<input type="file" name="uploader2" id="uploader" />
			<input type="file" name="uploader3" id="uploader" />
			<h2 >Name:<h2><input type="text" name="name"><br>
			<h2 >Type:

						<select name="type">
							<option value="">Select.</option>
							<option value="maincouse">maincouse</option>
							<option value="Soup or Curry">Soup or Curry</option>
							<option value="noodle">noodle</option>
							<option value="Dished">Dished</option>
							<option value="Dessert">Dessert</option>
						</select>
			</h2>

			<h2 >Price: <br><br><input type="number" name="price"></h2>
			<h2 >Describe:
			<textarea rows="6" cols="35" name="discribtion" style="margin-top:20px"></textarea>

		</div>
		<div class="col-sm-6 text-right padding-top-20">
			<button class="btn btn-success" type="submit" name = "btn-upload" title="Upload image"><i class="fa fa-upload" ></i> Upload</button>
			<button class="btn btn-danger del" type="submit" name = "btn-delete" title="Delete Multiple image"><i class="fa fa-trash-o" ></i> Delete</button>
		</div>
		<!-- /.col-lg-12 -->
	</div>

	</div>
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="dataTable_wrapper">
				<table class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>No.</th>
							<th><input type="checkbox" id="checkAll"/></th>

							<th>Picture1</th>
							<th>Picture2</th>
							<th>Picture3</th>
							<th>Name</th>
							<th>Type</th>
							<th>Price</th>
							<th>Describe</th>


							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					@if($food)
						@foreach($food as $img)
						<tr>
							<td>{{$img->id}}</td>
							<td class="text-center"><input name="id[]" type="checkbox" id="id" value="{{$img->id}}" class="checkboxAll" /></td>
							<td><img src="{{asset('images/uploads/'.$img->imag_name1)}}" height="42" width="42"/></td>
							<td><img src="{{asset('images/uploads/'.$img->imag_name2)}}" height="42" width="42"/></td>
							<td><img src="{{asset('images/uploads/'.$img->imag_name3)}}" height="42" width="42"/></td>
							<td>{{$img->name}}</td>
							<td>{{$img->type}}</td>
							<td>{{$img->price}}</td>
							<td>{{$img->discribtion}}</td>

							<td class="text-right">
								<a href="{{url('admin/upload/form/'.$img->id)}}" title="" class="edit"><i class="fa fa-edit"></i></a>
								<a href="{{url('admin/upload/delete/'.$img->id)}}" title="" class="del"><i class="glyphicon glyphicon-remove"></i></a>
							</td>
						</tr>
						@endforeach
					@endif
					</tbody>
				</table>
			</div>
		</div>
	</div>



</form>
@stop
