@extends('layouts.contentLayoutMaster')

@section('title', 'Edit Customer Group')

@section('page-style')
    <link rel="stylesheet" href="{{ asset('css/base/pages/page-create-bulk.css') }}">
@endsection

@section('content')
    <section id="basic-horizontal-layouts">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">Edit Customer Group</h4>
                    </div>

                    {!! Form::model($customerGroup, ['route' => ['backend.customerGroups.update', $customerGroup->id], 'method' => 'patch', 'files'=>'true']) !!}

                    <div class="card-body">
                        <div class="mb-1">
                            @include('adminlte-templates::common.errors')
                        </div>
                        <div class="row">
                            <div class="form-section">
                                <div class="download-section col-md-6">
                                    <div class="icon-section">
                                        <svg width="24" height="24" viewBox="0 0 28 28" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_1307_1382)">
                                                <path
                                                    d="M14 0C11.2311 0 8.52431 0.821086 6.22202 2.35943C3.91973 3.89777 2.12532 6.08427 1.06569 8.64243C0.006066 11.2006 -0.271181 14.0155 0.269012 16.7313C0.809206 19.447 2.14258 21.9416 4.10051 23.8995C6.05845 25.8574 8.55301 27.1908 11.2687 27.731C13.9845 28.2712 16.7994 27.9939 19.3576 26.9343C21.9157 25.8747 24.1022 24.0803 25.6406 21.778C27.1789 19.4757 28 16.7689 28 14C27.996 10.2882 26.5197 6.72958 23.8951 4.10494C21.2704 1.4803 17.7118 0.00401459 14 0V0ZM14 25.6667C11.6926 25.6667 9.43693 24.9824 7.51835 23.7005C5.59978 22.4185 4.10443 20.5964 3.22141 18.4646C2.33839 16.3328 2.10735 13.9871 2.55751 11.7239C3.00767 9.46083 4.11881 7.38203 5.75043 5.75042C7.38204 4.11881 9.46084 3.00767 11.724 2.55751C13.9871 2.10734 16.3328 2.33838 18.4646 3.22141C20.5965 4.10443 22.4185 5.59977 23.7005 7.51835C24.9824 9.43692 25.6667 11.6926 25.6667 14C25.6633 17.0931 24.433 20.0586 22.2458 22.2458C20.0586 24.433 17.0932 25.6633 14 25.6667V25.6667Z"
                                                    fill="#00AC4D"/>
                                                <path
                                                    d="M13.9987 5.83203C13.6893 5.83203 13.3925 5.95495 13.1737 6.17374C12.9549 6.39253 12.832 6.68928 12.832 6.9987V16.332C12.832 16.6415 12.9549 16.9382 13.1737 17.157C13.3925 17.3758 13.6893 17.4987 13.9987 17.4987C14.3081 17.4987 14.6049 17.3758 14.8237 17.157C15.0424 16.9382 15.1654 16.6415 15.1654 16.332V6.9987C15.1654 6.68928 15.0424 6.39253 14.8237 6.17374C14.6049 5.95495 14.3081 5.83203 13.9987 5.83203Z"
                                                    fill="#00AC4D"/>
                                                <path
                                                    d="M15.1654 20.9987C15.1654 20.3544 14.643 19.832 13.9987 19.832C13.3544 19.832 12.832 20.3544 12.832 20.9987C12.832 21.643 13.3544 22.1654 13.9987 22.1654C14.643 22.1654 15.1654 21.643 15.1654 20.9987Z"
                                                    fill="#00AC4D"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1307_1382">
                                                    <rect width="28" height="28" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="sample-file-text">
                                    <span>
                                    Before uploading the file please
                                      <a href="{{ url('/download/sample_customer_list.xlsx') }}">
                                       Download Sample File.
                                      </a>
                                    Here you can find a sample file for your guideline.
                                    </span>
                                    </div>
                                </div>
                                <div class="form-input-section col-md-4">
                                    @include('backend.customer_groups.fields')
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                        <a href="{{ route('backend.customerGroups.index') }}"
                           class="btn btn-outline-secondary waves-effect">Cancel</a>
                    </div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </section>
@endsection
