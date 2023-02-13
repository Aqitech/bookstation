@extends('admin/layout/master')
@section('page-title')
    Create Team
@endsection
@section('main-content')
    <section class="content">
        <!-- SELECT2 EXAMPLE -->
        <!-- form start -->
        <form name="formCreate" id="formCreate" method="post" action="/admin/team">
        @csrf
            <div class="box box-primary">
                <!-- /.box-header -->
                <div class="box-body">
                    <!-- row start -->
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="fullname">Fullname <span class="text text-red">*</span></label>
                                <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Fullname">
                                 @error('fullname')
                                    <div class="label label-danger">{{ $message }}</div>
                                 @enderror
                            </div>
                            <div class="form-group">
                                <label for="designation">Designation <span class="text text-red">*</span></label>
                                <input type="text" name="designation" class="form-control" id="designation" placeholder="Designation">
                                @error('designation')
                                    <div class="label label-danger">{{ $message }}</div>
                                 @enderror
                            </div>
                            <div class="form-group">
                                <label for="telephone">Telephone</label>
                                <input type="text" name="telephone" class="form-control" id="telephone" placeholder="Telephone">
                            </div>
                            <div class="form-group">
                                <label for="mobile">Mobile</label>
                                <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Mobile">
                            </div>
                            <div class="form-group">
                                <label for="email">Email <span class="text text-red">*</span></label>
                                <input type="text" name="email" class="form-control" id="email" placeholder="Email">
                                @error('email')
                                    <div class="label label-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" id="description" class="form-control" rows="5" placeholder="Enter ..."></textarea>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="team_img">Team Image <span class="text text-red">*</span></label>
                                <input type="file" name="team_img" class="form-control" id="team_img">
                                @error('team_img')
                                    <div class="label label-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="facebook_id">Facebook ID <span class="text text-red">*</span></label>
                                <input type="text" name="facebook_id" class="form-control" id="facebook_id" placeholder="Facebook ID">
                                @error('facebook_id')
                                    <div class="label label-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="twitter_id">Twitter ID <span class="text text-red">*</span></label>
                                <input type="text" name="twitter_id" class="form-control" id="twitter_id" placeholder="Twitter ID">
                                @error('twitter_id')
                                    <div class="label label-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="pinterest_id">Pinterest ID <span class="text text-red">*</span></label>
                                <input type="text" name="pinterest_id" class="form-control" id="pinterest_id" placeholder="Pinterest ID">
                                @error('pinterest_id')
                                    <div class="label label-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            
                        </div>
                    </div>
                    <!-- row end -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-danger">Cancel</button>
                </div>
            </div>
        <!-- /.box -->
        </form>
        <!-- form end -->
    </section>
@endsection