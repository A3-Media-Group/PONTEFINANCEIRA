<?php
/**
 * NEWSLETTER — endpoint de captura
 * ------------------------------------------------
 * Recebe o formulário de newsletter (rodapé de artigo e home), valida,
 * grava em /data/newsletter-subscribers.csv (criado automaticamente) e
 * volta para a página de origem com ?inscrito=1.
 *
 * PENDÊNCIA: isto só registra o e-mail localmente — não envia
 * campanhas. Para newsletter de verdade, plugue um provedor (Brevo,
 * Mailchimp, etc.) substituindo/complementando a gravação abaixo pela
 * chamada à API do provedor escolhido.
 */
require_once __DIR__ . '/includes/config.php';

$redirect = $_POST['redirect'] ?? '/';
// Só permite redirecionar para caminhos internos (evita open redirect).
if (!is_string($redirect) || $redirect === '' || $redirect[0] !== '/' || strpos($redirect, '//') === 0) {
    $redirect = '/';
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ' . $redirect);
    exit;
}

// Honeypot anti-spam
if (!empty($_POST['website'])) {
    header('Location: ' . $redirect . (strpos($redirect, '?') === false ? '?' : '&') . 'inscrito=1');
    exit;
}

$email = trim($_POST['email'] ?? '');
$source = trim($_POST['source'] ?? 'site');

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: ' . $redirect . (strpos($redirect, '?') === false ? '?' : '&') . 'inscrito=erro');
    exit;
}

$data_dir = __DIR__ . '/data';
if (!is_dir($data_dir)) {
    @mkdir($data_dir, 0755, true);
    // Bloqueia acesso público direto à pasta de dados.
    @file_put_contents($data_dir . '/.htaccess', "Require all denied\n");
}

$csv_file = $data_dir . '/newsletter-subscribers.csv';
$is_new = !file_exists($csv_file);
$fh = @fopen($csv_file, 'a');
if ($fh) {
    if ($is_new) fputcsv($fh, ['email', 'origem', 'data']);
    fputcsv($fh, [$email, $source, date('Y-m-d H:i:s')]);
    fclose($fh);
}

header('Location: ' . $redirect . (strpos($redirect, '?') === false ? '?' : '&') . 'inscrito=1');
exit;
