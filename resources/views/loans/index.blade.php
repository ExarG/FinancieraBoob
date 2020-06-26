@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-11 mx-auto">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div>
                        <h3 class="mb-0">Prestamos</h3>
                    </div>
                    <div>
                        <a href="{{ route('loans.create') }}" class="btn btn-primary">
                            {{ __('New loan')}}
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover"> 
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">{{ __('Clients') }}</th>
                            <th scope="col">{{ __('Quantity') }}</th>
                            <th scope="col">{{ __('Pays') }}</th>
                            <th scope="col">{{ __('Share') }}</th>
                            <th scope="col">{{ __('total_to_pay') }}</th>
                            <th scope="col">{{ __('date_mini') }}</th>
                            <th scope="col">{{ __('date_expiration') }}</th>
                            <th scope="col" style="width: 150px">{{ __('Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($loans as $loan)
                        <tr>
                            <td scope="row">{{ $loan->id }}</td>
                            <td>{{ $loan->client }}</td>
                            <td>{{ $loan->quantity }}</td>
                            <td>{{ $loan->pays }}</td>
                            <td>{{ $loan->share }}</td>
                            <td>{{ $loan->total_to_pay }}</td>
                            <td>{{ $loan->date_mini }}</td>
                            <td>{{ $loan->date_expiration }}</td>
                            <td>
                                <a href="" class="btn btn-outline-secondary btn-sm">
                                    Show
                                </a>
                                <button class="btn btn-outline-danger btn-sm btn-delete" data-id="{{ $loan->id }}">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('bottom-js')
<script>
    $('body').on('click', '.btn-delete', function(event) {
        const id = $(this).data('id');
        Swal.fire({
            title: '¿Estás seguro?',
            text: 'No podrás revertir esta acción',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, borralo!'
        })
        .then((result) => {
            if (result.value) {
                axios.delete('{{ route('loans.index') }}/' + id)
                    .then(result => {
                        Swal.fire({
                            title: 'Borrado',
                            text: 'El cliente a sido borrado',
                            icon: 'success'
                        }).then(() => {
                            window.location.href='{{ route('loans.index') }}';
                        });
                    })
                    .catch(error => {
                        Swal.fire(
                            'Ocurrió un error',
                            'El cliente no ha podido borrarse.',
                            'error'
                        );
                    });

            }
        });
    });
</script>
@endsection

