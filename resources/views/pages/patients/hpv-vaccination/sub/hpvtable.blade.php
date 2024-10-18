<div class="py-12 pt-4">
    <table class="datatable-init table table-hover">
        <thead>
            <tr>
                <th width="20">#</th>
                <th>Patient ID</th>
                <th>1st Dose</th>
                <th>2nd Dose</th>
                <th>3rd Dose</th>
                <th>Deworming Date</th>
                <th>LMP</th>
                <th>EDC</th>
                <th>Birthplan</th>
                <th width="100" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($info as $data)
                <tr style="cursor: pointer">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->hpv_patient_id }}</td>
                    <td>{{ $data->hpv_dose_1 }}</td>
                    <td>{{ $data->hpv_dose_2 }}</td>
                    <td>{{ $data->hpv_dose_3 }}</td>
                    <td>{{ $data->hpv_deworming_date }}</td>
                    <td>{{ $data->hpv_lmp }}</td>
                    <td>{{ $data->hpv_edc }}</td>
                    <td>{{ $data->hpv_birthplan }}</td>
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
