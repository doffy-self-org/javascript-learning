

document.getElementById("loginForm").addEventListener("submit", function (e){
    e.preventDefault();

    const form= e.target;
    const formData = new FormData(form);

    fetch(form.action,{
        method: "POST",
        body: formData,
    })
    .then((response) => response.text())
    .then((html) =>{
        document.body.innerHTML = html;
    })
    .catch((error) => console.error('Error:', error));
});