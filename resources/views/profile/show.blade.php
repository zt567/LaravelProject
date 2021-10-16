@extends('common.style')
@section('content')
       @include('common.nav')

       <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
        </div>

        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
            <form>
            @csrf
            @method('PUT')
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">用戶名</label><input type="text" class="form-control" placeholder="name}" value="{{auth()->user()->email}}"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" placeholder="enter email" value="{{auth()->user()->email}}"></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
            </form>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
            </div>
            <div>
              <div class="dropdown">
                 <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                 Dropdown link
                 </a>
                 <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                     <li><a class="dropdown-item" href="#">Action</a></li>
                     <li><a class="dropdown-item" href="#">Another action</a></li>
                     <li><a class="dropdown-item" href="#">Something else here</a></li>
                 </ul>
             </div>
        </div>
    </div>
</div>
</div>
</div>

       @include('common.footer')
@endsection('content')