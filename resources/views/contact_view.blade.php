@extends('contact')
@section('content')
<div class="container">
    <h3 align="center">Laravel Pagination using Ajax</h3><br />
    <div class="create-btn">
        <form method="GET" action="{{ route('index') }}" id="search-form">
            <input type="search" id="search" name="search" value="{{ request()->input('search') }}"
                class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                placeholder="Search">
            <button class="search-form" id="search-submit" type="submit">Search</button>
        </form>
        <a class="btn btn-success" href="{{ route('create') }}"> Create New Contact</a>
    </div>
    <div id="table_data" class="table-responsive">
        <table class="table table-striped table-bordered">
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Short Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
            @foreach ($contacts as $contact )
            <tr>
                <td>{{$contact['id']}}</td>
                <td>{{$contact['first_name']}}</td>
                <td>{{$contact['last_name']}}</td>
                <td>{{$contact['email']}}</td>
                <td>{{$contact['telephone']}}</td>
            </tr>
            @endforeach
        </table>
        {!! $contacts->links() !!}
    </div>
</div>
@endsection
