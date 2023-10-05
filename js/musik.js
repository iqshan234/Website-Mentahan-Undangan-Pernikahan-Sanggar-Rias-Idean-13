
    

const myAudio = document.getElementById("my_audio");
    const btn = document.getElementById("btn-playback");
    const btnIcon = document.querySelector("#btn-playback > i");
    
    const toggleMusic = () => {      
      const dataPlay = btn.getAttribute('data-play');
            
      if(dataPlay === 'false') {
        btn.setAttribute('data-play', 'true');
        myAudio.play();
        btnIcon.classList.remove("fa-play");
        btnIcon.classList.add("fa-pause");
        btnText.innerText = "PAUSE";
      } else {
        btn.setAttribute('data-play', 'false');
        myAudio.pause();
        btnIcon.classList.remove("fa-pause");
        btnIcon.classList.add("fa-play");
      }
    };
    
    myAudio.onpause = () => {
      btn.setAttribute('data-play', 'false');
        myAudio.pause();
        btnIcon.classList.remove("fa-pause");
        btnIcon.classList.add("fa-play");
    };
