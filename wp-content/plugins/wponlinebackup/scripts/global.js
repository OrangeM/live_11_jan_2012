//Global functions 1.0
//(Cut down and modified for the Online Backup for WordPress plugin)
//Author: Jason Woods
//Email: webmaster@ezonate.co.uk

var Set_Element_Text = function (element, value)
{
	if (element.innerHTML) {
		Set_Element_Text = function (element, value)
		{
			element.innerHTML = value;
		}
	} else if (element.hasChildNodes) {
		Set_Element_Text = function (element, value)
		{
			if (element.hasChildNodes()) {
				var found = 0;
				while (element.childNodes[found]) {
					if (found || element.childNodes[found].nodeType != 3) //TEXT_NODE = 3
						element.removeChild(element.childNodes[found]);
					else {
						element.childNodes[found].nodeValue = value;
						found = 1;
					}
				}
				if (found) return;
			}
			var newnode = document.createTextNode(value);
			element.appendChild(newnode);
		}
	} else {
		Set_Element_Text = function (element, value)
		{
		}
		return;
	}
	Set_Element_Text(element, value);
}
var Set_Element_Style = function (element, style, value)
{
	if (document.layers) {
		Set_Element_Style = function (element, style, value)
		{
			element[style] = value;
		}
	} else if (document.all || document.getElementById) {
		Set_Element_Style = function (element, style, value)
		{
			element.style[style] = value;
		}
	} else {
		Set_Element_Style = function (element, style, value)
		{
		}
		return;
	}
	Set_Element_Style(element, style, value);
}
function As_Element(element)
{
	element.Set_Style = function (style, value)
	{
		Set_Element_Style(this, style, value);
	}
	element.Set_Text = function (value)
	{
		Set_Element_Text(this, value);
	}
	element.__Hooked = true;
	return element;
}
var Get_Element = function (name)
{
	if (document.all) {
		Get_Element = function (name)
		{
			return document.all[name] ? As_Element(document.all[name]) : null;
		}
	} else if (document.layers) {
		Get_Element = function (name)
		{
			return document.layers[name] ? As_Element(document.layers[name]) : null;
		}
	} else if (document.getElementById) {
		Get_Element = function (name)
		{
			return document.getElementById(name) ? As_Element(document.getElementById(name)) : null;
		}
	} else {
		Get_Element = function (name) {
			return null;
		}
		return null;
	}
	return Get_Element(name);
}
jQuery(document).ready(function($) {
	// close postboxes that should be closed
	$('.if-js-closed').removeClass('if-js-closed').addClass('closed');
	// postboxes setup
	postboxes.add_postbox_toggles('wponlinebackup');
});
var wponlinebackup_onload_stack = null;
function wponlinebackup_onload_stack_add(f1, f2) { return function () { if (f1) f1(); f2(); } }
function wponlinebackup_onload(f) { wponlinebackup_onload_stack = wponlinebackup_onload_stack_add(wponlinebackup_onload_stack, f); }
function wponlinebackup_onload_process_stack() { if (wponlinebackup_onload_stack) wponlinebackup_onload_stack(); }
if (window.attachEvent) window.attachEvent('onload', wponlinebackup_onload_process_stack);
else if (window.addEventListener) window.addEventListener('load', wponlinebackup_onload_process_stack, false);
else if (document.addEventListener) document.addEventListener('load', wponlinebackup_onload_process_stack, false);
else window.onload = wponlinebackup_onload_stack_add(window.onload, wponlinebackup_onload_process_stack);
