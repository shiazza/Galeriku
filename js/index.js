function updateLabel(input) {
    var label = document.getElementById('label-foto');
    if (input.files && input.files[0]) {
        label.innerHTML = input.files[0].name;
    } else {
        label.innerHTML = 'Tak ada yang dipilih';
    }
}