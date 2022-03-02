@extends('layouts.appMaster')

@section('title', 'Agents List')

@section('page-style')
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/file-uploaders/dropzone.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/tables/datatable/datatables.min.css') }}">
    {{--    <link rel="stylesheet" href="{{ asset('vendors/css/forms/select/select2.min.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('css/base/pages/page-agents-list.css') }}">
@endsection

@section('content')
    <section id="column-search-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">Agent List</h4>
                        <ul class="list-inline m-0 d-none d-sm-none d-md-none d-lg-block">
                            <li><a class="btn btn-outline-dark mx-1" href="{{ url('/survey/telephonic/assign') }}">Assign
                                    Survey</a>
                            </li>
                            <li>
                                {{--                                <a class="btn btn-primary" data-toggle="modal" data-target="#yourModal">Add Agent</a>--}}
                                <a class="btn btn-primary" onClick="add()" href="javascript:void(0)">Add Agent</a>
                            </li>
                        </ul>
                    </div>
                    {{--                    <div class="d-flex ">--}}
                    {{--                        <div class="col-md-4 p-2">--}}
                    {{--                            <fieldset class="form-group">--}}
                    {{--                                <label for="survey">Select Survey</label>--}}
                    {{--                                <select class="form-control" id="survey">--}}
                    {{--                                    <option>All</option>--}}
                    {{--                                    <option>Survey Status</option>--}}
                    {{--                                    <option>Phone Number</option>--}}
                    {{--                                    <option>Department</option>--}}
                    {{--                                </select>--}}
                    {{--                            </fieldset>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="row d-lg-none d-xl-none mr-0 ml-0">
                            <a class="col-md-12 btn btn-block btn-outline-dark my-1"
                               href="{{ url('/survey/telephonic/assign') }}">Assign Survey</a>
                            <a class="col-md-12 btn btn-block btn-primary mb-1"
                               onClick="add()" href="javascript:void(0)">Add Agent</a>
                        </div>
                        <div class="row p-1 bg-light mx-0 my-1">
                            <div class="col-lg-4">
                                <fieldset class="form-group">
                                    <select class="form-control" id="survey">
                                        <option>All</option>
                                        <option>Survey Status</option>
                                        <option>Phone Number</option>
                                        <option>Department</option>
                                    </select>
                                </fieldset>
                            </div>
                        </div>
                        <div class="card-datatable">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="ajax-crud-datatable">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <div class="modal fade modal-agent" id="company-modal" aria-hidden="true" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Add Agent</h4>
                    <button type="button" class="close" data-dismiss="modal"
                            aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="d-flex flex-column">
                        <div class="d-flex modal-card justify-content-center">
                            <div class="col-md-5 col-sm-6 modal-card-item" id="simple-contact-card">
                                <div class="d-flex flex-column">
                                    <span class="modal-card-icon">
                                        <svg width="22" height="28" viewBox="0 0 22 28" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                                               <path
                                                                   d="M19.7908 3.64236L17.8588 1.70802C17.3183 1.16472 16.6753 0.734018 15.9672 0.440841C15.2591 0.147664 14.4999 -0.00216532 13.7335 2.3643e-05H6.33333C4.7868 0.00187614 3.30415 0.617052 2.21059 1.71061C1.11703 2.80417 0.501853 4.28683 0.5 5.83336V22.1667C0.501853 23.7132 1.11703 25.1959 2.21059 26.2894C3.30415 27.383 4.7868 27.9982 6.33333 28H15.6667C17.2132 27.9982 18.6958 27.383 19.7894 26.2894C20.883 25.1959 21.4981 23.7132 21.5 22.1667V7.76652C21.5019 7.00024 21.3518 6.24118 21.0584 5.53328C20.765 4.82538 20.3342 4.18267 19.7908 3.64236ZM18.1412 5.29202C18.3066 5.4569 18.4548 5.63829 18.5833 5.83336H15.6667V2.91669C15.8614 3.04656 16.0431 3.19504 16.2092 3.36002L18.1412 5.29202ZM19.1667 22.1667C19.1667 23.0949 18.7979 23.9852 18.1415 24.6416C17.4852 25.2979 16.5949 25.6667 15.6667 25.6667H6.33333C5.40507 25.6667 4.51484 25.2979 3.85846 24.6416C3.20208 23.9852 2.83333 23.0949 2.83333 22.1667V5.83336C2.83333 4.9051 3.20208 4.01486 3.85846 3.35848C4.51484 2.70211 5.40507 2.33336 6.33333 2.33336H13.3333V5.83336C13.3333 6.45219 13.5792 7.04569 14.0167 7.48327C14.4543 7.92086 15.0478 8.16669 15.6667 8.16669H19.1667V22.1667ZM15.6667 10.5C15.9761 10.5 16.2728 10.6229 16.4916 10.8417C16.7104 11.0605 16.8333 11.3573 16.8333 11.6667C16.8333 11.9761 16.7104 12.2729 16.4916 12.4916C16.2728 12.7104 15.9761 12.8334 15.6667 12.8334H6.33333C6.02391 12.8334 5.72717 12.7104 5.50837 12.4916C5.28958 12.2729 5.16667 11.9761 5.16667 11.6667C5.16667 11.3573 5.28958 11.0605 5.50837 10.8417C5.72717 10.6229 6.02391 10.5 6.33333 10.5H15.6667ZM16.8333 16.3334C16.8333 16.6428 16.7104 16.9395 16.4916 17.1583C16.2728 17.3771 15.9761 17.5 15.6667 17.5H6.33333C6.02391 17.5 5.72717 17.3771 5.50837 17.1583C5.28958 16.9395 5.16667 16.6428 5.16667 16.3334C5.16667 16.0239 5.28958 15.7272 5.50837 15.5084C5.72717 15.2896 6.02391 15.1667 6.33333 15.1667H15.6667C15.9761 15.1667 16.2728 15.2896 16.4916 15.5084C16.7104 15.7272 16.8333 16.0239 16.8333 16.3334ZM16.6093 20.3152C16.7907 20.5647 16.8659 20.8758 16.8184 21.1806C16.771 21.4854 16.6048 21.759 16.3562 21.9415C15.1741 22.7838 13.7741 23.2671 12.3242 23.3334C11.477 23.3293 10.6556 23.0418 9.99083 22.5167C9.60816 22.2542 9.46233 22.1667 9.17416 22.1667C8.39416 22.2874 7.65822 22.6063 7.03683 23.093C6.79037 23.2687 6.48528 23.3417 6.18597 23.2967C5.88667 23.2517 5.61659 23.092 5.43276 22.8516C5.24894 22.6111 5.16576 22.3086 5.20079 22.008C5.23582 21.7074 5.38631 21.4321 5.6205 21.2404C6.64854 20.4423 7.88299 19.9542 9.17883 19.8334C9.95599 19.8458 10.7073 20.1144 11.3162 20.5975C11.5937 20.8471 11.951 20.9898 12.3242 21C13.2781 20.9286 14.1955 20.6026 14.9807 20.0562C15.231 19.8747 15.5432 19.8 15.8486 19.8486C16.154 19.8972 16.4276 20.065 16.6093 20.3152Z"
                                                                   fill="#8F9ABC"/>
                                        </svg>
                                    </span>
                                    <h4 class="card-title">Simple</h4>
                                    <h6 class="card-text">Add Simple Contact</h6>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-6 modal-card-item modal-card-item-right" id="file-input-card">
                                <div class="d-flex flex-column">
                                    <span class="modal-card-icon">
                                        <svg width="30" height="28" viewBox="0 0 30 28" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                 d="M22.9989 8.2241C22.7728 8.1596 22.5664 8.03959 22.3985 7.87498C22.2306 7.71037 22.1066 7.50639 22.0376 7.2816C21.6548 5.98416 21.0128 4.77786 20.1503 3.73572C19.2879 2.69357 18.223 1.83724 17.02 1.21855C15.8171 0.599853 14.5011 0.231655 13.1517 0.136237C11.8024 0.0408193 10.4477 0.220164 9.16961 0.663419C7.89156 1.10667 6.71673 1.80462 5.7162 2.71503C4.71568 3.62544 3.91027 4.72938 3.34872 5.96004C2.78716 7.19071 2.48113 8.52251 2.44914 9.87487C2.41715 11.2272 2.65988 12.572 3.16262 13.8279C3.27812 14.0921 3.30298 14.3872 3.23335 14.6671C3.16372 14.947 3.00349 15.196 2.77762 15.3754C1.78228 16.1141 1.00518 17.1082 0.52856 18.2524C0.0519421 19.3967 -0.106459 20.6485 0.0701212 21.8753C0.345688 23.534 1.20678 25.0388 2.4971 26.1167C3.78742 27.1947 5.42145 27.7743 7.10262 27.7504H13.7489C14.0804 27.7504 14.3983 27.6187 14.6328 27.3842C14.8672 27.1498 14.9989 26.8319 14.9989 26.5004C14.9989 26.1688 14.8672 25.8509 14.6328 25.6165C14.3983 25.382 14.0804 25.2504 13.7489 25.2504H7.10262C6.02297 25.2766 4.96966 24.9151 4.13357 24.2315C3.29749 23.5479 2.73396 22.5874 2.54512 21.5241C2.42537 20.7425 2.52242 19.9431 2.82571 19.2128C3.129 18.4826 3.62689 17.8496 4.26512 17.3829C4.93552 16.8818 5.42048 16.1722 5.64379 15.3656C5.86711 14.559 5.81613 13.7011 5.49887 12.9266C4.87156 11.27 4.83931 9.44687 5.40762 7.7691C5.86162 6.45482 6.6746 5.29395 7.75448 4.41798C8.83435 3.54202 10.138 2.98598 11.5176 2.81285C11.8376 2.77165 12.16 2.75077 12.4826 2.75035C14.0989 2.74502 15.6735 3.26339 16.9706 4.22784C18.2676 5.19229 19.2174 6.55094 19.6776 8.10035C19.8573 8.69081 20.181 9.22731 20.6196 9.66154C21.0582 10.0958 21.5979 10.4141 22.1901 10.5879C23.6395 11.0165 24.9233 11.8777 25.8697 13.0561C26.8162 14.2346 27.38 15.674 27.4858 17.1817C27.5915 18.6894 27.2342 20.1935 26.4616 21.4925C25.689 22.7915 24.5379 23.8235 23.1626 24.4504C22.9591 24.5546 22.7889 24.7139 22.6716 24.9102C22.5542 25.1064 22.4944 25.3317 22.4989 25.5603V25.5603C22.4964 25.7672 22.546 25.9713 22.643 26.154C22.74 26.3367 22.8814 26.4921 23.0541 26.606C23.2268 26.7198 23.4253 26.7885 23.6314 26.8056C23.8376 26.8228 24.0447 26.7879 24.2339 26.7041C29.4014 24.2204 32.2089 17.6866 27.8339 11.3741C26.6292 9.80275 24.923 8.69112 22.9989 8.2241V8.2241Z"
                                                 fill="#8F9ABC"/>
                                        </svg>
                                    </span>
                                    <h4 class="card-title">Import File</h4>
                                    <h6 class="card-text">Import file with contacts (csv,xlsx)</h6>
                                </div>
                            </div>
                        </div>
                        <div class="input-section" id="simple-contact-section">
                            <form action="javascript:void(0)" id="CompanyForm"
                                  name="CompanyForm" class="form-horizontal"
                                  method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-6 col-12">
                                        <fieldset class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name" name="name">
                                        </fieldset>
                                        {{--                                        {!! Form::label('name', 'Name') !!}--}}
                                        {{--                                        {!! Form::text('name', null, ['class' => 'form-control']) !!}--}}
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <fieldset class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email">
                                        </fieldset>
                                        {{--                                        {!! Form::label('email', 'Email') !!}--}}
                                        {{--                                        {!! Form::email('email', null, ['class' => 'form-control']) !!}--}}
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <fieldset class="form-group">
                                            <label for="phone_no">Phone No.</label>
                                            <input type="text" class="form-control" id="phone_no" name="phone_no">
                                        </fieldset>
                                        {{--                                        {!! Form::label('password', 'Password') !!}--}}
                                        {{--                                        {!! Form::password('password', ['class' => 'form-control']) !!}--}}
                                    </div>
                                    {{--                                    <div class="col-sm-6 col-12">--}}
                                    {{--                                        <fieldset class="form-group">--}}
                                    {{--                                            <label for="confirm_password">Confirm Password</label>--}}
                                    {{--                                            <input type="text" class="form-control">--}}
                                    {{--                                        </fieldset>--}}
                                    {{--                                    </div>--}}
                                </div>
                                <div class="modal-footer d-flex align-items-center" style="justify-content: center">
                                    <button type="submit" class="btn btn-primary button" id="btn-save">Save</button>
                                </div>
                            </form>
                        </div>
                        {{--                        file-input--}}
                        <div class="file-input-section" id="file-input-section">
                            <form method="POST" enctype="multipart/form-data"
                                  id="CompanyForm"
                                  name="CompanyForm"
                                  action="javascript:void(0)">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="file" name="agent_list" placeholder="Choose File"
                                                   id="agent_list">
                                            <span class="text-danger">{{ $errors->first('agent_list') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                            {{--                            <form class="dropzone dropzone-area form-file-upload"--}}
                            {{--                                  action="javascript:void(0)" id="CompanyForm"--}}
                            {{--                                  name="CompanyForm"--}}
                            {{--                                  method="POST" enctype="multipart/form-data"--}}
                            {{--                                @csrf>--}}
                            {{--                                <div class="dz-message d-flex flex-column">--}}
                            {{--                                    <p class="p-1">--}}
                            {{--                                        Drop files here or click to upload.--}}
                            {{--                                    </p>--}}
                            {{--                                    <div class="d-flex justify-content-center">--}}
                            {{--                                        <p class="p-1 upload-file-text" style="color: white;">--}}
                            {{--                                            Upload Files</p>--}}
                            {{--                                    </div>--}}
                            {{--                                    <p class="p-1">File can't be more than 300kb size</p>--}}
                            {{--                                </div>--}}
                            {{--                            </form>--}}
                            {{--                            <div class="modal-footer d-flex align-items-center" style="justify-content: center">--}}
                            {{--                                <button type="submit" class="btn btn-primary button" id="btn-save">Save</button>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- Modal --}}
@endsection

@section('page-script')
    <script src="{{ asset('vendors/js/extensions/dropzone.min.js') }}"></script>

    {{--    <script>--}}
    {{--        $(document).ready(function () {--}}
    {{--            $('#agents-table').DataTable();--}}
    {{--        });--}}
    {{--    </script>--}}
    {{--    @section('vendor-script')--}}

    {{--     vendor files --}}
    <script src="{{ asset('vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
    {{--@endsection--}}

    {{-- Page js files --}}
    <script src="{{ asset('js/scripts/tables/datatable.js') }}"></script>

    <script src="{{ asset('vendors/js/forms/select/select2.full.min.js') }}"></script>
    <script src="{{ asset('js/scripts/forms/form-select2.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#file-input-section").hide();
            $("#file-input-card").click(function () {
                $("#file-input-section").show();
                $("#simple-contact-section").hide();
            });
            $("#simple-contact-card").click(function () {
                $("#simple-contact-section").show();
                $("#file-input-section").hide();
            });

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#ajax-crud-datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('survey/telephonic/store-agents') }}",
                columns: [
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'action', name: 'action', orderable: false},
                ],
                order: [[0, 'desc']]
            });
        });

        function add() {
            $('#CompanyForm').trigger("reset");
            // $('#CompanyModal').html("Add Company");
            $('#company-modal').modal('show');
            $('#id').val('');
        }

        {{--function editFunc(id) {--}}
        {{--    $.ajax({--}}
        {{--        type: "POST",--}}
        {{--        url: "{{ url('edit-company') }}",--}}
        {{--        data: {id: id},--}}
        {{--        dataType: 'json',--}}
        {{--        success: function (res) {--}}
        {{--            $('#CompanyModal').html("Edit Company");--}}
        {{--            $('#company-modal').modal('show');--}}
        {{--            $('#id').val(res.id);--}}
        {{--            $('#name').val(res.name);--}}
        {{--            $('#address').val(res.address);--}}
        {{--            $('#email').val(res.email);--}}
        {{--        }--}}
        {{--    });--}}
        {{--}--}}

        {{--        function deleteFunc(id) {--}}
        {{--            if (confirm("Delete Record?") == true) {--}}
        {{--                var id = id;--}}
        {{--// ajax--}}
        {{--                $.ajax({--}}
        {{--                    type: "POST",--}}
        {{--                    url: "{{ url('delete-company') }}",--}}
        {{--                    data: {id: id},--}}
        {{--                    dataType: 'json',--}}
        {{--                    success: function (res) {--}}
        {{--                        var oTable = $('#ajax-crud-datatable').dataTable();--}}
        {{--                        oTable.fnDraw(false);--}}
        {{--                    }--}}
        {{--                });--}}
        {{--            }--}}
        {{--        }--}}

        $('#CompanyForm').submit(function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: "{{ url('survey/telephonic/store-agents')}}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: (data) => {
                    $("#company-modal").modal('hide');
                    var oTable = $('#ajax-crud-datatable').dataTable();
                    oTable.fnDraw(false);
                    $("#btn-save").html('Submit');
                    $("#btn-save").attr("disabled", false);
                },
                error: function (data) {
                    console.log(data);
                }
            });
        });
    </script>
@endsection
