@extends('topbar')
@section('admin')
<!-- DataTables CSS -->
<link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<!-- DataTables Responsive CSS -->
<link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/dataTables.responsive.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
<style>
</style>
<body>
    <h1>helloWord!</h1>
    div.absensi 
</body>
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- DataTables JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<!-- DataTables Responsive JS -->
<script src="//cdn.datatables.net/1.11.5/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Inisialisasi DataTables -->
<script>
    $(document).ready( function () {
        $('#myTable').DataTable({
            responsive: true,
            autoWidth: false
        });
    });
</script>