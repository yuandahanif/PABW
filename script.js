const footer = document.querySelector("footer");
const link_home = document.querySelector("#link-home");
const link_profile = document.querySelector("#link-logout");
const form = document.querySelector("#form");
const form_status = document.querySelector("#form_status");

footer.addEventListener("mouseenter", (e) => {
  footer.querySelector("#footer-unhover").style.display = "none";
  footer.querySelector("#footer-hover").style.display = "inline";
});

footer.addEventListener("mouseleave", (e) => {
  footer.querySelector("#footer-unhover").style.display = "inline";
  footer.querySelector("#footer-hover").style.display = "none";
});

link_home.addEventListener("mouseenter", (e) => {
  e.target.style.color = "white";
});

link_home.addEventListener("mouseleave", (e) => {
  e.target.style.color = "blue";
});

link_profile.addEventListener("mouseenter", (e) => {
  e.target.style.color = "white";
});
link_profile.addEventListener("mouseleave", (e) => {
  e.target.style.color = "blue";
});

form.addEventListener("submit", (e) => {
  e.preventDefault();
  let username = e.target[0].value;
  let password = e.target[1].value;
  if (username == "" && password == "") {
    alert("password tidak boleh kosong");
  } else if (username == "pabw" && password == "ujian2") {
    form_status.innerHTML = "user " + username + " berhasil login.";
  } else {
    form_status.innerHTML = "user " + username + " tidak berhasil login.";
  }
});
