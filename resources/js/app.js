import Alpine from 'alpinejs';
import { createIcons, icons } from 'lucide';

// Make Lucide available
window.refreshIcons = () => {
    createIcons({ icons });
};

document.addEventListener('alpine:init', () => {
    Alpine.data('landingApp', () => ({
        // Dark Mode - default to light
        darkMode: localStorage.getItem('theme') === 'dark',
        toggleTheme() {
            this.darkMode = !this.darkMode;
            localStorage.setItem('theme', this.darkMode ? 'dark' : 'light');
            if (this.darkMode) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        },

        // Nav Mobile Menu
        mobileMenuOpen: false,

        // Service & Portfolio Tabs
        activeServiceTab: 'all', // 'all', 'website', 'undangan'
        activePricingTab: 'website', // 'website', 'undangan'

        // Digital Invitation Interactive Mockup
        invitationMockup: {
            isOpened: false,
            isPlayingAudio: false,
            audioElement: null,
            guestName: 'Bpk. Hendra Wijaya & Keluarga',
            days: 14,
            hours: 8,
            minutes: 32,
            seconds: 45,
            init() {
                setInterval(() => {
                    if (this.seconds > 0) {
                        this.seconds--;
                    } else {
                        this.seconds = 59;
                        if (this.minutes > 0) {
                            this.minutes--;
                        } else {
                            this.minutes = 59;
                            if (this.hours > 0) {
                                this.hours--;
                            } else {
                                this.hours = 23;
                                this.days--;
                            }
                        }
                    }
                }, 1000);
            },
            toggleEnvelope() {
                this.isOpened = !this.isOpened;
                if (this.isOpened && !this.isPlayingAudio) {
                    this.isPlayingAudio = true;
                }
            },
            toggleAudio() {
                this.isPlayingAudio = !this.isPlayingAudio;
            }
        },

        // Portfolio Preview Modal
        portfolioModal: {
            open: false,
            item: null,
            show(portfolioItem) {
                this.item = portfolioItem;
                this.open = true;
                setTimeout(() => window.refreshIcons(), 50);
            },
            close() {
                this.open = false;
                this.item = null;
            }
        },

        // Contact Modal
        contactModalOpen: false,
        consultationForm: {
            name: '',
            phone: '',
            service: 'website',
            budget: 'standar',
            notes: '',
            submit() {
                const targetPhone = '6281234567890';
                const serviceLabel = this.service === 'website' ? 'Pembuatan Website' : (this.service === 'undangan' ? 'Undangan Digital' : 'Keduanya (Website & Undangan)');
                let text = `Halo GunaDigital! Saya ingin konsultasi:%0A%0A`;
                text += `👤 *Nama:* ${encodeURIComponent(this.name)}%0A`;
                text += `📱 *WhatsApp:* ${encodeURIComponent(this.phone)}%0A`;
                text += `🎯 *Layanan:* ${encodeURIComponent(serviceLabel)}%0A`;
                text += `💼 *Budget Perkiraan:* ${encodeURIComponent(this.budget)}%0A`;
                if (this.notes) {
                    text += `📝 *Catatan Kebutuhan:* ${encodeURIComponent(this.notes)}%0A`;
                }
                window.open(`https://wa.me/${targetPhone}?text=${text}`, '_blank');
            }
        },

        // Active FAQ accordion item
        activeFaq: null,
        toggleFaq(index) {
            this.activeFaq = this.activeFaq === index ? null : index;
        },

        init() {
            if (this.darkMode) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
            this.invitationMockup.init();

            // Refresh icons after Alpine initializes
            this.$nextTick(() => {
                window.refreshIcons();
            });
        }
    }));
});

window.Alpine = Alpine;
Alpine.start();

// Initialize icons on DOM ready
document.addEventListener('DOMContentLoaded', () => {
    window.refreshIcons();
});
