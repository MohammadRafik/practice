@extends('layouts.master')

@section('head')
    <script>
        document.write('hello 2');
        console.log('hello console');
    </script>
@endsection

@section('content')
hello 1
@endsection