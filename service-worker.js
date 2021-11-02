var CACHE_NAME = 'pwgen-cache-v1';
var urlsToCache = [
    'service-worker.js',
    'manifest.json',
    'styles/main_styles.css',
    'js/custom.js',
    'js/jquery-3.2.1.min.js',
    'imgages/certeza.png',
    'imgages/logo2.png'
];
console.log('loading ...');

self.addEventListener('install', function(event) {
    // Perform install steps
    console.log('installing sw');
    event.waitUntil(
        caches.open(CACHE_NAME)
            .then(function(cache) {
                console.log('Opened cache');
                var x = cache.addAll(urlsToCache);
                console.log('cache added');
                return x;
            })
    );
});

self.addEventListener('fetch', function(event) {
    event.respondWith(
        caches.match(event.request)
            .then(function(response) {
                    // Cache hit - return response
                    if (response) {
                        return response;
                    }
                    return fetch(event.request);
                }
            )
    );
});