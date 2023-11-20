// Seleciona uma query presente em um elemento de ID #d-inteligencias-expl-txt
const divs = document.querySelectorAll('#d-inteligencias-expl-txt');
    
// Inicializa uma contagem para saber qual o índice atual
let currentIndex = 0;

// Esconde todas as divs, menos a primeira
divs.forEach((div, index) => {
    if (index === currentIndex) {
        div.style.display = 'block';
    } else {
        div.style.display = 'none';
    }
});

// Adiciona um "ouvinte" de evento para o botão "Anterior"
document.getElementById('d-inteligecias-expl-btn-previous').addEventListener('click', () => {
    divs[currentIndex].style.display = 'none';
    currentIndex = (currentIndex - 1 + divs.length) % divs.length;
    divs[currentIndex].style.display = 'block';
});

// Adiciona um "ouvinte" de evento para o botão "Próximo"
document.getElementById('d-inteligecias-expl-btn-next').addEventListener('click', () => {
    divs[currentIndex].style.display = 'none';
    currentIndex = (currentIndex + 1) % divs.length;
    divs[currentIndex].style.display = 'block';
});