<?php /* Smarty version Smarty-3.1.14, created on 2014-07-13 17:50:20
         compiled from "/var/www/html/onlineshop/admin/themes/default/template/controllers/products/helpers/uploader/ajax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158243296553c2c6dc4a8af9-27634610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bb1f3c38c2e59637470597e8d9f5db2b7b3008a' => 
    array (
      0 => '/var/www/html/onlineshop/admin/themes/default/template/controllers/products/helpers/uploader/ajax.tpl',
      1 => 1403262006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158243296553c2c6dc4a8af9-27634610',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'name' => 0,
    'url' => 0,
    'multiple' => 0,
    'max_files' => 0,
    'files' => 0,
    'post_max_size' => 0,
    'default_language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c2c6dc7a40e6_10873039',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2c6dc7a40e6_10873039')) {function content_53c2c6dc7a40e6_10873039($_smarty_tpl) {?>
<div class="form-group">
	<div class="col-lg-12">
		<input id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" type="file" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
[]"<?php if (isset($_smarty_tpl->tpl_vars['url']->value)){?> data-url="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['multiple']->value)&&$_smarty_tpl->tpl_vars['multiple']->value){?> multiple="multiple"<?php }?> style="width:0px;height:0px;" />
		<button class="btn btn-default" data-style="expand-right" data-size="s" type="button" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-add-button">
			<i class="icon-folder-open"></i> <?php if (isset($_smarty_tpl->tpl_vars['multiple']->value)&&$_smarty_tpl->tpl_vars['multiple']->value){?><?php echo smartyTranslate(array('s'=>'Add files...'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'Add file...'),$_smarty_tpl);?>
<?php }?>
		</button>
	</div>
</div>
<div class="well" style="display:none">
	<div id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-files-list"></div>
	<button class="ladda-button btn btn-primary" data-style="expand-right" type="button" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-upload-button" style="display:none;">
		<span class="ladda-label"><i class="icon-check"></i> <?php if (isset($_smarty_tpl->tpl_vars['multiple']->value)&&$_smarty_tpl->tpl_vars['multiple']->value){?><?php echo smartyTranslate(array('s'=>'Upload files'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'Upload file'),$_smarty_tpl);?>
<?php }?></span>
	</button>
</div>
<div class="row" style="display:none">
	<div class="alert alert-success" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-success"></div>
</div>
<div class="row" style="display:none">
	<div class="alert alert-danger" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-errors"></div>
</div>
<script type="text/javascript">
	function humanizeSize(bytes)
	{
		if (typeof bytes !== 'number') {
			return '';
		}

		if (bytes >= 1000000000) {
			return (bytes / 1000000000).toFixed(2) + ' GB';
		}

		if (bytes >= 1000000) {
			return (bytes / 1000000).toFixed(2) + ' MB';
		}

		return (bytes / 1000).toFixed(2) + ' KB';
	}

	$( document ).ready(function() {
		<?php if (isset($_smarty_tpl->tpl_vars['multiple']->value)&&isset($_smarty_tpl->tpl_vars['max_files']->value)){?>
			var <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_max_files = <?php echo $_smarty_tpl->tpl_vars['max_files']->value-count($_smarty_tpl->tpl_vars['files']->value);?>
;
		<?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['files']->value)&&$_smarty_tpl->tpl_vars['files']->value){?>
		$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-images-thumbnails').parent().show();
		<?php }?>

		var <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_upload_button = Ladda.create( document.querySelector('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-upload-button' ));
		var <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_total_files = 0;

		$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
').fileupload({
			dataType: 'json',
			async: false,
			autoUpload: false,
			singleFileUploads: true,
			maxFileSize: <?php echo $_smarty_tpl->tpl_vars['post_max_size']->value;?>
,
			start: function (e) {				
				<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_upload_button.start();
				$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-upload-button').unbind('click'); //Important as we bind it for every elements in add function
			},
			fail: function (e, data) {
				$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-errors').html(data.errorThrown.message).parent().show();
				$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-files-list').html('').parent().hide();
			},
			done: function (e, data) {
				if (data.result) {
					if (typeof data.result.<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 !== 'undefined') {
						for (var i=0; i<data.result.<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
.length; i++) {
							if (typeof data.result.<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
[i].error !== 'undefined' && data.result.<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
[i].error != '') {
								$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-errors').html('<strong>'+data.result.<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
[i].name+'</strong> : '+data.result.<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
[i].error).parent().show();
								$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-files-list').html('').parent().hide();
							}
							else 
							{
								$(data.context).appendTo($('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-success'));
								$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-success').parent().show();

								if (data.result.<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
[i] !== null && data.result.<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
[i].status == 'ok')
								{
									var response = data.result.<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
[i];
									var cover = "icon-check-empty";
									var legend = '';

									if (response.cover == "1")
										cover = "icon-check-sign";

									if (typeof response.legend !== 'undefined' && response.legend != null)
										legend = response.legend[<?php echo intval($_smarty_tpl->tpl_vars['default_language']->value);?>
];

									imageLine(response.id, response.path, response.position, cover, response.shops, legend);
									$("#countImage").html(parseInt($("#countImage").html()) + 1);
									$("#img" + id).remove();
									$("#imageTable").tableDnDUpdate();
								}
							}
							
						}
					}

					$(data.context).find('button').remove();
				}
			},
		}).on('fileuploadalways', function (e, data) {
				<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_total_files--;

				if (<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_total_files == 0)
				{
					<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_upload_button.stop();
					$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-upload-button').unbind('click');
					$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-files-list').parent().hide();
				}
		}).on('fileuploadadd', function(e, data) {
			if (typeof <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_max_files !== 'undefined') {
				if (<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_total_files >= <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_max_files) {
					e.preventDefault();
					alert('<?php echo smartyTranslate(array('s'=>sprintf('You can upload a maximum of %s files',$_smarty_tpl->tpl_vars['max_files']->value)),$_smarty_tpl);?>
');
					return;
				}
			}

			data.context = $('<div/>').addClass('form-group').appendTo($('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-files-list'));
			var file_name = $('<span/>').append('<i class="icon-picture-o"></i> <strong>'+data.files[0].name+'</strong> ('+humanizeSize(data.files[0].size)+')').appendTo(data.context);

			var button = $('<button/>').addClass('btn btn-default pull-right').prop('type', 'button').html('<i class="icon-trash"></i> <?php echo smartyTranslate(array('s'=>'Remove file'),$_smarty_tpl);?>
').appendTo(data.context).on('click', function() {
				<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_total_files--;
				data.files = null;
				
				var total_elements = $(this).parent().siblings('div.form-group').length;
				$(this).parent().remove();

				if (total_elements == 0) {
					$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-files-list').html('').parent().hide();
				}
			});

			$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-files-list').parent().show();
			$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-upload-button').show().bind('click', function () {
				if (data.files != null)
					data.submit();						
			});

			<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_total_files++;
		}).on('fileuploadprocessalways', function (e, data) {
			var index = data.index,	file = data.files[index];
			
			if (file.error) {
				$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-errors').append('<div class="form-group"><i class="icon-picture-o"></i> <strong>'+file.name+'</strong> ('+humanizeSize(file.size)+') : '+file.error+'</div>').parent().show();
				$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-files-list').html('').parent().hide();
				$(data.context).find('button').trigger('click');
			}
		}).on('fileuploadsubmit', function (e, data) {
			var params = new Object();

			$('input[id^="legend_"]').each(function()
			{
				id = $(this).prop("id").replace("legend_", "legend[") + "]";
				params[id] = $(this).val();
			});

			data.formData = params;			
		});

		$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-add-button').on('click', function() {
			$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-success').html('').parent().hide();
			$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-errors').html('').parent().hide();
			$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
').trigger('click');
		});
	});
</script><?php }} ?>