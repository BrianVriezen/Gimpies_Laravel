@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Schoen toevoegen') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('shoes.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="shoe_name" class="col-md-4 col-form-label text-md-right">{{ __('Schoen naam') }}</label>

                                <div class="col-md-6">
                                    <input name="shoe_name" type="text" class="form-control" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="shoe_brand" class="col-md-4 col-form-label text-md-right">{{ __('Merk') }}</label>
                                <div class="col-md-6">
                                    <select name="shoe_brand" class="form-control"required>
                                        @foreach($brand as $id => $display)
                                            <option value="{{ $id }}">{{ $display->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="shoe_size" class="col-md-4 col-form-label text-md-right">{{ __('Maat') }}</label>
                                <div class="col-md-6">
                                    <select name="shoe_size" class="form-control"required>
                                        @foreach($size as $id => $display)
                                            <option value="{{ $id }}">{{ $display }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="shoe_amount" class="col-md-4 col-form-label text-md-right">{{ __('Hoeveelheid') }}</label>

                                <div class="col-md-6">
                                    <input name="shoe_amount" class="form-control" type="number" value="1" min="1" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="shoe_description" class="col-md-4 col-form-label text-md-right">{{ __('Beschrijving') }}</label>

                                <div class="col-md-6">
                                    <textarea name="shoe_description" class="form-control" required></textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Toevoegen') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
