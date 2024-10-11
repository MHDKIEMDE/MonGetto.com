@extends('dashboard.layouts.appAdmin')
@section('tilte')
les favoris
@endsection
@section('contents')
    <div class="dashboard_content">
        <h2 class="dashboard_title">Favoris</h2>
        <div class="overview_listing">
            <div class="table-responsive wow fadeInUp" data-wow-duration="1.5s">
                <table>
                    <thead>
                        <tr>
                            <th class="images">images</th>
                            <th class="details">details</th>
                            <th class="price">price</th>
                            <th class="status">Purpose</th>
                            <th class="action">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="images">
                                <img src="{{ asset('assets/images/property_1.jpg') }}" alt="property"
                                    class="img-fluid w-100">
                            </td>
                            <td class="details">
                                <a class="item_title" href="property_details.html">Leisure Beautiful
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
                                <a href="#"><i class="far fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="images">
                                <img src="{{ asset('assets/images/property_2.jpg') }}" alt="property"
                                    class="img-fluid w-100">
                            </td>
                            <td class="details">
                                <a class="item_title" href="property_details.html">Hermosa Casa al Norte</a>
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
                                <a href="#"><i class="far fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="images">
                                <img src="{{ asset('assets/images/property_3.jpg') }}" alt="property"
                                    class="img-fluid w-100">
                            </td>
                            <td class="details">
                                <a class="item_title" href="property_details.html">South Side Garden House</a>
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
                                <a href="#"><i class="far fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="images">
                                <img src="{{ asset('assets/images/property_4.jpg') }}" alt="property"
                                    class="img-fluid w-100">
                            </td>
                            <td class="details">
                                <a class="item_title" href="property_details.html">Stunning mansion in Reno</a>
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
                                <a href="#"><i class="far fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="images">
                                <img src="{{ asset('assets/images/property_5.jpg') }}" alt="property"
                                    class="img-fluid w-100">
                            </td>
                            <td class="details">
                                <a class="item_title" href="property_details.html">Leisure Beautiful
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
                                <a href="#"><i class="far fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="images">
                                <img src="{{ asset('assets/images/property_6.jpg') }}" alt="property"
                                    class="img-fluid w-100">
                            </td>
                            <td class="details">
                                <a class="item_title" href="property_details.html">Hermosa Casa al Norte</a>
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
                                <a href="#"><i class="far fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="images">
                                <img src="{{ asset('assets/images/property_7.jpg') }}" alt="property"
                                    class="img-fluid w-100">
                            </td>
                            <td class="details">
                                <a class="item_title" href="property_details.html">South Side Garden House</a>
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
                                <a href="#"><i class="far fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="row mt_25 wow fadeInUp" data-wow-duration="1.5s">
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
@endsection
