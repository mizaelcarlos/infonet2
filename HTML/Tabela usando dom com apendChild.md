<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table id="brasileirao">
        <thead>
            <tr>
                <th>Classificação</th>
                <th>Pontos</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Dados que serão inseridos na tabela
            const dados = [
                { time: "Botafogo", pontos: 53},
                { time: "Palmeiras", pontos: 50 },
                { time: "Fortaleza", pontos: 49 },
                { time: "Flamengo", pontos: 45 }
            ];

            // Seleciona o corpo da tabela
            const tabelaBody = document.querySelector("#brasileirao tbody");

            // Cria uma linha para cada item nos dados
            dados.forEach(dado => {
                const tr = document.createElement("tr");

                const tdTime = document.createElement("td");
                tdTime.textContent = dado.time;
                tr.appendChild(tdTime);

                const tdPontos = document.createElement("td");
                tdPontos.textContent = dado.pontos;
                tr.appendChild(tdPontos);

                tabelaBody.appendChild(tr);
            });
        });
    </script>
</body>
</html>
