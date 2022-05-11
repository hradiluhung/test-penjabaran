<style>
    html {
        margin: 40px;
    }

    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: calibri, Helvetica, sans-serif;
    }

    .table__header {
        padding: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid black;
        position: relative;
    }

    .table__logo {
        position: absolute;
        left: 15px;
    }

    .table__title {
        text-align: center;
    }

    .table__title * {
        margin-bottom: 10px;
    }

    .table__desc {
        padding: 15px;
        border: 1px solid black;
    }

    .table__desc-text tr td:nth-child(1) {
        width: 200px;
        font-weight: bold;
    }

    .table__desc-text tr td:nth-child(2) {
        width: 20px;
    }

    .table__desc-text tr td:nth-child(3) {
        width: 120px;
    }

    .table__content tr,
    .table__content th,
    .table__content td {
        border: 1px solid black;
    }

    .table__content {
        width: 100%;
        border: 2px solid black;
    }

    .table__content thead {
        border: 2px solid black;
    }

    .table__content th,
    .table__content td {
        padding: 5px;
    }

    .kode-rekening {
        text-align: left;
        width: 12%;
    }

    .uraian {
        text-align: left;
        width: 30%;
    }

    .uraian-1 span {
        padding-left: 0;
        font-weight: bold;
    }

    .uraian-2 span {
        padding-left: 30px;
        font-weight: bold;
    }

    .uraian-4 span {
        padding-left: 60px;
        font-weight: bold;
    }

    .uraian-5 span {
        padding-left: 90px;
    }

    .uraian-6 span {
        padding-left: 120px;
    }

    .anggaran,
    .realisasi,
    .bertambah-rp,
    .bertambah-persen {
        text-align: right;
    }

    .bertambah-rp,
    .bertambah-persen {
        width: 10%;
    }

    .anggaran,
    .realisasi {
        width: 12%;
    }

    .penjelasan {
        width: 23%;
        position: relative;
    }

    .penjelasan span, .jumlah-keseluruhan span {
        float: right;
    }

    .penjelasan .jumlah-penjelasan {
        font-weight: bold;
    }

    .table__jumlah {
        font-weight: bold;
    }

    .table__footer {
        padding-top: 30px;
        display: flex;
        justify-content: flex-end;
    }

    .table__sign-container {
        margin-right: 100px;
        text-align: center;
        float: right;
    }

    .table__sign {
        height: 80px;
    }

    .table__sign-nama {
        text-decoration: underline;
    }

</style>

<div class="table__container">
    <header class="table__header">
        <div class="table__logo">
            <img src="logo.png" alt="" width="80px" />
        </div>
        <div class="table__title">
            <h4>PEMERINTAH KABUPATEN PURWOREJO</h4>
            <h2>
                PENJABARAN LAPORAN REALISASI ANGGARAN PENDAPATAN DAN BELANJA
                DAERAH
            </h2>
            <p>TAHUN ANGGARAN 2020</p>
        </div>
    </header>
    <div class="table__desc">
        <table class="table__desc-text">
            <tr>
                <td>Urusan Pemerintahan</td>
                <td>:</td>
                <td>4 . 01</td>
                <td>
                    Urusan Pemerintahan Fungsi Penunjang Administrasi
                    Pemerintahan
                </td>
            </tr>
            <tr>
                <td>Unit Organisasi</td>
                <td>:</td>
                <td>4 . 01 . 02</td>
                <td>BUPATI/WAKIL BUPATI</td>
            </tr>
        </table>
    </div>
    <table class="table__content" style="border-collapse: collapse">
        @if($repeatHeader)
        <thead>
        @endif
            <tr>
                <th rowspan="2">KODE REKENING</th>
                <th rowspan="2">URAIAN</th>
                <th colspan="2">JUMLAH (Rp)</th>
                <th colspan="2">BERTAMBAH / (BERKURANG)</th>
                <th rowspan="2">PENJELASAN</th>
            </tr>
            <tr>
                <th>ANGGGARAN SETELAH PERUBAHAN</th>
                <th>REALISASI</th>
                <th>(Rp)</th>
                <th>(%)</th>
            </tr>
            <tr>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
            </tr>
        @if($repeatHeader)
        </thead>
        @endif
        <tr>
            <td class="kode-rekening">5</td>
            <td class="uraian uraian-1"><span>BELANJA</span></td>
            <td class="anggaran">1.224.750.560,00</td>
            <td class="realisasi">745.210.280,00</td>
            <td class="bertambah-rp">-479.540.280,00</td>
            <td class="bertambah-persen">60,85</td>
            <td class="penjelasan"></td>
        </tr>
        <tr>
            <td class="kode-rekening">5.1</td>
            <td class="uraian uraian-2"><span>BELANJA TIDAK LANGSUNG</span></td>
            <td class="anggaran">1.224.750.560,00</td>
            <td class="realisasi">745.210.280,00</td>
            <td class="bertambah-rp">-479.540.280,00</td>
            <td class="bertambah-persen">60,85</td>
            <td class="penjelasan"></td>
        </tr>
        <tr>
            <td class="kode-rekening">5.1.00.00.1</td>
            <td class="uraian uraian-4"><span>Belanja Pegawai</span></td>
            <td class="anggaran">1.224.750.560,00</td>
            <td class="realisasi">745.210.280,00</td>
            <td class="bertambah-rp">-479.540.280,00</td>
            <td class="bertambah-persen">60,85</td>
            <td class="penjelasan"></td>
        </tr>
        <tr>
            <td class="kode-rekening">5.1.00.00.1.01</td>
            <td class="uraian uraian-5">
                <span>Belanja, Gaji, dan Tunjangan</span>
            </td>
            <td class="anggaran">624.750.560,00</td>
            <td class="realisasi">145.840.280,00</td>
            <td class="bertambah-rp">-478.910.280,00</td>
            <td class="bertambah-persen">23,34</td>
            <td class="penjelasan"></td>
        </tr>
        <tr>
            <td class="kode-rekening">5.1.00.00.1.01.01</td>
            <td class="uraian uraian-6">
                <span>Gaji Pokok PNS/Uang Representasis</span>
            </td>
            <td class="anggaran">499.031.540,00</td>
            <td class="realisasi">46.800.000,00</td>
            <td class="bertambah-rp">-452.231.540,00</td>
            <td class="bertambah-persen">9,38</td>
            <td class="penjelasan">
                Bulan Januari 2020<span>3.900.000,00</span>
            </td>
        </tr>
        <tr>
            <td class="kode-rekening"></td>
            <td class="uraian uraian-6">
                <span></span>
            </td>
            <td class="anggaran"></td>
            <td class="realisasi"></td>
            <td class="bertambah-rp"></td>
            <td class="bertambah-persen"></td>
            <td class="penjelasan">
                Bulan Februari 2020<span>3.900.000,00</span>
            </td>
        </tr>
        <tr>
            <td class="kode-rekening"></td>
            <td class="uraian uraian-6">
                <span></span>
            </td>
            <td class="anggaran"></td>
            <td class="realisasi"></td>
            <td class="bertambah-rp"></td>
            <td class="bertambah-persen"></td>
            <td class="penjelasan">
                Total<span class="jumlah-penjelasan">7.800.000,00</span>
            </td>
        </tr>
        <tr class="table__jumlah">
            <td class=""></td>
            <td class="">SURPLUS/(DEFISIT)</td>
            <td class="">-28.975.445.622,00</td>
            <td class="">-27.903.375.541,00</td>
            <td class="">1.072.070.081,00</td>
            <td class="">96,30</td>
            <td class="jumlah-keseluruhan">
                <span class="">27.903.375.541</span>
            </td>
        </tr>
    </table>
    <div class="table__footer">
        <div class="table__sign-container">
            <p class="table__sign-tanggal">Purworejo, 31 Desember 2020</p>
            <h4 class="table__sign-jabatan">SEKRETARIAT DAERAH</h4>
            <div class="table__sign"></div>
            <p class="table__sign-nama">Drs. SAID ROMADHON</p>
            <p class="table__sign-nip">NIP. 19640122 198903 1 004</p>
        </div>
    </div>
</div>
