<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// .envファイルから環境変数を読み込む
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// .env ファイルからSMTP設定を読み込む
$smtpHost = $_ENV['SMTP_HOST'];
$smtpUser = $_ENV['SMTP_USER'];
$smtpPassword = $_ENV['SMTP_PASSWORD'];
$smtpPort = $_ENV['SMTP_PORT'];
$smtpSecure = $_ENV['SMTP_SECURE'];
$mailTo = $_ENV['MAIL_TO'];

// POSTリクエストをチェック
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // フォームからデータを受け取る
    $email_from = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['phone']; 
    $subject = $_POST['subject']; 
    $message = $_POST['message'];

    // PHPMailerインスタンスを作成
    $mail = new PHPMailer(true);

    try {
        // SMTP設定
        $mail->isSMTP();
        $mail->Host = $smtpHost;
        $mail->SMTPAuth = true;
        $mail->Username = $smtpUser;
        $mail->Password = $smtpPassword;
        $mail->SMTPSecure = $smtpSecure;
        $mail->Port = $smtpPort;

        // エンコーディング設定
        $mail->CharSet = 'UTF-8';

        // 送受信者設定
        $mail->setFrom($email_from, $name); // 送信者のメールアドレスと名前
        $mail->addAddress($mailTo); // 受信者のメールアドレス
        
        // メールの内容
        $mail->isHTML(true); // HTML形式を有効化
        $mail->Subject = 'お問い合わせ'; // メールの件名
        $mail->Body = "名前: $name<br>メールアドレス: $email_from<br>電話番号: $phone<br>お問い合わせ種別: $subject<br>内容: $message"; // メールの本文

        // メール送信
        $mail->send();

        // 送信完了後にリダイレクト
        header('Location: thankyou.html');
        exit;
    } catch (Exception $e) {
        // エラー発生時の処理
        echo "メッセージが正しく送信されませんでした {$mail->ErrorInfo}";
    }
}
?>
