@extends('layouts.Book')


@section('content')
    <h2>圖書移交(新增)</h2>
    <x-alert />
    <form class="p-3" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="formGroupExampleInput">編號</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="ex:10902250001" name="number"
                required>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">存放位置</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="ex:財務室-B08櫃" name="position"
                required>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">新增日期</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="ex:1090313" name="date"
                required>
        </div>

        <p class="pt-2">類別</p>
        <div class="opt d-flex">
            <select class="custom-select " name="type" required>
                <option selected></option>
                @foreach ($bookcategory as $b)
                    <option>{{ $b->type }}</option>
                @endforeach

            </select>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">雜誌名稱</label>
            <input type="text" class="form-control" name="object" id="formGroupExampleInput" placeholder="獨家報導雙周刊-BIWEEKLY"
                required>
        </div>
        <div class="form-group ">
            <label for="formGroupExampleInput">期號</label>
            <input type="text" class="form-control" name="issue" id="formGroupExampleInput" placeholder="ex:1119">
        </div>
        <div class="form-group ">
            <label for="formGroupExampleInput">原價金額</label>
            <input type="text" class="form-control" name="cost" id="formGroupExampleInput" placeholder="ex:99">
        </div>
        <div class="d-flex flex-row-reverse py-2">
            <button class="btn btn-info" type="submit">送出表單</button>
            <button class="btn btn-outline-danger mx-5" type="reset">重新填寫</button>
        </div>
    </form>
@endsection
