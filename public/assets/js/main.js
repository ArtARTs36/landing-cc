function showHidden(a,b,c,d){
if($(a).css('display')=='none'){
$(a).css('display','block');
$(b).html(d);
}
else{ $(a).css('display','none');
$(b).html(c);
}
}
$( document ).ready(function() {
$( "#mapOpen" ).click(function() {
showHidden('#map','#mapOpen','<i class="fas fa-globe-europe"></i> Открыть на карте','<i class="fas fa-minus"></i> Скрыть карту');
window.location='#map';
})
})