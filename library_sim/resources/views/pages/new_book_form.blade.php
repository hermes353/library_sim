@extends('layouts.app')

@section('content')

    <style>
        .div {
            width: 500px;
            border-radius: 5px;
            padding: 20px;
        }

        .input{
            color:#0c0c0c;
        }
    </style>

    <div class="py-3">
        <div class="bg-gray-100 dark:bg-gray-900 card text-center">
            <h1 class="card-title font-semi-bold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                <br>
                Add New Book
            </h1>
        </div>
    </div>

    <div class="py-12 dark">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 div">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <!-- New Book -->
                    <form action="{{ route('library.store') }}" method="POST">

                        @csrf

                        <div class="row">

                            <div class="col-sm-12 d-inline-block">

                                <!-- Book Name Input -->
                                <div class="form-group">

                                    <div class="bg-gray-100 dark:bg-gray-900 modal-body card text-center">
                                        <h3>Name of Book</h3>
                                        &nbsp;&nbsp;
                                        <div class="input-group input-group-sm mb-3">
                                            <input type="text" class="form-control input" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="book_name">
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="bg-gray-100 dark:bg-gray-900 modal-body card text-center">

                            <div class="modal-footer">

                                <br>

                                <a type="button" class="btn btn-info text-gray-300" href="{{ url('dashboard') }}">
                                    Back
                                </a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <button type="submit" class="btn btn-success text-gray-300">
                                    Add
                                </button>

                            </div>

                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
