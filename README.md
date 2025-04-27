# PHP Texting Web App

A simple web application to send and view text messages, using PHP and a text file (`data.txt`) as the database.

## Features
- Send messages via a web form.
- View all messages in real-time.
- Messages are stored in a text file (`data.txt`).

## Project Structure
```plaintext
php-texting-web/
├── .github/
│   └── workflows/
│       └── php.yml
├── index.php
├── sendMessage.php
├── getMessages.php
├── data.txt
└── README.md
```

## Getting Started

1. Clone this repository:
   ```bash
   git clone https://github.com/Noakhali135/php-texting-web.git
   cd php-texting-web
   ```

2. Run a PHP development server:
   ```bash
   php -S localhost:8000
   ```

3. Open your browser and navigate to `http://localhost:8000`.

4. Start sending and viewing messages!

## CI/CD
This project uses GitHub Actions to validate PHP syntax for all files in the repository.

## License
This project is licensed under the MIT License.
