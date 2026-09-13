document.addEventListener('DOMContentLoaded', function () {
    // Menu mobile
    var toggle = document.getElementById('navToggle');
    var nav = document.getElementById('siteNav');
    if (toggle && nav) {
        toggle.addEventListener('click', function () {
            var isOpen = nav.classList.toggle('open');
            toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
            toggle.setAttribute('aria-label', isOpen ? 'Fechar menu' : 'Abrir menu');
        });
        nav.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                nav.classList.remove('open');
                toggle.setAttribute('aria-expanded', 'false');
                toggle.setAttribute('aria-label', 'Abrir menu');
            });
        });
        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape' && nav.classList.contains('open')) {
                nav.classList.remove('open');
                toggle.setAttribute('aria-expanded', 'false');
                toggle.setAttribute('aria-label', 'Abrir menu');
                toggle.focus();
            }
        });
    }
    // Progressive enhancement: article text and headings remain server-rendered.
    var article = document.querySelector('.article-body');
    if (article) {
        var headings = article.querySelectorAll('h2');
        if (headings.length >= 3) {
            var toc = document.createElement('details');
            toc.className = 'article-toc';
            var summary = document.createElement('summary');
            summary.textContent = 'Neste artigo';
            var list = document.createElement('ol');
            headings.forEach(function (heading, index) {
                if (!heading.id) {
                    var id = 'leitura-' + (index + 1);
                    while (document.getElementById(id)) id += '-secao';
                    heading.id = id;
                }
                var item = document.createElement('li');
                var link = document.createElement('a');
                link.href = '#' + heading.id;
                link.textContent = heading.textContent;
                item.appendChild(link);
                list.appendChild(item);
            });
            toc.appendChild(summary);
            toc.appendChild(list);
            article.prepend(toc);
        }
    }
});
