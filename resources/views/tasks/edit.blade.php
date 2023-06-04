@extends('tasks.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Task</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('tasks.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('tasks.update',$task->id) }}" method="POST">
    @csrf
    @method('PUT')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Task</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Project Name</label>
                                <input value="{{ $task->name }}" type="text" id="inputName" class="form-control" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Project Description</label>
                                <textarea id="inputDescription" class="form-control" rows="4" name="description" required>{{ $task->description }}</textarea>

                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Status</label>
                                <select id="inputStatus" class="form-control custom-select" name="status" required>
                                    <option selected>On Hold</option>
                                    <option>Canceled</option>
                                    <option>Success</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputClientCompany">Due Date</label>
                                <input type="text" id="inputClientCompany" class="form-control" name="due_date" required value="{{ $task->due_date }}">
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input type="submit" value="Edit Task" class="btn btn-success float-right">
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>


</form>
@endsection