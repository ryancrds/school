<?php

if (resolve('/')) {
    render('site/home', 'site/site');
}
elseif (resolve('/contato')) {
    render('site/contato', 'site/site');
}
elseif (resolve('/precos')) {
    render('site/precos', 'site/site');
}

else {
    echo 'Pagina nao encontrada';
}
