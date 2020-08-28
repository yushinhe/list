@extends('layouts.AssetSys')


@section('content')
    @if (Auth::user()->AssetController)

        {{ $borrow->links() }}


        <h2>資產借出</h2>
        <p>借用明細</p>
        <div class="list-group">
            <x-alert />
            @foreach ($borrow as $b)

                <a href="{{ route('borrow-out.show', $b->id) }}" class="list-group-item list-group-item-action">

                    {{ '借用人:' . $b->person . '  ' . '借用時間:' . $b->borrowtime . ' 核可人:' . $b->borrowedcheck . '借用確認:' . $b->borrowed }}</a>
            @endforeach
        </div>
    @endif
@endsection
