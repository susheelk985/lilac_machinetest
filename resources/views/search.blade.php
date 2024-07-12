@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Search') }}</div>

                    <div class="card-body">


                        <input type="text" id="search" class="form-control"
                            placeholder="Search name/designation/department">

                        <div class="row mt-4" id="result">
                            @foreach ($users as $user)
                                <div class="col-md-4 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $user->name }}</h5>
                                            <p class="card-text">{{ $user->designation->name }}</p>
                                            <p class="card-text">{{ $user->department->name }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#search').on('keyup', function() {
                var query = $(this).val().toLowerCase();
                $('#result .col-md-4').filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(query) > -1);
                });
            });
        });
    </script>
@endsection
