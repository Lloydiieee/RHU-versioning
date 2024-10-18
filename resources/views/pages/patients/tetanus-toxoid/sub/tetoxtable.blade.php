<div class="py-12 pt-4">
    <table class="datatable-init table table-hover">
        <thead>
            <tr>
                <th width="20">#</th>
                <th>TT1</th>
                <th>TT2</th>
                <th>TT3</th>
                <th>TT4</th>
                <th>TT5</th>
                <th>FIM</th>
                <th width="100" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($info as $data)
                <tr style="cursor: pointer">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->tt_tt1 }} </td>
                    <td>{{ $data->tt_tt2 }} </td>
                    <td>{{ $data->tt_tt3 }} </td>
                    <td>{{ $data->tt_tt4 }} </td>
                    <td>{{ $data->tt_tt5 }} </td>
                    <td>{{ $data->tt_fim }} </td>
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

