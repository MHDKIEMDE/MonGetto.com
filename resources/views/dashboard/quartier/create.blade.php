@extends('dashboard.layouts.appAdmin')

@section('contents')
    <div class="dashboard_content">
        <h2 class="dashboard_title">add Quartier
            <a class="common_btn" href="{{ route('admin.quartier.index') }}">Show Quartier</a>
        </h2>
        <div class="dashboard_add_property">
            <div class="add_property_info wow fadeInUp" data-wow-duration="1.5s">
                <h3>Ajouter un Quartier a la liste des Quartier</h3>

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

                <form method="POST" action="{{ route('admin.quartier.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-xxl-6 col-md-6">
                            <label for="ville_id">Ville</label>
                            <select class="form-select" name="ville_id" id="ville_id" aria-label="Default select example">
                                <option selected>Sectionner une ville</option>
                                @foreach ($ville as $v)
                                    <option value="{{ $v->id }}">{{ $v->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xxl-6 col-md-6">
                            <div class="add_property_input">
                                <label for="quartier">Quartier</label>
                                <input type="text" name="quartier" id="quartier" placeholder="quartier" required>
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
