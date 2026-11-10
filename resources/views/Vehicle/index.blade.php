<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js">
    </script>
</head>

<body>

    <h1>Vehicles</h1>

    <button type="button" class="btn-solid theme-primary" data-bs-toggle="dialog" data-bs-target="#scrollableBodyDialog">
        Agregar Vehículo
    </button>

    <dialog class="dialog dialog-scrollable" id="scrollableBodyDialog">

        <div class="dialog-header">
            <h1 class="dialog-title">Información del Vehículo</h1>
            <button type="button" class="btn-close" data-bs-dismiss="dialog" aria-label="Close"></button>
        </div>

        <form method="POST" action="{{ route('vehicles.store') }}">
            @csrf

            <div class="dialog-body">

                <div class="form-field">
                    <label for="fieldText" class="form-label">plate_number</label>
                    <input type="text" class="form-control" name="plate_number" id="fieldText">

                </div>

                <div class="form-field">
                    <label for="fieldText" class="form-label">brand</label>
                    <input type="text" class="form-control" name="brand" id="fieldText">

                </div>

                <div class="form-field">
                    <label for="fieldText" class="form-label">model</label>
                    <input type="text" class="form-control" name="model" id="fieldText">

                </div>

                <div class="form-field">
                    <label for="fieldText" class="form-label">vehicle_type</label>
                    <input type="text" class="form-control" name="vehicle_type" id="fieldText">

                </div>

                <div class="form-field">
                    <label for="fieldText" class="form-label">color</label>
                    <input type="text" class="form-control" name="color" id="fieldText">

                </div>

                <div class="form-field">
                    <label for="fieldText" class="form-label">capacity</label>
                    <input type="text" class="form-control" name="capacity" id="fieldText">

                </div>

                <div class="form-field">
                    <label for="fieldText" class="form-label">daily_rate</label>
                    <input type="text" class="form-control" name="daily_rate" id="fieldText">

                </div>

                <div class="form-field">
                    <label for="fieldText" class="form-label">status</label>
                    <input type="text" class="form-control" name="status" id="fieldText">

                </div>


            </div>

            <div class="dialog-footer">
                <button type="button" class="btn-solid theme-secondary" data-bs-dismiss="dialog">Close</button>
                <button type="submit" class="btn-solid theme-primary">Save changes</button>
            </div>

        </form>

    </dialog>







    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">plate_number</th>
                <th scope="col">brand</th>
                <th scope="col">model</th>
                <th scope="col">vehicle_type</th>
                <th scope="col">color</th>
                <th scope="col">capacity</th>
                <th scope="col">daily_rate</th>
                <th scope="col">status</th>
                <th scope="col">Editar</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($vehicles as $vehicle)
                <tr>
                    <th scope="row">{{ $vehicle->id }}</th>
                    <td>{{ $vehicle->plate_number }}</td>
                    <td>{{ $vehicle->brand }}</td>
                    <td>{{ $vehicle->model }}</td>
                    <td>{{ $vehicle->vehicle_type }}</td>
                    <td>{{ $vehicle->color }}</td>
                    <td>{{ $vehicle->capacity }}</td>
                    <td>{{ $vehicle->daily_rate }}</td>
                    <td>{{ $vehicle->status }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">

                            <button type="button" class="btn-solid theme-primary" data-bs-toggle="dialog"
                                data-bs-target="#scrollableBodyDialog">
                                Editar
                            </button>

                            <dialog class="dialog dialog-scrollable" id="scrollableBodyDialog">

                                <div class="dialog-header">
                                    <h1 class="dialog-title">Información del Vehículo</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="dialog"
                                        aria-label="Close"></button>
                                </div>

                                <form method="POST" action="{{ route('vehicles.update', $vehicle->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="dialog-body">

                                        <div class="form-field">
                                            <label for="fieldText" class="form-label">plate_number</label>
                                            <input type="text" class="form-control" name="plate_number"
                                                id="fieldText">

                                        </div>

                                        <div class="form-field">
                                            <label for="fieldText" class="form-label">brand</label>
                                            <input type="text" class="form-control" name="brand"
                                                id="fieldText">

                                        </div>

                                        <div class="form-field">
                                            <label for="fieldText" class="form-label">model</label>
                                            <input type="text" class="form-control" name="model"
                                                id="fieldText">

                                        </div>

                                        <div class="form-field">
                                            <label for="fieldText" class="form-label">vehicle_type</label>
                                            <input type="text" class="form-control" name="vehicle_type"
                                                id="fieldText">

                                        </div>

                                        <div class="form-field">
                                            <label for="fieldText" class="form-label">color</label>
                                            <input type="text" class="form-control" name="color"
                                                id="fieldText">

                                        </div>

                                        <div class="form-field">
                                            <label for="fieldText" class="form-label">capacity</label>
                                            <input type="text" class="form-control" name="capacity"
                                                id="fieldText">

                                        </div>

                                        <div class="form-field">
                                            <label for="fieldText" class="form-label">daily_rate</label>
                                            <input type="text" class="form-control" name="daily_rate"
                                                id="fieldText">

                                        </div>

                                        <div class="form-field">
                                            <label for="fieldText" class="form-label">status</label>
                                            <input type="text" class="form-control" name="status"
                                                id="fieldText">

                                        </div>


                                    </div>

                                    <div class="dialog-footer">
                                        <button type="button" class="btn-solid theme-secondary"
                                            data-bs-dismiss="dialog">Close</button>
                                        <button type="submit" class="btn-solid theme-primary">Save changes</button>
                                    </div>

                            </dialog>

                            </form>

                            <form method="POST" action="{{ route('vehicles.destroy', $vehicle->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-solid theme-primary">Eliminar</button>
                            </form>
                        </div>
                    </td>
                </tr>

        </tbody>
    @empty
        <p>No hay vehículos disponibles.</p>
        @endforelse
    </table>

</body>

</html>
