const links_principais = [
    { label: "Instagram", url: "https://www.instagram.com/victorsantossilva2006/" },
    { label: "YouTube", url: "https://www.youtube.com/@megav6142" },
    { label: "GitHub", url: "https://github.com/victorsifba-glitch" },
    { label: "Contato", url: "https://web.whatsapp.com" }
];

const redes_sociais = [
    { nome: "TikTok", url: "https://www.tiktok.com", img: "tiktok.png" },
    { nome: "X", url: "https://x.com", img: "x.webp" },
    { nome: "Facebook", url: "https://www.facebook.com", img: "facebook.webp" },
    { nome: "Bluesky", url: "https://bsky.app", img: "bluesky.png" }
];
async function renderizarLinks() {
    const containerPrincipal = document.getElementById("links_principais");
    const containerRedes = document.getElementById("redes_sociais");
    const resposta = await fetch('api.php');
    const dados = await resposta.json();

    dados.links.forEach(link => {
        const elementoA = document.createElement("a");
        elementoA.href = link.url;
        elementoA.textContent = link.label;
        elementoA.target = "_blank";
        containerPrincipal.appendChild(elementoA);
    });

    dados.redes.forEach(link => {
        const elementoA = document.createElement("a");
        elementoA.href = link.url;
        elementoA.target = "_blank";

        const elementoImg = document.createElement("img");
        elementoImg.src = link.img;
        elementoImg.alt = link.nome;

        elementoA.appendChild(elementoImg);
        containerRedes.appendChild(elementoA);
    });
}
window.addEventListener("DOMContentLoaded", renderizarLinks);