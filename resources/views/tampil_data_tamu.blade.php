<link rel="stylesheet" href="{{ asset('assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}">
<link rel="stylesheet" href="{{ asset('assets/extra-libs/datatables.net-bs4/css/responsive.dataTables.min.css') }}">
<div class="table-responsive">
    <table id="zero_config" class="table border table-striped table-bordered text-nowrap">
        <thead>
            <tr>
                <th>Antrian</th>
                <th>Nama</th>
                <th>Perihal</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $data = \DB::SELECT("SELECT * FROM tamu"); 
            ?>
            @foreach($data as $item)
           <tr>
                <td>{{ $item->no_antrian }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->perihal }}</td>
           </tr>
            @endforeach
        </tbody>
    </table>
   
</div>
<script src="{{ asset('assets/extra-libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/extra-libs/datatables.net-bs4/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('dist/js/pages/datatable/datatable-basic.init.js') }}"></script>