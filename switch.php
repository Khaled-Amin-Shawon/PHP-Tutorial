<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<div class="content">
    <header>
        <h1>PHP Switch</h1>
    </header>
    <main>
        <section class="section" id="switch">
            <h2>PHP Switch</h2>
            <p>The <code>switch</code> statement is used to perform different actions based on different conditions.</p>
            <pre>&lt;?php
    $color = "red";
    switch ($color) {
        case "red":
            echo "Color is red";
            break;
        case "blue":
            echo "Color is blue";
            break;
        default:
            echo "Color is neither red nor blue";
    }
?&gt;</pre>
            <p class="bangla"><code>switch</code> স্টেটমেন্ট ব্যবহার করে বিভিন্ন শর্ত অনুযায়ী বিভিন্ন কাজ করা যায়।</p>
            <pre class="bangla">&lt;?php
    $color = "লাল";
    switch ($color) {
        case "লাল":
            echo "রঙ লাল";
            break;
        case "নীল":
            echo "রঙ নীল";
            break;
        default:
            echo "রঙ লাল বা নীল নয়";
    }
?&gt;</pre>
        </section>
    </main>
<?php include 'footer.php'; ?> 