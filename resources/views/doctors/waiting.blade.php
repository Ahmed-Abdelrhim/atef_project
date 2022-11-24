@extends('layouts.admin')
@section('content')
    <div class="container">
        {{--  Error Message  --}}
        @if (Session::has('error'))
            <script>
                swal({
                    text: " {!! Session::get('error') !!}",
                    icon: "error",
                })
            </script>
        @endif
        {{--  Success Message  --}}
        @if (Session::has('success'))
            <script>
                swal({
                    text: " {!! Session::get('success') !!}",
                    icon: "success",
                })
            </script>
        @endif
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
            <button class="btn btn-primary" id="acs" data-toggle="modal" data-target="#myModal">Send Data</button>
        </div>

    </div>





    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary closeModal" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    {{--End Modal --}}



    <!-- Modal -->
{{--    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">--}}
{{--        <div class="modal-header">--}}
{{--            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>--}}
{{--            <h3 id="myModalLabel">Modal header</h3>--}}
{{--        </div>--}}
{{--        <div class="modal-body">--}}
{{--            <p>One fine body…</p>--}}
{{--        </div>--}}
{{--        <div class="modal-footer">--}}
{{--            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>--}}
{{--            <button class="btn btn-primary">Save changes</button>--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(function () {
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
                ajax: "{{Route('get.waiting.doctors.to.admin')}}",
                columns: [{
                    data: 'name',
                    name: 'name',
                }, {
                    data: 'email',
                    name: 'email',
                },
                    {
                        data: 'phone_number',
                        name: 'phone_number',
                    }, {
                        data: 'image',
                        name: 'image',
                    },
                    {
                        data: 'id_national_card',
                        name: 'id_national_card',
                    }, {
                        data: 'id_job_card',
                        name: 'id_job_card',
                    }, {
                        data: 'action',
                        name: 'action',
                    }

                ],
            });

            // $('#acs').modal('show');
            $('#acs').click(function () {
                // alert('sdad');
                // jQuery.noConflict();

                $('#myModal').toggle('show');

            });
            function showModal() {
                $('#myModal').toggle('show');
            }
            $('.closeModal').click(function () {
                jQuery.noConflict();

                $('#myModal').toggle('hidden');
            });

            $('.name').click(function() {
                $('#myModal').toggle('show');

            });
        });

    </script>
@endpush
