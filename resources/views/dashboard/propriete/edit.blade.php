@extends('dashboard.layouts.appAdmin')

@section('Title', 'Edit Property')

@section('contents')
    <div class="dashboard_content">
        <h2 class="dashboard_title">Edit property <a class="common_btn" href="{{ route('admin.propriete.index') }}">all
                properties</a>
        </h2>
        <div class="dashboard_add_property">
            <div class="add_property_info wow fadeInUp" data-wow-duration="1.5s">
                <h3>Basic Information</h3>
                <form action="#">
                    <div class="row">
                        <div class="col-xxl-4 col-md-6">
                            <label for="pays_id">Pays</label>
                            <select class="form-select" name="pays_id" id="pays_id" aria-label="Default select example">
                                <option selected>Sectionner une Pays</option>
                                @foreach ($propriete as $pro)
                                    <option value="{{ $pro->pays_id }}">{{ $pro->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <label for="ville_id">Ville</label>
                            <select class="form-select" name="ville_id" id="ville_id" aria-label="Default select example">
                                <option selected>Sectionner une ville</option>
                                @foreach ($propriete as $pro)
                                    <option value="{{ $pro->ville_id }}">{{ $pro->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <label for="quatier_id">Quatier</label>
                            <select class="form-select" name="quatier_id" id="quatier_id"
                                aria-label="Default select example">
                                <option selected>Sectionner un Quatier</option>
                                @foreach ($propriete as $pro)
                                    <option value="{{ $pro->quatier_id }}">{{ $pro->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <label for="typeMaison_id">Type de Maison</label>
                            <select class="form-select" name="typeMaison_id" id="typeMaison_id"
                                aria-label="Default select example">
                                <option selected>Sectionner un Model</option>
                                @foreach ($propriete as $pro)
                                    <option value="{{ $pro->typeMaison_id }}">{{ $pro->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <label>Nbre de chamber</label>
                            <select class="form-select" name="nbre_C" id="nbre_C" aria-label="Default select example">
                                <option selected>Sectionner un Nbre</option>
                                @foreach ($propriete as $pro)
                                    <option value="{{ $pro->nbre_C->id }}">{{ $pro->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <div class="add_property_input">
                                <label>Price</label>
                                <input type="text" placeholder="Price">
                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <div class="add_property_input">
                                <label>Numero</label>
                                <input type="text" placeholder="Phone">
                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <div class="add_property_input">
                                <label>Bannner Image</label>
                                <input type="file">
                            </div>
                        </div>
                    </div>
                    <div class="add_property_info add_property_aminities wow fadeInUp" data-wow-duration="1.5s">
                        <h3>Aminities</h3>
                        <div class="row">
                            <div class="col-xxl-3 col-sm-6 col-lg-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Douche
                                    </label>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-sm-6 col-lg-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                    <label class="form-check-label" for="flexCheckDefault2">
                                        Garage
                                    </label>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-sm-6 col-lg-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                                    <label class="form-check-label" for="flexCheckDefault3">
                                        Cuisine
                                    </label>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-sm-6 col-lg-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                                    <label class="form-check-label" for="flexCheckDefault4">
                                        Ventiller
                                    </label>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-sm-6 col-lg-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
                                    <label class="form-check-label" for="flexCheckDefault5">
                                        Courant
                                    </label>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-sm-6 col-lg-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="flexCheckDefault6">
                                    <label class="form-check-label" for="flexCheckDefault6">
                                        L'eau
                                    </label>
                                </div>
                            </div>

                        </div>
                </form>
            </div>
        </div>
        <div class="add_property_info wow fadeInUp" data-wow-duration="1.5s">
            <h3>Others Information</h3>
            <form action="#">
                <div class="row">
                    <div class="col-xxl-4">
                        <div class="add_property_input">
                            <label>Google Map localisation direct</label>
                            <input type="text" placeholder="Google Map Code">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="add_property_input">
                            <label>Description</label>
                            <textarea class="form-control summer_note"></textarea>
                            <button class="common_btn" type="submit">save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection
