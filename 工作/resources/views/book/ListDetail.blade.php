@extends('layouts.Book')

@section('content')
    @if (Auth::user()->role)

        <h2>雜誌詳細資料</h2>

        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th colspan="3">{{ $book->object }}</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <th scope="row">編號</th>
                    <td>{{ $book->number }}</td>
                </tr>
                <tr>
                    <th scope="row">存放位置</th>
                    <td>{{ $book->position }}</td>
                </tr>
                <tr>
                    <th scope="row">新增日期</th>
                    <td>{{ $book->date }}</td>
                </tr>
                <tr>
                    <th scope="row">雜誌名稱</th>
                    <td>{{ $book->object }}</td>
                </tr>
                <tr>
                    <th scope="row">類項</th>
                    <td>{{ $book->type }}</td>
                </tr>
                <tr>
                    <th scope="row">期號</th>
                    <td>{{ $book->issue }}</td>
                </tr>
                <tr>
                    <th scope="row">原價金額</th>
                    <td>{{ $book->cost }}</td>
                </tr>
            </tbody>

        </table>
        <button class="btn btn-info " type="button"><a class="text-white" href="{{ route('list.index') }}">back</a>
        </button>

    @endif
@endsection
