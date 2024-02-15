
# Player Certificate Generator

This project is a simple web application that allows users to select a player's name from a database and generate a certificate with the selected player's name.

## Technologies Used
- HTML
- CSS
- JavaScript
- PHP
- MySQL (Database)

## Setup Instructions
1. Clone the repository:
   ```
   git clone https://github.com/your-username/player-certificate-generator.git
   ```
2. Import the database:
   - Create a MySQL database named `players`.
   - Import the `players.sql` file into the `players` database. This file contains the `names` table with some sample player names.

3. Update database credentials:
   - Open `index.php` and `certificate.php`.
   - Update the database credentials (`$servername`, `$username`, `$password`, `$dbname`) with your actual database credentials.

4. Run the application:
   - Start a PHP server to run the application.

## Usage
1. Open `index.php` in a web browser.
2. Select a player's name from the dropdown.
3. Click on the "Generate Certificate" button.
4. You will be redirected to `certificate.php`, where the certificate with the selected player's name will be displayed.

## Demo
You can view a live demo of this project at [Player Certificate Generator Demo](https://your-demo-url.com).

## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

Feel free to customize this README file according to your project's specific requirements and add any additional information you think is necessary.