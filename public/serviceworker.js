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
self.addEventListener("install", async (event) => {
    //this.skipWaiting();
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

//Push notifications
self.addEventListener("push", function (event) {
    const payload = event.data ? event.data.text() : "no payload";
    let obj = JSON.parse(
        `{"custom":{"i":"a6f8644f-68f9-4fd7-8bf4-f4e238ec0a65"},"alert":"TESTE EM PORTUGUES","icon":"https://img.onesignal.com/permanent/24cd4c4b-f758-4fd1-8b39-842bb4e15500/sUXAY89LTqJrV4mmLacI_icon-96x96.png"}`
    );
    // Keep the service worker alive until the notification is created.
    event.waitUntil(
        self.registration.showNotification("GESTISS", {
            body: obj.alert,
            icon: obj.icon,
            vibrate: [200, 100, 200, 100, 200, 100, 200],
            actions: [
                {
                    action: "https://pwa.sertsoft.com.br/atendimentos",
                    title: "Coffee",
                    type: "button",
                },
            ],
        })
    );
});
