<!DOCTYPE html>
<html>

<head>
    <title>Form Wizard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-8 mt-3 mb-5">
                <div class="card">
                    <div class="card-header text-center">
                        <h1>FORM PERTANYAAN</h1>
                        <h1>KALKULASI HR</h1>
                    </div>
                    <div class="card-body">
                        <form id="wizardForm">
                            <div class="progress mb-3">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            {{-- Step 1 --}}
                            <div class="tab">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="name"><b>Nama</b></label>
                                            <input type="text" name="name" class="form-control" id="name"
                                                required onkeyup="removeInvalidFeedback(this)">
                                            <div class="invalid-feedback text-capitalize">
                                                Nama harus diisi
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="instance"><b>Instansi</b></label>
                                            <input type="text" name="instance" class="form-control" id="instance"
                                                required onkeyup="removeInvalidFeedback(this)">
                                            <div class="invalid-feedback text-capitalize">
                                                Instansi harus diisi
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="position"><b>Jabatan</b></label>
                                            <input type="text" name="position" class="form-control" id="position"
                                                required onkeyup="removeInvalidFeedback(this)">
                                            <div class="invalid-feedback text-capitalize">
                                                Jabatan harus diisi
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="email"><b>Email</b></label>
                                            <input type="email" name="email" class="form-control" id="email"
                                                required onkeyup="removeInvalidFeedback(this)">
                                            <div class="invalid-feedback text-capitalize">
                                                Email harus diisi
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="whatsapp_number"><b>No Whatsapp</b></label>
                                            <input type="text" name="whatsapp_number" class="form-control"
                                                id="whatsapp_number" required onkeyup="removeInvalidFeedback(this)">
                                            <div class="invalid-feedback text-capitalize">
                                                No Whatsapp harus diisi
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Step 2 --}}
                            <div class="tab" style="display: none;">
                                <h5>1. Semua calon karyawan mengirimkan berkas lamaran pekerjaan saat
                                    seleksi awal/ administrasi</h5>
                                <div class="form-group">
                                    <input type="radio" name="question1" value="Ya" onclick="hideRadioAlert(this)"
                                        required id="question1Ya">
                                    <label for="question1Ya">Ya</label> <br>
                                    <input type="radio" name="question1" value="Tidak" onclick="hideRadioAlert(this)"
                                        id="question1Tidak"> <label for="question1Tidak">Tidak</label>
                                    <div id="radioAlert" class="alert alert-danger radio-alert" style="display: none;">
                                        Pilih salah satu opsi.
                                    </div>
                                </div>
                                <h5>2. Penggunaan lembar penilaian wawancara saat seleksi lanjutan</h5>
                                <div class="form-group">
                                    <input type="radio" name="question2" value="Ya" onclick="hideRadioAlert(this)"
                                        required id="question2Ya">
                                    <label for="question2Ya">Ya</label> <br>
                                    <input type="radio" name="question2" value="Tidak" onclick="hideRadioAlert(this)"
                                        id="question2Tidak"> <label for="question2Tidak">Tidak</label>
                                    <div id="radioAlert" class="alert alert-danger radio-alert" style="display: none;">
                                        Pilih salah satu opsi.
                                    </div>
                                </div>
                                <h5>3. Semua karyawan memiliki kontrak kerja</h5>
                                <div class="form-group">
                                    <input type="radio" name="question3" value="Ya"
                                        onclick="hideRadioAlert(this)" required id="question3Ya">
                                    <label for="question3Ya">Ya</label> <br>
                                    <input type="radio" name="question3" value="Tidak"
                                        onclick="hideRadioAlert(this)" id="question3Tidak"> <label
                                        for="question3Tidak">Tidak</label>
                                    <div id="radioAlert" class="alert alert-danger radio-alert"
                                        style="display: none;">
                                        Pilih salah satu opsi.
                                    </div>
                                </div>
                                <h5>4. Pembaruan kontrak kerja karyawan setiap periode dan/ jenjang
                                    tertentu</h5>
                                <div class="form-group">
                                    <input type="radio" name="question4" value="Ya"
                                        onclick="hideRadioAlert(this)" required id="question4Ya">
                                    <label for="question4Ya">Ya</label> <br>
                                    <input type="radio" name="question4" value="Tidak"
                                        onclick="hideRadioAlert(this)" id="question4Tidak">
                                    <label for="question4Tidak">Tidak</label>
                                    <div id="radioAlert" class="alert alert-danger radio-alert"
                                        style="display: none;">
                                        Pilih salah satu opsi.
                                    </div>
                                </div>
                                <h5>5. Memiliki buku pegangan karyawan yang merinci peraturan, kebijakan
                                    & SOP perusahaan</h5>
                                <div class="form-group">
                                    <input type="radio" name="question5" value="Ya"
                                        onclick="hideRadioAlert(this)" required id="question5Ya">
                                    <label for="question5Ya">Ya</label> <br>
                                    <input type="radio" name="question5" value="Tidak"
                                        onclick="hideRadioAlert(this)" id="question5Tidak">
                                    <label for="question5Tidak">Tidak</label>
                                    <div id="radioAlert" class="alert alert-danger radio-alert"
                                        style="display: none;">
                                        Pilih salah satu opsi.
                                    </div>
                                </div>
                            </div>
                            {{-- Step 3 --}}
                            <div class="tab" style="display: none;">
                                <h5>6. Pembaruan buku pegangan karyawan sesuai undang-undang
                                    ketenagakerjaan yang berlaku</h5>
                                <div class="form-group">
                                    <input type="radio" name="question6" value="Ya"
                                        onclick="hideRadioAlert(this)" required id="question6Ya">
                                    <label for="question6Ya">Ya</label> <br>
                                    <input type="radio" name="question6" value="Tidak"
                                        onclick="hideRadioAlert(this)" id="question6Tidak">
                                    <label for="question6Tidak">Tidak</label>
                                    <div id="radioAlert" class="alert alert-danger radio-alert"
                                        style="display: none;">
                                        Pilih salah satu opsi.
                                    </div>
                                </div>
                                <h5>7. Menerapkan prosedur disipliner tertulis (yang mencakup klausul
                                    pemberhentian), pemecatan, banding & pengaduan?</h5>
                                <div class="form-group">
                                    <input type="radio" name="question7" value="Ya"
                                        onclick="hideRadioAlert(this)" required id="question7Ya">
                                    <label for="question7Ya">Ya</label> <br>
                                    <input type="radio" name="question7" value="Tidak"
                                        onclick="hideRadioAlert(this)" id="question7Tidak">
                                    <label for="question7Tidak">Tidak</label>
                                    <div id="radioAlert" class="alert alert-danger radio-alert"
                                        style="display: none;">
                                        Pilih salah satu opsi.
                                    </div>
                                </div>
                                <h5>8. Prosedur di poin sebelumnya telah sesuai dengan kode etik
                                    Disnaker?</h5>
                                <div class="form-group">
                                    <input type="radio" name="question8" value="Ya"
                                        onclick="hideRadioAlert(this)" required id="question8Ya">
                                    <label for="question8Ya">Ya</label> <br>
                                    <input type="radio" name="question8" value="Tidak"
                                        onclick="hideRadioAlert(this)" id="question8Tidak">
                                    <label for="question8Tidak">Tidak</label>
                                    <div id="radioAlert" class="alert alert-danger radio-alert"
                                        style="display: none;">
                                        Pilih salah satu opsi.
                                    </div>
                                </div>
                                <h5>9. Peninjauan aturan kerja, benefit & compensation serta SOP
                                    perusahaan secara rutin sesuai perkembangan bisnis dan peraturan
                                    undang-undang yang berlaku</h5>
                                <div class="form-group">
                                    <input type="radio" name="question9" value="Ya"
                                        onclick="hideRadioAlert(this)" required id="question9Ya">
                                    <label for="question9Ya">Ya</label> <br>
                                    <input type="radio" name="question9" value="Tidak"
                                        onclick="hideRadioAlert(this)" id="question9Tidak">
                                    <label for="question9Tidak">Tidak</label>
                                    <div id="radioAlert" class="alert alert-danger radio-alert"
                                        style="display: none;">
                                        Pilih salah satu opsi.
                                    </div>
                                </div>
                                <h5>10. Memiliki konsultan profesional untuk memandu Anda dalam masalah
                                    atau perselisihan karyawan?</h5>
                                <div class="form-group">
                                    <input type="radio" name="question10" value="Ya"
                                        onclick="hideRadioAlert(this)" required id="question10Ya"> <label
                                        for="question10Ya">Ya</label> <br>
                                    <input type="radio" name="question10" value="Tidak"
                                        onclick="hideRadioAlert(this)" id="question10Tidak">
                                    <label for="question10Tidak">Tidak</label>
                                    <div id="radioAlert" class="alert alert-danger radio-alert"
                                        style="display: none;">
                                        Pilih salah satu opsi.
                                    </div>
                                </div>
                            </div>
                            <div style="overflow:auto;">
                                <div style="float:right;">
                                    <button type="button" class="btn btn-warning" id="prevBtn"
                                        onclick="nextPrev(-1)">Previous</button>
                                    <button type="button" class="btn btn-info" id="nextBtn"
                                        onclick="validateForm()">Next</button>
                                    <button type="submit" class="btn btn-success" id="submitBtn"
                                        style="display: none;">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        let currentTab = 0;
        showTab(currentTab);

        function showTab(n) {
            let tabs = document.getElementsByClassName("tab");
            for (let i = 0; i < tabs.length; i++) {
                tabs[i].style.display = "none";
            }
            tabs[n].style.display = "block";
            if (n === 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n === (tabs.length - 1)) {
                document.getElementById("nextBtn").style.display = "none";
                document.getElementById("submitBtn").style.display = "inline";
            } else {
                document.getElementById("nextBtn").style.display = "inline";
                document.getElementById("submitBtn").style.display = "none";
            }

            // Update the progress bar
            let progressBar = document.querySelector(".progress-bar");
            let progress = ((n + 1) / tabs.length) * 100;
            progressBar.style.width = progress + "%";
            progressBar.setAttribute("aria-valuenow", progress);
            // progressBar.innerHTML = progress + '%';

            window.scrollTo(0, 0);

        }

        function nextPrev(n) {
            let tabs = document.getElementsByClassName("tab");
            tabs[currentTab].style.display = "none";
            currentTab += n;
            if (currentTab >= tabs.length) {
                return false;
            }
            showTab(currentTab);
        }

        function validateForm() {
            let tabs = document.getElementsByClassName("tab");
            let inputs = tabs[currentTab].querySelectorAll("input[required]");
            let isValid = true;
            // let radioGroups = tabs[currentTab].querySelectorAll("input[type='radio']");

            for (let i = 0; i < inputs.length; i++) {
                if (!inputs[i].value) {
                    isValid = false;
                    inputs[i].classList.add("is-invalid");
                } else {
                    inputs[i].classList.remove("is-invalid");
                }
            }

            let radioGroup = {};

            for (let i = 0; i < inputs.length; i++) {
                if (inputs[i].type === "radio") {
                    let inputName = inputs[i].getAttribute("name");
                    if (!radioGroup[inputName] && !document.querySelector("input[name='" + inputName + "']:checked")) {
                        isValid = false;
                        radioGroup[inputName] = true;
                        let radioAlert = inputs[i].parentNode.querySelector(".alert");
                        radioAlert.style.display = "block";
                    }
                } else {
                    if (!inputs[i].value) {
                        isValid = false;
                        inputs[i].classList.add("is-invalid");
                    } else {
                        inputs[i].classList.remove("is-invalid");
                    }
                }
            }

            if (isValid) {
                nextPrev(1);
            }
        }

        function removeInvalidFeedback(element) {
            element.classList.remove("is-invalid");
            let radioAlert = element.parentNode.querySelector(".alert");
            if (radioAlert) {
                radioAlert.style.display = "none";
            }
        }

        function hideRadioAlert(radioElement) {
            const radioAlert = radioElement.parentNode.querySelector(".radio-alert");

            if (radioElement.checked) {
                radioAlert.style.display = "none";
            }
        }
    </script>
</body>

</html>