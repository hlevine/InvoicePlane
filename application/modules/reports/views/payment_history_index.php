<div class="headerbar">
	<h1><?php echo lang('payment_history'); ?></h1>
</div>

<div class="content">

	<?php $this->layout->load_view('layout/alerts'); ?>

	<div id="report_options" class="panel panel-default">

		<div class="panel-heading">
			<h3 class="panel-title">
                <i class="fa fa-print"></i>
                <?php echo lang('report_options'); ?>
            </h3>
		</div>

		<div class="panel-body">

			<form method="post"
                  action="<?php echo site_url($this->uri->uri_string()); ?>" >
				
				<div class="form-group has-feedback">
					<label for="from_date">
                        <?php echo lang('from_date'); ?>
                    </label>

                    <div class="date datepicker">
                        <input size="16" type="text" name="from_date"
                               class="form-control datepicker"
                               id="from_date" value="" readonly>
                        <span class="fa fa-calendar form-control-feedback"></span>
                    </div>
				</div>

                <div class="form-group has-feedback">
                    <label for="to_date">
                        <?php echo lang('to_date'); ?>
                    </label>

                    <div class="date datepicker">
                        <input size="16" type="text" name="to_date"
                               class="form-control datepicker"
                               id="to_date" value="" readonly>
                        <span class="fa fa-calendar form-control-feedback"></span>
                    </div>
                </div>

                <input type="submit" class="btn btn-success" name="btn_submit"
                       value="<?php echo lang('run_report'); ?>">

			</form>

		</div>

	</div>

</div>