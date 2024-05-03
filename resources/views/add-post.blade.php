@extends('layout')
@section('content')


    <section class="post" id="post">
        <div style="margin: auto; height:5rem; padding: 40px 10rem;">
            <h1>Be an Aproko</h1>

            <form action="{{ route('post.store')}}" method="POST"> @csrf
                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control mb-3" id="">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Post</label>
                    <div class="col-sm-10">
                        <textarea name="content" rows="2" class="form-control mb-3"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Post</button>
            </form>
        </div>

    </section>

@endsection
