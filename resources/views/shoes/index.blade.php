@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Schoenen</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('shoes.create') }}"> Nieuwe schoen toevoegen</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Naam</th>
            <th>Merk</th>
            <th>maat</th>
            <th>Description</th>
            <th width="250px">Action</th>
        </tr>
        @foreach ($shoes as $shoe)
            <tr>
                <td>{{ $shoe->name }}</td>
                <td>{{ $shoe->brand->name }}</td>
                <td>{{ $shoe->size->size }}</td>
                <td>{{ $shoe->description }}</td>
                <td>
                    <form action="{{ route('shoes.destroy',$shoe->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('shoes.show',$shoe->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('shoes.edit',$shoe->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

