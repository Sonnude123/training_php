const http = require('http')
const server = http.createServer((req, res) => {
    console.log(req.url)
    req.end('VNTALKING: xin chao node.js')
})
server.listen(3000)