<div class="py-12 pt-4">
    <table class="datatable-init table table-hover">
        <thead>
            <tr>
                <th width="20">#</th>
                <th>Year of Delivery</th>
                <th>Type of Delivery</th>
                <th>Place of Delivery</th>
                <th>Birth Attendant</th>
                <th>Complications</th>
                <th>Outcome of Pregnancy</th>
                <th width="100" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($info as $data)
                <tr style="cursor: pointer">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->obs_year_of_delivery }} </td>
                    <td>{{ $data->obs_type_of_delivery }} </td>
                    <td>{{ $data->obs_place_of_delivery }} </td>
                    <td>{{ $data->obs_birth_attendant }} </td>
                    <td>{{ $data->obs_complications }} </td>
                    <td>{{ $data->obs_outcome_of_pregnancy }} </td>
                     <td class="d-flex justify-content-center align-items-center">
                        <!-- Edit Button -->
                        <button class="btn btn-xs btn-lightbg-white text-dark me-3">
                            <em class="icon ni ni-edit"></em>
                        </button>
                        <button type="submit" class="btn btn-xs btn-block btn-danger">
                            <em class="icon ni ni-trash"></em>
                        </button>
                    </td>
                </tr>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
