@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{ URL::previous() }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                        &nbsp;Create Note
                    </div>

                    <div class="panel-body">
                        <form action="{{ url('/note/create') }}" method="post">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="notebook">Notebook:</label>
                                <select name="notebook" id="notebook" class="form-control" required>
                                    @foreach ($notebooks as $notebook)
                                        <option value="{{ $notebook->id }}">{{ $notebook->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="title">Note Title:</label>
                                <input type="text" name="title" class="form-control" maxlength="50" required>
                            </div>

                            <div class="form-group">
                                <label for="content">Note Content:</label>
                                <textarea name="content" id="content" class="form-control" cols="30" rows="15"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="url">Reference URL</label>
                                <input type="url" name="url" id="url" class="form-control">
                            </div>

                            <input type="submit" name="submit" class="form-control btn btn-success" value="Create Note">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection