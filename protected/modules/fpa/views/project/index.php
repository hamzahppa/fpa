<?php  ?>
<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
	<div class="mdl-card__title">
		<h2 class="mdl-card__title-text">Current Project</h2>
	</div>
	<div class="mdl-card__supporting-text">
		<?php if ($modelFPA == null): ?>
			No project found, you can add by clicking <b>Add Project</b> button below
		<?php else: ?>
		    There are the project you were working for. Choose edit icon to review and edit your work. Choose Add Project if you want to create one.
		    <ul class="mdl-list">
		    <?php for ($i=0; $i < count($modelFPA); $i++) : ?>
		    	<li class="mdl-list__item mdl-list__item--two-line">
		    		<span class="mdl-list__item-primary-content">
		    			<a href="<?php echo Yii::app()->createUrl('fpa/project/detail/', array('id'=>$modelFPA[$i]->id_fpa)) ?>"><i class="material-icons mdl-list__item-avatar" style="border-radius: 10%;">folder</i></a>
		    			<span><?php echo $modelFPA[$i]->nama_fpa; ?></span>
		    			<span class="mdl-list__item-sub-title">
		    				<?php if ($modelFPA[$i]->loc == 0 || $modelFPA[$i]->loc == null): ?>
		    					Unfinished
		    				<?php else: ?>
				    			<?php echo $modelFPA[$i]->loc; ?> LOC
		    				<?php endif ?>
		    			</span>
		    		</span>
					<span class="mdl-list__item-secondary-content">
						<a class="mdl-list__item-secondary-action" href="<?php echo Yii::app()->createUrl('fpa/project/select', array('id'=>$modelFPA[$i]->id_fpa)); ?>"><i class="material-icons">edit</i></a>
					</span>
		    	</li>
		    <?php endfor; ?>
		    </ul>
		<?php endif ?>
	</div>
	<div class="mdl-card__actions mdl-card--border">
		<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="<?php echo Yii::app()->createUrl('fpa/project/tambah'); ?>">
			Add Project
		</a>
	</div>
</div>