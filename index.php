<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAMP Test App 6</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: -apple-system, sans-serif; background: #2d1b69; color: #e0d4f5; min-height: 100vh; display: flex; align-items: center; justify-content: center; }
        .card { background: #3d2b79; border-radius: 12px; padding: 32px; max-width: 500px; width: 90%; border: 1px solid #5b3fa0; }
        h1 { color: #a78bfa; margin-bottom: 8px; }
        .tag { display: inline-block; background: #7c3aed; color: white; padding: 2px 8px; border-radius: 6px; font-size: 11px; margin-bottom: 12px; }
        table { width: 100%; margin-top: 12px; }
        td { padding: 6px 0; border-bottom: 1px solid #5b3fa0; }
        td:first-child { color: #a78bfa; width: 35%; }
    </style>
</head>
<body>
    <div class="card">
        <h1>LAMP Test App 6</h1>
        <span class="tag">Clone from existing repo test</span>
        <table>
            <tr><td>PHP</td><td><?php echo phpversion(); ?></td></tr>
            <tr><td>Server</td><td><?php echo $_SERVER['SERVER_SOFTWARE'] ?? 'N/A'; ?></td></tr>
            <tr><td>Time</td><td><?php echo date('Y-m-d H:i:s T'); ?></td></tr>
            <tr><td>Host</td><td><?php echo gethostname(); ?></td></tr>
        </table>
    </div>
</body>
</html>
