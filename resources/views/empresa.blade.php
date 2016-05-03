@extends('index')
@section('contenido')
    <br><br><br>
    <style>
        .pull-left img{
            width: 450px;
            height: auto;
        }
    </style>
    <div class="container">
        <h4 class=" gris fonte">•  Empresa</h4>

        <div class="media">
            <a href="#" class="pull-left">
                <img src="{{URL::to('admin/img/quinesomos.png')}}" class="media-object" alt="imagen">
            </a>
            <div class="media-body">
                <h4 class="media-heading fonte">• Sobre nós <small></small></h4>
                <p>
                    Em resposta à demanda dos consumidores pela alta-performance dos receptores, a Duo Laboratories para sua marca Duosat, tem trabalhado para desenvolver a evolução dos receptores de definição standard e alta definição (HD), para ser capaz de oferecer recursos e aparelhos multimídia de alto desempenho com conectividade total, a mais moderna tecnologia, combinado com um design exclusivo.
                    <br>
                    Duo laboratórios é o fabricante dos receptores de satélite (FTA - Free to air) da marca Duosat. Na Duosat, a satisfação do cliente é a nossa maior prioridade, através da utilização de tecnologia inovadora, somos capazes de oferecer um produto superior, rico em recursos e funcionalidades a um preço justo. Através da aliança estratégica com empresas parceiras, oferecemos produtos de alta qualidade com preços compatíveis, que irão garantir a sucessão contínua e a satisfação dos clientes no futuro.
                </p>
                {{--******************************--}}


            </div>
            <br>

            <h4 class="media-heading fonte">• Visão<small></small></h4>
            <p>
                Duo laboratórios entende que o sucesso só pode ser concluído no momento que atingir a satisfação total do cliente. Duosat  promete satisfação total do cliente através da contínua pesquisa e desenvolvimento de produtos junto com suporte, garantia permanente e serviços para suportar a nossa promessa. Pedimos aos nossos clientes ter em mente que Duosat é uma porta sempre deixada aberta para opiniões e sugestões dos nossos clientes.
            </p>
            {{--******************************--}}
            <h4 class="media-heading fonte">• Software de Terceiros<small></small></h4>
            <p>
                A Duo Laboratories não oferece nem aprova a utilização de software de terceiros.
                <br>
                A utilização de softwares de terceiros pode ser ilegal, danificar o seu aparelho e pode anular a garantia do produto. Não entre em contato conosco perguntando sobre qualquer software ilegal.
                <br>
                Nossos receptores de satélite são projetados e fabricados apenas para uso legal. Vamos recusar a venda a qualquer pessoa ou empresa que acreditamos que tenha intenções de usar o nosso produto de forma ilegal, ou tenha a pretensão de vender o nosso produto para fins ilegais.
            </p>

            {{--*****************************--}}
            <br>


            <h4 class="media-heading fonte">• Por que Duosat?<small></small></h4>
            <p>
                Duosat  é a última novidade em quanto a inovação  de receptores via satélite em definição padrão ou de alta definição.

            </p>
            {{--******************************--}}
            <br>

            {{--******************************--}}
            <h4 class="media-heading fonte">• Branding <small></small></h4>
            <p>
                A marca Duosat surge da expressão DUO (duplo), já que foi o primeiro fabricante de receptores com sintonizadores duplos, para dar maior eficiência e dinamismo na utilização por parte do cliente final.
            </p>
            {{--******************************--}}
            <br>
            {{--******************************--}}



            {{--******************************--}}
            <h4 class="media-heading fonte">• Conectividade com a Internet<small></small></h4>
            <p>
                Diferente dos outros receptores, a Duosat oferece solução de rede avançada, com wi-fi ou internet a cabo em todos os receptores.
            </p>
            {{--******************************--}}
            <br>


            <h4 class="media-heading fonte">• Tuner duplo<small></small></h4>
            <p>
                A tecnologia padrão aplicada nos receptores de baixo custo, não permitem a manipulação de dois sintonizadores DVB simultaneamente. Graças a Duosat  e a alta tecnologia incorporada fornecida pelo Duo laboratórios, é possível alternar entre dois sintonizadores diferentes ao mesmo tempo.
                <br>
                A configuração pode ser DVB-S ou DVB-S2, isto depende apenas do modelo.
            </p>


            {{--******************************--}}






        </div>










        <div class="fonte2">• Time Machine   </div>

        <p>
            Esta função permite parar, rebobinar ou avançar programas ao vivo, somente é preciso ligar um disco USB flash, que permite a você pausar e continuar seus programas a qualquer hora!
        </p>

        <div class="fonte2">• Sistema exclusivo de Gêneros </div>

        <p>
            Com esta função você não precisa separar a lista de favoritos, não perca o seu tempo, nos já fazemos isso por você! Todos os canais são automaticamente separados por gênero para facilitar a navegação entre os canais.
        </p>

        <div class="fonte2">• Controle automático exclusivo dos pais </div>

        <p>
            Não se preocupe com a violência ou com os canais para adultos, o controle exclusivo dos pais dos receptores da Duosat vem com um sensor automático para os programas da categoria maiores de 18 anos (pode ser desativado)
        </p>
        <div class="fonte2">• Canal exclusivo de atualização</div>

        <p>
            O canal mudou o transponder original? Não se preocupe, o AI (inteligência artificial) de todos os produtos Duosat automaticamente procuram o canal movido para o outro transponder!
        </p>
        <div class="fonte2">• Suporte para Toda a Vida</div>

        <p>
            Duo laboratórios assegura o suporte de vida útil para todos os produtos Duosat, a diferença dos outros, nós nunca vamos deixar de dar suporte!
        </p>
        <div class="fonte2">• Nós ouvimos vocês!</div>

        <p>
            A Duo laboratórios sempre ouve você! Conte a sua opinião para nós!
            <br>
            Temos uma equipe pronta para acompanhar as suas necessidades, você pode sugerir novas funções, e estudaremos a possibilidade de permitir o desenvolvimento de softwares novos!

        </p>
        <h4 class="fonte3">• Você é o mais importante para nós!<small></small></h4>
    </div>


    @stop