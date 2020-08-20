@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('恭喜你成功登入了!') }}
                    </div>
                    <div class="card-body">
                        <h3 class="my-2">上傳頭像</h3>
                        <form action="/upload" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="image" id="">
                            <input type="submit" value="上傳">
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
