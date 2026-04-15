# College AI Assistant Chatbot

A simple, keyword-based chatbot for Bunts Sangha College, built with PHP and MySQL. This assistant helps students and visitors get quick answers about courses, admissions, facilities, and more.

## 🚀 Features

- **Instant Responses**: Uses keyword detection to provide fast answers.
- **Persistent Knowledge**: All data is stored in a MySQL database for easy management.
- **Clean UI**: A mobile-responsive, modern chat interface.
- **Wide Coverage**: Covers topics from admission processes to gymkhana timings.

## 🛠️ Technologies Used

- **Frontend**: HTML5, CSS3, Vanilla JavaScript
- **Backend**: PHP
- **Database**: MySQL

## 📦 Installation & Setup

1.  **XAMPP Setup**:
    - Download and install [XAMPP](https://www.apachefriends.org/).
    - Start the **Apache** and **MySQL** modules from the XAMPP Control Panel.
2.  **Move Files**:
    - Copy the `college-chat` folder into your `C:\xampp\htdocs\` directory.
3.  **Database Setup**:
    - Open [http://localhost/phpmyadmin/](http://localhost/phpmyadmin/).
    - Create a new database named `college_chat`.
    - Click **Import** and select the `college_chat_data.sql` file provided in this project.
4.  **Configuration**:
    - Open `chat.php` and update the database credentials if necessary:
      ```php
      $conn = mysqli_connect("localhost", "root", "YOUR_PASSWORD", "college_chat");
      ```
5.  **Run the App**:
    - Open your browser and go to: `http://localhost/projects/college-chat/`

## 🔎 How it Works

The chatbot uses a keyword-matching logic in the PHP backend:
1.  **Input Parsing**: The user's message is converted to lowercase.
2.  **Keyword Matching**: The script checks the message for certain keywords (e.g., "fees", "canteen", "library").
3.  **Database Query**: Based on the detected keyword, a query is sent to the `info` table to fetch the corresponding answer.
4.  **Response**: The answer is returned to the frontend via AJAX and displayed in the chat bubble.

## 📂 Project Structure

- `index.html`: The main user interface.
- `style.css`: Modern styling for the chat bubbles and layout.
- `script.js`: Handles the chat logic and communication with the server.
- `chat.php`: The backend script that processes messages and connects to the database.
- `college_chat_data.sql`: The database export containing the Q&A pairs.
- `q&a.txt`: The original source data for the chatbot answers.
