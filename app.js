

var map = {};

onkeydown = onkeyup = function(event) {

    map[event.key] = event.type == 'keydown';

    map2 = JSON.stringify(map);
    console.log(map2);
    evaluate();


}
evaluate = function() {
/*     var combo = JSON.parse(combo);
    console.log(combo[1]); */
    var right = ["Control", "f"]
    if (map != undefined) {
        
        
    }

};

//document.addEventListener('onkeydown', evaluate);


