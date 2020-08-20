@extends('layouts.AssetSys')


@section('content')
    <h2>資產移交(新增)</h2>
<x-alert/>
    <form class="p-3" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="formGroupExampleInput">存放位置</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="ex:器材室-A1區" name="position"
                required>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">新增日期</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="ex:1090313" name="date"
                required>
        </div>
        <div class="form-group ">
            <label for="formGroupExampleInput">品牌</label>
            <input type="text" class="form-control" name="brand" id="formGroupExampleInput" placeholder="ex:NOKIA">
        </div>

        <p class="pt-2">大類項</p>
        <div class="opt d-flex">
            <select class="custom-select " name="bigtype" required>
                <option selected>ex:線材類</option>
                @foreach ($assetcategory as $b)
                    <option>{{ $b->bigtype }}</option>
                @endforeach

            </select>


        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">設備名稱</label>
            <input type="text" class="form-control" name="object" id="formGroupExampleInput"
                placeholder="(E-004-01)Micro USB 充電線" required>
        </div>

        <div class="d-flex flex-row-reverse py-2">
            <button class="btn btn-info" type="submit">送出表單</button>
            <button class="btn btn-outline-danger mx-5" type="reset">重新填寫</button>
        </div>
    </form>
@endsection
