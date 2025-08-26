<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inventory Details') }}</div>

                <div class="card-body">
                    <h5>Name: {{ $inventory->name }}</h5>
                    <p>Quantity: {{ $inventory->quantity }}</p>
                    <p>Price: {{ $inventory->price }}</p>
                    <p>Serial No: {{ $inventory->serial_no }}</p>
                </div>
                <td><a href="{{ route('inventories.create') }}" class="btn btn-info btn-sm">Kembali</a></td>
            </div>
        </div>
    </div>
</div>
