<?php $this->beginContent(Rights::module()->appLayout); ?>

<div id="rights" class="container">

	<div id="content">

		<?php if( $this->id!=='install' ): ?>

		<?php endif; ?>

		<?php $this->renderPartial('/_flash'); ?>

		<?php echo $content; ?>

        <div id="menu">

            <?php $this->renderPartial('/_menu'); ?>

        </div>

	</div><!-- content -->


</div>

<?php $this->endContent(); ?>