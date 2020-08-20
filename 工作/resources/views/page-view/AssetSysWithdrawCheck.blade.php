@extends('layouts.AssetSys')


@section('content')
    @if (Auth::user()->role)
        <h2>領用確認</h2>
        <p>領用明細</p>
        <div class="list-group">
            <x-alert />
            @foreach ($withdraw as $w)<a href="{{ '/asset-sys-withdraw-check-1/' . $w->id }}"
                    class="list-group-item list-group-item-action">
                    {{'  領用時間:' . $w->time . '  核可人:' . $w->checkman . '  領用核可:' . $w->checked }}</a>
            @endforeach
        </div>
    @endif
@endsection
