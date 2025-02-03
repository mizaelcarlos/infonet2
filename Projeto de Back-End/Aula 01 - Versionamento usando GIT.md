### Confira os comandos básicos e os mais utilizados no GIT:

💬 Configuração Inicial:

#### git config --global user.name "Seu Nome" → Define o nome do usuário.
#### git config --global user.email "seuemail@example.com" → Define o e-mail do usuário.

💬 Inicialização e Clonagem:

#### git init → Inicializa um repositório Git na pasta atual.
####  git clone URL_DO_REPOSITORIO → Clona um repositório remoto para o seu computador.

💬 Status e Histórico:

####  git status → Exibe o status atual dos arquivos no repositório.
####  git log → Exibe o histórico de commits do repositório.
####  git log --oneline → Exibe o histórico resumido.

💬 Gerenciamento de Arquivos:

#### git add NOME_DO_ARQUIVO → Adiciona um arquivo específico à área de staging.
#### git add . → Adiciona todos os arquivos modificados ao staging.
#### git rm --cached NOME_DO_ARQUIVO → Remove um arquivo do staging.
Commits
#### git commit -m "Mensagem do commit" → Cria um commit com os arquivos no staging.
#### git commit --amend -m "Nova mensagem" → Edita o último commit.

💬 Branches (Ramificações):

#### git branch → Lista todas as branches.
#### git branch NOME_DA_BRANCH → Cria uma nova branch.
#### git checkout NOME_DA_BRANCH → Muda para uma branch específica.
#### git switch NOME_DA_BRANCH → Alternativa mais moderna ao checkout.
#### git checkout -b NOME_DA_BRANCH → Cria e muda para uma nova branch.
#### git branch -d NOME_DA_BRANCH → Deleta uma branch.

💬 Sincronização com Repositório Remoto:

#### git remote add origin URL_DO_REPOSITORIO → Adiciona um repositório remoto.
#### git remote -v → Lista os repositórios remotos configurados.
#### git push origin NOME_DA_BRANCH → Envia commits para o repositório remoto.
#### git pull origin NOME_DA_BRANCH → Atualiza a branch local com a versão remota.
#### git fetch → Baixa mudanças do repositório remoto sem mesclar.

💬 Mesclagem e Rebase:

#### git merge NOME_DA_BRANCH → Mescla outra branch à branch atual.
#### git rebase NOME_DA_BRANCH → Reaplica commits da branch atual sobre a especificada.

💬 Reversão de Alterações:

#### git reset --soft HEAD~1 → Desfaz o último commit, mantendo as mudanças no staging.
#### git reset --mixed HEAD~1 → Desfaz o último commit e remove as mudanças do staging.
#### git reset --hard HEAD~1 → Desfaz o último commit e descarta todas as mudanças.
#### git revert HASH_DO_COMMIT → Cria um novo commit que reverte um commit específico.