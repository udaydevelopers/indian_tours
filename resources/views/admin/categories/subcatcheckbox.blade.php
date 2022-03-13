<?php $dash.='-- '; ?>
@foreach($subcategories as $subcategory)
    <label class="custom-input"><input type="checkbox" value="{{$subcategory->id}}">
                                        <span class="custom-input-field"></span> {{$dash}}{{$subcategory->name}}
    @if(count($subcategory->subcategory))
        @include('admin.categories.subcatcheckbox',['subcategories' => $subcategory->subcategory])
    @endif
@endforeach