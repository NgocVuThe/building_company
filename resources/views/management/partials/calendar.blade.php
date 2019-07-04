<?php
/* Set the default timezone */
date_default_timezone_set("Asia/Ho_Chi_Minh");

/* Set the date */
$date = strtotime(date("Y-m-d"));

$day = date('d', $date);
$month = date('m', $date);
$year = date('Y', $date);
$firstDay = mktime(0,0,0,$month, 1, $year);
$title = strftime('%B', $firstDay);
$dayOfWeek = date('D', $firstDay);
$daysInMonth = cal_days_in_month(0, $month, $year);
/* Get the name of the week days */
$timestamp = strtotime('next Sunday');
$weekDays = array();
for ($i = 0; $i < 7; $i++) {
  $weekDays[] = strftime('%a', $timestamp);
  $timestamp = strtotime('+1 day', $timestamp);
}
$blank = date('w', strtotime("{$year}-{$month}-01"));
?>
<div class="row">
    <table class='table table-bordered text-center col-md-12 col-sm-8 col-xs-12' border=1 style="table-layout: auto; width: 100%;">
        <tr>
            <th colspan="7" class="text-center title_calendar"> <?php echo $title ?> <?php echo $year ?> </th>
        </tr>
        <tr>
            <?php foreach($weekDays as $key => $weekDay) : ?>
            <td class="text-center"><?php echo $weekDay ?></td>
            <?php endforeach ?>
        </tr>
        <tr>
            <?php for($i = 0; $i < $blank; $i++): ?>
            <td></td>
            <?php endfor; ?>
            <?php for($i = 1; $i <= $daysInMonth; $i++): ?>
            <?php if($day == $i): ?>
                <td class="this_day"><strong><?php echo $i ?></strong></td>
            <?php else: ?>
                <td><?php echo $i ?></td>
            <?php endif; ?>
            <?php if(($i + $blank) % 7 == 0): ?>
        </tr>
        <tr>
            <?php endif; ?>
            <?php endfor; ?>
            <?php for($i = 0; ($i + $blank + $daysInMonth) % 7 != 0; $i++): ?>
            <td></td>
            <?php endfor; ?>
        </tr>
    </table>
</div>