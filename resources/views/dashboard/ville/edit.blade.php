@extends('dashboard.layouts.appAdmin')

@section('contents')
    <div class="dashboard_content">
        <h2 class="dashboard_title">Modifier la ville</h2>
        <div class="dashboard_add_property">
            <div class="add_property_info wow fadeInUp" data-wow-duration="1.5s">
                <h3>Modifier une ville</h3>
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
                <form method="POST" action="{{ route('admin.ville.update', ['ville' => $ville->id]) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-xxl-4 col-md-6">
                            <label for="ville_id">Ville</label>
                            <select class="form-select" name="ville_id" id="ville_id" aria-label="Default select example">
                                <option selected>Sectionner une ville</option>
                                @foreach ($ville as $v)
                                    <option value="{{ $v->ville_id }}">{{ $v->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <div class="add_property_input">
                                <label for="ville">ville</label>
                                <input type="text" name="ville" id="ville" placeholder="ville"
                                    value="{{ $ville->name }}" required>
                            </div>
                        </div>

                        <div class="col-12 d-flex p-4">
                            <div class="col-xxl-4 col-md-6">
                                <div class="add_property_input">
                                    <a href="{{ route('admin.ville.show') }}" class="common_btn">Annuler</a>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-6">
                                <div class="add_property_input">
                                    <button class="common_btn" type="submit">Enregistrer</button>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection
