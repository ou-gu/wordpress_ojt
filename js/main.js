// $(function () {
//     // 設定
//     var $width = 640; // 横幅
//     var $height = 300; // 高さ
//     var $interval = 5000; // 切り替わりの間隔（ミリ秒）
//     var $fade_speed = 3000; // フェード処理の早さ（ミリ秒）
//     $("#slide ul li").css({ "position": "relative", "overflow": "hidden", "width": $width, "height": $height });
//     $("#slide ul li").hide().css({ "position": "absolute", "top": 0, "left": 0 });
//     $("#slide ul li:first").addClass("active").show();
//     setInterval(function () {
//         var $active = $("#slide ul li.active");
//         var $next = $active.next("li").length ? $active.next("li") : $("#slide ul li:first");
//         $active.fadeOut($fade_speed).removeClass("active");
//         $next.fadeIn($fade_speed).addClass("active");
//     }, $interval);
// });

const menu = document.querySelector(".menu");
const navOpen = document.querySelector(".hamburger");
const navClose = document.querySelector(".close");

const navLeft = menu.getBoundingClientRect().left;
navOpen.addEventListener("click", () => {
    if (navLeft < 0) {
        menu.classList.add("show");
        document.body.classList.add("show");
    }
});

navClose.addEventListener("click", () => {
    if (navLeft < 0) {
        menu.classList.remove("show");
        document.body.classList.remove("show");
    }
});