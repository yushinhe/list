@extends('layouts.AssetSys')

@section('content')
@if(Auth::user()->role=='controller'  ) 

    <h2>資產借出</h2>
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th colspan="3">借用明細</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <th scope="row">借用人</th>
                <td>{{ $borrow->person }}</td>
            </tr>
            <tr>
                <th scope="row">品項</th>
                <td>{{ $borrow->object }}</td>
            </tr>
            <tr>
                <th scope="row">借用時間</th>
                <td>{{ $borrow->borrowtime }}</td>
            </tr>
            <tr>
                <th scope="row">借用用途</th>
                <td>{{ $borrow->way }}</td>
            </tr>
            <tr>
                <th scope="row">歸還日期</th>
                <td>{{ $borrow->sendtime }}</td>
            </tr>
        </tbody>

    </table>
    <form class="p-3" action="" method="POST">
        {{ csrf_field() }}

        <div class="d-flex flex-row-reverse py-2">

            {{-- <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon" name="borrowed" >
                <option selected >是否核可</option>
                <option value="1">核可借出</option>
                <option value="2">不核可借出</option>
            </select> --}}
            <div class="form-group py-2">
               
                <input type="text" class="form-control" id="formGroupExampleInput" name="borrowed" value="確認借出">
            </div>
            <button class="btn btn-info" type="submit">確認出借</button>
            <!-- <button class="btn btn-outline-danger mx-5" type="reset">重新填寫</button> -->
        </div>
    </form>
    @endif
@endsection
