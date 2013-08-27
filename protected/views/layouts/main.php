<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />



    <!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />




	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <?php Yii::app()->bootstrap->register() ?>
</head>

<body>

<div class="container" id="page">
	<div id="header">
		<div id="logo">
            <?php
            if(!Yii::app()->user->isGuest){

            $this->widget('bootstrap.widgets.TbNavbar', array(
                'type'=>'inverse', // null or 'inverse'
                'brand'=>'Project name',
                'brandUrl'=>'#',
                'collapse'=>true, // requires bootstrap-responsive.css
                'items'=>array(
                    array(
                        'class'=>'bootstrap.widgets.TbMenu',
                        'items'=>array(
                            array('label'=>'Home', 'url'=>array('/site/index'), 'icon'=>'home'),
                            array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                            array('label'=>'Contact', 'url'=>array('/site/contact')),
                            array('label'=>'User', 'url'=>array('/user')),
                            array('label'=>'Rights', 'url'=>array('/rights')),
                            array('label'=>'Gii', 'url'=>'index.php?r=gii'),
                            array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                            array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
                            array('label'=>'Dropdown', 'url'=>'#', 'items'=>array(
                                array('label'=>'Action', 'url'=>'#'),
                                array('label'=>'Another action', 'url'=>'#'),
                                array('label'=>'Something else here', 'url'=>'#'),
                                '---',
                                array('label'=>'NAV HEADER'),
                                array('label'=>'Separated link', 'url'=>'#'),
                                array('label'=>'One more separated link', 'url'=>'#'),
                            )),
                        ),
                    ),
                    '<form class="navbar-search pull-left" action=""><input type="text" class="search-query span2" placeholder="Search"></form>',

                ),
            ));
            }?>
		</div>

	</div><!-- header -->

	<div id="mainmenu">


	</div><!-- mainmenu -->

    <div class="clear"></div>

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>



</div><!-- page -->

    <?php if(!Yii::app()->user->isGuest){
        echo "<div id='footer'>";
        echo "Copyright &copy;" .date('Y'). "by My Company.<br/> All Rights Reserved.<br/>";
        echo Yii::powered();
        echo "</div><!-- footer -->";
    } ?>


</body>
</html>
