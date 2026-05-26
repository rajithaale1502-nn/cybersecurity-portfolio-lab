<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task 2: PHP Scripting Dashboard</title>
    <style>
        body { background: #121212; color: #e0e0e0; font-family: 'Courier New', monospace; padding: 30px; }
        .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px; }
        .card { background: #1a1a1a; border: 1px solid #333; padding: 20px; border-radius: 6px; box-shadow: 0 4px 6px rgba(0,0,0,0.3); }
        h2 { color: #00ff00; border-bottom: 1px solid #333; padding-bottom: 10px; }
        h3 { color: #00bfff; margin-top: 0; }
        span.highlight { color: #ff00ff; }
    </style>
</head>
<body>

    <h2>⚡ Task 2: 10 Basic PHP Scripts Practiced</h2>
    <div class="grid">

        <!-- Script 1: Variables & Data Types -->
        <div class="card">
            <h3>1. Variables & Types</h3>
            <?php
            $txt = "Cybersecurity Lab";
            $version = 1.0;
            $is_active = true;
            echo "String: $txt<br>";
            echo "Float: Version $version<br>";
            echo "Boolean: " . ($is_active ? "Active" : "Inactive");
            ?>
        </div>

        <!-- Script 2: Arithmetic Operators -->
        <div class="card">
            <h3>2. Arithmetic Math</h3>
            <?php
            $a = 15;
            $b = 4;
            echo "$a + $b = " . ($a + $b) . "<br>";
            echo "$a % $b (Remainder) = " . ($a % $b);
            ?>
        </div>

        <!-- Script 3: Conditional (If/Else) -->
        <div class="card">
            <h3>3. Conditional Logic</h3>
            <?php
            $login_attempts = 4;
            if ($login_attempts > 3) {
                echo "<span style='color:red;'>⚠️ Account Locked! Too many attempts.</span>";
            } else {
                echo "Access Permitted.";
            }
            ?>
        </div>

        <!-- Script 4: Switch Case Statement -->
        <div class="card">
            <h3>4. User Access Levels</h3>
            <?php
            $role = "admin";
            switch ($role) {
                case "admin": echo "Full access granted."; break;
                case "guest": echo "Read-only access."; break;
                default: echo "Access denied.";
            }
            ?>
        </div>

        <!-- Script 5: For Loop -->
        <div class="card">
            <h3>5. For Loop (Port Scan Simulation)</h3>
            <?php
            for ($port = 80; $port <= 84; $port++) {
                echo "Scanning Port: $port... [OPEN]<br>";
            }
            ?>
        </div>

        <!-- Script 6: While Loop -->
        <div class="card">
            <h3>6. While Loop (Decoupling)</h3>
            <?php
            $countdown = 3;
            while ($countdown > 0) {
                echo "Session expiring in $countdown...<br>";
                $countdown--;
            }
            ?>
        </div>

        <!-- Script 7: Indexed Arrays -->
        <div class="card">
            <h3>7. Indexed Array (Tools)</h3>
            <?php
            $tools = ["Nmap", "Burp Suite", "Wireshark"];
            echo "Primary analysis tool: " . $tools[1];
            ?>
        </div>

        <!-- Script 8: Associative Arrays -->
        <div class="card">
            <h3>8. Associative Array</h3>
            <?php
            $headers = ["Content-Type" => "text/html", "Server" => "Apache"];
            echo "Response Target: " . $headers["Server"];
            ?>
        </div>

        <!-- Script 9: Custom Functions -->
        <div class="card">
            <h3>9. Custom Function Practice</h3>
            <?php
            function sanitize_input($data) {
                return htmlspecialchars(trim($data));
            }
            $payload = " <script>alert(1)</script> ";
            echo "Sanitized: " . sanitize_input($payload);
            ?>
        </div>

        <!-- Script 10: String Manipulation -->
        <div class="card">
            <h3>10. String Tracking</h3>
            <?php
            $phrase = "Malware Detected";
            echo "Length: " . strlen($phrase) . " chars<br>";
            echo "Uppercase: " . strtoupper($phrase);
            ?>
        </div>

    </div>

</body>
</html>