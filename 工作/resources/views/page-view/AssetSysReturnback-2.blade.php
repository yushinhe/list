@extends('AssetSys')

@section('content')
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
                <td>val-name</td>
              </tr>  
              <tr>
                <th scope="row">品項</th>
                <td>val666666666666</td>
              </tr>
              <tr>
                <th scope="row">借用時間</th>
                <td>val</td>
              </tr>
              <tr>
                <th scope="row">借用用途</th>
                <td>val</td>
              </tr>
              <tr>
                <th scope="row">歸還日期</th>
                <td>val</td>
              </tr>
              <tr>
                <th scope="row">實際歸還日期</th>
                <td>val</td>
              </tr>
              <tr>
                <th scope="row">歸還狀態</th>
                <td>val</td>
              </tr>
            </tbody>
          </table>
          <form class="p-3" action="">
            <div class="form-group py-2">
                <label for="formGroupExampleInput">入庫時間</label>
                <input type="datetime-local" class="form-control" id="formGroupExampleInput">
            </div>
            <p class="pt-2">品項狀態</p>
            <select class="custom-select">
              <option selected>Open this select menu</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
            <div class="d-flex flex-row-reverse py-2">            
              <button class="btn btn-info" type="submit">歸還入庫</button>
              <!-- <button class="btn btn-outline-danger mx-5" type="reset">重新填寫</button> -->
            </div>
          </form>
          @endsection    