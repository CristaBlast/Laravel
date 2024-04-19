
@extends('layout')
@section('header-title', 'Update course "' . $course->name . '"')
@section('main')
 <form method="POST" action="{{ route('courses.update', ['course' => $course]) }}">
 @csrf
 @method('PUT')
 @include('courses.shared.fields',['readonlyData' => true])
 <div>
 <button type="submit" name="ok">Save course</button>
 </div>
 </form>
@endsection
