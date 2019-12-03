function change(val) {
    frame = val
    if(val == 0) {
        $('#nivel0').show();
        $('#nivel1').hide();
        $('#nivel2').hide();
    }
    if(val == 1){
        $('#nivel1').show();
    }
    if(val == 2){
        $('#nivel0').hide();
        $('#nivel1').hide();
        $('#nivel2').show();
    }
}