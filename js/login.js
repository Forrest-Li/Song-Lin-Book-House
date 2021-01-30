$('#check-agree').onchange = function () {
    $('.submit').disabled = !this.checked;
};