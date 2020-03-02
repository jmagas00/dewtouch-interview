<div class="portlet box yellow">
	<div class="portlet-title">
		<div class="caption">
			<?php echo __('Mouse Over Result')?>
		</div>
	</div>
	<div class="portlet-body">
			
		<div class="row-fluid view_info">
			<div class="span12 ">
				<?php echo __("You chose: ")?>
				
				<?php foreach ($typeChoice as $choice) ?>

				<?php echo __($choice['type'])?>
			</div>
			
		</div>
			
	</div>
	
</div>


<?php $this->start('script_own')?>
<script>
$(document).ready(function(){
	

	
})
</script>
<?php $this->end()?>