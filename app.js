var keys = {};
var questions;
var question;
var i = 0


fetch("http://localhost:8000/questions/visual_studio.json")
.then(response => {
    return response.json();
})
.then(json => {
    questions = json.questions;
    
    /* Count number of questions presented */
    questions.forEach(x => {
        i = i+1;
    });

    var index = Math.floor(Math.random() * i);
    question = questions[index];
    console.log(question.question);
    document.getElementById("question").innerHTML = question.question
})


/* Checks which keys are pressed down and if they mach the expected from the question */
onkeydown = onkeyup = function(event) {     

    
    keys[event.key] = event.type == 'keydown';
    
    /* Remove keys that are not pushed down from the keys list */
    for (var key in keys) {
        if (keys[key] === false) {
            delete keys[key];
        }
    }

    var answer = question.answer;
    console.log(answer);
    console.log(keys);
    console.log(_.isEqual(answer,keys));

    /* 
    Checks if keys object and answer object are equal.
    If they are equal to something, not yet implemented
    */
    if (_.isEqual(answer,keys)) {
        var gratz = 'ÕIGE!';
        document.getElementById("gratz").innerHTML = gratz;
    }

}

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


