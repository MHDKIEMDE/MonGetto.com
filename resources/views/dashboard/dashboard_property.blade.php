@extends('dashboard.layouts.appAdmin')
@section('tilte')
    My properties
@endsection
@section('contents')
    <div class="dashboard_content">
        <h2 class="dashboard_title">My properties
            <a class="common_btn" href="{{ route('admin.showPays') }}">+ Show Categories</a>
            <a class="common_btn" href="{{ route('admin.addProperty') }}">+ add property</a>
        </h2>
        <div class="overview_listing wow fadeInUp" data-wow-duration="1.5s">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th class="images">Images</th>
                            <th class="details">Details</th>
                            <th class="prix">Prix</th>
                            <th class="status">Status</th>
                            <th class="status">Status</th>
                            <th class="action">Action</th>
                        </tr>
                    </thead>
                    @foreach ($property as $pro)
                        <tbody>
                            <tr>
                                <td class="images">
                                    <img src="{{ asset('assets/images/property_1.jpg') }}" alt="property"
                                        class="img-fluid w-100">
                                </td>
                                <td class="details">
                                    <a class="item_title"
                                        href="{{ route('user.property_details') }}">{{ $pro-> name }}</a>
                                    <p>Public : {{ $pro->create_at }}</p>
                                    <span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <b>(24 Reviews)</b>
                                    </span>
                                </td>
                                <td class="price">
                                    <h3>{{ $pro->loyer }}</h3>
                                </td>
                                <td class="status">
                                    <span class="sold">sale</span>
                                </td>
                                <td class="action">
                                    <form action="{{ route('admin.editVille', ['id' => $v->id]) }}" method="GET"
                                        style="display:inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">
                                            <i class="far fa-pen"></i> Edit
                                        </button>
                                    </form>
                                    <form action="{{ route('admin.deleteVille', ['id' => $v->id]) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="far fa-trash"></i>  Delete
                                        </button>
                                    </form>

                                    <a href="{{ route('admin.editProperty') }}"><i class="far fa-pen"></i> Edit</a>
                                    <a href="#"><i class="far fa-trash"></i> Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                    <tr>
                        <td class="images">
                            <img src="{{ asset('assets/images/property_2.jpg') }}" alt="property" class="img-fluid w-100">
                        </td>
                        <td class="details">
                            <a class="item_title" href="{{ route('user.property_details') }}">Hermosa Casa al Norte</a>
                            <p>Posting date: March 22, 2024</p>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <b>(58 Reviews)</b>
                            </span>
                        </td>
                        <td class="price">
                            <h3>$600.00</h3>
                        </td>
                        <td class="status">
                            <span class="approved">rent</span>
                        </td>
                        <td class="action">
                            <a href="{{ route('admin.editProperty') }}"><i class="far fa-pen"></i> Edit</a>
                            <a href="#"><i class="far fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="images">
                            <img src="{{ asset('assets/images/property_3.jpg') }}" alt="property" class="img-fluid w-100">
                        </td>
                        <td class="details">
                            <a class="item_title" href="{{ route('user.property_details') }}">South Side Garden
                                House</a>
                            <p>Posting date: March 22, 2024</p>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <b>(146 Reviews)</b>
                            </span>
                        </td>
                        <td class="price">
                            <h3>$190.00</h3>
                        </td>
                        <td class="status">
                            <span class="sold">sale</span>
                        </td>
                        <td class="action">
                            <a href=""><i class="far fa-pen"></i> Edit</a>
                            <a href="#"><i class="far fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="images">
                            <img src="{{ asset('assets/images/property_4.jpg') }}" alt="property" class="img-fluid w-100">
                        </td>
                        <td class="details">
                            <a class="item_title" href="{{ route('user.property_details') }}">Stunning mansion in
                                Reno</a>
                            <p>Posting date: March 22, 2024</p>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <b>(24 Reviews)</b>
                            </span>
                        </td>
                        <td class="price">
                            <h3>$599.00</h3>
                        </td>
                        <td class="status">
                            <span class="approved">sale</span>
                        </td>
                        <td class="action">
                            <a href="{{ route('admin.editProperty') }}"><i class="far fa-pen"></i> Edit</a>
                            <a href="#"><i class="far fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="images">
                            <img src="{{ asset('assets/images/property_5.jpg') }}" alt="property" class="img-fluid w-100">
                        </td>
                        <td class="details">
                            <a class="item_title" href="{{ route('user.property_details') }}">Leisure Beautiful
                                Health</a>
                            <p>Posting date: March 22, 2024</p>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <b>(24 Reviews)</b>
                            </span>
                        </td>
                        <td class="price">
                            <h3>$599.00</h3>
                        </td>
                        <td class="status">
                            <span class="sold">sale</span>
                        </td>
                        <td class="action">
                            <a href="{{ route('admin.editProperty') }}"><i class="far fa-pen"></i> Edit</a>
                            <a href="#"><i class="far fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="images">
                            <img src="{{ asset('assets/images/property_7.jpg') }}" alt="property"
                                class="img-fluid w-100">
                        </td>
                        <td class="details">
                            <a class="item_title" href="{{ route('user.property_details') }}">Hermosa Casa al
                                Norte</a>
                            <p>Posting date: March 22, 2024</p>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <b>(58 Reviews)</b>
                            </span>
                        </td>
                        <td class="price">
                            <h3>$600.00</h3>
                        </td>
                        <td class="status">
                            <span class="approved">sale</span>
                        </td>
                        <td class="action">
                            <a href="{{ route('admin.editProperty') }}"><i class="far fa-pen"></i> Edit</a>
                            <a href="#"><i class="far fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="images">
                            <img src="{{ asset('assets/images/property_7.jpg') }}" alt="property"
                                class="img-fluid w-100">
                        </td>
                        <td class="details">
                            <a class="item_title" href="{{ route('user.property_details') }}">South Side Garden
                                House</a>
                            <p>Posting date: March 22, 2024</p>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <b>(146 Reviews)</b>
                            </span>
                        </td>
                        <td class="price">
                            <h3>$190.00</h3>
                        </td>
                        <td class="status">
                            <span class="sold">sale</span>
                        </td>
                        <td class="action">
                            <a href="{{ route('admin.editProperty') }}"><i class="far fa-pen"></i> Edit</a>
                            <a href="#"><i class="far fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="row mt_25">
                <div class="col-12">
                    <div id="pagination_area">
                        <nav aria-label="...">
                            <ul class="pagination justify-content-start">
                                <li class="page-item"><a class="page-link" href="#"><i
                                            class="far fa-angle-double-left" aria-hidden="true"></i></a>
                                </li>
                                <li class="page-item"><a class="page-link active" href="#">01</a></li>
                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i
                                            class="far fa-angle-double-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!--=========================
                                                                                                                        DASHBOARD INFO END
                                                                                                                    ==========================-->
@endsection
