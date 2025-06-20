<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<div class="content">
    <header>
        <h1>PHP Loops</h1>
    </header>
    <main>
        <section class="section" id="loops">
            <h2>PHP Loops</h2>
            <p>Loops are used to execute the same block of code multiple times. Common loops in PHP are <code>for</code>, <code>while</code>, and <code>foreach</code>.</p>
            <h3>for loop</h3>
            <pre>&lt;?php
    for ($i = 1; $i <= 3; $i++) {
        echo $i;
    }
?&gt;</pre>
            <div class="example-output">123</div>
            <h3>while loop</h3>
            <pre>&lt;?php
    $i = 1;
    while ($i <= 3) {
        echo $i;
        $i++;
    }
?&gt;</pre>
            <div class="example-output">123</div>
            <h3>foreach loop</h3>
            <pre>&lt;?php
    $arr = ["a", "b", "c"];
    foreach ($arr as $val) {
        echo $val;
    }
?&gt;</pre>
            <div class="example-output">abc</div>
            <p class="bangla">একই কোড বারবার চালাতে লুপ ব্যবহার করা হয়। PHP-তে সাধারণত <code>for</code>, <code>while</code>, <code>foreach</code> লুপ ব্যবহৃত হয়।</p>
            <h3 class="bangla">for loop</h3>
            <pre class="bangla">&lt;?php
    for ($i = ১; $i <= ৩; $i++) {
        echo $i;
    }
?&gt;</pre>
            <div class="example-output">১২৩</div>
            <h3 class="bangla">while loop</h3>
            <pre class="bangla">&lt;?php
    $i = ১;
    while ($i <= ৩) {
        echo $i;
        $i++;
    }
?&gt;</pre>
            <div class="example-output">১২৩</div>
            <h3 class="bangla">foreach loop</h3>
            <pre class="bangla">&lt;?php
    $arr = ["ক", "খ", "গ"];
    foreach ($arr as $val) {
        echo $val;
    }
?&gt;</pre>
            <div class="example-output">কখগ</div>
        </section>
    </main>
<?php include 'footer.php'; ?> 