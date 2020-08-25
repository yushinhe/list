@extends('layouts.AssetSys')


@section('content')
    @if (Auth::user()->role)

        <h2>歸還入庫</h2>
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th colspan="3">歸還入庫</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">借用人</th>
                    <td>{{ $borrow->person }}</td>
                </tr>
                @foreach ($borrow->BorrowDetail as $step)
                    <tr>
                        <th scope="row">品項</th>
                        <td>{{ $step->object }}</td>
                    </tr>
                @endforeach
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
                <tr>
                    <th scope="row">實際歸還日期</th>
                    <td>{{ $borrow->senddated }}</td>
                </tr>
                <tr>
                    <th scope="row">入庫時間</th>
                    <td>{{ $borrow->backtime }}</td>
                </tr>  <tr>
                    <th scope="row">品項狀態</th>
                    <td>{{ $borrow->status }}</td>
                </tr>
            </tbody>
        </table>
        @if ($borrow->status == '')

            <form class="p-3" action="" method="POST">
                {{ csrf_field() }}
                @method('PUT')

                <div class="form-group py-2">
                    <label for="formGroupExampleInput">入庫時間</label>
                    <input type="datetime-local" class="form-control" id="formGroupExampleInput" name="backtime">
                </div>
                <div class="form-group py-2">
                    <label for="formGroupExampleInput">品項狀態</label>
                    <textarea class="form-control" aria-label="With textarea" name="status"></textarea>
                </div>
                <div class="d-flex flex-row-reverse py-2">
                    <button class="btn btn-info" type="submit">歸還入庫</button>
                    <!-- <button class="btn btn-outline-danger mx-5" type="reset">重新填寫</button> -->
                </div>
            </form>
        @endif
    @endif
@endsection
