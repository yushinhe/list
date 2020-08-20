@extends('layouts.AssetSys')

@section('content')

    <h2>資產借用</h2>
   <x-alert/>
    <form class="p-3" method="POST">
        {{ csrf_field() }}
        @livewire('borrow')
  
        <div class="form-group py-2">
            <label for="formGroupExampleInput">借用日期</label>
            <input type="date" class="form-control" id="formGroupExampleInput" name="borrowtime" required>
        </div>
        <div class="form-group py-2">
            <label for="formGroupExampleInput">借用人</label>
            <input type="type" class="form-control" id="formGroupExampleInput" value="{{ Auth::user()->name }}" name="person" required >
        </div>
        <div class="input-group py-3">
            <div class="input-group-prepend">
                <span class="input-group-text">借用用途</span>
            </div>
            <textarea class="form-control" aria-label="With textarea" name="way "required></textarea>
        </div>
        <div class="form-group py-2">
            <label for="formGroupExampleInput">歸還日期</label>
            <input type="date" class="form-control" id="formGroupExampleInput" name="sendtime" required>
        </div>
        <div class="d-flex flex-row-reverse py-2">
            <button class="btn btn-info" type="submit">送出表單</button>
            <button class="btn btn-outline-danger mx-5" type="reset">重新填寫</button>
        </div>
    </form>
@endsection
