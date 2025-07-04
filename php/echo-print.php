<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<div class="content">
    <header>
        <h1>PHP Echo / Print</h1>
    </header>
    <main>
        <section class="section" id="echo-print">
            <div class="note"
                style="background: #e0f2fe; border-left: 5px solid #0288d1; color: #01579b; padding: 1rem 1.2rem; border-radius: 7px; margin-bottom: 1.3rem; font-size: 1.07rem;">
                <strong>Note:</strong> Echo and Print are the two main output statements in PHP. They are used to
                display text, variables, and HTML content to the browser. Understanding the differences between them is
                crucial for effective PHP programming.
            </div>

            <h2>What are Echo and Print?</h2>
            <p>In PHP, <strong>echo</strong> and <strong>print</strong> are language constructs used to output data to
                the browser. They are among the most fundamental and frequently used statements in PHP programming.</p>

            <h2>Basic Syntax</h2>
            <p>Both echo and print can be used with or without parentheses:</p>
            <pre>&lt;?php
// Using echo
echo "Hello World!";
echo("Hello World!");

// Using print
print "Hello World!";
print("Hello World!");
?&gt;</pre>
            <div class="example-output">Hello World!<br>Hello World!<br>Hello World!<br>Hello World!</div>

            <h2>Key Differences Between Echo and Print</h2>
            <table style="width:100%;border-collapse:collapse;margin-bottom:1.2rem;">
                <tr style="background:#f0f4fa;">
                    <th>Feature</th>
                    <th>Echo</th>
                    <th>Print</th>
                </tr>
                <tr>
                    <td style="text-align:center"><strong>Return Value</strong></td>
                    <td>No return value (void)</td>
                    <td>Always returns 1</td>
                </tr>
                <tr>
                    <td style="text-align:center"><strong>Multiple Parameters</strong></td>
                    <td>Can output multiple values</td>
                    <td>Can only output one value</td>
                </tr>
                <tr>
                    <td style="text-align:center"><strong>Performance</strong></td>
                    <td>Slightly faster</td>
                    <td>Slower than echo</td>
                </tr>
                <tr>
                    <td style="text-align:center"><strong>Usage in Expressions</strong></td>
                    <td>Cannot be used in expressions</td>
                    <td>Can be used in expressions</td>
                </tr>
            </table>

            <h2>Echo Examples</h2>
            <h3>1. Outputting Text</h3>
            <pre>&lt;?php
echo "Welcome to PHP Tutorial!";
echo "This is a new line";
?&gt;</pre>
            <div class="example-output">Welcome to PHP Tutorial!This is a new line</div>

            <h3>2. Outputting Multiple Values</h3>
            <pre>&lt;?php
$name = "John";
$age = 25;
echo "Name: ", $name, ", Age: ", $age;
?&gt;</pre>
            <div class="example-output">Name: John, Age: 25</div>

            <h3>3. Outputting HTML</h3>
            <pre>&lt;?php
echo "&lt;h1&gt;PHP Tutorial&lt;/h1&gt;";
echo "&lt;p&gt;This is a paragraph.&lt;/p&gt;";
echo "&lt;ul&gt;";
echo "&lt;li&gt;Item 1&lt;/li&gt;";
echo "&lt;li&gt;Item 2&lt;/li&gt;";
echo "&lt;/ul&gt;";
?&gt;</pre>
            <div class="example-output">
                <h1>PHP Tutorial</h1>
                <p>This is a paragraph.</p>
                <ul>
                    <li>Item 1</li>
                    <li>Item 2</li>
                </ul>
            </div>

            <h2>Print Examples</h2>
            <h3>1. Basic Print Usage</h3>
            <pre>&lt;?php
print "Hello from Print!";
?&gt;</pre>
            <div class="example-output">Hello from Print!</div>

            <h3>2. Print in Expressions</h3>
            <pre>&lt;?php
$result = print "Hello World!";
echo "Print returned: " . $result;
?&gt;</pre>
            <div class="example-output">Hello World!Print returned: 1</div>

            <h3>3. Print with Variables</h3>
            <pre>&lt;?php
$message = "Welcome to PHP!";
print $message;
?&gt;</pre>
            <div class="example-output">Welcome to PHP!</div>

            <h2>Advanced Usage</h2>
            <h3>1. Echo with Concatenation</h3>
            <pre>&lt;?php
$firstName = "John";
$lastName = "Doe";
echo "Full Name: " . $firstName . " " . $lastName;
?&gt;</pre>
            <div class="example-output">Full Name: John Doe</div>

            <h3>2. Echo with HTML and CSS</h3>
            <pre>&lt;?php
$color = "blue";
echo "&lt;div style='color: $color; font-size: 18px;'&gt;";
echo "This text is styled with PHP!";
echo "&lt;/div&gt;";
?&gt;</pre>
            <div class="example-output">
                <div style="color: blue; font-size: 18px;">This text is styled with PHP!</div>
            </div>

            <h3>3. Echo with Arrays</h3>
            <pre>&lt;?php
$fruits = ["Apple", "Banana", "Orange"];
echo "Fruits: ";
foreach($fruits as $fruit) {
    echo $fruit . ", ";
}
?&gt;</pre>
            <div class="example-output">Fruits: Apple, Banana, Orange, </div>

            <h2>Best Practices</h2>
            <ul>
                <li><strong>Use echo for simple output:</strong> When you just need to display text or variables, echo
                    is the preferred choice.</li>
                <li><strong>Use print in expressions:</strong> When you need to use the output statement within an
                    expression or need a return value.</li>
                <li><strong>Consistent formatting:</strong> Choose one style (with or without parentheses) and stick to
                    it throughout your code.</li>
                <li><strong>Escape special characters:</strong> Use proper escaping when outputting HTML or special
                    characters.</li>
                <li><strong>Performance consideration:</strong> For large-scale applications, echo is slightly more
                    efficient.</li>
            </ul>

            <h2>Common Mistakes to Avoid</h2>
            <div class="warning"
                style="background: #fff3cd; border-left: 5px solid #ffc107; color: #856404; padding: 1rem 1.2rem; border-radius: 7px; margin-bottom: 1.3rem;">
                <strong>Warning:</strong> Avoid these common pitfalls when using echo and print.
            </div>
            <ul>
                <li><strong>Missing semicolon:</strong> Always end statements with a semicolon.</li>
                <li><strong>Unclosed quotes:</strong> Ensure all quotes are properly closed.</li>
                <li><strong>Using echo in expressions:</strong> Echo cannot be used in expressions like print can.</li>
                <li><strong>Forgetting HTML structure:</strong> When outputting HTML, ensure proper structure and
                    closing tags.</li>
            </ul>

            <h2>Practice Examples</h2>
            <h3>Example 1: Simple Calculator Output</h3>
            <pre>&lt;?php
$num1 = 10;
$num2 = 5;
$sum = $num1 + $num2;
$difference = $num1 - $num2;

echo "&lt;h3&gt;Calculator Results&lt;/h3&gt;";
echo "&lt;p&gt;Number 1: $num1&lt;/p&gt;";
echo "&lt;p&gt;Number 2: $num2&lt;/p&gt;";
echo "&lt;p&gt;Sum: $sum&lt;/p&gt;";
echo "&lt;p&gt;Difference: $difference&lt;/p&gt;";
?&gt;</pre>

            <h3>Example 2: Dynamic Content Generation</h3>
            <pre>&lt;?php
$currentTime = date("H:i:s");
$currentDate = date("Y-m-d");
$dayOfWeek = date("l");

echo "&lt;div style='background: #f8f9fa; padding: 15px; border-radius: 5px;'&gt;";
echo "&lt;h4&gt;Current Information&lt;/h4&gt;";
echo "&lt;p&gt;Time: $currentTime&lt;/p&gt;";
echo "&lt;p&gt;Date: $currentDate&lt;/p&gt;";
echo "&lt;p&gt;Day: $dayOfWeek&lt;/p&gt;";
echo "&lt;/div&gt;";
?&gt;</pre>

            <div class="note"
                style="background: #d4edda; border-left: 5px solid #28a745; color: #155724; padding: 1rem 1.2rem; border-radius: 7px; margin-top: 1.3rem; font-size: 1.07rem;">
                <strong>Tip:</strong> Echo and Print are essential for any PHP application. Master these output
                statements as they form the foundation of dynamic web content generation in PHP.
            </div>
        </section>
    </main>
    <?php include 'footer.php'; ?>