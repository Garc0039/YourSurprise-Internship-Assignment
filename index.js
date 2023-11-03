const express = require('express');
const fs = require('fs')
const {readFile} = require('fs');
const db = require("./blog_sites.json");
const validationDB = require("./validation.json");

const app = express();

app.use(express.static('static'));

app.get('/', (req, res) => {
    readFile('./home.html', 'utf8', (err, html) => {
        if (err) {
            res.status(500).send('Sorry, out of order');
        }

        res.send(html);
    })
});

app.get('/posts', (req, res) => {
    readFile('./posts.html', 'utf8', (err, html) => {
        if (err) {
            res.status(500).send('Sorry, out of order');
        }

        res.send(html);
    })
});

app.get('/blogs', (req, res) => {
    readFile('./blogs.html', 'utf8', (err, html) => {
        if (err) {
            res.status(500).send('Sorry, out of order');
        }

        res.send(html);
    })
});

app.get('/db', (req, res) => {
    res.json(db);
});

app.get('/validation', (req, res) => {
    readFile('./validation.html', 'utf8', (err, html) => {
        if (err) {
            res.status(500).send('Sorry, out of order');
        }

        res.send(html);
    })
});

app.get('/validationDB', (req, res) => {
    res.json(validationDB);
});

app.listen(3000, () => {
    console.log("App running at http://localhost:3000");
})