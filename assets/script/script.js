const errorBox = document.getElementById("errorBox");
const errorMessage = document.getElementById("errorMessage");

// Show Error in case either of the two inputs are empty
function showError() {
  errorMessage.innerHTML = "Preencha Todos os Campos!";
  errorBox.classList.add("errorShow");
}

// Show Error in case email fails to sent for whatever reason
function showSendError() {
  errorMessage.innerHTML = "Erro! Tente Novamente";
  errorBox.classList.add("errorShow");
}

// Hides error messages in 3s after it shows on screen
setTimeout(function () {
  errorBox.classList.remove("errorShow");
}, 3000);

// Function to open semantic modal
function open() {
  $("#register-modal").modal("show");
}

var loadingbtn = document.getElementById("loadingbtn");

// Function to add spining effect to submit button
loadingbtn.onclick = function startSpin() {
  loadingbtn.classList.add("loading");
};
