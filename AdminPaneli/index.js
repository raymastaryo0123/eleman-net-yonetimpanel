const file = document.getElementById('file')
preview = document.querySelector('.preview')

file.addEventListener('change', function() {
    [...this.files].map(file => {
        if (file.name.match(/\.jpe?g|png|gif|/)) {
            const reader = new FileReader()

            reader.addEventListener('load', function(){
                  const image = new Image(300, 300)
                  image.src = this.result
                  preview.appendChild(image);
            });
            reader.readAsDataURL(file); 
        }
         if (file.name.match(/\.mp4/)) {
            const reader = new FileReader()
            reader.addEventListener('load', function(){
                const video = document.createElement('video')
                video.width = 320
                video.height = 180
                video.controls = true
                video.src = this.result
                preview.appendChild(video)

            });
            reader.readAsDataURL(file)
        }
    });
});

