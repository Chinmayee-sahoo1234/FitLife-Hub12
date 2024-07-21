var header = document.getElementsByTagName("header");
window.onscroll = function(){scrollfunction()};
function scrollfunction(){
    if(document.body.scrollTop>200 || document.documentElement.scrollTop >200){
        header[0].setAttribute("class","headewr-active");
    }
    else{
        header[0].removeAttribute("class");
    }
}
// document.getElementById('feedbackForm').addEventListener('submit', function(event) {
//     event.preventDefault(); // Prevent the default form submission

//     // Get form values
//     const name = document.getElementById('name').value;
//     const email = document.getElementById('email').value;
//     const comments = document.getElementById('comments').value;

//     // Display a message (could also send data to a server)
//     document.getElementById('message').innerText = `Thank you for your feedback, ${name}!`;

//     // Clear the form
//     document.getElementById('feedbackForm').reset();
// });

