let button = document.querySelector('#attack');
button.addEventListener("click", function() {
let wait = 0;

if(wait == 0){
    fetch('../partials/fetch.php')
    .then(function(response) {
        return response.text();
    })
    .then(function(data) {
        // window.location.refresh();
        let donnee = data.split('|');
        wait = 1;
        document.querySelector('#testbot').innerHTML = donnee[1];
        
        let pouleb = document.getElementById("poule-player");
        pouleb.style.display = "block";  
        pouleb.classList.add('test-poule');
        
        pouleb.animate([
            // keyframes
            { transform: 'translateX(0px)' }, 
            { transform: 'translateX(550px)' }
          ], { 
            // timing options
            duration: 1000
          });
        setTimeout(() => {
            pouleb.style.display = "none";
        }, 1200);

        setTimeout(() => {
            let poulea = document.getElementById("poule-bot");

        document.querySelector('#testplayer').innerHTML = donnee[0];
            poulea.style.display = "block";
            wait = 0;
            
            poulea.classList.add('test-poule');

            poulea.animate([
                // keyframes
                { transform: 'translateX(0px)' }, 
                { transform: 'translateX(-530px)' }
              ], { 
                // timing options
                duration: 1000
              });
            setTimeout(() => {
                poulea.style.display = "none";
            }, 1150);

        }, 2000);
    })

} 
});

