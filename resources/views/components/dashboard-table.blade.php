<div class="container table-container mt-5">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover table-primary">
        <nav class="navbar navbar-light bg-light">
            <form action="" method="GET" class="form-inline d-flex">
                <input class="form-control mr-sm-2" name="Filter" type="text" placeholder="Filter" aria-label="Filter">
            </form>
        </nav>
            <thead class="table-header">
                <tr>
                    @foreach ((array)$feedback->first() as $key => $value)
                        <th scope="col">{{ $key }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($feedback as $entry)
                    <tr class="table-row">
                        @foreach ($entry as $value)
                            <td>{{ $value }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>