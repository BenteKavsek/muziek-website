const searchButton = document.querySelector(".nav__zoekfuncie__button");
const searchInput = document.getElementById("zoeken");
const singel = document.getElementsByClassName("singel");

searchButton.addEventListener("click", function () {
    const searchTerm = searchInput.value.toLowerCase();
    let found = false;

    Array.from(singel).forEach(function (tile) {
        const titel = tile.querySelector('.titel').textContent.toLowerCase();
        const artiest = tile.querySelector('.artiest').textContent.toLowerCase();

        if (titel.includes(searchTerm) || artiest.includes(searchTerm)) {
            tile.style.display = 'flex';
            found = true;
        } else {
            tile.style.display = 'none';
        }
    });

    if (!found) {
        alert("Niet gevonden");
    }
});