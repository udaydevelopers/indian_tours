
@extends('layouts.admin')


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
                                    <label>Title</label>
                                    <input type="text" name="name">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-box">
                            <div class="custom-field-wrap">
                                <h4>Dates and Prices</h4>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Group Size</label>
                                            <input type="number" name="size" placeholder="No of Pax">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Trip Duration</label>
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
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select>
                                                <option>Adult</option>
                                                <option>Child</option>
                                                <option>Couple</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Sale Price</label>
                                            <input type="text" name="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Regular Price</label>
                                            <input type="text" name="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
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
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Select Map</label>
                                            <select>
                                                <option>Google Map</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>API key</label>
                                            <input type="text" name="apikey">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3">
                        <div class="dashboard-box">
                            <div class="custom-field-wrap">
                                <h4>Publish</h4>
                                <div class="publish-btn">
                                    <div class="form-group">
                                        <input type="submit" name="draft" value="Save Draft">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="preview" value="Preview">
                                    </div>
                                </div>
                                <div class="publish-status">
                                    <span>
                                        <strong>Status:</strong>
                                        Draft
                                    </span>
                                    <a href="#">Edit</a>
                                </div>
                                <div class="publish-status">
                                    <span>
                                        <strong>Visibility:</strong>
                                        Poblic
                                    </span>
                                    <a href="#">Edit</a>
                                </div>
                                <div class="publish-status">
                                    <span>
                                        <strong>Visibility:</strong>
                                        Poblic
                                    </span>
                                    <a href="#">Edit</a>
                                </div>
                                <div class="publish-action">
                                    <input type="submit" name="publish" value="Publish">
                                </div>
                            </div>
                        </div>
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
                                <h4>Keywords</h4>
                                <div class="form-group">
                                    <input type="text" name="keyword" placeholder="Keywords">
                                </div>
                            </div>
                            <div class="custom-field-wrap db-cat-field-wrap">
                                <h4>Category</h4>
                                <div class="form-group">
                                    <label class="custom-input"><input type="checkbox">
                                        <span class="custom-input-field"></span>
                                        Hotel
                                    </label>
                                </div>
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
                                <h4>Add image</h4>
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