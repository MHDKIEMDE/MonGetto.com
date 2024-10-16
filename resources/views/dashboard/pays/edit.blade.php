@extends('dashboard.layouts.appAdmin')

@section('tilte', 'Edit Pays')

@section('contents')
    <div class="dashboard_content">
        <h2 class="dashboard_title">Modifier le Pays</h2>
        <div class="dashboard_add_property">
            <div class="add_property_info wow fadeInUp" data-wow-duration="1.5s">
                <h3>Modifier un Pays</h3>
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
                <form method="POST" action="{{ route('admin.pays.update', ['pay' => $pays->id]) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-xxl-4 col-md-6">
                            <div class="add_property_input">
                                <label for="pays">Pays</label>
                                <input type="text" name="pays" id="pays" placeholder="Pays"
                                    value="{{ $pays->name }}" required>
                            </div>
                        </div>
                        <div class="col-12 d-flex p-4">
                            <div class="col-xxl-4 col-md-6">
                                <div class="add_property_input">
                                    <a href="{{ route('admin.pays.index') }}" class="common_btn">Annuler</a>
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
