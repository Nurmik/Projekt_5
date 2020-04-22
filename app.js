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
questions.forEach(x => {
    i = i+1;
});
/* 
    console.log(questions); */
    var qnumb = questions.lenght;
/*     console.log(i); */
    var index = Math.floor(Math.random() * i);
    question = questions[index];
    console.log(question.question);
    document.getElementById("question").innerHTML = question.question
})



onkeydown = onkeyup = function(event) {

    keys[event.key] = event.type == 'keydown';
    
    for (var key in keys) {
        if (keys[key] === false) {
            delete keys[key];
        }
    }

    var answer = question.answer;
    console.log(answer);
    console.log(keys);
    console.log(_.isEqual(answer,keys));

    if (_.isEqual(answer,keys)) {
        var gratz = 'ÕIGE!';
        document.getElementById("gratz").innerHTML = gratz;
    }

}


