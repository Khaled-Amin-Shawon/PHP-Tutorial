<?php /* footer.php */ ?>
<footer>
    <?php echo "This is Khaled's Tutorial 😎"; ?><br>
    &copy; <?php echo date('Y'); ?> PHP Tutorial. All rights reserved.<br>
    <div id="current-time">
        <?php
        $currentTime = date("H:i:s");
        $currentDate = date("d-m-Y");
        $dayOfWeek = date("l");
        echo "Time: $currentTime | Date: $currentDate | Day: $dayOfWeek";
        ?>
    </div>
</footer>

<script>
    // Update time every second
    function updateTime() {
        const now = new Date();
        const timeString = now.toLocaleTimeString('en-US', {
            hour12: false,
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit'
        });
        const dateString = now.toLocaleDateString('en-GB', {
            day: '2-digit',
            month: '2-digit',
            year: 'numeric'
        });
        const dayString = now.toLocaleDateString('en-US', { weekday: 'long' });

        document.getElementById('current-time').innerHTML =
            `Time: ${timeString} | Date: ${dateString} | Day: ${dayString}`;
    }

    // Update time immediately and then every second
    updateTime();
    setInterval(updateTime, 1000);
</script>

</body>

</html>
<?php /* End footer.php */ ?>