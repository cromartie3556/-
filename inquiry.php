<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- 文書のメタデータを設定する -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- サイトのタイトルを設定 -->
    <title>お問い合わせ</title>

    <!-- サイトの説明を設定 -->
    <meta name="description" content="〇〇〇〇株式会社のアクセスマップとお問い合わせフォームのページです。" />

    <!-- 外部JavaScriptファイルを読み込む -->
    <script src="./js/action.js"></script>

    <!-- 共通のスタイルシートを読み込む -->
    <link href="./css/common.css" rel="stylesheet" />

    <!-- このページ専用のスタイルシートを読み込む -->
    <link href="./css/inquiry.css" rel="stylesheet"> 
</head>
<body>

    <!-- headerここから -->
    <header class="header">
    <div class="header-inner">

        <!-- ヘッダーロゴエリア -->
        <a class="header-logo" href="./index.html">
    <img src="./images/common/logo-header.png" alt="会社のロゴ" />
        </a>

        <!-- ハンバーガーメニューボタン -->
        <button class="toggle-menu-button"></button>

        <!-- サイトのナビゲーションエリア -->
        <div class="header-site-menu">
        <nav class="site-menu">

            <!-- 各ページへのリンク -->
            <ul>
            <li class="nav-link">
                <a href="./index.html"><span>Top</span>トップ</a>
            </li>
            <li class="nav-link">
                <a href="./service.html"><span>Product&Service</span>製品・サービス</a>
            </li>
            <li class="nav-link">
                <a href="./about us.html"><span>About Us</span>会社概要</a>
            </li>
            <li class="nav-link">
                <a href="./inquiry.php"><span>Contact Us</span>お問い合わせ</a>
            </li>
            </ul>
        </nav>
        </div>
    </div>
    </header>
    <!-- headerここまで -->

    <!-- 背景設定用のdiv -->
    <div class="content-background">

    <!-- メインコンテンツエリア開始 -->
    <main class="main">
        <div class="image">
            <!-- 画像のパスは適宜変更してください -->
            <img src="./images/inquiry/contact-us-icon-2368209_1280.png" alt="チームワーク" />
        </div>
        
    </main>

<!-- アクセスマップエリア開始 -->
<div class="map">
    <h2 class="heading">アクセスマップ</h2>

    <!-- Google Mapsからコピーしたコード -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3319.499343201842!2d130.43829987636195!3d33.69602573645461!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x354188e7d7dcd653%3A0xee3436e91c2715c6!2z56aP5bKh5bel5qWt5aSn5a2m!5e0!3m2!1sja!2sjp!4v1698061990226!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<!-- お問い合わせエリア開始 -->
<div class="contact-form">

    <!-- 電話でのお問い合わせ -->
    <div class="phone-inquiry">
        <h2>電話でのお問い合わせ</h2>
        <p class="phone-number">0120-123-456</p>
        <p>平日:9:00~18:00</p>
    </div>
    
    <!-- メールフォームエリア -->
    <h2>メールフォームでのお問い合わせ</h2>
    <form action="sendmail.php" method="post">

    <!-- 名前入力欄 -->
    <label for="name">お名前: <span class="required-mark">必須</span></label>
    <input type="text" id="name" name="name" required>

    <!-- メールアドレス入力欄 -->
    <label for="email">メールアドレス: <span class="required-mark">必須</span></label>
    <input type="email" id="email" name="email" required>

    <!-- 電話番号入力欄（任意） -->
    <label for="phone">電話番号: <span class="optional-mark">（任意）</span></label>
    <input type="tel" id="phone" name="phone" pattern="[0-9\-]+">

    <!-- お問い合わせ種別セレクトボックス -->
    <label for="subject">お問い合わせ種別: <span class="required-mark">必須</span></label>
    <select id="subject" name="subject" required>
        <option value="" disabled selected>選択してください</option>
        <option value="資料請求">資料請求</option>
        <option value="質問">質問</option>
        <option value="採用募集のエントリー">採用募集のエントリー</option>
        <option value="その他">その他</option>
    </select>

    <!-- お問い合わせ内容テキストエリア -->
    <label for="message">お問い合わせ内容: <span class="required-mark">必須</span></label>
    <textarea id="message" name="message" rows="4" required></textarea>

    <!-- プライバシーポリシーへの同意 -->
<div class="privacy-policy-agreement">
    <span class="required-text">プライバシーポリシー：<span class="mandatory">必須</span></span>
    <input type="checkbox" id="privacyPolicy" name="privacyPolicy" required>
    <label for="privacyPolicy">同意します(<a href="privacy-policy.html" target="_blank">プライバシーポリシー</a>)</label>
</div>
    
    <!-- 送信ボタン -->
    <button type="submit">送信</button>
</form>
</div>
    </div>
    <!-- お問い合わせエリア終了 -->

<!-- footerここから -->
<footer class="footer">

    <!-- フッターナビゲーション -->
    <nav class="site-menu">
<ul>
            <li class="nav-link">
                <a href="./index.html"><span>Top</span>トップ</a>
            </li>
            <li class="nav-link">
                <a href="./service.html"><span>Product&Service</span>製品・サービス</a>
            </li>
            <li class="nav-link">
                <a href="./about us.html"><span>About Us</span>会社概要</a>
            </li>
            <li class="nav-link">
                <a href="./inquiry.php"><span>Contact Us</span>お問い合わせ</a>
            </li>
            </ul>
        </nav>
    
    <!-- フッターロゴ -->
    <a class="footer-logo" href="./index.html">
        <img src="./images/common/logo-footer.png" alt="会社のロゴ" />
    </a>

    <!-- フッター内の情報 -->
    <p class="footer-tel">TEL 01-2345-6789</p>
    <p class="footer-time">勤務時間(営業時間):9:00~18:00</p>

    <!-- 著作権情報 -->
    <p class="copyright"><small>&copy;〇〇〇〇株式会社</small></p>
</footer>
<!-- footerここまで -->
</body>
</html>