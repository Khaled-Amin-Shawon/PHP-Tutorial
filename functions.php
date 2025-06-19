<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<div class="content">
    <header>
        <h1>PHP Functions</h1>
    </header>
    <main>
        <section class="section" id="functions">
            <h2>PHP Functions</h2>
            <p>Functions are blocks of code that can be reused. Define a function using the <code>function</code> keyword.</p>
            <pre>&lt;?php
    function greet($name) {
        return "Hello, $name!";
    }
    echo greet("PHP");
?&gt;</pre>
            <div class="example-output">Hello, PHP!</div>
            <p class="bangla">ফাংশন হলো কোডের এমন একটি অংশ, যেটি বারবার ব্যবহার করা যায়। <code>function</code> কীওয়ার্ড দিয়ে ফাংশন ডিফাইন করা হয়।</p>
            <pre class="bangla">&lt;?php
    function greet($name) {
        return "হ্যালো, $name!";
    }
    echo greet("পিএইচপি");
?&gt;</pre>
            <div class="example-output">হ্যালো, পিএইচপি!</div>
        </section>
    </main>
<?php include 'footer.php'; ?> 