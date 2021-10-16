@extends('common.style')
@section('content')
       @include('common.nav')
        <!-- login-->
        <div class="container col-6 mt-5">
            @include('common.error')
          <form style="width: 23rem;" method="POST" action="{{ route('login') }}">
            @csrf
            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">登入頁面</h3>
            <div class="form-outline mb-4">
              <label class="form-label" for="form2Example17">請輸入信箱</label>
              <input type="email" name="email" id="form2Example17" value="{{ old('email') }}" class="form-control form-control-lg" />
            </div>
            <div class="form-outline mb-4">
              <label class="form-label" for="form2Example27">請輸入密碼</label>
              <input type="password" name="password" id="form2Example27" class="form-control form-control-lg" />
            </div>
            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block" type="submit">登入</button>
            </div>

            <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">忘記密碼?</a></p>
            <p>尚未註冊? <a href="#!" class="link-info">註冊帳號</a></p>
          </form>
        </div>
        <!-- login end-->
        @include('common.footer')
@endsection('content')