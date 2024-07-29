@extends('dashboard.layouts.appAdmin')

@section('contents')
    <div class="dashboard_content">
        <h2 class="dashboard_title">add Ville
            <a class="common_btn" href="{{ route('admin.ville.index') }}">Show Ville</a>
        </h2>
        <div class="dashboard_add_property">
            <div class="add_property_info wow fadeInUp" data-wow-duration="1.5s">
                <h3>Ajouter un Ville a la liste des Ville</h3>
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
                <form method="POST" action="{{ route('admin.ville.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-xxl-6 col-md-6">
                            <label for="pays">Pays</label>
                            <select class="form-select" name="pays_id" id="pays_id" aria-label="Default select example">
                                <option selected>Sectionner un pays</option>

                                @foreach ($pays as $p)
                                    <option value="{{ $p->id }}">{{ $p->name }}</option>
                                @endforeach
                                
                            </select>
                        </div>
                        <div class="col-xxl-6 col-md-6">
                            <div class="add_property_input">
                                <label for="ville">Ville</label>
                                <input type="text" name="ville" id="ville" placeholder="ville">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="add_property_input">
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
