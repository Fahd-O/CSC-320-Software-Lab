# CSC 320 Software Lab Project / FullStack V2 (Terbiyah CBT)

## Overview

This version of the CSC 320 Software Lab Project (Terbiyah CBT) web application represents a further development of the Computer Based Testing System for the CSC 320 Software Lab course. This version builds upon the first fullstack iteration by adding a basic login and sign-up system to help manage user access.

## Features

- **Languages Used**: HTML, CSS, PHP, and MySQL for database management.
- **Dynamic Question Display**: Displays questions dynamically, with question numbers and other parameters set via the database.
- **Quick Question Navigation**: Users can navigate through questions quickly with links to each question, though previous responses may not be displayed upon revisiting questions.
- **Login and Registration**: Basic sign-up and login system added to allow users to register and authenticate before accessing the exam.
- **Admin Panel**: The admin can log in to add new questions to the database.

## Limitations

- **Quick Navigation and Response Display**: Navigating to previously answered questions does not display selected answers. This needs an improved tracking mechanism to mark answered questions.
- **Duplicate Scoring**: Answering a question twice could cause duplicate scoring, which may lead to scores exceeding the maximum achievable score. Further tracking to handle re-attempts is recommended.
- **No Timer**: The exam currently lacks a timer, so there is no automatic submission when time expires.
- **No Data Persistence for Scores**: While login and registration are implemented, scores are not saved in the database yet.

## Future Improvements

- **Score Tracking and Saving**: Implementing a reliable way to store user scores in the database.
- **Timer Integration**: Adding a countdown timer that forces submission when time runs out.
- **Enhanced User Experience**: Adding visual indicators in the quick navigation to show answered questions and improve usability.
