const linksPrincipais = [
    { label: "Instagram", url: "https://www.instagram.com/victorsantossilva2006/" },
    { label: "YouTube", url: "https://www.youtube.com/@megav6142" },
    { label: "GitHub", url: "https://github.com/victorsifba-glitch" },
    { label: "Contato", url: "https://web.whatsapp.com" }
];

const redesSociais = [
    { nome: "TikTok", url: "https://www.tiktok.com", img: "tiktok.png" },
    { nome: "X", url: "https://x.com", img: "x.webp" },
    { nome: "Facebook", url: "https://www.facebook.com", img: "facebook.webp" },
    { nome: "Bluesky", url: "https://bsky.app", img: "bluesky.png" }
];

function renderizarLinks() {
    const containerPrincipal = document.getElementById("main-links");
    const containerRedes = document.getElementById("social-links");

    linksPrincipais.forEach(link => {
        const elementoA = document.createElement("a");
        elementoA.href = link.url;
        elementoA.textContent = link.label;
        elementoA.target = "_blank";
        elementoA.rel = "noopener noreferrer";
        containerPrincipal.appendChild(elementoA);
    });

    redesSociais.forEach(link => {
        const elementoA = document.createElement("a");
        elementoA.href = link.url;
        elementoA.target = "_blank";
        elementoA.rel = "noopener noreferrer";

        const elementoImg = document.createElement("img");
        elementoImg.src = link.img;
        elementoImg.alt = link.nome;

        elementoA.appendChild(elementoImg);
        containerRedes.appendChild(elementoA);
    });
}

// Executa a função assim que a estrutura da página (DOM) estiver totalmente carregada
window.addEventListener("DOMContentLoaded", renderizarLinks);