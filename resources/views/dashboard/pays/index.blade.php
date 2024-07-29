@extends('dashboard.layouts.appAdmin')
@section('title', 'Dashboard Pays')
@section('contents')
<div class="dashboard_content">
    <h2 class="dashboard_title"> Dashboard Pays
        <a class="common_btn" href="{{ route('admin.pays.create') }}">+ Add Pays</a>
        <a class="common_btn" href="{{ route('admin.quartier.index') }}">+ Show Quartier</a>
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
                                <th class="date">Pays</th>
                                <th class="package">Add date</th>
                                <th class="action">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pays as $p)
                                <tr>
                                    <td class="serial">{{ $p->id }}</td>
                                    <td class="package">{{ $p->name }}</td>
                                    <td class="date">{{ $p->created_at }}</td>
                                    <td class="action">
                                        <form action="{{ route('admin.pays.edit', ['pay' => $p->id]) }}" method="GET"
                                            style="display:inline;">
                                            @csrf
                                            <button type="submit" class="btn btn-primary">
                                                <i class="far fa-pen-alt"></i> Edit
                                            </button>
                                        </form>
                                        <form action="{{ route('admin.pays.destroy', $p->id) }}" method="POST"
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
                            {{ $pays->links('vendor.pagination.custom') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
