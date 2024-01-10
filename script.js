var nilai = 0;
var Opr = "";
var display = document.getElementById('Output');
function btn(nilai) {
    display.value += nilai;
}

function operator(Opr) {
    if (display.value != "") {
        if (display.value.includes("/", "*", "-", "+"));
        else if (display.value.split('.').length > 2) {
            alert('Mohon masukkan angka yang valid.');
            remove(2); // Mencegah pengiriman formulir jika ada lebih dari satu titik
        }
        else display.value += Opr;
    }
}

function remove(nilai) {
    if (nilai == 1) {
        // Hapus satu digit terakhir
        var nilaiInput = display.value;

        var nilaiBaru = nilaiInput.slice(0, -1);

        // Setel kembali nilai input
        display.value = nilaiBaru;
    } else if (nilai == 2) {
        display.value = "";
    }
}

function persen() {
    display.value /= 100;
}

function closeTab() {
    // Menutup tab
    window.close();
}