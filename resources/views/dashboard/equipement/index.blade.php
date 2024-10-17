@extends('dashboard.layouts.appAdmin')

@section('title', 'Dashboard Equipements')

@section('contents')
    <div class="dashboard_content">
        <h2 class="dashboard_title"> Dashboard Equipements
            <a class="common_btn" href="{{ route('admin.equipement.create') }}">Add Equipement</a>
        </h2>
        <div class="dashboard_order wow fadeInUp" data-wow-duration="1.5s">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="serial">id</th>
                                    <th class="date">Equipement</th>
                                    <th class="package">Add date</th>
                                    <th class="action">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($equipement as $e)
                                    <tr>
                                        <td class="serial">{{ $e->id }}</td>
                                        <td class="package">{{ $e->name }}</td>
                                        <td class="date">{{ $e->created_at }}</td> 
                                        <td class="action">
                                            <form action="{{ route('admin.equipement.edit', ['equipement' => $e->id]) }}"
                                                method="GET" style="display:inline;">
                                                @csrf
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="far fa-pen-alt"></i>
                                                </button>
                                            </form>
                                            <form action="{{ route('admin.equipement.destroy', $e->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn" style="background-color: #ffe900; color:#031a26;">
                                                    <i class="far fa-trash-alt"></i>
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
                                {{ $equipement->links('vendor.pagination.custom') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
