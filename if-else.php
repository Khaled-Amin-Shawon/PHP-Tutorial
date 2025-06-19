<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<div class="content">
    <header>
        <h1>PHP If...Else...Elseif</h1>
    </header>
    <main>
        <section class="section" id="if-else">
            <h2>PHP If...Else...Elseif</h2>
            <p>Conditional statements are used to perform actions based on conditions. Use <code>if</code>, <code>else</code>, and <code>elseif</code> to control the flow.</p>
            <pre>&lt;?php
    $x = 10;
    if ($x > 5) {
        echo "x is greater than 5";
    } elseif ($x == 5) {
        echo "x is 5";
    } else {
        echo "x is less than 5";
    }
?&gt;</pre>
            <p class="bangla">শর্ত অনুযায়ী কাজ করতে <code>if</code>, <code>else</code>, <code>elseif</code> ব্যবহার করা হয়।</p>
            <pre class="bangla">&lt;?php
    $x = ১০;
    if ($x > ৫) {
        echo "x ৫ এর চেয়ে বড়";
    } elseif ($x == ৫) {
        echo "x ৫";
    } else {
        echo "x ৫ এর চেয়ে ছোট";
    }
?&gt;</pre>
        </section>
    </main>
<?php include 'footer.php'; ?> 