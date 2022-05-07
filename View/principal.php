<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Enlatados Juarez</title>
    <style>
        .w3-sidebar {
            width: 120px;
        }
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Montserrat", sans-serif;
        }
    </style>
</head>
<body class="w3-light-grey">
    <nav class="w3-sidebar w3-bar-block w3-center w3-blue">
        <a href="#home" class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">
            <i class="fa fa-home w3-xxlarge"></i>
            <p>HOME</p>
        </a>
        <a href="#dPessoais" class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">
            <i class="fa fa-address-book-o w3-xxlarge"></i>
            <p>Dados Pessoais</p>
        </a>
        <a href="#formacao" class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">
            <i class="fa fa-mortar-board w3-xxlarge"></i>
            <p>Formação</p>
        </a>
    </nav>
    <div class="w3-padding-large" id="main">
        <header class="w3-container w3-padding-32 w3-center" id="home">
            <h1>
                <img src="../Img/logo.png" alt="Logo" class="w3-image" width="05%">
                <br>
            </h1>
            <a class="w3-text-cyan" href="http://www.freepik.com">Designed by brgfx / Freepik</a>
            <br>
            <h1 class="w3-text-cyan">
                SISTEMA DE CURRICULOS
            </h1>
        </header>
        <div class="w3-padding-128 w3-content w3-text-grey" id="dPessoais">
            <h2 class="w3-text-cyan">Dados Pessoais</h2>
            <form>
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:11%">
                        <i style="color:#2196F3!important" class="w3-xxlarge fa-blue fa fa-user "></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtNome" type="text" placeholder="Nome Completo">
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:11%">
                        <i style="color:#2196F3!important" class="w3-xxlarge fa fa-calendar"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtData" type="date" value="">
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:11%">
                        <i style="color:#2196F3!important" class="w3-xxlarge fa fa-drivers-license"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtCPF" type="text" placeholder="CPF:33333333333" value="">
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:11%">
                        <i style="color:#2196F3!important" class="w3-xxlarge fa fa-envelope-o"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtEmail" type="text" placeholder="E-mail">
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-center">
                        <button name="btnAtualizar" class="w3-button w3-block w3-margin w3-blue w3-cell w3-round-large" style="width: 90%">Atualizar</button>
            </form>
        </div>
        <div class="w3-padding-128 w3-content w3-text-grey" id="formacao" style="padding-top: 100px;">
            <h2 class="w3-text-cyan" style="text-align: left !important;">Formação</h2>
            <form action="" method="post" class="w3-row w3-light-grey w3-text-blue w3-margin" style="width:100%">
                <div class="w3-row w3-center">
                    <div class="w3-col" style="width:50%;">
                        Data Inicial
                    </div>
                    <div class="w3-res" style="">
                        Data Final
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-row w3-section w3-col" style="width:45%">
                        <div class="w3-col" style="width:15%">
                            <i class="w3-xxlarge fa fa-calendar"></i>
                        </div>
                        <div class="w3-rest">
                            <input class="w3-input w3-border w3-round-large" name="txtInicioFA" type="date" placeholder="">
                        </div>
                    </div>
                    <div class="w3-row w3-section w3-rest">
                        <div class="w3-col w3-margin-left" style="width: 13%">
                            <i class="w3-xxlarge fa fa-calendar"></i>
                        </div>
                        <div class="w3-rest">
                            <input class="w3-input w3-border w3-round-large" name="txtFimFA" type="date" placeholder="">
                        </div>
                    </div>
                    <div>
                        <div class="w3-row w3-section">
                            <div class="w3-col" style="width: 7%;">
                                <i class="w3-xxlarge fa fa-align-justify"></i>
                            </div>
                            <div class="w3-rest">
                                <input class="w3-input w3-border w3-round-large" name="txtDescFA" type="text" placeholder="Descrição: Ex.:Técnico de Desenvolvimento de Sistemas - Centro Paula Souza">
                            </div>
                        </div>
                        <div class="w3-row w3-section">
                            <div class="w3-center">
                                <button name="btnAddFormacao" class="w3-button w3-block w3-blue w3-cell w3-round-large" style="width: 20%;">
                                    <i class="w3-xxlarge fa fa-user-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="w3-container">
                <table class="w3-table-all w3-centered">
                    <thead>
                        <tr class="w3-center w3-blue">
                            <th>Início</th>
                            <th>Fim</th>
                            <th>Descrição</th>
                            <th>Apagar</th>
                        </tr>
                        <thead>
                </table>
            </div>
        </div>
        <div class="w3-padding-128 w3-content w3-text-grey" id="eProfissional" style="padding-top: 100px;">
            <h2 class="w3-text-cyan">Experiência Profissional</h2>
        </div>
        <form action=" " method="post" class=" w3-row w3-light-grey w3-text-blue w3-margin" style="width: 100%;">
            <div class="w3-row w3-center">
                <div class="w3-col" style="width:50%;">
                    Data Inicial
                </div>
                <div class="w3-res" style="">
                    Data Final
                </div>
            </div>
            <div class="w3-row w3-section">
                <div class="w3-row w3-section w3-col" style="width:45%;">
                    <div class="w3-col" style="width:15%;">
                        <i class="w3-xxlarge fa fa-calendar"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtInicioEP" type="date" placeholder="">
                    </div>
                </div>
                <div class="w3-row w3-section w3-rest" style="">
                    <div class="w3-col w3-margin-left" style="width:13%;">
                        <i class="w3-xxlarge fa fa-calendar"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtFimEP" type="date" placeholder="">
                    </div>
                </div>
                <div>
                    <div class="w3-row w3-section">
                        <div class="w3-col" style="width:7%;">
                            <i class="w3-xxlarge fa fa-align-justify"></i>
                        </div>
                        <div class="w3-rest">
                            <input class="w3-input w3-border w3-round-large" name="txtEmpEP" type="text" placeholder="Centro Paula Souza">
                        </div>
                    </div>
                    <div class="w3-row w3-section">
                        <div class="w3-col" style="width:7%;">
                            <i class="w3-xxlarge fa fa-align-justify"></i>
                        </div>
                        <div class="w3-rest">
                            <input class="w3-input w3-border w3-round-large" name="txtDescEP" type="text" placeholder="Descrição: Ex.: Técnico em Desenvolvimento de Sistemas -
                                        Desenvolvimento de Páginas WEB">
                        </div>
                    </div>
                    <div class="w3-row w3-section">
                        <div class="w3-center" style="">
                            <button name="btnAddEP" class="w3-button w3-block w3-blue w3-cell w3-round-large" style="width: 20%;">
                                <i class="w3-xxlarge fa fa-user-plus"></i>
                            </button>
                        </div>
                    </div>
        </form>
        <div class="w3-container">
            <table class="w3-table-all w3-centered">
                <thead>
                    <tr class="w3-center w3-blue">
                        <th>Início</th>
                        <th>Fim</th>
                        <th>Empresa</th>
                        <th>Descrição</th>
                        <th>Apagar</th>
                    </tr>
                    <thead>
            </table>
        </div>
        <div class="w3-padding-128 w3-content w3-text-grey" id="OutrasFormações" style="padding-top: 100px;">
            <h2 class="w3-text-cyan">Outras Formações</h2>
        </div>
        <form action=" " method="post" class=" w3-row w3-light-grey w3-text-blue w3-margin" style="width: 100%;">
            <div class="w3-row w3-center">
                <div class="w3-col" style="width:50%;">
                    Data Inicial
                </div>
                <div class="w3-res" style="">
                    Data Final
                </div>
            </div>
            <div class="w3-row w3-section">
                <div class="w3-row w3-section w3-col" style="width:45%;">
                    <div class="w3-col" style="width:15%;">
                        <i class="w3-xxlarge fa fa-calendar"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtInicioOF" type="date" placeholder="">
                    </div>
                </div>
                <div class="w3-row w3-section w3-rest" style="">
                    <div class="w3-col w3-margin-left" style="width:13%;">
                        <i class="w3-xxlarge fa fa-calendar"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name=" txtFimOF" type="date" placeholder="">
                    </div>
                </div>
                <div>
                    <div class="w3-row w3-section">
                        <div class="w3-col" style="width:7%;">
                            <i class="w3-xxlarge fa fa-align-justify"></i>
                        </div>
                        <div class="w3-rest">
                            <input class="w3-input w3-border w3-round-large" name="txtDescEP" type="text" placeholder="Ex.: Curso de Inglês - Inglês city">
                        </div>
                    </div>
                    <div class="w3-row w3-section">
                        <div class="w3-center" style="">
                            <button name=" btnAddOF" class="w3-button w3-block w3-blue w3-cell w3-round-large" style="width: 20%;">
                                <i class="w3-xxlarge fa fa-user-plus"></i>
                            </button>
                        </div>
                    </div>
        </form>
        <div class="w3-container">
            <table class="w3-table-all w3-centered">
                <thead>
                    <tr class="w3-center w3-blue">
                        <th>Início</th>
                        <th>Fim</th>
                        <th>Descrição</th>
                        <th>Apagar</th>
                    </tr>
                    <thead>
            </table>
        </div>
</body>
</html>