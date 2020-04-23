var keys = {};
var questions;
var question;
var i = 0;
var index;
var answer;
var time
var Qtime // Timestamp of question asked
 
/* Get question file name from url parameters */
const queryString = window.location.search;
const urlParam = new URLSearchParams(queryString);
const urlQuestion = urlParam.get('questions')
var url = "http://localhost:8000/questions/"+urlQuestion;


fetch(url)
.then(response => {
    return response.json();
})
.then(json => {
    questions = json.questions;
    
    /* Count number of questions presented */
    questions.forEach(x => {
        i = i+1;
    });

    index = Math.floor(Math.random() * i);
    question = questions[index];
    console.log(question.question);
    document.getElementById("question").innerHTML = question.question
    Qtime = new Date().getTime()
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

    answer = question.answer;
    console.log(answer);
    console.log(keys);
    console.log(_.isEqual(answer,keys));

    /* 
    Checks if keys object and answer object are equal.
    If they are equal, load next question.
    If key combination is wrong, penalise.
    */
    if (_.isEqual(answer,keys)) {
        var gratz = 'ÕIGE!';
        document.getElementById("question").innerHTML = gratz;
        var correct = document.getElementById("counter-correct").innerHTML
        correct = Number(correct);
        correct = correct + 1;
        document.getElementById("counter-correct").innerHTML = correct;
        console.log(correct);
        keys = {};
        nextQ();
    } else {
        var timeCheck = new Date().getTime();
        var check = timeCheck - Qtime;
        console.log(timeCheck);
        console.log(check);
        if (check > 2000) {
            var wrong = document.getElementById("counter-incorrect").innerHTML
            wrong = Number(wrong);
            wrong = wrong + 1;
            document.getElementById("counter-incorrect").innerHTML = wrong;
            console.log(wrong);
            keys = {};
            Qtime = new Date().getTime();
            console.log(Qtime);
        }

    }

/* Define sleep function */
    
function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

/* Wait and load new question to be displayed */
async function nextQ() {
    index = Math.floor(Math.random() * i);
    question = questions[index];
    console.log(question.question);
    await sleep(2000);
    document.getElementById("question").innerHTML = question.question
    Qtime = new Date().getTime();
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


