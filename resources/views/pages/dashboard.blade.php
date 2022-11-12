@extends('layouts.main')

@section('header-title','Dashboard')

@section('content')

<div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">
        <!--begin::Row-->
        <div class="row">
            <div class="col-12 card" style="background-color: white">
                <div class="card card-flush h-xl-100">
                    <div class="card-header pt-7">
                        <h2 class="card-title">Pegawai Baru</h2>
                    </div>
                    <div class="card-body">
                        <div class="card mb-5 mb-xl-10">
                            <!--begin::Card header-->
                            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                                <!--begin::Card title-->
                                <div class="card-title m-0">
                                    <h3 class="fw-bolder m-0">Detail Profil</h3>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--begin::Card header-->
                            <!--begin::Content-->
                            <div id="kt_account_settings_profile_details" class="collapse show">
                                <!--begin::Form-->
                                <form id="form_pegawai" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
                                    <!--begin::Card body-->
                                    <div class="card-body border-top p-9">
                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label required fw-bold fs-6">NIK</label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8">
                                                <!--begin::Row-->
                                                <div class="row">
                                                    <!--begin::Col-->
                                                    <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                                        <input type="text" name="nik" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="NIK">
                                                    <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama</label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8">
                                                <!--begin::Row-->
                                                <div class="row">
                                                    <!--begin::Col-->
                                                    <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                                        <input type="text" name="name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Nama Pegawai">
                                                    <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Agama</label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                <input type="text" name="agama" class="form-control form-control-lg form-control-solid" placeholder="Agama">
                                            <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Tempat Lahir</label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                <input type="text" name="tempat_lahir" class="form-control form-control-lg form-control-solid" placeholder="Tempat Lahir">
                                            <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Tanggal Lahir</label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                <input type="text" name="tanggal_lahir" class="form-control form-control-lg form-control-solid" placeholder="Tanggal Lahir">
                                            <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label fw-bold fs-6">
                                                <span class="required">Tempat Lahir</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Phone number must be active" aria-label="Phone number must be active"></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                <input type="tel" name="phone" class="form-control form-control-lg form-control-solid" placeholder="Phone number" value="044 3276 454 935">
                                            <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label fw-bold fs-6">Company Site</label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input type="text" name="website" class="form-control form-control-lg form-control-solid" placeholder="Company website" value="keenthemes.com">
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Communication</label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                <!--begin::Options-->
                                                <div class="d-flex align-items-center mt-3">
                                                    <!--begin::Option-->
                                                    <label class="form-check form-check-inline form-check-solid me-5">
                                                        <input class="form-check-input" name="communication[]" type="checkbox" value="1">
                                                        <span class="fw-bold ps-2 fs-6">Email</span>
                                                    </label>
                                                    <!--end::Option-->
                                                    <!--begin::Option-->
                                                    <label class="form-check form-check-inline form-check-solid">
                                                        <input class="form-check-input" name="communication[]" type="checkbox" value="2">
                                                        <span class="fw-bold ps-2 fs-6">Phone</span>
                                                    </label>
                                                    <!--end::Option-->
                                                </div>
                                                <!--end::Options-->
                                            <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row mb-0">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label fw-bold fs-6">Allow Marketing</label>
                                            <!--begin::Label-->
                                            <!--begin::Label-->
                                            <div class="col-lg-8 d-flex align-items-center">
                                                <div class="form-check form-check-solid form-switch fv-row">
                                                    <input class="form-check-input w-45px h-30px" type="checkbox" id="allowmarketing" checked="checked">
                                                    <label class="form-check-label" for="allowmarketing"></label>
                                                </div>
                                            </div>
                                            <!--begin::Label-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Card body-->
                                    <!--begin::Actions-->
                                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                                        <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
                                        <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
                                    </div>
                                    <!--end::Actions-->
                                <input type="hidden"><div></div></form>
                                <!--end::Form-->
                            </div>
                            <!--end::Content-->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--end::Container-->
</div>

@endsection
