@extends('layouts.AssetSys')


@section('content')
    <h2>資產歸還</h2>
    <p>借用明細</p>
    <div class="list-group">

        @foreach ($borrows as $b)<a href="{{url('/asset-sys-return-1')}}/{{$b->id}}"
                class="list-group-item list-group-item-action">
                {{ '品項名稱:' . $b->object . '   ' . '借用時間:' . $b->borrowtime .  '  實際歸還時間:' . $b->senddated }}</a>
        @endforeach
    </div>

@endsection
