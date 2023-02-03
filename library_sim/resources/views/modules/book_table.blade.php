<br><br>

<div class="col-12">

    <div class="card bg-dark">

        <div class="card-header">

            <div class="card bg-dark text-center">

                <h1>My Books</h1>

            </div>

        </div>

        <!-- /.card-header -->
        <div class="card-body table-responsive px-2 py-2">

            <table id="bookTable" class="table table-hover text-white text-nowrap px-1 py-1">

                <thead>

                <tr>
                    <th>ID</th>
                    <th>Book Title</th>
                    <th>Book Stored Date</th>
                </tr>

                </thead>

                <tbody>

                @foreach($user_books as $book)

                    <tr>
                        <td>{{ $book->id }}</td>
                        <td>{{ $book->name }}</td>
                        <td>{{ $book->created_at }}.</td>

                        <td>

                            <div class="btn-group">

                                <form action="{{ route('library.destroy', $book->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger">
                                        Delete
                                    </button>
                                </form>

                            </div>

                        </td>

                    </tr>

                @endforeach

                </tbody>

            </table>

        </div>

        <!-- /.card-body -->
    </div>

    <!-- /.card -->
</div>
