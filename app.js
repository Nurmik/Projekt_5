var min    = 0;
var second = 00;
var zeroPlaceholder = 0;
var counterId = setInterval(function(){
                  countUp();
                }, 1000);

function countUp () {
    second++;
    if(second == 59){
      second = 00;
      min = min + 1;
    }
    if(second == 10){
        zeroPlaceholder = '';
    }else
    if(second == 00){
        zeroPlaceholder = 0;
    }

    document.getElementById("count-up").innerText = min+':'+zeroPlaceholder+second;
}
