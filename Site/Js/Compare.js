var check = function () {
  if (
    document.getElementById("password").value ==
    document.getElementById("confirm_password").value &&
    (document.getElementById("password").value.length != 0 ||
      document.getElementById("confirm_password").value.length != 0 ||
      document.getElementById("email").value.length != 0)
  ) {
    document.getElementById("Submit").style.backgroundColor = "#fff";
    document.getElementById("Submit").disabled = false;
  } else {
    document.getElementById("Submit").style.backgroundColor = "#555";
    document.getElementById("Submit").disabled = true;
  }
};
