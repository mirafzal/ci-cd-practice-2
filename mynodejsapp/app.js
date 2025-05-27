// Import the express module
const express = require('express');

// Create an instance of express
const app = express();

// Set a port to listen on
const PORT = process.env.PORT || 3000;

// Define a simple route that returns "Hello World"
app.get('/', (req, res) => {
    res.send('Hello World!');
});

// Define a route that returns a message
app.get('/about', (req, res) => {
    res.send('This is a basic Node.js app built using Express.');
});

// Start the server and listen on the defined port
app.listen(PORT, () => {
    console.log(`Server is running on http://localhost:${PORT}`);
});
