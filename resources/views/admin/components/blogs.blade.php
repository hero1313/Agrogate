@extends('admin.index')
@section('content')
    <div class="layout-page">

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">ადმინპანელი /</span>ბლოგი</h4>

            <!-- Basic Bootstrap Table -->
            <button class="mb-4 btn btn-primary" data-toggle="modal" data-target="#add_blog">ბლოგის დამატება</button>

            <div class="card">
                <h5 class="card-header">ბლოგი</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>დასახელება</th>
                                <th>სურათი</th>
                                <th>რედაქტირება</th>
                                <th>წაშლა</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($blogs as $blog)
                                <tr>
                                    <td>
                                        <span class="fw-medium">{{ $blog->id }}</span>
                                    </td>
                                    <td>{{ $blog->name_ge }}</td>
                                    <td><img class="blog-img" src="{{ $blog->image }}" alt=""></td>
                                    <td>
                                        <button class="btn btn-primary" data-toggle="modal"
                                            data-target="#blog_update_{{ $blog->id }}">რედაქტირება</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-danger" data-toggle="modal"
                                            data-target="#blog_destroy_{{ $blog->id }}">წაშლა</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    @foreach ($blogs as $blog)
        <div class="modal fade" id="blog_update_{{ $blog->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="{{ route('admin.blog.update', $blog->id) }}" enctype='multipart/form-data' method="post">
                    @method('put')
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{ $blog->name_ge }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3 col-12 col-md-12">
                                <label for="name_ge" class="form-label">დასახელება (ქარ)</label>
                                <input class="form-control" type="text" value="{{ $blog->name_ge }}" id="name_ge"
                                    name="name_ge" />
                            </div>
                            <div class="mb-3 col-12 col-md-12">
                                <label for="name_en" class="form-label">დასახელება (ინგ)</label>
                                <input class="form-control" type="text" value="{{ $blog->name_en }}" id="name_en"
                                    name="name_en" />
                            </div>
                            <label class="mt-3">ტექსტი (ქარ)</label>
                            <div class="mt-1 form-floating">
                                <textarea name="text_ge" class="form-control" style="height: 100px">{{ $blog->text_en }}</textarea>
                            </div>
                            <label class="mt-3">ტექსტი (ინგ)</label>
                            <div class="mt-1 form-floating">
                                <textarea name="text_en" class="form-control" style="height: 100px">{{ $blog->text_en }}</textarea>
                            </div>
                            <div class="mb-3 col-12 col-md-12">
                                <label for="name_en" class="form-label">სურათი</label>
                                <input class="form-control" type="file" value="{{ $blog->image }}" id="image"
                                    name="image" />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">დახურვა</button>
                            <button type="submit" class="btn btn-primary">დამახსოვრება</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="modal fade" id="blog_destroy_{{ $blog->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="{{ route('admin.blog.destroy', $blog->id) }}" method="post">
                    @method('delete')
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{ $blog->name_ge }} - ის წაშლა</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">დახურვა</button>
                            <button type="submit" class="btn btn-primary">წაშლა</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endforeach

    <div class="modal fade" id="add_blog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="{{ route('admin.blog.store') }}" enctype='multipart/form-data' method="post">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">ბლოგის დამატება</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3 col-12 col-md-12">
                            <label for="name_ge" class="form-label">დასახელება (ქარ)</label>
                            <input class="form-control" type="text" id="name_ge" name="name_ge" />
                        </div>
                        <div class="mb-3 col-12 col-md-12">
                            <label for="name_en" class="form-label">დასახელება (ინგ)</label>
                            <input class="form-control" type="text" id="name_en" name="name_en" />
                        </div>
                        <label class="mt-3">ტექსტი (ქარ)</label>
                        <div class="mt-1 form-floating">
                            <textarea name="text_ge" class="form-control" style="height: 100px"></textarea>
                        </div>
                        <label class="mt-3">ტექსტი (ინგ)</label>
                        <div class="mt-1 form-floating">
                            <textarea name="text_en" class="form-control" style="height: 100px"></textarea>
                        </div>
                        <div class="mb-3 col-12 col-md-12">
                            <label for="name_en" class="form-label">სურათი</label>
                            <input class="form-control" type="file" id="image" name="image" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">დახურვა</button>
                        <button type="submit" class="btn btn-primary">დამატება</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@stop
