@extends('tasks.layout')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Result</h3>
            </div>
            @if($tasks->isNotEmpty())
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
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
            <div>
                <h2>No result found</h2>
            </div>
            @endif
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection