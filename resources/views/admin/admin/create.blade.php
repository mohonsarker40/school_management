@extends('layouts.layout')

@section('content')
    <section class="section">
        <div class="container d-flex justify-content-center my-5">
            <div class="card shadow-sm" style="width: 100%; max-width: 50vw;">
                <div class="card-body">
                    <h3 class="card-title text-center mb-4">Add new Admin</h3>

                    <form action="{{ route('admin.store') }}" method="post">
                        @csrf
                        <div class="mb-3 row">
                            <label for="inputName" class="col-sm-3 col-form-label">Your Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" id="inputName"
                                       placeholder="Enter your name" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="inputEmail" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" name="email" class="form-control" id="inputEmail"
                                       placeholder="Enter your email" required>
                            </div>
                        </div>

                        <div class="d-flex justify-content-start">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection
