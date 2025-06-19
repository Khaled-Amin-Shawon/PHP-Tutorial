<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<div class="content">
    <header>
        <h1>PHP Strings</h1>
    </header>
    <main>
        <section class="section" id="strings">
            <h2>What is a String?</h2>
            <p>
                In PHP, a string is a sequence of characters, like "Hello, world!". Strings are used to store and manipulate text.
            </p>
            <p class="bangla">
                PHP-তে স্ট্রিং হলো অক্ষরের একটি সিকোয়েন্স, যেমন "Hello, world!"। টেক্সট সংরক্ষণ ও ব্যবহারের জন্য স্ট্রিং ব্যবহার করা হয়।
            </p>
            <h3>String Example</h3>
            <pre>
&lt;?php
$txt = "Hello, PHP!";
echo $txt;
?&gt;
            </pre>
            <div class="example-output">
                Hello, PHP!
            </div>
            <pre class="bangla">
&lt;?php
$txt = "হ্যালো, পিএইচপি!";
echo $txt;
?&gt;
            </pre>
            <div class="example-output">
                হ্যালো, পিএইচপি!
            </div>
            <h3>String Functions</h3>
            <p>
                PHP has many built-in string functions, such as <code>strlen()</code>, <code>strtoupper()</code>, <code>strtolower()</code>, <code>str_replace()</code>, etc.
            </p>
            <p class="bangla">
                PHP-তে অনেক বিল্ট-ইন স্ট্রিং ফাংশন আছে, যেমন <code>strlen()</code>, <code>strtoupper()</code>, <code>strtolower()</code>, <code>str_replace()</code> ইত্যাদি।
            </p>
            <pre>
&lt;?php
$str = "Hello World";
echo strlen($str);         // 11
echo strtoupper($str);     // HELLO WORLD
echo strtolower($str);     // hello world
echo str_replace("World", "PHP", $str); // Hello PHP
?&gt;
            </pre>
            <div class="example-output">
                11<br>
                HELLO WORLD<br>
                hello world<br>
                Hello PHP
            </div>
            <pre class="bangla">
&lt;?php
$str = "হ্যালো ওয়ার্ল্ড";
echo strlen($str);         // 25 (বাংলা অক্ষর গুনে ভিন্ন হতে পারে)
echo strtoupper($str);     // strtoupper বাংলা অক্ষরে কাজ নাও করতে পারে
echo strtolower($str);     // strtolower বাংলা অক্ষরে কাজ নাও করতে পারে
echo str_replace("ওয়ার্ল্ড", "পিএইচপি", $str); // হ্যালো পিএইচপি
?&gt;
            </pre>
            <div class="example-output">
                25<br>
                হ্যালো ওয়ার্ল্ড<br>
                হ্যালো ওয়ার্ল্ড<br>
                হ্যালো পিএইচপি
            </div>
        </section>
    </main>
<?php include 'footer.php'; ?>