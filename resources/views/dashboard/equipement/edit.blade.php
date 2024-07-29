@extends('dashboard.layouts.appAdmin')

@section('contents')
    <div class="dashboard_content">
        <h2 class="dashboard_title">Modifier le Equipement</h2>
        <div class="dashboard_add_property">
            <div class="add_property_info wow fadeInUp" data-wow-duration="1.5s">
                <h3>Modifier un Equipement</h3>
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
                <form method="POST" action="{{ route('admin.equipement.update', ['equipement' => $equipement->id]) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-xxl-4 col-md-6">
                            <div class="add_property_input">
                                <label for="equipement">Equipement</label>
                                <input type="text" name="equipement" id="equipement" placeholder="equipement"
                                    value="{{ $equipement->name }}" required>
                            </div>
                        </div>
                        <div class="col-12 d-flex p-4">
                            <div class="col-xxl-4 col-md-6">
                                <div class="add_property_input">
                                    <button class="common_btn" type="submit">Enregistrer</button>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-6">
                                <div class="add_property_input">
                                    <a href="{{ route('admin.equipement.index') }}" class="common_btn">Annuler</a>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection
