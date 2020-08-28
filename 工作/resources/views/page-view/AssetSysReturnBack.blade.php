@extends('layouts.AssetSys')


@section('content')
    @if (Auth::user()->AssetController)

        {{ $borrow->links() }}

        <h2>歸還入庫</h2>
        <p>歸還明細</p>

        @foreach ($borrow as $b)
            <a href="{{ route('returnback.show', $b->id) }}" class="list-group-item list-group-item-action">
                {{ ' 借用人:' . $b->person . '  ' . '歸還時間:' . $b->senddated . '  入庫時間:' . $b->backtime }}</a>
        @endforeach
    @endif

@endsection
