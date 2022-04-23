<?php $dash.='-- '; ($selectedCat)?$selectedCat:[]; ?>

@foreach($subcategories as $subcategory) 
    <label class="custom-input">
    @php $checked = ''; if(in_array($subcategory->id, $selectedCat)){ $checked = 'checked';} @endphp 
    <input type="checkbox" value="{{$subcategory->id}}" name="categories[]" {{ $checked }}>
        <span class="custom-input-field"></span> {{$dash}}{{$subcategory->name}}
    @if(count($subcategory->subcategory))
        @include('admin.categories.subcatcheckbox',['subcategories' => $subcategory->subcategory])
    @endif
@endforeach