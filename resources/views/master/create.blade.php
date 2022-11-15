<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Input Data') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('success'))
            <div class="bg-teal-300 rounded-lg py-5 px-6 mb-4 text-base text-slate-800 mb-3" role="alert">
                {{session('success')}}
            </div>
            @endif
            <div>
                <x-alert-warning>
                    <span class="mdi mdi-alert-circle"></span>
                    Lengkapi data berikut
                    ini dengan benar agar pemrosean
                    dapat
                    dilakukan!
                </x-alert-warning>
            </div>
            <div class="flex mt-2">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 w-full">
                    <form method="POST" action="{{ url('master/store') }}">
                        @csrf

                        <div>
                            <p><b class="text-slate-700">1. Data Pribadi</b> </p>
                            <!-- Nama Lengkap -->
                            <div class="mt-3">
                                <x-label for="nama" :value="__('Nama Lengkap')" />

                                <x-input id="nama" class="block mt-1 w-full" type="text" name="nama"
                                    :value="old('nama')" required autofocus />
                            </div>
                            <!-- Jenis Kelamin -->
                            <div class="mt-3">
                                <x-label for="jenis_kelamin" :value="__('Jenis Kelamin')" />
                                <div>
                                    <x-input id="jenis_kelamin" class="" type="radio" name="jenis_kelamin"
                                        :value="old('jenis_kelamin')" value="L" autofocus />
                                    <span class="text-sm text-slate-700">Laki - Laki</span>
                                </div>
                                <div>
                                    <x-input id="jenis_kelamin" class="" type="radio" name="jenis_kelamin"
                                        :value="old('jenis_kelamin')" value="P" autofocus />
                                    <span class="text-sm text-slate-700">Perempuan</span>
                                </div>
                            </div>

                            <!-- Pangkat / NRP -->
                            <div class="mt-3">
                                <x-label for="pangkat_nrp" :value="__('Pangkat / NRP')" />

                                <x-input id="pangkat_nrp" class="block mt-1 w-full" type="text" name="pangkat_nrp"
                                    :value="old('pangkat_nrp')" required autofocus />
                            </div>

                            <!-- Jabatan -->
                            <div class="mt-3">
                                <x-label for="jabatan" :value="__('Jabatan')" />

                                <x-input id="jabatan" class="block mt-1 w-full" type="text" name="jabatan"
                                    :value="old('jabatan')" required autofocus />
                            </div>

                            <!-- TB / BB -->
                            <div class="mt-3">
                                <x-label for="tb_bb" :value="__('Tinggi Badan dan Berat Badan')" />

                                <x-input id="tb_bb" class="block mt-1 w-full" type="text" name="tb_bb"
                                    :value="old('tb_bb')" required autofocus />
                                <small class="text-red-400"><span class="mdi mdi-alert"></span> contoh: 170/80</small>
                            </div>
                        </div>

                        <div>
                            <p><b class="text-slate-700">2. Ukuran Baju (cm)</b> </p>

                            <!-- PANJANG BAJU -->
                            <div class="mt-3">
                                <x-label for="panjang_baju" :value="__('Panjang Baju')" />

                                <x-input id="panjang_baju" class="block mt-1 w-full" type="text" name="panjang_baju"
                                    :value="old('panjang_baju')" required autofocus />
                            </div>

                            <!-- Lebar Dada -->
                            <div class="mt-3">
                                <x-label for="lebar_dada" :value="__('Lebar Dada')" />

                                <x-input id="lebar_dada" class="block mt-1 w-full" type="text" name="lebar_dada"
                                    :value="old('lebar_dada')" required autofocus />
                            </div>

                            <!-- Lebar Pundak -->
                            <div class="mt-3">
                                <x-label for="lebar_pundak" :value="__('Lebar Pundak')" />

                                <x-input id="lebar_pundak" class="block mt-1 w-full" type="text" name="lebar_pundak"
                                    :value="old('lebar_pundak')" required autofocus />
                            </div>

                            <!-- Panjang Punggung -->
                            <div class="mt-3">
                                <x-label for="panjang_punggung" :value="__('Panjang Punggung')" />

                                <x-input id="panjang_punggung" class="block mt-1 w-full" type="text"
                                    name="panjang_punggung" :value="old('panjang_punggung')" required autofocus />
                            </div>

                            <!-- Lebar Punggung -->
                            <div class="mt-3">
                                <x-label for="lebar_punggung" :value="__('Lebar Punggung')" />

                                <x-input id="lebar_punggung" class="block mt-1 w-full" type="text" name="lebar_punggung"
                                    :value="old('lebar_punggung')" required autofocus />
                            </div>

                            <!-- Lingkar Lengan -->
                            <div class="mt-3">
                                <x-label for="lingkar_lengan" :value="__('Lingkar Lengan')" />

                                <x-input id="lingkar_lengan" class="block mt-1 w-full" type="text" name="lingkar_lengan"
                                    :value="old('lingkar_lengan')" required autofocus />
                            </div>

                            <!-- Arm Hold -->
                            <div class="mt-3">
                                <x-label for="arm_hold" :value="__('Arm Hold')" />

                                <x-input id="arm_hold" class="block mt-1 w-full" type="text" name="arm_hold"
                                    :value="old('arm_hold')" required autofocus />
                            </div>

                            <!-- Panjang Tangan Untuk Pakaian Panjang (PDL I, PDL II, PDU I, JAS RESINTEL KAM) -->
                            <div class="mt-3">
                                <x-label for="panjang_tangan_jas_panjang"
                                    :value="__('Panjang Tangan Untuk Pakaian Panjang (PDL I, PDL II, PDU I, JAS RESINTEL KAM)')" />

                                <x-input id="panjang_tangan_pakaian_panjang" class="block mt-1 w-full" type="text"
                                    name="panjang_tangan_pakaian_panjang" :value="old('panjang_tangan_pakaian_panjang')"
                                    required autofocus />
                                <small class="text-red-400"><span class="mdi mdi-alert"></span> masukan satu ukuran saja
                                    karena (PDL I, PDL II, PDU I, JAS
                                    RESINTEL KAM) itu sama saja panjangnya</small>
                            </div>

                            <!-- Panjang Tangan Untuk Pakaian Pendek (PDH, PDU IV) -->
                            <div class="mt-3">
                                <x-label for="panjang_tangan_pakaian_pendek"
                                    :value="__('Panjang Tangan Untuk Pakaian Pendek (PDH, PDU IV)')" />

                                <x-input id="panjang_tangan_pakaian_pendek" class="block mt-1 w-full" type="text"
                                    name="panjang_tangan_pakaian_pendek" :value="old('panjang_tangan_pakaian_pendek')"
                                    required autofocus />
                                <small class="text-red-400"><span class="mdi mdi-alert"></span> masukan satu ukuran saja
                                    karena (PDH, PDU IV) itu sama saja
                                    panjangnya</small>
                            </div>

                            <!-- Lingkar Ujung Lengan -->
                            <div class="mt-3">
                                <x-label for="lingkar_ujung_lengan" :value="__('Lingkar Ujung Lengan')" />

                                <x-input id="lingkar_ujung_lengan" class="block mt-1 w-full" type="text"
                                    name="lingkar_ujung_lengan" :value="old('lingkar_ujung_lengan')" required
                                    autofocus />
                            </div>

                            <!-- Lingkar Dada -->
                            <div class="mt-3">
                                <x-label for="lingkar_ujung_dada" :value="__('Lingkar Dada')" />

                                <x-input id="lingkar_ujung_dada" class="block mt-1 w-full" type="text"
                                    name="lingkar_ujung_dada" :value="old('lingkar_ujung_dada')" required autofocus />
                            </div>

                            <!-- Lingkar Pinggang -->
                            <div class="mt-3">
                                <x-label for="lingkar_pinggang" :value="__('Lingkar Pinggang')" />

                                <x-input id="lingkar_pinggang" class="block mt-1 w-full" type="text"
                                    name="lingkar_pinggang" :value="old('lingkar_pinggang')" required autofocus />
                            </div>

                            <!-- Lingkar Leher -->
                            <div class="mt-3">
                                <x-label for="lingkar_leher" :value="__('Lingkar Leher')" />

                                <x-input id="lingkar_leher" class="block mt-1 w-full" type="text" name="lingkar_leher"
                                    :value="old('lingkar_leher')" required autofocus />
                            </div>

                            <!-- Lingkar Panggul -->
                            <div class="mt-3">
                                <x-label for="lingkar_panggul" :value="__('Lingkar Panggul')" />

                                <x-input id="lingkar_panggul" class="block mt-1 w-full" type="text"
                                    name="lingkar_panggul" :value="old('lingkar_panggul')" required autofocus />
                            </div>

                        </div>

                        <div>
                            <p><b class="text-slate-700">3. Ukuran Celana (cm)</b> </p>

                            <!-- Panjang Celana / Rok -->
                            <div class="mt-3">
                                <x-label for="panjang_celanan_rok" :value="__('Panjang Celana / Rok')" />

                                <x-input id="panjang_celanan_rok" class="block mt-1 w-full" type="text"
                                    name="panjang_celanan_rok" :value="old('panjang_celanan_rok')" required autofocus />
                            </div>

                            <!-- Lingkar Pinggang -->
                            <div class="mt-3">
                                <x-label for="lingkar_pinggang" :value="__('Lingkar Pinggang')" />

                                <x-input id="lingkar_pinggang" class="block mt-1 w-full" type="text"
                                    name="lingkar_pinggang" :value="old('lingkar_pinggang')" required autofocus />
                            </div>

                            <!-- Lingkar Pinggul -->
                            <div class="mt-3">
                                <x-label for="lingkar_pinggul" :value="__('Lingkar Pinggul')" />

                                <x-input id="lingkar_pinggul" class="block mt-1 w-full" type="text"
                                    name="lingkar_pinggul" :value="old('lingkar_pinggul')" required autofocus />
                            </div>

                            <!-- Pesak / Kil -->
                            <div class="mt-3">
                                <x-label for="pesak_kil" :value="__('Pesak / Kil')" />

                                <x-input id="pesak_kil" class="block mt-1 w-full" type="text" name="pesak_kil"
                                    :value="old('pesak_kil')" required autofocus />
                            </div>

                            <!-- Lingkar Paha -->
                            <div class="mt-3">
                                <x-label for="lingkar_paha" :value="__('Lingkar Paha')" />

                                <x-input id="lingkar_paha" class="block mt-1 w-full" type="text" name="lingkar_paha"
                                    :value="old('lingkar_paha')" required autofocus />
                            </div>

                            <!-- Lingkar Lutut -->
                            <div class="mt-3">
                                <x-label for="lingkar_lutut" :value="__('Lingkar Lutut')" />

                                <x-input id="lingkar_lutut" class="block mt-1 w-full" type="text" name="lingkar_lutut"
                                    :value="old('lingkar_lutut')" required autofocus />
                            </div>

                            <!-- Lingkar Bawah -->
                            <div class="mt-3">
                                <x-label for="lingkar_bawah" :value="__('Lingkar Bawah')" />

                                <x-input id="lingkar_bawah" class="block mt-1 w-full" type="text" name="lingkar_bawah"
                                    :value="old('lingkar_bawah')" required autofocus />
                            </div>

                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-3">
                                {{ __('Proses Data') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
