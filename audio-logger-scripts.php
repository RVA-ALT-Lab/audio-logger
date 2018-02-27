<script type="text/javascript">
    (function(){
        var gFormWrapper = document.querySelector('#gform_wrapper_1')
        var userNameInput = document.querySelector('#input_1_1')
        var audioFileInput = document.querySelector('#input_1_11')


        gFormWrapper.style.display = 'none'
        var user = window.location.search.split('=')[1]

        if (!user){
            window.alert("It looks like you're not using the unique URL we gave you for this study. We won't be able to track your practice without it. Please contact the study administrator to get your unique link.")
        }
        var currentAudioTrack,
            startTime,
            endTime,
            duration,
            timestamp

        var audioElements = document.querySelectorAll('audio')
        var audioElementsArray = Array.from(audioElements)

        audioElementsArray.forEach(function(element){
            element.addEventListener('play', startPlayingAudio)
            element.addEventListener('ended', stopPlayingAudio)
        })

        function startPlayingAudio(event){
            currentAudioTrack = this.src
        }

        function stopPlayingAudio(){
            gFormWrapper.style.display = 'block'
            userNameInput.value = user
            audioFileInput.value = currentAudioTrack
        }



    })()

</script>