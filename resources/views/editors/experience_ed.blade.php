@extends('admin')

@section('ed_experience')
<form action="{{ route('add_experience') }}" method="post">
    @csrf
    <input type="text" id="title" name="title" placeholder="Title" style="width: 200px; height: 70px">
    <input type="text" id="time_period" name="time_period" placeholder="Time period" style="width: 200px; height: 70px">
    <input type="text" id="description" name="description" placeholder="Description" style="width: 200px; height: 70px">
    <input type="text" id="major" name="major" placeholder="Major" style="width: 200px; height: 70px">
    <button type="submit" class="btn btn-dark m-3">Add</button>
</form>
@endsection