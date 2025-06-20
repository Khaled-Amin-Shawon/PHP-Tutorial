<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<div class="content">
    <header>
        <h1>PHP Casting</h1>
    </header>
    <main>
        <section class="section" id="casting">
            <h2>PHP Casting</h2>
            <p>Casting is used to change a variable from one data type to another in PHP.</p>
            <pre>&lt;?php
    $x = 10.5;
    $y = (int)$x; // Cast float to integer
    echo $y; // 10
?&gt;</pre>
            <p class="bangla">PHP-তে কাস্টিং ব্যবহার করে একটি ভেরিয়েবলের ডেটা টাইপ পরিবর্তন করা যায়।</p>
            <pre class="bangla">&lt;?php
    $x = ১০.৫;
    $y = (int)$x; // float থেকে integer
    echo $y; // ১০
?&gt;</pre>
        </section>
    </main>
<?php include 'footer.php'; ?> 