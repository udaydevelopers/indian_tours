
@extends('layouts.admin')

@section('style')
<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
@endsection

@section('content')
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif
{!! Form::model($package, ['method' => 'PATCH','route' => ['admin.packages.update', $package->id], 'enctype' => "multipart/form-data"]) !!}
<div class="col-lg-12 margin-tb">
                <div class="row">
                    <!-- Listings -->
                    <div class="col-lg-8 col-xl-9">
                        <div class="dashboard-box">
                            <div class="custom-field-wrap">
                            <div class="form-group">
                                <label><h4>Title</h4></label>
                                <input type="text" name="name" value="{{ $package->name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="description" class="form-label"><h4>Description</h4></label>
                                <textarea class="form-control" name="description" placeholder="Description" id="description">
                                {{ $package->description }}
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="program" class="form-label"><h4>Program</h4></label>
                                <input class="form-control" name="program" placeholder="Program" id="program" value="{{ $package->program }}">
                            </div>
                            <div class="form-group">
                                <label for="policy" class="form-label"><h4>Policy</h4></label>
                                <input class="form-control" name="policy" placeholder="Policy" id="policy" value="{{ $package->policy }}">
                            </div>
                            <div class="form-group">
                                <label for="inclusions" class="form-label"><h4>Inclusions</h4></label>
                                <input class="form-control" name="inclusions" placeholder="Inclusions" id="inclusions" value="{{ $package->inclusions }}">
                            </div>
                        </div>
                        </div>
                        <div class="dashboard-box">
                            <div class="custom-field-wrap">
                                <div class="form-group">
                                    <label><h4>Trip Duration</h4></label>
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                <label>Days</label>
                                                    <input type="number" placeholder="Days" name="trip_days" value="{{ $package->trip_days }}">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                <label>Nights</label>
                                                    <input type="number" placeholder="Nights" name="trip_nights"  value="{{ $package->trip_nights }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-box">
                            <div class="custom-field-wrap">
                                <div class="form-group">
                                    <label><h4>Place Covered</h4></label>
                                    <div class="col-sm-12">
                                        <div class="row">
                                        <div class="col-12">
                                                <div class="form-group">
                                                    <span>Place Covered during the trip</span>
                                                    <input type="text" value="{{ ($package->place_covered)?$package->place_covered:'' }}" placeholder="Place Covered Locations" name="place_covered">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                        </div>
                        <div class="dashboard-box">
                            <div class="custom-field-wrap">
                                <h4>Adult</h4>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Sale Price</label>
                                            <input type="text" name="adult_sp" value="{{ $package->adult_sp }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Regular Price</label>
                                            <input type="text" name="adult_rp" value="{{ $package->adult_rp }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Discount</label>
                                            <input type="text" name="adult_dsc" value="{{ $package->adult_dsc }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-box">
                            <div class="custom-field-wrap">
                                <h4>Child</h4>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Sale Price</label>
                                            <input type="text" name="child_sp" value="{{ $package->child_sp }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Regular Price</label>
                                            <input type="text" name="child_rp" value="{{ $package->child_rp }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Discount</label>
                                            <input type="text" name="child_dsc" value="{{ $package->child_dsc }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-box">
                            <div class="custom-field-wrap">
                                <h4>Infant</h4>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Sale Price</label>
                                            <input type="text" name="infant_sp" value="{{ $package->infant_sp }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Regular Price</label>
                                            <input type="text" name="infant_rp" value="{{ $package->infant_rp }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Discount</label>
                                            <input type="text" name="infant_dsc" value="{{ $package->infant_dsc }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-box">
                            <div class="custom-field-wrap">
                                <h4>Couple</h4>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Sale Price</label>
                                            <input type="text" name="couple_sp" value="{{ $package->couple_sp }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Regular Price</label>
                                            <input type="text" name="couple_rp" value="{{ $package->couple_rp }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Discount</label>
                                            <input type="text" name="couple_dsc" value="{{ $package->couple_dsc }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-box">
                            <h4>Gallery</h4>
                            <div class="custom-field-wrap">
                                <div class="dragable-field">
                                    <div class="dragable-field-inner dz-message">
                                        <div class="needsclick dropzone" id="document-dropzone">

                                        </div>
                                    </div>
                                </div>
                            </div>
                       
                            
                        </div>
                        <div class="dashboard-box">
                            
                            <div class="custom-field-wrap">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                            <button type="submit" class="btn btn-primary">Update Package</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3">
                        <div class="dashboard-box">
                        <div class="custom-field-wrap db-pop-field-wrap">
                                <h4>Status</h4>
                                <div class="form-group">
                                <select name="status">
                                <option value="publish" {{ ($package->status == 'publish')?'selected':''}}>Publish</option>
                                <option value="draft" {{ ($package->status == 'draft')?'selected':''}}>Draft</option>
                                </select>
                                </div>
                            </div>
                            <div class="custom-field-wrap db-pop-field-wrap">
                                <h4>Popular</h4>
                                <div class="form-group">
                                    <label class="custom-input">
                                        <input type="checkbox" name="popular" value="1"  {{ ($package->popular == 1)?'checked':''}}>
                                        <span class="custom-input-field"></span>
                                        Use Polpular
                                    </label>
                                </div>
                            </div>
                            <div class="custom-field-wrap db-pop-field-wrap">
                                <h4>Meta Keywords</h4>
                                <div class="form-group">
                                    <input type="text" name="meta_keywords" placeholder="Meta Keywords" value="{{ $package->meta_keywords }}">
                                </div>
                            </div>
                            <div class="custom-field-wrap db-pop-field-wrap">
                                <h4>Meta Descriptions</h4>
                                <div class="form-group">
                                    <textarea  name="meta_descriptions" placeholder="Meta Descriptions">{{ $package->meta_descriptions }}</textarea>
                                </div>
                            </div>
                            <div class="custom-field-wrap db-cat-field-wrap">
                                <h4>Category</h4>
                                @if($parentCategories)
                                    @php $selectedCat = []; @endphp
                                @foreach($package->categories as $cat) 
                                    @php $selectedCat[] = $cat->id @endphp
                                @endforeach
                                @foreach($parentCategories as $category) 
                                <div class="form-group">
                                    <label class="custom-input">
                                    
                                        @php $checked = ''; if(in_array($category->id, $selectedCat)){ $checked = 'checked';} @endphp
                                        <input type="checkbox" value="{{ $category->id }}" name="categories[]" {{ $checked }}>
                                        <span class="custom-input-field"></span>
                                       {{ $category->name }} <br/>
                                       <?php $dash='--'; ?>
                        
                                       @include('admin.categories.subcatcheckbox',['subcategories' => $category->subcategory])
                                    </label>
                                </div>
                               
                                @endforeach
                                @endif
                
                                <div class="add-btn">
                                    <a href="{{ route('admin.categories.create') }}">Add category</a>
                                </div>
                            </div>
                            
                            <div class="custom-field-wrap db-media-field-wrap">
                                <h4>Package Images</h4>
                                    <div class="form-group">
                                    <span> Upload Small Image </span>
                                      <input type="file" name="package_small_pic" class="form-control" name="image">
                                      
                                    </div>
                                    <img src="{{ url('/images/'. $package->package_small_pic) }}">
                                    <div class="form-group">
                                    <span> Upload Large Image </span>
                                    <input type="file" name="package_large_pic" class="form-control" name="image">
                                   
                                    </div>
                                    <img src="{{ url('/images/'. $package->package_large_pic) }}">
                            </div>
                            <hr>
                            <div class="custom-field-wrap db-media-field-wrap">
                                <h4>Page Banner Image</h4>
                                    <div class="form-group">
                                        <span> Alt Text(H1 Tags) </span>
                                        <input type="text" name="page_banner_alt" class="form-control" value="{{ $package->page_banner_alt}}">
                                    </div>
                                    <div class="form-group">
                                        <span> Upload Image </span>
                                        <input type="file" name="page_banner_image" class="form-control">
                                    </div>
                                    @if($package->page_banner_image)
                                    <img src="{{ url('/images/'. $package->page_banner_image) }}">
                                    @endif
                                    <div class="form-group">
                                        <span> H2 Tags </span>
                                        <input type="text" name="h2_tags" class="form-control"  value="{{ $package->h2_tags}}">
                                    </div>
                            </div>
                            <hr>
                            <div class="custom-field-wrap db-media-field-wrap">
                                <h4>Page URL</h4>
                                    <div class="form-group">
                                    <span> Page URL </span>
                                    <input type="text" name="slug" class="form-control" value="{{ $package->slug}}">
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>      
            </div>
            {!! Form::close() !!}
   
            <div class="dashboard-box col-sm-9">
                <h4>Gallery Images</h4>
                    <div class="row" style="padding: 5px;;">
                    @foreach($package->images as $image)
                    <div class="custom-field-wrap col-sm-2 text-center">
                    <img src="{{ url('/images/'.$image->url) }}" width="100"> 

                    <form id="image-{{ $image->id }}" 
                    action="{{ route('admin.images.destroy') }}"
                    method="POST" style="display: block;">
                    <a href="#"
                    onclick="event.preventDefault();
                    document.getElementById('image-{{ $image->id }}').submit();">
                    <span class="badge badge-danger"><i class="far fa-trash-alt"></i></span>
                    </a>
                    <input type="hidden" name="package_id" value="{{ $package->id }}">
                    <input type="hidden" name="image_id" value="{{ $image->id }}">
                    {{ csrf_field() }}
                    {{ method_field('POST') }}
                    </form>
                    <br/>
                    </div>
                    @endforeach 
                    </div>
                </div>  
@endsection

@section('script')
<script src="{!! url('admin/assets/tinymce/js/tinymce/tinymce.min.js') !!}"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: '#description',
            height: 300
        });

        tinymce.init({
            selector: '#program',
            height: 300
        });

        tinymce.init({
            selector: '#policy',
            height: 300
        });
        tinymce.init({
            selector: '#inclusions',
            height: 300
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    <script>
  var uploadedDocumentMap = {}
  Dropzone.options.documentDropzone = {
    url: "{{ route('admin.storeMedia') }}",
    maxFilesize: 2, // MB
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="document[]" value="' + response.name + '">')
      uploadedDocumentMap[file.name] = response.name
    },
    removedfile: function (file) {
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedDocumentMap[file.name]
      }
      $('form').find('input[name="document[]"][value="' + name + '"]').remove()
    },
    init: function () {
      @if(isset($project) && $project->document)
        var files =
          {!! json_encode($project->document) !!}
        for (var i in files) {
          var file = files[i]
          this.options.addedfile.call(this, file)
          file.previewElement.classList.add('dz-complete')
          $('form').append('<input type="hidden" name="document[]" value="' + file.file_name + '">')
        }
      @endif
    }
  }
</script>
@endsection
