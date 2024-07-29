@extends('dashboard.layouts.appAdmin')

@section('contents')
    <div class="dashboard_content">
        <h2 class="dashboard_title">Edit property <a class="common_btn" href="{{ route('admin.property') }}">all
                properties</a>
        </h2>
        <div class="dashboard_add_property">
            <div class="add_property_info wow fadeInUp" data-wow-duration="1.5s">
                <h3>Basic Information</h3>
                <form action="#">
                    <div class="row">
                        <div class="col-xxl-4 col-md-6">
                            <select class="form-select" name="pays" id="pays" aria-label="Default select example">
                                <label>Pays</label>
                                <option selected>Sectionner un pyas</option>
                                <option value="#">#</option>
                                <option value="#">#</option>
                                <option value="#">#</option>
                                <option value="#">#</option>
                                <option value="#">#</option>
                            </select>
                        </div>

                        <div class="col-xxl-4 col-md-6">
                            <select class="form-select" name="pays" id="pays" aria-label="Default select example">
                                <label>Ville</label>
                                <option selected>Sectionner un ville</option>
                                <option value="#">#</option>
                                <option value="#">#</option>
                                <option value="#">#</option>
                                <option value="#">#</option>
                                <option value="#">#</option>
                            </select>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <label>Quartier</label>
                            <select class="form-select" name="pays" id="pays" aria-label="Default select example">
                                <option selected>Sectionner un Quartier</option>
                                <option value="1200 logement"></option>
                                <option value="#">#</option>
                                <option value="#">#</option>
                                <option value="#">#</option>
                                <option value="#">#</option>
                                <option value="#">#</option>
                            </select>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <label>Type de logement</label>
                            <select class="form-select" name="pays" id="pays" aria-label="Default select example">
                                <option selected>Sectionner</option>
                                <option value="#">#</option>
                                <option value="#">#</option>
                                <option value="#">#</option>
                                <option value="#">#</option>
                                <option value="#">#</option>
                            </select>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <label>Nbre de chamber</label>
                            <select class="form-select" name="pays" id="pays" aria-label="Default select example">
                                <option selected>Sectionner un Nbre</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
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
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="flexCheckDefault4">
                                    <label class="form-check-label" for="flexCheckDefault4">
                                        Ventiller
                                    </label>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-sm-6 col-lg-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="flexCheckDefault5">
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
