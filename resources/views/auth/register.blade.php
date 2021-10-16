@extends('common.style')
@section('content')
       @include('common.nav')
        <!-- register-->
        <div class="container col-6 mt-5">
            @include('common.error')
          <form style="width: 23rem;" method="POST" action="{{ route('register') }}">
            @csrf
            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">註冊頁面</h3>
            <div class="form-outline mb-4">
              <label class="form-label" for="form2Example17">請輸入用戶名稱</label>
              <input name="name" type="text" id="" class="form-control form-control-lg" />
            </div>
            <div class="form-outline mb-4">
              <label class="form-label" for="form2Example17">請輸入信箱</label>
              <input name="email" type="email" id="" class="form-control form-control-lg" />
            </div>
            <div class="form-outline mb-4">
              <label class="form-label" for="form2Example17">請輸入密碼</label>
              <input name="password" type="password" id="" class="form-control form-control-lg" />
            </div>
            <div class="form-outline mb-4">
              <label class="form-label" for="form2Example27">確認密碼</label>
              <input name="password_confirmation" type="password_confirmation" id="" class="form-control form-control-lg" />
            </div>
            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block" type="submit">送出</button>
            </div>

            <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">忘記密碼?</a></p>
            <p>尚未註冊? <a href="#!" class="link-info">註冊帳號</a></p>
          </form>
        </div>
        <!-- register end-->
        @include('common.footer')
@endsection('content')