@extends('dashboard.layouts.appAdmin')

@section('title', 'Dashboard Pays')


@section('contents')
    <div class="dashboard_content">
        <h2 class="dashboard_title"> Dashboard Type De Maison
            <a class="common_btn" href="{{ route('admin.typeMaison.create') }}">+ Add Type De Maison</a>
            <a class="common_btn" href="{{ route('admin.quatier.index') }}">+ Show Quatier</a>
            <a class="common_btn" href="{{ route('admin.ville.index') }}">+ show Ville</a>
        </h2>
        <div class="dashboard_order wow fadeInUp" data-wow-duration="1.5s">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="serial">id</th>
                                    <th class="date">Type De Maison</th>
                                    <th class="package">Add date</th>
                                    <th class="action">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($typeMaison as $t)
                                    <tr>
                                        <td class="serial">{{ $t->id }}</td>
                                        <td class="package">{{ $t->name }}</td>
                                        <td class="date">{{ $t->created_at }}</td>
                                        <td class="action">
                                            <form action="{{ route('admin.typeMaison.edit', ['typeMaison' => $t->id]) }}"
                                                method="GET" style="display:inline;">
                                                @csrf
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="far fa-pen-alt"></i>
                                                </button>
                                            </form>
                                            <form action="{{ route('admin.typeMaison.destroy', $t->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12">
                            <div id="pagination_area">
                                {{ $typeMaison->links('vendor.pagination.custom') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
