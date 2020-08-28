@extends('layouts.Book')
@section('content')
    <x-alert />
    <h2>資產領用</h2>
    <form class="p-3" method="POST">
        {{ csrf_field() }}
        @livewire('bookwithdraw')

        <div class="form-group py-2">
            <label for="formGroupExampleInput">領用人</label>
            <input type="text" class="form-control" id="formGroupExampleInput" value="{{ Auth::user()->name }} "
                name="person">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">領用時間</label>
            <input type="datetime-local" class="form-control" id="formGroupExampleInput" name="time" required>
        </div>
        <div class="input-group py-3">
            <div class="input-group-prepend">
                <span class="input-group-text">領用用途</span>
            </div>
            <textarea class="form-control" aria-label="With textarea" name="way" required></textarea>
        </div>
        <div class="d-flex flex-row-reverse py-2">
            <button class="btn btn-info" type="submit">送出表單</button>
            <button class="btn btn-outline-danger mx-5" type="reset">重新填寫</button>
        </div>
    </form>
@endsection
