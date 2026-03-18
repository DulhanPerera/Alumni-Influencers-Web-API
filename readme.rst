API-Based Bidding System (CodeIgniter)

This project is a web-based API system developed using the CodeIgniter PHP framework. The system is designed to manage users, profiles, and bidding activities through a structured backend architecture.

The application follows the MVC (Model-View-Controller) pattern and provides RESTful API functionality for handling core operations such as user management, bid submissions, and secure API access using API keys.

Key Features:
- User management system with role-based access
- Profile management (one-to-one relationship with users)
- Bidding system where users can place multiple bids
- API key management for secure access to endpoints
- Database migrations for structured and version-controlled schema design
- Scalable backend architecture suitable for future enhancements

Technologies Used:
- PHP (CodeIgniter Framework)
- MySQL Database
- XAMPP (Apache Server)
- Git & GitHub for version control

Database Design:
- users (1) → (1) profiles
- users (1) → (M) bids
- users (1) → (M) api_keys

Purpose of the Project:
This coursework aims to demonstrate the development of a backend API system using modern web development practices. It focuses on database design, API development, and implementing relationships between entities while following industry standards.

Setup Instructions:
1. Clone the repository
2. Place the project in the htdocs folder (XAMPP)
3. Configure database settings in the environment file
4. Create the database in phpMyAdmin
5. Run the application using localhost

Status:
Project is currently under development.
