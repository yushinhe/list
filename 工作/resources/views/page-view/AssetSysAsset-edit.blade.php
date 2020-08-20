@extends('layouts.AssetSys')

@section('content')
    @if (Auth::user()->role)

        <h2>修改資產資料</h2>
        <h4>資產名稱:{{ $list->object }}</h4>

        <form class="p-3" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="formGroupExampleInput">存放位置</label>
                <input type="text" class="form-control" id="formGroupExampleInput" value="{{ $list->position }}"
                    name="position" required>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">新增日期</label>
                <input type="text" class="form-control" id="formGroupExampleInput" value="{{ $list->date }}" name="date"
                    required>
            </div>
            <div class="form-group ">
                <label for="formGroupExampleInput">品牌</label>
                <input type="text" class="form-control" name="brand" id="formGroupExampleInput" value="{{ $list->brand }}">
            </div>

            <p class="pt-2">大類項</p>
            <div class="opt d-flex">
                <select class="custom-select " name="bigtype" required>
                    <option selected>{{ $list->bigtype }}</option>
                    @foreach ($bigtype as $b)
                        <option>{{ $b->bigtype }}</option>
                    @endforeach

                </select>
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput">設備名稱</label>
                <input type="text" class="form-control" name="object" id="formGroupExampleInput" value="{{ $list->object }}"
                    required>
            </div>

            <div class="d-flex flex-row-reverse py-2">
                <button class="btn btn-info" type="submit">送出表單</button>
                <button class="btn btn-outline-danger mx-5" type="reset">重新填寫</button>
            </div>
        </form>
    @endif
@endsection
