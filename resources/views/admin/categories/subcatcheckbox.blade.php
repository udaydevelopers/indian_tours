<?php $dash.='-- '; ?>
@foreach($subcategories as $subcategory) 
    <label class="custom-input"><input type="checkbox" value="{{$subcategory->id}}" name="categories[]" {{ ($subcategory->id == $cat->id)?'checked':'' }}>
        <span class="custom-input-field"></span> {{$dash}}{{$subcategory->name}}
    @if(count($subcategory->subcategory))
        @include('admin.categories.subcatcheckbox',['subcategories' => $subcategory->subcategory])
    @endif
@endforeach