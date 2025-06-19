<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<div class="content">
    <header>
        <h1>PHP Constants</h1>
    </header>
    <main>
        <section class="section" id="constants">
            <h2>PHP Constants</h2>
            <p>Constants are like variables, but once defined, they cannot be changed. Use <code>define()</code> to create a constant.</p>
            <pre>&lt;?php
    define("SITE_NAME", "My Website");
    echo SITE_NAME;
?&gt;</pre>
            <p class="bangla">কনস্ট্যান্ট ভেরিয়েবলের মতো, তবে একবার ডিফাইন করলে পরিবর্তন করা যায় না। <code>define()</code> ফাংশন দিয়ে কনস্ট্যান্ট তৈরি করা হয়।</p>
            <pre class="bangla">&lt;?php
    define("SITE_NAME", "আমার ওয়েবসাইট");
    echo SITE_NAME;
?&gt;</pre>
        </section>
    </main>
<?php include 'footer.php'; ?> 