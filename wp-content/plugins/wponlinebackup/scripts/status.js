function wponlinebackup_checkajax()
{
	var mysack = new sack(ajaxurl);
	if (mysack.failed) return;
	Get_Element('wponlinebackup_isajax').value = 'yes';
}
