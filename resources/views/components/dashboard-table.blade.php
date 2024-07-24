<div class="container table-container mt-5">
    <div class="table-responsive">
        <form action="" method="GET" class="form-inline d-flex">
        <table class="table table-striped table-bordered table-hover table-primary">
            <thead class="table-header">
                <tr>
                    @foreach ((array)$feedback->first() as $key => $value)
                        <th scope="col">{{ $key }}</th>
                    @endforeach
                    <th>Actions</th>
                </tr>
            </thead>
            <tr>
                @foreach ((array)$feedback->first() as $key => $value)
                <td>
                    <input class="form-control mr-sm-2" name="{{ $key }}" type="text" placeholder="{{ $key }}" aria-label="Filter">
                </td>
                @endforeach
                <td>
                    <button type="submit" class="btn btn-primary">Filter</button>
                </td>
            </tr>
            <tbody>
                @foreach ($feedback as $entry)
                    <tr class="table-row">
                        @foreach ($entry as $value)
                            <td>{{ $value }}</td>
                        @endforeach
                            <td><a class="btn btn-primary" href="#" role="button" id="{{$entry->id}}">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </form>
    </div>
</div>