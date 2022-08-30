<?= $this->extend('layout/template'); ?>

<?= $this->section('register'); ?>

<div id="app">
    <section class="section">
        <div class="container pb-5">
            <div class="row">
                <div
                    class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                    <div class="login-brand">
                        <img src="<?= base_url('img/logo.png'); ?>" class="mb-4 mx-auto d-block" width="70" alt="logo">
                    </div>

                    <div class="card card-primary rounded-0">
                        <div class="card-header">
                            <h4>Register</h4>
                        </div>

                        <div class="card-body m-2">
                            <form method="POST" action="<?= base_url('auth/register') ?>">
                                <div class="row">
                                    <div class="form-group col-6 mb-4">
                                        <label for="first_name">First Name</label>
                                        <input id="first_name" type="text" class="form-control rounded-0"
                                            name="first_name" autofocus>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="last_name">Last Name</label>
                                        <input id="last_name" type="text" class="form-control rounded-0"
                                            name="last_name">
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control rounded-0" name="email">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group mb-4 col-6">
                                        <label for="password" class="d-block">Password</label>
                                        <input id="password" type="password" class="form-control rounded-0 pwstrength"
                                            data-indicator="pwindicator" name="password">
                                        <div id="pwindicator" class="pwindicator">
                                            <div class="bar"></div>
                                            <div class="label"></div>
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="password2" class="d-block">Password Confirmation</label>
                                        <input id="password2" type="password" class="form-control rounded-0"
                                            name="password-confirm">
                                    </div>
                                </div>

                                <div class="form-divider">
                                    Your Home
                                </div>
                                <div class="row">
                                    <div class="form-group mb-4 col-6">
                                        <label>Country</label>
                                        <select class="form-control rounded-0 selectric">
                                            <option>Indonesia</option>
                                            <option>Palestine</option>
                                            <option>Syria</option>
                                            <option>Malaysia</option>
                                            <option>Thailand</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Province</label>
                                        <select class="form-control rounded-0 selectric">
                                            <option>West Java</option>
                                            <option>East Java</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group mb-4 col-6">
                                        <label>City</label>
                                        <input type="text" class="form-control rounded-0">
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Postal Code</label>
                                        <input type="text" class="form-control rounded-0">
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                                        <label class="custom-control-label" for="agree">I agree with the terms and
                                            conditions</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-dark tn-lg btn-block rounded-0">Register
                                    </button>
                                </div>
                                <div class="mt-5 text-muted text-center">
                                    Already have an account? <a href="<?= base_url('/login'); ?>">Log in</a>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="text-muted text-center">
    <p><small>Copyright &copy; FUTURISTICSTORE 2022</small></p>
</div>

<?= $this->endSection() ?>