$(document).ready(function() {
    $.getJSON('/geojson/batas_wilayah_provinsi.geojson', function(provinsiData) {
        console.log('Data provinsi berhasil dimuat:', provinsiData);
    }).fail(function(jqXHR, textStatus, errorThrown) {
        console.error('Error saat memuat provinsi:', textStatus, errorThrown);
    });

    $.getJSON('/geojson/batas_wilayah_kota.geojson', function(kotaData) {
        console.log('Data kota berhasil dimuat:', kotaData);
    }).fail(function(jqXHR, textStatus, errorThrown) {
        console.error('Error saat memuat kota:', textStatus, errorThrown);
    });
});
