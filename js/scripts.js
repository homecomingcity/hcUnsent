function selectSwatch(s) {
	var c = s.firstChild.innerHTML;
	setBGTo(c);
	$('.jscolor').val(c);
	$('.jscolor').trigger("change");
	// Select the hex
	var range, selection;
    if (document.body.createTextRange) {
        range = document.body.createTextRange();
        range.moveToElementText(s.firstChild);
        range.select();
    } else if (window.getSelection) {
        selection = window.getSelection();
        range = document.createRange();
        range.selectNodeContents(s.firstChild);
        selection.removeAllRanges();
        selection.addRange(range);
    }
}
function dragging(){
	return $('.overflower .ui-sortable-placeholder').length>0;
}
function onPickerChange(picker){
	hex = picker.toHEXString();
	setBGTo(hex);
}
function setBGTo(input) {
	document.getElementsByTagName("body")[0].style.backgroundColor = input;
}
