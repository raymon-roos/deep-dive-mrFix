self.addEventListener('install', (e) => {
    console.log('[Service Worker] Install');
});

const cacheName = 'mrfix-cache';

const appShellFiles = [
    './app.js',
    './components/navbar.html',
    './css/input.css',
    './icons/back_arrow.svg',
    './icons/booking.svg',
    './icons/chat.svg',
    './icons/mrfix-logo-en.svg',
    './icons/notification_bell.svg',
    './icons/profile.svg',
    './icons/request.svg',
    './pages/index.html',
    './pages/job_offer.html',
    './pages/profile.html',
    './sw.js',
];
