@extends('dashboard.layouts.appAdmin')

@section('contents')
    <div class="dashboard_content">
        <h2 class="dashboard_title">add Type De Maison
            <a class="common_btn" href="{{ route('admin.typeMaison.index') }}">Show Type De Maison</a>
        </h2>
        <div class="dashboard_add_property">
            <div class="add_property_info wow fadeInUp" data-wow-duration="1.5s">
                <h3>Ajouter un Type De Maison</h3>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
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
                <form method="POST" action="{{ route('admin.typeMaison.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-xxl-6 col-md-6">
                            <div class="add_property_input">
                                <label for="typeMaison">Type de Maison</label>
                                <input type="text" name="typeMaison" id="typeMaison" placeholder="Cour Unique" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="add_property_input">
                                <button class="common_btn w-25"  type="submit">Valider</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </section>
@endsection
