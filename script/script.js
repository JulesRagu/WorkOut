const authorElement = document.getElementById("author");
const avatarElement = document.getElementById("avatar");

avatarElement.addEventListener("click", () => {
  avatarElement.style.transform = "translateY(-8rem)";
  authorElement.classList.add("moveUp");

  setTimeout(() => {
    avatarElement.style.transform = "translateY(0px)";
    authorElement.classList.remove("moveUp");
  }, 2500);
});