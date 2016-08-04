<?php  ?>
<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
	<div class="mdl-card__title">
		<h2 class="mdl-card__title-text">Project yang telah ditambahkan</h2>
	</div>
	<div class="mdl-card__supporting-text">
		<?php if ($modelFPA == null): ?>
			Belum ada <i>project</i>, tambahkan melalui tombol <b>Tambah Project</b> dibawah
		<?php else: ?>
			Daftar <i>project</i> yang telah ditambahkan. Pilih ikon <i>edit</i> untuk mengubah data project. Pilih tombol <b>Tambah Project</b> untuk menambahkan baru.
		    <ul class="mdl-list">
		    <?php for ($i=0; $i < count($modelFPA); $i++) : ?>
		    	<li class="mdl-list__item mdl-list__item--two-line">
		    		<span class="mdl-list__item-primary-content">
		    			<a href="<?php echo Yii::app()->createUrl('fpa/project/detail/', array('id'=>$modelFPA[$i]->id_fpa)) ?>"><i class="material-icons mdl-list__item-avatar" style="border-radius: 10%;">folder</i></a>
		    			<span><?php echo $modelFPA[$i]->nama_fpa; ?></span>
		    			<span class="mdl-list__item-sub-title">
		    				<?php if ($modelFPA[$i]->loc == 0 || $modelFPA[$i]->loc == null): ?>
		    					<p style="color: red">Data belum lengkap</p>
		    				<?php else: ?>
				    			<?php echo round($modelFPA[$i]->loc, 1); ?> LOC
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
			Tambah Project
		</a>
	</div>
</div>