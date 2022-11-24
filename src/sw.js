self.addEventListener('install', (e) => {
    console.log('[Service Worker] Install');
});

const cacheName = 'mrfix-cache';

const appShellFiles = [
    'dist/output.css',
    'manifest.webmanifest',
    'src/app.js',
    'src/components/navbar.html',
    'src/css/input.css',
    'src/icons/back_arrow.svg',
    'src/icons/booking.svg',
    'src/icons/chat.svg',
    'src/icons/mrfix-logo-en.svg',
    'src/icons/notification_bell.svg',
    'src/icons/profile.svg',
    'src/icons/request.svg',
    'src/pages/index.html',
    'src/pages/job_offer.html',
    'src/pages/profile.html',
    'src/sw.js',
];

self.addEventListener('install', (e) => {
    console.log('[Service Worker] Install');
    e.waitUntil((async () => {
        const cache = await caches.open(cacheName);
        console.log('[Service Worker] Caching all: app shell and content');
        await cache.addAll(contentToCache);
    })());
});

self.addEventListener('fetch', (e) => {
    e.respondWith((async () => {
        const r = await caches.match(e.request);
        console.log(`[Service Worker] Fetching resource: ${e.request.url}`);

        if (r) { return r; }

        const response = await fetch(e.request);
        const cache = await caches.open(cacheName);
        console.log(`[Service Worker] Caching new resource: ${e.request.url}`);
        cache.put(e.request, response.clone());
        return response;
    })());
});
