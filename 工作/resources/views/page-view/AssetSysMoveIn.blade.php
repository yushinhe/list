@extends('AssetSys')

@section('content')
          <h2>資產移交</h2>
          <form class="p-3"  method="POST">
            {{csrf_field()}}
            <div class="form-group">
              <label for="formGroupExampleInput">移交人</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="name" name="person">
            </div>
            <p>品項分類</p>
            <div class="opt d-flex">
              <select class="custom-select mx-2" name="bigtype">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
              <select class="custom-select mx-2" name="type">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="form-group py-3" >
              <label for="formGroupExampleInput">品項名稱</label>
              <input type="text" class="form-control" name="brand" id="formGroupExampleInput" placeholder="object-name">
            </div>
            <div class="form-group py-1" >
              <label for="formGroupExampleInput">日期時間</label>
              <input type="date" class="form-control" id="formGroupExampleInput" name="time">
            </div>
            <div class="d-flex flex-row-reverse py-2">            
              <button class="btn btn-info" type="submit">送出表單</button>
              <button class="btn btn-outline-danger mx-5" type="reset">重新填寫</button>
            </div>
          </form>
          @endsection