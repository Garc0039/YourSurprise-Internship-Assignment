const initSqlJs = require("sql.js");
const express = require('express');

const app = express();

app.get('/', (req, res) => {
    async function sqliteInit() {
        const SQL = await initSqlJs({
            locateFile: __filename => "blog_site.db"
        });
    
        const db = SQL.Database();
        console.log(db);
    }
    sqliteInit();
});

app.listen(3010, () => {
    console.log("App running at http://localhost:3010");
})



let db_results;
var db = openDatabase('blog_site', '3.0', 'db with blogs', 1024*1024*1024);
db.transaction(function (tx) {
    tx.executeSql('SELECT * FROM foo', [], function (tx, results) {
        var len = results.rows.length, i;
        for (i = 0; i < len; i++) {
          alert(results.rows.item(i).text);
        }
        console.log(results)
})});

console.log('it works')

