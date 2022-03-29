@extends('layouts.appMaster')

@section('title', 'Agents List')

@section('page-style')
    <link rel="stylesheet" href="{{ asset('vendors/css/tables/datatable/datatables.min.css') }}">
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
                                <a class="btn btn-primary" onClick="add()" href="javascript:void(0)">Add Agent</a>
                            </li>
                        </ul>
                    </div>
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
                                        <th>Phone Number</th>
                                        <th>Meta Data</th>
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
                                    <h4 class="card-title">Individual</h4>
                                    <h6 class="card-text">Add Individual Contact</h6>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-6 modal-card-item modal-card-item-right" id="file-input-card">
                                <div class="d-flex flex-column">
                                    <span class="modal-card-icon">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M23.9989 10.1128C23.7728 10.0483 23.5664 9.92826 23.3985 9.76365C23.2306 9.59904 23.1066 9.39506 23.0376 9.17027C22.6548 7.87283 22.0128 6.66653 21.1503 5.62439C20.2879 4.58224 19.223 3.72591 18.02 3.10722C16.8171 2.48852 15.5011 2.12033 14.1517 2.02491C12.8024 1.92949 11.4477 2.10883 10.1696 2.55209C8.89156 2.99534 7.71672 3.69329 6.7162 4.6037C5.71568 5.51411 4.91027 6.61805 4.34872 7.84871C3.78716 9.07938 3.48113 10.4112 3.44914 11.7636C3.41715 13.1159 3.65988 14.4607 4.16262 15.7166C4.27812 15.9808 4.30298 16.2759 4.23335 16.5558C4.16372 16.8357 4.00349 17.0847 3.77762 17.2641C2.78228 18.0028 2.00518 18.9969 1.52856 20.1411C1.05194 21.2854 0.893541 22.5372 1.07012 23.764C1.34569 25.4227 2.20678 26.9275 3.4971 28.0054C4.78742 29.0834 6.42145 29.663 8.10262 29.6391H14.7489C15.0804 29.6391 15.3983 29.5074 15.6328 29.2729C15.8672 29.0385 15.9989 28.7206 15.9989 28.3891C15.9989 28.0575 15.8672 27.7396 15.6328 27.5052C15.3983 27.2707 15.0804 27.1391 14.7489 27.1391H8.10262C7.02297 27.1653 5.96966 26.8038 5.13357 26.1202C4.29749 25.4366 3.73396 24.4761 3.54512 23.4128C3.42537 22.6312 3.52242 21.8318 3.82571 21.1015C4.129 20.3713 4.62689 19.7383 5.26512 19.2716C5.93552 18.7705 6.42048 18.0609 6.64379 17.2543C6.86711 16.4477 6.81613 15.5898 6.49887 14.8153C5.87156 13.1587 5.83931 11.3356 6.40762 9.65777C6.86162 8.34349 7.6746 7.18262 8.75448 6.30665C9.83435 5.43069 11.138 4.87465 12.5176 4.70152C12.8376 4.66032 13.16 4.63944 13.4826 4.63902C15.0989 4.63369 16.6735 5.15206 17.9706 6.11651C19.2676 7.08096 20.2174 8.43961 20.6776 9.98902C20.8573 10.5795 21.181 11.116 21.6196 11.5502C22.0582 11.9845 22.5979 12.3028 23.1901 12.4766C24.6395 12.9052 25.9233 13.7664 26.8697 14.9448C27.8162 16.1233 28.38 17.5627 28.4858 19.0704C28.5916 20.5781 28.2342 22.0822 27.4616 23.3812C26.689 24.6802 25.5379 25.7122 24.1626 26.339C23.9591 26.4433 23.7889 26.6026 23.6716 26.7989C23.5542 26.9951 23.4944 27.2204 23.4989 27.449C23.4964 27.6559 23.546 27.86 23.643 28.0427C23.74 28.2254 23.8814 28.3808 24.0541 28.4947C24.2268 28.6085 24.4253 28.6772 24.6314 28.6943C24.8376 28.7115 25.0447 28.6766 25.2339 28.5928C30.4014 26.1091 33.2089 19.5753 28.8339 13.2628C27.6292 11.6914 25.923 10.5798 23.9989 10.1128Z"
                                                fill="#8F9ABC"/>
                                           <path
                                               d="M24.384 21.7698C24.6183 21.5354 24.75 21.2175 24.75 20.8861C24.75 20.5546 24.6183 20.2367 24.384 20.0023L22.4015 18.0198C21.6983 17.3168 20.7446 16.9219 19.7503 16.9219C18.7559 16.9219 17.8022 17.3168 17.099 18.0198L15.1165 20.0023C14.8888 20.2381 14.7628 20.5538 14.7657 20.8816C14.7685 21.2093 14.9 21.5228 15.1317 21.7546C15.3635 21.9863 15.677 22.1178 16.0048 22.1206C16.3325 22.1235 16.6483 21.9975 16.884 21.7698L18.5003 20.1536V29.6361C18.5003 29.9676 18.632 30.2855 18.8664 30.5199C19.1008 30.7544 19.4187 30.8861 19.7503 30.8861C20.0818 30.8861 20.3997 30.7544 20.6341 30.5199C20.8686 30.2855 21.0003 29.9676 21.0003 29.6361V20.1536L22.6165 21.7698C22.8509 22.0041 23.1688 22.1358 23.5003 22.1358C23.8317 22.1358 24.1496 22.0041 24.384 21.7698Z"
                                               fill="#8F9ABC"/>
                                        </svg>
                                    </span>
                                    <h4 class="card-title">Import File</h4>
                                    <h6 class="card-text">Import file with contacts (csv,xlsx)</h6>
                                </div>
                            </div>
                        </div>
                        <div class="input-section" id="simple-contact-section">
                            <div class="alert alert-danger" style="display:none"></div>
                            <form action="javascript:void(0)" id="simple-agent-form"
                                  name="simple-agent-form" class="form-horizontal"
                                  method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-6 col-12">
                                        <fieldset class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name" name="name">
                                        </fieldset>
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <fieldset class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email">
                                        </fieldset>
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <fieldset class="form-group">
                                            <label for="phone_no">Phone No.</label>
                                            <input type="text" class="form-control" id="phone_no" name="phone_no">
                                        </fieldset>
                                        <span class="text-danger">{{ $errors->first('phone_no') }}</span>
                                    </div>
                                </div>
                                <div class="modal-footer d-flex align-items-center" style="justify-content: center">
                                    <button type="submit" class="btn btn-primary button" id="btn-save">Save</button>
                                </div>
                            </form>
                        </div>

                        {{--                        file-input--}}
                        <div class="file-input-section" id="file-input-section">
                            <div class="col-md-5 col-sm-6 d-flex flex-column file-download-section">
                                <a class="btn  download-button"
                                   href="{{ url('/download/sample_agent.xlsx') }}">
                                    Download Sample File
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-download">
                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                        <polyline points="7 10 12 15 17 10"></polyline>
                                        <line x1="12" y1="15" x2="12" y2="3"></line>
                                    </svg>
                                </a>
                                <span class="mt-2 sample-file-text">
                                        Before uploading file please maintain the right format. Here you can find a sample file for your guideline.
                                    </span>
                            </div>
                            <div class="col-md-5 col-sm-6 file-upload-section">
                                <div class="alert alert-danger"  id="file-error" style="display:none"></div>
                                <form method="POST" enctype="multipart/form-data"
                                      id="file-upload-form"
                                      name="file-upload-form"
                                      action="javascript:void(0)">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="file-input-item form-group">
                                                <input type="file" name="agent_list" placeholder="Choose File"
                                                       id="agent_list">
                                                <span class="text-danger">{{ $errors->first('agent_list') }}</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center my-1 col-md-12">
                                            <button type="submit" class="btn btn-primary submit-button">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            {{--                            <form class="dropzone form-file-upload"--}}
                            {{--                                  action="{{ url('survey/telephonic/store-agents') }}"--}}
                            {{--                                  id="company-form"--}}
                            {{--                                  name="company-form"--}}
                            {{--                                  method="POST"--}}
                            {{--                                  enctype="multipart/form-data">--}}
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal --}}
@endsection

@section('page-script')
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
    <script src="{{ asset('vendors/js/extensions/dropzone.min.js') }}"></script>

    {{--    <script>--}}
    {{--        Dropzone.autoDiscover = false;--}}
    {{--        var myDropzone = new Dropzone(".dropzone", {--}}
    {{--            maxFilesize: 2, // 2 mb--}}
    {{--            acceptedFiles: ".xlsx, .xlx",--}}
    {{--        });--}}
    {{--        myDropzone.on("sending", function (file, xhr, formData) {--}}
    {{--            // console.log("came inside sending")--}}
    {{--            formData.append("_token", "{{ csrf_token() }}");--}}
    {{--        });--}}
    {{--        myDropzone.on("success", function (file, response) {--}}
    {{--            // console.log("came inside success");--}}
    {{--            if (response.success == 0) { // Error--}}
    {{--                alert(response.error);--}}
    {{--            }--}}

    {{--        });--}}
    {{--    </script>--}}
    <script type="text/javascript">
        $(document).ready(function () {
            $("#file-input-section").hide();
            $('#simple-contact-card').addClass('selected-card');
            $("#file-input-card").click(function () {
                $("#file-input-section").show();
                $("#simple-contact-section").hide();
                $('#file-input-card').addClass('selected-card');
                $('#simple-contact-card').removeClass('selected-card');
            });
            $("#simple-contact-card").click(function () {
                $("#simple-contact-section").show();
                $("#file-input-section").hide();
                $('#simple-contact-card').addClass('selected-card');
                $('#file-input-card').removeClass('selected-card');
            });
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#ajax-crud-datatable').DataTable({
                processing: false,
                serverSide: true,
                ajax: "{{ url('survey/telephonic/agents') }}",
                type: 'GET',
                columns: [
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'phone_number', name: 'phone_no'},
                    {data: 'meta_data', name: 'meta_data'},
                    {data: 'action', name: 'action', orderable: false},
                ],
                order: [[0, 'desc']]
            });

        });

        function add() {
            $('#simple-agent-form').trigger("reset");
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

        $('#simple-agent-form').submit(function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: "{{ url('survey/telephonic/store-agents')}}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function (result) {
                    if (result.errors) {
                        jQuery('.alert-danger').html('');

                        jQuery.each(result.errors, function (key, value) {
                            jQuery('.alert-danger').show();
                            jQuery('.alert-danger').append('<li>' + value + '</li>');
                        });
                    } else {
                        jQuery('.alert-danger').hide();
                        $('#company-modal').modal('hide');
                        var oTable = $('#ajax-crud-datatable').dataTable();
                        oTable.fnDraw(false);
                        $("#btn-save").html('Submit');
                        $("#btn-save").attr("disabled", false);
                    }
                }
            });
        });

        $('#file-upload-form').submit(function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: "{{ url('survey/telephonic/store-agents')}}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function (result) {
                    if (result.errors) {
                        jQuery('#file-error').html('');
                        jQuery.each(result.errors, function (key, value) {
                            jQuery('#file-error').show();
                            jQuery('#file-error').append('<li>' + value + '</li>');
                        });
                    } else {
                        jQuery('#file-error').hide();
                        $('#company-modal').modal('hide');
                        var oTable = $('#ajax-crud-datatable').dataTable();
                        oTable.fnDraw(false);
                        $("#btn-save").html('Submit');
                        $("#btn-save").attr("disabled", false);
                    }
                }
            });
        });
    </script>
@endsection
