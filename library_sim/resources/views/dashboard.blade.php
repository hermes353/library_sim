@extends('layouts.app')

@section('content')

    <style>
        .alert-success{
            margin:auto;
            width: 50%;
            border: 3px solid green;
        }

        .alert-danger{
            margin:auto;
            width: 50%;
            border: 3px solid green;
        }
    </style>

    <div class="py-3">
        <div class="bg-gray-100 dark:bg-gray-900 card text-center">
            <h2 class="card-title font-semi-bold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                <br>
                {{ __('Library Simulator') }}
            </h2>
        </div>
    </div>

    <div class="bg-gray-100 dark:bg-gray-900 card text-center">

        <!-- SUCCESS: book saved successfully -->
        @if(session()->has('book_saved_successfully'))
            <div class="alert alert-success">
                {{ session()->get('book_saved_successfully') }}
            </div>
        @endif

        <!-- ERROR: book did not save successfully -->
        @if(session()->has('book_save_failed'))
            <div class="alert alert-danger">
                {{ session()->get('book_save_failed') }}
            </div>
        @endif

        <!-- SUCCESS: book was deleted -->
        @if(session()->has('book_delete_success'))
            <div class="alert alert-success">
                {{ session()->get('book_delete_success') }}
            </div>
        @endif

        <!-- ERROR: book could not be deleted -->
        @if(session()->has('book_delete_fail'))
            <div class="alert alert-danger">
                {{ session()->get('book_delete_fail') }}
            </div>
        @endif

    </div>

    <div class="py-12 dark">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="bg-gray-100 dark:bg-gray-900 block">

                        <br>
                        &nbsp;&nbsp;&nbsp;
                        <a type="button" class="btn btn-info px-3 text-gray-300" href="{{url('/add_new_book')}}">
                            Add New Book
                        </a>

                    </div>

                    <div class="bg-gray-100 dark:bg-gray-900 block">

                    @include('modules.book_table')

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
