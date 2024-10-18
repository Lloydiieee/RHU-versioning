<div class="py-12 pt-4">
    <table class="datatable-init table table-hover">
        <thead>
            <tr>
                <th width="20">#</th>
                <th>Age</th>
                <th>Multiparity</th>
                <th>Previous C/S</th>
                <th>Consecutive Miscarriages</th>
                <th>Stillbirth</th>
                <th>Malnourished</th>
                <th>Co-Morbidity</th>
                <th>Postpartum Hemorrhage</th>
                <th>Menarchy</th>
                <th>Menstrual Flow Duration</th>
                <th>Pads Per Day</th>
                <th width="100" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($info as $data)
                <tr style="cursor: pointer">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->r_age }} </td>
                    <td>{{ $data->r_multiparity }} </td>
                    <td>{{ $data->r_previous_cs }} </td>
                    <td>{{ $data->r_consecutive_miscarriages }} </td>
                    <td>{{ $data->r_stillbirth }} </td>
                    <td>{{ $data->r_malnourished }} </td>
                    <td>{{ $data->r_co_morbidity }} </td>
                    <td>{{ $data->r_postpartum_hemorrhage }} </td>
                    <td>{{ $data->r_menarchy }} </td>
                    <td>{{ $data->r_menstrual_flow_duration }} </td>
                    <td>{{ $data->r_pads_per_day }} </td>
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
            @endforeach
        </tbody>
    </table>
</div>
