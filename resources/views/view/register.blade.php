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
                                        <h3 class="mb-3">Register</h3>
                                        <form method="POST" action="https://kindmate.net/register">
                                            <input type="hidden" name="_token"
                                                value="dlGfAzDWw8sxyxrDMKGtLh2xzL0a6jKJRyNNnZ3d">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input id="name" type="text" class="form-control" name="name" value=""
                                                    required="" autofocus="">

                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="email">E-Mail Address</label>
                                                        <input id="email" type="email" class="form-control" name="email"
                                                            value="" required="">

                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="email">Phone number</label>
                                                        <input id="phone" type="text" class="form-control" name="phone"
                                                            value="" required="">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="password">Password</label>
                                                        <input id="password" type="password" class="form-control"
                                                            name="password" required="">

                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="password-confirm">Confirm Password</label>
                                                        <input id="password-confirm" type="password" class="form-control"
                                                            name="password_confirmation" required="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group mb-0">
                                                <button type="submit" class="btn btn-primary">
                                                    Register
                                                </button>
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
