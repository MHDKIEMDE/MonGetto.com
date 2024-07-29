@extends('dashboard.layouts.appAdmin')
@section('Title', ' Mes Biens')

@section('contents')
    <div class="dashboard_content">
        <h2 class="dashboard_title">My properties
            <a class="common_btn" href="{{ route('admin.pays.index') }}">+ Show Categories</a>
            <a class="common_btn" href="{{ route('admin.propriete.create') }}">+ add property</a>
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
                            <th class="status">Ville/Quartier</th>
                            <th class="action">Action</th>
                        </tr>
                    </thead>
                    @foreach ($proprietes as $pro)
                        <tbody>
                            <tr>
                                <td class="images">
                                    <img src="{{ asset('assets/images/property_1.jpg') }}" alt="property"
                                        class="img-fluid w-100">
                                </td>
                                <td class="details">
                                    <a class="item_title" href="#">{{ $pro->name }}</a>
                                    <p>Public : {{ \Carbon\Carbon::parse($pro->created_at)->format('d F Y') }}</p>

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
                                    <h3>{{ number_format($pro->loyers, 0, ',', ' ') }} FCFA</h3>

                                </td>
                                <td class="status">
                                    <span class="sold">sale</span>
                                </td>
                                <td class="ville/quartier">
                                    <p class="sold">
                                        {{ $pro->ville->name }} / {{ $pro->ville->pays->name }}
                                    </p>
                                </td>
                                <td class="action">
                                    <form action="{{ route('admin.propriete.edit', ['propriete' => $pro->id]) }}"
                                        method="GET" style="display:inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">
                                            <i class="far fa-pen-alt"></i> Edit
                                        </button>
                                    </form>

                                    <form action="{{ route('admin.propriete.destroy', $pro->id) }}" method="POST"
                                        style="display:inline;">
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
    </section>
@endsection
