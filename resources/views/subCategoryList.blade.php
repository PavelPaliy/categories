@foreach($subcategories as $subcategory)
	<ul>
    	<li>{{$subcategory->title}}</li> 
	    @if(count($subcategory->subcategory))
            @include('subCategoryList',['subcategories' => $subcategory->subcategory])
        @endif
    </ul> 
@endforeach