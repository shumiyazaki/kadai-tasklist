@extends('layouts.app')

@section('content')
 <div class="row">
        <div class="col-xs-12 col-offset-2 col-sm-8 col-offset-4 col-md-8 col-offset-4 col-lg-6 col-offset-6">
 

    <h1>id: {{ $task->id }} のタスク編集ページ</h1>

        <div class="row">
        <div class="col-xs-6">



   {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
                <div class="form-group">
                    {!! Form::label('status', 'ステータス:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
        
                <div class="form-group">
                    {!! Form::label('content', 'タスク:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
        
                {!! Form::submit('更新', ['class' => 'btn btn-default']) !!}
        
            {!! Form::close() !!}

@endsection