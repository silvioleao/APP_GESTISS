var staticCacheName = "pwa-v" + new Date().getTime();
var filesToCache = [
    "/offline",
    "/css/app.min.css",
    "/js/app.min.js",
    "/images/icons/png/icon-48x48.png",
    "/images/icons/png/icon-72x72.png",
    "/images/icons/png/icon-96x96.png",
    "/images/icons/png/icon-128x128.png",
    "/images/icons/png/icon-144x144.png",
    "/images/icons/png/icon-152x152.png",
    "/images/icons/png/icon-192x192.png",
    "/images/icons/png/icon-384x384.png",
    "/images/icons/png/icon-512x512.png",
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
