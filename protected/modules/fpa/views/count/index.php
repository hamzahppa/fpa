<?php  ?>
<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--6-col mdl-grid">
	<div class="mdl-card__title">
		<h2 class="mdl-card__title-text">Function Point</h2>
	</div>
	<div class="mdl-card__supporting-text">
	    Based on your data, your project has Function Point as described below
	    <ul class="mdl-list">
	    	<li class="mdl-list__item mdl-list__item--two-line">
	    		<span class="mdl-list__item-primary-content">
	    			<i class="material-icons mdl-list__item-avatar" style="border-radius: 10%;">folder</i>
	    			<span><?php echo $modelFPA->nama_fpa; ?></span>
	    			<span class="mdl-list__item-sub-title"><?php echo "$modelFPA->fp" ?> FP</span>
	    		</span>
	    		<span class="mdl-list__item-secondary-content">
	    			<a class="mdl-list__item-secondary-action" href="<?php echo Yii::app()->createUrl('fpa/count/history') ?>"><i class="material-icons">assessment</i></a>
	    		</span>
	    	</li>
	    </ul>
	</div>
</div>

<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--6-col mdl-grid">
	<div class="mdl-card__title">
		<h2 class="mdl-card__title-text">LOC</h2>
	</div>
	<div class="mdl-card__supporting-text">
		By the Function Point your project have, it is estimated have the Line of Code (LOC) as described below
	    <ul class="mdl-list">
	    	<li class="mdl-list__item mdl-list__item--two-line">
	    		<span class="mdl-list__item-primary-content">
	    			<i class="material-icons mdl-list__item-avatar" style="border-radius: 10%;">folder</i>
	    			<span><?php echo $modelFPA->nama_fpa; ?></span>
	    			<span class="mdl-list__item-sub-title"><?php echo $modelFPA->loc; ?> LOC</span>
	    		</span>
	    		<span class="mdl-list__item-secondary-content">
	    			<a class="mdl-list__item-secondary-action" href="<?php echo Yii::app()->createUrl('fpa/count/history') ?>"><i class="material-icons">assessment</i></a>
	    		</span>
	    	</li>
	    </ul>
	</div>
</div>