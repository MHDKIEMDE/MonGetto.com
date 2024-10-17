@extends('dashboard.layouts.appAdmin')

@section('tilte', 'liste des bien')

@section('contents')
    <div class="dashboard_content">

        <h2 class="dashboard_title">add property
            <a class="common_btn" href="{{ route('admin.propriete.create') }}">Add properties</a>
        </h2>

        <div class="dashboard_order wow fadeInUp" data-wow-duration="1.5s">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="status">status</th>
                                    <th class="package">Propriete</th>
                                    <th class="date">Purchase Date</th>
                                    <th class="price">Price</th>
                                    <th class="price">Show</th>
                                    <th class="action">Action</th>
                                </tr>
                            </thead>
                            @foreach ($proprietes as $pro)
                                <tbody>
                                    <tr>
                                        <td class="status">
                                            <span class="approved">approved</span>
                                        </td>
                                        <td class="package">{{ $pro->typeMaison }}</td>
                                        <td class="date">{{ \Carbon\Carbon::parse($pro->created_at)->format('d F Y') }}
                                        </td>
                                        <td class="price">{{ number_format($pro->loyers, 0, ',', ' ') }} FCFA</td>
                                        
                                        <td class="action">
                                            <a href="#"><i class="fal fa-eye"></i></a>
                                        </td>

                                        <td class="action">
                                            <form action="{{ route('admin.propriete.edit', ['propriete' => $pro->id]) }}"
                                                method="GET" style="display:inline;">
                                                @csrf
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="far fa-pen-alt"></i>
                                                </button>
                                            </form>

                                            <form action="{{ route('admin.propriete.destroy', $pro->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn" style="background-color: #ffe900; color:#031a26;">
                                                    <i class="far fa-trash-alt"></i>
                                            </form>
                                        </td>

                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>

                    <div class="row mt_25">
                        <div class="col-12">
                            <div id="pagination_area">
                                <nav aria-label="...">
                                    {{ $proprietes->links('vendor.pagination.custom') }}
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
