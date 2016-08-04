<?php  ?>
<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
	<div class="mdl-card__title">
		<h2 class="mdl-card__title-text">Informasi Project</h2>
	</div>
	<div class="mdl-card__supporting-text">
		Berikut adalah informasi lengkap untuk project yang anda kerjakan
	</div>
	<!-- Project Description -->
	<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
		<div class="fpa-card-title mdl-card__title">
			<h2 class="mdl-card__title-text">Project</h2>
		</div>
		<div class="mdl-card__supporting-text">
			<ul class="fpa-list-three mdl-list" style="padding-top: 0;">
			  <li class="fpa-list mdl-list__item mdl-list__item--three-line">
			    <span class="mdl-list__item-primary-content">
			      <i class="fpa-icon material-icons mdl-list__item-avatar" style="border-radius: 10%;">folder</i>
			      <span><?php echo $model->nama_fpa; ?></span>
			      <span class="mdl-list__item-text-body">
			      	<?php echo $model->deskripsi; ?>
			      </span>
			    </span>
			  </li>
			</ul>
		</div>
		<div class="mdl-card__actions mdl-card--border">
			<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="<?php echo Yii::app()->createUrl('fpa/project/edit', array('id'=>$model->id_fpa)); ?>">
				Ubah Deskripsi Project
			</a>
		</div>
	</div>
	<!-- Project GSC -->
	<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
		<div class="fpa-card-title mdl-card__title">
			<h2 class="fpa-card-title mdl-card__title-text">General System Characteristics (GSC's)</h2>
		</div>
		<div class="mdl-card__supporting-text">
			<ul class="fpa-list-three mdl-list">
			<?php if ($model->fpaTdis == null): ?>
				Belum ada bobot GSC, anda dapat menambahkan melalui <b>Tambah Nilai TDI</b> pada tab menu di kiri atau melalui tombol <b>Lanjutkan Tambah Nilai</b> dibawah.
				<?php $i = 0; ?>
			<?php else: ?>
				<?php $i=0;foreach ($model->fpaTdis as $Tdis): ?>
				  <li class="fpa-list mdl-list__item mdl-list__item--three-line">
				    <span class="mdl-list__item-primary-content">
				      <!-- <i class="fpa-icon material-icons mdl-list__item-avatar" style="border-radius: 10%;">data_usage</i> -->
				      <a href="<?php echo Yii::app()->createUrl('fpa/tdi/addTdi', array('id_gsc'=>$Tdis->id_gsc, 'stat'=>'edit')) ?>"><div class="fpa-icon material-icons mdl-badge mdl-badge--overlap mdl-list__item-avatar" data-badge="<?php echo $Tdis->value ?>" style="border-radius: 10%;">edit</div></a>
				      <span ><?php echo $Tdis->idGsc->gsc_id; ?></span>
				      <span class="mdl-list__item-text-body">
				      	<?php 
				      		$i++;
				      		$modelGscPoint = $this->getGscPoint($Tdis->id_gsc, $Tdis->value);
				      		if ($modelGscPoint === null) {
				      			echo "Not Set";
				      		}else {
				      			echo $modelGscPoint->point_id;
				      		}
				      	?>
				      </span>
				    </span>
				  </li>
				<?php endforeach; ?>
			<?php endif ?>
			</ul>
		</div>
		<div class="mdl-card__actions mdl-card--border">
		<?php if ($i < 14): ?>
			<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="<?php echo Yii::app()->createUrl('fpa/project/editTdi', array('id'=>$model->id_fpa)); ?>">
				Lanjutkan Tambah Nilai
			</a>
		<?php else: ?>
			<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="<?php echo Yii::app()->createUrl('fpa/project/editTdi', array('id'=>$model->id_fpa)); ?>">
				Ubah Nilai GSC's
			</a>
		<?php endif ?>
		</div>
	</div>
	<!-- Project Table -->
	<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
		<div class="mdl-card__title">
			<h2 class="mdl-card__title-text">Table</h2>
		</div>
		<div class="fpa-supporting-text mdl-card__supporting-text">
		<?php if ($modelTable == null): ?>
			Belum ada data tabel. Anda dapat menambahkan tabel melalui menu <b>Tambah Function</b> pada tab menu disebelah kiri
		<?php else: ?>
		    <div class="table-responsive-vertical shadow-z-1">
		      <!-- Table starts here -->
		      <table id="table" class="table table-hover table-bordered">
		        <thead>
		          <tr>
		            <th>No</th>
		            <th>Tabel</th>
		            <th>Jenis</th>
		            <th>Bahasa Pemrograman</th>
		            <th>DET</th>
		            <th>RET</th>
		          </tr>
		        </thead>
		        <tbody>
		        <?php $i=1; foreach ($modelTable as $Tables): ?>
		          <tr>
		            <td data-title="No"><?php echo $i++; ?></td>
		            <td data-title="Function"><?php echo $Tables->nama_fp; ?></td>
		            <td data-title="Type"><?php echo $Tables->tipe; ?></td>
		            <td data-title="Programming"><?php echo $Tables->bahasa; ?></td>
		            <td data-title="DET"><?php echo $Tables->DET; ?></td>
		            <td data-title="RET"><?php echo $Tables->RET; ?></td>
		          </tr>
		        <?php endforeach; ?>
		        </tbody>
		      </table>
		    </div>
		<?php endif ?>
		</div>
	</div>
	<!-- Project Function -->
	<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
		<div class="mdl-card__title">
			<h2 class="mdl-card__title-text">Function(s)</h2>
		</div>
		<div class="fpa-supporting-text mdl-card__supporting-text">
		<?php if ($modelFunction == null): ?>
			Belum ada data fungsional. Anda dapat menambahkan fungsional melalui menu <b>Tambah Function</b> pada tab menu disebelah kiri
		<?php else: ?>
		    <div class="table-responsive-vertical shadow-z-1">
		      <!-- Table starts here -->
		      <table id="table" class="table table-hover table-bordered">
		        <thead>
		          <tr>
		            <th>No</th>
		            <th>FUngsional</th>
		            <th>Jenis</th>
		            <th>Bahasa Pemrograman</th>
		            <th>DET</th>
		            <th>FTR</th>
		          </tr>
		        </thead>
		        <tbody>
		        <?php $i=1; foreach ($modelFunction as $Fps): ?>
		          <tr>
		            <td data-title="No"><?php echo $i++ ?></td>
		            <td data-title="Function"><?php echo $Fps->nama_fp; ?></td>
		            <td data-title="Type"><?php echo $Fps->tipe; ?></td>
		            <td data-title="Programming"><?php echo $Fps->bahasa; ?></td>
		            <td data-title="DET"><?php echo $Fps->DET; ?></td>
		            <td data-title="FTR"><?php echo $Fps->FTR; ?></td>
		          </tr>
		        <?php endforeach; ?>
		        </tbody>
		      </table>
		    </div>
		<?php endif ?>
		</div>
	</div>
	<!-- Action -->
	<div class="mdl-card__actions mdl-card--border">
		<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="<?php echo Yii::app()->createUrl('fpa/project/done'); ?>">
			Selesai
		</a>
	</div>
</div>