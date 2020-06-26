@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div>
                        <h3 class="mb-0">Pagos</h3>
                    </div>
                    <div>
                        <a href="{{ route('pays.create') }}" class="btn btn-primary">
                            {{ __('New Pay')}}
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
                            <th scope="col">{{ __('Payment') }}</th>
                            <th scope="col">{{ __('Quantity') }}</th>
                            <th scope="col" style="width: 150px">{{ __('Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pays as $pay)
                        <tr>
                            <td scope="row">{{ $pay->id }}</td>
                            <td>{{ $pay->client }}</td>
                            <td>{{ $pay->payment }}</td>
                            <td>{{ $pay->quantity }}</td>
                            <td>
                                <a href="" class="btn btn-outline-secondary btn-sm">
                                    Show
                                </a>
                                <button class="btn btn-outline-danger btn-sm btn-delete" data-id="{{ $pay->id }}">Delete</button>
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
                axios.delete('{{ route('pays.index') }}/' + id)
                    .then(result => {
                        Swal.fire({
                            title: 'Borrado',
                            text: 'El cliente a sido borrado',
                            icon: 'success'
                        }).then(() => {
                            window.location.href='{{ route('pays.index') }}';
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

