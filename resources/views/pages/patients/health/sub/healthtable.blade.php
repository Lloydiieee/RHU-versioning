<div class="py-12 pt-4">
    <table class="datatable-init table table-hover">
        <thead>
            <tr>
                <th width="20">#</th>
                <th>Hypertension</th>
                <th>Tuberculosis</th>
                <th>Diabetes</th>
                <th>Bronchial</th>
                <th>Goiter</th>
                <th>Hepatitis</th>
                <th>Smoking</th>
                <th>Alcohol</th>
                <th>Drugs</th>
                <th>Abuse</th>
                <th>Multiple Partners</th>
                <th>Others</th>
                <th width="100" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($info as $data)
                <tr style="cursor: pointer">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->h_hypertension }} </td>
                    <td>{{ $data->h_tuberculosis }} </td>
                    <td>{{ $data->h_diabetes }} </td>
                    <td>{{ $data->h_bronchial }} </td>
                    <td>{{ $data->h_goiter }} </td>
                    <td>{{ $data->h_hepatitis }} </td>
                    <td>{{ $data->h_smoking }} </td>
                    <td>{{ $data->h_alcohol }} </td>
                    <td>{{ $data->h_drugs }} </td>
                    <td>{{ $data->h_abuse }} </td>
                    <td>{{ $data->h_multiple_partners }} </td>
                    <td>{{ $data->h_others }} </td>
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
