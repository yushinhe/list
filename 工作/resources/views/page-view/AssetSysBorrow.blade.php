@extends('AssetSys')

@section('content')
    <h2>資產借用</h2>
    <form class="p-3" action="">
        <p>品項分類</p>
        <div class="opt d-flex">
            <select class="custom-select mx-2">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <select class="custom-select mx-2">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <p class="pt-2">品項名稱</p>
        <select class="custom-select">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
        <div class="form-group py-2">
            <label for="formGroupExampleInput">借用時間</label>
            <input type="datetime-local" class="form-control" id="formGroupExampleInput">
        </div>
        <div class="input-group py-3">
            <div class="input-group-prepend">
                <span class="input-group-text">借用用途</span>
            </div>
            <textarea class="form-control" aria-label="With textarea"></textarea>
        </div>
        <div class="form-group py-2">
            <label for="formGroupExampleInput">歸還日期</label>
            <input type="date" class="form-control" id="formGroupExampleInput">
        </div>
        <div class="d-flex flex-row-reverse py-2">
            <button class="btn btn-info" type="submit">送出表單</button>
            <button class="btn btn-outline-danger mx-5" type="reset">重新填寫</button>
        </div>
    </form>
@endsection
