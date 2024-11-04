# PHP and MySQL Quiz App Complete(Terbiyah CBT)

## Introduction

 This here is a simple computer based test computer web application.

## Goal

 It should be a complete Computer Based Testing System having all the features required for a Computer Based Test.

## Features

* Languages used are HTML for web text, CSS for styling and Majorly PHP for the functionality

* Can run from start to finish without problem

* Has three and one viewable pages from the browser: the three are for prospective student to take their exams, 1st page is the index or homepage, 2nd page is where exam is taken and 3rd page show result of exam taken; the remaining one is for the admin to add question to the database

* It is dynamic in nature... the quesion numbers, time for exam, etc

* There is quick access to all question below the current question being attempted

## Limitations

* If the Quick navigation for the question is used, previously selected answers for respective questions will not be seen.

* There is no way to tell from the question quick navigation whether a question has been answered or not. In the "question.php" file, line 91, effort to correct this was made but I couldn't finish working on it due to time constraint

* If the correct answer was previous selected for a question, it is recorded as one point else no point, however, if any of the previously answered question is revisited either through the quick question navigation or using the back button of the browser and is answered again, the score for that gets recorded a second time, making it possible to even score higher than the total score attainable. A means of taking note of answered questions and their answers needs to be put in place to rectify this limitation and the preceeding limitation above.

* There is no timer for the exam and no way for exam to automatically submit once time for it has elasped

* No login system and no way to save user score to database

## Possible bug in the future

The "dbh.php" file may need to be reviewed in the future if there is some kind of error with connecting to the database. As the method used to connect to it tells the exact error, if any, in the connection, which is why it was used.

However, I'm not fully aware of how it should be used or how it will work with other codes, yet to be written.

THE CODE SNIPPET:  "new mysqli(..." is used in place of "mysqli_connect(..."
