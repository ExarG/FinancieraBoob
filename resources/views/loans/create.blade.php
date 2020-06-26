@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div>
                        <h3 class="mb-0">{{ __('New loan') }}</h3>
                    </div>
                    <div>
                        <a href="{{ route('loans.index') }}" class="btn btn-danger">
                            {{ __('Cancel')}}
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('loans.store') }}" method="POST">
                    @csrf
                    <div class="form-group form-row">
                        <div class="col-md-6">
                            <label for="client">{{ __('Client') }}</label> 
                            <input type="text" name="client" id="client" class="form-control @error('client') is-invalid @enderror">
                            @error('client')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="quantity">{{ __('Quantity') }}</label>
                            <input type="text" name="quantity" id="quantity" class="form-control @error('quantity') is-invalid @enderror">
                            @error('quantity')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group form-row">
                        <div class="col-md-3">
                            <label for="pays">{{ __('Pay') }}</label>
                            <input type="text" name="pays" id="pays" class="form-control @error('pays') is-invalid @enderror">
                            @error('pays')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-3">
                            <label for="share">{{ __('Share') }}</label>
                            <input type="text" name="share" id="share" class="form-control @error('share') is-invalid @enderror">
                            @error('share')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                            @enderror
                            </div>
                            <div class="col-md-6">
                            <label for="total_to_pay">{{ __('total_to_pay') }}</label>
                            <input type="text" name="total_to_pay" id="total_to_pay" class="form-control @error('total_to_pay') is-invalid @enderror">
                            @error('total_to_pay')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    </div>
                    <div class="form-group form-row">
                        <div class="col-md-5">
                            <label for="date_mini">{{ __('date_mini') }}</label>
                            <input type="text" name="date_mini" id="date_mini" class="form-control @error('date_mini') is-invalid @enderror">
                            @error('date_mini')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-5">
                            <label for="date_expiration">{{ __('date_expiration') }}</label>
                            <input type="text" name="date_expiration" id="date_expiration" class="form-control @error('date_expiration') is-invalid @enderror">
                            @error('date_expiration')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-lg">{{ __('Create') }}</button>
                    </div>
                    </div>
                    
                    
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

