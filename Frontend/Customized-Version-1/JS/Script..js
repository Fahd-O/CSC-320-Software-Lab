var pos = 0, test, test_status, question, choice, choices, chA, chB, chC, correct = 0;

var questions = 
[
    ["Islam has how many pillars ?", "1", "5", "3", "B"],
    ["What was the name of the mother of Rasulu-llah ﷺ", "Aminah", "'Aayeesha", "Fatimah", "A"],
    ["The Dajjal is going to _____-eyed", "three", "ten", "one", "C"],
    ["When shall the hour occur ?", "yesterday", "The questioner doesn't know more than the one being questioned", "maybe next year", "B"]
];

function _(x)
{
    return document.getElementById(x);
}

function renderQuestion()
{
    test = _("test");

    if(pos >= questions.length)
    {
        test.innerHTML = "<h2>you got "+correct+" of "+questions.length+" questions correct</h2>";

        _("test_status").innerHTML = "Test Completed";

        pos = 0;
        correct = 0;

        return false;
    }

    _("test_status").innerHTML = "Question "+(pos+1)+" of "+questions.length;

    question = questions[pos][0];
    chA = questions[pos][1];
    chB = questions[pos][2];
    chC = questions[pos][3];
    //puts question in its place
    test.innerHTML = "<h3>"+question+"</h3>";
    //puts options in their places
    test.innerHTML += "<input type='radio' name='choices' value='A'>"+chA+"<br>";
    test.innerHTML += "<input type='radio' name='choices' value='B'>"+chB+"<br>";
    test.innerHTML += "<input type='radio' name='choices' value='C'>"+chC+"<br><br>";
    //saves selected option & also used to proceed to next question
    test.innerHTML += "<button onclick='checkAnswer()'>Next</button>";

}

function checkAnswer()
{
    choices = document.getElementsByName("choices");
    choice = null; //quiz score miscalculation bug fix
    for(var i=0; i<choices.length; i++)
    {
        if(choices[i].checked)
        {
            choice = choices[i].value;
        }
    }
    //if you want to let a user know if they got each answer correctly, this is where you put that work 
    if(choice == questions[pos][4])
    {
        correct++;
    }
    pos++;
    renderQuestion();
}

window.addEventListener("load", renderQuestion, false);
