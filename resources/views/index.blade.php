<html>
	<head>
		<title>Cascading Dropwon</title>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	</head>
	<body>
		<div class="container">
			<h3>Categories and Subcategories Ajax</h3>
			<div class="col-lg-4">
				{!! Form::open(array('url' => '','files'=>true))  !!}
				{!!	Form::token(); !!}
					<div class="form-group">
						<label for="">Categories</label>
						<select class="form-control input-sm" name="category" id="category">
						@foreach($categories as $category)
						<option value="{{$category->id}}">{{$category->name}}</option>
						
						@endforeach
						</select>
					</div>

					<div class="form-group">
						<label for="">Sub Categories</label>
						<select class="form-control input-sm" name="subcategory" id="subcategory">
						<option value=""></option>
						</select>
					</div>


				{!!Form::close()!!}
			</div>
		</div>
		<script>
			$('#category').on('change',function(e){
							
			 $('#subcategory').find('option').remove().end();
				var cat_id = $('#category option:selected').attr('value');
			
				var info=$.get("{{url('ajax')}}",{cat_id:cat_id});
				info.done(function(data){
					$.each(data,function(index,subcatObj){
						$('#subcategory').append('<option value="'+subcatObj.id+'">'+
													subcatObj.name+'</option>');
					});
				});
				info.fail(function(){
					alert('ok');
				});
			});
		</script>
	</body>

</html>