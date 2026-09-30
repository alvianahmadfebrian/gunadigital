<x-layouts.app :title="'Kebijakan Pengembalian Dana - GunaDigital'">
    <div class="py-12 sm:py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            <nav class="flex items-center gap-2 text-xs font-medium text-slate-500 mb-8" aria-label="Breadcrumb">
                <a href="{{ route('home') }}" class="hover:text-blue-600 transition-colors">Beranda</a>
                <span class="text-slate-300">/</span>
                <span class="text-slate-400">Legal & Kebijakan</span>
                <span class="text-slate-300">/</span>
                <span class="text-blue-600 font-semibold">Kebijakan Pengembalian Dana</span>
            </nav>

            <div class="bg-gradient-to-br from-emerald-600 to-teal-700 rounded-3xl p-8 sm:p-12 text-white shadow-xl shadow-emerald-500/20 mb-10 relative overflow-hidden">
                <div class="absolute -top-16 -right-16 w-64 h-64 bg-white/10 rounded-full blur-2xl pointer-events-none"></div>
                <div class="relative z-10 space-y-3">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-white/15 text-emerald-100 border border-white/20">
                        <span>Transparansi & Garansi</span>
                    </div>
                    <h1 class="text-3xl sm:text-4xl font-black tracking-tight">
                        Kebijakan Pengembalian Dana (Refund Policy)
                    </h1>
                    <p class="text-emerald-100 text-sm sm:text-base max-w-2xl leading-relaxed">
                        Kami berkomitmen memberikan kepuasan maksimal atas setiap proyek digital yang kami kerjakan dengan kebijakan pengembalian dana yang jelas dan transparan.
                    </p>
                    <div class="pt-2 flex items-center gap-4 text-xs text-emerald-200">
                        <span>Terakhir diperbarui: {{ date('d F Y') }}</span>
                        <span>•</span>
                        <span>Garansi Kepuasan Klien</span>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-3xl p-8 sm:p-12 border border-slate-200 shadow-sm space-y-10 text-slate-700 leading-relaxed">

                <section class="space-y-3">
                    <div class="flex items-center gap-3">
                        <span class="w-8 h-8 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-sm">1</span>
                        <h2 class="text-xl font-bold text-slate-900">Prinsip Kepuasan & Garansi Revisi Terlebih Dahulu</h2>
                    </div>
                    <p class="text-sm pl-11 text-slate-600">
                        Prioritas utama kami adalah menghasilkan karya website atau undangan digital yang melebihi ekspektasi Anda. Jika terdapat ketidaksesuaian desain atau fitur, kami selalu mengedepankan proses revisi dan konsultasi intensif untuk menyempurnakan proyek Anda sebelum opsi refund dipertimbangkan.
                    </p>
                </section>

                <section class="space-y-3">
                    <div class="flex items-center gap-3">
                        <span class="w-8 h-8 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-sm">2</span>
                        <h2 class="text-xl font-bold text-slate-900">Kondisi yang Memenuhi Syarat Pengembalian Dana</h2>
                    </div>
                    <div class="text-sm pl-11 space-y-3 text-slate-600">
                        <p>Klien berhak mengajukan pengembalian dana (refund) dalam kondisi berikut:</p>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                            <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 space-y-2">
                                <span class="font-bold text-slate-900 block text-xs uppercase tracking-wider text-emerald-600">Keterlambatan Pengerjaan</span>
                                <p class="text-xs text-slate-600">Proyek tidak dapat diselesaikan oleh tim kami melebihi 2x batas estimasi waktu yang disepakati tanpa alasan force majeure.</p>
                            </div>
                            <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 space-y-2">
                                <span class="font-bold text-slate-900 block text-xs uppercase tracking-wider text-emerald-600">Pembatalan Sebelum Pengerjaan</span>
                                <p class="text-xs text-slate-600">Klien membatalkan pesanan sebelum proses desain dan coding dimulai (maksimal dalam 2 jam setelah konfirmasi pembayaran DP).</p>
                            </div>
                            <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 space-y-2 sm:col-span-2">
                                <span class="font-bold text-slate-900 block text-xs uppercase tracking-wider text-emerald-600">Ketidakmampuan Teknis</span>
                                <p class="text-xs text-slate-600">Fitur inti spesifik yang telah dijanjikan dan disepakati di awal tidak dapat diimplementasikan karena kendala teknis dari pihak kami.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="space-y-3">
                    <div class="flex items-center gap-3">
                        <span class="w-8 h-8 rounded-xl bg-rose-100 text-rose-700 flex items-center justify-center font-bold text-sm">3</span>
                        <h2 class="text-xl font-bold text-slate-900">Kondisi yang Tidak Memenuhi Syarat Refund</h2>
                    </div>
                    <div class="text-sm pl-11 space-y-3 text-slate-600">
                        <ul class="list-disc pl-5 space-y-2">
                            <li><strong>Biaya Registrasi Pihak Ketiga:</strong> Biaya pembelian nama domain kustom (.com/.id) dan langganan server cloud hosting yang sudah aktif terdaftar atas nama klien bersifat non-refundable (tidak dapat diuangkan kembali oleh registrar domain).</li>
                            <li><strong>Proyek Telah Diserahkan & Disetujui:</strong> Setelah Klien memberikan konfirmasi persetujuan (approval) dan pelunasan pembayaran dilakukan.</li>
                            <li><strong>Pembatalan Sepihak Karena Perubahan Rencana Klien:</strong> Pembatalan sepihak saat pengerjaan desain/coding telah mencapai lebih dari 50% atau karena acara/bisnis Klien batal dilaksanakan oleh alasan internal Klien.</li>
                            <li><strong>Keterlambatan Karena Materi Klien:</strong> Keterlambatan proyek yang disebabkan Klien terlambat mengirimkan foto, materi, atau konfirmasi revisi.</li>
                        </ul>
                    </div>
                </section>

                <section class="space-y-3">
                    <div class="flex items-center gap-3">
                        <span class="w-8 h-8 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-sm">4</span>
                        <h2 class="text-xl font-bold text-slate-900">Alur & Prosedur Pengajuan Refund</h2>
                    </div>
                    <div class="text-sm pl-11 space-y-3 text-slate-600">
                        <ol class="list-decimal pl-5 space-y-2">
                            <li>Hubungi Admin Support kami via WhatsApp atau Email dengan menyertakan <strong>Nomor Invoice / Bukti Transfer</strong> dan <strong>Alasan Pengajuan Refund</strong>.</li>
                            <li>Tim kami akan memverifikasi status pengerjaan proyek dan kelayakan permohonan dalam waktu 1x24 jam kerja.</li>
                            <li>Jika disetujui, dana akan ditransfer kembali ke nomor rekening bank asal pengirim dalam waktu <strong>1 hingga 3 hari kerja</strong> (dipotong biaya domain pihak ketiga jika ada).</li>
                        </ol>
                    </div>
                </section>

                <section class="space-y-3">
                    <div class="flex items-center gap-3">
                        <span class="w-8 h-8 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-sm">5</span>
                        <h2 class="text-xl font-bold text-slate-900">Bantuan & Konsultasi Garansi</h2>
                    </div>
                    <p class="text-sm pl-11 text-slate-600">
                        Tim kami selalu siap membantu menyelesaikan kendala Anda secara ramah dan profesional. Silakan hubungi kami via WhatsApp di <a href="https://wa.me/6281234567890?text=Halo%20Admin,%20saya%20ingin%20konsultasi%20mengenai%20kebijakan%20layanan/refund" target="_blank" class="text-emerald-600 font-bold hover:underline">+62 812-3456-7890</a> atau melalui <a href="{{ route('contact') }}" class="text-blue-600 font-bold hover:underline">Halaman Kontak</a>.
                    </p>
                </section>

            </div>

        </div>
    </div>
</x-layouts.app>
