@extends('dashboard.layouts.appAdmin')

@section('tilte', 'liste des bien')

@section('contents')
<div class="dashboard_content">
    <h2 class="dashboard_title">Dashboard order</h2>
    <div class="dashboard_order wow fadeInUp" data-wow-duration="1.5s">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th class="serial">Serial</th>
                                <th class="package">Package</th>
                                <th class="date">Purchase Date</th>
                                <th class="date">Expired Date</th>
                                <th class="price">Price</th>
                                <th class="action">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="serial">01</td>
                                <td class="package">Basic</td>
                                <td class="date">16-12-2022</td>
                                <td class="date">16-12-2022</td>
                                <td class="price">$5000.00</td>
                                <td class="action">
                                    <a href="{{ route('admin.invoice') }}"><i class="fal fa-eye"></i></a>
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
                                                class="far fa-angle-double-right" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
