
<div x-show="contactModalOpen"
     x-cloak
     class="fixed inset-0 z-50 overflow-y-auto"
     style="display: none;">

    <div class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm transition-opacity"
         @click="contactModalOpen = false"></div>

    <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
        <div @click.away="contactModalOpen = false"
             x-show="contactModalOpen"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
             x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
             class="relative transform overflow-hidden rounded-3xl bg-white border border-blue-100 text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-lg p-6 sm:p-8">

            <button @click="contactModalOpen = false"
                    type="button"
                    class="absolute top-5 right-5 p-2 rounded-full text-slate-400 hover:text-slate-600 hover:bg-slate-100 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>

            <div class="space-y-1 mb-6">
                <div class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[11px] font-bold uppercase tracking-wider bg-blue-50 text-blue-600 border border-blue-100">
                    Konsultasi Gratis
                </div>
                <h3 class="text-2xl font-bold text-slate-900">
                    Ceritakan Kebutuhan Proyek Anda
                </h3>
                <p class="text-xs text-slate-500">
                    Isi formulir singkat di bawah ini dan kami akan segera menghubungi Anda melalui WhatsApp dengan solusi dan penawaran terbaik.
                </p>
            </div>

            <form @submit.prevent="consultationForm.submit(); contactModalOpen = false" class="space-y-4 text-left">

                <div>
                    <label class="block text-xs font-semibold text-slate-700 mb-1">Nama Lengkap / Bisnis *</label>
                    <input type="text"
                           required
                           x-model="consultationForm.name"
                           placeholder="Contoh: Budi Santoso / PT Sukses Bersama"
                           class="w-full px-4 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 text-sm focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:outline-none transition-all">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-700 mb-1">Nomor WhatsApp Aktif *</label>
                    <input type="tel"
                           required
                           x-model="consultationForm.phone"
                           placeholder="Contoh: 081234567890"
                           class="w-full px-4 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 text-sm focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:outline-none transition-all">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-700 mb-1">Layanan yang Dibutuhkan *</label>
                    <select x-model="consultationForm.service"
                            class="w-full px-4 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 text-sm focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:outline-none transition-all">
                        <option value="website">Jasa Pembuatan Website (Company Profile / Landing Page / Toko Online)</option>
                        <option value="undangan">Jasa Undangan Digital (Pernikahan / Khitanan / Event)</option>
                        <option value="keduanya">Keduanya (Website & Undangan Digital)</option>
                    </select>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-700 mb-1">Estimasi Alokasi Budget</label>
                    <select x-model="consultationForm.budget"
                            class="w-full px-4 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 text-sm focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:outline-none transition-all">
                        <option value="Di bawah 500 Ribu">Di bawah Rp 500.000 (Paket Hemat)</option>
                        <option value="500 Ribu - 1 Juta">Rp 500.000 - Rp 1.000.000 (Standar UMKM / Gold)</option>
                        <option value="1 Juta - 3 Juta">Rp 1.000.000 - Rp 3.000.000 (Business Pro / E-Commerce)</option>
                        <option value="Di atas 3 Juta">> Rp 3.000.000 (Custom Platform / Korporat)</option>
                    </select>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-700 mb-1">Catatan Tambahan (Opsional)</label>
                    <textarea x-model="consultationForm.notes"
                              rows="2"
                              placeholder="Ceritakan fitur khusus atau referensi yang Anda inginkan..."
                              class="w-full px-4 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 text-sm focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:outline-none transition-all"></textarea>
                </div>

                <div class="pt-2">
                    <button type="submit"
                            class="w-full py-3.5 px-6 rounded-xl font-bold text-sm text-white bg-blue-600 hover:bg-blue-700 shadow-lg shadow-blue-500/25 transition-all flex items-center justify-center gap-2">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.311.045-.698.059-1.146-.073-.308-.09-.692-.224-1.211-.448-2.222-.962-3.666-3.218-3.777-3.367-.112-.149-.906-1.205-.906-2.298 0-1.094.574-1.632.778-1.854.204-.222.446-.278.595-.278.149 0 .298.002.428.008.139.007.324-.053.506.386.19.459.648 1.58.705 1.694.057.114.095.247.019.398-.076.152-.114.247-.228.38-.114.133-.24.298-.343.4-.114.114-.233.238-.101.465.133.227.591.975 1.267 1.579.871.777 1.605 1.018 1.833 1.132.228.114.362.095.495-.057.133-.152.572-.666.724-.894.152-.228.305-.19.513-.114.209.076 1.32.622 1.548.736.228.114.38.171.437.266.057.095.057.552-.087.957z"/>
                        </svg>
                        <span>Kirim Konsultasi ke WhatsApp</span>
                    </button>
                    <span class="block text-[11px] text-center text-slate-500 mt-2">
                        Respon cepat dalam hitungan menit pada jam operasional.
                    </span>
                </div>
            </form>

        </div>
    </div>
</div>
