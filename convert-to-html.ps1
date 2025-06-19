# PowerShell script to convert PHP files to HTML files

$phpFiles = @(
    "install.php",
    "syntax.php", 
    "comments.php",
    "variables.php",
    "datatypes.php",
    "strings.php",
    "numbers.php",
    "casting.php",
    "math.php",
    "constants.php",
    "magic-constants.php",
    "if-else.php",
    "switch.php",
    "loops.php",
    "functions.php",
    "arrays.php"
)

$htmlTemplate = @"
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{TITLE}} - PHP Tutorial</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Noto+Sans+Bengali:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="sidebar">
        <nav>
            <a href="index.html">PHP HOME</a>
            <a href="intro.html">PHP Intro</a>
            <a href="install.html">PHP Install</a>
            <a href="syntax.html">PHP Syntax</a>
            <a href="comments.html">PHP Comments</a>
            <a href="variables.html">PHP Variables</a>
            <a href="echo-print.html">PHP Echo / Print</a>
            <a href="datatypes.html">PHP Data Types</a>
            <a href="strings.html">PHP Strings</a>
            <a href="numbers.html">PHP Numbers</a>
            <a href="casting.html">PHP Casting</a>
            <a href="math.html">PHP Math</a>
            <a href="constants.html">PHP Constants</a>
            <a href="magic-constants.html">PHP Magic Constants</a>
            <a href="operators.html">PHP Operators</a>
            <a href="if-else.html">PHP If...Else...Elseif</a>
            <a href="switch.html">PHP Switch</a>
            <a href="loops.html">PHP Loops</a>
            <a href="functions.html">PHP Functions</a>
            <a href="arrays.html">PHP Arrays</a>
        </nav>
    </div>
    <div class="content">
        <header>
            <h1>{{HEADER}}</h1>
        </header>
        <main>
            {{CONTENT}}
        </main>
    </div>
    <footer>
        This is Khaled's Tutorial 😎<br>
        &copy; <span id="current-year"></span> PHP Tutorial. All rights reserved.<br>
        <div id="current-time">
            Time: <span id="time-display"></span> | Date: <span id="date-display"></span> | Day: <span id="day-display"></span>
        </div>
    </footer>

    <script>
        // Update time every second
        function updateTime() {
            const now = new Date();
            const timeString = now.toLocaleTimeString('en-US', {
                hour12: false,
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit'
            });
            const dateString = now.toLocaleDateString('en-GB', {
                day: '2-digit',
                month: '2-digit',
                year: 'numeric'
            });
            const dayString = now.toLocaleDateString('en-US', { weekday: 'long' });
            const yearString = now.getFullYear();

            document.getElementById('time-display').textContent = timeString;
            document.getElementById('date-display').textContent = dateString;
            document.getElementById('day-display').textContent = dayString;
            document.getElementById('current-year').textContent = yearString;
        }

        // Update time immediately and then every second
        updateTime();
        setInterval(updateTime, 1000);
    </script>
</body>
</html>
"@

foreach ($phpFile in $phpFiles) {
    if (Test-Path $phpFile) {
        $htmlFile = $phpFile -replace '\.php$', '.html'
        $content = Get-Content $phpFile -Raw
        
        # Extract title from PHP file
        $titleMatch = [regex]::Match($content, '<h1>(.*?)</h1>')
        $title = if ($titleMatch.Success) { $titleMatch.Groups[1].Value } else { "PHP Tutorial" }
        
        # Extract main content (remove PHP includes and keep only the main content)
        $content = $content -replace '^\s*<\?php\s*include\s+.*?header\.php.*?;\s*\?>\s*', ''
        $content = $content -replace '^\s*<\?php\s*include\s+.*?sidebar\.php.*?;\s*\?>\s*', ''
        $content = $content -replace '^\s*<\?php\s*include\s+.*?footer\.php.*?;\s*\?>\s*', ''
        $content = $content -replace '^\s*<\?php\s*/\*\s*End\s+.*?\*/\s*\?>\s*', ''
        
        # Remove the outer div.content wrapper and keep only the inner content
        $content = $content -replace '^\s*<div\s+class="content">\s*', ''
        $content = $content -replace '^\s*<header>.*?</header>\s*', ''
        $content = $content -replace '^\s*</div>\s*$', ''
        
        # Update links in content to point to .html files
        $content = $content -replace '\.php(?=["\s])', '.html'
        
        # Create the HTML file
        $htmlContent = $htmlTemplate -replace '{{TITLE}}', $title -replace '{{HEADER}}', $title -replace '{{CONTENT}}', $content
        $htmlContent | Out-File -FilePath $htmlFile -Encoding UTF8
        
        Write-Host "Converted $phpFile to $htmlFile"
    }
}

Write-Host "Conversion completed!" 