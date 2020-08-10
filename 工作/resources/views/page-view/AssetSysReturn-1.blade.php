@extends('layouts.AssetSys')


@section('content')
    <h2>資產歸還</h2>
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th colspan="3">借用單明細</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">品項</th>
                <td>{{$borrow->object}}</td>
            </tr>
            <tr>
                <th scope="row">借用時間</th>
                <td>{{$borrow->borrowtime}}</td>
            </tr>
            <tr>
                <th scope="row">借用用途</th>
                <td>{{$borrow->way}}</td>
            </tr>
            <tr>
                <th scope="row">歸還日期</th>
                <td>{{$borrow->sendtime}}</td>
            </tr>
        </tbody>
    </table>
    <form class="p-3" action="">
        <div class="form-group py-2">
            <label for="formGroupExampleInput">實際歸還日期</label>
            <input type="date" class="form-control" id="formGroupExampleInput">
        </div>
        <div class="d-flex flex-row-reverse py-2">
            <button class="btn btn-info" type="submit">送出表單</button>
            <button class="btn btn-outline-danger mx-5" type="reset">重新填寫</button>
        </div>
    </form>
@endsection
