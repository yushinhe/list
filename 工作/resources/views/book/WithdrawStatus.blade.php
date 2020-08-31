@extends('layouts.Book')
@section('content')
    <h2>領用狀態</h2>
    <div class="list-group">
        <x-alert />
        @foreach ($withdraw as $w)<div class="list-group-item list-group-item-action">
                {{ '  領用時間:' . $w->time . '  核可人:' . $w->checkman . '  領用核可:' . $w->checked }}</div>
        @endforeach
    </div>

@endsection
