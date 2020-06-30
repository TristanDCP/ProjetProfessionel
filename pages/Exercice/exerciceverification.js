let testAnswers = ["Bonjour", "bonjour", "au revoir", "Au revoir", "Au Revoir"];
let answers = document.getElementById("testtext");

verifInput.onclick = function checkFirstTest(testAnswers){
    if (answers == testAnswers){
        console.log("Bonne réponse!")
    } else {
        console.log("Mauvaise réponse")
    }
}

// VOIR LES MATCHS