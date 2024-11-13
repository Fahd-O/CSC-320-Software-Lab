# CSC 320 Software Lab Project / FullStack V1 (Terbiyah CBT)

This is the first fullstack version of my CSC320 Software Lab Project named 'Terbiyah CBT'. It provides a basic yet functional platform for conducting multiple-choice tests online.

## Overview

This version is a fully functional Computer-Based Testing (CBT) system with core features for exam administration, such as question display, answer submission, and results calculation. It was developed using **HTML** for structure, **CSS** for styling, and **PHP** for backend functionality.

## Key Features

- **Exam Interface**: Three main pages accessible to students:
  1. **Home Page**: Entry point to start the test.
  2. **Exam Page**: Displays questions and allows students to submit answers.
  3. **Results Page**: Shows the score after test completion.
- **Admin Panel**: A separate page for administrators to add questions to the database dynamically.
  - **Dynamic Content**: Question numbers can be set, enhancing flexibility.
- **Quick Question Navigation**: A navigation panel that provides direct access to specific questions.

## Limitations

- **Quick Navigation Issue**: Previously selected answers may not appear if accessed through the quick navigation panel.
- **Answered Questions Visibility**: The navigation panel does not indicate whether a question has been answered. Partial attempts to address this are present in `question.php` (line 91), though unfinished.
- **Score Duplication Bug**: Revisiting a previously answered question (either via the quick navigation or browser back button) and submitting it again may lead to the question being scored twice, potentially inflating the total score. A tracking system for answered questions is needed to prevent this.
- **No Timer**: There is no countdown or automatic submission upon time expiration.
- **No Login or Score Storage**: This version lacks user authentication, and scores are not saved to the database.

## Known Issues & Future Considerations

- **Database Connection**: The `dbh.php` file uses `new mysqli(...)` for database connection instead of `mysqli_connect(...)`. This approach provides specific error messages if a connection fails. However, the compatibility of this method with future code additions is untested.
