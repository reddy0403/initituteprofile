function getBotResponse(input) {
    //rock paper scissors
    if (input == "rock") {
        return "paper";
    } else if (input == "paper") {
        return "scissors";
    } else if (input == "scissors") {
        return "rock";
    }

    // Simple responses
    if (input == "hello") {
        return "Hello there!";
    } else if (input == "goodbye") {
        return "Talk to you later!";
    }
    else if(input=="Which course should I choose ?"){
        return "doyou know basics";
    
    }
    else if (input=="yes"){
    return "I suggest you to choose python";}
    
    else if(input=="no"){
        return"then start with c or java";
    }
    else {
        return "Try asking something else!";
    }
    
    

    
}