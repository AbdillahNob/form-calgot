<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 11 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
    <base href="../../../" />
    <meta charset="utf-8" />   
    <title>DIPANEGARA COMPUTER CLUB</title>
    <meta name="description" content="PPDB-SPTTM" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Custom Styles(used by this page)-->
    <link href="{{ asset('/css/pages/login/login-1.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/pages/wizard/wizard-6.css') }}" rel="stylesheet" type="text/css" />

    <!--end::Page Custom Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{ asset('/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="{{ asset('/css/themes/layout/header/base/light.css') }}" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
    class="
      header-fixed header-mobile-fixed
      subheader-enabled subheader-fixed
      aside-enabled aside-fixed aside-minimize-hoverable
      page-loading
    ">
    <!--begin::Main-->


    <div class="d-flex flex-column flex-root ">
        <!--begin::Login-->
        <div class="
          login login-1 login-signin-on
          d-flex
          flex-column flex-lg-row flex-column-fluid
          bg-white
        "
            id="kt_login">
            <!--begin::Aside-->
            <div class="login-aside d-flex flex-column flex-row-auto m-5">
                <!--begin::Aside Top-->
                <div class="d-flex flex-column-auto flex-column">
                    <!--begin::Aside header-->
                    <img src="{{ asset('alur.png') }}" alt="" class="img-fluid" />
                    <!--end::Aside header-->
                </div>
                <!--end::Aside Top-->

            </div>
            <!--begin::Aside-->
            <!--begin::Content-->
            <div
                class="
            login-content
            flex-row-fluid
            d-flex
            flex-column
            justify-content-center
            position-relative
            overflow-hidden
            p-0
            mx-0
          ">
                <!--begin::Content body-->
                <div class="d-flex flex-column-fluid flex-center">
                    <!--begin::Signin-->
                    <div class="login-form login-signin">
                        <!--begin::Form-->
                        <form class="form" novalidate="novalidate" id="kt_login_signin_form">
                            <!--begin::Title-->
                            <div class="pb-13 pt-lg-0 pt-5 text-center ">
                              <img src="{{ asset('logo dcc.png') }}" class="img-fluid " alt="..." width="200">
                                <h3 class="font-weight-bolder text-dark mb-lg-25 font-size-h4 font-size-h1-lg">
                                    <div style="text-align: center">PENDAFTARAN PESERTA CALON ANGGOTA DCC XXV</div>
                                </h3>
                                <div class="pb-lg-0 pb-5 mb-5 mt-5 m-5">
                                    <a href="javascript:;"
                                        class="
                      btn  btn-lg btn-block text-light
                      font-weight-bolder font-size-h6
                    "
                                        style="background: linear-gradient(to right, #3ab7ff, #8224e3)"
                                        id="kt_login_forgot">Registrasi</a>

                                    <a href="{{ url('cetak-formulir') }}"
                                        class="
                      btn  btn-lg btn-block text-light
                      font-weight-bolder font-size-h6 mt-5
                    "
                                        style="background: linear-gradient(to right, #3ab7ff, #8224e3)">Cetak Kartu
                                        Formulir</a>


                                </div>



                            </div>
                            <!--begin::Title-->
                            <!--begin::Form group-->

                            <!--end::Form group-->
                            <!--begin::Form group-->

                            <!--end::Form group-->
                            <!--begin::Action-->

                            <!--end::Action-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Signin-->
                    <!--begin::Signup-->
                    <div class="login-form login-signup">
                        <!--begin::Form-->
                        <form class="form" target="_blank" method="POST" name="formCetakFormulir"
                            id="kt_login_signup_form" action="/cetak-formulir">
                            @csrf
                            <!--begin::Title-->
                            <div class="pb-13 pt-lg-0 pt-5">
                                <h3
                                    class="
                      font-weight-bolder
                      text-dark
                      font-size-h4 font-size-h1-lg
                    ">
                                    Cetak Kartu Formulir
                                </h3>
                                <p class="text-muted font-weight-bold font-size-h4">
                                    Masukkan Stambuk Anda
                                </p>
                            </div>
                            <!--end::Title-->
                            <!--begin::Form group-->

                            <!--end::Form group-->
                            <!--begin::Form group-->

                            <div class="form-group">
                                <input required
                                    class="
                      form-control form-control-solid
                      h-auto
                      py-6
                      px-6
                      rounded-lg
                      font-size-h6
                    "
                                    type="text" placeholder="Masukkan Stambuk Anda" name="nik"
                                    autocomplete="off" />
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->

                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="form-group d-flex flex-wrap pb-lg-0 pb-3">
                                <button type="submit" id="cetakFormulir"
                                    class="
                      btn btn-primary
                      font-weight-bolder font-size-h6
                      px-8
                      py-4
                      my-3
                      mr-4
                    ">
                                    Cetak Kartu Pendaftaran
                                </button>
                            </div>
                            <!--end::Form group-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Signup-->
                    <!--begin::Forgot-->
                    <div class="login-form login-forgot">

                        <!--begin::Wizard 6-->
                        <div class="wizard wizard-6 d-flex flex-column flex-lg-row flex-column-fluid" id="kt_wizard">
                            <!--begin::Container-->
                            <div class="wizard-content d-flex flex-column">
                                
                                <!--end::Nav-->
                                <!--begin::Form-->
                                <form class="px-10" novalidate="novalidate" id="kt_form" action='/pendaftaran'
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <!--begin: Wizard Step 1-->
                                    <div class="pb-5" data-wizard-type="step-content"
                                        data-wizard-state="current">

                                        <!--begin::Title-->
                                        <div class="  text-md-left text-dark">
                                            <div class="font-weight-bolder font-size-h3 ">
                                                <h2 class="mt-5 text-center pb-4">PENTING UNTUK DIBACA</h2>
                                                <div class="font-weight-bold font-size-h6 text-dark" style="background-color:lightyellow">
                                                    <ul>
                                                        <li>Pendaftar adalah Mahasiswa UNIVERSITAS DIPA MAKASSAR</li>
                                                        <li>Pendaftaran dimulai pada tanggal 8 Maret s/d 27 Maret 2022</li>
                                                        <li>Format Foto harus berorientasi Potrait, dengan ukuran maksimum 1 mb</li>
                                                        <li>Format Formulir dalam bentuk PDF dan ukuran Maksimal 2 mb</li>
                                                        <li>Wajib hadir di TECHNICAL MEETING</li>
                                                    </ul>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <!--begin::Title-->
                                        
                                    </div>
                                    <!--end: Wizard Step 1-->
                                    <!--begin: Wizard Step 2-->
                                    <div class="pb-5" data-wizard-type="step-content">
                                        <!--begin::Title-->
                                       <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label class="font-size-h6 font-weight-bolder text-dark">Angkatan Kampus</label>
                                            <input type="text"
                                                class="form-control form-control-solid h-auto p-5 border-0 rounded-lg font-size-h6"
                                                name="angkatan" placeholder="Angkatan Kampus" value="" />
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="font-size-h6 font-weight-bolder text-dark">
                                                Pengalaman Organisasi</label>
                                            <input type="text"
                                                class="form-control form-control-solid h-auto p-5 border-0 rounded-lg font-size-h6"
                                                name="organisasi" placeholder="Pengalaman Organisasi" value="" />
                                        </div>
                                       </div>
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label class="font-size-h6 font-weight-bolder text-dark">Alasan</label>
                                                <input type="text"
                                                    class="form-control form-control-solid h-auto p-5 border-0 rounded-lg font-size-h6"
                                                    name="alasan" placeholder="Alasan" value="" />
                                            </div>

                                            <div class="col-lg-6">
                                                <label class="font-size-h6 font-weight-bolder text-dark">
                                                    Foto</label>
                                                <div class="custom-file">

                                                    <input type="file" class="custom-file-input " name="foto"
                                                        id="inputGroupFile02" accept="image/*">
                                                    <label class="custom-file-label" for="inputGroupFile02"
                                                        aria-describedby="inputGroupFileAddon02">Choose file</label>
                                                </div>
                                                <label class="font-size-h8 text-danger">*maksimal ukuran 2MB</label>
                                            </div>
                                           
                                            
                                        </div>
                                       
                                    </div>
                                    <!--end: Wizard Step 2-->
                                    <!--begin: Wizard Step 3-->
                                    {{-- <div class="pb-5" data-wizard-type="step-content">
                                        <!--begin::Title-->
                                        <div class="pt-lg-0 pt-5 pb-15 text-center text-md-left">
                                            <h3 class="font-weight-bolder text-dark font-size-h2">Complete
                                            </h3>
                                            <div class="text-muted font-weight-bold font-size-h4">Complete
                                                Your Signup And Become A Member!</div>
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Section-->
                                        <h4 class="font-weight-bolder mb-3">Accoun Settings:</h4>
                                        <div class="text-dark-50 font-weight-bold line-height-lg mb-8">
                                            <div>Nick Stone</div>
                                            <div>+12233434-34</div>
                                            <div>nick.stone@gmail.com</div>
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Section-->
                                        <h4 class="font-weight-bolder mb-3">Address Details:</h4>
                                        <div class="text-dark-50 font-weight-bold line-height-lg mb-8">
                                            <div>Address Line 1</div>
                                            <div>Address Line 2</div>
                                            <div>Melbourne 3000, VIC, Australia</div>
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Section-->
                                        <h4 class="font-weight-bolder mb-3">Support Channels:</h4>
                                        <div class="text-dark-50 font-weight-bold line-height-lg">
                                            <div>Overnight Delivery with Regular Packaging</div>
                                            <div>Preferred Morning (8:00AM - 11:00AM) Delivery</div>
                                        </div>
                                        <!--end::Section-->
                                    </div> --}}
                                    <!--end: Wizard Step 3-->
                                    <!--begin: Wizard Actions-->
                                    <div class="d-flex justify-content-between pt-2 mx-5">
                                      
                                        <div class="mr-2">

                                          {{-- Back home --}}
                                          
                                          <a href="{{url('/')}}"
                                                    class=" btn btn-outline-primary btn-lg font-weight-bolder ">Back Home</a>

                                                    
                                            <button type="button"
                                                class="btn btn-light-primary font-weight-bolder font-size-h6 pr-8 pl-6 py-4 my-3 mr-3"
                                                data-wizard-type="action-prev">
                                                <span class="svg-icon svg-icon-md mr-2">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Left-2.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <polygon points="0 0 24 0 24 24 0 24" />
                                                            <rect fill="#000000" opacity="0.3"
                                                                transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000)"
                                                                x="14" y="7" width="2" height="10" rx="1" />
                                                            <path
                                                                d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z"
                                                                fill="#000000" fill-rule="nonzero"
                                                                transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997)" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>Previous</button>
                                        </div>
                                        <div>
                                            <button type="button"
                                                class="btn btn-primary font-weight-bolder font-size-h6 pl-8 pr-4 py-4 my-3"
                                                data-wizard-type="action-submit">Kirim
                                                <span class="svg-icon svg-icon-md ml-2">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Right-2.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <polygon points="0 0 24 0 24 24 0 24" />
                                                            <rect fill="#000000" opacity="0.3"
                                                                transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)"
                                                                x="7.5" y="7.5" width="2" height="9" rx="1" />
                                                            <path
                                                                d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                fill="#000000" fill-rule="nonzero"
                                                                transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span></button>

                                                {{-- Next button --}}
                                                
                                                <a href="{{url('/pendaftaran')}}"
                                                    class=" btn btn-primary btn-lg font-weight-bolder">Next</a>
                                            
                                        </div>
                                    </div>
                                    <!--end: Wizard Actions-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Container-->
                        </div>
                        <!--end::Wizard 6-->
                        <!--end::Wizard-->

                        <!--end::Form-->
                    </div>

                </div>
                <!--end::Content body-->
                <!--begin::Content footer-->
                {{-- <div
                    class="
              d-flex
              justify-content-lg-start justify-content-center
              align-items-end
              py-7 py-lg-0
            ">
                    <div class="text-dark-50 font-size-lg font-weight-bolder mr-10">
                        <span class="mr-1">2022©</span>
                        <a href="http://keenthemes.com/metronic" target="_blank"
                            class="text-dark-75 text-hover-primary">PPDB-SMKPTTM</a>
                    </div>
                    <a href="#" class="text-primary font-weight-bolder font-size-lg">Terms</a>
                    <a href="#" class="text-primary ml-5 font-weight-bolder font-size-lg">Plans</a>
                    <a href="#" class="text-primary ml-5 font-weight-bolder font-size-lg">Contact Us</a>
                </div> --}}
                <!--end::Content footer-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Login-->
    </div>
    <!--end::Main-->
    <script>
        var HOST_URL =
            "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
    </script>
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>
        var KTAppSettings = {
            breakpoints: {
                sm: 576,
                md: 768,
                lg: 992,
                xl: 1200,
                xxl: 1400
            },
            colors: {
                theme: {
                    base: {
                        white: "#ffffff",
                        primary: "#3699FF",
                        secondary: "#E5EAEE",
                        success: "#1BC5BD",
                        info: "#8950FC",
                        warning: "#FFA800",
                        danger: "#F64E60",
                        light: "#E4E6EF",
                        dark: "#181C32",
                    },
                    light: {
                        white: "#ffffff",
                        primary: "#E1F0FF",
                        secondary: "#EBEDF3",
                        success: "#C9F7F5",
                        info: "#EEE5FF",
                        warning: "#FFF4DE",
                        danger: "#FFE2E5",
                        light: "#F3F6F9",
                        dark: "#D6D6E0",
                    },
                    inverse: {
                        white: "#ffffff",
                        primary: "#ffffff",
                        secondary: "#3F4254",
                        success: "#ffffff",
                        info: "#ffffff",
                        warning: "#ffffff",
                        danger: "#ffffff",
                        light: "#464E5F",
                        dark: "#ffffff",
                    },
                },
                gray: {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#EBEDF3",
                    "gray-300": "#E4E6EF",
                    "gray-400": "#D1D3E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#7E8299",
                    "gray-700": "#5E6278",
                    "gray-800": "#3F4254",
                    "gray-900": "#181C32",
                },
            },
            "font-family": "Poppins",
        };
    </script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="{{ asset('/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
    <script src="{{ asset('/js/scripts.bundle.js') }}"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('/js/pages/custom/login/login-general.js') }}"></script>
    <script src="{{ asset('/js/pages/custom/wizard/wizard-6.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            // proses cetak formulir
            $('#cetakFormulir1').click(function(e) {
                e.preventDefault();
                $.ajax({
                    data: $('#kt_login_signup_form').serialize(),
                    url: "{{ url('/cetak-formulir') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function(data) {
                        alert(data.status);
                        load('/cetak')
                    },
                    error: function(data) {
                        $('#formInput').trigger("reset");
                        $('#ajaxModel').modal('hide');
                        toastr.danger("Failed to update data!");
                    }
                });
            });


        });
    </script>
    <!--end::Page Scripts-->
</body>
<!--end::Body-->

</html>
