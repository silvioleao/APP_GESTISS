@extends('_template._main')

@section('title', 'Cadastro Cidadão')

@section('body')

    <!-- Preloader -->
    @include('_components._spiner')
    <!-- Preloader end-->

    <div class="page-content bottom-content">

        <!-- Banner -->
        <div class="head-details bg-primary">
            <div class="container">
                <div class="dz-info">
                    <p class="location d-block">APP GESTISS</p>
                    <h5 class="title">Sua saúde na palma da mão</h5>
                </div>
                <div class="dz-media media-65">
                    <img src="{{ asset('images/icons/png/icon-128x128.png') }}" alt="">
                </div>
            </div>
        </div>

        <div class="fixed-content p-0">
            <div class="container">
                <div class="main-content">
                    <div class="left-content">
                        <a href="javascript:void(0);" class="back-btn">
                            <svg width="18" height="18" viewBox="0 0 10 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.03033 0.46967C9.2966 0.735936 9.3208 1.1526 9.10295 1.44621L9.03033 1.53033L2.561 8L9.03033 14.4697C9.2966 14.7359 9.3208 15.1526 9.10295 15.4462L9.03033 15.5303C8.76406 15.7966 8.3474 15.8208 8.05379 15.6029L7.96967 15.5303L0.96967 8.53033C0.703403 8.26406 0.679197 7.8474 0.897052 7.55379L0.96967 7.46967L7.96967 0.46967C8.26256 0.176777 8.73744 0.176777 9.03033 0.46967Z"
                                    fill="#a19fa8"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="mid-content">
                        <h5 class="mb-0">Cadastrar</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <div class="container">
            <form class="my-2 form-cadastro">
                <div class="input-group">
                    <input type="text" name="usu_nome" placeholder="Nome" class="form-control">
                </div>

                <div class="input-group">
                    <input type="text" name="usu_cpf" placeholder="CPF" data-mask="000.000.000-00" class="form-control">
                </div>

                <div class="input-group">
                    <input type="email" name="usu_email" placeholder="E-mail" class="form-control">
                </div>

                <div class="input-group">
                    <input type="text" name="usu_telefone" placeholder="Telefone" data-mask="(00) 0 0000-0000"
                        class="form-control">
                </div>

                <div class="input-group radio square-radio mt-6">
                    <label class="radio-label">Aceitar os <a href="#" data-bs-toggle="modal"
                            data-bs-target="#termosServico">termos de serviço e políticas de privacidade</a>
                        do APP GESTISS
                        <input type="checkbox" name="termos">
                        <span class="checkmark"></span>
                    </label>
                </div>
            </form>
        </div>
        <!-- Page Content End -->

        <div class="modal fade" id="termosServico" tabindex="-1" style="display: none;" aria-modal="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <h6>TERMOS E CONDIÇÕES GERAIS DE USO E POLÍTICA DE PRIVACIDADE</h6>
                        <p>
                            Prezado(a) Usuário(a),
                            Nós, da Plataforma GESTISS, consideramos que a confiança e respeito são essenciais na relação
                            com nossos usuários.
                            Desta forma, apresentamos os principais pontos dos Termos de Uso, contudo, ressaltamos a
                            importância da leitura toGESTISS e completa dos Termos e condições gerais de uso da Plataforma
                            GESTISS, pois ao usá-la o usuário concordará tácita e inteiramente com as informações aqui
                            contidas.
                            I. A Plataforma da GESTISS oferece um espaço virtual possibilitando o contato entre os Usuários
                            e profissionais da área da saúde, como médicos de diferentes áreas, para fins de fornecer
                            consultas, orientações, aconselhamentos relacionados à saúde. Respondendo, assim, exclusiva e
                            limitadamente apenas pela funcionalidade acima citada.
                            II. A plataforma da GESTISS é direcionada para pessoas físicas, com mais de 18 (dezoito) anos de
                            idade completos.
                            III. A responsabilidade de toda a informação fornecida e cadastrada é do Usuário.
                            Assim, a GESTISS não se responsabiliza por dados fornecidos erroneamente, bem como pela
                            veracidade do Usuário, tanto no momento quanto na utilização da plataforma.
                        </p>

                        <strong>CAPÍTULO I - CONDIÇÕES GERAIS</strong>

                        <ol>
                            <li>
                                1.1. Âmbito. Os presentes Termos e Condições Gerais de Uso (denominado somente “Termos de
                                Uso”)
                                vinculam todas as atividades desenvolvidas e serviços oferecidos por meio da plataforma da
                                GESTISS (doravante assim denominada ou somente “Plataforma”), que engloba o software, o
                                website
                                e seus subdomínios, aplicativos, programas e demais extensões. A Plataforma GESTISS é de
                                propriedade da GESTISS LTDA, pessoa jurídica de direito privado, inscrita no CNPJ/MF sob o
                                nº
                                48.308.237/0001-60, localizada na cidade de Belém/PA, na Rua Municipalidade, número 985,
                                Condomínio Mirai Off, Sala 102, Bairro Umarizal, CEP: 66.050-350.
                            </li>

                            <li>
                                1.2. Atuação. A GESTISS é uma plataforma que fornece aos Usuários a possibilidade de se
                                conectarem com profissionais da saúde, como médicos, de diferentes áreas de atuação, para
                                obterem orientações, aconselhamentos relacionados à sua saúde, bem como consultas médicas,
                                de
                                modo online, visando a proteção das pessoas, em toGESTISS obediência aos preceitos éticos da
                                beneficência, não-maleficência, sigilo das informações e autonomia e estrita obediências as
                                normas e orientações do Ministério da Saúde.
                            </li>

                            <li>
                                1.2.1. TENDO LIDO E CONCORDADO COM AS CONDIÇÕES DESTE TERMO DE USO, VOCÊ DECLARA E CONCORDA
                                EM
                                ISENTAR A GESTISS DE QUAISQUER RESPONSABILIDADES RELACIONADAS E OU DECORRENTES DE QUALQUER
                                COMPLICAÇÃO DE SAÚDE QUE POSSAM LEVAR À MORTE, LESÃO, DOENÇA, PERDA FINANCEIRA, OU QUAISQUER
                                OUTRAS PERDAS.
                            </li>

                            <li>
                                1.2.2.EMBORA A GESTISS POSSA OCASIONALMENTE MONITORAR OU EXAMINAR DISCUSSÕES, SALAS DE
                                BATE-PAPO, INCLUSÕES, TRANSMISSÕES, MURAIS E SIMILARES NO SITE, A GESTISS NÃO FICA OBRIGADA
                                A
                                FAZÊ-LO E NÃO ASSUME QUAISQUER RESPONSABILIDADES DECORRENTES DO CONTEÚDO DOS REFERIDOS
                                LOCAIS OU
                                TAMPOUCO POR ERROS, CALÚNIA OU DIFAMAÇÃO, SEJAM ESCRITAS OU VERBAIS, OMISSÃO, FALSIDADE,
                                OBSCENIDADE, PORNOGRAFIA, PROFANAÇÃO, PERIGO OU INEXATIDÃO.
                            </li>

                            <li>
                                1.3. Usuários. Os Usuários são todas as pessoas físicas, maiores de 18 (dezoito) anos
                                completos,
                                que se cadastram e utilizam da Plataforma GESTISS.
                            </li>

                            <li>
                                1.4. Adesão e Aceite. Pelo presente instrumento, os Usuários ficam cientes e concordam que,
                                ao
                                utilizar a Plataforma GESTISS, automaticamente, fazem adesão e concordam em se submeter às
                                condições dos presentes Termos de Uso e da Política de Privacidade.
                            </li>

                            <li>
                                1.5. Violação das Condições. Na eventualidade de um Usuário descumprir qualquer das
                                condições
                                aqui previstas, a GESTISS reserva-se o direito de encerrar suas respectivas contas e
                                suspender
                                ou anular seu acesso à Plataforma, sem necessidade de aviso prévio, bem como, sem devolução
                                de
                                eventuais valores pagos.
                            </li>

                            <li>
                                1.6. Modificações. A GESTISS reserva-se o direito de, em qualquer momento, modificar os
                                Termos
                                de Uso, ou mesmo alterar ou modificar a aparência ou o funcionamento da plataforma, sem
                                necessidade de avisos, prévios ou sem qualquer responsabilização perante os Usuários.
                            </li>

                            <li>
                                1.6.1. Quaisquer modificações efetuadas pela GESTISS entrarão em vigor imediatamente após
                                sua
                                publicação online, excetuando-se os casos em que atualizações dos Termos de Uso dispuserem
                                de
                                prazo para entrada em vigor.
                            </li>

                            <li>
                                1.6.2. Será entendido que o Usuário aceitou as alterações dos Termos de Uso caso não haja
                                manifestação em contrário, ou se o mesmo continuar acessando a Plataforma GESTISS,
                                normalmente.
                                As modificações não se aplicam a operações que tenham sido feitas antes da publicação das
                                respectivas alterações.
                            </li>

                            <li>
                                1.6.3. Se qualquer alteração for inaceitável para o Usuário, sua única opção é a desativação
                                de
                                seu cadastro e a não mais utilização da Plataforma.
                            </li>

                            <li>
                                1.7. GESTISS e EMPRESA LICENCIADA. O Usuário poderá acessar a Plataforma GESTISS através de
                                um
                                parceiro que licenciar a solução da GESTISS (“EMPRESA LICENCIADA”). Neste caso, a EMPRESA
                                LICENCIADA figurará como administradora de todos os seus colaboradores e funcionários que
                                terão
                                acesso a Plataforma como Usuários. Ademais, a EMPRESA LICENCIADA PODERÁ realizar as
                                seguintes
                                funções: Cadastro de Usuário; Descadastramento de Usuário; Cancelamento e Suspensão de
                                Usuário;
                                Acessar a Dados Cadastrais dos Usuários, limitados ao CPF, e-mail, sexo e número de chamadas
                                na
                                Plataforma GESTISS.
                            </li>

                            <li>
                                1.7.1. O USUÁRIO VINCULADO A UMA EMPRESA LICENCIADA DECLARA TER CIÊNCIA E ACEITAR O
                                COMPARTILHAMENTO DOS DADOS ACIMA LISTADOS À EMPRESA LICENCIADA
                            </li>
                        </ol>

                        <strong>CAPÍTULO II – MODO DE UTILIZAÇÃO</strong>

                        <ol>
                            <li>
                                2.1. Cadastro. Para a utilização da Plataforma GESTISS, é necessária a realização de
                                cadastro
                                para criação do perfil de Usuário diretamente, ou pela EMPRESA LICENCIADA, como
                                administradora
                                dos Usuários, que deverá ser feita no primeiro acesso, fornecendo as seguintes informações:
                                Nome
                                completo; Idade; Telefone; Endereço; Endereço de e-mail válido; Data de nascimento; Sexo;
                                CPF;
                                RG/Passaporte; Foto; Filiação;  Peso; Altura; Existência de Planos de Saúde;  Informações
                                adicionais de saúde (alergias, medicamentos, condições específicas).
                            </li>

                            <li>
                                2.1.1. Efetuado o cadastro com sucesso, o Usuário terá acesso à Plataforma por meio de
                                “login” e
                                senha, comprometendo-se com a proteção e não divulgação das informações para terceiros.
                            </li>

                            <li>
                                2.2. Dinâmica. A GESTISS disponibiliza uma ferramenta que possibilita aos Usuários se
                                conectarem
                                com profissionais de saúde para obterem aconselhamentos, orientações e consultas médicas.
                                Além
                                disso, a Plataforma disponibiliza uma série de recursos que visam auxiliar seus Usuários.
                            </li>

                            <li>
                                2.2.1. As conexões entre Usuários e profissionais da saúde poderão envolver a realização de
                                vídeo-chamadas, para melhor comunicação e orientação do profissional, de modo que a GESTISS
                                não
                                se vincula ou responsabiliza, por  qualquer ato, fato ou informação fornecida ou trocada
                                entre
                                as partes, sendo estas as únicas responsáveis legais por qualquer dano, ofensa ou prejuízo
                                que
                                vierem a causar.
                            </li>

                            <li>
                                2.2.2. Eventuais documentos e arquivos trocados entre os Usuários e os profissionais da
                                saúde
                                conectados por meio da Plataforma não serão vinculados ou de responsabilidade da GESTISS em
                                nenhuma circunstância, sendo seu conteúdo de inteira responsabilidade daquele que o
                                distribuiu.
                                Quaisquer arquivos trocados entre uma conexão de Usuário com profissional da saúde serão
                                restritos e não visíveis perante demais Usuários.
                            </li>

                            <li>
                                2.3. Incorreção de Informações Cadastrais. A GESTISS se reserva o direito de utilizar todos
                                os
                                meios válidos e possíveis para identificar os Usuários na Plataforma, podendo solicitar
                                dados
                                adicionais e documentos que estime serem idôneos a conferir os dados pessoais informados,
                                assim
                                como inabilitar, temporária ou definitivamente, os cadastros que apresentarem qualquer
                                informação inverídica ou que não puderem ser confirmados com o Usuário respectivo.
                            </li>

                            <li>
                                2.3.1. Em caso de informações incorretas, inverídicas ou não confirmadas, será enviada
                                notificação ao Usuário, permitindo sua correção em tempo hábil, definido. Não havendo
                                correção,
                                ou envio de documentos que comprovem GESTISS veracidade, a GESTISS reserva-se o direito de
                                não
                                concluir o cadastramento em curso ou, ainda, de bloquear o cadastro já existente, impedindo
                                o
                                Usuário de utilizar a Plataforma até que a situação de anomalia seja regularizada.
                            </li>

                            <li>
                                2.3.2. A GESTISS se reserva o direito de impedir, a seu critério, novos cadastros, ou
                                cancelar
                                os já efetuados, em caso de ser detectada anomalia que considere, em sua análise, revestida
                                de
                                erro grave ou demonstre tentativa deliberada de burlar as regras aqui descritas,
                                obrigatórias
                                para todos os Usuários. Também atuará a GESTISS de GESTISS forma caso verifique
                                descumprimento,
                                pelo Usuário, de qualquer obrigação prevista nos Termos de Uso.
                            </li>

                            <li>
                                2.4. Uso de Cadastro por Terceiros. OS CADASTROS NA PLATAFORMA SÃO INDIVIDUAIS E
                                INTRANSFERÍVEIS, DEVENDO A GESTISS SER IMEDIATAMENTE NOTIFICADA SOBRE QUALQUER USO NÃO
                                AUTORIZADO DE CONTA DE USUÁRIO OU QUALQUER OUTRA VIOLAÇÃO DE SEGURANÇA, PELO USUÁRIO, EM
                                TEMPO
                                HÁBIL, NÃO SENDO A GESTISS RESPONSÁVEL POR QUAISQUER PREJUÍZOS OU DANOS ORIUNDOS DO USO DE
                                “LOGIN” E SENHA POR TERCEIRO, COM OU SEM O CONSENTIMENTO DO USUÁRIO.
                            </li>

                            <li>
                                2.4.1. Os Usuários deverão: (I) Ser cuidadosos com os dados de sua identificação individual
                                sempre que acessarem a Internet; (II) Tomar demais outras medidas necessárias para se
                                protegerem
                                de danos, inclusive fraudes “online” e “offline”; (III) Ser diligentes no uso do conteúdo
                                disponibilizado na GESTISS, sabendo de suas responsabilidades; e (IV) Cumprir rigorosamente
                                todas as determinações destes Termos de Uso.
                            </li>

                            <li>
                                2.4.2. É vedada a cessão, venda, aluguel ou outra forma de transferência da conta cadastral
                                do
                                Usuário, uma vez que esta é única, individual e intransferível.
                            </li>

                            <li>
                                2.5. Obrigações dos USUÁRIOS. TODOS OS USUÁRIOS DA PLATAFORMA GESTISS SE OBRIGAM A RESPEITAR
                                ESTES TERMOS DE USO E AS LEIS QUE REGEM SUA UTILIZAÇÃO, EXCLUSIVAMENTE UTILIZANDO-A PARA OS
                                FINS
                                A QUE SE DESTINA. O USUÁRIO OBRIGA-SE, AINDA, A:
                                a) NÃO DIVULGAR A TERCEIROS SEUS “LOGIN” E SENHA DE ACESSO, NEM PERMITIR O USO DE TAIS
                                INFORMAÇÕES POR TERCEIROS, RESPONSABILIZANDO-SE PELAS CONSEQUÊNCIAS DO USO DELIBERADO DE SEU
                                CADASTRO POR OUTROS OU PARA OUTROS, UMA VEZ QUE ESTES
                                SÃO PESSOAIS E INTRANSFERÍVEIS, DEVENDO NOTIFICAR A GESTISS, IMEDIATAMENTE, ATRAVÉS DE MEIO
                                SEGURO, A RESPEITO DE QUALQUER USO OU ACESSO NÃO AUTORIZADO DE SUA CONTA POR TERCEIROS, LOGO
                                QUE
                                OBTIVER CONHECIMENTO DO FATO;
                                b) FORNECER INFORMAÇÕES CADASTRAIS TOGESTISSMENTE VERÍDICAS E EXATAS, RESPONSABILIZANDO-SE
                                EXCLUSIVA E INTEGRALMENTE POR TODO O CONTEÚDO POR SI INFORMADO NO CADASTRO;
                                c) NÃO UTILIZAR A GESTISS DE QUALQUER OUTRA FORMA QUE AFETE ADVERSAMENTE SUA DISPONIBILIDADE
                                DE
                                USO POR OUTROS USUÁRIOS OU DE QUALQUER OUTRA FORMA QUE POSSA DANIFICAR, DESATIVAR, OU
                                SOBRECARREGAR OS SERVIDORES OU REDES;
                                d) NÃO UTILIZAR A GESTISS EM CASOS DE NECESSIDADE DE ATENDIMENTO URGENTE, GRAVE OU
                                ESPECIALIZADO; E
                                e) NÃO UTILIZAR A GESTISS PARA QUALQUER PROPÓSITO QUE SEJA ILÍCITO OU PROIBIDO PELOS TERMOS
                                DE
                                USO E/OU PELAS NORMAS APLICÁVEIS.
                            </li>

                            <li>
                                2.6. Obrigações da GESTISS. São obrigação da GESTISS:
                                a) Disponibilizar, na Plataforma, um espaço virtual voltado para a conexão entre os Usuários
                                e
                                os profissionais da saúde, e fazer sua manutenção, sempre que preciso;
                                b) Credenciar profissionais da área da saúde;
                                c) Proteger a confidencialidade de todas as informações dos Usuários e dos cadastros
                                relativos
                                aos Usuários. Contudo, não responderá pela reparação de prejuízos que possam ser derivados
                                de
                                apreensão e cooptação de dados por parte de terceiros que, rompendo os sistemas de
                                segurança,
                                consigam acessar essas informações.
                                d) Observar as normas do Conselho Federal de Medicina, bem como a Lei Geral de Proteção de
                                Dados.
                            </li>

                            <li>
                                2.7. Marco Civil da Internet. Os Usuários, bem como a Plataforma GESTISS declaram que
                                cumprem,
                                em sua toGESTISSidade, todas as disposições e princípios previstos no Marco Civil da
                                Internet,
                                Lei no 12.965 de 2014, que trata dos direitos e deveres na utilização da internet no Brasil.
                            </li>

                            <li>
                                2.8. Capacidade. O Usuário declara, ao utilizar a Plataforma da GESTISS, que detém plena
                                capacidade civil, podendo celebrar contrato e assumir obrigações, ficando ciente, desde já,
                                que
                                as informações cadastrais falsas ou inverídicas registradas ou fornecidas durante o processo
                                eletrônico de contratação de quaisquer serviços constitui crime, nos termos do artigo 299 do
                                Código Penal Brasileiro.
                            </li>
                        </ol>

                        CAPÍTULO III – ACESSO E RESTRIÇÕES DE FUNCIONALIDADE
                        3.1. Restrições. NÃO É PERMITIDO ACESSAR AS ÁREAS DE PROGRAMAÇÃO DA PLATAFORMA GESTISS, SEU
                        BANCO DE DADOS OU QUALQUER OUTRO CONJUNTO DE INFORMAÇÕES QUE FAÇA PARTE DA ATIVIDADE DE
                        WEBMASTERING, REALIZAR OU PERMITIR QUE SE REALIZE QUALQUER TIPO DE ENGENHARIA REVERSA, TRADUÇÃO,
                        DECOMPILAÇÃO, CÓPIA, MODIFICAÇÃO, REPRODUÇÃO, LOCAÇÃO, SUBLOCAÇÃO, SUBLICENCIAMENTO, PUBLICAÇÃO,
                        DIVULGAÇÃO, TRANSMISSÃO, EMPRÉSTIMO, DISTRIBUIÇÃO OU, DE QUALQUER OUTRA FORMA, A DISPOSIÇÃO DE
                        FERRAMENTAS DE CONSULTA DESTE WEBSITE E DE SUAS FUNCIONALIDADES PARA  TERCEIROS SEM A PRÉVIA E
                        EXPRESSA AUTORIZAÇÃO DA GESTISS, FICANDO SUJEITO QUEM O FIZER A PENALIDADES DA LEGISLAÇÃO
                        BRASILEIRA, SEM PREJUÍZO DA OBRIGAÇÃO DE REPARAR OS DANOS QUE CAUSAREM. ESTA RESTRIÇÃO INCLUI
                        QUALQUER TENTATIVA DE INCORPORAR QUAISQUER INFORMAÇÕES DA PLATAFORMA GESTISS EM QUALQUER OUTRO
                        DIRETÓRIO, PRODUTO OU SERVIÇO.
                        3.1.1. É PROIBIDA A UTILIZAÇÃO DE PROGRAMAS DO TIPO SPIDER/CRAWLER OU DE MINERAÇÃO DE DADOS, QUE
                        TENHAM COMO FINALIDADE A QUEBRA DE SISTEMAS DE SEGURANÇA, SENHA, CAPTCHA, OU AINDA DE QUALQUER
                        TIPO OU ESPÉCIE CORRELATA, ALÉM DE OUTROS AQUI NÃO TIPIFICADOS, MAS QUE ATUE DE MODO
                        AUTOMATIZADO, TANTO PARA REALIZAR OPERAÇÕES MASSIFICADAS OU PARA QUAISQUER OUTRAS FINALIDADES,
                        SOB PENA DE APLICAÇÃO DA LEGISLAÇÃO CORRELATA DE PROTEÇÃO DOS INTERESSES DA GESTISS, SEM
                        PREJUÍZO DA OBRIGAÇÃO DE REPARAR QUAISQUER PERDAS E DANOS EVENTUALMENTE APURADOS E/OU SUPORTADOS
                        PELA GESTISS E QUE DECORREREM DESTA UTILIZAÇÃO INDEVIDA.
                        3.1.2. É PROIBIDA, AINDA, A COLETA DE INFORMAÇÕES DE IDENTIFICAÇÃO PESSOAL E CADASTRO DE OUTROS
                        USUÁRIOS DA PLATAFORMA PARA QUAISQUER FINS.
                        STRO DE OUTROS USUÁRIOS DA PLATAFORMA PARA QUAISQUER FINS.
                        CAPÍTULO IV – REMUNERAÇÃO PELOS SERVIÇOS
                        4.1. Remuneração. Os serviços disponibilizados na plataforma GESTISS serão remunerados de acordo
                        com as condições negociadas com a EMPRESA LICENCIANTE e a GESTISSou nos valores informados no
                        próprio aplicativo para os demais usuários.
                        CAPÍTULO V – EXCLUSÃO DE GARANTIAS
                        5.1. Disponibilidade. A PLATAFORMA GESTISS ESTÁ DISPONÍVEL PARA USO POR CONTA E RISCO DOS
                        USUÁRIOS E É OFERECIDA “NO ESTADO EM QUE SE ENCONTRA” E “CONFORME DISPONÍVEL”. A GESTISS DECLINA
                        QUALQUER RESPONSABILIDADE POR DECLARAÇÕES E GARANTIAS, EXPRESSAS, IMPLÍCITAS OU ESTATUTÁRIAS DE
                        TERCEIROS, NÃO EXPRESSAMENTE PREVISTAS NESTES TERMOS DE USO, INCLUINDO GARANTIAS IMPLÍCITAS DE
                        COMERCIABILIDADE, ADEQUAÇÃO A UM DETERMINADO FIM E DE NÃO VIOLAÇÃO. ALÉM DISSO, A GESTISS NÃO
                        DECLARA QUE OS SERVIÇOS SERÃO FORNECIDOS SEM INTERRUPÇÕES OU ERROS. O USUÁRIO ACEITA QUE TODO O
                        RISCO DECORRENTE DA SUA UTILIZAÇÃO DA PLATAFORMA GESTISS É DA SUA EXCLUSIVA RESPONSABILIDADE, NA
                        MEDIDA DO MÁXIMO PERMITIDO POR LEI.
                        CAPÍTULO VI – LIMITAÇÃO DE RESPONSABILIDADE
                        6.1. A GESTISS RESPONDERÁ EXCLUSIVA E LIMITADAMENTE PELA DISPONIBILIZAÇÃO DE ESPAÇO VIRTUAL
                        VOLTADO PARA A CONEXÃO ENTRE OS USUÁRIOS E OS PROFISSIONAIS DA SAÚDE, PARA FINS DE PERMITIR O
                        OFERECIMENTO DE ORIENTAÇÕES E ACONSELHAMENTOS SOBRE SAÚDE, BEM COMO CONSULTAS MÉDICAS, NOS
                        EXATOS TERMOS E CONDIÇÕES PREVISTOS NO PRESENTE INSTRUMENTO. SENDO ASSIM, A GESTISS REITERA QUE
                        NÃO CONSTITUI COM NENHUM DOS USUÁRIOS DA PLATAFORMA GESTISS: (I) SOCIEDADE, ASSOCIAÇÃO OU
                        REPRESENTAÇÃO; (II) PRESTAÇÃO DE QUALQUER SERVIÇO DE SAÚDE POR PARTE DA GESTISS AOS USUÁRIOS, OU
                        (III) RELAÇÃO EMPREGATÍCIA. PORTANTO, NENHUMA LEI, NORMA OU REGULAMENTO REFERENTE A ESSAS
                        RELAÇÕES É APLICÁVEL.
                        6.2. Responsabilidade. A GESTISS NÃO SERÁ RESPONSÁVEL POR QUAISQUER PERDAS OU DANOS SOFRIDOS,
                        RESULTANTES DE: (I) QUALQUER INFORMAÇÃO ERRADA OU INCOMPLETA QUE SEJA FORNECIDA POR UM USUÁRIO;
                        (II) QUALQUER ORIENTAÇÃO MÉDICA FORNECIDA PELOS PROFISSIONAIS DE SAÚDE ATRAVÉS DA PLATAFORMA;
                        (III) QUALQUER FRAUDE, DECLARAÇÃO FRAUDULENTA OU VIOLAÇÃO DO DEVER, OU VIOLAÇÃO DE QUALQUER UMA
                        DAS CONDIÇÕES POR UM USUÁRIO; (IV) FALHAS NAS CONEXÕES; (V) PROBLEMAS NO PROCESSAMENTO DE DADOS
                        POR CULPA DE TERCEIROS; (VI) POR USUÁRIOS CADASTRADOS NO SISTEMA E NEM PELO PRIVILÉGIO DE ACESSO
                        CONFERIDO A CADA UM, AS AÇÕES DELES NO SISTEMA, TIPOS DE DADOS VISUALIZADOS OU RELATÓRIO GERADOS
                        PELOS MESMOS; (VII)PELA CÓPIA DE DADOS DO SISTEMA, SENDO O USUÁRIO TAMBÉM RESPONSÁVEL POR UMA
                        CÓPIA PRÓPRIA; OU  (VIII) POR QUALQUER INFORMAÇÃO, ACONSELHAMENTO OU ORIENTAÇÃO FORNECIDO PELOS
                        PROFISSIONAIS CONTATADOS NA PLATAFORMA, SENDO ESTES AUTÔNOMOS  INTEIRA E EXCLUSIVAMENTE
                        RESPONSÁVEIS PELOS PRÓPRIOS ATOS E FALAS.
                        6.2.1. A GESTISS NÃO SERÁ RESPONSÁVEL POR FALSIDADES IDEOLÓGICAS DOS USUÁRIOS, BEM COMO SOBRE
                        INVERDADES DITAS SOBRE QUALQUER TEMA ABORDADO NAS CONVERSAS, QUE POSSAM RESULTAR EM AÇÕES
                        PREJUDICIAIS DURANTE O TRATAMENTO DOS PROBLEMAS DE SAÚDE. A GESTISS ENTENDE QUE, OS USUÁRIOS, AO
                        INICIAREM UMA CONVERSA, DEVEM TOMAR OS CUIDADOS HABITUAIS QUE TOMAM COM PESSOAS RECÉM
                        CONHECIDAS, UTILIZANDO-SE DE BOM SENSO E CAUTELA.
                        6.3. Violação de Direito de Terceiros. A GESTISS NÃO SE RESPONSABILIZARÁ PERANTE QUALQUER
                        USUÁRIO EM RELAÇÃO A QUALQUER VIOLAÇÃO DE DIREITO DE TERCEIROS.
                        6.4. Perdas. A GESTISS NÃO SE RESPONSABILIZARÁ PERANTE QUALQUER USUÁRIO NO QUE SE REFERE À PERDA
                        ECONÔMICA, FINANCEIRA OU DE NEGÓCIO, OU POR QUALQUER PERDA INDIRETA.
                        6.5. Danos. EM NENHUM CASO, A GESTISS SERÁ RESPONSÁVEL POR DANOS INDIRETOS, INCIDENTAIS,
                        ESPECIAIS, EXEMPLARES, PUNITIVOS OU CONSEQUENTES, INCLUINDO, DANOS PESSOAIS OU À PROPRIEDADE,
                        RELACIONADOS COM, OU DE OUTRA FORMA RESULTANTES, DE QUALQUER USO DA PLATAFORMA GESTISS QUE O
                        USUÁRIO POSSA SOFRER DEVIDO ÀS AÇÕES REALIZADAS OU NÃO REALIZADAS ATRAVÉS DESTA, AINDA QUE
                        DECORRENTES DA CONDUTA DE OUTROS USUÁRIOS DA PLATAFORMA OU DOS PROFISSIONAIS DA SAÚDE.
                        6.6. Falhas da Internet. A GESTISS NÃO SE RESPONSABILIZARÁ POR QUALQUER DANO, PREJUÍZO OU PERDA
                        SOFRIDOS PELO USUÁRIO EM RAZÃO DE FALHAS NA INTERNET, NO SISTEMA OU NO SERVIDOR UTILIZADO PELO
                        USUÁRIO, OU AQUELES DECORRENTES DE CONDUTAS DE TERCEIROS, DE CASO FORTUITO OU DE FORÇA MAIOR.  A
                        GESTISS TAMBÉM NÃO SERÁ RESPONSÁVEL POR ÍRUS QUE POSSA CORROMPER O EQUIPAMENTO DO USUÁRIO EM
                        DECORRÊNCIA DO ACESSO, UTILIZAÇÃO OU NAVEGAÇÃO NA INTERNET OU COMO CONSEQUÊNCIA DA TRANSFERÊNCIA
                        DE DADOS, ARQUIVOS, IMAGENS, TEXTOS OU ÁUDIO.
                        6.7. Indenização. O USUÁRIO INDENIZARÁ A GESTISS, DIRETORES, ADMINISTRADORES, COLABORADORES,
                        REPRESENTANTES E EMPREGADOS POR QUALQUER DEMANDA PROMOVIDA POR OUTROS USUÁRIOS OU TERCEIROS
                        DECORRENTES DE SUAS ATIVIDADES NA PLATAFORMA, E PELO DESCUMPRIMENTO DOS TERMOS DE USO E
                        CONDIÇÕES E DEMAIS POLÍTICAS DA MESMA, E AINDA PELA VIOLAÇÃO DE QUALQUER LEI OU DIREITOS DE
                        TERCEIROS, INCLUINDO HONORÁRIOS ADVOCATÍCIOS.
                        6.7.1. Polo Passivo. OS USUÁRIOS RESPONSÁVEIS PERANTE TERCEIROS POR QUALQUER ATO OU FATO
                        DECORRENTE DESTES TERMOS DE USO, COMPROMETEM-SE A DEFENDER A GESTISS, OU QUALQUER SOCIEDADE DO
                        GRUPO, SUAS SUBSIDIÁRIAS, AFILIADAS, DIRETORES, AGENTES E FUNCIONÁRIOS, QUANDO ESTA FOR
                        DEMANDADA EM SEU LUGAR, INCLUINDO, MAS NÃO SE LIMITANDO, A DEMANDAS DECORRENTES DAS RELAÇÕES
                        ENTRE OS USUÁRIOS E PROFISSIONAIS DE SAÚDE E USUÁRIOS E TERCEIROS, RECLAMAÇÕES, SEJA JUDICIAL OU
                        EXTRAJUDICIALMENTE, DEVENDO, PARA TANTO, PAGAR À GESTISS TODOS OS VALORES POR ELA DESEMBOLSADOS
                        COM SUA DEFESA OU INDENIZAÇÕES, INCLUSIVE COM A CONTRATAÇÃO DE ADVOGADOS, DEVENDO A PARTE
                        RESPONSÁVEL, QUANDO CABÍVEL, PROVIDENCIAR A SUBSTITUIÇÃO PROCESSUAL DA GESTISS OU QUALQUER
                        SOCIEDADE DO GRUPO, SUAS SUBSIDIÁRIAS, AFILIADAS, DIRETORES, AGENTES E FUNCIONÁRIOS.
                        6.8. Limitações e Exceções. AS LIMITAÇÕES E EXCEÇÕES CONSTANTES NA PRESENTE CLÁUSULA SEXTA NÃO
                        PRETENDEM CONSTITUIR UMA LIMITAÇÃO DA RESPONSABILIDADE OU ALTERAR OS DIREITOS DO USUÁRIO, NA
                        QUALIDADE DE CONSUMIDOR, QUE NÃO PODEM SER EXCLUÍDOS POR LEI ENTRE AS PARTES.
                        CAPÍTULO VII – ENGENHARIA DA PLATAFORMA
                        7.1. Aperfeiçoamento. Os Usuários concordam que todo e qualquer sistema, plataforma ou serviço,
                        independentemente de seu produtor ou características, é uma espécie de produto que está sempre
                        em atualização e aperfeiçoamento, possuindo, constante e incondicionalmente, aspectos a serem
                        melhorados, o que não pode ser considerado em si como falha ou defeito.
                        7.2. Erros de Funcionamento. Eventuais erros no funcionamento da Plataforma serão corrigidos o
                        mais breve possível, durante o período que for necessário para manutenção.  A GESTISS não
                        pretende que o funcionamento do servidor da plataforma, bem como de seu sistema, do seu banco de
                        dados, software e de seu website, sejam livres de erros, falhas ou de interrupções, portanto,
                        não fornece qualquer tipo de garantia expressa ou implícita, como também não se responsabiliza
                        por danos acidentais ou indiretos sofridos pelos Usuários, salvo expressa comprovação de
                        ausência de manutenção.
                        CAPÍTULO VIII – PROPRIEDADE INTELECTUAL
                        8.1. Utilização da Propriedade Intelectual. O uso comercial da expressão “GESTISS” como marca,
                        nome empresarial ou nome de domínio, e o logotipo são de propriedade exclusiva da GESTISS LTDA.,
                        bem como, estrutura, os conteúdos das telas relativas à plataforma da GESTISS, assim como os
                        programas relacionados à plataforma, software, website, bancos de dados, redes, arquivos que
                        permitem ao Usuário acessar a plataforma GESTISS e ao Usuário usar sua conta, são de sua
                        propriedade. Todos os direitos estão protegidos, no Brasil e internacionalmente por leis e
                        tratados internacionais de direito autoral, marcas, patentes, modelos e desenhos industriais. A
                        GESTISS LTDA. reserva-se todos os direitos relativos a autorias, marcas, patentes, modelos e
                        desenhos industriais, quer sejam de sua propriedade ou licenciados em seu favor, a si.
                        8.1.1. Não é permitido reproduzir, duplicar, copiar, vender, revender, visitar, ou de qualquer
                        outra forma explorar para fins comerciais o conteúdo da Plataforma GESTISS sem o prévio
                        consentimento escrito da GESTISS LTDA. Particularmente, é expressamente proibida a utilização de
                        mineração de dados, robôs, ou outras ferramentas de coleta e extração de dados para extrair, de
                        forma isolada ou recorrente, qualquer parte substancial da plataforma visando sua reutilização.
                        8.1.2. A menos que haja um contrato de licença celebrado com a GESTISS LTDA., não é permitido
                        baixar, distribuir, exibir e/ou copiar qualquer conteúdo da plataforma.
                        CAPÍTULO IX – CONDIÇÕES FINAIS
                        9.1. Suspensão e Cancelamento do Acesso. NA EVENTUALIDADE DE UM DESCUMPRIMENTO POR PARTE DO
                        USUÁRIO DE UM DOS TERMOS DE USO, ESTE RECONHECE E ACEITA QUE A GESTISS E/OU A EMPRESA LICENCIADA
                        PODEM, EM QUALQUER MOMENTO, SEM AVISO PRÉVIO, INTERROMPER OU SUSPENDER, TEMPORÁRIA OU
                        PERMANENTEMENTE, PARTE OU A TOGESTISSIDADE, DO ACESSO À PLATAFORMA.
                        9.2. Advertências e Suspensão. SEM PREJUÍZO DE OUTRAS MEDIDAS CABÍVEIS, A GESTISS E/OU A EMPRESA
                        LICENCIADA PODERÃO ADVERTIR, SUSPENDER, TEMPORÁRIA OU DEFINITIVAMENTE, O ACESSO DE UM USUÁRIO OU
                        A CONTA DE UM USUÁRIO, A QUALQUER TEMPO, INICIANDO AS AÇÕES LEGAIS CABÍVEIS E/OU SUSPENDENDO O
                        ACESSO DESTE, SE:
                        a) NÃO CUMPRIR COM QUALQUER DISPOSITIVO DOS TERMOS DE USO;
                        b) DESCUMPRIR COM QUAISQUER DE SUAS OBRIGAÇÕES OU PROIBIÇÕES ASSUMIDAS AO UTILIZAR OS SERVIÇOS
                        DA PLATAFORMA DA GESTISS;
                        c) PRATICAR ATOS FRAUDULENTOS OU DOLOSOS, BEM COMO PRESTAR DECLARAÇÕES, PUBLICAÇÕES OU
                        AFIRMAÇÕES FALSAS E/OU ENGANOSAS, EM QUALQUER MEIO IMPRESSO OU VIRTUAL, VIA INTERNET, ATRAVÉS DE
                        E-MAILS, SITES, BLOGS OU EM MÍDIAS SOCIAIS, UTILIZANDO-SE DO NOME E/OU MARCA DA GESTISS;
                        d) UTILIZAR, SEM AUTORIZAÇÃO, NOME E/OU MARCA DA GESTISS, EM PARTE OU NA SUA TOGESTISSIDADE, E
                        VIOLAR DIREITOS DE PROPRIEDADE INTELECTUAL;
                        e) NÃO PUDER SER VERIFICADA A IDENTIDADE DO USUÁRIO OU SE QUALQUER INFORMAÇÃO FORNECIDA POR ELES
                        ESTIVER INCORRETA;
                        f) A GESTISS ENTENDER QUE A UTILIZAÇÃO DA PLATAFORMA GESTISS, OU QUALQUER ATITUDE DO USUÁRIO,
                        TENHA CAUSADO ALGUM DANO A TERCEIROS OU A ELA MESMA, OU TENHA A POTENCIALIDADE DE ASSIM O FAZER,
                        DESDE QUE SEJA APRESENTADA A DEVIDA FUNDAMENTAÇÃO; E
                        g) O USUÁRIO UTILIZAR-SE DE FOTOS IMPRÓPRIAS, COM CONTEÚDO ILEGAL OU CONTRA A MORAL E OS BONS
                        COSTUMES, BEM COMO UTILIZAR-SE DE PALAVRAS DE BAIXO CALÃO COM OUTROS USUÁRIOS NO ÂMBITO DA
                        PLATAFORMA.
                        9.3. Perdas e Danos. EM QUALQUER CASO DE SUSPENSÃO OU CANCELAMENTO DO CADASTRO PELOS MOTIVOS
                        DISPOSTOS NA CLÁUSULA ACIMA, O USUÁRIO PODERÁ SER RESPONSABILIZADO POR EVENTUAIS PERDAS E DANOS,
                        ALÉM DE DANOS MORAIS QUE PORVENTURA SEJAM APURADOS EM FAVOR DA GESTISS OU DE OUTRO USUÁRIO.
                        9.4. Tratamento dos Dados Pessoais. Para que a Plataforma da GESTISS tenha qualidade e para que
                        os Usuários possam obter resultados de forma rápida e segura, são necessárias informações de
                        caráter pessoal, conforme disposto na Política de Privacidade.
                        9.4.1. Salvo com relação às informações publicadas na Plataforma, a GESTISS buscará manter a
                        confidencialidade e a segurança das informações sigilosas, porém não se responsabilizará por
                        eventuais prejuízos que sejam decorrentes da divulgação de tais informações por parte de
                        terceiros que utilizem as redes públicas ou a internet, subvertendo os sistemas de segurança
                        para acessar as informações de Usuários.
                        9.5. Informações Sigilosas. Não será considerada Informação Sigilosa, pessoal ou confidencial,
                        não estando, portanto, sujeita ao sigilo e privacidade, as informações:
                        a) que já eram de domínio público na ocasião em que foram recebidas, ou passem a ser de domínio
                        público sem infringir as obrigações ora assumidas;
                        b) que venham a ser de conhecimento das partes de modo não confidencial, recebidas de terceiros,
                        cuja aquisição e revelação tenham sido de modo toGESTISSmente independente, sem infringir
                        quaisquer das obrigações ora assumidas e sem qualquer caráter sigiloso; e
                        c) cuja revelação seja exigida por lei, regulamento ou decisão administrativa, judicial ou
                        arbitral.
                        9.6. Direito de Comunicação. A GESTISS se reserva o direito de comunicar informação sobre os
                        Usuários da Plataforma a entidades públicas, quando haja motivos suficientes para considerar que
                        a atividade de um Usuário seja potencialmente ilícita ou prejudicial a si ou outras pessoas.
                        Este direito será utilizado pela GESTISS nos termos previstos na legislação brasileira, quando
                        considerar apropriado ou necessário para manter a integridade e a segurança da plataforma
                        GESTISS e de seus Usuários, e para fazer cumprir os presentes Termos de Uso.
                        9.7. Utilização de Dados. A GESTISS declara que os dados dos Usuários da Plataforma somente
                        serão utilizados para as finalidades específicas descritas nestes Termos de Uso e na Política de
                        Privacidade, bem como se responsabiliza pelo cumprimento dos deveres previstos no Marco Civil da
                        Internet brasileiro, no que diz respeito aos direitos e garantias dos USUÁRIOS.
                        9.7.1. A Política de Privacidade explica o modo como são utilizados os dados pessoais do Usuário
                        e a forma como são protegidas a privacidade deste, quando utiliza a plataforma GESTISS.
                        9.8. Vigência. Os Termos de Uso terão início de vigência perante cada Usuário no primeiro acesso
                        do mesmo à Plataforma da GESTISS e irão terminar quando este cadastro for desativado,
                        permanecendo as responsabilidades pelo período de utilização.
                        9.9. Nulidades. Se qualquer cláusula deste instrumento for considerada ilegal, inválida ou
                        inaplicável, no seu todo ou em parte, ao abrigo de qualquer lei, essa cláusula ou parte do mesmo
                        será nesta exata medida entendida como não fazendo parte dos Termos de Uso, sendo que a
                        legalidade, validade e aplicabilidade das demais cláusulas não serão afetadas. Nesse caso, os
                        Usuários e a GESTISS devem substituir a parte da disposição ilegal, inválida ou inaplicável por
                        uma (parte de uma) disposição que seja legal, válida e aplicável e que tenha, na maior medida
                        possível, um efeito semelhante à disposição ou à sua parte ilegal, inválida ou inaplicável,
                        tendo em conta o conteúdo e a finalidade do presente instrumento. Os Termos de Uso constituem o
                        acordo e entendimento integral das partes no que respeita ao seu assunto e substituem e
                        sobrepõem-se a todos os acordos e compromissos anteriores e atuais em relação a esse assunto.
                        9.10. Incapazes e Menores de Idade. A idade mínima para o uso da Plataforma da GESTISS é 18
                        (dezoito) anos. Na ocorrência de causas que afetam a plena capacidade civil do Usuário, o uso da
                        plataforma GESTISS deverá ser restrito, sob as condições de ser assistido ou representado,
                        conforme norma civil aplicável.

                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-outline-info" data-bs-dismiss="modal">Confirmo</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Footer -->
        <footer class="footer fixed">
            <div class="container">
                <button onclick="salvar()" class="btn btn-primary w-100 btn-rounded" disabled>Cadastrar</button>
            </div>
        </footer>
        <!-- Footer End -->

    </div>

    @include('paginas.moda.modal_wait')
@stop

@section('script')

    <script>
        $("input[name=termos]").on('click', function() {
            $(this).is(":checked") ? $("button[onclick='salvar()']").attr("disabled", false) : $(
                "button[onclick='salvar()']").attr("disabled", true)
        });

        function salvar() {
            let formData = new FormData();
            $.each($(`.form-cadastro .form-control`), function(i, obj) {
                formData.append(obj.name, obj.value);
            });

            formData.append("usu_login", $('input[name=usu_cpf]').cleanVal());
            formData.append("usu_senha", $('input[name=usu_cpf]').cleanVal());
            formData.append("perf_cid", true);

            $.ajax({
                url: `${API_URL}/mobile/cadastro`,
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: (req) => {
                    modalWait().toggle();
                },
                success: (data) => {
                    modalWait().toggle();
                },
                error: (err) => {
                    Toast.fire({
                        text: err.responseJSON.usu_cpf,
                        icon: 'error'
                    })

                    setTimeout(() => {
                        modalWait().toggle();
                    }, 500);
                }
            })
        }


        let modal = null;

        function modalWait() {
            if (modal == null) {
                modal = new bootstrap.Modal(document.getElementById("modal_waiting"), {
                    keybord: false,
                });
            }

            return modal;
        }
    </script>
@endsection
