<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Matières et Compteurs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
            background-color: #f4f4f4;
        }
        h1 {
            color: #333;
        }
        table {
            width: 60%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: center;
        }
        th {
            background-color: #28a745;
            color: white;
        }
        button {
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }
        .incrementBtn {
            background-color: #28a745;
            color: white;
        }
        .resetBtn {
            background-color: #dc3545;
            color: white;
        }
        .message {
            font-size: 22px;
            color: red;
            font-weight: bold;
            display: none;
        }
        button{
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>

    <h1>Tableau des Matières de 4 abscenses</h1>

    <table>
        <thead>
            <tr>
                <th>Matière</th>
                <th>Compteur</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <tr id="matiere1">
                <td>Anglais 2</td>
                <td><span id="compteur1">0</span></td>
                <td>
                    <button class="incrementBtn" id="btnIncrement1" onclick="increment('compteur1', 'message1', 'btnIncrement1')">Clique ici</button>
                    <button class="resetBtn" onclick="reset('compteur1', 'message1', 'btnIncrement1')">Réinitialiser</button>
                </td>
            </tr>
            <tr id="matiere2">
                <td>Developpement Web 2</td>
                <td><span id="compteur2">0</span></td>
                <td>
                    <button class="incrementBtn" id="btnIncrement2" onclick="increment('compteur2', 'message2', 'btnIncrement2')">Clique ici</button>
                    <button class="resetBtn" onclick="reset('compteur2', 'message2', 'btnIncrement2')">Réinitialiser</button>
                </td>
            </tr>

            <tr id="matiere3">
                <td>Initiation à la Conception</td>
                <td><span id="compteur3">0</span></td>
                <td>
                    <button class="incrementBtn" id="btnIncrement3" onclick="increment('compteur3', 'message3', 'btnIncrement3')">Clique ici</button>
                    <button class="resetBtn" onclick="reset('compteur3', 'message3', 'btnIncrement3')">Réinitialiser</button>
                </td>
            </tr>

            <tr id="matiere4">
                <td>Programmation Python 2</td>
                <td><span id="compteur4">0</span></td>
                <td>
                    <button class="incrementBtn" id="btnIncrement4" onclick="increment('compteur4', 'message4', 'btnIncrement4')">Clique ici</button>
                    <button class="resetBtn" onclick="reset('compteur4', 'message4', 'btnIncrement4')">Réinitialiser</button>
                </td>
            </tr>

            <tr id="matiere5">
                <td>Préparation aux métiers</td>
                <td><span id="compteur5">0</span></td>
                <td>
                    <button class="incrementBtn" id="btnIncrement5" onclick="increment('compteur5', 'message5', 'btnIncrement5')">Clique ici</button>
                    <button class="resetBtn" onclick="reset('compteur5', 'message5', 'btnIncrement5')">Réinitialiser</button>
                </td>
            </tr>

            <tr id="matiere6">
                <td>Recherche Operationelle</td>
                <td><span id="compteur6">0</span></td>
                <td>
                    <button class="incrementBtn" id="btnIncrement6" onclick="increment('compteur6', 'message6', 'btnIncrement6')">Clique ici</button>
                    <button class="resetBtn" onclick="reset('compteur6', 'message6', 'btnIncrement6')">Réinitialiser</button>
                </td>
            </tr>

            <tr id="matiere7">
                <td>Statistique et Propabilité</td>
                <td><span id="compteur7">0</span></td>
                <td>
                    <button class="incrementBtn" id="btnIncrement7" onclick="increment('compteur7', 'message7', 'btnIncrement7')">Clique ici</button>
                    <button class="resetBtn" onclick="reset('compteur7', 'message7', 'btnIncrement7')">Réinitialiser</button>
                </td>
            </tr>

            <tr id="matiere8">
                <td>Technique d'expression</td>
                <td><span id="compteur8">0</span></td>
                <td>
                    <button class="incrementBtn" id="btnIncrement8" onclick="increment('compteur8', 'message8', 'btnIncrement8')">Clique ici</button>
                    <button class="resetBtn" onclick="reset('compteur8', 'message8', 'btnIncrement8')">Réinitialiser</button>
                </td>
            </tr>

           
            
        </tbody>
    </table>
    
    <p id="message1" class="message">Tu as été éliminé en Anglais 2 </p>
    <p id="message2" class="message">Tu as été éliminé en Developpement Web 2 </p>
    <p id="message3" class="message">Tu as été éliminé en Initiation à la Conception </p>
    <p id="message4" class="message">Tu as été éliminé en Programmation Python 2 </p>
    <p id="message5" class="message">Tu as été éliminé en Préparation aux métiers </p>
    <p id="message6" class="message">Tu as été éliminé en Recherche Operationelle </p>
    <p id="message7" class="message">Tu as été éliminé en Statistique et Propabilité </p>
    <p id="message8" class="message">Tu as été éliminé en Technique d'expression </p>

    <a href="Tableau_elimination1.php"><button type="submit">→</button></a>

    <script>
        
        function increment(compteurId, messageId, buttonId) {
            let compteur = parseInt(localStorage.getItem(compteurId)) || 0;
            
            if (compteur < 4) {
                compteur++;
                document.getElementById(compteurId).textContent = compteur;
                localStorage.setItem(compteurId, compteur);
            }

            
            if (compteur >= 4) {
                document.getElementById(messageId).style.display = "block";
                document.getElementById(buttonId).disabled = true;
            }
        }

        
        function reset(compteurId, messageId, buttonId) {
            let compteur = 0;
            document.getElementById(compteurId).textContent = compteur;
            localStorage.setItem(compteurId, compteur);
            document.getElementById(messageId).style.display = "none";
            document.getElementById(buttonId).disabled = false;
        }

        
        window.onload = function() {
            ['compteur1','compteur2', 'compteur3','compteur4','compteur5','compteur6','compteur7','compteur8'].forEach(compteurId => {
                let compteur = localStorage.getItem(compteurId) || 0;
                document.getElementById(compteurId).textContent = compteur;

                
                if (compteur >= 4) {
                    let messageId = 'message' + compteurId[compteurId.length - 1];
                    document.getElementById(messageId).style.display = "block";
                    document.getElementById(compteurId).parentNode.querySelector(".incrementBtn").disabled = true;
                }
            });
        };
    </script>

</body>
</html>

