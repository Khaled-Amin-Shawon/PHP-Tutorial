<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<div class="content">
    <header>
        <h1>PHP Operators</h1>
    </header>
    <main>
        <section class="section" id="operators">
            <h2>Arithmetic Operators</h2>
            <p>Arithmetic operators are used to perform mathematical operations like addition, subtraction,
                multiplication, etc.</p>
            <table style="width:100%;border-collapse:collapse;margin-bottom:1.2rem;">
                <tr style="background:#f0f4fa;">
                    <th>Operator</th>
                    <th>Name</th>
                    <th>Example</th>
                </tr>
                <tr>
                    <td style="text-align:center">+</td>
                    <td>Addition</td>
                    <td>$a + $b</td>
                </tr>
                <tr>
                    <td style="text-align:center">-</td>
                    <td>Subtraction</td>
                    <td>$a - $b</td>
                </tr>
                <tr>
                    <td style="text-align:center">*</td>
                    <td>Multiplication</td>
                    <td>$a * $b</td>
                </tr>
                <tr>
                    <td style="text-align:center">/</td>
                    <td>Division</td>
                    <td>$a / $b</td>
                </tr>
                <tr>
                    <td style="text-align:center">%</td>
                    <td>Modulus</td>
                    <td>$a % $b</td>
                </tr>
            </table>
            <pre>&lt;?php
$a = 10;
$b = 3;
echo $a + $b; // 13
echo $a % $b; // 1
?&gt;</pre>

            <h2>Assignment Operators</h2>
            <p>Assignment operators are used to assign values to variables.</p>
            <table style="width:100%;border-collapse:collapse;margin-bottom:1.2rem;">
                <tr style="background:#f0f4fa;">
                    <th>Operator</th>
                    <th>Name</th>
                    <th>Example</th>
                </tr>
                <tr>
                    <td style="text-align:center">=</td>
                    <td>Assign</td>
                    <td>$a = 5</td>
                </tr>
                <tr>
                    <td style="text-align:center">+=</td>
                    <td>Add and assign</td>
                    <td>$a += 2</td>
                </tr>
                <tr>
                    <td style="text-align:center">-=</td>
                    <td>Subtract and assign</td>
                    <td>$a -= 2</td>
                </tr>
                <tr>
                    <td style="text-align:center">*=</td>
                    <td>Multiply and assign</td>
                    <td>$a *= 2</td>
                </tr>
                <tr>
                    <td style="text-align:center">/=</td>
                    <td>Divide and assign</td>
                    <td>$a /= 2</td>
                </tr>
            </table>
            <pre>&lt;?php
$a = 5;
$a += 3; // $a is now 8
?&gt;</pre>

            <h2>Comparison Operators</h2>
            <p>Comparison operators are used to compare two values and return true or false.</p>
            <table style="width:100%;border-collapse:collapse;margin-bottom:1.2rem;">
                <tr style="background:#f0f4fa;">
                    <th>Operator</th>
                    <th>Name</th>
                    <th>Example</th>
                </tr>
                <tr>
                    <td style="text-align:center">==</td>
                    <td>Equal</td>
                    <td>$a == $b</td>
                </tr>
                <tr>
                    <td style="text-align:center">!=</td>
                    <td>Not equal</td>
                    <td>$a != $b</td>
                </tr>
                <tr>
                    <td style="text-align:center">&lt;</td>
                    <td>Less than</td>
                    <td>$a &lt; $b</td>
                </tr>
                <tr>
                    <td style="text-align:center">&gt;</td>
                    <td>Greater than</td>
                    <td>$a &gt; $b</td>
                </tr>
                <tr>
                    <td style="text-align:center">&lt;=</td>
                    <td>Less than or equal</td>
                    <td>$a &lt;= $b</td>
                </tr>
                <tr>
                    <td style="text-align:center">&gt;=</td>
                    <td>Greater than or equal</td>
                    <td>$a &gt;= $b</td>
                </tr>
            </table>
            <pre>&lt;?php
$a = 5;
$b = 8;
if ($a < $b) {
    echo "a is less than b";
}
?&gt;</pre>

            <h2>Logical Operators</h2>
            <p>Logical operators are used to combine conditional statements.</p>
            <table style="width:100%;border-collapse:collapse;margin-bottom:1.2rem;">
                <tr style="background:#f0f4fa;">
                    <th>Operator</th>
                    <th>Name</th>
                    <th>Example</th>
                </tr>
                <tr>
                    <td style="text-align:center">&&</td>
                    <td>And</td>
                    <td>$a && $b</td>
                </tr>
                <tr>
                    <td style="text-align:center">||</td>
                    <td>Or</td>
                    <td>$a || $b</td>
                </tr>
                <tr>
                    <td style="text-align:center">!</td>
                    <td>Not</td>
                    <td>!$a</td>
                </tr>
            </table>
            <pre>&lt;?php
$a = true;
$b = false;
if ($a && !$b) {
    echo "a is true and b is false";
}
?&gt;</pre>

            <div class="note"
                style="background: #fef9c3; border-left: 5px solid #facc15; color: #7c5700; padding: 1rem 1.2rem; border-radius: 7px; margin-bottom: 1.3rem; font-size: 1.07rem;">
                <strong>Note:</strong> Operators are essential in PHP for performing calculations, making comparisons,
                and controlling logic. Mastering operators is key to writing effective PHP code.
            </div>
        </section>
    </main>
    <?php include 'footer.php'; ?>