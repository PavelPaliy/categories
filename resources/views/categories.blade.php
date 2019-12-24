<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
@foreach($parentCategories as $category)
	<ul>
		<li>{{$category->title}}</li>
	    	@if(count($category->subcategory))
	         	@include('subCategoryList',['subcategories' => $category->subcategory])
	        @endif 
	</ul>
@endforeach
</body>
</html>