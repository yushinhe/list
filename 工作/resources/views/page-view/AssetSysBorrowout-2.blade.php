@extends('AssetSys')

@section('content')
    <h2>資產借出</h2>
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th colspan="3">借用明細</th>
            </tr>
        </thead>
        @foreach ($borrow  as $b)
            <tbody>
                <tr>
                    <th scope="row">借用人</th>
                    <td>{{ $b->sid }}</td>
                </tr>
                <tr>
                    <th scope="row">品項</th>
                    <td>{{ $b->object }}</td>
                </tr>
                <tr>
                    <th scope="row">借用時間</th>
                    <td>{{ $b->borrowtime }}</td>
                </tr>
                <tr>
                    <th scope="row">借用用途</th>
                    <td>{{ $b->way }}</td>
                </tr>
                <tr>
                    <th scope="row">歸還日期</th>
                    <td>{{ $b->sendtime }}</td>
                </tr>
            </tbody>

        @endforeach
    </table>
    <form class="p-3" action="">
        <div class="d-flex flex-row-reverse py-2">
            <button class="btn btn-info" type="submit">確認出借</button>
            <!-- <button class="btn btn-outline-danger mx-5" type="reset">重新填寫</button> -->
        </div>
    </form>
@endsection
