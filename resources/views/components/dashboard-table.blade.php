<div class="container table-container mt-5">
    
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover table-primary">
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