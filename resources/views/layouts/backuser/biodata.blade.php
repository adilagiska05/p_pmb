<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/form/stylee.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Inter", sans-serif;

        }

        .formbold-mb-5 {
            margin-bottom: 20px;
        }

        .formbold-mb-5 .p {
            margin-bottom: 20px;

        }

        .formbold-pt-3 {
            padding-top: 12px;
        }

        .formbold-main-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 48px;
        }

        .formbold-form-wrapper {
            margin: 0 auto;
            max-width: 1000px;
            width: 100%;
            background: white;
        }

        .formbold-form-label {
            display: block;
            font-weight: 500;
            font-size: 14px;
            color: #07074d;
            margin-bottom: 12px;
        }

        .formbold-form-label-2 {
            font-weight: 600;
            font-size: 20px;
            margin-bottom: 20px;
        }

        .formbold-form-input {
            width: 100%;
            padding: 12px 24px;
            border-radius: 6px;
            border: 1px solid #e0e0e0;
            background: white;
            font-weight: 500;
            font-size: 16px;
            color: #6b7280;
            outline: none;
            resize: none;
        }

        .formbold-form-input:focus {
            border-color: #6a64f1;
            box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
        }

        .formbold-btn {
            text-align: center;
            font-size: 16px;
            border-radius: 6px;
            padding: 14px 32px;
            border: none;
            font-weight: 600;
            background-color: #6a64f1;
            color: white;
            cursor: pointer;
            float: right;
        }

        .formbold-btn:hover {
            box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
        }

        .formbold--mx-3 {
            margin-left: -12px;
            margin-right: -12px;
        }

        .formbold-px-3 {
            padding-left: 12px;
            padding-right: 12px;
        }

        .flex {
            display: flex;
        }

        .flex-wrap {
            flex-wrap: wrap;
        }

        .w-full {
            width: 100%;
        }

        .formbold-radio {
            width: 20px;
            height: 20px;
        }

        .formbold-radio-label {
            font-weight: 500;
            font-size: 16px;
            padding-left: 12px;
            color: #070707;
            padding-right: 20px;
        }

        @media (min-width: 540px) {
            .sm\:w-half {
                width: 50%;
            }
        }
    </style>


</head>

<body>


    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <h2>PMB UNIVERSITAS INABA</h2>
                <li class="nav-item dropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </li>
            </div>
        </nav>
    </div>

    {{-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" align="right">
        <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div> --}}


    <div class="row">
        <div class="leftcolumn">
            <div class="card container" style="width: 60rem;">


                <div class="formbold-main-wrapper">
                    <!-- Author: FormBold Team -->
                    <!-- Learn More: https://formbold.com -->
                    <div class="formbold-form-wrapper">
                        <form action="https://formbold.com/s/FORM_ID" method="POST">





                            <div class="flex flex-wrap formbold--mx-3">


                                {{-- <table>
                                    <tr>
                                        <th class="labell">Periode Daftar</th>
                                        <th class="label">Jalur</th>
                                        <th class="label1">Gelombang</th>
                                    </tr>
                                    <tr>
                                        <td class="nav1">Gasal 2022-2023</td>
                                        <td class="nav2">Umum</td>
                                        <td class="nav3">01</td>
                                    </tr>
                                </table> --}}


                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5">
                                        <label for="lName" class="formbold-form-label"> NAMA LENGKAP </label>
                                        <input type="text" name="fName" id="fName" placeholder="Nama Lengkap"
                                            class="formbold-form-input" />
                                    </div>
                                </div>


                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5">
                                        <label for="lName" class="formbold-form-label"> NOMOR INDUK
                                            KEPENDUDUKAN/KTP </label>
                                        <input type="text" name="fName" id="fName" placeholder="NIK KTP"
                                            class="formbold-form-input" />
                                    </div>
                                </div>



                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5">
                                        <label for="lName" class="formbold-form-label"> JENIS KELAMIN </label>
                                        <select name="cars" id="cars" class="formbold-form-input">
                                            <option></option>
                                            <option value="laki-laki">laki-laki</option>
                                            <option value="perempuan">perempuan</option>
                                        </select>

                                    </div>
                                </div>


                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5">
                                        <label for="lName" class="formbold-form-label">AGAMA</label>
                                        <select name="cars" id="cars" class="formbold-form-input">
                                            <option></option>
                                            <option value="ISLAM">ISLAM</option>
                                            <option value="KRISTEN">KRISTEN</option>
                                            <option value="HINDU">HINDU</option>
                                            <option value="BUDHA">BUDHA</option>
                                            <option value="KHATOLIK">KHATOLIK</option>
                                            <option value="KONG HUCHU">KONG HUCHU</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5">
                                        <label for="lName" class="formbold-form-label"> TEMPAT LAHIR </label>
                                        <input type="text" name="fName" id="fName" placeholder=""
                                            class="formbold-form-input" />
                                    </div>
                                </div>


                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5">
                                        <label for="lName" class="formbold-form-label"> TANGGAL LAHIR </label>
                                        <input type="date" name="fName" id="fName" placeholder=""
                                            class="formbold-form-input" />
                                    </div>
                                </div>

                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5">
                                        <label for="lName" class="formbold-form-label"> EMAIL </label>
                                        <input type="text" name="fName" id="fName" placeholder="email"
                                            class="formbold-form-input" />
                                    </div>
                                </div>


                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5">
                                        <label for="lName" class="formbold-form-label"> NO HP </label>
                                        <input type="number" name="fName" id="fName" placeholder=""
                                            class="formbold-form-input" />
                                    </div>
                                </div>

                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5">
                                        <label for="lName" class="formbold-form-label"> ALAMAT </label>
                                        <textarea name="alamat" id="" cols="95" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>




                            <div class="flex flex-wrap formbold--mx-3">


                                {{-- <table>
                                <tr>
                                    <th class="labell">Periode Daftar</th>
                                    <th class="label">Jalur</th>
                                    <th class="label1">Gelombang</th>
                                </tr>
                                <tr>
                                    <td class="nav1">Gasal 2022-2023</td>
                                    <td class="nav2">Umum</td>
                                    <td class="nav3">01</td>
                                </tr>
                            </table> --}}


                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5">
                                        <label for="lName" class="formbold-form-label"> RT </label>
                                        <input type="text" name="fName" id="fName" placeholder="RT"
                                            class="formbold-form-input" />
                                    </div>
                                </div>


                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5">
                                        <label for="lName" class="formbold-form-label"> RW</label>
                                        <input type="text" name="fName" id="fName" placeholder="RW"
                                            class="formbold-form-input" />
                                    </div>
                                </div>


                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5">
                                        <label for="lName" class="formbold-form-label"> KELURAHAN</label>
                                        <input type="text" name="fName" id="fName" placeholder=""
                                            class="formbold-form-input" />
                                    </div>
                                </div>


                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5">
                                        <label for="lName" class="formbold-form-label"> KECAMATAN </label>
                                        <input type="text" name="fName" id="fName" placeholder=""
                                            class="formbold-form-input" />
                                    </div>
                                </div>


                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5">
                                        <label for="lName" class="formbold-form-label"> PROVINSI </label>
                                        <input type="text" name="fName" id="fName" placeholder=""
                                            class="formbold-form-input" />
                                    </div>
                                </div>


                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5">
                                        <label for="lName" class="formbold-form-label"> KOTA/KABUPATEN </label>
                                        <input type="text" name="fName" id="fName" placeholder=""
                                            class="formbold-form-input" />
                                    </div>
                                </div>

                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5">
                                        <label for="lName" class="formbold-form-label"> KODE POS </label>
                                        <input type="text" name="fName" id="fName" placeholder=""
                                            class="formbold-form-input" />
                                    </div>
                                </div>






                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5">
                                        <label for="lName" class="formbold-form-label">KEWARGANEGARAAN</label>
                                        <select name="cars" id="cars" class="formbold-form-input">
                                            <option>Pilih</option>
                                            <option value="WARGA NEGARA INDONESIA">WARGA NEGARA INDONESIA</option>
                                            <option value="WARGA NEGARA ASING">WARGA NEGARA ASING</option>

                                        </select>

                                    </div>
                                </div>


                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5">
                                        <label for="lName" class="formbold-form-label">UKURAN ALMAMATER</label>
                                        <select name="cars" id="cars" class="formbold-form-input">
                                            <option>Pilih</option>
                                            <option value="S">S</option>
                                            <option value="M">M</option>
                                            <option value="L">L</option>
                                            <option value="XL">XL</option>
                                            <option value="XXL">XXL</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5">
                                        <label for="lName" class="formbold-form-label"> FOTO </label>
                                        <input type="text" name="fName" id="fName" placeholder=""
                                            class="formbold-form-input" />
                                    </div>
                                </div>

                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5">
                                        <label for="lName" class="formbold-form-label"> UPLOAD KTP </label>
                                        <input type="text" name="fName" id="fName" placeholder=""
                                            class="formbold-form-input" />
                                    </div>
                                </div>


                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5">
                                        <label for="lName" class="formbold-form-label">VAKSIN COVID-19</label>
                                        <select name="cars" id="cars" class="formbold-form-input">
                                            <option>Pilih</option>
                                            <option value="Belum Vaksin">Belum Vaksin</option>
                                            <option value="Vaksin Dosis ke-1">Vaksin Dosis ke-1</option>
                                            <option value="Vaksin Dosis ke-2">Vaksin Dosis ke-2</option>
                                            <option value="Vaksin Dosis ke-3(Booster)">Vaksin Dosis ke-3(Booster)
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                {{-- <div>
                                <button class="formbold-btn">Submit</button>
                            </div> --}}
                        </form>
                        <hr />
                    </div>
                </div>
            </div>

        </div>
        <div class="rightcolumn">
        </div>
    </div>

    <!-- <div class="footer">
  <h2>Footer</h2>
</div> -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>


</body>

</html>
