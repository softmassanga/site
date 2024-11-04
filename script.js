// Script vazio para efeitos futuros

// Script para abrir e fechar as respostas
const faqItems = document.querySelectorAll('.faq-item');

faqItems.forEach(item => {
    item.addEventListener('click', () => {
        item.classList.toggle('active');
    });
});
