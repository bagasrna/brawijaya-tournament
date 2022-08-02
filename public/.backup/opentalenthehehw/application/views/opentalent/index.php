    <section id="jumbotron">
        <div class="jumbotron jumbotron-fluid">
            <object data="../olimpiade-brawijaya/assets/jumbotron-optal.svg" type="image/svg+xml" style="width: 100%"></object>
        </div>
    </section>
    <section id="optal-tab" style="margin-bottom: 15px">
        <div class="row container-fluid opt-tab">
            <button type="button" id="opt-tnc" class="col-4 tab-btn">T&C</button>
            <button type="button" id="opt-crt" class="col-4 tab-btn">Kriteria Penilaian</button>
            <button type="button" id="opt-jnp" class="col-4 tab-btn">Jenis Penampilan</button>
        </div>

        <section id="contents-text">
                <div id="opt-tncs" class="row col-12 container-fluid contentcollapsed mx-auto">
                    <div class="pt-1">
                        <div class="mt-1">
                            <div class="text-center">
                                <h4>Syarat & Ketentuan</h4>
                                <h5>Open Talent Opening Ceremony Olimpiade Brawijaya 2019</h5>
                            </div>
                            <hr>
                            <ul>
                                <li>Mahasiswa aktif UB</li>
                                <li><b>Bukan termasuk dalam kontingen atlit pada Olimpiade Brawijaya 2019</b></li>
                                <li>Mengisi form dan upload video sesuai dengan jenis penampilan yang dipilih</li> 
                                <li>foto KTM masing-masing personil/anggota</li> 
                                <li><b>Video yang digunakan tidak diperkenankan di edit dalam bentuk apapun</b></li>
                                <li>Tim yang terpilih akan dihubungi oleh panitia</li>
                                <li>Jika ditemukan kecurangan yang dilakukan oleh peserta audisi maka panitia berhak memutuskan kesempatan untuk tampil pada opening ceremony olimpiade brawijaya 2019.</li>
                                <li>Keputusan panitia bersifat mutlak.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="opt-crts" class="row col-12 container-fluid contentcollapsed mx-auto">
                    <div class="pt-1">
                        <div class="mt-1">
                            <div class="text-center">
                                <h4>Kriteria Penilaian</h4>
                                <h5>Open Talent Opening Ceremony Olimpiade Brawijaya 2019</h5>
                            </div>
                            <hr>
                            <ol type="A" bold>
                                <li>Pemain Drama
                                    <ul>
                                        <li>Kreatifitas Koreografi</li>
                                        <li>Kekompakan Team </li>
                                        <li>Kostum</li>
                                        <li>Harmonisasi</li>
                                    </ul>
                                </li>
                                <li>Solo Vocal
                                    <ul>
                                        <li>Intonasi Suara</li>
                                        <li>Pengucapan / Artikulasi</li>
                                        <li>Ketepatan Ritme dan Tempo</li>
                                        <li>Improvisasi</li>
                                        <li>Harmonisasi</li>
                                        <li>Interpretasi Lagu</li>
                                    </ul>
                                </li>
                                <li>Modern Dance
                                    <ul>
                                        <li>Kreatifitas Koreografi</li>
                                        <li>Kekompakan</li>
                                        <li>Kostum</li>
                                        <li>Harmonisasi</li>
                                    </ul>
                                </li>
                                <li>Band
                                    <ul>
                                        <li>Penguasaan Panggung </li>
                                        <li>Penguasaan Alat Musik dan Instrumen</li>
                                        <li>Penguasaan Materi Lagu</li>
                                        <li>Kekompakan</li>
                                        <li>Kreatifitas (arrangement/kreasi kostum)</li>
                                        <li>Moralitas</li>
                                    </ul>
                                </li>
                                <li>Keputusan Panitia Bersifat Mutlak</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div id="opt-jnps" class="row col-12 container-fluid contentcollapsed mx-auto">
                    <section id="talent-sec" class="row">
                        <div class="btn-talent col-3" id="drama"><p class="pt-15 text-center">Drama</p></div>
                        <div class="btn-talent col-3" id="vocal"><p class="pt-15 text-center">Solo Vocal</p></div>
                        <div class="btn-talent col-3" id="dance"><p class="pt-15 text-center">Modern Dance</p></div>
                        <div class="btn-talent col-3" id="band"><p class="pt-15 text-center">Band</p></div>
                        <hr>
                    </section>
                    <section id="talent-desc" class="tal-desc mb-4">
                        <div id="drama-c" class="desc-collapsed">
                            <div class="content-container">
                                <div class="t-desc">
                                    <h4 class="pt-15 text-center">Syarat Khusus</h4>
                                    <h5 class="text-center">Drama</h5>
                                    <hr>
                                    <ul>
                                        <li>Personil minimal 5 orang dan maksimal 20 orang</li>
                                        <li>Berpakaian bebas, sopan, dan rapi</li>
                                        <li>Upload video dengan durasi maksimal 15 menit</li>
                                        <li>Menyiapkan teks sendiri untuk diperagakan</li>
                                        <li>Tema yang digunakan adalah “Futuristic” dengan subtema dibebaskan</li>
                                        <li>Drama yang ditampilkan harus memiliki pesan moral yang tersirat tentang perjuangan, semangat kebersamaan, dan sportivitas </li>
                                        <li>Penampilan tidak boleh mengandung SARA</li>
                                        <li>Saat take tidak menggunakan atau membaca teks</li>
                                        <li>Bahasa yang digunakan adalah bahasa Indonesia sebagai bahasa utama </li>
                                        <li>Backsound atau musik yang digunakan diperbolehkan menggunakan bahasa asing</li>
                                    </ul>
                                </div>
                            </div>
                            <a href="<?= base_url('opentalent/reg') ?>"><button class="t-reg">Daftar</button></a>
                        </div>
                        <div id="vocal-c" class="desc-collapsed">
                            <div class="t-desc">
                                <h4 class="pt-15 text-center">Syarat Khusus</h4>
                                <hr>
                                    <ul>
                                        <li>Berpakaian bebas, sopan dan rapi</li>
                                        <li>Upload video dengan membawakan 3 buah lagu (Indonesia Raya, Mars UB dan 1 buah lagu dari pilihan lagu yang telah ditentukan)</li>
                                        <li>Tidak lipsync</li>
                                        <li>Diwajibkan memakai instrumen baik audio ataupun memainkan alat musik sendiri</li>
                                        <li>Akan diambil 2 orang terpilih untuk menyanyikan lagu wajib (Indonesia Raya dan Mars UB) dan 1 lagu pilihan</li>
                                        <li>Lagu yang digunakan saat audisi juga digunakan saat tampil di Opening Ceremony Olimpiade Brawijaya 2019</li>
                                        <li>Pilihan lagu
                                            <ol type="1">
                                                <li>Comethru - Jeremy Zucker</li>
                                                <li>A Million Dreams – Pink </li>
                                                <li>Berlari Tanpa Kaki - The Overtunes</li>
                                                <li>Emotion - Maria Carey </li>
                                                <li>Aku Pasti Bisa - Citra Scholastika</li>
                                            </ol>
                                        </li>
                                    </ul>
                            </div>
                            <a href="<?= base_url('opentalent/reg') ?>">
                            <button class="t-reg">Daftar</button></div>
                            </a>
                        <div id="dance-c" class="desc-collapsed">
                            <div class="t-desc">
                                <h4 class="pt-15 text-center">Syarat Khusus</h4>
                                <hr>
                                <ul>
                                    <li>Personil minimal 5 orang dan maksimal 10 orang</li>
                                    <li>Kostum tidak boleh terlihat punggung, pinggang, perut, paha, pundak, ketiak dan dada </li>
                                    <li>Upload video dengan durasi maksimal 5 menit </li>
                                    <li>Bukan sexy dancer</li>
                                    <li>Diutamakan Koreo sendiri dan bukan dance cover</li> 
                                    <li>Baik koreografi maupun lagu pengiring tidak mengandung SARA</li>
                                    <li>Akan diambil 1 tim terpilih</li>
                                    <li>Penampilan yang ditampilkan saat audisi juga ditampilkan saat Opening Ceremony Olimpiade Brawijaya 2019</li>
                                </ul>
                            </div>
                            <a href="<?= base_url('opentalent/reg') ?>">
                            <button class="t-reg">Daftar</button>
                            </a>
                        </div>
                        <div id="band-c" class="desc-collapsed">
                            <div class="t-desc">
                                <h4 class="pt-15 text-center">Syarat Khusus</h4>
                                <hr>
                                <ul>
                                    <li>Bukan merupakan band akustik</li>
                                    <li>Personil minimal 4 orang</li>
                                    <li>Berpakaian bebas, sopan dan rapi</li>
                                    <li>Upload video dengan durasi maksimal 5 menit</li>
                                    <li>Peserta membawakan 1 buah lagu dari pilihan lagu yang telah ditentukan</li>
                                    <li>Lagu dibawakan dalam bentuk format band dan boleh diaransemen ulang</li>
                                    <li>Bukan genre underground, heavymetal ataupun rock</li>
                                    <li>Diutamakan aransemen sendiri</li>
                                    <li>Akan diambil 1 tim terpilih untuk menyanyikan lagu yang digunakan saat audisi dan lagu yang akan di informasikan lebih lanjut</li>
                                    <li>Lagu yang digunakan saat audisi juga digunakan saat tampil di Opening Ceremony Olimpiade Brawijaya 2019</li>
                                    <li>Pilihan Lagu
                                        <ol type="1">
                                            <li>Pesta – Isyana</li>
                                            <li>Ekspresi - Titi DJ</li>
                                            <li>New Rules - Dua Lipa</li>
                                            <li>Fix You - Cold Play</li>
                                            <li>My World is Full with You - Ten2Five</li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>
                            <a href="<?= base_url('opentalent/reg') ?>">
                            <button class="t-reg">Daftar</button>
                            </a>
                        </div>
                    </section>
                </div>
            </section>
    </section>