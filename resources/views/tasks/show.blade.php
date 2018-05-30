@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} のタスクの詳細ページ</h1>

    <p>ステータス: {{ $task->status }}</p>
    <p>タスク: {{ $task->content }}</p>

    <p>{{ $task->content }}</p>
    
        

    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}


    {!! link_to_route('tasks.edit', 'このタスクを編集', ['id' => $task->id]) !!}
@endsection