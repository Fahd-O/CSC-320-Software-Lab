# CSC 320 Software Lab Project / FullStack V3 (Terbiyah CBT)

## Overview

This is the third and final fullstack version of the CSC 320 Software Lab Project (Terbiyah CBT). Here I refined and restructured the code from previous versions. This version includes an organized codebase and some optimization of existing features, making it more maintainable and ready for future improvements.

## Features

- **Organized File Structure**: Improved folder organization for easier navigation and maintainability, separating the CBT and Login system components into different folders.
- **Login and Registration System**: Users can register and log in to take exams, with a basic authentication system in place.
- **Dynamic Exam Questions**: Questions, multiple choices, and other parameters are dynamically fetched from the database, providing a flexible exam setup.
- **Admin Dashboard**: An area where admins can manage the question database, adding or editing questions as needed.
- **Quick Question Navigation**: Allows users to navigate through questions quickly, although answer tracking is still uncompleted.

## Limitations

- **Answer Tracking**: Quick navigation to previously answered questions does not retain selected responses. Implementing answer tracking across navigation is still needed for optimal functionality.
- **Duplicate Scoring**: Revisiting questions and answering again may result in duplicate scoring. A mechanism to lock or track previously submitted answers can help resolve this.
- **Timer and Auto-Submit**: The application still lacks an exam timer and automatic submission upon expiration, which can be added for a more complete CBT experience.
- **Data Persistence**: Scores are not yet saved in the database, so users’ exam records are not stored for future reference.

## Code Structure

This version focuses on a cleaner, more modular codebase:

- **The CBT**: Files for the CBT component, includes question retrieval, multiple choices retrieval, and exam processing.
- **The Login System**: Files that handle the sign-up and login aspect. Authenticates students before they can take the CBT.

## Future Enhancements

- **Score Saving and Tracking**: Implementing score persistence in the database for each user.
- **Timer and Auto-Submission**: Adding a countdown timer with automatic submission upon time expiry for a more authentic CBT experience.
- **Improved Answer Navigation**: Developing a better tracking mechanism to show which questions have been answered in the quick navigation bar.
