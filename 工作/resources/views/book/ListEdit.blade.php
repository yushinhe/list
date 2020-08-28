@extends('layouts.Book')
@section('content')
@if (Auth::user()->BookController)
    <h2>修改資產資料</h2>
    <h4>圖書名稱:{{ $book->object }}</h4>

        <form class="p-3" method="POST">
            {{ csrf_field() }}
            @method('PUT')
            <div class="form-group">
                <label for="formGroupExampleInput">編號</label>
                <input type="text" class="form-control" id="formGroupExampleInput" value="{{ $book->number }}" name="number"
                    required>
                <div class="form-group">
                    <label for="formGroupExampleInput">存放位置</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" value="{{ $book->position }}"
                        name="position" required>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">新增日期</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" value="{{ $book->date }}" name="date"
                        required>
                </div>
                <p class="pt-2">類型</p>
                <div class="opt d-flex">
                    <select class="custom-select " name="type" required>
                        <option selected>{{ $book->type }}</option>
                        @foreach ($type as $t)
                            <option>{{ $t->type }}</option>
                        @endforeach

                    </select>
                </div>

                <div class="form-group">
                    <label for="formGroupExampleInput">雜誌名稱</label>
                    <input type="text" class="form-control" name="object" id="formGroupExampleInput"
                        value="{{ $book->object }}" required>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">期號</label>
                    <input type="text" class="form-control" name="issue" id="formGroupExampleInput"
                        value="{{ $book->issue }}" required>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">原價金額</label>
                    <input type="text" class="form-control" name="cost" id="formGroupExampleInput" value="{{ $book->cost }}"
                        required>
                </div>
                <div class="d-flex flex-row-reverse py-2">
                    <button class="btn btn-info" type="submit">送出表單</button>
                    <button class="btn btn-outline-danger mx-5" type="reset">重新填寫</button>
                </div>
        </form>
    @endif

@endsection
