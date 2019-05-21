let button = document.querySelector('button');
button.addEventListener("click", function() {

    fetch('../partials/fetch.php')
    .then(function(response) {
        return response.text();
    })
    .then(function(data) {
        console.log(data);
})
});

