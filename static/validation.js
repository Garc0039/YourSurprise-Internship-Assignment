const button = document.getElementById('saveButton');
const email = document.getElementById('email');
const likes = document.getElementById('likes');
const reposts = document.getElementById('reposts');
const views = document.getElementById('views');
let emailCheck = false;

button.addEventListener('click', () => {

    validateEmail(email)

    if (email.value == '' || likes.value > 10 || likes.value < 1 || reposts.value > 10 || reposts.value < 1 || views.value > 10 || views.value < 1) {
        alert('One or more fields are incorrect')
        email.value = '';
        likes.value = 0;
        reposts.value = 0;
        views.value = 0; 
    }

    if (emailCheck && likes.value != 0 && reposts.value != 0 && views.value != 0) {
        console.log("success")
        fetch("https://jsonplaceholder.typicode.com/todos", {
            method: "POST",
            body: JSON.stringify({
                email: email.value,
                likes: likes.value,
                reposts: reposts.value,
                views: views.value
        }),
            headers: {
                "Content-type": "application/json; charset=UTF-8"
            }
        })
    }
})


// https://www.scaler.com/topics/email-validation-in-javascript/
function validateEmail(inputText) {
    const mailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (!inputText.value.match(mailFormat)) {
      alert("Your email is not valid please use for example: yourname@gmail.com");
      return true;
    } else {
        emailCheck = true;
    }
}

