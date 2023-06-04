@extends('tasks.layout')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tasks</h3>

                <div class="card-tools">
                    <a class="btn btn-primary btn-sm" href="{{ route('tasks.create') }}">
                        <i class="fa fa-plus">
                        </i>
                        Add Task
                    </a>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 1%">
                                #
                            </th>
                            <th style="width: 20%">
                                Name
                            </th>
                            <th style="width: 30%">
                                Description
                            </th>
                            <th>
                                Due Date
                            </th>
                            <th style="width: 8%" class="text-center">
                                Status
                            </th>
                            <th style="width: 20%">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $task)
                        <tr>
                            <td>
                                {{ $task->id }}
                            </td>
                            <td>
                                <a>
                                    {{ $task->name }}
                                </a>
                            </td>
                            <td>
                                {{ $task->description }}
                            </td>
                            <td class="project_progress">
                                {{ $task->due_date }}
                            </td>
                            <td class="project-state">
                                {{ $task->status }}
                            </td>
                            <td class="project-actions text-right">
                                <!-- <a class="btn btn-primary btn-sm" href="#">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a> -->
                                <form action="{{ route('tasks.destroy',$task->id) }}" method="POST">

                                    <a class="btn btn-info" href="{{ route('tasks.show',$task->id) }}">Show</a>

                                    <a class="btn btn-primary" href="{{ route('tasks.edit',$task->id) }}">Edit</a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection