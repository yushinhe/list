
@extends('layouts.Book')


@section('content')
<x-alert/>
    <h2>書本歸還</h2>
    <p>借用明細</p>
    <div class="list-group">
        @foreach ($borrows as $b)<a href="{{route('b-return.show',$b->id)}}"
                class="list-group-item list-group-item-action">
                {{ '借出確認:' . $b->borrowed . ' 批示者:' . $b->borrowedcheck . '    實際歸還時間:' . $b->senddated }}</a>
        @endforeach
    </div>
@endsection
