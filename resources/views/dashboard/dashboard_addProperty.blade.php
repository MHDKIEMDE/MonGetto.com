@extends('dashboard.layouts.appAdmin')

@section('contents')
    <div class="dashboard_content">
        <h2 class="dashboard_title">add property
            <a class="common_btn" href="{{ route('admin.property') }}">all properties</a>
        </h2>
        <div class="dashboard_add_property">
            <div class="add_property_info wow fadeInUp" data-wow-duration="1.5s">
                <h3>Basic Information</h3>

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
                
                <form method="POST" action="{{ route('admin.addProperty') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
               
                            <label>Type</label>
                            <select class="select_2" name="state">
                                <option value="">Choisir le type</option>
                                <option value="">Appartment</option>
                                <option value="">House</option>
                                <option value="">Villa</option>
                                <option value="">Office</option>
                                <option value="">Factory</option>
                            </select>
                     
                        <div class="col-xxl-4 col-md-6">
                            <label>Ville</label>
                            <select class="form-select" name="ville" id="ville" aria-label="Default select example">
                                <option selected>Sectionner la ville</option>
                                @foreach ($ville as $v)
                                    <option value="{{ $v->id }}">{{ $v->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <label>Quatier</label>
                            <select class="form-select" name="quatier" id="quatier" aria-label="Default select example">
                                <option selected>Sectionner un Quatier</option>
                                @foreach ($quatier as $q)
                                    <option value="{{ $q->id }}">{{ $q->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <label>Nbre de chambre</label>
                            <select class="form-select" name="nbre_C" aria-label="Default select example">
                                <option selected>Sectionnner un nombres</option>
                                <option value="1">2</option>
                                <option value="2">3</option>
                                <option value="3">4</option>
                            </select>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <div class="add_property_input">
                                <label for="loyers">Loyers</label>
                                <input type="text" name="loyers" id="loyers" placeholder="Loyers">
                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <div class="add_property_input">
                                <label>Images</label>
                                <input type="file" placeholder="Images">
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
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault6">
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
    </section>
@endsection
