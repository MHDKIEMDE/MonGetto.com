@extends('dashboard.layouts.appAdmin')
@section('tilte', 'Blog create')

@section('contents')

    <section class="dashboard">

        <div class="dashboard_content">
            <h2 class="dashboard_title">My Blogs
                <a class="common_btn" href="{{ route('blog.index') }}">+ Show Blog</a>
            </h2>
            <div class="dashboard_add_property">
                <div class="add_property_info wow fadeInUp" data-wow-duration="1.5s">
                    <h3>Basic Information</h3>

                    <form method="POST" action="{{ route('blog.index') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="add_property_info wow fadeInUp" data-wow-duration="1.5s">
                            <h3>Basic Information</h3>
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('succesbs') }}
                                </div>
                            @endif
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-xxl-6 col-md-6">
                                    <div class="add_property_input">
                                        <label>Title </label>
                                        <input type="text" name="name" id="name" placeholder="Title" />
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-md-6">
                                    <div class="add_property_input">
                                        <label for="images">Images</label>
                                        <input type="file" name="images[]" multiple id="images" placeholder="Images">
                                    </div>
                                </div>
                                <div class="col-xxl-12">
                                    <div class="add_property_input">
                                        <label for="description">Description</label>
                                        <textarea class="form-control summer_note" name="description" id="description"></textarea>
                                        <button class="common_btn" type="submit">Valider</button>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
