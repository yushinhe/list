@extends('layouts.AssetSys')

@section('content')

    <h2>資產借用</h2>
    @if (Session::has('flash_message'))
        <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
    @endif
    <form class="p-3" method="POST">
        {{ csrf_field() }}

        <p>大類項</p>
        <select class="custom-select " name="bigtype" required>
            <option selected>Open this select menu</option>
            @foreach ($bigtype as $k => $v)
            @foreach ($v as $k1 => $v1)

                <option>{{ $v1 }}</option>
            @endforeach
        @endforeach

        </select>
        <p>借用物品</p>
        <select class="custom-select " name="object" required>
            <option selected>Open this select menu</option>
            @foreach ($object as $k => $v)
            @foreach ($v as $k1 => $v1)

                <option>{{ $v1 }}</option>
            @endforeach
            @endforeach
        </select>
        <div class="form-group py-2">
            <label for="formGroupExampleInput">借用日期</label>
            <input type="date" class="form-control" id="formGroupExampleInput" name="borrowtime" required>
        </div>
        <div class="form-group py-2">
            <label for="formGroupExampleInput">借用人</label>
            <input type="type" class="form-control" id="formGroupExampleInput" name="person" required>
        </div>
        <div class="input-group py-3">
            <div class="input-group-prepend">
                <span class="input-group-text">借用用途</span>
            </div>
            <textarea class="form-control" aria-label="With textarea" name="way" required></textarea>
        </div>
        <div class="form-group py-2">
            <label for="formGroupExampleInput">歸還日期</label>
            <input type="date" class="form-control" id="formGroupExampleInput" name="sendtime" required>
        </div>
        <div class="d-flex flex-row-reverse py-2">
            <button class="btn btn-info" type="submit">送出表單</button>
            <button class="btn btn-outline-danger mx-5" type="reset">重新填寫</button>
        </div>
    </form>
@endsection
