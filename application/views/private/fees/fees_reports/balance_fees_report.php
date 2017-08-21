<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 8/9/2017
 * Time: 12:30 AM
 */
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <p class="text-info" style="font-size: 20px;">Balance Fees Report</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <p class="text-danger">If fees received is less than due fees amount, then remaining
                amount is shown in this representation. </p>
        </div>
        <div class="col-lg-3">
            <?php echo form_open('fees_reports/balance_fees_reports',
                ['class' => 'form-horizontal']); ?>
            <?php echo form_submit(['name' => 'submit', 'value' => 'Ok',
                'class' => 'btn btn-success',
                'style' => '']); ?>
            <?php echo form_submit(['name' => 'submit', 'value' => 'Print',
                'class' => 'btn btn-success',
                'style' => '']); ?>

        </div>
        <div class="col-lg-3">

            <?php echo form_close();?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table  table-hover ">
                <thead>
                <tr class="info">
                    <th>Name</th>
                    <th>Father</th>
                    <th>Mobile</th>
                    <th>Class</th>
                    <th>Section</th>
                    <th>Admission No.</th>
                    <th>Roll No.</th>
                    <th>Balance</th>
                </tr>
                </thead>
                <tbody>
                <tr class="success">
                    <td></td>
                </tr>
                </tbody>
            </table>

        </div>
    </div>

</div>