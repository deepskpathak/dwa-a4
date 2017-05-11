@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            <div class="col-md-3">
                    <ul class="list-group">
                        <li class="list-group-item active">
                            Your Notebooks
                        </li>
                        @foreach ($notebooks as $notebook)
                            <li href="#" class="list-group-item">
                                <a href="{{ url('/home', [$notebook->id]) }}">{{ $notebook->name }}</a>

                                <a href="{{ url('/notebook/edit', [$notebook->id]) }}"
                                   class="btn-link pull-right">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <a href="{{ url('/notebook/create') }}" class="btn btn-sm btn-info">New Notebook</a>
            </div>


            <div class="col-md-9">
                <div>
                    <div class="well clearfix">
                        Notes

                        @if (isset($notebook_name))
                            for <span><strong>{{ $notebook_name }}</strong></span>
                        @endif

                        <a href="{{ url('/note/create') }}" class="btn btn-info btn-sm pull-right">New Note</a>
                    </div>

                    <ul class="list-group">
                        @if (count($notes) > 0)
                                @foreach ($notes as $note)
                                    <li class="list-group-item">
                                        <a href="{{ url('/note', [$note->id]) }}">{{ $note->title }}</a>

                                        <span class="label label-default pull-right">{{ $note->notebook->name }}</span>
                                        <p class="truncate">{{ str_limit($note->content, 60, '...') }}</p>
                                    </li>
                                @endforeach
                        @else
                            No notes found.
                        @endif
                        @if(count($notebooks) == 0)
                            <span class="text-warning">Remember - You need to have a notebook first. <a href="/notebook/create">Create Notebook</a></span>
                            @else
                                <a href="{{ url('/note/create') }}">Create
                                    one</a>?
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection