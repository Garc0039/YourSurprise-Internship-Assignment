async function initalise(number) {
    const blogs = await getDB()
    //console.log(blogs.objects[1].rows)
    let userLiked = [];
    let userLikedBlogs = [];

    for (let i = 0; i < blogs.objects[1].rows.length; i++) {
        if (blogs.objects[1].rows[i][3] > 0) {
            if (blogs.objects[1].rows[i][1] == number) {
                userLiked.push(blogs.objects[1].rows[i])
            }
        }
    }

    //console.log(userLiked)

    for (let i = 0; i < userLiked.length; i++) {
        for (let j = 0; j < blogs.objects[0].rows.length; j++) {
            if (blogs.objects[0].rows[j][0] == userLiked[i][2]) {
                userLikedBlogs.push(blogs.objects[0].rows[j][2])
            }
        }
    }

    //console.log(blogs.objects[0].rows[1][2])
    //console.log(userLikedBlogs)

    const apiDiv = document.getElementById("api-div");
    const ul = document.createElement("ul");

    for (let i = 0; i < userLikedBlogs.length; i++) {
        const li = document.createElement("li");
        li.style.marginLeft = "33%";
        const blogContent = document.createElement("p");
        
        blogContent.innerText = userLikedBlogs[i];
        
        li.append(blogContent)
        ul.append(li)
        
    }

    apiDiv.append(ul);

}

/**
* Async function to get the data from the like table
* @returns - returns a promise
*/
async function getDB() {
    try {
    let response = await fetch("http://localhost:3000/db");
    let blogs = await response.json();
    return blogs;
    } catch (err) {
    console.error("Error: ", err);
    }
}

const number = 8;
initalise(number)
