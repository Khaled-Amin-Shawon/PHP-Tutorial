<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<div class="content">
    <header>
        <h1>PHP Magic Constants</h1>
    </header>
    <main>
        <section class="section" id="magic-constants">
            <h2>PHP Magic Constants</h2>
            <p>Magic constants are predefined constants in PHP that change depending on where they are used. Examples include <code>__LINE__</code>, <code>__FILE__</code>, <code>__DIR__</code>, <code>__FUNCTION__</code>, etc.</p>
            <pre>&lt;?php
    echo __LINE__;      // Current line number
    echo __FILE__;      // Full path of the file
    echo __DIR__;       // Directory of the file
?&gt;</pre>
            <p class="bangla">ম্যাজিক কনস্ট্যান্ট হলো PHP-তে কিছু প্রি-ডিফাইন্ড কনস্ট্যান্ট, যেগুলোর মান ব্যবহারের জায়গা অনুযায়ী পরিবর্তিত হয়। যেমন: <code>__LINE__</code>, <code>__FILE__</code>, <code>__DIR__</code>, <code>__FUNCTION__</code> ইত্যাদি।</p>
            <pre class="bangla">&lt;?php
    echo __LINE__;      // বর্তমান লাইনের নাম্বার
    echo __FILE__;      // ফাইলের সম্পূর্ণ পাথ
    echo __DIR__;       // ফাইলের ডিরেক্টরি
?&gt;</pre>
        </section>
    </main>
<?php include 'footer.php'; ?> 