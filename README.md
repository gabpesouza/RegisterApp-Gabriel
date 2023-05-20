# RegisterApp-Gabriel

A estrutura de tabelas foi criada pensando em um relacionamento N x M mas é apenas uma ocasiao, poderia ser alterado para 1 x N
dependendo da regra de negócio

A tela de registro filtra os campos digitados para impedir ataques XSS e também valida se o campo email é valido.

mensagens de erro ou sucesso sao passadas pela url usando get

a página index carrega a view dependendo do valor de ?page, nesse projeto especifico nao faz muito sentido porque só existe uma view, mas tambem uso esse padrao na pagina que recebe os dados do formulário.


