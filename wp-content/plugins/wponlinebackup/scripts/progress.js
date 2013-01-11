function wponlinebackup_progress()
{
	var mysack = new sack(ajaxurl);
	mysack.execute = 1;
	mysack.method = 'GET';
	mysack.setVar('action', 'wponlinebackup_progress');
	mysack.setVar('continuebackupnonce', wponlinebackup_vars.nonce);
	mysack.encVar('cookie', document.cookie, false);
	mysack.onError = function()
	{

	};
	mysack.runAJAX();
}
wponlinebackup_onload(wponlinebackup_progress);
