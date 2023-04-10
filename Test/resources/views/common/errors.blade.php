@if ()
    <div class="alert alet-danger">
        <strong>Ops! Wrong.</strong>
        <br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
