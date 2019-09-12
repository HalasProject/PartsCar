<div class="dialogue modal fade model-sign login-modal-lg" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <p>Bienvenue</p>
                <h6>Connexion</h6>
                <div class="sign-form">
                    <form class="mb-0" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="username"
                                placeholder="Email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="pwd"
                                placeholder="Password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="checkbox pull-left">
                            <label style="margin-bottom:10px">
                                <input name="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                                Remember me</label>
                        </div>
                       
                       <div class="pull-right lost-pass">
                             <!--<a href="#">Forget Password?</a>-->
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Connexion</button>
                    </form>
                    <!--
                    <div class="form-links text-center">
                        <a href="#">Create New Account</a>
                    </div>-->
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
</div>