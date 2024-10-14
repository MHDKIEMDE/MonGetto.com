@extends('dashboard.layouts.appAdmin')

@section('Title', 'add property')

@section('contents')
    <div class="dashboard_content">
        <h2 class="dashboard_title">add property
            <a class="common_btn" href="{{ route('admin.propriete.index') }}">all properties</a>
        </h2>
        <div class="dashboard_add_property">
            <form method="POST" action="{{ route('admin.propriete.store') }}" enctype="multipart/form-data">
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
                    <div class="add_property_info wow fadeInUp" data-wow-duration="1.5s">
                        <div class="row">
                            <div class="col-xxl-6 col-md-6">
                                <label for="pays"> Pays</label>
                                <select class="form-select" name="pays_id" id="pays"
                                    aria-label="Default select example">
                                    <option selected>Sectionner un Pays</option>
                                    @foreach ($pays as $p)
                                        <option value="{{ $p->id }}">{{ $p->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xxl-6 col-md-6">
                                <label for="ville">Ville</label>
                                <select class="form-select" name="ville_id" id="ville"
                                    aria-label="Default select example">
                                    <option selected>Sectionner la ville</option>
                                    @foreach ($ville as $v)
                                        <option value="{{ $v->id }}">{{ $v->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xxl-6 col-md-6">
                                <label for="quartier">Quartier</label>
                                <select class="form-select" name="quartier_id" id="quartier"
                                    aria-label="Default select example">
                                    <option selected>Sectionner un Quartier</option>
                                    @foreach ($quartier as $q)
                                        <option value="{{ $q->id }}">{{ $q->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xxl-6 col-md-6">
                                <label for="typeMaison">Type de maison</label>
                                <select class="form-select" name="typeMaison_id" id="typeMaison"
                                    aria-label="Default select example">
                                    <option selected>Sectionnner un type</option> cour commune
                                    @foreach ($typeMaison as $t)
                                        <option value="{{ $t->id }}">{{ $t->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xxl-6 col-md-6">
                                <label for="nbre_C">Nbre de chambre</label>
                                <select class="form-select" name="nbre_C" id="nbre_C"
                                    aria-label="Default select example">
                                    <option selected>Sectionnner un nombres</option>
                                    <option value="1">2</option>
                                    <option value="2">3</option>
                                    <option value="3">4</option>
                                </select>
                            </div>
                            <div class="col-xxl-6 col-md-6">
                                <div class="add_property_input">
                                    <label for="loyers">Loyers</label>
                                    <input type="text" name="loyers" id="loyers" placeholder="Loyers">
                                </div>
                            </div>
                            <div class="col-xxl-6 col-md-6">
                                <div class="add_property_input">
                                    <label for="images">Images</label>
                                    <input type="file" name="images[]" multiple id="images" placeholder="Images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="add_property_info wow fadeInUp" data-wow-duration="1.5s">
                    <h3>Equipements</h3>
                    <div class="add_property_info add_property_aminities wow fadeInUp" data-wow-duration="1.5s">
                        <div class="row">
                            @foreach ($equipements as $equipement)
                                <div class="col-xxl-3 col-sm-6 col-lg-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="equipements[]"
                                            value="{{ $equipement->id }}" id="equipement{{ $equipement->id }}">
                                        <label class="form-check-label" for="equipement{{ $equipement->id }}">
                                            {{ $equipement->name }}
                                        </label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="add_property_info wow fadeInUp" data-wow-duration="1.5s">
                    <h3>Informations suplementaire</h3>
                    <div class="add_property_info wow fadeInUp" data-wow-duration="1.5s">
                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="add_property_input">
                                    <label for="google_map">Google Map localisation direct</label>
                                    <input type="text" name="google_map" id="google_map" placeholder="Google Map Code">
                                </div>
                            </div>
                            <div class="col-xxl-12">
                                <div class="add_property_input">
                                    <label for="description">Description</label>
                                    <textarea class="form-control"></textarea>
                                </div>

                                <div class="add_property_input mt-2">
                                    <button class="common_btn" name="description" id="description"
                                        type="submit">Valider</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
