<?= $this->extend('layout/template'); ?>

<?= $this->section('login'); ?>

<div class="container-xxl bd-gutter my-5">
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card rounded-0">
                <div class="login-brand">
                </div>
                <div class="card-body m-4">
                    <img src="<?= base_url('img/logo.png'); ?>" class="mb-4 mx-auto d-block" width="70" alt="logo">
                    <h3>Login</h3>
                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label">Username or Email address *</label>
                            <input type="email" class="form-control rounded-0" id="email" aria-describedby="emailHelp"
                                placeholder="Email">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password *</label>
                            <input type="password" placeholder="password" class="form-control rounded-0" id="password">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember me?</label>
                            <div class="invalid-feedback">
                                please fill in your password
                            </div>
                        </div>
                        <button type="submit" class="btn btn-dark tn-lg btn-block rounded-0">Login</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="mt-5 text-muted text-center">
            Don't have an account? <a href="<?= base_url('/register'); ?>">Create One</a>
        </div>

    </div>
    <div class="text-muted position-absolute bottom-0 start-50 translate-middle-x m-auto">
        <p><small>Copyright &copy; FUTURISTICSTORE 2022</small></p>
    </div>
</div>




<?= $this->endSection() ?>