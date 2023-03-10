@extends('admin/layout/master')
@section('page-title')
  Edit Media
@endsection
@section('main-content')
<section class="content">

<!-- SELECT2 EXAMPLE -->
<form name="formEdit" id="formEdit" method="post" action="/admin/media/{{ $media->id }}" enctype="multipart\form-data">
@csrf
@method('put')  
<!-- form start -->
<div class="box box-primary">
  <!-- /.box-header -->
  <div class="box-body">
    <!-- row start -->
    <div class="row"> 
          <div class="col-xs-6">
            
            <div class="form-group">
              <label for="title">Title <span class="text text-red">*</span></label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title">
              </div>

              <div class="form-group">
              <label for="slug">Slug <span class="text text-red">*</span></label>
                <input type="text" name="slug" class="form-control" id="slug" placeholder="Slug">
              </div>
              <div class="form-group">
                <label>Media Type <span class="text text-red">*</span></label>
                <select name="media_type" id="media_type" class="form-control" style="width: 100%;">
                  <option value="none">-- Select Media Type --</option>
                  <option value="slider">Slider</option>
                  <option value="gallery">Gallery</option>
                </select>
              </div>
            </div>
           
          <div class="col-xs-6">
             <div class="form-group">
                <label for="media_img">Media Image <span class="text text-red">*</span></label>
                <input type="file" name="media_img" class="form-control" id="media_img">
              </div>
              <div class="form-group">
                <label>Description</label>
                <textarea name="description" id="description" class="form-control" rows="5" placeholder="Enter ..."></textarea>
               </div>
            </div>
      </div>

        <!-- row end -->

  </div>
  <!-- /.box-body -->
  <div class="box-footer">
      <button type="submit" class="btn btn-primary">Update</button>
      <button type="reset" class="btn btn-danger">Cancel</button>
    </div>
</div>
<!-- /.box -->
</form>
<!-- form end -->

</section>
@endsection