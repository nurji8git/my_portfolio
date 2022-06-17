@extends('admin')

@section('ed_welcome')
<form action="{{ route('about_ed') }}" method="post">
    @csrf
    <textarea type="text" id="welcome_ed" name="welcome_ed" placeholder="Welcome text" rows="2" class="form-control md-textarea" style="width: 600px; height: 300px"></textarea>
    <button type="submit" class="btn btn-dark m-3">Edit</button>
</form>
@endsection