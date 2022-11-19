@extends('layouts.admin')
@section('content')
    <div class="container">
        <table class="table table-dark" id="datatable-example">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
@endsection
@push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(function () {
            var table = $('#datatable-example').DataTable({
                processing: true,
                serverSide: true,
                pagingType: 'full_numbers',
                paging: true,
                pagingTypeSince: 'numbers',
                order: [
                    [0, 'desc']
                ],
                ajax: "{{Route('admin.view.all.patients')}}",
                columns: [{
                    data: 'id',
                    name: 'id',
                },
                    {
                        data: 'name',
                        name: 'name',
                    },
                    {
                        data: 'phone_number',
                        name: 'phone_number',
                    },
                    {
                        data: 'address',
                        name: 'address'
                    },
                    {
                        data: 'action',
                        name: 'action'
                    }

                ]
            });
        });
    </script>
@endpush
