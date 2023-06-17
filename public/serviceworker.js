var staticCacheName = "pwa-v" + new Date().getTime();
var filesToCache = [
    "/offline",
    "/css/app.min.css",
    "/js/app.min.js",
    "/images/icons/icon-72x72.svg",
    "/images/icons/icon-96x96.svg",
    "/images/icons/icon-128x128.svg",
    "/images/icons/icon-144x144.svg",
    "/images/icons/icon-152x152.svg",
    "/images/icons/icon-192x192.svg",
    "/images/icons/icon-384x384.svg",
    "/images/icons/icon-512x512.svg",
    "/images/icons/splash-640x1136.svg",
    "/images/icons/splash-750x1334.svg",
    "/images/icons/splash-1242x2208.svg",
    "/images/icons/splash-1125x2436.svg",
    "/images/icons/splash-828x1792.svg",
    "/images/icons/splash-1242x2688.svg",
    "/images/icons/splash-1536x2048.svg",
    "/images/icons/splash-1668x2224.svg",
    "/images/icons/splash-1668x2388.svg",
    "/images/icons/splash-2048x2732.svg",
];

// Cache on install
self.addEventListener("install", (event) => {
    this.skipWaiting();
    event.waitUntil(
        caches.open(staticCacheName).then((cache) => {
            return cache.addAll(filesToCache);
        })
    );
});

// Clear cache on activate
self.addEventListener("activate", (event) => {
    event.waitUntil(
        caches.keys().then((cacheNames) => {
            return Promise.all(
                cacheNames
                    .filter((cacheName) => cacheName.startsWith("pwa-"))
                    .filter((cacheName) => cacheName !== staticCacheName)
                    .map((cacheName) => caches.delete(cacheName))
            );
        })
    );
});

// Serve from Cache
self.addEventListener("fetch", (event) => {
    event.respondWith(
        caches
            .match(event.request)
            .then((response) => {
                return response || fetch(event.request);
            })
            .catch(() => {
                return caches.match("offline");
            })
    );
});
