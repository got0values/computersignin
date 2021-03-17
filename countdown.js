function countDown () {    
    const datenow = document.querySelectorAll('#datenow');
    const timeexp = document.querySelectorAll('#timeexp');
    const tData = document.querySelectorAll('#tData');

    function getMinutesSeconds (datenow, timeexp, tData) {
        // Set the date we're counting down to
        const countDownDate = new Date(`${datenow.value} ${timeexp.value}`).getTime();
        console.log(datenow.value, timeexp.value, Date());

        // Update the count down every 1 second
        const x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();
                
            // Find the distance between now and the count down date
            var distance = countDownDate - now;
                
            // Time calculations for days, hours, minutes and seconds
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result
            tData.innerHTML = minutes + "m " + seconds + "s ";        

            // If the count down is over, write some text 
            if (distance < 0) {
                clearInterval(x);
                tData.innerHTML = 'EXPIRED';
            }
        }, 1000);
    }
    for (let i = 0; i < datenow.length; i++) {
        getMinutesSeconds (datenow[i], timeexp[i], tData[i]);
    }
}



// function CountDown (datenow, timeexp) {
//     // const timeexp = document.querySelector('#timeexp');
//     // const datenow = document.querySelector('#datenow');
//     console.log(datenow, timeexp);

//     // Set the date we're counting down to
//     this.countDownDate = new Date(datenow} timeexp).getTime();

//     // Update the count down every 1 second
//     this.x = setInterval(function() {

//         // Get today's date and time
//         var now = new Date().getTime();
            
//         // Find the distance between now and the count down date
//         var distance = countDownDate - now;
            
//         // Time calculations for days, hours, minutes and seconds
//         var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
//         var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
//         // Output the result in an element with id="demo"
//         var tData = document.querySelectorAll('#tData');
//         for (let i = 0; i < tData.length; i ++){
//             tData[i].innerHTML = minutes + "m " + seconds + "s ";
//         }
        
            
//         // If the count down is over, write some text 
//         if (distance < 0) {
//             clearInterval(x);
//             tData.innerHTML = 'EXPIRED';
//         }
//     }, 1000);
// }




    //     // Update the count down every 1 second
//     var x = setInterval(function() {

//     // Get today's date and time
//     var now = new Date().getTime();
        
//     // Find the distance between now and the count down date
//     var distance = countDownDate - now;
        
//     // Time calculations for days, hours, minutes and seconds
//     var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
//     var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
//     // Output the result in an element with id="demo"
//     const tData = document.querySelector('#tData');
//     tData.innerHTML = minutes + "m " + seconds + "s ";
    
        
//     // If the count down is over, write some text 
//     if (distance < 0) {
//         clearInterval(x);
//         tData.innerHTML = 'EXPIRED';
//     }
//     }, 1000);
// }