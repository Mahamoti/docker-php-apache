<h2>APP_ENV</h2>
<pre><?php print_r(APP_ENV); ?></pre>

<h2>locale</h2>
<pre><?php print_r(new DateTime()); ?></pre>
<pre><?php echo strftime("%d.%m.%Y, %A (%a), %B (%b)"); ?></pre>

<?php foreach (range(1, 12) as $month): ?>
    <?php $datetime = new DateTime(date('Y') . "-$month-01 00:00:00"); ?>
    <pre><?php echo strftime("%d.%m.%Y, %A (%a), %B (%b)", $datetime->getTimestamp()); ?></pre>
<?php endforeach; ?>

<h2>server</h2>
<pre><?php print_r($_SERVER); ?></pre>