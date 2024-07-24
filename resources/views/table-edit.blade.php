<!-- Bootstrap CSS CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="extensions/editable/bootstrap-table-editable.js"></script>
@php
    $platform=['iOS', 'Android', 'Windows', 'macOS', 'Linux'];
    $status=['New', 'In progress', 'Completed'];
    $category=['Bug', 'Suggestion', 'Praise', 'Inquiry'];
@endphp
<div class="container mt-5">
<form action="/update" method="get">
    <input class="d-none" name="id" value="{{$feedback->first()->id}}">
    <div class="form-group">
        <label>Games</label>
        <select name="game" class="form-control form-control-lg">
            @foreach($games as $game)
                @if($game->id == $feedback->first()->game_id)
                    <option value="{{$game->id}}" selected>{{$game->name}}</option>
                @else
                    <option value="{{$game->id}}">{{$game->name}}</option>
                @endif
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>Status</label>
        <select name="status" class="form-control form-control-lg">
            @foreach($status as $value)
                @if($feedback->first()->status == $value)
                    <option selected>{{$value}}</option>
                @else
                    <option>{{$value}}</option>
                @endif
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>Platform</label>
        <select name="platform" class="form-control form-control-lg">
            @foreach($platform as $value)
                @if($feedback->first()->platform == $value)
                    <option selected>{{$value}}</option>
                @else
                    <option>{{$value}}</option>
                @endif
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>Version</label>
        <div>
        <input name="version" type="text" class="form-control form-control-lg" id="version" value="{{$feedback->first()->version}}"></input>
        </div>
    </div>

    <div class="form-group">
        <label>Category</label>
        <select name="category" class="form-control form-control-lg">
            @foreach($category as $value)
                @if($feedback->first()->category == $value)
                    <option selected>{{$value}}</option>
                @else
                    <option>{{$value}}</option>
                @endif
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>Feedback</label>
        <textarea name="content" class="form-control" id="content" rows="3">{{$feedback->first()->content}}</textarea>
    </div>
    
    <div class=" mt-5">
        <button type="submit" class="btn btn-primary">Update</button>
        <a class="btn btn-danger" href="/" role="button">Return</a>
    </div>

</form>
</div>
