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
        <th class="col-md-2">Title</th>
        <th class="col-md-4">Content</th>
        <th class="col-md-1">Image</th>
        <th class="col-md-1">User</th>
        <th class="col-md-1">Tags</th>
        <th class="col-md-1">Edit</th>
        <th class="col-md-1">Delete</th>
      </tr>
    </thead>
    <tbody>
@forelse($blogs as $blog)
      <tr>
        <td class="">{{ $blog->title }}</td>
        <td class="">{!! Markdown::parse(Str_limit($blog->content, 100)) !!}</td>
        <td class=""><img src="{{ url('/images/blog/thumb/' . $blog->image )}}" class="img-responsive"></td>
        <td class="">{{ $blog->user->name }}</td>
        <td class="">
        <ol>
          @forelse($blog->tags as $tag)
          <li>
            {{ $tag }}
          </li>
          @empty
            No Tag Attached
          @endforelse
        </ol>
        </td>
        <td>
          {{ $blog->published_at->diffForHumans() }}
        </td>
        <td class=""><a href="#" class="btn btn-info">Edit</a></td>
        <td class=""><a href="#" class="btn btn-danger">Delete</a></td>
      </tr>
       @empty
 <h2>No Slider Uploaded Yet</h2>
 @endforelse
    </tbody>
  </table>

                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
            
          </div>   <!-- /.row -->
        </section><!-- /.content -->

@endsection