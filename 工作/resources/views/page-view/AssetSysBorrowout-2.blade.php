@extends('layouts.AssetSys')

@section('content')
    @if (Auth::user()->role)

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
                @foreach( $borrow->BorrowDetail as $step)
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
            </tbody>

        </table>
      @if ($borrow->borrowed =="")

        <form class="p-3" action="" method="POST">
            {{ csrf_field() }}
            @method('PUT')

            <label for="formGroupExampleInput">批示者</label>
            <input type="type" class="form-control" id="formGroupExampleInput" value="{{ Auth::user()->name }} "
                name="borrowedcheck">
      
                <div class="d-flex flex-row-reverse py-2">


                    <button class="btn btn-success mx-2" name="borrowed" value="確認借出" type="submit">確認出借</button>
                    <button class="btn btn-danger mx-2" name="borrowed" value="駁回" type="submit">駁回</button>
                    <!-- <button class="btn btn-outline-danger mx-5" type="reset">重新填寫</button> -->
                </div>
           
        </form>
 @endif
    @endif
@endsection
