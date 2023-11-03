const db = require("./blog_sites.json");
const express = require('express');

const app = express();

app.get('/', (req, res) => {
    res.json(db);
});

app.listen(3010, () => {
    console.log("App running at http://localhost:3010");
})