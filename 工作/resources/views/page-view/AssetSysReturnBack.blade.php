

@extends('layouts.AssetSys')


@section('content')
@if(Auth::user()->role=='controller'  ) 

          <h2>歸還入庫</h2>
          <p>歸還明細</p>

          @foreach ($borrow as $b)
          {{-- <div class="d-flex"> --}}
          <a href="/asset-sys-returnback-2/{{$b->id}}"
            class="list-group-item list-group-item-action">
            {{ '品項名稱:' . $b->object . ' 借用人:' . $b->person. '  ' . '歸還時間:' . $b->senddated .  '  入庫時間:' . $b->backtime }}</a> 
            {{-- <form action="" method="POST"> --}}
              {{-- {{ csrf_field() }}
              {{method_field('DELETE')}}
             <input type="submit" value="刪除">
          </form></div> --}}
    @endforeach
@endif

          @endsection  
          

