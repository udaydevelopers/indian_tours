
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
{!! Form::open(array('route' => 'admin.packages.store','method'=>'POST', 'enctype' => "multipart/form-data")) !!}
<div class="col-lg-12 margin-tb">
                <div class="row">
                    <!-- Listings -->
                    <div class="col-lg-8 col-xl-9">
                        <div class="dashboard-box">
                            <div class="custom-field-wrap">
                                <div class="form-group">
                                    <label><h4>Title</h4></label>
                                    <input type="text" name="name" required>
                                </div>
                            <div class="form-group">
                                <label for="description" class="form-label"><h4>Description</h4></label>
                                <textarea class="form-control" name="description" placeholder="Description" id="description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="program" class="form-label"><h4>Program</h4></label>
                                <input class="form-control" name="program" placeholder="Program" id="program">
                            </div>
                            <div class="form-group">
                                <label for="policy" class="form-label"><h4>Cancellation Policy</h4></label>
                                <input class="form-control" name="policy" placeholder="Policy" id="policy">
                            </div>
                            <div class="form-group">
                                <label for="inclusions" class="form-label"><h4>Inclusions</h4></label>
                                <input class="form-control" name="inclusions" placeholder="Inclusions" id="inclusions">
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
                                                <span>Trip Days</span>
                                                    <input type="number" placeholder="Days" name="trip_days">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                <span>Trip Nights</span>
                                                    <input type="number" placeholder="Nights" name="trip_nights">
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
                                                    <input type="text" placeholder="Place Covered Locations" name="place_covered">
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
                                            <input type="text" name="adult_sp">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Regular Price</label>
                                            <input type="text" name="adult_rp">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Discount</label>
                                            <input type="text" name="adult_dsc">
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
                                            <input type="text" name="child_sp">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Regular Price</label>
                                            <input type="text" name="child_rp">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Discount</label>
                                            <input type="text" name="child_dsc">
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
                                            <input type="text" name="infant_sp">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Regular Price</label>
                                            <input type="text" name="infant_rp">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Discount</label>
                                            <input type="text" name="infant_dsc">
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
                                            <input type="text" name="couple_sp">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Regular Price</label>
                                            <input type="text" name="couple_rp">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Discount</label>
                                            <input type="text" name="couple_dsc">
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
                                            <button type="submit" class="btn btn-primary">Add Package</button>
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
                                <option value="publish">Publish</option>
                                <option value="draft">Draft</option>
                                </select>
                                </div>
                            </div>
                            <div class="custom-field-wrap db-pop-field-wrap">
                                <h4>Popular</h4>
                                <div class="form-group">
                                    <label class="custom-input"><input type="checkbox" name="popular" value="1">
                                        <span class="custom-input-field"></span>
                                        Use Polpular
                                    </label>
                                </div>
                            </div>
                            <div class="custom-field-wrap db-pop-field-wrap">
                                <h4>Meta Keywords</h4>
                                <div class="form-group">
                                    <input type="text" name="meta_keywords" placeholder="Meta Keywords">
                                </div>
                            </div>
                            <div class="custom-field-wrap db-pop-field-wrap">
                                <h4>Meta Descriptions</h4>
                                <div class="form-group">
                                    <textarea  name="meta_descriptions" placeholder="Meta Descriptions"></textarea>
                                </div>
                            </div>
                            <div class="custom-field-wrap db-cat-field-wrap">
                                <h4>Category</h4>
                                @if($parentCategories)
                                @php $selectedCat = []; @endphp
                                @foreach($parentCategories as $category)
                                <div class="form-group">
                                    <label class="custom-input"><input type="checkbox" value="{{ $category->id }}" name="categories[]">
                                       <span class="custom-input-field"></span>
                                       {{ $category->name }}
                                       <?php $dash=''; ?>
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
                                      <input type="file" name="package_small_pic" class="form-control" required name="image">
                                    </div>
                                    <div class="form-group">
                                    <span> Upload Large Image </span>
                                    <input type="file" name="package_large_pic" class="form-control" required name="image">
                                    </div>
                            </div>
                        
                            <div class="custom-field-wrap db-media-field-wrap">
                                <h4>Page Banner Image</h4>
                                    <div class="form-group">
                                    <span> Alt Text(H1 Tags) </span>
                                    <input type="text" name="page_banner_alt" class="form-control">
                                    </div>
                                    <div class="form-group">
                                    <span> Upload Image </span>
                                    <input type="file" name="page_banner_image" class="form-control">
                                    </div>
                                    <div class="form-group">
                                    <span> H2 Tags </span>
                                    <input type="text" name="h2_tags" class="form-control">
                                    </div>
                            </div>
                            <hr>
                            <div class="custom-field-wrap db-media-field-wrap">
                                <h4>Page URL</h4>
                                    <div class="form-group">
                                    <span> Page URL </span>
                                    <input type="text" name="slug" class="form-control">
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>      
            </div>
            {!! Form::close() !!}
@endsection

@section('script')
<script src="{!! url('admin/assets/tinymce/js/tinymce/tinymce.min.js') !!}"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: '#description',
            height: 300,
            menubar: false,
            plugins: "link image code lists",
            toolbar: 'undo redo | styleselect | forecolor | bold italic | numlist bullist | alignleft aligncenter alignright alignjustify | outdent indent | link image | code'
        });

        tinymce.init({
            selector: '#program',
            height: 300,
            menubar: false,
            plugins: "link image code lists",
            toolbar: 'undo redo | styleselect | forecolor | bold italic | numlist bullist | alignleft aligncenter alignright alignjustify | outdent indent | link image | code'

        });

        tinymce.init({
            selector: '#policy',
            height: 300,
            menubar: false,
            plugins: "link image code lists",
            toolbar: 'undo redo | styleselect | forecolor | bold italic | numlist bullist | alignleft aligncenter alignright alignjustify | outdent indent | link image | code'

        });
        tinymce.init({
            selector: '#inclusions',
            height: 300,
            menubar: false,
            plugins: "link image code lists",
            toolbar: 'undo redo | styleselect | forecolor | bold italic | numlist bullist | alignleft aligncenter alignright alignjustify | outdent indent | link image | code'

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
