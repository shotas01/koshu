document.addEventListener('DOMContentLoaded', function () {
    const button = document.getElementById('hamburger-button');
    const nav = document.getElementById('hamburger-nav');

    button.addEventListener('click', function () {
        nav.classList.toggle('active'); // メニューの表示・非表示を切り替え
        button.classList.toggle('open'); // ボタンのスタイル変更（必要に応じて）
    });
});
