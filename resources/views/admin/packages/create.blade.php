
@extends('layouts.admin')

@push('head')

@endpush

@section('content')
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<div class="col-lg-12 margin-tb">
                <div class="row">
                    <!-- Listings -->
                    <div class="col-lg-8 col-xl-9">
                        <div class="dashboard-box">
                            <div class="custom-field-wrap">
                                <div class="form-group">
                                    <label><h4>Title</h4></label>
                                    <input type="text" name="name">
                                </div>
                            <div class="form-group">
                                <label for="description" class="form-label"><h4>Description</h4></label>
                                <input value="" type="text"  class="form-control" name="description" placeholder="Description" id="description" required>
                            </div>
                            <div class="form-group">
                                <label for="program" class="form-label"><h4>Program</h4></label>
                                <input value="" type="text"  class="form-control" name="program" placeholder="Program" id="program" required>
                            </div>
                            <div class="form-group">
                                <label for="policy" class="form-label"><h4>Policy</h4></label>
                                <input value="" type="text"  class="form-control" name="policy" placeholder="Policy" id="policy" required>
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
                                                    <input type="number" placeholder="Days">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <input type="number" placeholder="Nights">
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
                                            <input type="text" name="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Regular Price</label>
                                            <input type="text" name="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Discount</label>
                                            <input type="text" name="name">
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
                                            <input type="text" name="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Regular Price</label>
                                            <input type="text" name="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Discount</label>
                                            <input type="text" name="name">
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
                                            <input type="text" name="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Regular Price</label>
                                            <input type="text" name="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Discount</label>
                                            <input type="text" name="name">
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
                                            <input type="text" name="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Regular Price</label>
                                            <input type="text" name="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Discount</label>
                                            <input type="text" name="name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-box">
                            <h4>Gallery</h4>
                            <div class="custom-field-wrap">
                                <div class="dragable-field">
                                    <div class="dragable-field-inner">
                                        <p class="drag-drop-info">Drop Files To Upload</p>
                                        <p>or</p>
                                        <div class="upload-input">
                                            <div class="form-group">
                                              <span class="upload-btn">Upload a image</span>
                                              <input type="file" name="myfile">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-box">
                            <h4>Location</h4>
                            <div class="custom-field-wrap">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Add Google Map Embed Script</label>
                                            <textarea>
                                                
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3">
                        <div class="dashboard-box">
                            <div class="custom-field-wrap db-pop-field-wrap">
                                <h4>Popular</h4>
                                <div class="form-group">
                                    <label class="custom-input"><input type="checkbox">
                                        <span class="custom-input-field"></span>
                                        Use Polpular
                                    </label>
                                </div>
                            </div>
                            <div class="custom-field-wrap db-pop-field-wrap">
                                <h4>Meta Keywords</h4>
                                <div class="form-group">
                                    <input type="text" name="meta_keyword" placeholder="Meta Keywords">
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
                                @foreach($parentCategories as $category)
                                <div class="form-group">
                                    <label class="custom-input"><input type="checkbox">
                                        <span class="custom-input-field"></span>
                                       {{ $category->name }}
                                    </label>
                                </div>
                                @endforeach
                                @endif
                                <div class="form-group">
                                    <label class="custom-input"><input type="checkbox" checked="checked">
                                        <span class="custom-input-field"></span>
                                        Walking
                                    </label>
                                </div>
                                <div class="add-btn">
                                    <a href="#">Add category</a>
                                </div>
                            </div>
                            <div class="custom-field-wrap db-media-field-wrap">
                                <h4>package small image</h4>
                                <div class="upload-input">
                                    <div class="form-group">
                                      <span class="upload-btn">Upload a image</span>
                                      <input type="file" name="myfile">
                                    </div>
                                </div>
                            </div>
                            <div class="custom-field-wrap db-media-field-wrap">
                                <h4>package large image</h4>
                                <div class="upload-input">
                                    <div class="form-group">
                                      <span class="upload-btn">Upload a image</span>
                                      <input type="file" name="myfile">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
    </script>
@endsection
