     <html>
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <hta:application
        applicationname="VisualizarPaginaLocal"
        border=""
		scroll="none"
		ICON="icons8-carro-16.ico"
        ID="Resgisto e Pagamentos de Vagas"
        APPLICATIONNAME="Resgisto e Pagamentos de Vagas"
        BORDER="thin"
        INNERBORDER="no"
        SINGLEINSTANCE="yes"
        WINDOWSTATE="normal"
        WIDTH="100%"
        HEIGHT="100%" 
        MAXIMIZEBUTTON="no"
        MINIMIZEBUTTON="yes"
        SCROLL="no"
		  
    />
 <style>
	  #login {
    width: 250px;
    margin: 0 auto;
    margin-top:-210px;
    border: 1px black;
    padding: 10px;
    text-align: center;
	background-color:white;
  }
  input[type="text"],
  input[type="password"] {
    width: 70%;
    padding: 1px;
    margin: 3px 0;
    border: 1px  black;
	
  }
#entrar {
    background-color: #4CAF50;
    color: white;
    padding: 2px 20px;
    
 

	
  }
 
 
  #entrar {
    margin-right: 0px;
	margin-top:10px;
	
  }
  
        body {
            background-image: url('https://img.freepik.com/free-photo/empty-parking-lot-parking-lane-outdoor-public-park_1127-3374.jpg');
            background-size: 100% 100%; 
            background-attachment: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            margin: 0;
        }
        .conteiner {
            text-align: center;
        }
    </style>
</head>
<body>

<input type="range"/>
<!-- Essa é a imagem do icone com um carro acima na direita -->
    <img src="https://static.vecteezy.com/ti/vetor-gratis/p1/4999433-car-icon-car-icon-vector-on-white-background-vector-illustration-gratis-vetor.jpg" alt="Car Icon" width="50" height="45" border="1px" style="float:right; margin-top:10px; margin-right:10px;">
	
    <div class="conteiner" style="margin-top:90px;">
        <h1><p><b style="white-space:pre; background-color:silver; color:black; border:1px; text-decoration:underline;"> Gerenciador de Vagas </b></p></h1>
        <div id="botoes">
            <div id="caixaTexto" style="display: none;">
                <p><b style="background-color:silver; color:black; border:1px;">Digite sua Matricula</p></b>
                <input type="text" id="entradaTexto" value="Matrícula" style="border:1px black; color:gray; width:210px;" onfocus="limparPlaceholder()" maxlength="6" onblur="restaurarPlaceholder()" oninput="habilitarBotaoConsultarValor()">
                <br><br>
                <div id="botoesCaixaTexto">
                    <div>
                        <button id="botaoVoltar" style="border:1px black; width:100px; display: none; white-space:pre;" onclick="voltar()"> <img src="https://cdn-icons-png.flaticon.com/128/7168/7168662.png" height="15" width="15"/>  Voltar</button>
                        <span style="margin: 1 2px;"></span> 
                        <button id="botaoRegistar" style="display: none;border:1px black;" onclick="registar()">Registar <img src="https://cdn-icons-png.flaticon.com/128/7821/7821594.png" height="17" width="15"/></button>
                    </div>
                </div>
            </div>
            <br>
            <div id="divPagar" style="display: none;">
                <button id="calcularPrecoBtn" style="display: none; border:1px black;" onclick="calcularPreco()">Consultar Valor</button>
                <span style="margin: 0 2px;"></span> 
                <button id="botaoPagar" onclick="pagar()" style="color:green; white-space:pre; border:1px black;">Pagar(€) <img src="https://cdn-icons-png.flaticon.com/128/5269/5269561.png" height="17" width="15"/></button>
            </div>
            <br>
            <br>
            <button id="requisitarBtn" onclick="mostrarCaixaTexto('requisitarBtn')" style=" border:1px black;">Requisitar Vaga</button>
            <span style="margin: 0 2px;"></span> 
            <button id="pagarBtn" onclick="mostrarCaixaTexto('pagarBtn')" style="border:1px black;">Pagar Sua Vaga</button>
            <h6><b style="white-space:pre; background-color:silver;" id="Valor">Valor em (€)Euros/Hora: 4</b></h6> 
        </div>
    </div>
   
    <div>
	<button id="botaoTabela" style="border:1px black; margin-left:5px; margin-bottom:-30px;margin-top:11%;" onclick="botaoTabela()"><img src="https://cdn-icons-png.flaticon.com/128/6772/6772234.png" height="" width="25"/></button>
        <h5><p id="barra" style="white-space:pre; margin-top:6%; background-color:yellow; color:black;"> Programa feito por: Johnatham Silva 3P1                                   Data: 2023/21/10<p></h5>
    </div>

	<div id="login" style="display: none;" style="border:1px solid black;">
	<h2>Login</h2>
    <form>
	
      <input type="text" id="usuario">
      <br>
      <input type="password" id="senha">
      <br>
	 
      <button id="entrar" onclick="redirecionar()" onclick="novo()" value="Entrar"style="border:1px black; height:32px;">Entrar</button>
	
	   <span style="margin: 1 2px;"></span> 
	 <button onclick="voltar2()" style="border:1px black; height:32px;" ><img src="https://cdn-icons-png.flaticon.com/128/7168/7168662.png" height="15" width="15"/>  <input type="submit" id="entrar" value="Voltar">Voltar</button>
	
	
	  
       
	   </div>
    </form>
  </div>
  </div>
<script type="text/vbscript">

' A funçao de mudarNomeJanela é pra por o titulo da janela
  Sub redirecionar
    Dim usuario
    
	    Set objShell = CreateObject("WScript.Shell")
    usuario = document.getElementById("usuario").value
    senha = document.getElementById("senha").value
    If usuario = "meusite" And senha = "123" Then
        ' Chama o arquivo em lote para abrir o Chrome
    
          CreateObject("WScript.Shell").Run "chrome.exe https://www.noveduc.pt/product/kit-celula-combustivel-e-celula-solar", 1, True
    Else
        MsgBox "Usuário ou senha incorretos. Por favor, tente novamente."
    End If
End Sub

    Sub mudarNomeJanela()
	
        ' Defina o novo nome da janela
        self.htaName = "Novo Nome da Janela"
    End Sub
	
' A funçao de Window_onload significa para fazer uma ou mais funçoes apos abrir o programa

    Sub Window_onload()
        window.resizeTo 600, 460
		
    End Sub
	
' A funcao de gravarTexto sao os parametros para criar e salvar dados num ficheiro de text

    Sub gravarTexto()
        Dim objFSO, objFile, texto, caminho

        ' Recupere o valor do campo de entrada de texto
        texto = document.getElementById("entradaTexto").value

        ' Obtenha o caminho da área de trabalho do usuário atual
        Set objFSO = CreateObject("Scripting.FileSystemObject")
        caminho = objFSO.BuildPath(CreateObject("WScript.Shell").ExpandEnvironmentStrings("%TEMP%"), "MeuArquivo.txt")

        ' Verifique se o arquivo existe
        If objFSO.FileExists(caminho) Then
            ' Abra o arquivo para leitura
            Set objFile = objFSO.OpenTextFile(caminho, 1)

            ' Leia o conteúdo existente do arquivo
            conteudo = objFile.ReadAll
            objFile.Close

            ' Abra o arquivo para gravação
            Set objFile = objFSO.CreateTextFile(caminho, True)

            ' Escreva o conteúdo existente e o novo texto no arquivo
            objFile.Write conteudo & vbCrLf + texto
        Else
            ' Se o arquivo não existir, crie um novo arquivo
            Set objFile = objFSO.CreateTextFile(caminho, True)

            ' Escreva o novo texto no arquivo
            objFile.Write texto
        End If

        ' Feche o arquivo
        objFile.Close

        ' Libere os objetos
        Set objFile = Nothing
        Set objFSO = Nothing
    End Sub
</script>

<script type="text/javascript">

function voltar2(){
var EntrarTexto = document.getElementById("entradaTexto");
		var botaoRequisitar = document.getElementById("requisitarBtn");
        var botaoPagar = document.getElementById("pagarBtn");
        var caixaTexto = document.getElementById("caixaTexto");
        var botaoVoltar = document.getElementById("botaoVoltar");
        var botaoRegistar = document.getElementById("botaoRegistar");
        var divPagar = document.getElementById("divPagar");
        var pagamentoBotao = document.getElementById("botaoPagar");
        var calcularPrecoBtn = document.getElementById("calcularPrecoBtn");
		var Valor = document.getElementById("Valor");
		var Barra = document.getElementById("Barra");
		var BotaoTabela = document.getElementById("botaoTabela");
		var TelaLogin = document.getElementById("login");
		
		EntrarTexto.style.display = "none";
		TelaLogin.style.display = "none";
		BotaoTabela.style.display = "inline-block";
		Barra.style.display = "inline-block";
		Valor.style.display = "inline-block";
        botaoRequisitar.style.display = "inline-block";
        botaoPagar.style.display = "inline-block";
        caixaTexto.style.display = "none";
        botaoVoltar.style.display = "none";
        botaoRegistar.style.display = "none";
        divPagar.style.display = "none";
        pagamentoBotao.style.display = "none";
}
function botaoTabela() {
		var EntrarTexto = document.getElementById("entradaTexto");
		var botaoRequisitar = document.getElementById("requisitarBtn");
        var botaoPagar = document.getElementById("pagarBtn");
        var caixaTexto = document.getElementById("caixaTexto");
        var botaoVoltar = document.getElementById("botaoVoltar");
        var botaoRegistar = document.getElementById("botaoRegistar");
        var divPagar = document.getElementById("divPagar");
        var pagamentoBotao = document.getElementById("botaoPagar");
        var calcularPrecoBtn = document.getElementById("calcularPrecoBtn");
		var Valor = document.getElementById("Valor");
		var Barra = document.getElementById("Barra");
		var BotaoTabela = document.getElementById("botaoTabela");
		var TelaLogin = document.getElementById("login");
		
		EntrarTexto.style.display = "none";
		TelaLogin.style.display = "inline-block";
		BotaoTabela.style.display = "none";
		Barra.style.display = "none";
		Valor.style.display = "none";
        botaoRequisitar.style.display = "none";
        botaoPagar.style.display = "none";
        caixaTexto.style.display = "inline-block";
        botaoVoltar.style.display = "inline-block";
        botaoRegistar.style.display = "none";
        divPagar.style.display = "none";
        pagamentoBotao.style.display = "none";
}

//Quando o inputText tiver vazio, ele desativa o botao de consultar o preço
function habilitarBotaoConsultarValor() {
    var entradaTexto = document.getElementById("entradaTexto");
    var calcularPrecoBtn = document.getElementById("calcularPrecoBtn");

    if (entradaTexto.value !== "") {
        calcularPrecoBtn.style.display = "inline-block";
    } else {
        calcularPrecoBtn.style.display = "none";
    }
}
//A funcao mostrarCaixaTexto é a primeira pagina, que desativará ou ativará os itens da tela
    function mostrarCaixaTexto(botao) {
	var EntrarTexto = document.getElementById("entradaTexto");
		var TelaLogin = document.getElementById("login");
        var botaoRequisitar = document.getElementById("requisitarBtn");
        var botaoPagar = document.getElementById("pagarBtn");
        var caixaTexto = document.getElementById("caixaTexto");
        var botaoVoltar = document.getElementById("botaoVoltar");
        var botaoRegistar = document.getElementById("botaoRegistar");
        var divPagar = document.getElementById("divPagar");
        var pagamentoBotao = document.getElementById("botaoPagar");
        var calcularPrecoBtn = document.getElementById("calcularPrecoBtn");
		var TelaLogin = document.getElementById("login");
		
		EntrarTexto.style.display = "inline-block";
		TelaLogin.style.display = "none";
        botaoRequisitar.style.display = "none";
        botaoPagar.style.display = "none";
        caixaTexto.style.display = "block";
        botaoVoltar.style.display = "inline-block";
        botaoRegistar.style.display = "inline-block";
        divPagar.style.display = "none";
        pagamentoBotao.style.display = "inline-block";
		TelaLogin.style.display = "none";
        // Definir o valor do campo de entrada de texto com base no botão clicado
        if (botao === 'requisitarBtn') {
            document.getElementById("entradaTexto").value = "Requisitar Vaga";
        } else if (botao === 'pagarBtn') {
            document.getElementById("entradaTexto").value = "Pagar Sua Vaga";
            botaoRegistar.style.display = "none";
            divPagar.style.display = "block";
            calcularPrecoBtn.style.display = "inline-block"; // Exibir o botão "Consultar Valor"
        }
    }
//A funcao registar é a segunda pagina, que desativará ou ativará os itens da tela
    function registar() {
        // Chamando a função que grava o texto
        gravarTexto();
var EntrarTexto = document.getElementById("entradaTexto");
        var botaoRegistar = document.getElementById("botaoRegistar");
        var botaoVoltar = document.getElementById("botaoVoltar");
        var botaoRequisitar = document.getElementById("requisitarBtn");
        var divPagar = document.getElementById("divPagar");
        var caixaTexto = document.getElementById("caixaTexto");
        var botaoPagar = document.getElementById("pagarBtn");
        var calcularPrecoBtn = document.getElementById("calcularPrecoBtn");
		var TelaLogin = document.getElementById("login");
        botaoRequisitar.style.display = "inline-block";
        caixaTexto.style.display = "none";
        botaoRegistar.style.display = "none";
        botaoVoltar.style.display = "none";
        botaoPagar.style.display = "inline-block";
        calcularPrecoBtn.style.display = "none"; // Ocultar o botão "Consultar Valor"
		TelaLogin.style.display = "none";
		EntrarTexto.style.display = "inline-block";
    }
//A funcao registar é a terceira, que desativará ou ativará os itens da tela
    function voltar() {
        var botaoRegistar = document.getElementById("botaoRegistar");
        var botaoVoltar = document.getElementById("botaoVoltar");
        var botaoRequisitar = document.getElementById("requisitarBtn");
        var divPagar = document.getElementById("divPagar");
        var caixaTexto = document.getElementById("caixaTexto");
        var botaoPagar = document.getElementById("pagarBtn");
        var pagamentoBotao = document.getElementById("botaoPagar");
        var calcularPrecoBtn = document.getElementById("calcularPrecoBtn");
		var TelaLogin = document.getElementById("login");
		
        pagamentoBotao.style.display = "inline-block";
        botaoRequisitar.style.display = "inline-block";
        caixaTexto.style.display = "none";
        botaoRegistar.style.display = "none";
        botaoVoltar.style.display = "none";
        botaoPagar.style.display = "inline-block";
        pagamentoBotao.style.display = "none";
        calcularPrecoBtn.style.display = "none"; // Ocultar o botão "Consultar Valor"
		TelaLogin.style.display = "none";
    }
//A funcao calcular preço, fará os parametros de calcular o preço dos dados guardados
    function calcularPreco() {
        var textoDigitado = document.getElementById("entradaTexto").value;
        var precoInicial = 2;
        var aumentoPorHora = 2;

        // Calcule o preço com base no tempo
        var data = new Date();
        var horaAtual = data.getHours();
        var minutosAtuais = data.getMinutes();

        // Suponhamos que a palavra "Pagar Sua Vaga" esteve presente por 1 hora e 30 minutos
        var horasDecorridas = 1;
        var minutosDecorridos = 30;

        var totalMinutos = (horasDecorridas * 60) + minutosDecorridos;
        var valorTotal = precoInicial + (Math.ceil(totalMinutos / 60) - 1) * aumentoPorHora;

        alert("Valor a ser pago: €" + valorTotal);
    }

    function pagar() {
        var textoDigitado = document.getElementById("entradaTexto").value; // Obtém o texto digitado

        // Carregue o sistema de arquivos
        var fso = new ActiveXObject("Scripting.FileSystemObject");
        var filePath = fso.BuildPath(fso.GetSpecialFolder(2), "MeuArquivo.txt");

        if (fso.FileExists(filePath)) {
            var file = fso.OpenTextFile(filePath, 1); // Abre o arquivo em modo de leitura

            var conteudo = "";
            var linha;
            var encontrado = false; // Variável para rastrear se o pagamento foi encontrado

            // Lê o arquivo linha por linha e exclui a linha correspondente
            while (!file.AtEndOfStream) {
                linha = file.ReadLine();
                if (linha === textoDigitado) {
                    encontrado = true; // Pagamento encontrado
                } else {
                    conteudo += linha + "\r\n"; // Adiciona as linhas não correspondentes ao conteúdo
                }
            }

            file.Close(); // Fecha o arquivo

            // Abre o arquivo para gravação e substitui o conteúdo com as linhas restantes
            var fileWrite = fso.OpenTextFile(filePath, 2, true);
            fileWrite.Write(conteudo);
            fileWrite.Close();

            if (conteudo === "") {
                // Se não houver mais registros, você pode apagar o arquivo
                fso.DeleteFile(filePath);
            }

            if (encontrado) {
               alert("Pagamento bem-sucedido!");

            } else {
                alert("Pagamento não encontrado. Verifique se a Matricula está correta.");
            }

            // Agora você pode fazer algo com o registro de pagamento, se desejar
        } else {
            alert("Arquivo não encontrado.");
        }
    }
// Este foi um parametro para criar uma funçao placeholder, ja que nao tinha para HTA
    function limparPlaceholder() {
        var entradaTexto = document.getElementById("entradaTexto");
        if (entradaTexto.value === "Matricula" || entradaTexto.value === "Requisitar Vaga"
            || entradaTexto.value === "Pagar Sua Vaga") {
            entradaTexto.value = "";
            entradaTexto.style.color = "black";
        }
    }
// Este foi um parametro para criar uma funçao placeholder, ja que nao tinha para HTA
    function restaurarPlaceholder() {
        var entradaTexto = document.getElementById("entradaTexto");
        if (entradaTexto.value === "") {
            entradaTexto.value = "Matricula";
            entradaTexto.style.color = "gray";
        }
    }
	
</script>

</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "gerenciador_de_vagas";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão bem-sucedida ao banco de dados!";
} catch (PDOException $e) {
    echo "Erro na conexão com o banco de dados: " . $e->getMessage();
}
?>
</html>