function ckeditor(name){
	var editor = CKEDITOR.replace(name,{
		uiColor : '#9AB8F3',
		language:'vi',
		filebrowserBrowseUrl 	  :  baseURL+'public/js/admin/ckfinder/ckfinder.html';
 
		filebrowserImageUploadUrl :  baseURL+'public/js/admin/ckfinder/ckfinder.html?type=Images';
		 
		filebrowserFlashBrowseUrl :  baseURL+'public/js/admin/ckfinder/ckfinder.html?type=Flash';
		 
		filebrowserFlashUploadUrl :  baseURL+'public/js/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
		toolbar : [
                                   ['Source','Preview','Templates'],
                                   ['Cut','Copy','Paste','PasteText','PasteFromWord','-','Print', 'SpellChecker', 'Scayt'],
                                   ['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
                                   '/',
                                   ['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
                                   ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote','CreateDiv'],
                                   ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
                                   ['BidiLtr', 'BidiRtl' ],
                                   ['Link','Unlink','Anchor'],
                                   ['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak','Iframe'],
                                   '/',
                                   ['Styles','Format','Font','FontSize'],
                                   ['TextColor','BGColor'],
                                   ['Maximize','ShowBlocks','Syntaxhighlight']
                      ]
	})
}