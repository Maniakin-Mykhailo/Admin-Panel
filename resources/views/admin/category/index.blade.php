    @extends('layouts.admin_layout')

    @section('title', 'All categories')

    @section('content')
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">All categories</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                        <section class="content">
                            <!-- Default box -->
                            <div class="card">
                                <div class="card-body p-0">
                                    <table class="table table-striped projects">
                                            <thead>
                                            <tr>
                                                <th style="width: 5%">
                                                    Id
                                                </th>
                                                <th>
                                                    Title
                                                </th>
                                                <th style="width: 20%">
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($categories as $category)
                                            <tr>
                                                <td>
                                                    {{$category['id']}}
                                                </td>
                                                <td>
                                                    {{$category['title']}}
                                                </td>
                                                <td>
                                                </td>
                                                <td class="project-actions text-right">
                                                    <a class="btn btn-info btn-sm" href="#">
                                                        <i class="fas fa-pencil-alt">
                                                        </i>
                                                        Edit
                                                    </a>
                                                    <a class="btn btn-danger btn-sm" href="#">
                                                        <i class="fas fa-trash">
                                                        </i>
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                        </section>
                        <!-- /.card -->
                </div>
            </section>
        </div><!-- /.container-fluid -->
        <!-- /.content -->
    @endsection


