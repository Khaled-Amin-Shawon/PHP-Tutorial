<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<div class="content">
    <header>
        <h1>PHP Data Types</h1>
    </header>
    <main>
        <section class="section" id="datatypes">
            <h2>PHP Data Types</h2>
            <p>PHP supports several data types, including:</p>
            <ul>
                <li><strong>String</strong> - sequence of characters</li>
                <li><strong>Integer</strong> - whole numbers</li>
                <li><strong>Float (double)</strong> - decimal numbers</li>
                <li><strong>Boolean</strong> - true or false</li>
                <li><strong>Array</strong> - collection of values</li>
                <li><strong>Object</strong> - instance of a class</li>
                <li><strong>NULL</strong> - variable with no value</li>
                <li><strong>Resource</strong> - special variable holding a reference to an external resource</li>
            </ul>
            <pre>&lt;?php
    $str = "Hello"; // String
    $x = 10;        // Integer
    $y = 10.5;      // Float
    $b = true;      // Boolean
    $arr = [1,2,3]; // Array
    $obj = (object)["a" => 1]; // Object
    $n = null;      // NULL
?&gt;</pre>
            <p class="bangla">PHP-তে নিচের ডেটা টাইপগুলো আছে:</p>
            <ul class="bangla">
                <li><strong>String</strong> - অক্ষরের সিকোয়েন্স</li>
                <li><strong>Integer</strong> - পূর্ণসংখ্যা</li>
                <li><strong>Float (double)</strong> - দশমিক সংখ্যা</li>
                <li><strong>Boolean</strong> - সত্য (true) বা মিথ্যা (false)</li>
                <li><strong>Array</strong> - একাধিক মানের সংগ্রহ</li>
                <li><strong>Object</strong> - ক্লাসের ইনস্ট্যান্স</li>
                <li><strong>NULL</strong> - কোনো মান নেই</li>
                <li><strong>Resource</strong> - বাইরের কোনো রিসোর্সের রেফারেন্স</li>
            </ul>
            <pre class="bangla">&lt;?php
    $str = "হ্যালো"; // String
    $x = ১০;         // Integer
    $y = ১০.৫;       // Float
    $b = true;       // Boolean
    $arr = [১,২,৩];  // Array
    $obj = (object)["a" => ১]; // Object
    $n = null;       // NULL
?&gt;</pre>
        </section>
    </main>
<?php include 'footer.php'; ?> 