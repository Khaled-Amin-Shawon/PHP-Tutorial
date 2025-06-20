<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<div class="content">
    <header>
        <h1>PHP Numbers</h1>
    </header>
    <main>
        <section class="section" id="numbers">
            <h2>PHP Numbers</h2>
            <p>PHP supports integers and floats (decimals). You can use arithmetic operators to perform calculations.</p>
            <pre>&lt;?php
    $a = 10;      // Integer
    $b = 4.5;     // Float
    $sum = $a + $b;
    $mul = $a * $b;
    echo $sum;    // 14.5
    echo $mul;    // 45
?&gt;</pre>
            <div class="example-output">14.5<br>45</div>
            <p class="bangla">PHP-তে integer (পূর্ণসংখ্যা) ও float (দশমিক সংখ্যা) আছে। গাণিতিক অপারেটর ব্যবহার করে হিসাব করা যায়।</p>
            <pre class="bangla">&lt;?php
    $a = ১০;      // Integer
    $b = ৪.৫;     // Float
    $sum = $a + $b;
    $mul = $a * $b;
    echo $sum;    // ১৪.৫
    echo $mul;    // ৪৫
?&gt;</pre>
            <div class="example-output">১৪.৫<br>৪৫</div>
        </section>
    </main>
<?php include 'footer.php'; ?> 