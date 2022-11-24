@extends('layouts.admin')
@section('content')
    <div class="container">
        {{--  <h3 class="h3 mx-auto"></h3>--}}
        <table class="table table-dark" id="doctors">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Image</th>
                <th scope="col">IDCard</th>
                <th scope="col">Job</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>

        <div>
            <button class="btn btn-primary" id="acs">Send Data</button>
        </div>

    </div>
@endsection
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(function() {
            console.log('ahmed');
            $('#doctors').DataTable({
                processing: true,
                serverSide: true,
                pagingType: 'full_numbers',
                paging: true,
                pagingTypeSince: 'numbers',
                order: [
                    [0, 'desc']
                ],
                ajax : "{{Route('get.waiting.doctors.to.admin')}}",
                columns: [{
                    data : 'name',
                    name : 'name',
                },{
                    data : 'email',
                    name : 'email',
                },
                    {
                    data : 'phone_number',
                    name : 'phone_number',
                },{
                    data : 'image',
                    name : 'image',
                },
                    {
                        data : 'id_national_card',
                        name : 'id_national_card',
                    },{
                        data : 'id_job_card',
                        name : 'id_job_card',
                    },{
                        data : 'action',
                        name : 'action',
                    }

                ],
            });
        });

    </script>
@endpush
