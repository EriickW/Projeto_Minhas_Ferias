click_to_record.addEventListener('click',function(){
    let speech = true;
    window.SpeechRecognition = window.webkitSpeechRecognition;

    const recognition = new SpeechRecognition();
    recognition.interimResults = true;
    recognition.continuous = true;
    recognition.lang = 'pt-BR';

    recognition.addEventListener('result', e => {
        const transcript = Array.from(e.results)
            .map(result => result[0])
            .map(result => result.transcript)
            .join('')

        let test = document.getElementById("convert_text").innerHTML = transcript;
        document.getElementById("show_text").innerHTML = test;
    })
    
    if (speech == true) {
        recognition.start();
        
    }
})