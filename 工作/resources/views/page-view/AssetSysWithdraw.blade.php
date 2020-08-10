@extends('layouts.AssetSys')


@section('content')
    <h2>資產領用</h2>
    <form class="p-3" method="POST">
        {{ csrf_field() }}
        <p>大類項</p>

            <select class="custom-select " name="bigtype">
                <option selected>Open this select menu</option>
                @foreach ($bigtype as $k => $v)
                    @foreach ($v as $k1 => $v1)

                        <option>{{ $v1 }}</option>
                    @endforeach
                @endforeach

            </select>
         
    
        <p class="pt-2">品項名稱</p>
        <select class="custom-select" name="object" >
            <option selected>Open this select menu</option>
            @foreach ($object as $k => $v)
            @foreach ($v as $k1 => $v1)

                <option>{{ $v1 }}</option>
            @endforeach
        @endforeach
        </select>
        <div class="form-group py-2">
            <label for="formGroupExampleInput">領用人</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="name" name="person">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">領用時間</label>
            <input type="datetime-local" class="form-control" id="formGroupExampleInput" name="time">
        </div>
        <div class="input-group py-3">
            <div class="input-group-prepend">
                <span class="input-group-text">領用用途</span>
            </div>
            <textarea class="form-control" aria-label="With textarea" name="way"></textarea>
        </div>
        <div class="d-flex flex-row-reverse py-2">
            <button class="btn btn-info" type="submit">送出表單</button>
            <button class="btn btn-outline-danger mx-5" type="reset">重新填寫</button>
        </div>
    </form>
@endsection
