@extends('layouts.AssetSys')

@section('content')
    @if (Auth::user()->AssetController)
        <x-alert />
<h2>類項管理</h2>

        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th colspan="3">現有類項</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($bigtype as $n => $b)
                    <tr>
                        <th scope="row">類項{{ $n + 1 }} </th>
                        <td>{{ $b->bigtype }} <span class=" pl-5 fas fa-trash text-danger "
                                onclick="event.preventDefault();
                                    if(confirm('確定要刪除此筆資料?')) { document.getElementById('form-delete-{{ $b->id }}').submit()}"></span>
                            <form action="{{ route('setcategory.destroy', $b->id) }}" id="{{ 'form-delete-' . $b->id }}"
                                method="POST">
                                @csrf
                                @method('delete')

                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>

        </table>

        <h4>新增類項</h4>
        <form class="p-3" method="POST">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="formGroupExampleInput">新增類項</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="bigtype" required>
            </div>
            <div class="d-flex flex-row-reverse py-2">
                <button class="btn btn-info" type="submit">送出表單</button>
                <button class="btn btn-outline-danger mx-5" type="reset">重新填寫</button>
            </div>
        </form>
    @endif
@endsection
