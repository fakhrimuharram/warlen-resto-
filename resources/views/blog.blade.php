@extends('layouts.global')

@section('content')
<div class="row">
    <div class="col-lg-12">
    <!-- Posts list -->
    @if(!empty($posts))
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Posts List </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <table class="table table-striped task-table">
                    <!-- Table Headings -->
                    <thead>
                        <th width="25%">Title</th>
                        <th width="10%">Alamat</th>
                        <th width="30%">Content</th>
                        <th width="15%">Created</th>
                        <th width="20%">Action</th>
                    </thead>

                    <h1>ASUASUSU</h1>
    
                    <!-- Table Body -->
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td class="table-text">
                                <div>{{$post->title}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$post->alamat}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$post->content}}</div>
                            </td>
                                <td class="table-text">
                                <div>{{$post->created}}</div>
                            </td>
                            <td>
                                <a href="{{ route('posts.details', $post->id) }}" class="label label-success">Details</a>
                                <a href="{{ route('posts.edit', $post->id) }}" class="label label-warning">Edit</a>
                                <a href="{{ route('posts.delete', $post->id) }}" class="label label-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
    </div>
</div>
@endsection