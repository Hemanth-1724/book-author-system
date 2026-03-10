# Book & Author Management System

A simple Laravel backend to manage Authors and their Books.

## Features
- Full CRUD operations for Authors and Books
- Author-Book relationship (1-to-many)
- Request validation for all API endpoints
- Clean and readable code
- Sample data can be added via Tinker

## Setup Instructions

Step 1: Clone the repository using git clone <https://github.com/Hemanth-1724/book-author-system.git > and navigate into the folder with cd book-author-system.

Step 2: Install dependencies using composer install.

Step 3: Create the SQLite database file using touch database/database.sqlite.

Step 4: Copy the environment file using cp .env.example .env and generate the application key with php artisan key:generate.

Step 5: Run migrations with php artisan migrate to create the database tables.

Step 6 : Add sample authors and books using Tinker by running php artisan tinker and then creating authors and books, for example:

App\Models\Author::create(['name'=>'U. R. Ananthamurthy','email'=>'urananthamurthy@gmail.com']);
App\Models\Author::create(['name'=>'Kuvempu','email'=>'kuvempu@gmail.com']);
App\Models\Author::create(['name'=>'Girish Karnad','email'=>'girishkarnad@gmail.com']);
App\Models\Book::create(['title'=>'Samskara','author_id'=>1,'published_date'=>'1965-01-01']);
App\Models\Book::create(['title'=>'Sri Ramayana Darshanam','author_id'=>2,'published_date'=>'1957-01-01']);
App\Models\Book::create(['title'=>'Tughlaq','author_id'=>3,'published_date'=>'1964-01-01']);

Step 7: Serve the application using php artisan serve.

Step 8: Access the API endpoints at http://127.0.0.1:8000/authors for authors and http://127.0.0.1:8000/books for books. All responses are JSON formatted.
