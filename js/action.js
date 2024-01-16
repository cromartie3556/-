window.addEventListener("load", function () {
  var $button = document.querySelector(".toggle-menu-button");
  var $menu = document.querySelector(".header-site-menu");
  $button.addEventListener("click", function () {
    if ($menu.classList.contains("is-show")) {
      $menu.classList.remove("is-show");
      $button.classList.remove("open");
    } else {
      $menu.classList.add("is-show");
      $button.classList.add("open");
    }
  });
});

window.addEventListener("mousemove", function (e) {
  var pointer = document.querySelector(".custom-pointer");
  pointer.style.left = e.clientX + "px"; // 'pageX' から 'clientX' へ変更
  pointer.style.top = e.clientY + "px"; // 'pageY' から 'clientY' へ変更
  pointer.style.opacity = 1;
  pointer.style.transform = "scale(1)";
});

window.addEventListener("mouseout", function () {
  var pointer = document.querySelector(".custom-pointer");
  pointer.style.opacity = 0;
  pointer.style.transform = "scale(0.5)";
});
