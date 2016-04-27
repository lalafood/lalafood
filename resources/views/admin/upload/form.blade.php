<form action="{{url('/admin/upload/form')}}" method="post" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" name="id" value="{{ $id }}">
	<div class="row page-header">
		<div class="col-sm-12">
			<h1 class="">{{$id != null ? 'Update' : 'Add New'}} Food</h1>
		</div>
        <img src="{{asset('images/uploads/'.$food->imag_name1)}}"  height="42" width="42" title="{{$food->imag_name1}}"/>
        <img src="{{asset('images/uploads/'.$food->imag_name2)}}"  height="42" width="42" title="{{$food->imag_name2}}"/>
        <img src="{{asset('images/uploads/'.$food->imag_name3)}}"  height="42" width="42" title="{{$food->imag_name3}}"/>

		<div class="col-sm-6 text-right padding-top-20">
			<input type="file" name="uploader1" id="uploader" />
			<input type="file" name="uploader2" id="uploader" />
			<input type="file" name="uploader3" id="uploader" />
			<h2 >Name:<h2><input type="text" name="name" value="{{ $food ? $food->name : old('name') }}"><br>
			<h2 >Type:

						<select name="type">
							<option value="{{ $food ? $food->type : old('type') }}">{{ $food ? $food->type : old('type') }}.</option>
							<option value="maincouse">maincouse</option>
							<option value="Soup or Curry">Soup or Curry</option>
							<option value="noodle">noodle</option>
							<option value="Dished">Dished</option>
							<option value="Dessert">Dessert</option>
						</select>
			</h2>

			<h2 >Price: <br><br><input type="number" name="price" value="{{ $food ? $food->price : old('price') }}"></h2>
			<h2 >Describe:
			<textarea rows="6" cols="35" name="discribtion" style="margin-top:20px">{{ $food ? $food->discribtion : old('discribtion') }}</textarea>

		</div>
		<div class="col-sm-6 text-right padding-top-20">
			<button class="btn btn-success" type="submit" name = "btn-upload" title="Upload food"><i class="fa fa-upload" ></i> Upload</button>
			<button class="btn btn-danger del" type="submit" name = "btn-delete" title="Delete Multiple image"><i class="fa fa-trash-o" ></i> Delete</button>
		</div>
