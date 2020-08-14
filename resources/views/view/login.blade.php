@extends('view.layouts.base')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
    <main class="main register">
        <section id="auth-container" class="py-2">
            <div class="container">
                <div class="top-introduce py-2">
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-center">
                            <article class="w-100">
                                <div class="card card-shadow">

                                    <div class="card-body p-4">
                                        <h3 class="mb-3">Login</h3>
                                        <form method="POST" action="https://kindmate.net/login">
                                            <input type="hidden" name="_token"
                                                value="dlGfAzDWw8sxyxrDMKGtLh2xzL0a6jKJRyNNnZ3d">
                                            <div class="form-group">
                                                <label for="email">E-Mail Address</label>
                                                <input id="email" type="email" class="form-control" name="email" value=""
                                                    required="" autofocus="">

                                            </div>

                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input id="password" type="password" class="form-control" name="password"
                                                    required="">

                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember"
                                                        id="remember">

                                                    <label class="form-check-label" for="remember">
                                                        Remember Me
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-group mb-0">
                                                <button type="submit" class="btn btn-primary">
                                                    Login
                                                </button>

                                                <a class="btn btn-link" href="https://kindmate.net/password/reset">
                                                    Forgot Your Password?
                                                </a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6">
                            <img width="100%" class="my-3" src="https://kindmate.net/svg/donation.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('scripts')
    <script>

    </script>
@endsection