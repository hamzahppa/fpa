<?php  ?>
<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
	<div class="mdl-card__title">
		<h2 class="mdl-card__title-text">Current Project</h2>
	</div>
	<div class="mdl-card__supporting-text">
	    There are the project you were working for. Choose edit icon to review and edit your work. Choose Add Project if you want to create one.
	    <ul class="mdl-list">
	    <?php for ($i=0; $i < count($modelFPA); $i++) : ?>
	    	<li class="mdl-list__item mdl-list__item--two-line">
	    		<span class="mdl-list__item-primary-content">
	    			<a href="<?php echo Yii::app()->createUrl('fpa/project/detail/', array('id'=>$modelFPA[$i]->id_fpa)) ?>"><i class="material-icons mdl-list__item-avatar" style="border-radius: 10%;">folder</i></a>
	    			<span><?php echo $modelFPA[$i]->nama_fpa; ?></span>
	    			<span class="mdl-list__item-sub-title"><?php echo $modelFPA[$i]->fp; ?> FP</span>
	    		</span>
	    	</li>
	    <?php endfor; ?>
	    </ul>
	</div>
	<div class="mdl-card__actions mdl-card--border">
		<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="<?php echo Yii::app()->createUrl('fpa/project/tambah'); ?>">
			Add Project
		</a>
	</div>
</div>