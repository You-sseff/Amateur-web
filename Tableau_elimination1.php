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
        button {
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>

    <h1>Tableau des Matières de 6 absences</h1>

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
                <td>Algorithme et Programmation 2</td>
                <td><span id="compteur1">0</span></td>
                <td>
                    <button class="incrementBtn" id="btnIncrement1" onclick="increment('compteur1', 'message1', 'btnIncrement1')">Clique ici</button>
                    <button class="resetBtn" onclick="reset('compteur1', 'message1', 'btnIncrement1')">Réinitialiser</button>
                </td>
            </tr>
            <tr id="matiere2">
                <td>Fondament des Réseaux</td>
                <td><span id="compteur2">0</span></td>
                <td>
                    <button class="incrementBtn" id="btnIncrement2" onclick="increment('compteur2', 'message2', 'btnIncrement2')">Clique ici</button>
                    <button class="resetBtn" onclick="reset('compteur2', 'message2', 'btnIncrement2')">Réinitialiser</button>
                </td>
            </tr>
            <tr id="matiere3">
                <td>Système D'exploitation</td>
                <td><span id="compteur3">0</span></td>
                <td>
                    <button class="incrementBtn" id="btnIncrement3" onclick="increment('compteur3', 'message3', 'btnIncrement3')">Clique ici</button>
                    <button class="resetBtn" onclick="reset('compteur3', 'message3', 'btnIncrement3')">Réinitialiser</button>
                </td>
            </tr>
        </tbody>
    </table>
    
    <p id="message1" class="message">Tu as été éliminé en Algorithme et Programmation 2</p>
    <p id="message2" class="message">Tu as été éliminé en Fondament des Réseaux</p>
    <p id="message3" class="message">Tu as été éliminé en Système D'exploitation</p>

    <a href="Tableau_elimination.php"><button type="submit">→</button></a>

    <script>
        
        function increment(compteurId, messageId, buttonId) {
            let compteur = parseInt(localStorage.getItem(compteurId)) || 0;

            
            if (compteur < 6) {
                compteur++;
                document.getElementById(compteurId).textContent = compteur;
                localStorage.setItem(compteurId, compteur);
            }

            
            if (compteur >= 6) {
                document.getElementById(messageId).style.display = "block";
                document.getElementById(buttonId).disabled = true;
                localStorage.setItem(messageId);
            }
        }

        // Fonction pour réinitialiser le compteur
        function reset(compteurId, messageId, buttonId) {
            let compteur = 0;
            document.getElementById(compteurId).textContent = compteur;
            localStorage.setItem(compteurId, compteur);
            document.getElementById(messageId).style.display = "none";
            document.getElementById(buttonId).disabled = false;
            localStorage.removeItem(messageId);
        }

        window.onload = function() {
            
            ['compteur1', 'compteur2', 'compteur3'].forEach(compteurId => {
                let compteur = localStorage.getItem(compteurId) || 0;
                document.getElementById(compteurId).textContent = compteur;

                if (compteur >= 6) {
                    let messageId = 'message' + compteurId[compteurId.length - 1];
                    document.getElementById(messageId).style.display = "block";
                    document.getElementById(compteurId).parentNode.querySelector(".incrementBtn").disabled = true;
                }

                // Si l'état du message est enregistré, affichez-le même après un rafraîchissement
                if (localStorage.getItem('message' + compteurId[compteurId.length - 1]) === "affiche") {
                    let messageId = 'message' + compteurId[compteurId.length - 1];
                    document.getElementById(messageId).style.display = "block";
                    document.getElementById(compteurId).parentNode.querySelector(".incrementBtn").disabled = true;
                }
            });
        };
    </script>

</body>
</html>
