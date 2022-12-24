# Spellchecker-Demo
Quill Editor, React JS, PHP

### === Setup ===

#### Please note you must have PHP server, Node.Js and ReactJs installed.

1. Install XAMPP and edit httpd.conf file, point the server DocumentRoot to ~/Spellechecker root folder and start php server.

2. Open command line or terminal in your IDE and cd to ~/Spellchecker/frontend , then run npm install to install required dependencies.

3. Run npm start, this starts react on port 3000

4. Edit line 18 in ~/Spellchecker/frontend/src/functions/spellcheck.js, and change "http://dev.pekaboom.com/Spellchecker/" to your backend PHP server, e.g: http://localhost/

5. now access the app on http://localhost:3000/
