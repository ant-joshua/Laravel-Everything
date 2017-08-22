@extends('admin.layout')
@section('content')
<section class="content-header">
          <h1>
           Slider
            <small>Create</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>DashBoard</a></li>
            <li><a href="#">Slider</a></li>
            <li class="active">Create</li>
          </ol>
        </section>
        <section class="content">
          <div class="row">
            <!-- right column -->
            <div class="col-md-12">
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header">
                </div><!-- /.box-header -->
                <div class="box-body">
                 <table class="table table-hover">
    <thead>
      <tr>
        <th class="col-md-7">Title</th>
        <th class="col-md-2">Image</th>
        <th class="col-md-1">User</th>
        <th class="col-md-1">Edit</th>
        <th class="col-md-1">Delete</th>
      </tr>
    </thead>
    <tbody>
@forelse($sliders as $slider)
      <tr>
        <td class="col-md-6">{{ $slider->title }}</td>
        <td class="col-md-2"><img src="{{ url('/images/slider/thumb/' . $slider->image )}}" class="img-responsive"></td>
        <td class="col-md-2">{{ $slider->user->name }}</td>
        <td class="col-md-1"><a href="#" class="btn btn-info">Edit</a></td>
        <td class="col-md-1"><a href="#" class="btn btn-danger">Delete</a></td>
      </tr>
       @empty
 <h2>No Slider UPloaded Yet</h2>
 @endforelse
    </tbody>
  </table>

                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
            
          </div>   <!-- /.row -->
        </section><!-- /.content -->

@endsection