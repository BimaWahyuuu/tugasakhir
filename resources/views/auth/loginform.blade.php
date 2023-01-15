<form action="/login" method="post">
        @csrf
        <div class="col-lg-10 col-lg-offset-1 col-lg-offset-right-1 col-md-10 col-md-offset-1 col-md-offset-right-1 col-sm-12 col-xs-12 pull-right ">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label @error('email') is-invalid  @enderror">
                <input   value="{{old('email')}}" class="mdl-textfield__input " name="email" type="text " id="emailAddress ">
                <label class="mdl-textfield__label " for="emailAddress ">Email</label>
                <span class="mdl-textfield__error ">@error('email') {{$message}} @enderror</span>
            </div>
        </div>
        <div class="col-lg-10 col-lg-offset-1 col-lg-offset-right-1 col-md-10 col-md-offset-1 col-md-offset-right-1 col-sm-12 col-xs-12 pull-right ">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label @error('password') is-invalid  @enderror">
                <input    class="mdl-textfield__input " name="password" autocomplete="off" type="password " id="SetPassword ">
                <label class="mdl-textfield__label " for="SetPassword ">Password</label>
                <span class="mdl-textfield__error ">@error('password') {{$message}} @enderror</span>
            </div>
        </div>
        <div class="col-lg-10 col-lg-offset-1 col-lg-offset-right-1 col-md-10 col-md-offset-1 col-md-offset-right-1 col-sm-12 col-xs-12 pull-right ">
            <div class="row">
                <br>
                <div class="col-lg-10 col-lg-offset-1 col-lg-offset-right-1 col-md-10 col-md-offset-1 col-md-offset-right-1 col-sm-12 col-xs-12 pull-right" style=" text-align:right;">
                    <a href="#">Reset Password</a>
                </div>
            </div>
        </div>
        <div class="col-lg-10 col-lg-offset-1 col-lg-offset-right-1 col-md-10 col-md-offset-1 col-md-offset-right-1 col-sm-12 col-xs-12 pull-right ">
            <button class="btn lt-register-btn">login <i class="icon-right "></i></button>
        </div>
        <div class="mt-5col-lg-10 col-lg-offset-1 col-lg-offset-right-1 col-md-10 col-md-offset-1 col-md-offset-right-1 col-sm-12 col-xs-12 pull-right">
           <div class="row mt-5">
            <br>
            <br>
                @if (session('flash'))
                <div class="mt-5 alert alert-danger">
                    {{ session('flash') }}
                </div>
            @endif
            @if (session('status'))
                <div class="mt-5 alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
           </div>
        </div>
        
    </form>