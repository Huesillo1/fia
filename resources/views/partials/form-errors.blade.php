@if ($errors->any())
    <div class="min-w-0 mb-4 p-4 text-white bg-purple-600 rounded-lg shadow-xs">
        <div class="alert alert-danger">
            <h4 class="font-semibold mb-4">Verifique los campos del formulario</h4>
            <p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </p>
        </div>
    </div>
@endif