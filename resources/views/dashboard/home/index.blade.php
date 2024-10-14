@extends('dashboard.layouts.appAdmin')

@section('tilte', ' Dashboard')

@section('contents')
    <div class="dashboard_content">
        <h2 class="dashboard_title">Welcome To Your Profile</h2>
        <div class="dashboard_overview">
            <div class="row">
                <div class="col-xxl-3 col-md-6 col-xl-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="dashboard_overview_item">
                        <div class="icon">
                            <i class="far fa-list-ul"></i>
                        </div>
                        <h3> {{ $proprieteCount }} <span>Nbr de propriete</span></h3>
                    </div>
                </div>
                <div class="col-xxl-3 col-md-6 col-xl-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="dashboard_overview_item blue">
                        <div class="icon">
                            <i class="fas fa-spinner"></i>
                        </div>
                        <h3> {{ $proprieteCount }} <span>Nbr de visiteur</span></h3>
                    </div>
                </div>
                <div class="col-xxl-3 col-md-6 col-xl-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="dashboard_overview_item orange">
                        <div class="icon">
                            <i class="far fa-heart"></i>
                        </div>
                        {{-- <h3> 37 <span>Nbr de proprieter mis en favoris</span></h3> --}}
                        <h3> {{ $contactsCount }} <span>Nbr Email</span></h3>
                    </div>
                </div>
                <div class="col-xxl-3 col-md-6 col-xl-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="dashboard_overview_item red">
                        <div class="icon">
                            <i class="far fa-star"></i>
                        </div>
                        <h3> {{ $blogsCount }} <span>Nbr de Blog</span></h3>
                        {{-- <h3> 27 <span>Reviews</span></h3> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-9 col-xl-8">
                    <div class="row">
                        <div class="col-xxl-6 col-xl-12 wow fadeInLeft" data-wow-duration="1.5s">
                            <div class="overview_chart">
                                <div class="example-two">Autres</div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-12 wow fadeInRight" data-wow-duration="1.5s">
                            <div class="review_progressbar mt_25">
                                <h3>Categories</h3>
                                <div class="single_bar">
                                    <p>Pays <span>{{ $paysCount }}</span></p>
                                    <div id="bar6" class="barfiller">
                                        <div class="tipWrap">
                                            <span class="tip"></span>
                                        </div>
                                        <span class="fill" data-percentage="90"></span>
                                    </div>
                                </div>
                                <div class="single_bar">
                                    <p>Ville <span>{{ $villeCount }}</span></p>
                                    <div id="bar7" class="barfiller">
                                        <div class="tipWrap">
                                            <span class="tip"></span>
                                        </div>
                                        <span class="fill" data-percentage="65"></span>
                                    </div>
                                </div>
                                <div class="single_bar">
                                    <p>Quatier <span>{{ $quatierCount }}</span></p>
                                    <div id="bar8" class="barfiller">
                                        <div class="tipWrap">
                                            <span class="tip"></span>
                                        </div>
                                        <span class="fill" data-percentage="80"></span>
                                    </div>
                                </div>
                                <div class="single_bar">
                                    <p>Type de Model <span>{{ $typeMaisonCount }}</span></p>
                                    <div id="bar8" class="barfiller">
                                        <div class="tipWrap">
                                            <span class="tip"></span>
                                        </div>
                                        <span class="fill" data-percentage="80"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="overview_listing">
                        <div class="table-responsive wow fadeInUp" data-wow-duration="1.5s">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="images">images</th>
                                        <th class="details">details</th>
                                        <th class="price">price</th>
                                        <th class="status">status</th>
                                        <th class="action">action</th>
                                    </tr>
                                </thead>
                                @foreach ($proprietes as $pro)
                                    <tbody>
                                        <tr>
                                            <td class="images">

                                                @if ($pro->images && $pro->images->isNotEmpty())
                                                    <img src="{{ asset('storage/' . $pro->images->first()->url) }}"
                                                        alt="property" class="img-fluid w-100">
                                                @else
                                                    <img src="{{ asset('assets/images/property_1.jpg') }}" alt="property"
                                                        class="img-fluid w-100">
                                                @endif

                                            </td>
                                            <td class="details">
                                                <a class="item_title" href="{{ route('admin.propriete.index') }}">
                                                    {{ $pro->name }} </a>
                                                <p>{{ $pro->user->name }} / Public :
                                                    {{ \Carbon\Carbon::parse($pro->created_at)->format('d F Y') }}
                                                </p>
                                            </td>
                                            <td class="price">
                                                <h3>{{ number_format($pro->loyers, 0, ',', ' ') }} FCFA</h3>
                                            </td>
                                            <td class="status">
                                                <span class="approved">approved</span>
                                            </td>
                                            <td class="action">
                                                <form
                                                    action="{{ route('admin.propriete.edit', ['propriete' => $pro->id]) }}"
                                                    method="GET" style="display:inline;">
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary">
                                                        <i class="far fa-pen-alt"></i> Edit
                                                    </button>
                                                </form>
                                                <form action="{{ route('admin.propriete.destroy', $pro->id) }}"
                                                    method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="far fa-trash-alt"></i>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12">
                                <div id="pagination_area">
                                    {{ $proprietes->links('vendor.pagination.custom') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 wow fadeInRight" data-wow-duration="1.5s">
                    <div class="dashboard_overview_review">
                        <h2> Article récent </h2>
                        @foreach ($blogs as $blog)
                            <div class="single_review">
                                <div class="single_review_img">
                                    @if ($blog->images && $blog->images->isNotEmpty())
                                        <img src="{{ asset('storage/' . $blog->images->first()->url) }}" alt="img"
                                            class="img-fluid w-100">
                                    @else
                                        <img src="{{ asset('storage/' . $blog->images->first()->url) }}" alt="img"
                                            class="img-fluid w-100">
                                    @endif
                                </div>
                                <div class="single_review_text">
                                    <h3> {{ $blog->name }}
                                        <span>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </span>
                                    </h3>
                                    <h6> {{ \Carbon\Carbon::parse($blog->created_at)->format('d F Y') }}</h6>
                                    <p> {{ $blog->description }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection
