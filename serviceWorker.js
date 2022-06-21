const MaWebCache = "MA-WEB"
const assets = [
  "/index.php",
  "/assests/css/bootstrap.min.css",
  "/assests/js/bootstrap.bundle.js"
]

self.addEventListener("install", installEvent => {
  installEvent.waitUntil(
    caches.open(MaWebCache).then(cache => {
      cache.addAll(assets)
    })
  )
})

self.addEventListener("fetch", fetchEvent => {
    fetchEvent.respondWith(
      caches.match(fetchEvent.request).then(res => {
        return res || fetch(fetchEvent.request)
      })
    )
  })