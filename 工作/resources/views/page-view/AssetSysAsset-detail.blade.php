@extends('layouts.AssetSys')

@section('content')
    @if (Auth::user()->role)

        <h2>資產詳細資料</h2>
        
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th colspan="3">{{$list->object}}</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <th scope="row">存放位置</th>
                    <td>{{ $list->position }}</td>
                </tr>
                <tr>
                    <th scope="row">新增日期</th>
                    <td>{{ $list->date }}</td>
                </tr>
                <tr>
                    <th scope="row">資產名稱</th>
                    <td>{{ $list->object }}</td>
                </tr>
                <tr>
                    <th scope="row">品牌</th>
                    <td>{{ $list->brand }}</td>
                </tr>
                <tr>
                    <th scope="row">大類項</th>
                    <td>{{ $list->bigtype }}</td>
                </tr>
               
            </tbody>
            
        </table>
     <button class="btn btn-info " type="button"><a class="text-white" href="{{route('asset.index')}}">back</a> </button>

    @endif
@endsection
