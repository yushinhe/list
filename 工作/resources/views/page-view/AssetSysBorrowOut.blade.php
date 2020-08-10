@extends('layouts.AssetSys')


@section('content')


    <h2>資產借出</h2>
    <p>未確認借用明細</p>
    <div class="list-group">

        @foreach ($borrow as $b)<a href="{{url('/asset-sys-borrow-out-2')}}/{{$b->id}}"
                class="list-group-item list-group-item-action">
                {{ '品項名稱:' . $b->object . ' 借用人:'. $b->person .'  ' . '借用時間:' . $b->borrowtime }}</a>
        @endforeach
    </div>

@endsection
