<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/form/style.css')}}">

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
            max-width: 550px;
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

    <div class="row">
        <div class="leftcolumn">
            <div class="card">
                <div class="fakeimg" style="height:250px;">
                    <img src="{{ asset('assets/daftar/images/banner.png')}}" width="800" alt="">
                </div>
                <h1>Isi Data Dibawah</h1>

                <fieldset class="t">
                    <div>
                        <p>  - Harap Mengisi Email Dengan Benar Username Dan Password akan dikirim melalui email <br></p>
                        <p>  - Dihimbau Untuk tidak memberikan Informasi Username dan Password Kepada Orang lain <br></p>
                        <p>  - Periksa Spam Email Jika Tidak Menerima Email Informasi Username Dan password <br></p>
                        <p>  - Tidak menerima Pembayaran dalam bentuk tunai pastikan pembayaran melalui <br></p>
                        <p>  Finpay/Rekening Resmi Atas Nama Yayasan Indonesia Membangun/UNIVERSITAS <br></p>
                        <p>  INDONESIA MEMBANGUN (INABA) <br></p>
                        <p>  - Harap Mengisi Nama Lengkap Sesuai Dengan Ijazah Terakhir <br></p>
                    </div>
                </fieldset>



                <div class="formbold-main-wrapper">
                    <!-- Author: FormBold Team -->
                    <!-- Learn More: https://formbold.com -->
                    <div class="formbold-form-wrapper">
                        <form action="https://formbold.com/s/FORM_ID" method="POST">




                              
                            <div class="flex flex-wrap formbold--mx-3">
                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5">
                                        <label for="fName" class="formbold-form-label">Periode Daftar</label>
                                        <div class="nav1">Gasal 2022-2023</div>
                                    </div>
                                </div>
                       
                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5">
                                        <label for="lName" class="formbold-form-label"> Kampus </label>
                                       
                                        <select name="cars" id="cars" class="formbold-form-input">
                                            <option>-- Pilih Kampus --</option>
                                            <option value="INABA BANDUNG">INABA BANDUNG</option>
                                            <option value="INABA JAKARTA">INABA JAKARTA</option>
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>






                            <div class="flex flex-wrap formbold--mx-3">
                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5">
                                        <label for="fName" class="formbold-form-label"> Nama Lengkap *</label>
                                        <input type="text" name="fName" id="fName" placeholder="Nama Lengkap"
                                            class="formbold-form-input" />
                                    </div>
                                </div>
                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5">
                                        <label for="lName" class="formbold-form-label"> Pilih Program Studi * </label>
                                       
                                        <select name="cars" id="cars" class="formbold-form-input">
                                            <option>-- Pilih Program Studi --</option>
                                            <option value="Magister Manajemen">Magister Manajemen</option>
                                            <option value="Manajemen">Manajemen</option>
                                            <option value="Akuntansi">Akuntansi</option>
                                            <option value="Sistem Komputer">Sistem Komputer</option>
                                            <option value="Sistem Informasi">Sistem Informasi</option>
                                            <option value="Psikologi">Psikologi</option>
                                            <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>






                            <div class="flex flex-wrap formbold--mx-3">
                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5">
                                        <label for="fName" class="formbold-form-label">Email *</label>
                                        <input type="text" name="fName" id="fName" placeholder="Email "
                                            class="formbold-form-input" />
                                    </div>
                                </div>
                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5">
                                        <label for="lName" class="formbold-form-label"> Pilih Kelas * </label>
                                       
                                        <select name="cars" id="cars" class="formbold-form-input">
                                            <option>-- Pilih Kelas --</option>
                                            <option value="Reguler Pagi">Reguler Pagi</option>
                                            <option value="Reguler Sore">Reguler Sore</option>
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>






                            <div class="flex flex-wrap formbold--mx-3">
                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5">
                                        <label for="fName" class="formbold-form-label"> Nomor Handphone *</label>
                                        <input type="number" name="nohp" id="fName" placeholder="Nomor Handphone"
                                            class="formbold-form-input" />
                                    </div>
                                </div>
                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5">
                                        <label for="lName" class="formbold-form-label"> PIlih Status * </label>
                                       
                                        <select name="cars" id="cars" class="formbold-form-input">
                                            <option>-- Pilih Status  --</option>
                                            <option value="volvo">Volvo</option>
                                            <option value="saab">Saab</option>
                                            <option value="mercedes">Mercedes</option>
                                            <option value="audi">Audi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- 
      <div class="formbold-mb-5">
        <label for="guest" class="formbold-form-label">
          How many guest are you bringing?
        </label>
        <input
          type="number"
          name="guest"
          id="guest"
          placeholder="5"
          class="formbold-form-input"
        />
      </div> -->

                            <div class="flex flex-wrap formbold--mx-3">
                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5 w-full">
                                        <label for="date" class="formbold-form-label"> Tanggal Lahir * </label>
                                        <input type="date" name="date" id="date" class="formbold-form-input" />
                                    </div>
                                </div>
                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5">
                                        <label for="lName" class="formbold-form-label"> Dari mana anda mendapatkan info INABA </label>
                                       
                                        <select name="cars" id="cars" class="formbold-form-input">
                                            <option>-- Pilih Referensi --</option>
                                            <option value="Google/Browsing">Google/Browsing</option>
                                            <option value="Website inaba.ac.id">Website inaba.ac.id</option>
                                            <option value="Instagram">Instagram</option>
                                            <option value="Poster/Brosur disekolah">Poster/Brosur disekolah</option>
                                            <option value="Alumni INABA">Alumni INABA</option>
                                            <option value="Dosen/Tendik(Karyawan) inaba">Dosen/Tendik(Karyawan) inaba</option>
                                            <option value="WhatsApp">WhatsApp</option>
                                            <option value="Tiktok">Tiktok</option>
                                            <option value="Warga Universitas Inaba (Selain Mahasiswa.Dosen.Karyawan/Tendik)">Warga Universitas Inaba (Selain Mahasiswa.Dosen.Karyawan/Tendik)</option>
                                            <option value="Mahasiswa Inaba">Mahasiswa Inaba</option>
                                            <option value="Rekomendasi Eksternal (Teman/Keluarga/Rekan Kerja dll)">Rekomendasi Eksternal (Teman/Keluarga/Rekan Kerja dll)</option>
                                            <option value="Lain-lain....">Lain-lain....</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="flex formbold-mb-5">
                                <div class="flex">
                                    <input type="radio" name="radio1" id="radioButton1" class="formbold-radio" />
                                    <label for="radioButton1" class="formbold-radio-label"> Yes </label>
                                </div>
                                <div class="flex">
                                    <input type="radio" name="radio1" id="radioButton2" class="formbold-radio" />
                                    <label for="radioButton2" class="formbold-radio-label"> No </label>
                                </div>
                            </div>

                            <div>
                                <button class="formbold-btn">Submit</button>
                            </div>
                        </form>
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

</body>

</html>