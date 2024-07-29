@extends('dashboard.layouts.appAdmin')

@section('title')
    Dashboard Ville
@endsection

@section('contents')
    <div class="dashboard_content">
        <h2 class="dashboard_title"> Dashboard Ville
            <a class="common_btn" href="{{ route('admin.ville.create') }}">+ Add Ville</a>
            <a class="common_btn" href="{{ route('admin.quartier.index') }}">+ Show Quartier</a>
            <a class="common_btn" href="{{ route('admin.pays.index') }}">+ show Pays</a>
        </h2>
        <div class="dashboard_order wow fadeInUp" data-wow-duration="1.5s">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="serial">id</th>
                                    <th class="ville">Ville</th>
                                    <th class="date">Pays Associer</th>
                                    <th class="package">Add date</th>
                                    <th class="action">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ville as $v)
                                    <tr>
                                        <td class="serial">{{ $v->id }}</td>
                                        <td class="package">{{ $v->name }}</td>
                                        <td class="details">
                                            <p>{{ $v->pays->name }}</p>
                                        </td>
                                        <td class="action">
                                            <form action="{{ route('admin.ville.edit', ['ville' => $v->id]) }}"
                                                method="GET" style="display:inline;">
                                                @csrf
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="far fa-pen-alt"></i> Edit
                                                </button>
                                            </form>
                                            <form action="{{ route('admin.ville.destroy', $v->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="far fa-trash-alt"></i> Delete
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
                                {{ $ville->links('vendor.pagination.custom') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
