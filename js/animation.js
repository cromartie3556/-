window.addEventListener("load", () => {
  const loader = document.querySelector(".loading");
  const loaderContent = document.querySelector(".loading-content");

  // テキストを先にフェードアウト
  loaderContent.style.opacity = 0;

  // テキストのフェードアウトが完了したら背景をフェードアウト
  loaderContent.addEventListener("transitionend", (event) => {
    if (event.target === loaderContent) {
      loader.style.opacity = 0;
    }
  });

  // バックグラウンドのフェードアウトが完了したら要素を非表示に
  loader.addEventListener("transitionend", (event) => {
    if (event.target === loader) {
      loader.style.display = "none";
    }
  });
});

// トップへ戻るボタンの動作を設定する
document.addEventListener("DOMContentLoaded", function () {
  const scrollToTopButton = document.getElementById("scrollToTopButton");

  // ボタンがクリックされたときの動作
  scrollToTopButton.addEventListener("click", function () {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });
});

// 画像の配列
const images = [
  "images/index/main1.jpg", // 最初の画像
  "images/index/main2.jpg", // 2番目の画像
  "images/index/main3.jpg", // 3番目の画像
];
let currentImageIdx = 0; // 現在表示中の画像のインデックス

function changeImage() {
  currentImageIdx++; // 次の画像にインデックスを進める
  if (currentImageIdx > images.length - 1) {
    currentImageIdx = 0; // 最後の画像の後は最初に戻る
  }
  document.querySelector(
    ".first-view"
  ).style.backgroundImage = `url(${images[currentImageIdx]})`;
}

// 3秒ごとに画像を変更する
setInterval(changeImage, 3000);

// 最初の画像を設定
document.querySelector(
  ".first-view"
).style.backgroundImage = `url(${images[0]})`;

document.addEventListener("DOMContentLoaded", function () {
  // サービスのセクションを取得
  const servicesSection = document.querySelector(".services-overview");
  servicesSection.classList.add("not-visible"); // 初期状態で.not-visibleを追加

  // スクロールイベントのリスナーを追加
  window.addEventListener("scroll", function () {
    // 全ての.services-overviewセクションに.not-visibleを追加
    servicesSection.classList.add("not-visible");

    // セクションの位置を取得
    const sectionPos =
      servicesSection.getBoundingClientRect().top + window.pageYOffset;
    const sectionHeight = servicesSection.offsetHeight;

    // ウィンドウの高さを取得
    const windowHeight = window.innerHeight;

    // セクションが表示される位置を計算
    const showAt = windowHeight - sectionHeight / 3;

    // スクロール位置を取得
    const scrollPos = window.scrollY;

    // セクションが表示される位置に達したらアニメーションを開始
    if (scrollPos > sectionPos - showAt) {
      servicesSection.classList.remove("not-visible");
    }
  });
});

// スクロールに応じて要素を表示する関数
function revealOnScroll() {
  var elements = document.querySelectorAll(".text, .image");
  var windowHeight = window.innerHeight;

  for (var i = 0; i < elements.length; i++) {
    var element = elements[i];
    var positionFromTop = elements[i].getBoundingClientRect().top;

    if (positionFromTop - windowHeight <= 0) {
      element.classList.add("fade-in");
    }
  }
}

// スクロールイベントに関数を紐付け
window.addEventListener("scroll", revealOnScroll);

document.addEventListener("DOMContentLoaded", function () {
  window.addEventListener("scroll", function () {
    const lastViewTextElements = document.querySelectorAll(
      ".last-view-text h2, .last-view-text p"
    ); // h2とp要素を選択

    // 各要素に対して処理を実行
    lastViewTextElements.forEach((element) => {
      const positionFromTop = element.getBoundingClientRect().top;
      const windowHeight = window.innerHeight;

      // 要素がビューポート内に入った場合にアニメーションを開始
      if (windowHeight - positionFromTop > 0) {
        element.classList.add("jumping");
      } else {
        element.classList.remove("jumping");
      }
    });
  });
});
