<!DOCTYPE html>
<html>
<head>

</head>
<body>
<p>
    This is the posts page
</p>

<div id="api-div">

</div>
</body>
<script>
    async function initalise(number) {
        const users = await getUsers()
        const apiDiv = document.getElementById("api-div");
        const ul = document.createElement("ul");

        for (let i = 0; i < users.length; i++) {
            if (users[i].userId == number) {
                const li = document.createElement("li");
                li.style.marginLeft = "33%";
                const body = document.createElement("p");

                li.innerText = users[i].title;
                body.innerText = users[i].body;

                li.append(body)
                ul.append(li)
            }
        }

        apiDiv.append(ul);

        //console.log(users)
    }

    /**
     * Async function to get the data from the posts
     * @returns - returns a promise
     */
    async function getUsers() {
        try {
            let response = await fetch("https://jsonplaceholder.typicode.com/posts");
            let users = await response.json();
            return users;
        } catch (err) {
            console.error("Error: ", err);
        }
    }

    const number = 8;
    initalise(number)

</script>
</html>
