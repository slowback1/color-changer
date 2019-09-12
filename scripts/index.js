const colorValue = document.getElementById('colorValue');
colorValue.addEventListener("change", changeColor, false);
function changeColor(event) {
    window.location.replace('./index.php?colorSelect=' + event.target.value.substring(1));
}