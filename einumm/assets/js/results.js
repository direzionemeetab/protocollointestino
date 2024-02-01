const survey = new Survey.Model(json);

survey.onComplete.add((sender, options) => {
    console.log(JSON.stringify(sender.data, null, 3));
    const results = JSON.parse(JSON.stringify(sender.data));
    
    good = 0;
    if(results.question1=="Item 3"){good=good+1;}
    if(results.question2=="Item 1"){good=good+1;}
    if(results.question3=="Item 1"){good=good+1;}
    if(results.question4=="Item 2"){good=good+1;}
    if(results.question5=="Item 3"){good=good+1;}
    if(results.question6=="Item 1"){good=good+1;}
    if(results.question7=="Item 2"){good=good+1;}
    if(results.question8=="Item 1"){good=good+1;}
    
    output = (good/8)*100;

    if(output>=80){
        window.location.href = "https://landing.meetabacademy.com/ricevi-certificato-ein/";
    } else {
        window.location.href = "https://landing.meetabacademy.com/test-non-superato/";
    }
});

$("#surveyElement").Survey({ model: survey });