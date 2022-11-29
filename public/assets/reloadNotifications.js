userId = 12;
window.addEventListener('load', function() {
    const url = new URL("http://127.0.0.1:3000/.well-known/mercure");
    url.searchParams.append('topic', 'http://127.0.0.1:8000/addContract/'+userId)
    const eventSource = new EventSource(url);
    eventSource.addEventListener('message', function(event){
        console.log("done");
    });
console.log("mercure connected");
});
