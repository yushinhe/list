@extends('layouts.AssetSys')


@section('content')
          <h2>歸還入庫</h2>
          <p>歸還明細</p>

          @foreach ($borrow as $b)<a href="{{url('/asset-sys-returnback-2')}}/{{$b->id}}"
            class="list-group-item list-group-item-action">
            {{ '品項名稱:' . $b->object . '   ' . '借用時間:' . $b->borrowtime .  '  入庫時間:' . $b->backtime }}</a>
    @endforeach
          @endsection  