<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<div class="content">
    <header>
        <h1>PHP Arrays</h1>
    </header>
    <main>
        <section class="section" id="arrays">
            <h2>PHP Arrays</h2>
            <p>Arrays are used to store multiple values in a single variable. There are indexed arrays and associative arrays.</p>
            <h3>Indexed Array</h3>
            <pre>&lt;?php
    $fruits = ["Apple", "Banana", "Cherry"];
    echo $fruits[0]; // Apple
?&gt;</pre>
            <div class="example-output">Apple</div>
            <h3>Associative Array</h3>
            <pre>&lt;?php
    $ages = ["Peter" => 22, "John" => 25];
    echo $ages["John"]; // 25
?&gt;</pre>
            <div class="example-output">25</div>
            <p class="bangla">একটি ভেরিয়েবলে একাধিক মান সংরক্ষণ করতে অ্যারে ব্যবহার করা হয়। দুই ধরনের অ্যারে আছে: ইনডেক্সড ও অ্যাসোসিয়েটিভ।</p>
            <h3 class="bangla">ইনডেক্সড অ্যারে</h3>
            <pre class="bangla">&lt;?php
    $fruits = ["আপেল", "কলা", "চেরি"];
    echo $fruits[0]; // আপেল
?&gt;</pre>
            <div class="example-output">আপেল</div>
            <h3 class="bangla">অ্যাসোসিয়েটিভ অ্যারে</h3>
            <pre class="bangla">&lt;?php
    $ages = ["পিটার" => ২২, "জন" => ২৫];
    echo $ages["জন"]; // ২৫
?&gt;</pre>
            <div class="example-output">২৫</div>
        </section>
    </main>
<?php include 'footer.php'; ?> 