@extends('layouts.AssetSys')

@section('content')
    @if (Auth::user()->AssetController)


        <h2>領用確認</h2>
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th colspan="3">領用明細</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <th scope="row">領用人</th>
                    <td>{{ $withdraw->person }}</td>
                </tr>
                @foreach ($withdraw->WithdrawDetail as $step)
                    <tr>
                        <th scope="row">品項</th>
                        <td>{{ $step->object }}</td>
                    </tr>
                @endforeach
                <tr>
                    <th scope="row">領用時間</th>
                    <td>{{ $withdraw->time }}</td>
                </tr>
                <tr>
                    <th scope="row">領用用途</th>
                    <td>{{ $withdraw->way }}</td>
                </tr>

            </tbody>

        </table>
        @if ($withdraw->checked == '')

            <form class="p-3" action="" method="POST">
                {{ csrf_field() }}
                @method('PUT')

                <label for="formGroupExampleInput">批示者</label>
                <input type="type" class="form-control" id="formGroupExampleInput" value="{{ Auth::user()->name }} "
                    name="checkman">

                <div class="d-flex flex-row-reverse py-2">


                    <button class="btn btn-success mx-2" name="checked" value="確認領用" type="submit">確認領用</button>
                    <button class="btn btn-danger mx-2" name="checked" value="駁回" type="submit">駁回</button>
                    <!-- <button class="btn btn-outline-danger mx-5" type="reset">重新填寫</button> -->
                </div>

            </form>
        @endif
    @endif
@endsection
