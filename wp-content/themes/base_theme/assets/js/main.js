//Iniciar AOS

AOS.init({
    easing: 'ease-in-out-sine',
    offset: 120,
    delay: 0,
    disable: false,
    once: true
});
$('#fotosGaleria').justifiedGallery({
    rowHeight : 200,
    lastRow : 'justify',
    margins : 20
});