# CnabPHP
Projeto para gerar remessa e processar retorno nos layouts cnab240 e 400<br>
Novo projeto orientado a objeto com três níveis de hierarquia
<ul>
<li>
Um arquivo remessaAbstract cuida das questões sobre arquivos em geral.
</li>
<li>
Uma classe para cada banco herda remssaAbstract e seta o nome do banco que é a pasta para os layouts personalizados
</li>
<li>
RegitroAbstract cuida de metodos unicos para qualquer registro de qualquer layout,
</li>
<li>
Uma classe genérico herda registroAbstract e implementa setters e getters comuns ao registro de um determinado layout
</li>
e por fim uma classe registro herda de genérico e define o layout que sera usado e se por ventura for necessario sobrepõe ou implementa novos getters e setters do arquivo generico.
</li><br>
Agaurdando volutarios para edição e testes dos layouts.
